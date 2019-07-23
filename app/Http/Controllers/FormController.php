<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function manageFormInfo(){
        return view('admin.form.manage-form');
    }
}
