<?php
namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
class LogoutTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                    ->visit('/login')
                    ->type(field: 'email', value: 'owy0107@gmail.com')
                    ->type(field: 'password', value: '1234')
                    ->press(button: 'LOG IN')
                    ->visit('/notes')
                    // ->waitFor('#add-note-button', 5)
                    ->press('#delete-1');
                    // ->assertPath('/notes')
                    // ->press('Create Note')
                    // ->type('title','test1')
                    // ->type('description','testisi')
                    // ->press('UPDATE');
        });
    }
}