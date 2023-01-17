<?php

namespace App\Controllers;

class Listing extends BaseController
{
    public function index()
    {
		//$this->db->query("select * from properties");
        return view('welcome_message');
    }
}
