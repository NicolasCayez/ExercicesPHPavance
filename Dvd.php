<?php
    class Dvd extends Multimedia {
        private $bonus;

        // CONTRUCTOR
        public function __construct($sAuteur, $sTitre, $sReference, $sDuree, $sBonus)
        {
            $this->auteur = $sAuteur;
            $this->titre = $sTitre;
            $this->reference = $sReference;
            $this->duree = $sDuree;
            $this->bonus = $sBonus;
        }

        // GET
        public function getBonus() {
            return $this->bonus;
        }
    }
?>