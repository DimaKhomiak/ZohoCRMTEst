<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\myClasses\Zoho\ZohoTest;

class ZohoController extends Controller {

    public function refresh() {        
        $zoho = new ZohoTest();
        $response = $zoho->generate_refresh_tocken();
        print_r($response);
    }

    public function insert(){
        $zoho = new ZohoTest();
        $response = $zoho->insert_leads();
        var_dump($response);
    }
    
    public function get(){ 
        
        $parameters = array();
        $parameters["page"]="1";
        $parameters["per_page"]="2";
        //$parameters["sort_by"]="Email2";
        //$parameters["sort_order"]="desc2";
        $parameters["include_child"]="false";
        
        $response = (new ZohoTest())->get_records("Leads",$parameters);        
        echo "<pre>";
        print_r((array)$response);
        echo "</pre>";
    }

}
