<?php
    class Home extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }

        public function index(){
            $jsonRes = file_get_contents("http://localhost:8080/Amalkhairin/assets/json/userdata.json");
            $data = json_decode($jsonRes, true);
            $this->load->view('home',$data);
        }
        
    }
?>