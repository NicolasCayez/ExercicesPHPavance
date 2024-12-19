<?php
    abstract class Document {
        protected $auteur;
        protected $titre;
        protected $reference;

        // CONTRUCTOR
        public function __construct($sAuteur, $sTitre, $sReference)
        {
            $this->auteur = $sAuteur;
            $this->titre = $sTitre;
            $this->reference = $sReference;
        }

        // GET
        public function getAuteur() {
            return $this->auteur;
        }
        public function gettitre() {
            return $this->titre;
        }
        public function getReference() {
            return $this->reference;
        }
    }
?>