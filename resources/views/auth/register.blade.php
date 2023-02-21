<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <!-- Section: Design Block -->
  <section class="">
    <!-- Jumbotron -->
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <form action="/register" method="POST">
                    <h1 class="text-center">Sig in</h1>

                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->

                    <div class="form-floating">
                      <input type="text" name="name" class="form-control mt-2" id="name" placeholder="name">
                      <label for="name">Name</label>
                    </div>

                    <div class="form-floating">
                      <input type="number" name="No" class="form-control mt-2" id="No" placeholder="Nomor Handphone">
                      <label for="No">Nomor Handphone</label>
                    </div>

                    <div class="form-floating">
                      <input type="text" name="address" class="form-control mt-2" id="address" placeholder="address">
                      <label for="address">Address</label>
                    </div>

                    <div class="form-floating">
                      <input type="email" name="email" class="form-control mt-2" id="email" placeholder="name@example.com">
                      <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                      <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                      <label for="password">Password</label>
                    </div>

                    <!-- Submit button -->
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                </div>
                
                </form>

                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>