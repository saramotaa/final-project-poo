<?php
require_once "acoesvideo.php";
class Video implements AcoesVideo{
  private $titulo;
  private $avaliacao;
  private $views;
  private $curtidas;
  private $reproduzindo;
  
  public function __construct($tit){
    $this->titulo = $tit;
    $this->avaliacao = 1;
    $this->views = 0;
    $this->curtidas = 0;
    $this->reproduzindo = false;
  }

  public function play(){
    if ($this->reproduzindo == false) {
      $this->reproduzindo = true;
      echo "<p>TOCANDO</p>";
    } else {
      echo "<p>O vídeo já está tocando!</p>";
    }
  }

  public function pause(){
    if ($this->reproduzindo == true) {
      $this->reproduzindo = false;
      echo "<p>PAUSADO</p>";
    } else {
      echo "<p>O vídeo já está pausado!</p>";
    }
  }

  public function like(){
    $this->curtidas ++;
  }

  public function getTitulo(){
  return $this->titulo;
  }
  public function setTitulo($titulo){
  $this->titulo = $titulo;
  return $this;
  }

  public function getAvaliacao(){
  return $this->avaliacao;
  }
  public function setAvaliacao($avaliacao){
  $media = ($this->avaliacao + $avaliacao)/$this->views;
  $this->avaliacao = $media;
  }

  public function getViews(){
  return $this->views;
  }
  public function setViews($views){
  $this->views = $views;
  return $this;
  }

  public function getCurtidas(){
  return $this->curtidas;
  }
  public function setCurtidas($curtidas){
  $this->curtidas = $curtidas;
  return $this;
  }

  public function getReproduzindo(){
  return $this->reproduzindo;
  }
  public function setReproduzindo($reproduzindo){
  $this->reproduzindo = $reproduzindo;
  return $this;
  }
}
?>