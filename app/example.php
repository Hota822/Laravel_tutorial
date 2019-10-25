<?php

namespace Ex;

class Exam
{
    public $name;
    public $email;

    public function __construct($na, $em)
    {
        $this->name = $na;
        $this->email = $em;
    }

    public function fromattedEmail()
    {
        echo "{$this->name}<{$this->email}>";
    }
}
