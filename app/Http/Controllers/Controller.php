<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function render_json($data, ?string $message = null, int $code = 200, bool $status = true)
    {
        return response()->json(
            [
                'status'  => $status,
                'code'    => $code,
                'message' => $message,
                'data'    => $data
            ],
            $code
        );
    }
}
