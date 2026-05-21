<?php

namespace Tests\Feature;

use App\Mail\CallbackRequestMail;
use App\Mail\ContactMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class HeaderFormsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test callback request form submits successfully and sends email.
     */
    public function test_callback_request_submits_successfully_and_sends_email(): void
    {
        Mail::fake();

        $response = $this->post(route('callback.request'), [
            'name' => 'Іван Тест',
            'phone' => '+380501234567',
            'message' => 'Тестове повідомлення',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('callback-success');

        Mail::assertSent(CallbackRequestMail::class, function (CallbackRequestMail $mail) {
            return $mail->data['name'] === 'Іван Тест' &&
                   $mail->data['phone'] === '+380501234567' &&
                   $mail->data['message'] === 'Тестове повідомлення';
        });
    }

    /**
     * Test callback request validation fails on empty fields.
     */
    public function test_callback_request_validation_fails_on_empty_fields(): void
    {
        Mail::fake();

        $response = $this->post(route('callback.request'), [
            'name' => '',
            'phone' => '',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasErrors(['name', 'phone'], null, 'callback');

        Mail::assertNothingSent();
    }

    /**
     * Test contact send submits successfully and sends email.
     */
    public function test_contact_send_submits_successfully_and_sends_email(): void
    {
        Mail::fake();

        $response = $this->post(route('contact.send'), [
            'name' => 'Олена Тест',
            'phone' => '+380671234567',
            'email' => 'olena@example.com',
            'message' => 'Коментар контакту',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('contact-success');

        Mail::assertSent(ContactMail::class, function (ContactMail $mail) {
            return $mail->data['name'] === 'Олена Тест' &&
                   $mail->data['phone'] === '+380671234567' &&
                   $mail->data['email'] === 'olena@example.com' &&
                   $mail->data['message'] === 'Коментар контакту';
        });
    }

    /**
     * Test contact send validation fails on invalid email and empty fields.
     */
    public function test_contact_send_validation_fails_on_invalid_email_and_empty_fields(): void
    {
        Mail::fake();

        $response = $this->post(route('contact.send'), [
            'name' => '',
            'phone' => '',
            'email' => 'invalid-email',
            'message' => '',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasErrors(['name', 'phone', 'email', 'message'], null, 'contact');

        Mail::assertNothingSent();
    }
}
