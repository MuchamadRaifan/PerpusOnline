<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- my css --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/showcss">
    <link rel="stylesheet" href="/css/sidebar.css">

    {{-- box icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
</head>

<body id="body-pd">
    <header class="header bg-light" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="dropdown">
            <a href="#" class="m-2 text-light" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle text-primary" style="font-size: 40px"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item disabled" href="#">Hai, {{ auth()->user()->name }}</a></li>
                <li><a class="dropdown-item" href="/">Beranda</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt te"></i></i> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">WikBook</span> </a>
                <div class="nav_list">
                    <a class="nav_link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a class="nav_link {{ Request::is('dashboard/user') ? 'active' : '' }}" href="/dashboard/user"> <i class='bx bx-user nav_icon'></i> <span class=" nav_name">Users</span> </a>
                    <a class="nav_link {{ Request::is('dashboard/book') ? 'active' : '' }}" href="/dashboard/book"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Book</span> </a>
                    <a class="nav_link {{ Request::is('dashboard/genre') ? 'active' : '' }}" href="/dashboard/genre"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Genre Book</span> </a>
                </div>
            </div>
        </nav>
    </div>
    <!--Container Main start-->
    <!-- <div class="height-100 bg-light" style="margin-top: 100px;">
        @yield('section')
    </div> -->
    <!--Container Main end-->

    <script type="text/javascript" src="/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>
