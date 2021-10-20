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

    public function crearRecurs($nom, $aportat) {
        $this->nom = $nom;
        $this->aportat = $aportat;
    }

    public function alta($nom, $aportat){
        $a1[] = new GestRecursos;
        array_push($a1,$nom,$aportat);
        array_push($_SESSION['recursos'] ,$a1);
    }

    public function imprimirRecurs() {
        echo 'Nom: ' .$this->nom . '<br>Aportat per: ' . $this->aportat . '<br>';
    }

    public function mostrar(){
        foreach($_SESSION['recursos'] as $mostrar){
          $mostrar->imprimirRecurs();
        }
    }

    public function editarRecurs() {

    }
    public function eliminarRecurs() {

    }
}

?>