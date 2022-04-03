<?php 
class ModeloUsuario 
{
	private $conexion;


	function __construct()
	{
		require_once 'modelo_conexion.php';
		$this->conexion = new conexion();
		$this->conexion->conectar();
	}



	function VerificarUsuario($usuario,$password) {
		$sql = "call SP_VERIFICAR_USUARIO('$usuario')";
		$arreglo = array();
		if($consulta = $this->conexion->conexion->query($sql)){
			while($consulta_vu = mysqli_fetch_array($consulta)) {
				if(password_verify($password, $consulta_vu['usu_contrasena'])){
					$arreglo[] =$consulta_vu;
				}
			}
			return $arreglo;
			$this->conexion->cerrar();
		}
	}
}


 ?>