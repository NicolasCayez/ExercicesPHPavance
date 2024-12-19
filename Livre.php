<?php
    class Livre extends Document {
        private $nbPages;

        // CONTRUCTOR
        public function __construct($sAuteur, $sTitre, $sReference,$sNbPages)
        {
            $this->auteur = $sAuteur;
            $this->titre = $sTitre;
            $this->reference = $sReference;
            $this->nbPages = $sNbPages;
        }

        // GET
        public function getNbPages() {
            return $this->nbPages;
        }
    }
?>