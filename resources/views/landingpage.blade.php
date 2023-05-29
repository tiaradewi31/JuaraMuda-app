<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/Logo.png" type = "image/x-icon">
  <link rel="stylesheet" href="style/landing.css">
  <title>JuaraMuda</title>
</head>
<style>
      body{
          background: linear-gradient(to bottom, #213346, #9a465e);
          background-size: cover;          
      }
      .btn-outline-go{
        background-color: white;
        color: black;
        border-color: rgb(136, 212, 255);
        border-width: medium;
      }
      .btn-outline-go:hover {
        background-color: rgb(136, 212, 255);
        color: white;
        border-color: black;
        border-width: medium;
      }
</style>
<body>
  <main>
    <div class="big-wrapper">
      <header>
        <div class="container">
          <div class="logo">
            <img src="img/Logo.png" alt="Logo">
            <h3>JuaraMuda</h3>
          </div>

          <div class="links">
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#" class="btn">Get Started</a></li>
            </ul>
          </div>
        </div>
      </header>

<!-- showcase area start-->
      <div class="showcase-area">
        <div class="container">
            <div class="left">
                <div class="big-title">
                    <h1>Opportunity</h1>
                    <h1>Only Comes</h1>
                    <h1>Once</h1>
                </div>
                <p class="text">
                    “Jangan Biarkan Impianmu Terhenti, Raihlah Masa Depanmu dengan JuaraMuda!”
                </p>
                <div class="cta">
                    <a href="#" class="btn">What is JuaraMuda?</a>
                </div>
            </div>

            <div class="right">
                <img src="img/circle.png" alt="circle" class="circle">
            </div>
        </div>
      </div>

      <!-- <div class="showcase-area">
        <div class="container">
            <div class="left">
                <img src="img/juara.png" alt="whatisjuaramuda">
            </div>

            <div class="right">
                <h3>What is JuaraMuda?</h3>
                <div class="big-title">
                    <h4> JuaraMuda adalah Platform yang menyediakan informasi aktual, akurat, dan terpercaya mengenai beasiswa dan lomba baik yang diselenggarakan oleh instansi maupun universitas</h4>
                </div>
            </div>
        </div>
      </div> -->

<!-- what is juaramuda? start -->
<section class="about" id="about">

      <h1 class="heading"><span>What Is JuaraMuda?</span></h1>
      <div class="row">
        <div class="photo-container">
          <img src="img/juara.png" alt="juara">
          <h3></h3>
        </div>
      </div>

</section>
<!-- what is juaramuda? done -->

    </div>
  </main>
  @include('footer')
</body>
</html>