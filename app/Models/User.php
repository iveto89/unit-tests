<?php

namespace App\Models;

class User
{
    protected $first_name;

    protected $email;

    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEmailVariables()
    {
        return [
            'first_name' => $this->getFirstName(),
            'email' => $this->getEmail(),
        ];
    }
}