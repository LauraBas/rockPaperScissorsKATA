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
}