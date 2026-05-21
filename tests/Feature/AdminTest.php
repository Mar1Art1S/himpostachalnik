<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that guests are redirected to the admin login page.
     */
    public function test_guests_are_redirected_to_admin_login(): void
    {
        $response = $this->get('/admin/article-categories');

        $response->assertRedirect('/admin/login');
    }

    /**
     * Test that authenticated users can load the article categories page.
     */
    public function test_authenticated_users_can_visit_article_categories_page(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/article-categories');

        $response->assertStatus(200);
    }
}
