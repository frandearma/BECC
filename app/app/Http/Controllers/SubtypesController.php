<?php

namespace App\Http\Controllers;

use App\Models\Subtypes;
use App\Models\Types;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class SubtypesController extends Controller
{
    use ApiResponser;

    public function index()
    {
        return $this->successResponse(Subtypes::with('types')->orderBy('name', 'asc')->get());
    }
}
