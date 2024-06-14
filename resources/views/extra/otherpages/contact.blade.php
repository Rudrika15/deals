<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.ico') }}">

    <title>Contact Us - Brandbeans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style-contact.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    p a {
        font-size: 1.1rem;
        line-height: 1.5rem;
        font-weight: 400;
        text-decoration: none !important;
        color: black;
    }

    .card {
        border-color: #002E6E;
        height: 15rem;
    }

    .icon {
        font-size: 2rem;
        text-align: center;
        padding: 2rem 0;
        color: #00B9F1;
    }

    .icon:hover {
        transition: all .2s ease;
        transform: translateY(-20px);
    }
</style>

<body>
    <div class="container ">
        <div class="row text-center justify-content-center">
            <div class="col-12 my-3">
                <h1 class="text-center ">Contact Us</h1>
            </div>

            <div class="col-lg-4 py-3">
                <div class="card ">
                    <i class="bi bi-telephone-fill icon"></i>
                    <div class="card-body">
                        <h5 class="card-title">Phone</h5>
                        <p class="card-text"><a href="tel:+917600891148">+91 7600891148</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 py-3">
                <div class="card">
                    <i class="bi bi-envelope-at-fill icon"></i>
                    <div class="card-body">
                        <h5 class="card-title">Email</h5>
                        <p class="card-text"><a href="mailto:support@brandbeans.biz">support@brandbeans.biz</a></p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 py-3">
                <div class="card">
                    <i class="bi bi-geo-alt-fill icon"></i>
                    <div class="card-body">
                        <h5 class="card-title">Address</h5>
                        <p class="card-text">1017, Shilp Epitome, b/d Rajpath Club, off Sindhu Bhavan Road, Ahmedabad
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>