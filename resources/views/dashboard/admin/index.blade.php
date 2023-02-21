@extends('dashboard.layouts.sidebar')
<div class="row">
    <div class="col-lg-12 margin-tb mt-4">
        <div class="card shadow p-3 mb-5">
            @if (session('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session ('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card-header ">
                <!-- <img src="/img/2.png" style="width: 200px;"> -->
                <!-- <img src="/img/logo5.png" height="200" width="400px"> -->
                <h2>Data Book
                </h2>
            </div>
            <div class="table-responsive col-lg-12">
                <a href="{{ route ('admin.create')}}" class="btn btn-primary mb-3 mt-5 mb-4"><i class="fas fa-plus"></i> Create New Project </a>
                <table class="table table-striped table-dark table-sm table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Title</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Syinopsis</th>
                            <th scope="col">Cover Book</th>
                            <th scope="col" style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        </tr>
                        <tr>

                            @foreach ( $Books as $Book)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $Book->genre }}</td>
                            <td class="text-center">{{ $Book->title }}</td>
                            <td class="text-center">{{ $Book->isbn }}</td>
                            <td class="text-center">{{ $Book->sinopsis }}</td>
                            <!-- <td><img src="/img/{{ $Book->image }}" alt="" width="200px"></td> -->
                            <td>
                                @if ($Book->image)

                                <img src="{{ asset('/storage/' . $Book->image) }}" alt=" {{ $Book->genre->name }}" width="200px">
                                <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$Book->genre->name }}"> -->
                                @else
                                <br>
                                <img src="https://source.unsplash.com/1200x400/?{{ $Book->genre->name }}" width="200px" alt="{{$Book->genre->name }}">


                                <!-- <img src="https://source.unsplash.com/1200x400/?{{ $Book->genre->name }}" class="card-img-top" alt="{{$Book->genre->name }}"> -->
                                @endif

                            </td>
                            <td class="text-center">
                                <a href="/dashboard/Book/{{ $Book->id }}/edit" class="badge bg-warning text-dark "><i class="fas fa-edit"></i></a>
                                <a href="/dashboard/Book/{{ $Book->id }}" class="badge bg-info text-dark "><i class="fas fa-eye"></i></a>
                                <form action="/dashboard/Book/{{ $Book->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0 btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i class="fas fa-trash"></i></button>
                                </form>
                        </tr>
                        @endforeach

                        </td>
                        </th>
                        </tr>
            </div>
        </div>
    </div>

</div>
