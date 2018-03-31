@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">
                         <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                         <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th>X</th><th>Y</th>
                                        <th>X2</th>
                                        <th>Y2</th>
                                         <th>XY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($forecasting as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{  $item->dosis }}</td>
                                        <td>{{ $item->ppm }}</td>
                                        <td>{{ $item->dosis *  $item->dosis }}</td>
                                        <td>{{ $item->ppm * $item->ppm }}</td>
                                        <td>{{ $item->ppm * $item->dosis }}</td>
                                          
                                        <!-- <td>
                                            <a href="{{ url('/forecasting/' . $item->id) }}" title="View forecasting"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/forecasting/' . $item->id . '/edit') }}" title="Edit forecasting"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/forecasting' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete forecasting" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td> -->
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                               <div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                         <th>Jumlah X</th>
                                          <th>Jumlah Y</th>
                                           <th>Jumlah X2</th>
                                            <th>Jumlah Y2</th>
                                             <th>Jumlah XY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         <td>{{ $jumlahx }}</td>
                                         <td>{{ $jumlahy }}</td>
                                         <td>{{ $x2}}</td>
                                         <td>{{ $y2 }}</td>
                                         <td>{{ $xy}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                              <div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                        <th>Menghitung Nilai Miring = b</th>
                                       <th>Nilai b</th>
                                        <th>Nilai b</th>
                                         <th>Menghitung Nilai Miring = a</th>
                                         <th>Menentukan Besar Kesalahan Standar Estimasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         <td>{{ $b1 = $count * $xy - $jumlahx * $jumlahy  }}</td>
                                             <td>{{ $b2 = $count * $x2 - ($jumlahx * $jumlahx) }}</td> 
                                           <td> {{ $b1 / $b2 }} </td>
                                            <td>{{ $a = $jumlahy - 200 * $jumlahx }}</td>
                                            <td>{{ $y2 - 0 * $jumlahy - 200 * $xy / $count - 2 }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                              <div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                        <th>Hasil R1</th>
                                        <th>Hasil R2</th>
                                        <th>Hasil R3</th>
                                         <th>Hasil Koefisien Determinasi R1 / R2 * R3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         <td>{{ $r1 = $count * $xy -  $jumlahx * $jumlahy  }}</td>
                                         <td>{{  $r2 = ($count * $x2 - $jumlahx * $jumlahx)*0.5 }}</td>
                                         <td>{{  $r3 = ($count * $y2 - $jumlahy * $jumlahy)*0.5 }}</td>
                                         <td>{{ $r1 / $r2 * $r3 }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
