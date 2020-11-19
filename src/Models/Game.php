<?php

namespace App\Models;

class Game extends Rules implements iPlay
{
    public function __construct(string $choice1, string $choice2)
    {
        $this->choice1 = $choice1;
        $this->choice2 = $choice2;
    }

    public function play()
    {
       return $this->rules($this->choice1, $this->choice2);
       
    }
}