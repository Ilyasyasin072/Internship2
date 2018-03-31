<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\forecasting;
use Illuminate\Http\Request;

class forecastingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(Request $request)
    {
            $forecasting = forecasting::all();
            $x = forecasting::find('dosis');
            $y = forecasting::find('ppm');
            $jumlahx = DB::table('forecasting')->sum('dosis');
            $jumlahy = DB::table('forecasting')->sum('ppm');
            $x2 = 191.9425;
            $y2 = 7677700;
            $xy = 38388.5;
            $count =  DB::table('forecasting')->count('dosis');
            return view('forecasting.index', compact('forecasting','jumlahx','jumlahy','x2','y2','xy','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('forecasting.create');
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
        
        forecasting::create($requestData);

        return redirect('forecasting')->with('flash_message', 'forecasting added!');
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
        $forecasting = forecasting::findOrFail($id);

        return view('forecasting.show', compact('forecasting'));
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
        $forecasting = forecasting::findOrFail($id);

        return view('forecasting.edit', compact('forecasting'));
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
        
        $forecasting = forecasting::findOrFail($id);
        $forecasting->update($requestData);

        return redirect('forecasting')->with('flash_message', 'forecasting updated!');
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
        forecasting::destroy($id);

        return redirect('forecasting')->with('flash_message', 'forecasting deleted!');
    }
}
