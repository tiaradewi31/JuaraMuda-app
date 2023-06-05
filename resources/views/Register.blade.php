<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logo.png" type = "image/x-icon">    
    <title>JuaraMuda | Register</title>
    <link href="style/register.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <style>
    body{
      background: linear-gradient(to right, #213346, #9a465e);
    }
  </style>
  <body>
    <div class="Logo text-center">
        <img src="img/Logo.png" alt="Logo JuaraMuda" style="width: 10%; padding-top: 3%;">
        <h3 class="mt-2 mb-2" style ="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #FFFFFF;">JuaraMuda</h3>
        <h1 class="v mt-3" style ="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #F6E7C0";>Register</h1>
    </div>
    <div class="row justify-content-center" style="margin-top: 2%">
    @if ($errors->any())
    <div class="alert w-100 btn btn-lg" style="background-color: #9a465e" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="col-lg-6">
            <main class="form-registration">
                <form action="" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" name="uname" id="uname" required
                            value="{{ old('uname') }}" placeholder="uname">
                        <label for="uname">Username</label>
                    </div>
                    <div class="form-floating" style="margin-top: 2%">
                        <input type="text" class="form-control rounded-top" name="name" id="name" required
                            value="{{ old('name') }}" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating" style="margin-top: 2%">
                        <input type="email" class="form-control " name="email" id="email" required
                            value="{{ old('email') }}" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating" style="margin-top: 2%">
                        <input type="password" class="form-control rounded-bottom" name="password" id="password" required
                            placeholder="Password | 8 karakter">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg mt-4" style="background-color: #213346; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #FFFFFF; " type="submit">Buat Akun</button>
                </form>
                <small class="d-block mt-4 mb-5" style="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #F6E7C0;">Sudah punya akun? <a class="text" style="font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Montserrat?query=Montserrat); color: #FFFFFF;" href="/Login">
                        Login
                        sekarang!</a></small>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  </body>
</html>