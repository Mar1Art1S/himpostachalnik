<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\OrderForm;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;

class Order extends Component
{
    use WithRateLimiting;

    public $product;

    public OrderForm $order;


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


