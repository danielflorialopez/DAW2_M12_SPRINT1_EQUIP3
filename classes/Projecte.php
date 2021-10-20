<?php
   class Projecte {
      // Atributs
     private $titol;
     private $descripcio;
     private $categoria;
     private $localitzacio;
     private $estat;
     private $imatge;
     private $fitxer;
     private $idprojecte;
     private $sala_virtual;
     
     

     // TITOL
     public function getTitol ()
     {
       return $this->titol;
     }
     public function setTitol ($titol)
     {
       $this->titol = $titol;
     }

     // DESCRIPCIO
     public function getDescripcio ()
     {
       return $this->descripcio;
     }
     public function setDescripcio ($descripcio)
     {
        $this->descripcio = $descripcio;
     }

     // CATEGORIA
     public function getCategoria ()
     {
       return $this->categoria;
     }
     public function setCategoria ($categoria)
     {
        $this->categoria = $categoria;
     }
     // LOCALITZACIO
     public function getLocalitzacio ()
     {
       return $this->localitzacio;
     }
     public function setLocalitzacio ($localitzacio)
     {
        $this->localitzacio = $localitzacio;
     }

     // ESTAT
     public function getEstat ()
     {
       return $this->estat;
     }
     public function setEstat ($estat)
     {
        $this->estat = $estat;
     }

     // IMATGE
     public function getImatge ()
     {
       return $this->imatge;
     }
     public function setImatge ($imatge)
     {
        $this->imatge = $imatge;
     }

     // FITXER
     public function getFitxer ()
     {
       return $this->fitxer;
     }
     public function setFitxer ($fitxer)
     {
        $this->fitxer = $fitxer;
     }

     // METODES
     public function crearProjecte($titol, $descripcio, $categoria, $localitzacio, $estat, $imatge, $fitxer) {
       $this->titol = $titol;
       $this->descripcio = $descripcio;
       $this->categoria = $categoria;
       $this->localitzacio = $localitzacio;
       $this->estat = $estat;
       $this->imatge = $imatge;
       $this->fitxer = $fitxer;
     }

     public function alta($titol, $descripcio, $categoria, $localitzacio, $estat, $imatge, $fitxer) {
       $a1[] = new Projecte;
       array_push($a1,$titol, $descripcio, $categoria, $localitzacio, $estat, $imatge, $fitxer);
        array_push($_SESSION['projectes'] ,$a1);
     }

     public function imprimirProjecte() {
      echo 'Titol: ' .$this->titol . '<br>Descripcio: ' . $this ->descripcio . ' <br>Categoria: ' . $this->categoria . '<br> Localitzacio: ' . $this->localitzacio . '<br>';
  }

  public function mostrar(){
      foreach($_SESSION['projectes'] as $mostrar){
        $mostrar->imprimirProjecte();
      }
  }

  public function editarProjecte() {

  }
  public function eliminarProjecte() {

  }


     // afegim un element mes al array de sessió
     /*
     public function crear($titol, $descripcio, $categoria, $localitzacio, $estat, $imatge, $fitxer)
     {
    
     [array] [5] + titol, descripcio = [6];
     }

     // esborrem un projecte
     public function esborrar($titol, $descripcio, $categoria, $localitzacio, $estat, $imatge, $fitxer)
     {
    
     }

     public function mostrar()
     //mostrar array de [6] elements
     {
       //
     }
     public function moverse ()
     {
       //
     }
     */
   }?> 
