<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CardController extends Controller
{

    use ApiResponser;

    public function index(Request $request)
    {
        $per_page = $request->per_page;
        return response()->json(Card::orderBy('name', 'asc')
            ->paginate($per_page));
    }

    public function showAll(Request $request)
    {
        return $this->successResponse(Card::orderBy('name', 'asc')
            ->get());
    }

    public function show($id)
    {
        return $this->successResponse(Card::with('subtypes','types')
            ->find($id));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        // Uppercase
        $request->merge(['name' => Str::upper($request->name)]);
        $card = Card::create($request->all());

        return $this->successResponse($card, 201);
    }

    public function update($id, Request $request)
    {
        $card = Card::findOrFail($id);
        // Uppercase
        $request->merge(['name' => Str::upper($request->name)]);
        $card->update($request->all());

        return $this->successResponse($card, 200);
    }

    public function destroy($id)
    {
        Card::findOrFail($id)->delete();
        return $this->successResponse('Deleted Successfully', 200);
    }
}
