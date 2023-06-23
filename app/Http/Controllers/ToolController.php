<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

/**
 * Class ToolController
 * @package App\Http\Controllers
 */
class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tools = Tool::paginate();

        return view('tool.index', compact('tools'))
            ->with('i', (request()->input('page', 1) - 1) * $tools->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tool = new Tool();
        return view('tool.create', compact('tool'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tool::$rules);

        $tool = Tool::create($request->all());

        return redirect()->route('tools.index')
            ->with('success', 'Tool created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tool = Tool::find($id);

        return view('tool.show', compact('tool'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tool = Tool::find($id);

        return view('tool.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tool $tool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tool $tool)
    {
        request()->validate(Tool::$rules);

        $tool->update($request->all());

        return redirect()->route('tools.index')
            ->with('success', 'Tool updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tool = Tool::find($id)->delete();

        return redirect()->route('tools.index')
            ->with('success', 'Tool deleted successfully');
    }
}
