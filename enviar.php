<?php
$nombres = $_POST['nombres'];
$distrito = $_POST['distrito'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$profesion = $_POST['profesion'];
$telefono = $_POST['telefono'];

if(!$nombres == '' && !$telefono == '' && !$edad == '' && !$correo == ''){
$correo_admin = "webmaster@latintops.com";
$correo_web = "informes@latintops.com";
$titulo = 'Mensaje de Contacto: '.$nombres;
$mensaje = '<table width="230" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<div id="campo">Nombres: <strong>'.$nombres.'</strong></div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="campo">Telefono: <strong>'.$telefono.'</strong></div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="campo">edad: <b>'.$edad.'</b></div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="campo">Correo: <b>'.$correo.'</b></div>
					</td>
				</tr>
			</table>';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'To: Informes <'.$correo_admin.'>' . "\r\n";
$cabeceras .= 'From: PaginaWEB <'.$correo_web.'>' . "\r\n";
$cabeceras .= 'Cc: berrospi@disolu.com' . "\r\n";
mail($correo_admin, $titulo, $mensaje, $cabeceras);
header("Location: index.php?m=1");
}else{
header("Location: index.php?m=2");
exit();	
}
?>