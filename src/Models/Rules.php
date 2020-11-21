<?php

namespace App\Models;

class Rules 
{
  public string $winner;
    
    public function rules($choice1, $choice2)
    {
        if ($choice1 === 'rock')

            {
                switch($choice1 === 'rock')
                {
                    case ($choice2 === 'paper'):
                        $winner = 'paper wins';
                        break;
                    case ($choice2 === 'scissors'):
                        $winner ='rock wins';
                        break;
                    case ($choice2 === 'rock'):
                        $winner = 'tied game';
                        break;
                    case ($choice2 === 'lizzard'):
                        $winner = 'rock wins';
                        break;
                    case ($choice2 === 'spock'):
                        $winner = 'spock wins';
                        break;
                }
            
                return $winner;
            }
        if ($choice1 === 'paper')
        {
            switch($choice1 === 'paper')
                {
                    case ($choice2 === 'paper'):
                        $winner = 'tied game';
                        break;
                    case ($choice2 === 'scissors'):
                        $winner ='scissors wins';
                        break;
                    case ($choice2 === 'rock'):
                        $winner = 'paper wins';
                        break;
                    case ($choice2 === 'lizzard'):
                        $winner = 'lizzard wins';
                        break;
                    case ($choice2 === 'spock'):
                        $winner = 'paper wins';
                        break;
                }
                return $winner;            
        } 
        if ($choice1 === 'scissors')
        {
            switch($choice1 === 'scissors')
                {
                    case ($choice2 === 'paper'):
                        $winner = 'scissors wins';
                        break;
                    case ($choice2 === 'scissors'):
                        $winner ='tied game';
                        break;
                    case ($choice2 === 'rock'):
                        $winner = 'rock wins';
                        break;
                    case ($choice2 === 'spock'):
                        $winner = 'spock wins';
                        break;
                    case ($choice2 === 'lizzard'):
                        $winner = 'scissors win';
                        break;

                }
                return $winner;     
        }       
        if ($choice1 === 'lizzard')
        {
            switch($choice1 === 'lizzard')
                {
                    case ($choice2 === 'paper'):
                        $winner = 'lizzard wins';
                        break;
                    case ($choice2 === 'lizzard'):
                        $winner ='tied game';
                        break;
                    case ($choice2 === 'rock'):
                        $winner = 'rock wins';
                        break;
                    case ($choice2 === 'spock'):
                        $winner = 'lizzard wins';
                        break;
                    case ($choice2 === 'scissors'):
                        $winner = 'scissors win';
                        break;
                }
                return $winner;     
        }       
        if ($choice1 === 'spock')
        {
            switch($choice1 === 'spock')
                {
                    case ($choice2 === 'paper'):
                        $winner = 'paper wins';
                        break;
                    case ($choice2 === 'spock'):
                        $winner ='tied game';
                        break;
                    case ($choice2 === 'rock'):
                        $winner = 'spock wins';
                        break;
                    case ($choice2 === 'scissors'):
                        $winner = 'spock wins';
                        break;
                    case ($choice2 === 'lizzard'):
                        $winner = 'lizzard wins';
                        break;
                }
                return $winner;     
        }       
        
    }

}