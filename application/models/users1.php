<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users1 extends CI_Model
{
  
 function login($username,$password)
 { 
   $query = $this->db->query("SELECT * FROM users where username='".$username."' AND password='".$password."'");
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }else{
    return false;
   }
 }
}
?>