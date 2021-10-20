<?php   
    class Proposta{

        //Declaro els atributs
        private $titol, $categoria, $localitzacio, $descripcio, $data, $imatge, $fitxer, $estat;
        //

        //Definim els metodes:
        //TITOL
        public function getTitol(){
            return $this->titol;
        }
        public function setTitol($titol){
            $this->titol = $titol;
        }

        //CATEGORIA
        public function getCategoria(){
            return $this->categoria;
        }
        public function setCategoria($titol){
            $this->categoria = $categoria;
        }

        //LOCALITZACIO
        public function getLocalitzacio(){
            return $this->localitzacio;
        }
        public function setLocalitzacio($localitzacio){
            $this->localitzacio = $localitzacio;
        }

        //DESCRIPCIO
        public function getDescripcio(){
            return $this->descripcio;
        }
        public function setDescripcio($descripcio){
            $this->descripcio = $descripcio;
        }

        //DATA
        public function getData(){
            return $this->data;
        }
        public function setData($data){
            $this->data = $data;
        }

        //IMATGE
        public function getImatge(){
            return $this->imatge;
        }
        public function setImatge($imatge){
            $this->imatge = $imatge;
        }

        //FITXER
        public function getFitxer(){
            return $this->fitxer;
        }
        public function setFitxer($fitxer){
            $this->fitxer = $fitxer;
        }

        //ESTAT
        public function getEstat(){
            return $this->estat;
        }
        public function setEstat($estat){
            $this->estat = $estat;
        }

        //Llegir
        public function readProposta(){
            echo "Titol: ".$titol." </br>"."Categoria: ".$categoria." </br>"."Localització: ".$localitzacio." </br>"."Descripcio: ".$descripcio." </br>"."Data: ".$data." </br>"."Imatge: ".$imatge." </br>"."Fitxer: ".$fitxer." </br>"."Estat: ".$estat." </br>";
        }

        //Crear
        public function createProposta($titol, $categoria, $localitzacio, $descripcio, $data, $imatge, $fitxer, $estat) {
            $cr[] = new Projecte;
            array_push($cr,$titol, $categoria, $localitzacio, $descripcio, $data, $imatge, $fitxer, $estat);
             array_push($_SESSION['propostes'] ,$cr);
          }
        
    }

?>