<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use App\Models\Game;


class GameTest extends TestCase {

    
    public function test_return_tied_when_two_rocks() 
    {
        // given
        $game = new Game("rock", "rock");

        // when
        $result = $game->getResult();

        // then
        $expected = "tied game";
        $this->assertEquals($expected, $result);

    } 
    
    public function test_return_tied_when_two_papers() 
   
    {
        // given
        $game = new Game("paper", "paper");

        // when
        $result = $game->getResult();

        // then
        $expected = "tied game";
        $this->assertEquals($expected, $result);

    }

    public function test_return_paper_wins_when_opponent_is_rock() 
   
    {
        // given
        $game = new Game("paper", "rock");

        // when
        $result = $game->getResult();

        // then
        $expected = "paper wins";
        $this->assertEquals($expected, $result);

    }

    public function test_return_rock_wins_when_opponent_are_scissors() 
    {
        // given
        $game = new Game("rock", "scissors");

        // when
        $result = $game->getResult();

        // then
        $expected = "rock wins";
        $this->assertEquals($expected, $result);

    }

    public function test_return_rock_wins_when_scissors_are_choice1()
    {
        // given
        $game = new Game("scissors", "rock");

        // when
        $result = $game->getResult();

        // then
        $expected = "rock wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_lizzard_wins_when_opponent_is_paper()
    {
        // given
        $game = new Game("lizzard", "paper");

        // when
        $result = $game->getResult();

        // then
        $expected = "lizzard wins";
        $this->assertEquals($expected, $result);
      
    }

    public function test_return_spock_wins_when_opponent_is_rock()
    {
        // given
        $game = new Game("spock", "rock");

        // when
        $result = $game->getResult();

        // then
        $expected = "spock wins";
        $this->assertEquals($expected, $result);
      
    }

    public function test_return_lizzard_wins_when_spock_is_opponent()
    {
        // given
        $game = new Game("lizzard", "spock");

        // when
        $result = $game->getResult();

        // then
        $expected = "lizzard wins";
        $this->assertEquals($expected, $result);      
    }

}