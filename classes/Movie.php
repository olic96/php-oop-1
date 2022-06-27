<?php

    class movie {
        public $titolo;
        public $genere;
        public $durata;
        public $regia;
        public $anno;

        public function __construct($_titolo, $_genere, $_durata, $_regia, $_anno)
        {
            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->durata = $_durata;
            $this->regia = $_regia;
            $this->anno = $_anno;

            if($this->regia !== 'Sam Raimi') {
                $this->titolo = $this->titolo . " " . "(no Raimi, no Spider-Man)";
            }
        }
    }