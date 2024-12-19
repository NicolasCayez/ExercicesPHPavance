<?php
    class Multimedia extends Document {
        protected $duree;

        // CONTRUCTOR
        public function __construct($sAuteur, $sTitre, $sReference, $sDuree)
        {
            $this->auteur = $sAuteur;
            $this->titre = $sTitre;
            $this->reference = $sReference;
            $this->duree = $sDuree;
        }

        // GET
        public function getDuree() {
            return $this->duree;
        }
    }
?>