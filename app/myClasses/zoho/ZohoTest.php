<?php

namespace App\myClasses\Zoho;

use App\myClasses\Zoho\ZohoData;

class ZohoTest {

    private const REFRESH_TOKEN = "";
    private const CLIENT_ID = "";
    private const CLIENT_SECRET = "";
    private const REDIRECT_URI = "http://zohotest.test";

//------------------------------------------------------------------------------    
//---------------------public---------------------------------------------------
//------------------------------------------------------------------------------

    public function generate_refresh_tocken() {
        $post = [
            'code' => "",
            'redirect_uri' => "http://zohotest.test",
            'client_id' => "",
            'client_secret' => "",
            'grant_type' => "authorization_code"
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://accounts.zoho.com/oauth/v2/token");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        $response = curl_exec($ch);

        $response = json_decode($response);

        return $response;
    }

    public function insert_leads() { 
        $post_data = [
            "data" => [
                [
                    "Company" => "Test Company 7",
                    "Last_Name" => "Leo",
                    "First_Name" => "Gets",
                    "Email" => "gets@gmail.com",
                    "State" => "Virginia",
                    "Phone" => "121212123",
                    "Description" => " He is player"
                ]
            ],
            "trigger" => [
                "approval",
                "workflow",
                "blueprint"
            ]
        ];

        return $this->execute($post_data, "Leads");
    }
    
    
//-------------to cteate Deal---------------------------------------------------

    public function insert_account($post_data) {        
        return $this->execute($post_data, 'Accounts');
    }

    public function insert_deal($data) {       
        return $this->execute($data, 'Deals');
    }

    //----------------------Attach task to deal------------------------------------

    public function insert_contact($post_data) {           
        
        return $this->execute($post_data, 'Contacts');
    }

    public function insert_task($data) {        
        return $this->execute($data, 'Tasks');
    }

    public function get_records($module_api_name, $parameters = array()) {
        $access_token = $this->get_access_token();
        $ch = curl_init();

        $url = "https://www.zohoapis.com/crm/v2/$module_api_name?";

        if (!empty($parameters)) {
            foreach ($parameters as $key => $value) {
                $url = $url . $key . "=" . $value . "&";
            }
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            "Authorization: Zoho-oauthtoken $access_token",
            'cache-control: no-cache'
        ));
        $responce = curl_exec($ch);
        curl_close($ch);
        $responce = json_decode($responce);
        return $responce;
    }

//------------------------------------------------------------------------------
//-------------------private----------------------------------------------------
//------------------------------------------------------------------------------  

    private function generate_access_token_with_refresh_token() {

        $post = [
            'refresh_token' => self::REFRESH_TOKEN,
            'redirect_uri' => self::REDIRECT_URI,
            'client_id' => self::CLIENT_ID,
            'client_secret' => self::CLIENT_SECRET,
            'grant_type' => 'refresh_token'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://accounts.zoho.com/oauth/v2/token");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        $response = curl_exec($ch);
        $response = (array) json_decode($response);
        $response['time_stamp'] = time();
        $this->put_accesstoken($response);
        return $response['access_token'];
    }

    private function put_accesstoken($data) {
        file_put_contents($this->get_TokenPersistenceFile(), json_encode($data));
    }

    private function get_accesstoken() {
        return json_decode(file_get_contents($this->get_TokenPersistenceFile()));
    }

    private function get_TokenPersistenceFile() {
        return $_SERVER['DOCUMENT_ROOT'] . "/oauthtokens.txt";
    }

    private function get_access_token() {
        $data = $this->get_accesstoken();

        $difference = $data->expires_in - (time() - $data->time_stamp);

        if ($difference > 60) {
            return $data->access_token;
        } else {
            return $this->generate_access_token_with_refresh_token();
        }
    }

    private function execute($post_data, $module_api_name) {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.zohoapis.com/crm/v2/$module_api_name");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $access_token = $this->get_access_token();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                "Authorization: Zoho-oauthtoken $access_token",
                'cache-control: no-cache'
            ));
            $responce = curl_exec($ch);
            curl_close($ch);
        } catch (Exception $e) {
            throw new Exception($e);
        }
        if ($responce == true) {
            return json_decode($responce);
        }
        return false;
    }

}
