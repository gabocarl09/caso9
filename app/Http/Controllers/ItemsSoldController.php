<?php

namespace App\Http\Controllers;

use App\Models\ItemsSold;
use Illuminate\Http\Request;

/**
 * Class ItemsSoldController
 * @package App\Http\Controllers
 */
class ItemsSoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemsSolds = ItemsSold::paginate();

        return view('items-sold.index', compact('itemsSolds'))
            ->with('i', (request()->input('page', 1) - 1) * $itemsSolds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itemsSold = new ItemsSold();
        return view('items-sold.create', compact('itemsSold'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ItemsSold::$rules);

        $itemsSold = ItemsSold::create($request->all());

        return redirect()->route('items-solds.index')
            ->with('success', 'ItemsSold created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemsSold = ItemsSold::find($id);

        return view('items-sold.show', compact('itemsSold'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemsSold = ItemsSold::find($id);

        return view('items-sold.edit', compact('itemsSold'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ItemsSold $itemsSold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemsSold $itemsSold)
    {
        request()->validate(ItemsSold::$rules);

        $itemsSold->update($request->all());

        return redirect()->route('items-solds.index')
            ->with('success', 'ItemsSold updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $itemsSold = ItemsSold::find($id)->delete();

        return redirect()->route('items-solds.index')
            ->with('success', 'ItemsSold deleted successfully');
    }
}
