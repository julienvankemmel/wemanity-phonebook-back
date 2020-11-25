<?php

namespace App\Test\Unit;

use App\Entity\Phonebook;
use PHPUnit\Framework\TestCase;

class PhonebookTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->phonebook = new Phonebook();
    }

    public function testFirstname(){
        $firstname = "Julien";
        $response = $this->phonebook->setFirstname($firstname);

        $this->assertInstanceOf(Phonebook::class, $response);
        $this->assertEquals($firstname, $this->phonebook->getFirstname());
    }

    public function testLastname(){
        $lastname = "Vankemmel";
        $response = $this->phonebook->setLastname($lastname);

        $this->assertInstanceOf(Phonebook::class, $response);
        $this->assertEquals($lastname, $this->phonebook->getLastname());
    }
    
    public function testPhone(){
        $phone = "+33 7 123456";
        $response = $this->phonebook->setPhone($phone);

        $this->assertInstanceOf(Phonebook::class, $response);
        $this->assertEquals($phone, $this->phonebook->getPhone());
    }
}