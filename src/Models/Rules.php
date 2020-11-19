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
                }
            
                return $winner;
            }
        else if ($choice1 === 'paper')
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
                }
                return $winner;            
        } 
        else
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
                }
                return $winner;     
        }       
        
    }

}