@extends('layouts.master')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2  pt-5">
                    <h3><center>Detail Artikel</center></h3>
                    <br>
                    <br>
                    
                    <table class="table table-bordered table-striped">
                    <tbody>
                    
                    <tr>
                        <h3>Judul : {{$artikel->judul}}</h3>
                        Slug: {{$artikel->slug}}
                        <p>{{$artikel->isi}}</p>
                    </tr>

                </tbody>
            </table>
                   
                </div>

            </div>
        </div>
@endsection