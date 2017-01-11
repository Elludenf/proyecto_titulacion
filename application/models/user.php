<?php
Class User extends CI_Model
{
  public function login($username,$password) {
    $this -> db -> select('per_codigo, per_mail, per_clave');
    $this -> db -> from('estudiante');
    $this -> db -> where('per_mail', $username);
    $this -> db -> where('per_clave', $password);
    $this -> db -> limit(1);

    $query = $this -> db -> get();

    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      $this -> db -> select('per_codigo, per_mail, per_clave');
      $this -> db -> from('profesor');
      $this -> db -> where('per_mail', $username);
      $this -> db -> where('per_clave', $password);
      $this -> db -> limit(1);

      $query = $this -> db -> get();

      if($query -> num_rows() == 1)
      {
        return $query->result();
      }else{
        return false;
      }

    }
  }

}
?>