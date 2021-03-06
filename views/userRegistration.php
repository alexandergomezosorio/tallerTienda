<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/userRegistration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.css" integrity="sha512-Q0DfJ+I5cbH4Wm20NlPZ/fENHil7k3ZgzI9b71LfQAB1IlM8Gt7aO7eOPX2QzYT+4fZaF6u1kSfZAHczl4r/9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header class="p-3 mb-3 border-bottom bg-dark ">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <h1 class="text-white">THE STORE<i class="fas fa-shopping-cart"></i></h1>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../index.php" class="nav-link px-2 link-dark text-white">Home</a></li>
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
        <form action="" class="form">
            <h1 class="title">User Register</h1>
            <h5>First name</h5>
            <input name="fist name"type="text" class="input">
            <h5>Last name</h5>
            <input name="last name"type="text" class="input">
            <h5>Email</h5>
            <input name="email"type="email" class="input">
            <h5>Age</h5>
            <input name="age"type="number" class="input">
            <h5>Comments</h5>
            <textarea name="comments"class=" input"  name="descripcion"></textarea>
            <input name="boton"type="submit" class="submit">
        </form>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="form.js"></script>
</body>

</html>