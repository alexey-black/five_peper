<?php
// несколько получателей
$to  = 'alexey@black-room.ru';  // обратите внимание на запятую

// тема письма
$subject = 'Письмо с моего сайта от ' . $_POST['submitted[name]'];

$messageInp = $_POST['massage'];

if (empty($messageInp)){
    $messageInp = "Сообщение пустое";
}

$message = 'Имя: ' . $_POST['name'] . '<br />' . 'Заказал: ' . $_POST['to_order'] . '<br />' . 'Телефон: ' . $_POST['nomber'] . '<br />' . 'Почта: ' . $_POST['email'] . '<br />'  . 'Дата: ' . $_POST['data'] . '<br />' . '<br />' .'Сообщение: ' . $messageInp;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
$headers .= 'To: Иван <info@black-room.ru>' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['submitted[name]'] . '<' . 'lesha4400573@gmail.com' . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="index.html");}
window.setTimeout("changeurl();",100);
</script>