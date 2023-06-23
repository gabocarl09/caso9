<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

/**
 * Class OwnerController
 * @package App\Http\Controllers
 */
class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::paginate();

        return view('owner.index', compact('owners'))
            ->with('i', (request()->input('page', 1) - 1) * $owners->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner = new Owner();
        return view('owner.create', compact('owner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Owner::$rules);

        $owner = Owner::create($request->all());

        return redirect()->route('owners.index')
            ->with('success', 'Owner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owner = Owner::find($id);

        return view('owner.show', compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::find($id);

        return view('owner.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        request()->validate(Owner::$rules);

        $owner->update($request->all());

        return redirect()->route('owners.index')
            ->with('success', 'Owner updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $owner = Owner::find($id)->delete();

        return redirect()->route('owners.index')
            ->with('success', 'Owner deleted successfully');
    }
}
