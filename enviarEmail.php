<?php
//echo '<pre>';print_r($_POST);exit;
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$text=$_POST['text'];

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: $nombre <$email>\r\n";

if(mail("informes@coneisc.pe",$asunto,$text,$headers)){
    echo "Mensaje enviado correctamente"; 
}else{
    echo "Error al enviar el mensaje";
}
?>

<script>
alert(<?php echo $msg?>);
window.location="contact.php";
</script>