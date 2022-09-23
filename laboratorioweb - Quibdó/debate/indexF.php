<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Debate LPCYSC</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <?php session_start();
  $nombreU=$_SESSION['usuario'];
  ?>
<div class='container'>
  <div class='header'>
    <h1>¿Racismo en la UNIAJC?</h1>
  </div>
  <h2>Respuestas</h2>
  <form id='formularioAlerta'>
    <input type="hidden" id='idOculto' />
    <input type="text" id='nombreCompleto' value="<?php echo $nombreU;?>" readonly onmousedown="return false;" required/>
    <br/>
    <textarea id='mensaje' placeholder="Mensaje" required></textarea>
    <br/>
    <select id='ciudad' name="ciudad">
      <option value="Cali">Cali</option>
    </select>
    <br/>
    <br/>
    <button type='submit'>Enviar</button>
  </form>
  <br/>
  <h4>Reapuestas</h4>
  <ul id='opiniones'></ul>
</div>
<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase.js"></script>
<script src="main.js"></script>
</body>
</html>
