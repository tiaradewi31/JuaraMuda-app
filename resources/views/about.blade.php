<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logo.png" type = "image/x-icon">    
    <title>JuaraMuda | About Us</title>
    <link href="style/about.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <style>
    body{
      background: linear-gradient(to bottom, #213346, #9a465e);
      background-size: 100%;
      background-repeat: no-repeat;
      display: block;
      /* margin: 8px; */
    }
  </style>

  <body>
  @include('navbarabout')

  <div class="container">
    <svg xmlns="http://www.w3.org/2000/svg" onclick="goBack()" width="35" height="35" color="#fffff"  class="bi bi-chevron-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
    </svg>
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </div>
  
    <div class="container Logo text-center">
        <img src="img/Logo.png" alt="Logo JuaraMuda" style="width: 15%; padding-top: 5%;">
        <h1 class="v mt-3" style ="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #FFFFFF";> <b>JuaraMuda</b> </h1>
        <div class="card border border-0 mt-5 mb-4" style="background-color: #AF4A61; border-radius: 25px;">
          <div class="card-body mt-2 mb-2">
            <h4 class="Penjelasan" style ="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #FBFCFC;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates sint voluptas sunt! Id sint deserunt non perferendis ullam saepe, molestias dicta placeat voluptatem, reiciendis, labore aspernatur cupiditate corrupti! Inventore, non?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque natus voluptates, dolore reiciendis excepturi provident distinctio tenetur. Officia nemo architecto asperiores quis aut cum. Nam pariatur natus eum consectetur nulla.</h4>
          </div>
        </div>
    </div>  

    <div class="container mt-40 mb-5">
      <h3 class="text-center mt-5 mb-5"><b style ="font-family: 'Poppins', serif; src: url(https://fonts.google.com/specimen/Lobster); color: black; font-size:50px;">#TheChallengers</b></h3>
        <div class="row mt-30">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="box16">
              <img class="pic-1" src="img/Ais.jpg">
                <div class="box-content">
                  <h3 class="title">Aisyah Husna Alifah</h3>
                  <span class="post">Developer</span>
                  <ul class="social">
                    <li><a href="https://instagram.com/hsnasyah?igshid=NTc4MTIwNjQ2YQ=="><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="box16">
              <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar5.png">
                <div class="box-content">
                  <h3 class="title">Difa Safrina Fadilla</h3>
                  <span class="post">Product Owner</span>
                  <ul class="social">
                    <li><a href="https://instagram.com/difasafrina?igshid=NTc4MTIwNjQ2YQ=="><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="box16">
              <img class="pic-1" src="img/Rei.jpg">
                <div class="box-content">
                  <h3 class="title">Reisa Aulia Sodikin</h3>
                  <span class="post">Scrum Master</span>
                  <ul class="social">
                    <li><a href="https://www.instagram.com/reisa257/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="mailto:cacachan257@gmail.com"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="box16">
              <img class="pic-1" src="img/Tiara.jpg">
                <div class="box-content">
                  <h3 class="title">Tiara Dewi Ibnatun S</h3>
                  <span class="post">Developer</span>
                  <ul class="social">
                    <li><a href="https://www.instagram.com/tiaradewiis/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="mailto:tiaradewi3103@gmail.com"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </body>
</html>