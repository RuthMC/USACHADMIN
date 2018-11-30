<!doctype html>
<html ng-app="docentesDiinf"> 

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS Animate -->
      <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <!-- jS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <!-- Font Awesome -->
    {{-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Monda|PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet"> 

     <!-- ANGULAR -->
    <script src="angular/js/angular.min.js"></script>
    <script src="angular/app.js"></script>

    <!-- Estilo propio -->
    <link href="{{ URL::asset('css/estilo.css') }}" rel="stylesheet">



    <title>CERES</title>
    </head>
    <body>
<!-- BEGIN BARRA DE NAVEGACION-->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
   
      <li class="active"><a href="/inicio"><i class="fas fa-home"></i> Inicio</a></li>
      <li class=" "><a href="/inicio"><i class="fas fa-users"></i> Académicos</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('social.oauth', 'google') }}"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a></li>
        
      </ul>
       </div>
       </div>
      </nav>
<!-- END BARRA DE NAVEGACION-->


<!--Begin Título principal -->
    <div class="container animated fadeInDown">
        <h2 class="ceres" style="text-align: center; ">CERES</h2>
        <h2 class="textoceres" style="text-align: center; ">Computer Engineering RESearchers</h2>
    </div>
<!--End Título principal -->


<!--Begin Buscador -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div id="imaginary_container"> 
                        <div class="input-group stylish-input-group">
                            <input type="text" ng-model="buscador" class="form-control"  placeholder="Buscar" >
                            <span class="input-group-addon">
                                <button type="submit">
                                   <i class="fas fa-search"></i>
                                </button>  
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--End Buscador -->


<!--Begin tabla academicos ng-repeat -->

          <div class="container" style="margin-top: 20px;" ng-controller="docentesCtrl" >
              
              <div class="row col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-right: 10px;" ng-repeat="profe in datos.academicos | filter:buscador | orderBy:'apellido'">
                 <div class="panel panel-default panel-transparent">
                  <a class="academicosinicio" href="http://admin.test/perfil" ng-mouseover="mostrarGraf=true" ng-init="mostrarGraf=false">
                    <div class="panel-body">
                    
                    <img class="circular--square  col-xs-2 col-sm-2 col-md-2" src='images/<%profe.imagen%>' style="width:26%;border-radius: 50%;">
                    <div class="col-xs-8 col-sm-8 col-md-8"> <b> <% profe.nombre %>  <% profe.apellido %> </b><br> <%profe.cargo%> <br> <%profe.correo%></div>
                    </div>
                  </a>
                </div>
              </div>
        
<!--End Tabla academicos-->

<div ng-controller="docentesCtrl">
<button ng-mouseover="count = true" ng-init="count=false">
  Increment (when mouse is over)
</button>
 <h3 ng-show="count"></h3>
</div>

</body>
</html>
