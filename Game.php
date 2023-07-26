<?php
class Game
{
    public $playerOne;
    public $playerTwo;

    function getPlayerOne() {
        return $this->playerOne;
    }
    function getPlayerTwo() {
        return $this->playerTwo;
    }
    function setPlayerOne($player) {
        $this->playerOne = $player;
    }
    function setPlayerTwo($player) {
        $this->playerTwo = $player;
    }
}

class Player
{

}