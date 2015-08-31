<?php


class conexion {

	 private $usuario    = "root";
    private $contrasena  = "";
    private $servidor    = "localhost";
    private $baseDatos   = "mintwas1_mint";


    public function conectarse ()
    {   $this->conexion = mysql_connect($this->servidor,$this->usuario,$this->contrasena,true) or die (mysql_error());
        mysql_select_db ($this->baseDatos,$this->conexion) or die (mysql_error());
    }
    public function desconectarse () {
        mysql_close($this->conexion);
    }
    public function ExecuteNonQuery($mysql)
    {   $var = mysql_query($mysql,$this->conexion);
        settype($var, boolean);
        return $var;
    }
    public function consultaLocalhost($mysql)
    //QUITAR EL MENSAJE DE ERROR PRINT_R 
    {   $var = mysql_query($mysql,$this->conexion) or die ("Error en la consulta MYSQL: <pre>".print_r($mysql,true)."</pre>");
        $registros = array();
        while ($reg = mysql_fetch_array($var)){
            $registros[] = $reg;
        }
    return $registros;
    }    
    /**
     * Verifica si la consulta trae datos, no hereda.
     * @param string $mysql
     * @return boolean
     */
    public function ExistenDatos ($mysql)
    {	$consulta 	= mysql_query($mysql,$this->conexion) or die ("Error en la consulta::ED() sSQL:");//
    	//<pre>".print_r($mysql,true)
        $filas  	= mysql_num_rows($consulta); 
    	$respuesta 	= ($filas > 0 ) ? true : false;
    	return $respuesta;
    }

}