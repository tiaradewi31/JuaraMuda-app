<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logo.png" type = "image/x-icon">    
    <title>#KataMereka.Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
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

    <div class="d-flex align-items-lg-center py-4 flex-column">
        <img src="img/logotoga.png" alt="" width="50px;">
        <h2 style="padding: 1% 0% 1% 5%; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #F6E7C0;">Post Pengalamanmu di #KataMereka</h2>
    </div>

    <form method="POST" action="" enctype="multipart/form-data">
    @csrf
      <div class="mb-3" style="color: #F6E7C0;">
        <label for="title" class="form-label">Title</label>
        <input class="form-control" name="title" id="title" placeholder="Pengalaman Lomba X" value="{{ old('title') }}" required>
        <div class="invalid-feedback" style="padding-bottom: 2%;">
          Wajib diisi
        </div>
      </div>
      <div class="mb-3" style="color: #F6E7C0;">
        <label for="slug" class="form-label">Slug</label>
        <input class="form-control" name="slug" id="slug" value="{{ old('slug') }}" required>
        <div class="invalid-feedback" style="padding-bottom: 2%;">
          Wajib diisi
        </div>
      </div>
      <div class="mb-3" style="color: #F6E7C0;">
        <label for="image"  class="form-label">Image</label>
        <input class="form-control form-control-sm" id="image" name= "image" type="file">
        <div class="invalid-feedback" style="padding-bottom: 2%;">
          Wajib diisi
        </div>
      </div>
        <!-- <div class="mb-3" style="color: #F6E7C0;">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category-id">
                <option selected>#KataMereka Category</option>
                <option value="1">#KataMereka-Beasiswa</option>
                <option value="2">#KataMereka-Lomba</option>
            </select>
        </div> -->
        <div class="mb-3" style="color: #F6E7C0;">
            <label for="katamu" class="form-label">#KataMu</label>
            <input id="katamu" type="hidden" name="katamu" value="{{ old('katamu') }}" required>
            <trix-editor input="katamu" style="color: #F6E7C0;"></trix-editor>
        </div>
        <div class="hstack gap-3" style="padding-top: 1%; padding-bottom:5%;">
          <button class="btn btn btn-secondary btn-lg" type="submit"> Create Postingan #KataMereka </button>
        </div>
    </form>
    </div>
  </div>

    <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');

      title.addEventListener('change', function(){
        fetch('/katamereka/checkSlug?title=' + title.value )
        .then(response => response.json())
        .then(data => slug.value = data.slug)
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    @include('footer')
  </body>
</html>