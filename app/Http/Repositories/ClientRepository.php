<?php

namespace App\Http\Repositories;

use Illuminate\Http\JsonResponse;
use App\Http\Interfaces\ClientInterface;
use App\Models\Client;

class ClientRepository implements ClientInterface
{
    private $clientModel;

    public function  __construct(Client $clientModel)
    {
        $this->clientModel = $clientModel;
    }
    public function index($request)
    {
        return view('clients.index');
    }
}
