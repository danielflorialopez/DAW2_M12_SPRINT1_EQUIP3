<?php
class GestRecursos {
    private $nom;
    private $aportat;

    public function setNom ($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setAportat($aportat) {
        $this->aportat = $aportat;
    }

    public function getAportat() {
        return $this->aportat;
    }

    public function __construct($nom, $aportat) {

    }

    public function toString() {
        return 'Nom del recurs:' . $this->nom . ' Aportat per:' . $this->aportat;
    }
}

    $recurs = new GestRecursos();

        echo ' Color del coche: ' . $recurs->getNom();
?>