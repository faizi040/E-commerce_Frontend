<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>E-commerce Store</title>
</head>

<body>

    <div class="modal fade popup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               
                <div>
                    <div class="row px-3 popup-item pt-2">
                        <div class="col-4">
                            <div class="img">
                                <img src="images/p2.webp" alt="not found">
                            </div>
                        </div>
                        <div class="col-6">
                            <p>Grey California</p>
                            <p>Shoes</p>
                            <p>$3199.00</p>
                            <p class="text-secondary">Quantity 1</p>
                        </div>
                        <div class="col-2">
                            <a href="#"><i class="bi bi-x-lg"></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="row px-3 popup-item pt-2">
                        <div class="col-4">
                            <div class="img">
                                <img src="images/p2.webp" alt="not found">
                            </div>
                        </div>
                        <div class="col-6">
                            <p>Grey California</p>
                            <p>Shoes</p>
                            <p>$3199.00</p>
                            <p class="text-secondary">Quantity 1</p>
                        </div>
                        <div class="col-2">
                            <a href="#"><i class="bi bi-x-lg"></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3 px-3">
                        <div class="col-6 ps-5 header-btn">
                            <button > <a href="cart.php">View Cart</a></button>
                        </div>

                        <div class="col-6 ps-5 header-btn">
                        <button > <a href="checkout.php">Go to checkout</a></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>


    <section class="header py-3 d-flex  flex-wrap">
        <div class="header-icon ps-5">
            <a href="#" class="mx-1"><i class="bi bi-facebook"></i></a>
            <a href="#" class="mx-1"><i class="bi bi-twitter"></i></a>
            <a href="#" class="mx-1"><i class="bi bi-instagram"></i></a>
            <a href="#" class="mx-1"><i class="bi bi-linkedin"></i></a>
        </div>


        <div class="ms-auto header-second me-5 d-flex flex-wrap">


            <div class="header-conatct me-5 ">
                <a href="#"><span class="text-orange"><i class="bi bi-telephone-fill"></i></span> &nbsp;(+1) 234 5678
                    9101</a>
            </div>
            <div class="header-mail me-5 ">
                <a href="#"><span class="text-orange"><i class="bi bi-envelope-fill"></i></span>&nbsp;&nbsp;shop@yourdomain.com</a>
            </div>
            <div class="header-btn">
                <button><a href="login.php">Login</a></button>
            </div>
        </div>

    </section>

    <section class="mynav bg-white">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand ms-5" href="#">
                    <h1 class="fw-bold">Selling.</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header ">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Selling.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ">
                        <ul class="navbar-nav ms-auto me-5 pe-5 my-2 my-lg-0 navbar-nav-scroll">

                            <li class="nav-item mx-3">
                                <a class="nav-link " aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link " href="product.php">Products</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="about.php">About us</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link " href="special.php">Special</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link " href="testimonial.php">Testimonials</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link " href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link " href="contact.php">Contact</a>
                            </li>

                        </ul>

                        <div class="cart-icon pe-2">


                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-cart-fill"></i>
                            </button>


                        </div>

                    </div>


                </div>
            </div>
        </nav>
        <!-- <div class="cart-box">
            
        </div> -->

    </section>