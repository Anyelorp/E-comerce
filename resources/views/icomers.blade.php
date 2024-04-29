<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    /* Estilos generales */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      align-items: center; /* Centra verticalmente */
      justify-content: space-between; /* Espacio entre el encabezado y el pie de página */
      position: relative; /* Establece un contexto de posición para los elementos absolutos */
      min-height: 100vh; /* Garantiza que el cuerpo al menos ocupe toda la altura de la ventana */
    }
  

    /* Estilos para el header */
    header {
      background-color: #0096d2; /* Mostaza oscuro */
      color: #fff;
      text-align: right;
      padding: 50px;
      width: 100%; /* Ocupa todo el ancho */
      position: fixed; /* Mantiene fijo el encabezado */
      top: 0; /* Fijado arriba */
    }

    header nav {
      margin-top: 5px;
      text-align: center;
    }

    header a {
      color: #4033d3;
      text-decoration: none;
      margin-right: 10px;
    }
    #imagen-fondo {
  position: absolute; /* Posicionamiento relativo al encabezado */
  top: 0;
  left: 0;
  width: 100%; /* Ocupa todo el ancho del encabezado */
  height: 100%; /* Ocupa toda la altura del encabezado */
  background-image: url("https://images8.alphacoders.com/476/thumb-1920-476725.jpg"); /* Reemplaza con la URL de tu imagen */
  background-size: cover; /* Cubre todo el fondo */
  background-position: center; /* Posición central */
  background-repeat: no-repeat; /* No repetir la imagen */
  z-index: -1; /* Coloca la imagen detrás del contenido del encabezado */
}

    /* Estilos para el contenido */
    main {
      text-align: center;
      padding: 20px;
      margin-top: 150px; /* Ajusta el margen superior para evitar que el contenido se superponga con el encabezado */
    }

    footer nav {
      margin-top: 5px;
    }

    footer a {
      color: #fff;
      text-decoration: none;
      margin-right: 10px;
    }

    /* Estilos para los títulos */
    h1 {
      color: #0096d2; /* Fucsia */
    }

    /* Estilos para las tarjetas */
    .card-container {
      display: flex;
      flex-wrap: wrap; /* Ajusta el flujo de las tarjetas a varias líneas */
      justify-content: center; /* Centra las tarjetas horizontalmente */
      gap: 20px;
      padding: 0 20px; /* Añade un espacio a los lados del contenedor */
    }

    .card {
      width: 300px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease; /* Agrega una transición al transform */
    }

    .card:hover {
      transform: translateY(-10px); /* Levanta ligeramente la tarjeta al pasar el mouse */
    }

    .card img {
      width: 100%;
      height: auto;
    }

    .card-content {
      padding: 20px;
      text-align: center;
    }

    .button {
      display: block;
      margin-top: 20px;
      background-color: #0092d2; /* Color del encabezado */
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .button:hover {
      background-color: #0077b6; /* Cambia el color al pasar el mouse */
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <a href="http://127.0.0.1:8000/productor">PRODUCTOR</a>
      <a href="">USUARIOS</a>
      <a href="">VENTA</a>
    
    </nav>
  </header>

  <main>
    <div class="card-container">
      <div class="card">
        <a href="http://127.0.0.1:8000/productor">
          <img src="https://th.bing.com/th/id/OIP.PSLE2QJmG7F07ETWQYSwiQAAAA?w=334&h=260&rs=1&pid=ImgDetMain">
        </a>
        <div class="card-content">
          <h3>PRODUCTOR</h3>
          <p>PRODUCTOR RESEPCIONISTA</p>
        </div>
      </div>

      <div class="card">
        <a href="http://127.0.0.1:8000/usuarios">
          <img src="https://th.bing.com/th/id/R.761e9e0ef56331314035244b5b8d3cb1?rik=rVkBrdM%2bAFz4gQ&pid=ImgRaw&r=0">
        </a>
        <div class="card-content">
          <h3>USUARIOS</h3>
          <p>REGISTROS DE USUARIOS</p>
        </div>
      </div>

      <div class="card">
        <a href="http://127.0.0.1:8000/venta">
          <img src="https://cdn-icons-png.flaticon.com/512/8279/8279972.png">
        </a>
        <div class="card-content">
          <h3></h3>
          <p>VENTAS</p>
        </div>
      </div>
      <a href="http://127.0.0.1:8000/" class="button">VOLVER AL INICIO</a>
    </div>
  </main>
  
  <footer>
    <nav>
      <!-- Coloca aquí tus enlaces de pie de página si los tienes -->
    </nav>
  </footer>
</body>
</html>
