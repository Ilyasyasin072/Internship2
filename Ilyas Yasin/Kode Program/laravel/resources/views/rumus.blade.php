@extends('admin.index')
@section('content')
</br>
</br>

<div class="container">
        <div class="row">
                         <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Rumus Regresi Linier Sederhana</h4>
                                <p class="category">Hydrponics Assistant</p>
                                </br>
                              <div class="container">
        <div class="row">
                         <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <p>Y = a + b (X)</p>
                                 
                                <p>a = adalah nilai Konstanta</p>
                                <p>b = Koefisien regresi</p>
                                <p>Y = Variabel dependen (variabel tidak terbatas)</p>
                                <p>X = Vairabel independen (variabel bebeas)</p>
                                <p></p>
                               
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                
                                <div class="container">
        <div class="row">
                         <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mencari Nilai b Koefisien regresi</h4>
                                <p class="category">Hydrponics Assistant</p>
                               <div class="container">
                            <p>b =  n(Σxy)-(Σx) * (Σy)</p>
                            <p>n(Σx²) - (Σx)²</p>

                                </div>
                                <div class="container">
                            <p>a =  (Σy) - b  * (Σx) / n</p> 
                          

                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                

                                <div class="container">
        <div class="row">
                         <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mencari Koefisien Korelasi</h4>
                                <p class="category">Hydrponics Assistant</p>
                             <div class="container">
                           <p>r =  n(Σxy)-(Σx) * (Σy)</p>
                            <p>[n(Σx²) - (Σx)²] * 1/2 [n(Σy²) - (Σy)²] * 1/2 </p>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                 <div class="container">
        <div class="row">
                         <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mencari Koefisien Korelasi</h4>
                                <p class="category">Hydrponics Assistant</p>
                             <div class="container">
                           <p>se =  akar(Σy²) - (a) * (Σy) - b * (Σxy) )</p>
                            <p>n - 2</p>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>

                                 <div class="container">
        <div class="row">
                         <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mencari Dosis dan Jumlah nutrisi (ppm) berdasarkan Electrical Conductivity</h4>
                                <p class="category">Hydrponics Assistant</p>
                             <div class="container">
                           <p>( ( ml x EC ) / Lt ) x D</p>
                           <p>Sample (5ml) X EC(2.0) / 5(1liter) x (500ml)</p>
                           <h3>PENJELASAN<h3>
                            <p>1. ml = jumlah nutrisi ( masing masing A dan B )</p>
                            <p>2. EC = jumlah EC pada kemasan Nutrisi Hidroponik</p>
                            <p>Lt = pembagi perliter</p>
                            <p>a. untuk 1 liter = 5</p>
                            <p>b. untuk 2 liter = 10</p>
                            <p>c. untuk 3 liter = 15</p>
                            <p>3. D = Jumlah masing-masing nutrisi 500ml</p>
                           
                <a href="http://www.kebunpedia.com/threads/share-cara-menghitung-ppm-dari-nutrisi-hidroponik-berdasarkan-ec.5885/">
                       <p> Referensi</p>
                    </a>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                
   
@endsection