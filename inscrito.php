<?php
require_once 'pessoa.php';
class Inscrito extends Pessoa{
  private $login;
  private $totAssistido;

  public function __construct($no, $id, $se, $log){
    parent::__construct($no, $id, $se);
    $this->login = $log;
    $this->totAssistido = 0;
  }

  public function viuMaisUm(){
    $this->totAssistido ++;
  }

  public function getLogin(){
  return $this->login;
  }
  public function setLogin($login){
  $this->login = $login;
  return $this;
  }

  public function getTotAssistido(){
  return $this->totAssistido;
  }
  public function setTotAssistido($totAssistido){
  $this->totAssistido = $totAssistido;
  return $this;
  }
}
?>