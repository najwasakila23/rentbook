<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>N-rentBook</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/five.png" alt="Bootstrap" width="40" height="40">
                <b>N-rentBook</b>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                            <li><a class="dropdown-item" href="#">Comedy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        @if (Auth::user())
                        <a class="nav-link btn btn-white active" href="/logout">logout</a>
                        @else
                        <a class="nav-link btn btn-white active" href="/login">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <!--Carousel-->
    <div id="carouselExampleInterval" class="carousel slide" style="max-height: 600px; max-width: 100%" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="https://img.freepik.com/premium-vector/flyer-brochure-poster-design-business-template-a4-size-presentation-company-profile_10876-1034.jpg?w=740" class="d-block w-100" alt="..." style="max-height: 600px">
            </div>
            <div class=" carousel-item" data-bs-interval="5000">
                <img src="https://img.freepik.com/premium-psd/new-product-landing-page-banner-home-furniture-template_66542-154.jpg?w=826" class="d-block w-100" alt="..." style="max-height: 600px">
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/premium-psd/best-product-home-furniture-template-psd_66542-155.jpg?w=826" class="d-block w-100" alt="..." style="max-height: 600px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--End Carousel-->

    <!--Jumbotraon-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
                <h5>N-rentBook</h5>
                <a href="/register" class="btn btn-outline-primary">Ayok Daftar</a>
            </div>
            <div class="col-8">
                <p class="bi bi-journal-bookmark"> N-rent Book are all websites where readers can read and borrow books available on N-rent Book for &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free, there are many types of books that can be read and borrowed, let's register and enjoy reading !!</p>
            </div>
        </div>
    </div>
    <!-- End Jumbotraon-->

    <!--Popular Book-->
    <section style="background-color: #f2dfc2; height: 700px;">
        <div class="container mt-5">
            <div class="row text-center">
                <h2>Popular Books</h2>
            </div>
            <div class="row mt-4 ms-5">
                <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/cover/bintang.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                        <div class="card-body">
                            <h5 class="card-title">Bintang</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/login" class="btn btn-primary w-100">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/cover/top1.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                        <div class="card-body">
                            <h5 class="card-title">Bumi</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/login" class="btn btn-primary w-100">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/cover/top2.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                        <div class="card-body">
                            <h5 class="card-title">Bulan</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/login" class="btn btn-primary w-100">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Popular Book-->

    <!--Contact-->
    <div class="container">
        <div class="row text-center">
            <h2>Messege</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="/" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="messege" class="form-label">Message</label>
                        <textarea name="messege" class="form-control" id="messege"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <!--End Contact-->

    <!-- Footer -->
    <footer class="bg-secondary text-center" style="height:50px;">
        <p>Crated by <a href="https://www.instagram.com/sakilanjwz_/" style="text-decoration: none; color: white;" target="_blank">sakilanjwz_</a></p>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>