@extends('dashboard.layouts.sidebar')
<!-- <div class="d-flex justify-content-lg-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 border-bottom border-dark">
    <h2>Create New Project</h2>
</div> -->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="colmd-12">
                <div class="card border-0 shadow rounded mt-5">
                    <div class="card-header">
                        <h2>Create New genre
                            <a class="btn btn-primary float-end" href="/dashboard">Back</a>
                        </h2>
                    </div>

                    <div class="card-body">
                        <div class="pull-right">
                            <form action="{{ route('genre.store') }}" method="post" enctype="multipart/form-data" class="mb-5">

                                @csrf

                                <div class="mb-3">
                                    <label class="font-weight-bold">name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="font-weight-bold">Slug</label>
                                    <input type="text" class="form-control  @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ old('slug') }}">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form>
                        </div>
                        