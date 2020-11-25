<?php

namespace App\Models;

class Game
{
    private string $result;

    public function __construct(string $choice1, string $choice2)
    {
        $this->startGame($choice1, $choice2);
    }
    
    public function startGame($choice1, $choice2)
    {

        if ($choice1 === $choice2){
            $this->result = 'tied game';
            return $this->getResult();
        }
        
        if ($choice1 === 'rock')
        {
            $rock = new Rock($choice2);
            $this->result = $rock->play();
            return $this->getResult();
        }

       if ($choice1 === 'paper')
        {
            $paper = new Paper($choice2);
            $this->result = $paper->play();
            return $this->getResult();
        }

        if ($choice1 === 'scissors'){
            $scissors = new Scissors($choice2);
            $this->result = $scissors->play();
            return $this->getResult();
        }

        if ($choice1 === 'lizzard'){
            $lizzard = new Lizzard($choice2);
            $this->result = $lizzard->play();
            return $this->getResult();
        }

        if ($choice1 === 'spock'){
            $spock = new Spock($choice2);
            $this->result = $spock->play();
            return $this->getResult();
        }
    
    }
    public function getResult()
    {
        return $this->result;
    }
    
}