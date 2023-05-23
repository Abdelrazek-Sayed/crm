<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\ClientInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    private $ClientInterface;
    public function __construct(ClientInterface $ClientInterface)
    {
        $this->ClientInterface  = $ClientInterface;
    }



    public function index(Request $request)
    {
         return $this->ClientInterface->index($request);
    }
}
