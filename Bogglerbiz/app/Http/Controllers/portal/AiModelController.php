<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AiModelController extends Controller
{
    public function index()
    {
        return view('portal.aiModel.index');
    }
}
