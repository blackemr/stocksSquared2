<?php

namespace Tests\Unit;
use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

// All other tests for databse can be done by simply changing some names in these tests.

class CreateProfileTest extends TestCase
{

    use DatabaseMigrations;

    protected $role;

    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test 1 */
    // This test tests the user database
    private function makeTestCreateProfile() {
        $name = factory(User::class)->make();
        return $name;
    }

    // This test tests create an user
    public function testCreateUser() {
        $user = $this->makeTestCreateProfile();
        $this->assertInstanceOf(User::class, $user);
        $this->assertTrue($user->save());
        $user->delete();
    }

    // This test tests read an user
    public function testReadUser() {

        $user = $this->makeTestCreateProfile();
        $user->save();
        $this->assertNotNull(User::find(1));
        $user->delete();
    }

    // This test tests update an user
    public function testUpdateUser() {
        $user = $this->makeTestCreateProfile();
        $user->save();
        $user->name = 'testName';
        $user->save();
        $this->assertEquals(User::find(1)['name'], 'testName');
        $user->delete();

    }

    // This test tests delete an user
    public function testDeleteUser() {
        $user = $this->makeTestCreateProfile();
        $user->save();
        $this->assertTrue($user->delete());

    }

    /** @test 2 */
    // This test tests if there is a user with the list is in the database now
    // This test fails now because there is no user named Testname in the DB

    /** @test 3 */
    // This test tests login system
    public function testLogin()
    {
        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'TestPassword'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }

    /** @test 4 */
    // This test tests if a user is not an admin
    // This test fails now because there is no admin now
    public function a_default_user_is_not_an_admin()
    {
        $user = factory(User::class)->create();

        $this->assertFalse($user->is_admin());
    }

    /** @test 5 */
    // This test tests if a user is an admin
    // This test fails now because there is no admin now
    // public function an_admin_user_is_an_admin()
    // {
    //     $admin = factory(User::class)
    //         ->states('admin')
    //         ->create();

    //     $this->assertTrue($admin->is_admin());
    // }

    /** @test 6 */
    // This test tests the profile database
    private function makeTestProfile() {
        $name = factory(User::class)->make();
        return $name;
    }

    // This test tests create profile
    public function testCreateProfile() {
        $profile = $this->makeTestProfile();
        $this->assertInstanceOf(User::class, $profile);
        $this->assertTrue($profile->save());
        $profile->delete();
    }

    // This test tests read profile
    public function testReadProfile() {

        $profile = $this->makeTestProfile();
        $profile->save();
        $this->assertNotNull(User::find(1));
        $profile->delete();
    }

    // This test tests update profile
    public function testUpdateProfile() {
        $profile = $this->makeTestProfile();
        $profile->save();
        $profile->name = 'testName';
        $profile->save();
        $this->assertEquals(User::find(1)['name'], 'testName');
        $profile->delete();

    }

    // This test tests delete profile
    public function testDeleteProfile() {
        $profile = $this->makeTestProfile();
        $profile->save();
        $this->assertTrue($profile->delete());
    }
}
