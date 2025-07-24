<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use LaravelCore174\Rpms\Support\HasRpmsDependencies;

class BaseController extends Controller
{
    use HasRpmsDependencies;

    public function codeResponse($code = 200, $message = '', $data = [])
    {
        return Response::json(
            [
                'code' => (int) $code,
                'message' => $message,
                'data' => $data,
            ],
            (int) $code,
            [
                'Content-Type' => 'application/json',
            ]
        );
    }

    public function dataResponse($data = [], $message = '', $code = 200)
    {
        return Response::json(
            [
                'code' => (int) $code,
                'message' => $message,
                'data' => $this->convertNullToEmptyString($data) ?? [],
            ],
            (int) $code,
            [
                'Content-Type' => 'application/json',
            ]
        );
    }

    public function convertNullToEmptyString($value)
    {
        array_walk_recursive(
            $value,
            function (&$item) {
                $item = $item ?? '';
            }
        );

        return $value;
    }
}