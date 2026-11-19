<?php

namespace App\View;

use Illuminate\View\Compilers\BladeCompiler;

class CustomBladeCompiler extends BladeCompiler
{
    /**
     * The token ID used by the lexer for inline HTML.
     */
    protected ?int $inlineHtmlTokenId = null;

    /**
     * Parse the tokens from the template.
     *
     * @param  array  $token
     * @return string
     */
    protected function parseToken($token)
    {
        [$id, $content] = $token;

        if ($this->inlineHtmlTokenId === null) {
            $first = token_get_all('a')[0] ?? null;
            $this->inlineHtmlTokenId = is_array($first) ? $first[0] : (defined('T_INLINE_HTML') ? T_INLINE_HTML : 267);
        }

        if ($id == T_INLINE_HTML || $id == $this->inlineHtmlTokenId) {
            foreach ($this->compilers as $type) {
                $content = $this->{"compile{$type}"}($content);
            }
        }

        return $content;
    }
}
