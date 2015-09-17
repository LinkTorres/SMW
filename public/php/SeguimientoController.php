<?php
require_once("conexion.class.php");
class SeguimientoController extends conexion{

	function __construct()
	{	$this->conectarse();
	  
	}
	
	function __destruct()
	{   $this->desconectarse();	
		
	}

	public function setActualizaRecolectada($datos)
	{
	$r = array();
    $piezas = ($datos['piezas'] > 0)? $datos['piezas']: 0;
    $kilos = ($datos['kilos'] > 0)? $datos['kilos']  :0;
    $monto=$datos['iptPK']+$datos['iptPP'];
    $estatus = 3;

		$mysql="UPDATE pedidos SET piezas='$piezas', kilos='$kilos', estatus_id='$estatus' WHERE id='$datos[iptI]'";
		$r['p']=$this->ExecuteNonQuery($mysql);

		$r['sql1']=$mysql;
	
		$mysql="UPDATE	tickets SET estatus_id='$estatus', monto='$datos[iptTotal]' WHERE id='$datos[iptT]'";	
		$r['t']=$this->ExecuteNonQuery($mysql);

		$r['sql2']=$mysql;

		return $r;
	}

	public function setAsignaRecolector($datos)
	{
		$estatus='2';
		$mysql="UPDATE pedidos SET id_recolector_r='$datos[recolector]', estatus_id='$estatus' WHERE ticket_id='$datos[iptT]'";
		$r['t']=$this->ExecuteNonQuery($mysql);

		$mysql="UPDATE	tickets SET estatus_id='$estatus' WHERE id='$datos[iptT]'";	
		$r['t']=$this->ExecuteNonQuery($mysql);
		return $t;
	}

	public function setAsignaEntrega($datos)
	{
		$estatus='5';
		$mysql="UPDATE pedidos SET id_recolector_r='$datos[recolector]', estatus_id='$estatus' WHERE ticket_id='$datos[iptP]'";
		$r['t']=$this->ExecuteNonQuery($mysql);
		
		$mysql="UPDATE	tickets SET estatus_id='$estatus' WHERE id='$datos[iptT]'";	
		$r['t']=$this->ExecuteNonQuery($mysql);
		return $t;
	}

	public function setAsignaEstablecimiento($datos)
	{
		$estatus=4;
		$mysql="UPDATE pedidos SET estatus_id='$estatus' WHERE id='$datos[iptP]'";
		$r['p']=$this->ExecuteNonQuery($mysql);

		$r['sql1']=$mysql;
	
		$mysql="UPDATE	tickets SET estatus_id='$estatus' WHERE id='$datos[iptT]'";	
		$r['t']=$this->ExecuteNonQuery($mysql);

		$r['sql2']=$mysql;
		
		return $r;
	}

	public function setAsignaPagado($datos)
	{
		$estatus='6';
		$mysql="UPDATE pedidos SET estatus_id='$estatus' WHERE ticket_id='$datos[iptP]'";
		$r['t']=$this->ExecuteNonQuery($mysql);
		
		$mysql="UPDATE	tickets SET estatus_id='$estatus' WHERE id='$datos[iptT]'";	
		$r['t']=$this->ExecuteNonQuery($mysql);
		return $t;
	}
	
	

}

//Cambia el estatus a recolectado y el precio del pedido
if ($_GET['pdg']==1){
	
	//echo "<pre>".print_r($_POST,true)."</pre>";
	$respuesta = array();
	$control = new SeguimientoController();
   
    $respuesta=$control->setActualizaRecolectada($_POST);
    if($respuesta['p'])
    {
	    $respuesta['tipo']=2;
	    $respuesta['r']=1;
	    $respuesta['modal']="#mdal_".$_POST['iptT'];
	    $respuesta['div']="#div_p".$_POST['iptT'];
			    	
    }
    echo json_encode($respuesta);
   
}    

//Monitor asigna el recolector
if ($_GET['pdg']==2){
	//echo "<pre>".print_r($_POST,true)."</pre>";
	extract($_POST);
	//extract($_GET);
	$respuesta = array();
	$control = new SeguimientoController();
    
    $respuesta=$control->setAsignaRecolector($_POST);
    //if($respuesta['t']){
	    $respuesta['tipo']=2;
	    $respuesta['r']=1;
	    $respuesta['modal']="#mdal_".$_POST['iptT'];
	    $respuesta['success']="#mdalSuccessAsignacion";
			    	
    //}
    echo json_encode($respuesta);
    
}   

//Monitor recibe en establecimiento.
if ($_GET['pdg']==4){
	//echo "<pre>".print_r($_POST,true)."</pre>";
	extract($_POST);
	//extract($_GET);
	$respuesta = array();
	$control = new SeguimientoController();
    
    $respuesta=$control->setAsignaEstablecimiento($_POST);
    //if($respuesta['t']){
	    $respuesta['tipo']=2;
	    $respuesta['r']=1;
	    $respuesta['modal']="#mdal_".$_POST['iptT'];
	    $respuesta['success']="#mdalSuccessEstablecimiento";
			    	
    //}
    echo json_encode($respuesta);
    
}    

//Monitor asigna recolector para entrega
if ($_GET['pdg']==5){
	//echo "<pre>".print_r($_POST,true)."</pre>";
	extract($_POST);
	//extract($_GET);
	$respuesta = array();
	$control = new SeguimientoController();
 
    $respuesta=$control->setAsignaEntrega($_POST);
    //if($respuesta['t']){
	    $respuesta['tipo']=2;
	    $respuesta['r']=1;
	    $respuesta['modal']="#mdal_".$_POST['iptT'];
	    $respuesta['success']="#mdalSuccessEntrega";
			    	
    //}
    echo json_encode($respuesta);
    
}    

if ($_GET['pdg']==6){
	//echo "<pre>".print_r($_POST,true)."</pre>";
	extract($_POST);
	//extract($_GET);
	$respuesta = array();
	$control = new SeguimientoController();
 
    $respuesta=$control->setAsignaPagado($_POST);
    //if($respuesta['t']){
	    $respuesta['tipo']=2;
	    $respuesta['r']=1;
	    $respuesta['modal']="#mdal_".$_POST['iptT'];
	    $respuesta['success']="#mdalSuccess";
			    	
    //}
    echo json_encode($respuesta);
 
}    