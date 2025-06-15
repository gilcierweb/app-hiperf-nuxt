<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Model\User;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

class UserController
{
    public function index(RequestInterface $request, ResponseInterface $response)
    {
         $users = User::all();
         return $response->json($users);
    }
}
