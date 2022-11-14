<?php 
require_once "conexion.php";
class ModeloFormularios{

	#REGISTRO ASESOR
	static public function mdl_añadir($tabla, $datos){
		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, cantidad) VALUES (:nombre, :cantidad)");
		$stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":cantidad",$datos["cantidad"], PDO::PARAM_INT);


		if($stmt->execute()){
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;
	}

	static public function mdl_control_estados($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();

		return $stmt -> fetchAll();

		$stmt->close;

		$stmt = null;
	}


	static public function mdlSeleccionarProductos($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();

		return $stmt -> fetchAll();

		$stmt->close;

		$stmt = null;
	}
	static public function mdlSeleccionarProductos2($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = $valor");

		$stmt->execute();

		return $stmt -> fetch();

		$stmt->close;

		$stmt = null;
	}



static public function mdlActualizarProducto($tabla, $datos){

	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET cantidad=:cantidad WHERE id=:id");

	$stmt->bindParam(":id",$datos["id"], PDO::PARAM_INT);
	$stmt->bindParam(":cantidad",$datos["cantidad"], PDO::PARAM_INT);

	if($stmt->execute()){
		return "ok";

	}else{
		print_r(Conexion::conectar()->errorInfo());
	}
}

static public function mdl_empleado($tabla,$datos){
    
    		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla(empleado, cantidad, estado, producto) VALUES (:empleado, :cantidad, :estado, :producto)");
		$stmt->bindParam(":empleado",$datos["empleado"], PDO::PARAM_STR);
		$stmt->bindParam(":cantidad",$datos["cantidad"], PDO::PARAM_INT);
		$stmt->bindParam(":estado",$datos["estado"], PDO::PARAM_INT);
		$stmt->bindParam(":producto",$datos["producto"], PDO::PARAM_STR);
		



		if($stmt->execute()){
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;
    
	}

#ACTUALIZAR CLIENTE
		static public function mdlActualizarFecha($tabla, $datos){
		$stmt=Conexion::conectar()->prepare("UPDATE $tabla SET fecha=:fecha WHERE id=:id");
		$stmt->bindParam(":id",$datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":fecha",$datos["fecha"], PDO::PARAM_STR);
			if($stmt->execute()){
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;
	}

		static public function mdlEstado2($tabla, $datos){
		$stmt=Conexion::conectar()->prepare("UPDATE $tabla SET estado=:estado WHERE id=:id");
		$stmt->bindParam(":id",$datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":estado",$datos["estado"], PDO::PARAM_INT);
			if($stmt->execute()){
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;
	}

	

}