<?php
if(isset($_POST['Submit'])) {
    $data  = array (
     'nombre' => $_POST['Nombre'],
     'telefono' => $_POST['Telefono'],
     'empresa' => $_POST['Empresa'],
     'email' => $_POST['email'],
     'empleados' =>  $_POST['NumEmpleados'],
     'cargo' => $_POST['CargoEmpresa'],
     'direccion' => $_POST['direccion'],
     'referencia' => $_POST['referencia']);

    $DirDescarga = $_POST['direccion'];
    
    registrarDescarga($data); ?>

  <script type="text/javascript">
    function pageredirect(){
     location = "<?PHP echo $DirDescarga; ?>";
     return false;
    }
      
    pageredirect();</script>
<?php
}

function registrarDescarga($datos)
{ 
    $canal = 'Orgánico';
    $pageURL = $datos['direccion'];	
	$nombre = $datos['nombre'];
    $telefono = $datos['telefono'];
    $empresa = $datos['empresa'];
    $empleados = $datos['empleados'];
    $cargo = $datos['cargo'];
    $referencia = $datos['referencia'];
    $correo = $datos['email'];
    
    $user = 'agarcias';
    $pass = '872caf1f9d75ef368fc08f7ba3d38f4d';    
    
    $data_string = '
    {
      "Intelisis": {
        "@Sistema": "Intelisis",
        "@Contenido": "Solicitud",
        "@Referencia": "Intelisis.CRM.Contacto.Alta",
        "@SubReferencia": "",
        "@Version": "1.0",
        "Solicitud": {
            "@Usuario": "'.$user.'",
            "@Contrasena": "'.$pass.'",
            "@Prospecto": "",
            "@Nombre": "'.$empresa.'",
            "@Tipo": "Contacto",
            "@Direccion": "",
            "@DireccionNumero": "",
            "@DireccionNumeroInt": "",
            "@EntreCalles": "",
            "@Plano": "",
            "@Observaciones": "'. $referencia.'",
            "@Delegacion": "",
            "@Colonia": "",
            "@Poblacion": "",
            "@Estado": "",
            "@Pais": "",
            "@Zona": "",
            "@CodigoPostal": "",
            "@RFC": "",
            "@CURP": "",
            "@Telefonos": "'.$telefono.'",
            "@TelefonoLada": "",
            "@Fax": "",
            "@PedirTono": "",
            "@PaginaWeb": "",
            "@eMail": "'.$correo.'",
            "@eMail1": "",
            "@SIC": "",
            "@Origen": "",
            "@Agente": "",
            "@InteresadoEn": "",
            "@CargaRID": "",
            "@NombreComercial": "",
            "@GrupoEmpresarial": "",
            "@ReferidoNombre": "",
            "@ReferidoMail": "",
            "@ReferidoTelefono": "",
            "@ReferidoRFC": "",
            "@EmpresaTipo": "",
            "@Fuente": "",
            "@RelacionReferencia": "",
            "@Canal": "'.$canal.'",
			"@Comentarios": "'.$pageURL.'", 
			"@Empleados": "'.$empleados.'",
			"@Cargo": "'.$cargo.'",
			"@OtroCargo": "'.$otro_cargo.'",
			"@NombreCto": "'.$nombre.'",
			"@ApellidoCto": ""			
        }
      }
    }';  
    
    //$data_string = json_encode($data_string, JSON_PRETTY_PRINT);
    
    $url = "http://201.116.126.10/IntelisisService/index.php/IntelisisService/GetIntelisisService";
    $c=curl_init($url);
    $options = array( 
        CURLOPT_RETURNTRANSFER => true,       
        CURLOPT_TIMEOUT        => 4,         
        CURLOPT_FAILONERROR    => false,
        CURLOPT_POST           => 1,
        CURLOPT_POSTFIELDS     => $data_string,
        CURLOPT_PROTOCOLS      => CURLPROTO_HTTP,
        CURLOPT_HTTPHEADER     => array("Content-Type:application/json")
    ); 
    
    curl_setopt_array($c, $options);    
    
    /* Run cURL, parse info, and close it */
    $results=curl_exec($c);
    $info=curl_getinfo($c);
    curl_close($c);
    
    /* decode the JSON results */
    //$answer=json_decode($results); 
}
?>