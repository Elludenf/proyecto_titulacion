<?php
Class User extends CI_Model
{
  public function login($username,$password) {
    $this -> db -> select('zusrcodigo, zusrnombre, zusrclave');
    $this -> db -> from('zusuarios');
    $this -> db -> where('zusrnombre', $username);
    $this -> db -> where('zusrclave', $password);
    $this -> db -> limit(1);

    $query = $this -> db -> get();

    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

}
?>