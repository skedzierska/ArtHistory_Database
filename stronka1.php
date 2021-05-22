<!DOCTYPE html>
<html>

<head>
    <title>Art History</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="tank.css" type="text/css">
    <script src="mjpeg_stream.js" type="text/javascript"></script>
    <script src="tank.js" type="text/javascript"></script>    

</head>
<body onload="tank_init()">
    <header>
        
		<nav>
            <ul>
                <img src="VDASF.png" alt="art" width = "70" height ="70"/>
				<li><a href="stronka1.php">Home</a>
				<li><a> / </a> 
                <li><a href="artmuseum.php">Art Museum</a>
				<li><a> / </a> 
				<li><a href="log1.php">Zaloguj się</a>
            </ul>
        </nav>        
    </header>
	
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

input[type=text], input[type=password],input[type=name] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  
  margin-bottom: 500px;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
button:hover {
  opacity:1;
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.btn{
	background: #4CAF50;
	font-size: 15px;
	border:none;
	cursor: pointer;
	width: 50%;
	border-radius: 4px;
	padding: 16px 20px;
}
.container {
  padding: 16px;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;

}table {
	width: 100%;
	color: black;
	font-size: 20px;
	text-align: left;

}td, th {
	
	padding: 8px;
}
th {
	background-color: coral;
	color: black;
} tr:hover {background-color: #ddd;}


</style>
<body>
<h2>Nasza baza danych została stworzona do szybkiej nauki historii sztuki oraz nazw najważniejszych dzieł danej epoki.</h2>
<form method= "post" action="reg.php" style="border:1px solid #ccc">
  
  <div class="container">
	<h3>Zarejestruj się!</h3>
	
	
	<label for="username"><b>Nazwa użytkownika</b></label>
    <input type="name" placeholder="Wpisz nazwę użytkownika" name="username" required>
	
    <label for="password"><b>Hasło</b></label>
    <input type="password" placeholder="Wpisz hasło" name="password"  required>
	
	
	<input type= "submit" value= "Dołącz" onclick="alert('Zarejestrowano poprawnie!')" class = "btn">

    <p>Masz już konto? <a href="log1.php">Zaloguj się</a></p>
  </div>
</form>

<h3> Tabela umożliwia zapoznanie się z najważniejszymi faktami z życia danego artysty. </h3>

<table>
<?php
include 'db_connection.php';
$conn = open_connection();
$sql = "SELECT Art_movement, Origin, Period, Artist, Name_ofp FROM art_period1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table>
			<tr>
				<th>Epoka</th> 
				<th>Miejsce</th>
				<th>Lata</th>
				<th>Twórca</th>
				<th>Najsłynniejsze dzieło</th>
			</tr>";
	while($row = $result-> fetch_assoc()) {
		echo "<tr><td>". $row["Art_movement"] . 
		"</td><td>" . $row["Origin"] . 
		"</td><td>" . $row["Period"] . 
		"</td><td>" . $row["Artist"] . 
		"</td><td>" . $row["Name_ofp"] . 
		"</td></tr>" ;
	}
	echo "</table>";
} else {
	echo "0 results";
}

?>

</table>
</body>
</html>
