<?php
namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
class NotesTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group notes
     */
    public function testNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                    ->visit('/login')
                    ->type(field: 'email', value: 'owy0107@gmail.com')
                    ->type(field: 'password', value: '1234')
                    ->press(button: 'LOG IN')
                    ->visit('/dashboard')
                    ->clickLink('Notes')
                    // ->assertPath('/notes')
                    ->clickLink('Create Note')
                    ->type('title','test2')
                    ->type('description','testisi')
                    ->press('CREATE');
        });
    }
}