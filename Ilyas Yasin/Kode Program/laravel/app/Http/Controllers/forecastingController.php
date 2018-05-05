<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\forecasting;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Lava;

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
            $jumlahx2 =  DB::table('forecasting')->sum('x2');
            $jumlahy2 =  DB::table('forecasting')->sum('y2');
            $jumlahxy =  DB::table('forecasting')->sum('xy');
            $count =  DB::table('forecasting')->count('dosis');
            return view('forecasting.index', compact('forecasting','jumlahx','jumlahy','jumlahx2','jumlahy2','jumlahxy','count'));
    }

    public function statistik(Request $request)
    {
            $forecasting = forecasting::all();
            $x = forecasting::find('dosis');
            $y = forecasting::find('ppm');
            return view('chart', compact('x','y','forecasting'));
    }

    public function PersamaanNilaiAB(){
        $x = forecasting::find('dosis');
        $y = forecasting::find('ppm');
        $jumlahx = DB::table('forecasting')->sum('dosis');
        $jumlahy = DB::table('forecasting')->sum('ppm');

        $x2 =  DB::table('forecasting')->sum('x2');
        $y2 =  DB::table('forecasting')->sum('y2');
        $xy =  DB::table('forecasting')->sum('xy');
        $count =  DB::table('forecasting')->count('dosis');
        $cariX;

        //Mencari Nilai B
            $b1 = $count * $xy - $jumlahx * $jumlahy; 
            $b2 = $count * $x2 - $jumlahx * $jumlahx;
            $b0 = $b1 / $b2;
            echo $b0;
        //Mencari Nilai A
            $a1 = $jumlahy - $b0 * $jumlahx;
            $a0 = $count / $a1;
            echo $a0;

        //menentukan persamaan regresi linier sederhana
            $y = $b0 + $a0 + $cariX;


             //Korelasi
            $r1 = $count * $xy - $jumlahx * $jumlahy;
            $r2 = $count * $x2 * - $jumlahx * $jumlahx / 0.5;
            $r3 = $count * $y2 - $jumlahy * $jumlahy / 0.5;

            //Cari $r
            $r = $r2 * $r3 / $r1;


                if ($r==0 < 1){
                    $r = 'hubungan variabel lemah';
                } 
                
                if ($r < 0){
                    $r = 'hubungan sangat kuat dan tidak searah';
                } 
                
                if ($r > 1){
                    $r = 'maka hubungannya sangat kuat dan searah';
                } 

                return $r;
        //koefisien determenasi
            $r2 = $r * $r2;
            echo $r2;
        //Mencari Nilai B
            $b1 = $count * $xy - $jumlahx * $jumlahy; 
            $b2 = $count * $x2 - $jumlahx * $jumlahx;
            $b0 = $b1 / $b2;
            echo $b0;
        //Mencari Nilai A
            $a1 = $jumlahy - $b0 * $jumlahx;
            $a0 = $count / $a1;
            echo $a0;

        // mencari determinasi
            $s1 = $y2 - $a0 * $jumlahy - $b0 * $xy;
            $s2 = $count - 2;
            $se = $s1 / $s2;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('forecasting.create1');
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
