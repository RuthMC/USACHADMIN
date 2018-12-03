<!doctype html>
<html ng-app="docentesDiinf">
    <head>
            <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet"> 
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="{{ URL::asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <!-- jS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    {{-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Monda|PT+Sans" rel="stylesheet">

     <!-- ANGULAR -->
    <script src="angular/js/angular.min.js"></script>
    <script src="angular/app.js"></script>

    <title>CERES</title>
    </head>
    <body>
             <!-- BARRA DE NAVEGACION-->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
     
          <!-- AGREGAR IMAGEN DE LOGO-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
   
      <li class="active"><a href="/inicio"><i class="fas fa-home"></i> Inicio</a></li>
      <li class=" "><a href="/inicio"><i class="fas fa-users"></i> Académicos</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="{{ route('social.oauth', 'google') }}"><span class="glyphicon glyphicon-log-in" aria-hidden='true'></span> Cerrar Sesión</a></li>
        
      </ul>
       </div>
       </div>
      </nav>

<!------ Include the above in your HEAD tag ---------->

<link href="{{ URL::asset('css/fontawesome.min.css') }}" rel="stylesheet"> 




<div class="main-content" ng-controller="docentesCtrl">
    <div class="container">
<!--         <h3 class="site-title">Mi Perfil</h3> -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                 <div class="panel">
                <div class=" panel-body ">
                   
                    <div class="col-xs-3 col-sm-3 col-md-5">
                        <img class="img-responsive" src="images/gonzaloacuna.png" style="width:auto; border-radius: 50%;">
                        <!-- <i class="fa fa-wrench"> Edit</i> -->
        <div class=" clearfix">
                      
          
            
           
        </div>
    </div>
                <div class="col-xs-7 col-sm-4 col-md-6">
                    <div class="profile-block" ng-show="mostrarPerfil">

                      <h2>Ph.D. Gonzalo Acuña Leiva</h2>
                      <h4>gonzalo.acuna@usach.cl</h4>
                      <h4>Docteur en Automatique et Productique</h4>
                      <h4>1995</h4>
                       <hr>

                      <ul class="nav nav-tabs">
                      <li class="<%activoPub%>"><a href="" ng-click="mostrarPublicaciones()">Publicaciones</a></li>
                      <li class="<%activoProy%>"><a href="" ng-click="mostrarProyectos()">Proyectos de Investigación</a></li>
                      <li class="<%activoGrado%>"><a href="" ng-click="mostrarEstudios()">Grados</a></li>
                      
                    </ul>

                    </div>



          <!-- Edicion de datos personales -->
                    <div class="profile-block" ng-show="mostrarBoxEditar" >
                      <form>
                      <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        
                      </div>
                     
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@usach.cl">
                        
                      </div>
                      
                      <div class="form-group">
                        <label for="nombre">Grado académico</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        
                      </div>
                       <div class="form-group">
                        <label for="nombre">Año de obtención de grado académico</label>
                        <?php
                              echo "<select name='ano'>";
                                  for($i=date("Y");$i>=1900;$i--)
                                  {
                                      echo "<option value='".$i."'>".$i."</option>";
                                  }
                              echo "</select>";
                         ?>
                        
                      </div>

                    
                     
                    
                      <button type="submit" class="btn btn-primary" ng-click="editarPerfil()">Guardar</button>
                    </form>
                           
    
                    </div>

                    </div>

              

                 <div class="col-xs-1  col-md-1">
                   <button type="button" class="btn btn-primary" ng-click="editarPerfil()"><i class="fas fa-wrench"></i> Editar</button>

                 </div>
          
                </div>
                </div>
                </div>

                <div class="row">
                 <div class="panel">
                <div class=" panel-body ">
          <div class="col-md-12" ng-show="mostrarPub">
            <h3>Publicaciones</h3>
           <table class="table table-hover">
            <thead>
              <tr>
                <th>Título</th>
                <th>Autor/es</th>
                <th>Año de publicación</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Indirect training of gray-box models using LS-SVM and genetic algorithms</td>
                <td>Gonzalo Acuña, Hans Moller</td>
                <td>2016</td>
              </tr>
              <tr>
                <td>Indirect training of gray-box models using LS-SVM and genetic algorithms</td>
                <td>Gonzalo Acuña, Hans Moller</td>
                <td>2016</td>
              </tr>
             <tr>
                <td>Indirect training of gray-box models using LS-SVM and genetic algorithms</td>
                <td>Gonzalo Acuña, Hans Moller</td>
                <td>2016</td>
              </tr>
            </tbody>
          </table>
            <hr >
            
           
        </div>

        <div class="col-md-12" ng-show="mostrarProy">
            <h3>Proyectos de Investigación</h3>
           <table class="table table-hover">
            <thead>
              <tr>
                <th>Título</th>
                <th>Autor/es</th>
                <th>Año de publicación</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Indirect training of gray-box models using LS-SVM and genetic algorithms</td>
                <td>Gonzalo Acuña, Hans Moller</td>
                <td>2016</td>
              </tr>
              <tr>
                <td>Indirect training of gray-box models using LS-SVM and genetic algorithms</td>
                <td>Gonzalo Acuña, Hans Moller</td>
                <td>2016</td>
              </tr>
             <tr>
                <td>Indirect training of gray-box models using LS-SVM and genetic algorithms</td>
                <td>Gonzalo Acuña, Hans Moller</td>
                <td>2016</td>
              </tr>
            </tbody>
          </table>
            <hr >
            
           
        </div>



        <div class="col-md-12" ng-show="mostrarGrado">
            <h3>Grado</h3>
           <table class="table table-hover">
            <thead>
              <tr>
                <th>Año</th>
                <th>Grado/Título</th>
                <th>Institución</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1995</td>
                <td>Docteur en Automatique et Productique</td>
                <td>Institut National Polytechnique de Grenoble</td>
              </tr>
              <tr>
                <td>1991</td>
                <td>Diplôme d´Etudes Approfondies en Automatique. Productique et Informatique Industriel</td>
                <td>Institut National Polytechnique de Grenoble (INPG)</td>
              </tr>
              <tr>
                <td>1986</td>
                <td>Ingeniero Civil Electricista</td>
                <td>Universidad de Chile</td>
              </tr>
              <tr>
                <td>1980</td>
                <td>Bachiller en Ciencias de la Ingeniería Eléctrica</td>
                <td>Universidad de Chile</td>
              </tr>
              
            </tbody>
          </table>
            <hr >
            
           
        </div>






            </div>
            
          
                </div>
                </div>
                </div>
               
               
            </div>
           
        </div>
</div>







</body>
</html>

       
    </body>
</html>
