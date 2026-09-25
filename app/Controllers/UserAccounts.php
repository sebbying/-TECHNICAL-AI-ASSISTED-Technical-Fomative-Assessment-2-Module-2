<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserAccounts extends Controller
{
    public function index(): string
    {
        $model = new UserModel();

        return view('users/index', [
            'users' => $model->orderBy('id', 'ASC')->findAll(),
        ]);
    }
}
