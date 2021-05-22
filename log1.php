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
.btn2{
	background: #4CAF50;
	font-size: 15px;
	border:none;
	cursor: pointer;
	width: 50%;
	border-radius: 4px;
	padding: 16px 20px;
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.container {
  padding: 16px;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;

}table {
	border: 1px solid black;
	width: 100%;
	color: black;
	font-size: 20px;
	text-align: left;

}td, th {
	border: 1px black;
	padding: 8px;
}
th {
	background-color: coral;
	color: black;
} tr:hover {background-color: #ddd;}


</style>
<body>
<h2>Nasza baza danych została stworzona do szybkiej nauki historii sztuki oraz najważniejszych dzieł danej epoki.</h2>
<form method= "post" action="logging.php" style="border:1px solid #ccc">
  
  <div class="container">
	<h3>Zaloguj się!</h3>
	
	<label for="username"><b>Nazwa użytkownika</b></label>
    <input type="name" placeholder="Wpisz nazwę użytkownika" name="username" required>
	
    <label for="password"><b>Hasło</b></label>
    <input type="password" placeholder="Wpisz hasło" name="password"  required>
	
	<input type= "submit" name= "zaloguj" class = "btn2">

  </div>
  
</form>
<h2>Zarządzanie kontem.</h2>
<form method= "post" action="delete.php" style="border:1px solid #ccc">
	<div class="container">
	<h3>Chcesz usunąć konto?</h3>
	<label><b>Oznacza to trwałe usunięcie danych!</b></label><br><br>
	
	<label for="username1"><b>Podaj nazwę użytkownika</b></label>
    <input type="name" placeholder="Wpisz nazwę użytkownika" name="username1" required>
	
	
	<input type= "submit" name= "usun" class = "btn2">
	
	 </div>
</form>
<form method= "post" action="update1.php" style="border:1px solid #ccc">
	<div class="container">
	<h3>Chcesz zmianić nazwę użytkownika?</h3>
	
	<label for="username2"><b>Podaj starą nazwę użytkownika</b></label>
    <input type="name" placeholder="Wpisz starą nazwę użytkownika" name="username2" required >
	
	<label for="username3"><b>Podaj nową nazwę użytkownika</b></label>
    <input type="name" placeholder="Wpisz nową nazwę użytkownika" name="username3" required >
	
	<input type= "submit" name= "update1" class = "btn2">
	
	 </div>
</form>
<form method= "post" action="update2.php" style="border:1px solid #ccc">
	
	<div class="container">
	<h3>Chcesz zmianić hasło?</h3>
	
	<label for="password2"><b>Podaj stare hasło</b></label>
    <input type="password" placeholder="Wpisz stare hasło" name="password2" required>
	
	
	<label for="password3"><b>Podaj nowe hasło</b></label>
    <input type="password" placeholder="Wpisz nowe hasło" name="password3" id="myInput" required>
	
	<input type="checkbox" onclick="myFunction()"><b>Pokaż nowe hasło</b><br><br>
	
	<input type= "submit" name= "update2" class = "btn2">
	
	 </div>
</form>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
