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

    <div class="container" style="margin-top: 8%">
      <svg xmlns="http://www.w3.org/2000/svg" onclick="goBack()" width="35" height="35" color="#fffff"  class="bi bi-chevron-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
      </svg>
      <script>
        function goBack() {
          window.history.back();
        }
      </script>
    </div>
    
  <div class="container" style="padding-top: 65px;">
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
        <div class="upload text-center mb-5" style="margin-top: 3%;">
          <a class="text-center upload" style="margin-top: 3%; background-color: #9a465e" href="/katamereka">
            <button class="btn btn-outline-go">Bagi Pengalamanmu di #KataMereka</button>
          </a>
        </div> 
      </div>

      <div class="custom_container" style="background-color: #213346; border-radius: 40px; padding-top: 3%; padding-bottom: 3%; margin-left: 5%; margin-right: 5%; margin-bottom: 5%; font-family: 'Pridi'; src: url(https://fonts.google.com/specimen/Pridi?query=pridi);">
        <div class="container text-justify"> 
        @foreach ($posts as $post)
        <?php $user_info = App\Models\User::find($post->user_id); ?>
          <div class="row row-cols">     
            <div class="col">
              <div class="card-body" style="background-color: #213346;">
                <div class="row g-0">
                  <div class="col-md-4">
                    @if($post->image)
                    <div style="max-heigth :200px; overflow:hidden;">
                      <img src="{{asset('image/' . $post->image)}}" class="img-fluid rounded-start" alt="...">
                    </div>                    
                    @else
                    <img src="img/buttonbeasiswa.png" class="img-fluid rounded-start" alt="...">
                    @endif
                  </div>
                  <div class="col-md-8">
                    <div class="card-body"  style="color: white;">
                      <h3 class="card-title">{{ $post->title }}</h3>
                      <p><b>{{$user_info->uname}}</b> Berbagi Pengalaman<em>  {{$post->created_at->diffForHumans()}} </em></p>
                      <p class="card-text">{{$post->excerpt}}</p>
                      <a href="/postingan/{{ $post->slug }}">Baca Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>       
          </div> 
          @endforeach   
     </div>
    </div>

  </div>

  <div class="container">
    {{$posts->links()}}
  </div>

          
  @include ('topbutton')

  @include('footer') 
</body>
</html>