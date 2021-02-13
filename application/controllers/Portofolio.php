<?php
    class Portofolio extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }

        public function index(){
            $jsonRes = file_get_contents("http://localhost:8080/Amalkhairin/assets/json/appsdata.json");
            $data = json_decode($jsonRes, true);
            // var_dump($data);
            $this->load->view('portofolio',$data);
        }
        
    }
