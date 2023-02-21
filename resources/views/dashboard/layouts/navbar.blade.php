@extends('layouts.main')
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0099ff" style="position: absolute;">
    <div class="container">
        <a class="navbar-brand" href="/peminjaman">Peminjama Lapto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <p class="my-2 mx-4 text-white"><i class="bi bi-person-fill"></i> {{ auth()->user()->name }}</p>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/logout"><i class="bi bi-box-arrow-left"></i> Logout</a>
                </li>
                @endauth
                @guest
                <li class="nav-item ms-auto">
                    <a class="nav-link active" aria-current="page" href="/logout"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>