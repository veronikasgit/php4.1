<?php
include "config.php";
$sql = "select * from books";
$res = $pdo->query($sql);
?>

<html>
<head>
	<title>Homework 5.1</title>
</head>
<body>
<style>
    table { 
        border-spacing: 0;
        border-collapse: collapse;
    }
    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }
    
    table th {
        background: #eee;
    }
</style>

<h3>Бибилиотека успешного человека</h3>

<!--	
	<form method="GET">
	    <input type="text" name="isbn" placeholder="ISBN">
	    <input type="text" name="name" placeholder="Название книги">
	    <input type="text" name="author" placeholder="Автор книги">
	    <input type="submit" value="Поиск">
	</form>
-->

	<table>	

			<tr>
				<th>Название</th>
				<th>Автор</th>
				<th>Год выпуска</th>
				<th>Жанр</th>
				<th>ISBN</th>
			</tr>
		
		<?php 
		foreach($res as $row) 
		{ 
			echo 	'<tr>
						<td>'.$row['name'].'</td>
						<td>'.$row['author'].'</td>
						<td>'.$row['year'].'</td>
						<td>'.$row['genre'].'</td>
						<td>'.$row['isbn'].'</td>
					</tr>'; 
		 } 
		?>
	</table>

</body>
</html>