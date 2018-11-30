
@extends('layouts.app')

        <!doctype html>
        <html lang="{{ app()->getLocale() }}">

            <head>
                <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                 
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <!-- Styles -->
                <style>
                        html, body {
                            background-color: #fff;
                            color: #e1935b;
                            font-weight: 10;
                            height: 100vh;
                            margin: 0;
                            font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
                            font-weight: 300;
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

                            h4 {
                                color: #002F6C;
                            }
                          table {
                              border-collapse: collapse;
                              border-spacing: 0;
                              width: 60%;
                              border: 1px solid #ddd;
                          }

                          td, th {
                            width: 4rem;
                            height: 2rem;
                            border: 1px solid #ccc;
                            text-align: center;
                         }
                         th {
                            background: lightblue;
                            border-color: white;
                         }
                                      
        </style>
    </head>
    <body>
      @section('content')
      <center><h1 style="font-weight: 300;">RESULTADOS</h1></center>
        <center><h4 style="font-weight: 300;">Comparación % de logro por objetivos</h4></center>

<center><div style="overflow-x:auto;">
  <table>
    <tr>
      <th></th>
      <th>Estudiante</th>
      <th>Carrera</th>
      <th>Usach</th>
     
    </tr>
    <tr>
      <th scope="row">Logro % </th>
      <td>consulta estudiante</td>
      <td>consulta carrera</td>
      <td>consulta usach</td>
    </tr>
    <tr> 
  </table></center></div>
 <p> </p>
 <center><h4 style="font-weight: 300;">Objetivos analizados</h4></center>
 <center><div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Objetivo iterativo</th>
    </tr>
    <tr>
      <td>Descripcion iterativa</td>
    </tr>
    <tr> 
  </table></center></div>
 <p> </p>
 <center><h4 style="font-weight: 300;">Porcentaje de logro por objetivos</h4></center>

<center><div style="overflow-x:auto;">
  <table>
    <tr>
      <th></th>
      <th>Estudiante</th>
      <th>Carrera</th>
      <th>Usach</th>
     
    </tr>
    <tr>
      <th scope="row">Objetivo Iterativo</th>
      <td>consulta estudiante iterativo</td>
      <td>consulta carrera iterativo</td>
      <td>consulta usach iterativo</td>
    </tr>
    <tr>
      <th scope="row">Objetivo Iterativo</th>
      <td>consulta estudiante iterativo</td>
      <td>consulta carrera iterativo</td>
      <td>consulta usach iterativo</td>
    </tr>
  </table>
<p> </p>

</center></div>



    </body>
</html>
@endsection