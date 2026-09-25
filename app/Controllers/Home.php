<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Home extends Controller
{
    public function index(): string
    {
        return view('home', [
            'customerCount' => (new CustomerModel())->countAllResults(),
            'userCount' => (new UserModel())->countAllResults(),
        ]);
    }
}
