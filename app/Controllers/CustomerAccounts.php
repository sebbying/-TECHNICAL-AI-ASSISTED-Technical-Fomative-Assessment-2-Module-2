<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Controller;

class CustomerAccounts extends Controller
{
    public function index(): string
    {
        $model = new CustomerModel();

        return view('customers/index', [
            'customers' => $model->orderBy('id', 'ASC')->findAll(),
        ]);
    }
}
