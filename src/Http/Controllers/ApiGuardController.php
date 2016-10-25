<?php

namespace Chrisbjr\ApiGuard\Http\Controllers;

use ApiGuardAuth;
use Chrisbjr\ApiGuard\Builders\ApiResponseBuilder;
use Illuminate\Routing\Controller;
use EllipseSynergie\ApiResponse\Laravel\Response;

class ApiGuardController extends Controller
{

    /**
     * @var Response
     */
    public $response;

    /**
     * @var array
     */
    protected $apiMethods;

    public function __construct()
    {
        $serializedApiMethods = serialize($this->apiMethods);

        // Launch middleware
        $this->middleware('apiguard:' . $serializedApiMethods);

        $this->response = ApiResponseBuilder::build();
    }

    public function getUser(){
        return ApiGuardAuth::getUser();
    }

}