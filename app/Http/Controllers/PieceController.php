<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;

/**
 * Class PieceController
 * @package App\Http\Controllers
 */
class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pieces = Piece::paginate();

        return view('piece.index', compact('pieces'))
            ->with('i', (request()->input('page', 1) - 1) * $pieces->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $piece = new Piece();
        return view('piece.create', compact('piece'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Piece::$rules);

        $piece = Piece::create($request->all());

        return redirect()->route('pieces.index')
            ->with('success', 'Piece created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $piece = Piece::find($id);

        return view('piece.show', compact('piece'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $piece = Piece::find($id);

        return view('piece.edit', compact('piece'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Piece $piece
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piece $piece)
    {
        request()->validate(Piece::$rules);

        $piece->update($request->all());

        return redirect()->route('pieces.index')
            ->with('success', 'Piece updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $piece = Piece::find($id)->delete();

        return redirect()->route('pieces.index')
            ->with('success', 'Piece deleted successfully');
    }
}
