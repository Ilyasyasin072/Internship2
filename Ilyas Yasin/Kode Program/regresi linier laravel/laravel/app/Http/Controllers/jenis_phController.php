<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\jenis_ph;
use Illuminate\Http\Request;

class jenis_phController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $jenis_ph = jenis_ph::where('tanggal', 'LIKE', "%$keyword%")
                ->orWhere('jenis_tanaman', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $jenis_ph = jenis_ph::paginate($perPage);
        }

        return view('jenis_ph.index', compact('jenis_ph'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jenis_ph.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        jenis_ph::create($requestData);

        return redirect('jenis_ph')->with('flash_message', 'jenis_ph added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $jenis_ph = jenis_ph::findOrFail($id);

        return view('jenis_ph.show', compact('jenis_ph'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $jenis_ph = jenis_ph::findOrFail($id);

        return view('jenis_ph.edit', compact('jenis_ph'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $jenis_ph = jenis_ph::findOrFail($id);
        $jenis_ph->update($requestData);

        return redirect('jenis_ph')->with('flash_message', 'jenis_ph updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        jenis_ph::destroy($id);

        return redirect('jenis_ph')->with('flash_message', 'jenis_ph deleted!');
    }
}
