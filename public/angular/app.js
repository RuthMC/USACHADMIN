var app = angular.module('docentesDiinf', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


app.controller('docentesCtrl',function($scope){
		$scope.mostrar=false; //mostrar algo en el front
		$scope.mostrarPerfil=!false;
		$scope.mostrarBoxEditar=false;
		$scope.mostrarPub=true; //por defecto se muestran si o si las publicaciones al inicio
		$scope.mostrarGrado=false;
		$scope.mostrarProy=false;
		
		//$scope.mostrarGraf=false;
		$scope.activoPub="active";
		$scope.activoGrado="";
		$scope.activoProy="";


		$scope.datos={
			academicos:[
				{
					imagen:"gonzaloacuna.png",
					nombre:"Gonzalo",
					apellido:"Acuña",
					correo:"gonzalo.acuña@usach.cl",
					cargo:""

				},
				{	
					imagen: "carolinabonacic.png",
					nombre:"Carolina",
					apellido:"Bonacic Castro",
					correo:"carolina.Bonacic@usach.cl",
					cargo:"Directora Magíster Ingeniería Informática"

				},
				{
					imagen:"alcides.png",
					nombre:"Alcides",
					apellido:"Quispe Sanca",
					correo:"alcides.quispe@usach.cl",
					cargo:"Director Magíster Seguridad, Peritaje y Auditoría en Procesos Informáticos"

				},
				{
					imagen: "jl.png",
					nombre:"J.L.",
					apellido:"Jara",
					correo:"jljara@usach.cl",
					cargo:"Jefe de Carrera Ingeniería Civil En Informática"

				},
				{
					imagen: "maxchacon.png",
					nombre:"Max",
					apellido:"Chacon",
					correo:"max.chacon@usach.cl",
					cargo:""

				},
				{
					imagen: "parada.png",
					nombre:"Víctor",
					apellido: "Parada Daza",
					correo:"victor.parada@usach.cl",
					cargo:"Subdirector de Vinculación con el Medio"

				},

			]

		}

		$scope.editarPerfil=function(){
			if($scope.mostrarBoxEditar==false){
				$scope.mostrarBoxEditar=true;
				$scope.mostrarPerfil=false;
				
			}else{
				$scope.mostrarBoxEditar=false;
				$scope.mostrarPerfil=true;
			}
		}

		$scope.mostrarPublicaciones=function(){
			if($scope.mostrarPub==false){
				$scope.mostrarPub=true;
				$scope.mostrarGrado=false;
				$scope.activoPub="active";
				$scope.activoGrado="";
				$scope.activoProy="";
			}
			

		}
		$scope.mostrarEstudios=function(){
			if($scope.mostrarGrado==false){
				$scope.mostrarGrado=true;
				$scope.mostrarPub=false;
				$scope.activoGrado="active";
				$scope.activoPub="";
				$scope.activoProy="";

			}

		}

		$scope.mostrarProyectos=function(){
			if($scope.mostrarProy==false){
				$scope.mostrarProy=true;
				$scope.mostrarPub=false;
				$scope.mostrarGrado=false;
				$scope.activoGrado="";
				$scope.activoPub="";
				$scope.activoProy="active";

			}
		}

		$scope.mostrarGraficas=function(){
				//$scope.mostrarGraf=true;

		}


});

