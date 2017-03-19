<?php

class usuarios{
  public $id;
  function POST_id(){
    return $this->id;
  }
  function set_id(){
    $this->id = $id;
  }
  public $usuario;
  function POST_usuario(){
    return $this->usuario;
  }
  function set_usuario(){
    $this->usuario = $usuario;
  }
  public $contrasena;
  function POST_contrasena(){
    return $this->contrasena;
  }
  function set_contrasena(){
    $this->contrasena = $contrasena;
  }
  public $idcampana;
  function POST_idcampana(){
    return $this->idcampana;
  }
  function set_idcampana(){
    $this->idcampana = $idcampana;
  }
  public $nombre;
  function POST_nombre(){
    return $this->nombre;
  }
  function set_nombre(){
    $this->nombre = $nombre;
  }
  public $privilegio;
  function POST_privilegio(){
    return $this->privilegio;
  }
  function set_privilegio(){
    $this->nombre = $privilegio;
  }

}


 ?>
