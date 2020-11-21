<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Models\Game;


class RockPaperScissorsTest extends TestCase {

	public function test_return_tied_game()
	{
		$game = new Game('rock','rock');
		$result = $game->play();
		
		$this->assertEquals('tied game', $result);
	}
	public function test_return_rock_wins()
	{
		$game = new Game('rock','scissors');
		$result = $game->play();
		
		$this->assertEquals('rock wins', $result);
	}
	public function test_return_paper_wins()
	{
		$game = new Game('paper','rock');
		$result = $game->play();
		
		$this->assertEquals('paper wins', $result);
	}
	public function test_return_scissors_wins()
	{
		$game = new Game('scissors','paper');
		$result = $game->play();
		
		$this->assertEquals('scissors wins', $result);
	}

	public function test_return_scissors_win()
	{
		$game = new Game('scissors','lizzard');
		$result = $game->play();
		
		$this->assertEquals('scissors win', $result);
	}

	public function test_return_spock_win()
	{
		$game = new Game('spock','rock');
		$result = $game->play();
		
		$this->assertEquals('spock wins', $result);
	}

	public function test_return_lizzard_wins()
	{
		$game = new Game('lizzard','paper');
		$result = $game->play();
		
		$this->assertEquals('lizzard wins', $result);
	}

	public function test_return_spock_wins()
	{
		$game = new Game('spock','scissors');
		$result = $game->play();
		
		$this->assertEquals('spock wins', $result);
	}
}