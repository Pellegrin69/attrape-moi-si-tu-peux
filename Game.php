<?php
class Game
{
    public $playerOne;
    public $playerTwo;
    public $board;

    function getPlayerOne() {
        return $this->playerOne;
    }
    function getPlayerTwo() {
        return $this->playerTwo;
    }
    function getBoard() {
        return $this->board;
    }
    function setPlayerOne($player) {
        $this->playerOne = $player;
    }
    function setPlayerTwo($player) {
        $this->playerTwo = $player;
    }
    function setBoard($board) {
        $this->board = $board;
    }

    public function createGameBoard()
    {
        $board = array();
        for ($i = 0; $i < 10; $i++) {
            $board[] = array_fill(0, 10, 0);
        }
        return $board;
    }
}

class Player
{

}