@extends('layouts.app')

@section('judul')
    Galeri
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Pic</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="/">Home<span class="sr-only active">(current)</span> </a>
                </div>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container mt-5">
        <form action="{{ route('galeri.create') }}">
            @csrf
            <input type="submit" class="btn btn-primary" value="tambah">
        </form>
        <div class="row row-cols-2" >
            @foreach($galeris as $galeri)

                <div class="card" style="width: 18rem">
                    <img src="/" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $galeri->nama }}</h5>
                        <p class="card-text">{{$galeri->desc}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
