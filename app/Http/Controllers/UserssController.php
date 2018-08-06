<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserssController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users');
    }
}
