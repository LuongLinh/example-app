<?php

namespace App\Utilities;

use Symfony\Component\HttpFoundation\Response;

class StatusCodes
{
    const OK = Response::HTTP_OK;
    const NOT_FOUND = Response::HTTP_NOT_FOUND;
    const INTERNAL_SERVER_ERROR = Response::HTTP_INTERNAL_SERVER_ERROR;
}
