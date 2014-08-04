<?php
include ('db.php');
    // выбираем все значения из таблицы "Contacts"
    $you = "2014-08%";
    $me = "1101";
//    $query = "SELECT * FROM fx WHERE gender='$you'";
    $query = "SELECT * FROM fx WHERE nextcall LIKE'" .
mysql_real_escape_string($you) . "' AND userid='" .
mysql_real_escape_string($me) . "'";
echo $query;
    $qr_result = mysql_query($query)
		or die(mysql_error());

    // выводим на страницу сайта заголовки HTML-таблицы
    echo '<table border="1">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Телефон</th>';
	echo '<th>След.звонок</th>';
	echo '<th>Улица</th>';
	echo '<th>Дом</th>';
	echo '<th>Интернет</th>';
	echo '<th>ТВ</th>';
	echo '<th>Прописка</th>';
	echo '<th>Ответств.</th>';
	echo '<th>Когда дома</th>';
	echo '<th>Техвозм</th>';
	echo '<th>Возвраст</th>';
	echo '<th>Пол</th>';
	echo '<th>№Сотр.</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	
   // выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
	while($data = mysql_fetch_array($qr_result)){ 
		echo '<tr>';
		echo '<td>' . $data['phone'] . '</td>';
		echo '<td>' . $data['nextcall'] . '</td>';
		echo '<td>' . $data['street'] . '</td>';
		echo '<td>' . $data['house'] . '</td>';
		echo '<td>' . $data['internet'] . '</td>';
		echo '<td>' . $data['tv'] . '</td>';
		echo '<td>' . $data['reg'] . '</td>';
		echo '<td>' . $data['resp'] . '</td>';
		echo '<td>' . $data['hometime'] . '</td>';
		echo '<td>' . $data['tech'] . '</td>';
		echo '<td>' . $data['age'] . '</td>';
		echo '<td>' . $data['gender'] . '</td>';
		echo '<td>' . $data['userid'] . '</td>';
		echo '</tr>';
	}
	
    echo '</tbody>';
	echo '</table>';

    // закрываем соединение с сервером  базы данных
    mysql_close($connect_to_db);
?>
