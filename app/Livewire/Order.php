<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use App\Mail\OrderShipped;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Order extends Component
{
    use WithRateLimiting;

    public $product;

    public OrderForm $order;

    public function mount($product = null): void
    {
        if (is_array($product)) {
            $this->product = $product[app()->getLocale()] ?? reset($product) ?: '';
        } else {
            $this->product = (string) ($product ?? '');
        }
    }

    public function save()
    {
        try {
            $this->rateLimit(3); // 3 запити на хвилину
        } catch (TooManyRequestsException $exception) {
            $this->addError('order.fio', __('Занадто багато спроб. Спробуйте пізніше.'));

            return;
        }

        $this->order->store($this->product);
        $this->sendToMail();

        session()->flash('order-success');
    }

    public function sendToMail(): void
    {
        Mail::to(config('services.admin.email'))->send(new OrderShipped($this->order->all()));
    }

    public function render()
    {
        return view('livewire.order');

    }
}
