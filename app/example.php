<?php

namespace Ex;

class Exam
{
    public $name;
    public $email;

    public function __construct($n, $m)
    {
        $this->name = $n;
        $this->email = $m;
    }

    public function fromattedEmail()
    {
        echo "{$this->name}<{$this->email}>";
    }
}
