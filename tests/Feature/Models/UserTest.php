<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase; //migrate

    public function test_user()
    {
        //Proceso
        User::factory()->create([
            'email' => 'pedro@gmail.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'pedro@gmail.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'ni@existe.com'
        ]);
    }
}
