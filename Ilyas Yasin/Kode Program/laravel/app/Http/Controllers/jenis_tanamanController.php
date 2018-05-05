<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\jenis_tanaman;
use Illuminate\Http\Request;

class jenis_tanamanController extends Controller
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
            $jenis_tanaman = jenis_tanaman::where('jenis_tanaman', 'LIKE', "%$keyword%")
                ->orWhere('jmlh_ppm', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $jenis_tanaman = jenis_tanaman::paginate($perPage);
        }

        return view('jenis_tanaman.index', compact('jenis_tanaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jenis_tanaman.create');
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
        
        jenis_tanaman::create($requestData);

        return redirect('jenis_tanaman')->with('flash_message', 'jenis_tanaman added!');
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
        $jenis_tanaman = jenis_tanaman::findOrFail($id);

        return view('jenis_tanaman.show', compact('jenis_tanaman'));
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
        $jenis_tanaman = jenis_tanaman::findOrFail($id);

        return view('jenis_tanaman.edit', compact('jenis_tanaman'));
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
        
        $jenis_tanaman = jenis_tanaman::findOrFail($id);
        $jenis_tanaman->update($requestData);

        return redirect('jenis_tanaman')->with('flash_message', 'jenis_tanaman updated!');
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
        jenis_tanaman::destroy($id);

        return redirect('jenis_tanaman')->with('flash_message', 'jenis_tanaman deleted!');
    }
}