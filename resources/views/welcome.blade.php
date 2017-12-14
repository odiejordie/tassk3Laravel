<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: white;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .top-image {
                background:url('https://wallpaperscraft.com/image/switzerland_alps_mountains_night_beautiful_landscape_99817_1920x1080.jpg') -25px -50px;
                position:fixed ;
                top:0;
                width:100%;
                z-index:0;
                height:100%;
                background-size: calc(100% + 50px);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height top-image" id="top-image">

            <div class="content">
                <div class="title m-b-md">
                    Eaaa!!!
                </div>

                <div class="links">
                    
                    {{ link_to(route('user.create'),'Tambah User') }}
                    {{ link_to(route('comment.create'),'Komentar') }}
                    {{ link_to(route('comment.index'),'Edit Komentar') }}
                    {{ link_to(route('user.index'),'List User') }}
                
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/bggerak.js') }}"></script>
    </body>
</html>
