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

    public function altaRecurs($nom, $aportat) {
        $this->nom = $nom;
        $this->aportat = $aportat;
    }

    public function mostraRecurs (){
        $recurs ['nom'] =  $this->nom; 
        $recurs ['aportat'] =  $this->aportat; 
        return $recurs;
    }

    public function editarRecurs() {

    }
    public function eliminarRecurs() {

    }
}

?>