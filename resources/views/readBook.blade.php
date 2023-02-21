@extends('layouts.main')


<div class="container">
    <div class="row my-3">

    </div>
</div>

<section class="section" id="services">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item service-item">
                    <div class="">

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start shadow">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">


                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="shadow ms-5">
                        @if ($Book->image)

                        <img src="{{ asset('/storage/' . $Book->image) }}" alt=" {{ $Book->genre->name }}" class="img-fluid mt-3 me-5 ms-5" style="width: 400px;">
                        <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$Book->genre->name }}"> -->
                        @else
                        <br>
                        <img src="https://source.unsplash.com/1200x400/?{{ $Book ->genre->name }}" class="card-img-top" alt="{{$Book->genre->name }}">


                        <!-- <img src="https://source.unsplash.com/1200x400/?{{ $Book ->genre->name }}" class="card-img-top" alt="{{$Book->genre->name }}"> -->
                        @endif

                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="row">
                        <h3>Judul : {{ $Book->title}}</h3>
                        <p>ID Book : {{ $Book->id}}</p>
                        <p>Genre : {{ $Book->genre->name}}</p>
                        <p>Nomor ISBN : {{ $Book->isbn}}</p>
                        <p>Author : {{ $Book->author}}</p>
                    </div>
                    <div class="row">
                        <p>Publisher : {{ $Book->created_at}}</p>
                        <p>Sinopsis : {!! $Book->sinopsis !!}</p>
                    </div>
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
    </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->