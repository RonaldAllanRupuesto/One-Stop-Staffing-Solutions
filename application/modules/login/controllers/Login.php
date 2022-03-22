<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index(){
    $this->load_login_page('login');
	}

	public function auth(){
		$this->load->library('form_validation');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() === false){
			$data['msg'] = 'Username or Password field is required';
			$this->load_login_page('login',$data);
		}else{
			$parameters['where'] =  array('username' => $username, 'status' => 1);
			$result = $this->MY_Model->getRows('users',$parameters,'row');

			if($result){
				if(password_verify($password,$result->password)){
					$this->setSession($result);
					if ($result->usertype == 1) {
						redirect(base_url('usermanagement'));
					}else {
						redirect(base_url('books'));
					}
				}else{
					$data['msg'] = 'Password is incorrect';
					$this->load_login_page('login',$data);
				}
			} else {
				$data['msg'] = 'Username is incorrect';
				$this->load_login_page('login',$data);

			}
		}

	}

	public function register(){
		$name = $this->input->post('First_Name');

		$username = $this->input->post('Username');
		$password = $this->input->post('Password');
		$parameters['where'] = array('username' => $username);
		$parameters['select'] = 'username';
		$username_exist = $this->MY_Model->getRows('users',$parameters);

        $count_username = count($username_exist);

		$data = array();
		$insert = 0;
		if ($count_username) {
			$data['msg'] = 'Username already exists!';
        }elseif (strlen($username) < 6) {
			$data['msg'] = 'Username must atleast 6 characters long';
        }elseif (strlen($_POST['Password']) <10 ) {
			$data['msg'] = 'Password must atleast 10 characters long';
        }  else {

			$insData = array(
				'firstname' => $this->input->post('First_Name'),
				'lastname' => $this->input->post('Last_Name'),
				'email' => $this->input->post('Email'),
				'phone' => $this->input->post('Phone'),
				'username' => $this->input->post('Username'),
				'password'	=> password_hash($password,PASSWORD_DEFAULT),
				'bu_password'	=> $password
			);
			$insert = $this->MY_Model->insert('users',$insData);
		}	
		

        if ($insert) {
                 $data['status'] = 'success';
        }else{
			$data['status'] = 'error';
		}
		echo json_encode($data);
	}

	public function setSession($data){

		$data_session = array(
			'logged_in' => true,
			'username' => $data->username,
			'usertype' => $data->usertype
		);

		$this->session->set_userdata($data_session);
	}

}
?>
