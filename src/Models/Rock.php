<?php

namespace App\Models;

class Rock implements iPlay
{
    public function __construct($opponent)
    {
        $this->opponent = $opponent;
        $this->result = $this->play();
    }

    public function play()
    {
        if ($this->opponent === 'paper')
        {
            return $this->result  = 'paper wins';
           
        }
        if ($this->opponent === 'scissors')
        {
            return $this->result = 'rock wins';
           
        }
        if ($this->opponent === 'lizzard')
        {
            return $this->result  = 'rock wins';
           
        }
        if ($this->opponent === 'spock')
        {
            return $this->result = 'spock wins';
            
        }
    }
}