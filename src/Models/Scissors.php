<?php

namespace App\Models;

class Scissors implements iPlay
{
    public function __construct($opponent)
    {
        $this->opponent = $opponent;
        $this->result = $this->play();
    }

    public function play()
    {
        if ($this->opponent === 'rock')
        {
           return $this->result = 'rock wins';
            
        }
        if ($this->opponent=== 'paper')
        {
           return $this->result = 'scissors wins';
            
        }

        if ($this->opponent === 'lizzard')
        {
           return $this->result = 'scissors win';
            
        }

        if ($this->opponent === 'spock')
        {
           return $this->result = 'spock win';
            
        }       
    }

}