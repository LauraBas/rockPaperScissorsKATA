<?php
namespace App\Models;

class Paper implements iPlay
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
            return $this->result = 'paper wins';
            
        }

        if ($this->opponent  === 'scissors')
        {
            return $this->result = 'scissors wins';
            
        }

        if ($this->opponent  === 'lizzard')
        {
            return $this->result = 'lizzard wins';
            
        }

        if ($this->opponent  === 'spock')
        {
           return $this->result = 'paper wins';
            
        }
           
    }
}