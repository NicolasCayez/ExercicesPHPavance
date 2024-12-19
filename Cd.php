<?php
    class Cd extends Multimedia {
        private $nbPlages;

        // CONTRUCTOR
        public function __construct($sAuteur, $sTitre, $sReference, $sDuree, $sNbPlages)
        {
            $this->auteur = $sAuteur;
            $this->titre = $sTitre;
            $this->reference = $sReference;
            $this->duree = $sDuree;
            $this->nbPlages = $sNbPlages;
        }

        // GET
        public function getNbPlages() {
            return $this->nbPlages;
        }
    }
?>