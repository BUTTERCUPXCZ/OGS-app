<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title","Login")</title>
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

         
<section class="vh-90" style="background-color: lightgray;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-90">
      <div  class="col-md-6">
        <h1 class=" fw-bold mb-3">Welcome!</h1>
        <p>Manage your courses, submit grades, and communicate seamlessly  with <br> the admin and teachers. Your contributions ensure a high standard of<br> education and support. Thank you for your dedication and commitment!</p>
      </div>
      <div class="col-12 col-md-5 col-lg-5 col-xl-5 custom-heigth">
        <div class="card bg-white text-black" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <!-- Move inputs lower -->
            <div class="mb-md-5 mt-md-4 pb-5">
             <img src="{{ asset('Image/schoollogo.png') }}" alt="">
              <h2 class="fw-bold mb-5 text-uppercase" style="color: darkgreen;">School portal</h2>

              <!-- Add margin-top to move the input fields down -->
              <div data-mdb-input-init class="form-outline form-white mb-4" >
                <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Enter your ID"/>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4" >
                <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Enter your password"/>
              </div>

              <p class="small mb-5 pb-lg-2 justify-content-end"><a class="text-black-50" href="#!">Forgot password?</a></p>

              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg px-5" type="submit" style="background-color: darkgreen; color: white;">Login</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <a href="#!" class="text-decoration-none text-black-50 fw-bold">Login as Admin</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


     
</body>
</html>