<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    protected $user;

    public function setUp(): void
    {
        $this->user = new App\Models\User;
    }

    /** @test */
    public function thatWeCanGetTheFirstName()
    {
        $this->user->setFirstName('Billy');

        $this->assertEquals($this->user->getFirstName(), 'Billy');
    }

    public function testEmailAddressCanBeSet()
    {
        $email ='billy@ivanikolova.eu';

        $this->user->setEmail($email);

        $this->assertEquals($this->user->getEmail(), $email);
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $this->user->setFirstName('Billy');

        $this->user->setEmail('billy@ivanikolova.eu');

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('first_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['first_name'], 'Billy');
        $this->assertEquals($emailVariables['email'], 'billy@ivanikolova.eu');
    }
}