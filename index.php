<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="https://www.cotemag.edu.co/file/system/logo5.png">
  <title>Formulario</title>
</head>
   <style>
   body {
  font-family: sans-serif;
  background-color: #ffffff;
}

form {
  width: 600px;
  margin: 2px auto;
  padding: 40px;
  background-color: #f5f5f5;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.form-group {
  margin-bottom: 10px;
}

label {
  font-weight: bold;
}

textarea {
  height: 200px;
}

button {
  background-color: #000;
  color: #fff;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s;
}

button:hover {
  background-color: #ccc;
}

.btn-primary {
  background-color: #007bff;
}

.btn-primary:hover {
  background-color: #0069d9;
}

.alert {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1000;
  display: none;
}

.alert-success {
  color: #fff;
  background-color: #007bff;
}

.alert-danger {
  color: #fff;
  background-color: #dc3545;
}

@media (max-width: 576px) {
  form {
    width: 100%;
  }
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
}

textarea {

   </style>
<body>

  <?php

  // if "email" variable is filled out, send email

  if (isset($_REQUEST['email'])) {

    //Email information

    $destino = "jimenagar78@gmail.com";

    $email = $_REQUEST['email'];

    $mensaje = $_REQUEST['message'];

    //Email headers

    $headers = "From: " . $email . "\r\nReply-To: " . $email;

    //Send email

    mail($destino, $mensaje, $mensaje, $headers);

    //Email response

    echo "<div class='alert alert-success'>El correo se envió correctamente</div>";
  }

  ?>

  <form action="index.php" method="post">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" placeholder="Tu nombre">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Tu correo electrónico">
    </div>
    <div class="form-group">
      <label for="message">Mensaje</label>
      <textarea name="message" id="message" cols="30" rows="10" class="form-control form-control-lg" placeholder="Escribe tu mensaje"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
  </form>

</body>
</html>
