@extends('layouts.main')
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    @if ($Book->image)

                    <img src="{{ asset('/storage/' . $Book->image) }}" alt=" {{ $Book->genre->name }}" class="img-fluid mt-3 me-5 ms-5" style="width: 400px;">
                    <!-- <img src="/assets/images/bulan.jpg " class="card-img-top " alt="{{$Book->genre->name }}"> -->
                    @else
                    <br>
                    <img src="https://source.unsplash.com/1200x400/?{{ $Book ->genre->name }}" class="card-img-top" alt="{{$Book->genre->name }}">


                    <!-- <img src="https://source.unsplash.com/1200x400/?{{ $Book ->genre->name }}" class="card-img-top" alt="{{$Book->genre->name }}"> -->
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">
                        <h3>Judul : {{ $Book->title}}</h3>
                        <p>ID Book : {{ $Book->id}}</p>
                        <p>Genre : {{ $Book->genre->name}}</p>
                        <p>Nomor ISBN : {{ $Book->isbn}}</p>
                        <p>Author : {{ $Book->author}}</p>
                    </div>
                    <h1 class="display-5 fw-bolder">Sinopsis</h1>
                    <p class="lead"> {{$Book->sinopsis}}</p>
                    <div class="d-flex">
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            Download E-Book
                        </button>
                        <a href="/"><button class="m-2 btn btn-outline-dark flex-shrink-0" type="button">
                                Back
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>