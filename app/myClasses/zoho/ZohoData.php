<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\myClasses\Zoho;

/**
 * Description of ZohoData
 *
 * @author user
 */
class ZohoData {

    public static function createData($data) {
        $result = ["data" => []];

        foreach ($data as $key => $value) {
            if ($key != "_token" && $key != "Created_Time" && $key != "Modified_Time") {
                if ($value != "") {
                    $result["data"][0][$key] = $value;
                }
            }
        }

        return $result;
    }

}
