<?php
namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
class RegisterTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                    ->visit('/register')
                    ->type(field: 'name', value: 'owy0107m')
                    ->type(field: 'email', value: 'owy0107@gmail.com')
                    ->type(field: 'password', value: '1234')
                    ->type(field: 'password_confirmation', value: '1234')
                    ->press(button: 'REGISTER');
        });
    }
}