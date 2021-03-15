<?php

class Dvd{

  private $titolo;

  private $regista;

  private $casaProduttrice;

  private $annoPubblicazione;

  private $genere;

  public function __construct($titolo, $regista, $casaProduttrice, $annoPubblicazione, $genere) {
    $this->titolo = $titolo;
    $this->regista = $regista;
    $this->casaProduttrice = $casaProduttrice;
    $this->annoPubblicazione = $annoPubblicazione;
    $this->genere = $genere;
  }
}

class VideoNoleggio{

  public string $nome;

  private $Dvds = [];

  public function __construct($nome){
    $this->nome = $nome;
  }

  public function addDvd(Dvd $Dvd){
    $this->Dvds[] = $Dvd;
  }

  public function getDvds(){
    return $this->Dvds;
  }
}


$monsters = new Dvd('Monsters & Co.', 'Pete Docter', 'Pixar Animation Studios', '2001', 'Animazione al computer');

$soA = new Dvd('Sons of Anarchy Stagione 1', 'Kurt Sutter', '20th Century Fox', '2008', 'Crime');

$moulinRouge = new Dvd('Moulin Rouge', 'Baz Luhrmann', '20th Century Fox', '2001', 'Musical');

$blockBuster = new VideoNoleggio('BlockBuster');

$blockBuster->addDvd($monsters);

$blockBuster->addDvd($soA);

$blockBuster->addDvd($moulinRouge);
