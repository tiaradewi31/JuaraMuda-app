<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logo.png" type = "image/x-icon">    
    <title>Upload Lomba</title>
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

    <div class="d-flex align-items-lg-center py-4 flex-column">
        <img src="img/logotoga.png" alt="" width="50px;">
        <h2 style="padding: 1% 0% 1% 5%; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #F6E7C0;">Upload Program Lomba</h2>
    </div>

    <form method="POST" action="" enctype="multipart/form-data">
    @csrf
      <div class="mb-3" style="color: #F6E7C0;">
        <label for="title" class="form-label">Program Lomba</label>
        <input class="form-control" name="title" id="title" placeholder="Masukkan Program Lomba" value="{{ old('title') }}" required>
        <div class="invalid-feedback" style="padding-bottom: 2%;">
          Wajib diisi
        </div>
      </div>
      <div class="mb-3" style="color: #F6E7C0;">
        <label for="slug" class="form-label" placeholder="Klik dua kali">Slug</label>
        <input class="form-control" name="slug" id="slug">
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
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
      </div> -->
      <div class="mb-3">
        <label for="lomba" class="form-label" style="color: #F6E7C0;">Detail Lomba</label>
        <textarea class="form-control" rows="10" id="lomba" input="lomba"  placeholder="Masukan Persyaratan, Tanggal Pelaksanaan dan Alur Pendaftaran" name="lomba" value="{{ old('lomba') }}" require style="white-space: pre-line;"></textarea>
      </div>
      <div class="hstack gap-3" style="padding-top: 1%; padding-bottom:5%;">
        <button class="btn btn btn-secondary btn-lg" type="submit"> Upload </button>
      </div>
    </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
      $('#title').change(function(e) {
        $.get('{{ url('check_slug') }}', 
        { 'title': $(this).val() }, 
        function( data ) {
          $('#slug').val(data.slug);
        });
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    @include('footer')
  </body>
</html>