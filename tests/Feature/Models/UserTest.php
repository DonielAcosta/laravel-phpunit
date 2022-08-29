<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
  /**
   * A basic feature test example.
   *
   * @return void
   */
  public function test_example()
  {

       User::factory()->create([
        'email' => 'doni@admin.com'
       ]);
      $this->assertDatabaseHas('users',[
        'email' => 'doni@admin.com'
      ]);

      $this->assertDatabaseHas('users',[
        'email' => 'no@admin.com'
      ]);
      
  }
}
