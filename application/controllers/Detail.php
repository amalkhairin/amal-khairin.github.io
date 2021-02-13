<?php
class Detail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $id = $_GET['id'];
        $jsonRes = file_get_contents("http://localhost:8080/Amalkhairin/assets/json/appsdata.json");
        $tmp = json_decode($jsonRes, true);
        $data = NULL;
        foreach($tmp['data'] as $item){
            if($item['id'] = $id){
                $data = $item;
            }
        };
        $this->load->view('appdetails', $data);
    }
}
