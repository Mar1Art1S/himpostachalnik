<?php

namespace App\Livewire;

use App\Livewire\Forms\SubscribeForm;
use Livewire\Component;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;

class Subscribe extends Component
{
    use WithRateLimiting;

    public SubscribeForm $form;

    public function save()
    {
        try {
            $this->rateLimit(3); // 3 запити на хвилину
        } catch (TooManyRequestsException $exception) {
            $this->addError('form.email', __('Занадто багато спроб. Спробуйте пізніше.'));
            return;
        }

        $this->form->store();

        session()->flash('subscribe-success');
    }

    public function render()
    {
        return view('livewire.subscribe');
    }
}
