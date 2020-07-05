@extends('layouts.master')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2  pt-5">
                    <h3><center>Daftar Artikel</center></h3>

                    <br>
                    <a href="{{url('artikel/create')}}" class="btn btn-primary">Tambah</a>
                    <br>
                    <br>
                    
                    <table class="table table-bordered table-striped">
                       
                        <tbody>
                            @foreach($semua_artikel as $artikel)
                                <tr>
                                    <td>
                                        <h3>{{$artikel->judul}}</h3>
                                    </td>
                                    
                                    <td>
                                        <a href="{{url("artikel/$artikel->id")}}" > Lihat Artikel </a>|
                                        <a href="{{url("artikel/$artikel->id/edit")}}" > Edit </a>|
                                        <a href="{{url("artikel/$artikel->id/delete")}}" > Hapus </a>
                                    </td>

                                </tr>


                            @endforeach
                        </tbody>
                    </table>
                    {{$semua_artikel->links()}}
                </div>

            </div>
        </div>
@endsection