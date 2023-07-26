<?php

use PHPUnit\Framework\TestCase;
require_once("Game.php");

class GameTest extends TestCase
{
    public function testNewGame() {
        $this->assertInstanceOf(Game::class, new Game());
    }

}

