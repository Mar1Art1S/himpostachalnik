<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap.xml';

    public function handle(): void
    {
        $sitemap = Sitemap::create();

        // Статичні сторінки
        $pages = [
            '/',
            '/about',
            '/projects',
            '/shipping',
            '/contact',
            '/blog',
        ];

        foreach ($pages as $page) {

            $sitemap->add(
                Url::create(url($page))
                    ->setPriority(0.9)
            );
        }

        // Статті
        Article::query()
            ->latest()
            ->get()
            ->each(function ($article) use ($sitemap) {

                $sitemap->add(
                    Url::create(
                        route('article.show', [
                            'category' => $article->category->slug,
                            'article' => $article->slug,
                        ])
                    )
                        ->setLastModificationDate($article->updated_at)
                        ->setPriority(0.8)
                );
            });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
