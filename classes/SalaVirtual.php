<?php
class SalaVirtual {

    //Atributs
    public $gestorDocumental, $gestorRecursos, $gestorTasques, $xat;

    //Getters i setters
    public function getGestorDocumental() {
        return $this->gestorDocumental;
    }

    public function setGestorDocumental($gestorDocumental) {
        $this->gestorDocumental = $gestorDocumental;
    }

    public function getGestorRecursos() {
        return $this->gestorRecursos;
    }

    public function setGestorRecursos($gestorRecursos) {
        $this->gestorRecursos = $gestorRecursos;
    }

    public function getGestorTasques() {
        return $this->gestorTasques;
    }

    public function setGestorTasques($gestorTasques) {
        $this->gestorTasques = $gestorTasques;
    }

    public function getXat() {
        return $this->xat;
    }

    public function setXat($xat) {
        $this->xat = $xat;
    }

    //Metodes
    public function readSalaVirtual() {
        if ($gestorDocumental == null) {
            echo "Gestor Documental: no creat <br />";
        } else {
            echo "Gestor Documental: creat <br />";
        }

        if ($gestorRecursos == null) {
            echo "Gestor de Recursos: no creat <br />";
        } else {
            echo "Gestor de Recursos: creat <br />";
        }

        if ($gestorTasques == null) {
            echo "Gestor de Tasques: no creat <br />";
        } else {
            echo "Gestor de Tasques: creat <br />";
        }

        if ($xat == null) {
            echo "Xat: no creat <br />";
        } else {
            echo "Xat: creat <br />";
        }
    }
    
    //Constructor
    function __construct($gestorDocumental, $gestorRecursos, $gestorTasques, $xat) {
        $this->gestorDocumental = $gestorDocumental;
        $this->gestorRecursos = $gestorRecursos;
        $this->gestorTasques = $gestorTasques;
        $this->xat = $xat;
    }
}


?>