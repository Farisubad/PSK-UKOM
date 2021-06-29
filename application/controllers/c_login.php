<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
        public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('model_login');
    }

  function index(){
    $this->load->view('hal_login');
  }

    function login_aksi(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => $password
      );
    if($cek = $this->model_login->cek_login("user",$where)->num_rows()){
          if($cek > 0){
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("index.php/home_admin"));
 
    }else{

      echo"<script>alert('user dan password salah');</script>";
      
    }
  }else{
    $cek = $this->model_login->cek_login("tb_login",$where)->num_rows();
  if($cek > 0){
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("index.php/home_siswa"));
 
    }else{

      echo"<script>alert('user dan password salah');</script>";
      
    }
  }

  }
 
  function logout(){
    $this->session->sess_destroy();
    redirect(base_url('C_login'));
  }
  public function register(){
    $this->load->view('register');
  }
  public function tambah_user(){      
        
            $nama = $this->input->post('nama');
            $username = $this ->input ->post ('username');
            $password = $this->input->post('password');       

        $data = array(
            
            'nama'=>$nama,
            'username'=>$username,
            'password'=>$password

        );
        $this->model_login->input($data,'tb_login');
        redirect('c_login/index');
  
  }
 }