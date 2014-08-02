<html>
<head>
<meta charset="utf-8">
<title>Управление номерами</title>
</head>

<body>
<div style="width:900px; margin: 0 auto;">
<div style="background:#BBBBBB; height: 100px;">
<!--шапка--><img src="age/client.png"></div>

<div style="width:250px;height:225px;float:left;background:#eee;">
<!--юзерпик клиента-->
<center><img src="age/<?php echo $_GET['age']; echo $_GET['gender']; echo '.jpg' ?>" width=200 height=209></center>
</div>

<div style="width:650px;float:right;background:#ddd;">
<br><font face=georgia>
Комментарии: <b><?php echo $_GET['hometime']; ?> <?php echo $_GET['tech']; ?></b><br>
ID улицы: <b><a href="http://btdiler.ru/info.php?c=4&s=<?php echo $_GET['street']; ?>" target=_blank><?php echo $_GET['street']; ?></b> <img src="age/ext.svg.png" width=10 height=10></a>, номер дома: <b><?php echo $_GET['house']; ?></b><br>
Когда позвонить снова? <b><?php echo $_GET['when']; ?> <?php $gwhen = $_GET['when']; If (empty($gwhen )) { echo '<font color=red>не указано</font>'; } ?> </b><br>
Услугами какой компании абонент пользуется сейчас? <b>
<?php $ginternet = $_GET['internet']; echo "<a target=_blank href='https://www.google.ru/search?q="; echo $ginternet; echo "'>"; echo $ginternet; echo "</a> / "; ?>
<?php $ginternet = $_GET['internet']; If (empty($ginternet )) { echo '<font color=red>не указано, </font>'; } ?>
<?php $gtv = $_GET['tv']; echo "<a target=_blank href='https://www.google.com/search?q="; echo $gtv; echo "'>"; echo $gtv; echo "</a>"; ?>
<?php $gtv = $_GET['tv']; If (empty($gtv )) { echo '<font color=red>не указано</font>'; } ?></b><br>
Абонент прописан в квартире? Снимает? Кто прописан? <b><?php echo $_GET['reg']; ?> <?php $greg = $_GET['reg']; If (empty($greg )) { echo '<font color=red>не указано</font>'; } ?></b><br>
Кто обычно пользуется / отвечает за оплату Интернета? <b><?php echo $_GET['resp']; ?> <?php $gresp = $_GET['resp']; If (empty($gresp )) { echo '<font color=red>не указано</font>'; } ?></b><br>
Телефон клиента: <font style="background-color:black" color=white face="VERDANA"><b><?php echo $_GET['phone']; ?></b></font><br><br><br><br><br>

</font>
</div>

</div>
