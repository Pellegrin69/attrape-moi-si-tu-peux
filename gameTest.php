<?php

use PHPUnit\Framework\TestCase;
require_once("Game.php");

class GameTest extends TestCase
{
    public function testNewGame() {
        $this->assertInstanceOf(Game::class, new Game());
    }

    public function testGameHaveTwoPlayers() {
        $game = new Game();
        $game->setPlayerOne(new Player());
        $game->setPlayerTwo(new Player());

        $playerOne = $game->getPlayerOne();
        $playerTwo = $game->getPlayerTwo();

        $this->assertInstanceOf(Player::class, $playerOne);
        $this->assertInstanceOf(Player::class, $playerTwo);
    }

    public function testCreateGameBoard()
    {
        $game = new Game();
        $board = $game->createGameBoard();

        $this->assertCount(10, $board);
        foreach ($board as $row) {
            $this->assertCount(10, $row);
        }
    }
}

