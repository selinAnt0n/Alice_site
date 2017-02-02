<?php 
	require_once 'php/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->isSMTP();

	$mail->Host = 'smtp.mail.ru';
	$mail->SMTPAuth = true;
	$mail->Username = 'selin8050@mail.ru';
	$mail->Password = 'antowka123';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = '465';
	$mail->CharSet = "UTF-8";

	$mail->From = 'selin8050@mail.ru';
	$mail->FromName = 'Заказчик';
	$mail->addAddress('selin_ant0n@mail.ru');

	$mail->isHTML(true);

	$name = htmlspecialchars($_POST["name"]); 
	$email = htmlspecialchars($_POST["email"]);
	$phone = htmlspecialchars($_POST["phone"]);
	$date = htmlspecialchars($_POST["date"]);
	$tier = htmlspecialchars($_POST["tier"]);
	$comment = htmlspecialchars($_POST["comment"]);

	$cake = htmlspecialchars($_POST["cake"]);
	$cakeWeight = htmlspecialchars($_POST["cakeWeight"]);
	$mac = htmlspecialchars($_POST["mac"]);
	$pr = htmlspecialchars($_POST["pr"]);
	$fruc = htmlspecialchars($_POST["fruc"]);
	$delivery = htmlspecialchars($_POST["delivery"]);
	$delivery_Two = htmlspecialchars($_POST["deliveryTwo"]);
	$adr_metr = htmlspecialchars($_POST["adrMetr"]);
	$adr_home = htmlspecialchars($_POST["adrHome"]);


	$results = htmlspecialchars($_POST["results"]);
	$myResult = explode("Результат", $results);
	$lastResult = array_pop($myResult);

	if ($mac) {
		$mac = "Да";
	} else {
		$mac = "Нет";
	}
	if ($pr) {
		$pr = "Да";
	} else {
		$pr = "Нет";
	}
	if ($fruc) {
		$fruc = "Да";
	} else {
		$fruc = "Нет";
	}
	if ($delivery) {
		$delivery = "К метро";
	} else if ($delivery_Two){
		$delivery = "К дому";
	}
	if ($adr_metr) {
		$adr = $adr_metr;
	} else {
		$adr = $adr_home;
	}
	$mail->Subject = 'Заказ торта';
	$mail->Body = "<!DOCTYPE html>
<html lang='ru'>
<head>
	<meta charset='utf-8'>
	<title>Document</title>
	<div style='width : 100%'>
		<div style='width : 100%; text-align : center; background-color: #808080; color: #e06885;padding : 30px 0; border-radius : 0 0 50px 50px;font-size:30px;font-weight:bold;'><span>ЗАКАЗ</span></div>
		<p><strong>Имя / Фамилия: </strong>" . $name . "</p>
		<p><strong>Мыло: </strong>" . $email . "</p>
		<p><strong>Телефон: </strong>" . $phone . "</p>
		<p><strong>Дата: </strong>" . $date . "</p>
		<p><strong>Коментарии: </strong>" . $comment . "</p>
		<br>
		<br>
		<h1 style='font-size:23px;border-bottom:1px solid #000;'>Содержимое заказа</h1>
		<p><strong>Торт: </strong>" . $cake . "</p>
		<p><strong>Вес: </strong>" . $cakeWeight . " кг </p>
		<p><strong>Ярусы: </strong>" . $tier . "</p>
		<p><strong>Маккаронсы: </strong>" . $mac . "</p>
		<p><strong>Пряники: </strong>" . $pr . "</p>
		<p><strong>Фрукты: </strong>" . $fruc . "</p>
		<p><strong>Доставка: </strong>" . $delivery . " , адрес : ". $adr ."</p>
		
		<br>
		<br>
		<p><strong>Приблизительная стоимость :</strong>" . $lastResult . " грн </p>
	</div>
</head>
<body>
</body>
</html>"; 
    
	if ($mail->send() ) {
		echo 'Yes!!!!!!!!!!!!!!!!!!!!!';
	} else {
		echo "No!!!!!!!!!!!!!!!!!!!!!!";
	}

?>