<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .body{
            display: flex;
            /* margin: 0;
            padding: 0; */
            box-sizing: border-box;
            background: #213346;
            font-family: sans-serif;
        }
        .footer{
            /* bottom: 0;
            left: 0;
            right: 0; */
            background: #213346;
            height: auto;
            width: 100vw;

            padding-top: 40px;
            color: #fff;
        }
        .footer-content{
            background: #213346;
            width: 100vw;
            /* padding: 20px; */
            padding-top: 2%;
            padding-bottom: 40px;
            text-align: center;
        }
        .footer-content p a{
            text-decoration: none;
            text-align: center;
            max-width: 500px;
            /* margin: 10px auto; */
            line-height: 28px;
            font-size: 14px;
            color: white;
            background: #213346;
        }
        .footer-bottom{
            background: #213346;
            width: 100vw;
            padding-bottom: 2%;
            text-align: center;
            
        }
    </style>
</head>

<body>
    <footer>
        <div class="footer-content" style= "margin-top: 25px">
            <img src="img/Logo.png"  alt="" width="200">
            <p>
                <a href="/about">About JuaraMuda</a>
            </p>
            <a style="text-decoration:none" href="mailto:juaramuda@gmail.com">
                <img src="img/gmail.png" alt="" width="40px">
            </a>
            <a style="text-decoration:none" href="https://www.instagram.com/juara_muda/">
                <img src="img/instagram.png" alt="" width="30px">
            </a>
        </div>
        <div class="footer-bottom">
            <div class="text-center fw-bold" style= "color: white; padding-bottom: 15px; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins);">
                © 2023 JuaraMuda. All Rights Reserved PT. JuaraMuda Company Indonesia
            </div>
        </div>
    </footer>
</body>
</html>