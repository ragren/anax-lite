<?php
namespace raag\Dice;

class Dice
{
    public $list = [];
    public $scoreOne = 0;
    public $scoreTwo = 0;
    public $turn = 1;

    public function dice()
    {
        $test = rand(1, 6);
        array_push($this->list, $test);
    }

    public function getList()
    {
        return $this->list;
    }

    public function getScore($number)
    {
        if ($number == 1) {
            return $this->scoreOne;
        } elseif ($number == 2) {
            return $this->scoreTwo;
        }

    }

    public function checkTurn()
    {
        return ($this->turn % 2 == 0);
    }

    public function checkList()
    {
        if (in_array(1, $this->list)) {
            $this->turn =  $this->turn + 1;
            $this->clearScore();
            return "Sorry, you got 1";
        }
    }

    public function addScore()
    {
        if (!empty($this->list)) {
            if ($this->turn % 2 == 0) {
                $this->scoreTwo = $this->scoreTwo + array_sum($this->list);
            } else {
                $this->scoreOne = $this->scoreOne + array_sum($this->list);
            }
            $this->turn =  $this->turn + 1;
            $this->clearScore();
        }
    }

    public function clearScore()
    {
        $this->list = array();
    }

    public function checkWinner()
    {
        if ($this->scoreOne > 99) {
            return "Player 1 won";
        } elseif ($this->scoreTwo > 99) {
            return "Player 2 won";
        }
    }
}
