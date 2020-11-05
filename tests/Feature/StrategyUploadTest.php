<?php

namespace Tests\Feature;
use App\User;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StrategyUploadTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp(): void {
        parent::setUp();
    }

    private function makeTestUserCreation() {
        $user = factory(User::class)->make();
        $user->save();
        return $user;
    }

    public function test_creatation_of_a_user() {
        $user = $this->makeTestUserCreation();
        $this->assertInstanceOf(User::class, $user);
        $this->assertTrue($user->save());
        $user->delete();
    }
}
