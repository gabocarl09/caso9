<?php

namespace App\Http\Controllers;

use App\Models\MechanicalWorkshop;
use Illuminate\Http\Request;

/**
 * Class MechanicalWorkshopController
 * @package App\Http\Controllers
 */
class MechanicalWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanicalWorkshops = MechanicalWorkshop::paginate();

        return view('mechanical-workshop.index', compact('mechanicalWorkshops'))
            ->with('i', (request()->input('page', 1) - 1) * $mechanicalWorkshops->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mechanicalWorkshop = new MechanicalWorkshop();
        return view('mechanical-workshop.create', compact('mechanicalWorkshop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MechanicalWorkshop::$rules);

        $mechanicalWorkshop = MechanicalWorkshop::create($request->all());

        return redirect()->route('mechanical-workshops.index')
            ->with('success', 'MechanicalWorkshop created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mechanicalWorkshop = MechanicalWorkshop::find($id);

        return view('mechanical-workshop.show', compact('mechanicalWorkshop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mechanicalWorkshop = MechanicalWorkshop::find($id);

        return view('mechanical-workshop.edit', compact('mechanicalWorkshop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MechanicalWorkshop $mechanicalWorkshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MechanicalWorkshop $mechanicalWorkshop)
    {
        request()->validate(MechanicalWorkshop::$rules);

        $mechanicalWorkshop->update($request->all());

        return redirect()->route('mechanical-workshops.index')
            ->with('success', 'MechanicalWorkshop updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mechanicalWorkshop = MechanicalWorkshop::find($id)->delete();

        return redirect()->route('mechanical-workshops.index')
            ->with('success', 'MechanicalWorkshop deleted successfully');
    }
}
