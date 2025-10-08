<?php

abstract class ValorantPlayer {
    protected $name;
    protected $kills;
    protected $deaths;

    public function __construct($name, $kills, $deaths) {
        $this->name = $name;
        $this->kills = $kills;
        $this->deaths = $deaths;
    }

    abstract protected function getKDRatio();

    public function displayStats() {
        $kd = number_format($this->getKDRatio(), 2);
        echo "Name: {$this->name}\n";
        echo "Kills: {$this->kills}\n";
        echo "Deaths: {$this->deaths}\n";
        echo "K/D Ratio: {$kd}\n";
    }
}

class CasualPlayer extends ValorantPlayer {
    protected function getKDRatio() {
        return $this->deaths == 0 ? $this->kills : $this->kills / $this->deaths;
    }
}

class ProPlayer extends ValorantPlayer {
    protected function getKDRatio() {
        return $this->deaths == 0 ? $this->kills : $this->kills / $this->deaths;
    }

    public function displayStats() {
        echo "🔥 PRO PLAYER ALERT! 🔥\n";
        parent::displayStats();
        if ($this->getKDRatio() > 1.5) {
            echo "K/D Ratio is impressive!\n";
        }
    }
}

// Example usage:
$player1 = new CasualPlayer("Jett", 20, 10);
$player2 = new ProPlayer("TenZ", 30, 10);

$player1->displayStats();
echo "\n";
$player2->displayStats();

?>
