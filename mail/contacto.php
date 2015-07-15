<?

if ($_REQUEST) {
    $datas = parse_url($_SERVER['HTTP_REFERER']);
    if ($datas['host'] != $_SERVER['HTTP_HOST'])
        header('Location: http://' . $_SERVER['HTTP_HOST']);

    $de = "no-responder@peluqueria-carmen.es";
    //$para = "jocual@gmail.com";
    $para="info@peluqueria-carmen.es";
    $cc = "";
    $cco = "";
    $replyto = "";
    $adjunto = $_FILES;
    $msg = "<h1>Formulario de contacto Peluquería Carmen</h1>";
    $msg.= '<p>Nombre: ' . $_REQUEST['nombre'] . '</p>';
    $msg.= '<p>Apellidos: ' . $_REQUEST['apellidos'] . '</p>';
    $msg.= '<p>Asunto: ' . $_REQUEST['asunto'] . '</p>';
    $msg.= '<p>Email: ' . $_REQUEST['email'] . '</p>';
    $msg.= '<p>Comentario: ' . $_REQUEST['comentario'] . '</p>';

    $msg = utf8_decode($msg);

    include('class.sendmail.php');
	$sendmail=new sendmail();
    $result = $sendmail->sendmail('[PeluqueríaCarmen]Formulario de contacto', $msg, $de, $para, $cc, $cco, $replyto, $reply, $adjunto);

    if ($result) {
        header("Location: /index.php?p=ok&msg=Inscripción realizada correctamente");
    } else {
        header("Location: /index.php?p=error&msg=No ha sido posible realizar la inscripcion");
    }
} else {
    header("Location: index.php?p=error&msg=No ha sido posible realizar la inscripcion");
}