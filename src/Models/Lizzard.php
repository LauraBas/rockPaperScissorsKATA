<?php

namespace App\Models;

class Lizzard implements iPlay
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
        if ($this->opponent === 'paper')
        {
            return $this->result = 'lizzard wins';
            
        }
        if ($this->opponent === 'scissors')
        {
            return $this->result = 'scissors win';
            
        }        
        if ($this->opponent === 'spock')
        {
            return $this->result = 'lizzard wins';
            
        }    
    }

}