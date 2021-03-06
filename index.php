<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.css" integrity="sha512-Q0DfJ+I5cbH4Wm20NlPZ/fENHil7k3ZgzI9b71LfQAB1IlM8Gt7aO7eOPX2QzYT+4fZaF6u1kSfZAHczl4r/9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header class="p-3 mb-3 border-bottom bg-dark ">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <h1 class="text-white">THE STORE<i class="fas fa-shopping-cart"></i></h1>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./index.php" class="nav-link px-2 link-dark text-white">Home</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark text-white">About us</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark text-white">Offers of the day</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark text-white">Customer service</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark text-white">Contact</a></li>
                    <li><a href="./views/userRegistration.php" class="nav-link px-2 link-dark text-white">User registration</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

            </div>
        </div>
        </div>
        <div class="linea1 text-center text-white">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odio aspernatur eaque ullam doloremque consequatur dolorem dignissimos voluptatem perferendis asperiores!</p>
        </div>
        </div>
    </header>
    <main>
        <div class="banner">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./public/img/img1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/img3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/img4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/img5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/img6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/img7.jpg" class="d-block w-100" alt="...">
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4" id="cards">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title ">Sports</h3>
                            <a href="./views/sports.php"><img src="./public/img/deportes (2).jpg" id="img" class="rounded mx-auto d-block" alt="..."></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="cards">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title ">Technology</h3>
                            <a href="./views/technology.php"><img src="./public/img/tecno4.jpg" id="img" class="rounded mx-auto d-block" alt="..."></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-1">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4" id="cards">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title ">Home appliances</h3>
                            <a href=""><img src="./public/img/electro4.jpg" id="img" class="rounded mx-auto d-block" alt="..."></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="cards">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title ">Home and fashion</h3>
                            <a href=""><img src="./public/img/hogar4.jpg" id="img" class="rounded mx-auto d-block" alt="..."></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>