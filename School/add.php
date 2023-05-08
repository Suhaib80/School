<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Inquiry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assest/css/style.css">
</head>
<body>
    <!-- Tophead section start -->

<div class="tophead bg-primary text-white fw-bold">
      <div class="container">
        <div class="row pt-2">
          <div class="col-md-6">
            <ul class="list-unstyled d-flex">
              <li class="me-3"><a href="mailto:demo@gmail.com" class="text-white"><i
                    class="fa-solid fa-envelope"></i>demo@gmail.com |</a></li>
              <li class="me-3"><a href="tel:+91-6200011999" class="text-white"><i
                    class="fa-solid fa-phone"></i>+91-6200011999</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled d-flex float-end">
              <li class="me-3"><a href="" class="text-white"><i class="fa-brands fa-facebook"></i></a></li>
              <li class="me-3"><a href="" class="text-white"><i class="fa-brands fa-instagram"></i></a></li>
              <li class="me-3"><a href="" class="text-white"><i class="fa-brands fa-twitter"></i></a></li>
              <li class="me-3"><a href="" class="text-white"><i class="fa-brands fa-youtube"></i></a></li>
              <li class="ms-3"><a href="" class="text-white"><i class="fa-brands fa-whatsapp"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tophead section end -->
  
    <!-- Header section start -->
  
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="./assest/img/logo1.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admission Inquiry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Fee Submission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  
    <!-- Header section end -->


    <!-- Banner section start -->

      <div class="inner-banner">
        <div class="bannertext pt-5">
         <h1 class="fw-bold text-center mt-5">ADMISSION INQUIRY</h1>
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-2">
            <li class="breadcrumb-item ms-auto">
              <a href="index.php">Home</a></li>
            <li class="breadcrumb-item me-auto active" aria-current="page">
              Admission Inquiry
            </li>
          </ol>
         </nav> 
        </div>
      </div>

    <!-- Banner section end -->

    <!-- form section start -->

      <form action method>
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto my-4">
              <div class="form border rounded p-4" style="box-shadow: 0px 0px 10px 2px rgb(225, 222, 222);">
                <h4 class="1h-1">Admission Inquiry</h4>
                <hr>
                <h6 class="1h-1">School:</h6>
                <p>Saibaba School</p>
                <label for="formGroupExample1" class="form-lable">
                  <span style="color: red;">*</span>
                  Class:
                </label>
                <select class="form-select mb-3" aria-label="Default select example" id="formGroupExample1">
                  <option selected>Select Class</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <label for="formGroupExample1" class="form-lable">
                  <span style="color: red;">*</span>
                  Section:
                </label>
                <select class="form-select mb-3" aria-label="Default select example" id="formGroupExample1">
                  <option selected>Select Section</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInpu2" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Phonenumber">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput3" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Enter Your Email">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput4" class="form-label">Reference:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput4" placeholder="Enter Reference">
                  </div>
                  <label for="floatingTextarea" class="mb-3">Message:</label>
                  <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px;"></textarea>
                  <label for="floatingTextarea2">Enter Message</label>
                </div>
                <hr>
                <button type="submit" class="btn btn-info rounded-0 text-light fw-bold">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>

    <!-- form section end -->


     <!-- footer section start -->
 <footer class="bg-dark">
    <div class="container">
      <div class="row py-3 text-white" style="text-align:justify;">
        <div class="col-md-3">
          <ul class="list-unstyled">
            <li><a href=""><img src="./assest/img/logo1 - Copy.png" alt="" height="150px"></a></li>
            <li class="fw-bold fs-5">R.P.E. SCHOOL</li>
            <li>Jaitipur, Chandi, Nalanda, Bihar</li>
            <li>803108</li>
          </ul>
        </div>
        <div class="col-md-3">
          <p class="fw-bold fs-4">
            <span class="fw-bold text-primary">|</span>
             Recent Posts
          </p>
          <ul class="list-unstyled">
            <li>Welcome back to R.P.E.SCHOOL</li>
            <li>Hello World</li>
            <li>Hello World</li>
            <li>Hello World</li>
          </ul>
        </div>
        <div class="col-md-3">
          <p class="fw-bold fs-4">
            <span class="fw-bold text-primary">|</span>
             Quik Link
          </p>
          <ul class="list-unstyled" id="lin">
            <li><a href="" class="text-white">Admission Inquiry</a></li>
            <li><a href="" class="text-white">Fee Submission</a></li>
            <li><a href="" class="text-white">Contact Us</a></li>
            <li><a href="" class="text-white">Login</a></li>
            <li><a href="" class="text-white">Register</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <p class="fw-bold fs-4">
            <span class="fw-bold text-primary">|</span>
             Contact Info
          </p>
          <ul class="list-unstyled">
            <li><a href=""><i class="fa-solid fa-location-dot fs-3"></i></a></li>
            <li><a href=""><i class="fa-solid fa-phone fs-3"></i></a></li>
            <li><a href=""></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="./assest/js/index.js"></script>
</body>
</html>