<?php
    class Maison {
        public $nom;
        public $longueur;
        public $largeur;
        public $nbEtages;

        public function surface() {
            $surface = $this->longueur * $this->largeur * $this->nbEtages;
            echo "<p>La maison $this->nom fait $surface m²</p>";
        }
    }
?>
