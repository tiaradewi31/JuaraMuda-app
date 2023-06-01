<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logo.png" type = "image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail #KataMereka</title>
    </head>
    <style>
      body{
          background: linear-gradient(to top, #213346, #9a465e);
          background-size: cover;          
      }
    </style>    
  <body>
      @include('navbar')
      <div class="container mt-3">
        <svg xmlns="http://www.w3.org/2000/svg" onclick="goBack()" width="35" height="35" color="#fffff"  class="bi bi-chevron-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
        </svg>
        <script>
          function goBack() {
          window.history.back();
          }
        </script>
      </div>
      <div class="container mb-5" style="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #FBFCFC;">
        <div class="col-md-4">
          @if($post->image)
          <div class="Logo text-center" style="max-heigth :200px; overflow:hidden;">
            <img src="{{asset('image/' . $post->image)}}" class="img-fluid rounded-start mt-4" alt="...">
          </div>
          @else
            <img src="img/buttonbeasiswa.png" class="img-fluid rounded-start" alt="...">
          @endif
        </div>
          <h1 class="mt-4 mb-4 text-center"><b>{{$post->title}}</b></h1>
            <!-- <a href="/postingan/{{$post->slug}}/delete" class="btn btn-danger">Hapus Post</a> -->
            <!-- <form action="/postingan/{{$post->slug}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="button" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</button>
            </form> -->
            <!-- <a href="/postingan/{{$post->slug}}/edit" class="badge bg danger"> <button type="button" class="btn btn-danger">Delete</button></a> -->
            {{ $post->katamu}}
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>