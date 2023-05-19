<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuaraMuda | Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<style>
    body{
      background: linear-gradient(to left, #213346, #9a465e);
      background-size: 100%;
      background-repeat: no-repeat;
      display: block;
      margin:auto
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
    <div class="container foto text-center">
        <img src="img/fotoprofil.png" alt="foto profil" style="width: 15%; padding-top: 5%;">
        <h1 class="v mt-3" style ="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #FFFFFF";> <b> @Usser Name</b> </h1>
          <p1 class="v mt-3" style ="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #FFFFFF";> <br> Wonwoo </br> </p1>
          <p2 class="v mt-3" style ="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #FFFFFF";> <br> sebong@gmail.com</br> </p2>

        
          <div class="card border border-0 mt-5 mb-4" style="background-color: #AF4A61; border-radius: 25px;">
          <button type="button" class="btn btn-outline-light"> Log Out
          </button>  
        </div>
    </div>  
    
</body>
</html>