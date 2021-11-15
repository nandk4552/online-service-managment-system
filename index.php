<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

    <title>mobylcare</title>

</head>

<body>
    <?php include 'partials/_header.php'; ?>

    <!-- error -->
    <?php
        
    ?>

    <!-- singup modal -->

    <!-- jumbotron starts -->

    <header class="jumbotron p-5 text-center">
        <h1 class="display-4">Welcome to mobykcare</h1>
        <p class="lead">Customer's Happiness is our Aim.</p>
        <a class="btn btn-success btn-lg" href="#" role="button">Login</a>
        <a class="btn btn-danger btn-lg" href="#" role="button" data-bs-toggle="modal" data-bs-target="#signup">Sign up</a>
    </header>
    <!-- jumbotron ends -->


    <!-- intro starts -->
    <div class="container">
        <div class="jumbotron p-5">
            <h3 class="text-center">mobylcare services</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In eos, harum culpa labore neque suscipit ipsa magni enim natus eius et. Quisquam quam obcaecati cupiditate commodi dignissimos dolor harum doloremque id. Aut expedita minima ipsa nulla tempora! Reiciendis tempora doloribus fugiat dolore nihil cumque pariatur vitae! Placeat consectetur illum laborum assumenda dignissimos vitae aut nisi ipsum blanditiis! Tempora eos aperiam laboriosam laudantium voluptatem dolore nihil voluptate? Dolor vitae hic voluptate eveniet labore quod deleniti aut, cum, quos asperiores placeat sint odio magnam voluptatum nemo. Dignissimos nisi sequi, reprehenderit suscipit inventore et numquam, blanditiis consectetur architecto nesciunt dolorum ipsam consequatur nostrum laboriosam aliquid commodi fugiat mollitia esse enim, est odit praesentium. Fuga, ab? Voluptatibus quaerat eaque dolorem provident numquam beatae earum, doloremque eligendi ad neque distinctio explicabo esse quo reprehenderit ut modi! Excepturi architecto vel quaerat saepe enim similique quis consequatur, atque voluptatibus quod necessitatibus eaque facilis provident dignissimos sed tenetur?</p>

        </div>
    </div>
    <!-- intro ends -->
    <?php include 'partials/_loginModal.php'; ?>

    <!--  services section starts-->
    <div class="container border-bottom">
        <h2 class="text-center display-4">our services</h2>
        <div class="row mt-4 mx-5">
            <div class="col-sm-4 mb-4 text-center">
                <a href="#"> <i class="fas fa-tv fa-8x"></i> </a>
                <h4 class="mt-4">Electronics Appliances</h4>
            </div>
            <div class="col-sm-4 mb-4 text-center">
                <a href="#"> <i class="fas fa-sliders-h fa-8x"></i> </a>
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4 text-center">
                <a href="#"> <i class="fas fa-cogs fa-8x text-info"></i> </a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>

        </div>
    </div>

    <!--  services section ends -->


    <!-- Review section starts -->

    <div class="container py-5">
        <h3 class="text-center display-4">What Our Customers Say</h3>
        <div class="jumbotron p-5 d-flex align-items-center gap-3">
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/300x300/?user,person" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/300x300/?user,person" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/300x300/?user,person" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Review section ends -->

    <?php
    include 'contact.php';
    ?>


    <!-- footer -->
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">© 2021 Company, Inc</p>
    </footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>