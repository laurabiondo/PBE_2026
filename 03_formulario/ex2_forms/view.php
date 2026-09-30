<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição em Evento</title>
</head>
<body>
<h2 style="color:#E12382;">Inscrição em Evento</h2>
<form action="logica.php" method="POST" style="background:#f3e5f5; padding:15px;border-radius:8px;width:350px;">
    <label>Nome Completo:</label>
    <br>
    <input type="text" name="nome" style="width:100%";margin-bottom:10px;color:purple;font-family:Arial;>
    <br><br>

    <label>Tipo de Ingresso:</label>
    <br>
   <select name="Ingresso" id="Ingresso" style="width:100%";margin-bottom:10px;color:purple;font-family:Arial;>
			<option value="" >Numero de autorização</option>
			<option value="Vip">Vip </option>
			<option value="Open">Open </option>
			<option value="Pista">Pista </option>
			</select>
    <br><br>
    <label>Data evento:</label>
    <br>
    <input type="date" name="data" required>
    <br><br>
    <label>Hora de chegada:</label>
    <br>
    <input type="time" name="hora" required>
    <br><br>
    <button type="submit" style="background-color:#E12382;">Inscreva-se</button>
</body>
</html>