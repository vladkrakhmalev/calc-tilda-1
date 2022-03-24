<?php 

$length = $_POST['length'];
$width = $_POST['width'];
$color = $_POST['color'];
$light = $_POST['light'];
$injection = $_POST['injection'];
$sale = $_POST['sale'];
$tel = $_POST['tel'];

$subject = 'vlad.krakhmalev.web@gmail.com';
$title = "Заявка на подробный расчет стоимости";
$message = "";

if ($length) {
  $message = $message . 'Длина: ' . $length . " м.\r\n";
}
if ($width) {
  $message = $message . 'Ширина: ' . $width . " м.\r\n";
}
if ($color) {
  $message = $message . 'Цвет: ' . $color . "\r\n";
}
if ($light == 'on') {
  $message = $message . 'Нужна установка светильников / люстры' . "\r\n";
}
if ($injection == 'on') {
  $message = $message . 'В помещении более 4х углов' . "\r\n";
}
if ($sale == 'on') {
  $message = $message . 'У меня или знакомых есть еще помещения для установки натяжных потолков — это даст вам скидку до 50%' . "\r\n";
}
if ($tel) {
  $message = $message . 'Номер телефона: ' . $tel . "\r\n"; 
}

if(mail($subject, $title, $message)) {
  echo json_encode(array('success' => 1));
} else {
  echo json_encode(array('success' => 0));
}



?>