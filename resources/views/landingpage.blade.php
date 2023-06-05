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
              <li><a href="/about">About Us</a></li>
              <li><a href="/Login" class="btn">Get Started</a></li>
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
                    “Jangan Biarkan Impianmu Terhenti, Raihlah Masa Depanmu bersama JuaraMuda!”
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
<section class="what">
    <div class="container">
        <div class="box-choose">
            <div class="box">
                <img src="img/juara.png" alt="">
            </div>
            <div class="box">
                <h1>What is Juara Muda?</h1><br>
                <h4>JuaraMuda adalah Platform yang menyediakan informasi aktual, akurat, dan terpercaya mengenai beasiswa dan lomba baik yang diselenggarakan oleh instansi maupun universitas</h4><br>
            </div>
        </div>
    </div>
</section>
<!-- what is juaramuda? done -->

<!-- insight start -->
<section class="popular">
    <div class="container">
        <div class="box-popular">
            <div class="box">
                <img src="img/insight1.png" alt=""/>
                <h1>Beasiswa</h1>
                <p>Kumpulan informasi beasiswa terbaik bagi mahasiswa, baik dalam negeri maupun luar negeri</p>
            </div>
            <div class="box">
                <img src="img/insight2.png" alt=""/>
                <h1>Perlombaan</h1>
                <p>Kumpulan informasi Kompetisi atau perlombaan bagi mahasiswa, dalam negeri&luar negeri </p>
            </div>
            <div class="box">
                <img src="img/insight3.png" alt=""/>
                <h1>#KataMereka</h1>
                <p>Kumpulan Tips atau cerita pengalaman dari mahasiswa yang telah lolos beasiswa&lomba</p>
            </div>
        </div>
    </div>
</section>
<!-- insight done -->

<!-- get start -->
<section class="hero">
        <div class="container">
            <div class="box-hero">
                <div class="box">
                <h1>Get Started with JuaraMuda</h1>
                </div>
            </div>

            <div class="ca">
                    <a href="#" class="btnn">Get Started</a>
            </div>
            
        </div>
    </section>
<!-- get done -->
    </div>
  </main>

  @include ('topbutton')

  @include('footer')

</body>
</html>