<?php

abstract class ValorantPlayer {
    protected $playerName;
    protected $kills;
    protected $assists;
    protected $deaths;
    protected $score = 0;

    public function __construct($playerName, $kills, $assists, $deaths) {
        $this->playerName = $playerName;
        $this->kills = $kills;
        $this->assists = $assists;
        $this->deaths = $deaths;
    }

    abstract public function calculateScore();

    public function showStats() {
        echo "Player: {$this->playerName}\n";
        echo "Kills: {$this->kills} | Assists: {$this->assists} | Deaths: {$this->deaths}\n";
        echo "Score: {$this->score}\n";

        if ($this->score > 100)
            echo " MVP Caliber!\n\n";
        else
            echo "Keep Practicing!\n\n";
    }
}

class Player1 extends ValorantPlayer {
    public function calculateScore() {
        $this->score = ($this->kills * 3) + ($this->assists * 2) - ($this->deaths * 1);
    }
}

class Player2 extends ValorantPlayer {
    public function calculateScore() {
        $this->score = ($this->kills * 3) + ($this->assists * 2) - ($this->deaths * 1);
    }
}

class Player3 extends ValorantPlayer {
    public function calculateScore() {
        $this->score = ($this->kills * 3) + ($this->assists * 2) - ($this->deaths * 1);
    }
}

// --- TEST AREA ---
$player1 = new Player1("Jerico", 25, 5, 10);
$player2 = new Player2("Patrick", 35, 12, 3);
$player3 = new Player3("Miguel", 30, 8, 0);

$player1->calculateScore();
$player1->showStats();

$player2->calculateScore();
$player2->showStats();

$player3->calculateScore();
$player3->showStats();

?>
