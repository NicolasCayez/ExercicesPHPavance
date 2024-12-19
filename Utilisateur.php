<?php
    class Utilisateur {
        private $id;
        private $nom;
        private $prenom;

        // CONTRUCTOR
        public function __construct($sId, $sNom, $sPrenom)
        {
            $this->id = $sId;
            $this->nom = $sNom;
            $this->prenom = $sPrenom;
        }

        // SET
        public function setId($sId) {
            $this->id = $sId;
        }
        public function setNom($sNom) {
            $this->nom = $sNom;
        }
        public function setPrenom($sPrenom) {
            $this->prenom = $sPrenom;
        }

        // GET
        public function getId() {
            return $this->id;
        }
        public function getNom() {
            return $this->nom;
        }
        public function getPrenom() {
            return $this->prenom;
        }
    }
?>