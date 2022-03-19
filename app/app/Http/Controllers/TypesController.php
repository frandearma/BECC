<?php

namespace App\Http\Controllers;

use App\Models\Types;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class TypesController extends Controller
{

    use ApiResponser;

    public function index(Request $request)
    {
        return $this->successResponse(Types::orderBy('name', 'asc')
            ->get());
    }

}
