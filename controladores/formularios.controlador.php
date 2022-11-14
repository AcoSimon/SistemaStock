<?php

class ControladorFormularios{

	static public function ctr_añadir(){

		if(isset($_POST["registro_producto"])){

			$tabla = "productos";

			$cant = $_POST["registro_cantidad"];

			$datos = array("nombre"=>$_POST["registro_producto"],
		                   "cantidad"=>$_POST["registro_cantidad"]);

			$respuesta = ModeloFormularios::mdl_añadir($tabla, $datos);

			return $respuesta;
		}
	}
	

	static public function ctr_control_estados($item, $valor){
		$tabla = "empleado";

		$respuesta = ModeloFormularios::mdl_control_estados($tabla);

		return $respuesta;
	}


	static public function mdlSeleccionarProductos($item, $valor){
		$tabla = "productos";

		$respuesta = ModeloFormularios::mdlSeleccionarProductos($tabla);

		return $respuesta;
	}

	static public function mdlSeleccionarProductos2($item, $valor){
		$tabla = "productos";

		$respuesta = ModeloFormularios::mdlSeleccionarProductos2($tabla, $item, $valor);

		return $respuesta;
	}


	static public function ctrActualizarProducto(){


		if(isset($_POST["actualizar_cantidad"])){

			$tabla = "productos";
			$cantidad=$_POST["cantidad_actual"]-$_POST["actualizar_cantidad"];

			$datos = array("id"=>$_POST["idProducto"],"cantidad"=>$cantidad);



			$respuesta = ModeloFormularios::mdlActualizarProducto($tabla, $datos);

			return $respuesta;
		}
	}


	static public function ctr_empleado(){
    	if(isset($_POST["nombre_empleado"])){
        
	$nombre = $_POST["producto"];
        $tabla = "empleado";
	$estado = $_POST["devolver"];

        $empleado = $_POST["nombre_empleado"];

	if($_POST["devolver"]==0){
	$estado = 0;
	}        

        $datos = array("id"=>$_POST["idEmpleado"], "empleado"=>$empleado, "cantidad"=>$_POST["actualizar_cantidad"], "estado"=>$estado, "producto"=>$nombre);
        
        $respuesta = ModeloFormularios::mdl_empleado($tabla,$datos);

	
        
        return $respuesta;
    		}
	}

	static public function ctrActualizarFecha(){
		if(isset($_POST["fecha"])){
			$tabla ="empleado";
			$datos=array("fecha"=>$_POST["fecha"], "id"=>$_POST["idpro"]);
			$respuesta=ModeloFormularios::mdlActualizarFecha($tabla, $datos);
			return $respuesta;
		}
	}
	static public function ctrEstado2(){
	if(isset($_POST["Estado2"])){
	$tabla = "empleado";
	$estado2 = $_POST["Estado2"];

	$datos = array("estado"=>$estado2, "id"=>$_POST["idpro"]);
	$respuesta = ModeloFormularios::mdlEstado2($tabla, $datos);
	return $respuesta;
	}	
	}
}