@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">jenis_tanaman {{ $jenis_tanaman->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/jenis_tanaman') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/jenis_tanaman/' . $jenis_tanaman->id . '/edit') }}" title="Edit jenis_tanaman"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('jenis_tanaman' . '/' . $jenis_tanaman->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete jenis_tanaman" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $jenis_tanaman->id }}</td>
                                    </tr>
                                    <tr><th> Jenis Tanaman </th><td> {{ $jenis_tanaman->jenis_tanaman }} </td></tr><tr><th> Jmlh Ppm </th><td> {{ $jenis_tanaman->jmlh_ppm }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
