@extends('layouts.master')

@section('content')
    <div class="container pt-5">
            <div class="col-md-6 offset-md-3 ">
            <h3><center>Buat Artikel</center></h3>
                
                <!--untuk menampilkan pesan yg didefinisikan pada controller-->
                <center>
                @if(Session::has('pesan'))
                    <div class="alert alert-success">
                        {{ Session::get('pesan')}}
                    </div>
                @endif
                </center>

                <form action="{{url("/artikel " ) }}" method="POST">

                 {{csrf_field()}} 

                    <div class="form-group">
                        <label for="">Judul Artikel</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Isi Artikel</label>
                        <textarea name="isi" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tags</label>
                        <input type="text" name="tag" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Simpan" >
                    <a href="{{url('artikel')}}" class="btn btn-warning">Daftar Artikel</a>
                </form>
            </div>
    </div>
@endsection