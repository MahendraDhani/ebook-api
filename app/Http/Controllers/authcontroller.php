<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return[
            'NIS' => '3103119072',
            'Name' => 'faizal rifki arlan sidiq',
            'Gender' => 'Laki-laki',
            'Phone' => '081226044957',
            'Class' => 'XII RPL 3',
        ];
    }
}