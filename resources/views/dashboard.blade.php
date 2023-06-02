<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logo.png" type = "image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>JuaraMuda | Homepage</title>
    </head>
    <style>
      body{
          background: linear-gradient(to bottom, #213346, #9a465e);
          background-size: cover;          
      }
      .btn-outline-go{
        background-color: white;
        color: black;
        border-color: #213346;
        border-width: medium;
      }
      .btn-outline-go:hover {
        background-color: #213346;
        color: white;
        border-color: white;
        border-width: medium;
      }
      .buttongo-center{
        padding-left: 140px;
        padding-top: 10px;
      }
    </style>    
  <body>

  @include('navbar')

    <div class="container" style="padding-top: 70px; padding-bottom: 10px;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/beasiswa.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/lomba.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <div class="col"><div class="card-center">
                <img src="img/buttonbeasiswa.png" class="card-img-top" alt="...">
              </div>
              <div class="buttongo-center">
                <a class="text-center"href="/searchbeasiswa">
                  <button class="btn btn-outline-go">CARI BEASISWA</button>
                </a>
              </div>
            </div>
            <div class="col"><div class="card-center">
                <img src="img/buttonlomba.jpg" class="card-img-top" alt="...">
              </div>
              <div class="buttongo-center">
                <a class="text-center"href="/searchlomba">
                  <button class="btn btn-outline-go">CARI LOMBA</button>
                </a>
              </div>
            </div>
            <div class="col"><div class="card-center">
                <img src="img/buttonkatamereka.jpg" class="card-img-top" alt="...">
              </div>
              <div class="buttongo-center">
                <a class="text-center"href="/katamereka">
                  <button class="btn btn-outline-go">#KataMereka</button>
                </a>
              </div>
            </div>
      </div>
    </div>

  </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>