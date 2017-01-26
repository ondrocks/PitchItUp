<?php

class Web extends MY_Controller{

    function __construct(){
      parent::__construct();

      $this->load->model('Web/Web_m');
      // if($this->session->userdata('userid')){
      //       redirect('Web/wlcome_msg');
      // }
    }

    function index(){

      $data = array(
        'title'=>'Main page'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/main_nav');
      $this->load->view('index');
      $this->load->view('Default/main_footer');
    }


    function signup(){

      $data = array(
        'title'=>'Register Account'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/main_nav');
      $this->load->view('signup');
   
    }


    function login(){

      $data = array(
        'title'=>'Login'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/login_nav');
      $this->load->view('login');
   
    }

    function wlcome_msg(){

      $data = array(
        'title'=>'Welcome Aboard'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/login_nav');
      $this->load->view('wlcome_msg');
      $this->load->view('Default/templatefooter'); 
    }

    function Interface_m(){

      $data = array(
        'title'=>'Login'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/interface_nav');
      $this->load->view('interface');
      $this->load->view('Default/templatefooter');
    }

    function create(){

      $data = array(
        'title'=>'Create idea Generation Board'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('create');
      $this->load->view('Default/templatefooter');
    }

    function BMC(){

      $data = array(
        'title'=>'Create Business Model Canvass'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('BMC');
      $this->load->view('Default/templatefooter');
    }


    function validationboard(){

      $data = array(
        'title'=>'Create Validation Board'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('validationboard');
      $this->load->view('Default/templatefooter');  
    }

     function valueprop(){

      $data = array(
        'title'=>'Create Value Proposition'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('valueprop');
      $this->load->view('Default/templatefooter');
    }

    function template(){

      $data = array(
        'title'=>'Select Template'
      );
      $this->load->view('Default/templateheader',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('template');
      $this->load->view('Default/templatefooter');
    }

    function loading(){

      $data = array(
        'title'=>'Just wait for a while !',
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('loading');
      $this->load->view('Default/templatefooter');
   
    }


    function myPresentation(){
       $data = array(
        'title'=>'Select Template'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('myPresentation');
      $this->load->view('Default/templatefooter');
    }


    function history(){
       $data = array(
        'title'=>'My History'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('history');
      $this->load->view('Default/templatefooter');
    }


    function documents(){
       $data = array(
        'title'=>'My Documents'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('documents');
      $this->load->view('Default/templatefooter');
    }


    function AccountSettings(){
      
       $userdetails = $this->Web_m->getAccount($this->session->userdata('userid'));
        $data = array(
        'title'=>'My Documents',
        'userdetails'=>$userdetails
      );

      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('account');
      $this->load->view('Default/templatefooter');
    }







}

?>