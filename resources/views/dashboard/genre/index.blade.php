@extends('dashboard.layouts.sidebar')
<div class="row">
    <div class="col-lg-12 margin-tb mt-4">
        <div class="card shadow p-3 mb-5">
            @if (session('hapus'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session ('hapus') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card-header ">
                <h2>Data Genre
                </h2>
            </div>
            <div class="table-responsive col-lg-12">
                <a href="{{ route ('genre.create')}}" class="btn btn-primary mb-3 mt-5 mb-4"><i class="fas fa-plus"></i> Create New Genre </a>
                <table class="table table-striped table-dark table-sm table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Slug</th>
                            <th scope="col" style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        </tr>
                        <tr>

                        <tr>
                            @foreach($genres as $genre)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $genre->name }}</td>
                            <td class="text-center">{{ $genre->slug }}</td>
                            <td class="text-center">
                                <a href="/dashboard/genre/{{ $genre->id }}/edit" class="badge bg-warning text-dark "><i class="fas fa-edit"></i></a>
                                <a href="/dashboard/genre/{{ $genre->id }}" class="badge bg-info text-dark "><i class="fas fa-eye"></i></a>
                                <form action="/dashboard/genre/{{ $genre->id }}" method="post" class="d-inline">
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