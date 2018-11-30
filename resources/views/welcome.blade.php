<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CERES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #eaeaea;
                color: #636b6f;
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
                color: #636b6f;
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
            .btn {
                  background: #064c7a;
                  background-image: -webkit-linear-gradient(top, #064c7a, #2980b9);
                  background-image: -moz-linear-gradient(top, #064c7a, #2980b9);
                  background-image: -ms-linear-gradient(top, #064c7a, #2980b9);
                  background-image: -o-linear-gradient(top, #064c7a, #2980b9);
                  background-image: linear-gradient(to bottom, #064c7a, #2980b9);
                  -webkit-border-radius: 28;
                  -moz-border-radius: 28;
                  border-radius: 28px;
                  text-shadow: 1px 1px 3px #666666;
                  font-family: Arial;
                  color: #e9e9f2;
                  font-size: 20px;
                  padding: 10px 20px 10px 20px;
                  text-decoration: none;
                }

            .btn:hover {
                  background: #3cb0fd;
                  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
                  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
                  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
                  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
                  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
                  text-decoration: none;
                }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">

                        <img src="http://img.fenixzone.net/i/pw4eqgR.png" width="450" alt="" class="img-circle"> <br>
                      
                            <center><a href="{{ route('social.oauth', 'google') }}" class="btn">
                            <font face="HelveticaNeue-Light, Helvetica Neue Light, Helvetica Neue, Helvetica, Arial, Lucida Grande" size=3  style="font-weight: 300;">Ingresar</font>
                        </a></center>  
                </div>
            </div>
        </div>
    </body>
</html>

