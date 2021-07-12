<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css.map">
<link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>
</head>
<body>
    <!-- start navbar -->
    <nav>
        <div class="left">
            <ul class="d-flex justify-content-lg-end justify-content-xs-center justify-content-sm-center">
                <li> <a href="#home">Home</a> </li>
                <li> <a href="#about">About us</a> </li>
                <li><a href="#form">form</a></li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- start home page -->
    <main id="home">
        <figure>
            <div class="layer"></div>
            <div class="heading" >
                <h2 style="user-select: none; cursor: text;">RNA Secondary Structure Prediction</h2>
            </div>
        </figure>
    </main>
    <!-- data-aos="fade-up" data-aos-duration="1000" -->
    <!-- end home page -->
    <!-- start about section -->
    <section class="container-fluid about mb-5" id="about">
        <div class="row">
            <figure class="about__figure  col-lg-6 col-sm-6 d-none d-lg-block d-md-block " data-aos="fade-right" data-aos-duration="1000"></figure>
            <div class="about__content col-lg-6 col-md-6 col-12 pt-5" data-aos="fade-left" data-aos-duration="1000">
                <h2>About us</h2>
                <p>
                    RNA Secondary Structure Prediction is a website which uses in bioinformatics.
                </p>
            </div>
        </div>
    </section>
    <!-- end about section -->
    <!-- start form -->
    <section class="container-fluid mt-5 mb-2 form" id="form">
        <div class="panel-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                <img src="uploads/{{ Session::get('file') }}">
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <input type="file" name="file" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload Sequence</button>
                    </div>

                </div>
            </form>

        </div>
        </div>
    </section>
    <!-- end form -->
    <!-- start footer section -->
    <footer>
        <ul class="social__links text-center pt-4">
            <li> <i class="fab fa-twitter mr-2"></i></li>
            <li> <i class="fab fa-facebook-f mr-2"></i></li>
            <li> <i class="fab fa-instagram mr-2"></i></li>
            <li> <i class="fab fa-skype mr-2"></i></li>
            <li> <i class="fab fa-linkedin-in mr-2"></i></li>
        </ul>
    </footer>
    <!-- end footer section -->
    <!-- script -->
    <script src="js/smooth-scroll.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        </script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
    
</body>
</html>