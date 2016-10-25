<?php

namespace Chrisbjr\ApiGuard\Models;

use Chrisbjr\ApiGuard\Repositories\ApiKeyRepository;

class ApiKey extends ApiKeyRepository
{

    //
    public function apiable(){
        return $this->morphTo();
    }
}