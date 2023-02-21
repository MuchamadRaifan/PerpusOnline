@extends('dashboard.layouts.sidebar')
<!-- Navigation-->

<!-- Product section-->
<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6">
            @if ($Book->image)

            <img src="{{ asset('/storage/' . $Book->image) }}" alt=" {{ $Book->genre->name }}" class="img-fluid mt-3 me-5 ms-5" style="width: 400px;">
            <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$Book->genre->name }}"> -->
            @else
            <br>
            <img src="https://source.unsplash.com/1200x400/?{{ $Book ->genre->name }}" class="card-img-top" alt="{{$Book->genre->name }}">
            @endif


            <!-- <img src="https://source.unsplash.com/1200x400/?{{ $Book ->genre->name }}" class="card-img-top" alt="{{$Book->genre->name }}"> -->
        </div>
        <div class="col-md-6">
            <div class="small mb-1">
                <h3>Judul : {{ $Book->title}}</h3>
                <p>ID Book : {{ $Book->id}}</p>
                <p>Genre : {{ $Book->genre->name}}</p>
                <p>Nomor ISBN : {{ $Book->isbn}}</p>
                <p>Author : {{ $Book->author}}</p>
            </div>
            <div class="row">
                <p>Publisher : {{ $Book->created_at}}</p>
            </div>
            <h1 class="display-5 fw-bolder">Sinopsis</h1>
            <p class="lead"> {!! $Book->sinopsis !!}</p>
            <div class=" col-lg-7 mt-5 ms-auto mb-3">
                <a href="/dashboard" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my project</a>

                <a href="/dashboard/Book/{{ $Book->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>

                <form action="/dashboard/Book/{{ $Book->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0 btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i class="fas fa-trash"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
