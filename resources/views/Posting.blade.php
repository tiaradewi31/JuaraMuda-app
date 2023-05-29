<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/Logo.png" type = "image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuaraMuda | Postingan</title>
</head>

<style>
    body{
        background: linear-gradient(to Bottom, #213346, #9a465e);
        background-size: cover;
    }
</style>

<body>
    @include('navbar')

    <div class="container" style="padding-top: 70px;">
      <div class="container">
        <div class="text-center" style="color: white; margin-top: 50px; padding-top: 30px; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins);">
         <h3><b> Scholarship and Competition Articles</b>
            <h3>
            <div>
                <form class="d-flex" style="margin: 4%;">
                <input class="form-control me-2" href type="search" name="Keyword" placeholder="Search Scholarship and Competition Articles"></input>
                <button class="btn btn-outline-light" type="submit">Search</button>              
                </form>
            </div>
        </div>
    </div>

    <div class="custom_container" style="background-color: #213346; border-radius: 40px; padding-top: 3%; padding-bottom: 3%; margin-left: 5%; margin-right: 5%; margin-bottom: 5%; font-family: 'Pridi'; src: url(https://fonts.google.com/specimen/Pridi?query=pridi);">
     <div class="container text-justify"> 
      <div class="row row-cols">
        <div class="col">
            <div class="card-body" style="background-color: #213346;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/buttonbeasiswa.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body"  style="color: white;">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>    
     </div>
    </div>
  </div>

  @include ('topbutton')
    
  @include('footer')
    
</body>
</html>