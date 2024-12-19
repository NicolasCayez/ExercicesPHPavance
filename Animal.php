<?php
    class Animal {
        private $id;
        private $libelle;
        private $predateur;

        // CONTRUCTOR
        public function __construct($sId, $sLibelle, $sPredateur)
        {
            $this->id = $sId;
            $this->libelle = $sLibelle;
            $this->predateur = $sPredateur;
        }

        // SET
        public function setId($sId) {
            $this->id = $sId;
        }
        public function setLibelle($sLibelle) {
            $this->libelle = $sLibelle;
        }
        public function setPredateur($sPredateur) {
            $this->predateur = $sPredateur;
        }

        // GET
        public function getId() {
            return $this->id;
        }
        public function getLibelle() {
            return $this->libelle;
        }
        public function getPredateur() {
            return $this->predateur;
        }
    }
?>