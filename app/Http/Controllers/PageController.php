<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\myClasses\Zoho\ZohoTest;
use App\myClasses\Zoho\ZohoData;

class PageController extends Controller {

    public function show() {
        return view('page.show');
    }

    public function leads() {
        $parameters = array();
        //$parameters["page"]="1";
        //$parameters["per_page"]="2";        
        $parameters["include_child"] = "false";
        $leads = (new ZohoTest())->get_records("Leads", $parameters);
        //print_r($leads);        
        return view('page.leads', ['leads' => $leads->data]);
    }
    
    public function lead($id) {
        $zoho = new ZohoTest();
        $lead = $zoho->get_records("Leads/$id");
        //print_r($lead->data[0]);
        return view('page.lead', ['lead' => $lead->data[0]]);
    }

    public function accounts() {
        $parameters = array();
        $parameters["include_child"] = "false";
        $accounts = (new ZohoTest())->get_records("Accounts", $parameters);

        //print_r($accounts->data);
        return view('page.accounts', ['accounts' => $accounts->data]);
    }

    public function account($id) {
        $zoho = new ZohoTest();
        $account = $zoho->get_records("Accounts/$id");
        return view('page.account', ['account' => $account->data[0]]);
    }

    public function deals() {
        $parameters = array();
        $parameters["include_child"] = "false";
        $deals = (new ZohoTest())->get_records("Deals", $parameters);

        //print_r($deals->data);
        return view('page.deals', ['deals' => $deals->data]);
    }

    public function deal($id) {
        $zoho = new ZohoTest();
        $deal = $zoho->get_records("Deals/$id");

        //print_r($deal);
        return view('page.deal', ['deal' => $deal->data[0]]);
    }

    public function contacts() {
        $parameters = array();
        $parameters["include_child"] = "false";
        $contacts = (new ZohoTest())->get_records("Contacts", $parameters);
        //print_r($contacts->data);
        return view('page.contacts', ['contacts' => $contacts->data]);
    }
    
    public function contact($id) {
        $zoho = new ZohoTest();
        $contact = $zoho->get_records("Contacts/$id");

        //print_r($task);        
        return view('page.contact', ['contact' => $contact->data[0]]);
    }
    

    public function tasks() {
        $parameters = array();
        $parameters["include_child"] = "false";
        $tasks = (new ZohoTest())->get_records("Tasks", $parameters);

        //print_r($tasks->data);
        return view('page.tasks', ['tasks' => $tasks->data]);
    }

    public function task($id) {
        $zoho = new ZohoTest();
        $task = $zoho->get_records("Tasks/$id");

        //print_r($task);
        return view('page.task', ['task' => $task->data[0]]);
    }

    public function create_deal($id) {
        if ($_POST) {
            $data = ZohoData::createData($_POST);
            $data["data"][0]["Account_Name"] = ["id" => $id];
            $zoho = new ZohoTest();
            $response = $zoho->insert_deal($data);
            return redirect()->action(
                            [PageController::class, "deal"],
                            ['id' => $response->data[0]->details->id]
            );
        }
        return redirect()->action([PageController::class, "accounts"]);
    }

    public function create_task() {
        if ($_POST) {
            $data = ZohoData::createData($_POST);
            $zoho = new ZohoTest();
            $response = $zoho->insert_task($data);
            print_r($response);
            return redirect()->action(
                            [PageController::class, "task"],
                            ['id' => $response->data[0]->details->id]
            );
        }
        return redirect()->action([PageController::class, "tasks"]);
    }
    
    public function create_contact(){
        if ($_POST) {
            $data = ZohoData::createData($_POST);
            $zoho = new ZohoTest();
            $response = $zoho->insert_contact($data);
            print_r($response);
            return redirect()->action(
                            [PageController::class, "contact"],
                            ['id' => $response->data[0]->details->id]
            );
        }
        return redirect()->action([PageController::class, "contacts"]);
    }

}
