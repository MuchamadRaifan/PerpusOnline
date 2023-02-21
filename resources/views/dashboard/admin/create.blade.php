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
                        <h2>Create New Post
                            <a class="btn btn-primary float-end" href="/dashboard">Back</a>
                        </h2>
                    </div>

                    <div class="card-body">
                        <div class="pull-right">
                            <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data" class="mb-5">

                                @csrf

                                <div class="mb-3">
                                    <label class="font-weight-bold">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required value="{{ old('title') }}">
                                    @error('title')
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

                                <div class="row">
                                    <div class="mb-3">
                                        <label class="font-weight-bold">isbn</label>
                                        <input type="number" class="form-control  @error('isbn') is-invalid @enderror" name="isbn" id="isbn" value="{{ old('isbn') }}">
                                        @error('isbn')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="font-weight-bold">Author</label>
                                        <input type="text" class="form-control  @error('author') is-invalid @enderror" name="author" id="author" value="{{ old('author') }}">
                                        @error('author')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label for="genre_id" class="form-label">genre</label>
                                    <select class="form-control" name="genre_id">
                                        @foreach ( $genre as $genre)
                                        @if (old('genre_id') == $genre->id)
                                        <option value="{{ $genre->id }}" selected>{{ $genre->name }}</option>
                                        @else
                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload Image</label>
                                    <img class="img-preview img-fluid mb-3 col-sm-6">
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <!-- <div class="mb-3">
                                    <label for="sinopsis" class="form-label  @error('name') is-invalid @enderror">sinopsis</label>
                                    @error('sinopsis')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input id="sinopsis" type="hidden" name="sinopsis" value="{{ old('sinopsis') }}">
                                    <trix-editor input="sinopsis" class="bg-light"></trix-editor>
                                </div> -->

                                <div class="mb-3">
                                    <label class="font-weight-bold">Sinopsis</label>
                                    <input type="text" class="form-control  @error('sinopsis') is-invalid @enderror" name="sinopsis" id="sinopsis" value="{{ old('sinopsis') }}">
                                    @error('sinopsis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form>
                        </div>
                        <script>
                            const title = document.querySelector('#title');
                            const slug = document.querySelector('#slug');


                            title.addEventListener('change', function() {
                                fetch('/dashboard/projects/checkSlug?title=' + title.value)
                                    .then(response => response.json())
                                    .then(data => slug.value = data.slug)
                            });

                            // script preview image
                            function previewImage() {
                                const image = document.querySelector('#image');
                                const imgPreview = document.querySelector('.img-preview');

                                imgPreview.style.display = 'block';

                                const oFReader = new FileReader();
                                oFReader.readAsDataURL(image.files[0]);

                                oFReader.onload = function(oFREvent) {
                                    imgPreview.src = oFREvent.target.result;
                                }
                            }
                        </script>