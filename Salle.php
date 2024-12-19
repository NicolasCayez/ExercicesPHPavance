<?php
    class Salle {
        private $id;
        private $libelle;
        private $capacite;
        private $occupe;

        // CONTRUCTOR
        public function __construct($sId, $sLibelle, $sCapacite, $sOccupe)
        {
            $this->id = $sId;
            $this->libelle = $sLibelle;
            $this->capacite = $sCapacite;
            $this->occupe = $sOccupe;
        }

        // SET
        public function setId($sId) {
            $this->id = $sId;
        }
        public function setLibelle($sLibelle) {
            $this->libelle = $sLibelle;
        }
        public function setCapacite($sCapacite) {
            $this->capacite = $sCapacite;
        }
        public function setOccupe($sOccupe) {
            $this->occupe = $sOccupe;
        }

        // GET
        public function getId() {
            return $this->id;
        }
        public function getLibelle() {
            return $this->libelle;
        }
        public function getCapacite() {
            return $this->capacite;
        }
        public function getOccupe() {
            return $this->occupe;
        }
    }
?>