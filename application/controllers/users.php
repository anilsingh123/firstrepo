<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller{
    
	 public function __construct()
       {
            parent::__construct();
            // Your own constructor code
	    $this->load->library('form_validation');
       }
    	
	public function login()
	{
		$page='login';
		$data['title'] = ucfirst($page);
                $this->load->view('templates/header',$data);
		$this->load->view('users/login');
                $this->load->view('templates/footer');
	}
	
	public function logincheck()
	{
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
	    $this->load->model('users1');
	    $result=$this->users1->login($username,$password);
	    $this->form_validation->set_rules('username', 'Username', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');
	    if($this->form_validation->run() == FALSE)
	    {
	      //Field validation failed.  User redirected to login page
		$page='login';
		$data['title'] = ucfirst($page);
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/header',$data);
		$this->load->view('users/login');
		$this->load->view('templates/footer');
	    }
	    else
	    {
	      //Go to private area
	      if($result){
		foreach($result as $row){
		    $userdata=array(
		    'id'=>$result[0]->id,
                'username'=>$result[0]->username,
                'email'=>$result[0]->email
                     );
		    $this->session->set_userdata('logged_in',$userdata);
		}
		redirect('pages', 'refresh');
	    }else{
		redirect('users/login', 'refresh');
	    }
	      
	    }
	    
	    
	}
	function logout()
	{
	  $this->session->unset_userdata('logged_in');
	  $this->session->sess_destroy();
	  redirect('pages', 'refresh');
	}
}

?>