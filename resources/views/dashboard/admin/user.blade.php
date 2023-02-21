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
                <h2>Data Siswa
                </h2>
            </div>
            <div class="table-responsive col-lg-12">
                <a href="{{ route ('admin.create')}}" class="btn btn-primary mb-3 mt-5 mb-4"><i class="fas fa-plus"></i> Create New Project </a>
                <table class="table table-striped table-dark table-sm table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col" style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        </tr>
                        <tr>

                        <tr>
                            @foreach($users as $user)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">{{ $user->address }}</td>
                            <td class="text-center">{{ $user->No }}</td>
                            <td class="text-center">
                                <a href="/dashboard/Book/{{ $user->id }}/edit" class="badge bg-warning text-dark "><i class="fas fa-edit"></i></a>
                                <a href="/dashboard/Book/{{ $user->id }}" class="badge bg-info text-dark "><i class="fas fa-eye"></i></a>
                                <form action="/dashboard/Book/{{ $user->id }}" method="post" class="d-inline">
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