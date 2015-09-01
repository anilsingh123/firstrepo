<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Basicfunction {
    
function __construct() {
        $this->ci = & get_instance();
    }
function login($username,$password){
    $this->ci->load->database('users')
}

}
?>