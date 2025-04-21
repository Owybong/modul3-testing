<?php
namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
class LoginTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type(field: 'email', value: 'owy0107@gmail.com')
                    ->type(field: 'password', value: '1234')
                    ->press(button: 'LOG IN');
        });
    }
}