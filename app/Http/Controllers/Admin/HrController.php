<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HrController extends Controller
{
    public $path ='admin.modules.hr.';

    public function index(){        
        return view($this->path.'index');
    }
}
