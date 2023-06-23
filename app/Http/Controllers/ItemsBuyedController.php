<?php

namespace App\Http\Controllers;

use App\Models\ItemsBuyed;
use Illuminate\Http\Request;

/**
 * Class ItemsBuyedController
 * @package App\Http\Controllers
 */
class ItemsBuyedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemsBuyeds = ItemsBuyed::paginate();

        return view('items-buyed.index', compact('itemsBuyeds'))
            ->with('i', (request()->input('page', 1) - 1) * $itemsBuyeds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itemsBuyed = new ItemsBuyed();
        return view('items-buyed.create', compact('itemsBuyed'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ItemsBuyed::$rules);

        $itemsBuyed = ItemsBuyed::create($request->all());

        return redirect()->route('items-buyeds.index')
            ->with('success', 'ItemsBuyed created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemsBuyed = ItemsBuyed::find($id);

        return view('items-buyed.show', compact('itemsBuyed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemsBuyed = ItemsBuyed::find($id);

        return view('items-buyed.edit', compact('itemsBuyed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ItemsBuyed $itemsBuyed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemsBuyed $itemsBuyed)
    {
        request()->validate(ItemsBuyed::$rules);

        $itemsBuyed->update($request->all());

        return redirect()->route('items-buyeds.index')
            ->with('success', 'ItemsBuyed updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $itemsBuyed = ItemsBuyed::find($id)->delete();

        return redirect()->route('items-buyeds.index')
            ->with('success', 'ItemsBuyed deleted successfully');
    }
}
