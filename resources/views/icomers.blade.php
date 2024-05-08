<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARMAS EVOLUTIVAS FREE FIRE</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Agrega la biblioteca de Font Awesome -->
  <style>
    /* Estilos generales */
    html, body {
      background: url(https://th.bing.com/th/id/R.ab28fa023d3d11f7562b50d19775eb78?rik=D5zoS8vwaiGgRg&pid=ImgRaw&r=0);
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
      background-color: #f0f0f0; /* Color de fondo */
    }

    /* Estilos para el header */
    header {
      background: url(https://th.bing.com/th/id/R.ab28fa023d3d11f7562b50d19775eb78?rik=D5zoS8vwaiGgRg&pid=ImgRaw&r=0); /* Color de fondo del encabezado */
      color: #fff;
      text-align: center;
      padding: 20px 0;
      width: 100%; /* Ocupa todo el ancho */
      position: fixed; /* Fija el encabezado en la parte superior */
      top: 0; /* Fijado arriba */
    }

    header p {
      font-size: 24px;
      margin: 0;
    }

    header nav {
      margin-top: 10px;
    }

    header a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
      font-size: 18px;
    }

    /* Estilos para el contenido */
    main {
      text-align: center;
      padding: 100px 20px 20px; /* Ajusta el padding para el contenido */
      width: 100%;
    }

    /* Estilos para las tarjetas */
    .card-container {
      display: flex;
      flex-wrap: wrap; /* Ajusta el flujo de las tarjetas a varias líneas */
      justify-content: center; /* Centra las tarjetas horizontalmente */
      gap: 20px;
    }

    .card {
      width: 300px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease; /* Agrega una transición al transform */
      background-color: #fff; /* Color de fondo de la tarjeta */
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
    }

    .card h3 {
      color: #0096d2; /* Color del título */
      margin-top: 0; /* Elimina el margen superior del título */
    }

    .card p {
      margin: 10px 0; /* Ajusta el margen del párrafo */
    }

    .button {
      display: inline-block;
      background-color: #0096d2; /* Color del botón */
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease; /* Transición del color de fondo */
    }

    .button:hover {
      background-color: #0077b6; /* Cambia el color al pasar el mouse */
    }
  </style>
</head>
<body>

<header>
  <nav style="display: flex; justify-content: flex-end;">
    <a href="http://127.0.0.1:8000/productor"><i class="fas fa-user" style="color: #FF5733;"></i> <span style="color: orange;">PRODUCTOR</span></a>
    <a href="http://127.0.0.1:8000/usuarios"><i class="fas fa-users" style="color: #FF5733;"></i> <span style="color: orange;">USUARIOS</span></a>
    <a href="http://127.0.0.1:8000/venta"><i class="fas fa-shopping-cart" style="color: #FF5733;"></i> <span style="color: orange;">VENTA</span></a>
  </nav>
  <div style="text-align: center;">
    <p><i class="fas fa-fire" style="color: #FF5733;"></i> <span style="color: orange;">ARMAS EVOLUTIVAS</span></p>
  </div>
</header>

<main>
  <div class="card-container">
    <div class="card">
      <a href="http://127.0.0.1:8000/venta?producto=MP40&precio=400">
        <img src="https://i.ytimg.com/vi/wFfXJikQods/maxresdefault.jpg">
      </a>
      <div class="card-content">
        <h3>MP40</h3>
        <p>400.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=MP40&precio=400" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="http://127.0.0.1:8000/venta?producto=FN%20SCAR&precio=500">
        <img src="https://th.bing.com/th/id/OIP.rCAjV3TMHy1iRcsTEdg2LQHaEK?rs=1&pid=ImgDetMain">
      </a>
      <div class="card-content">
        <h3>FN SCAR</h3>
        <p>500.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=FN%20SCAR&precio=500" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://th.bing.com/th/id/R.ce1d01c5144a5cff0d1a89e6e31d8646?rik=n6v7hKcOrQqWMg&pid=ImgRaw&r=0">
      </a>
      <div class="card-content">
        <h3>AK 47</h3>
        <p>600.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=AK 47&precio=600" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://th.bing.com/th/id/OIP.7DIYyLkJdO37nnN0dkYqWgHaEK?rs=1&pid=ImgDetMain">
      </a>
      <div class="card-content">
        <h3>UMP</h3>
        <p>400.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=UMP&precio=400" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://th.bing.com/th/id/OIP.A77M1SJdF3LxgyTqiSl7dgHaEK?rs=1&pid=ImgDetMain">
      </a>
      <div class="card-content">
        <h3>FAMAS</h3>
        <p>400.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=FAMAS&precio=400" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://staticg.sportskeeda.com/editor/2022/11/7b51e-16697315082155-1920.jpg">
      </a>
      <div class="card-content">
        <h3>AC80</h3>
        <p>400.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=AC80&precio=400" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://i.ytimg.com/vi/osevyMkOavw/hqdefault.jpg">
      </a>
      <div class="card-content">
        <h3>M1014</h3>
        <p>900.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=M1014&precio=900" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://staticg.sportskeeda.com/editor/2021/10/76278-16339232006176-800.jpg">
      </a>
      <div class="card-content">
        <h3>WOODPECKER</h3>
        <p>200.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=WOODPECKER&precio=200" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://i.ytimg.com/vi/lMVfG19Kcso/maxresdefault.jpg">
      </a>
      <div class="card-content">
        <h3>M60</h3>
        <p>300.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=M60&precio=300" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://i.ytimg.com/vi/RRMiHOcU7FQ/maxresdefault.jpg">
      </a>
      <div class="card-content">
        <h3>AWM</h3>
        <p>400.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=AWM&precio=400" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://i.ytimg.com/vi/IM1TzLesGMA/maxresdefault.jpg">
      </a>
      <div class="card-content">
        <h3>P90</h3>
        <p>400.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=P90&precio=400" class="button">Agregar al carrito</a>
      </div>
    </div>
    <div class="card">
      <a href="">
        <img src="https://i.ytimg.com/vi/-vLZ6YbqF4A/maxresdefault.jpg">
      </a>
      <div class="card-content">
        <h3>VECTOR</h3>
        <p>500.$</p>
        <a href="http://127.0.0.1:8000/venta?producto=VECTOR&precio=400" class="button">Agregar al carrito</a>
      </div>
    </div>
  </div>
  <a href="http://127.0.0.1:8000/" class="button">VOLVER AL INICIO</a>
</main>
<footer>
  <nav>
    <!-- Script para agregar productos al carrito -->
    <script>
      function agregarAlCarrito(producto, precio) {
        // Aquí puedes implementar la lógica para agregar el producto al carrito
        alert("Producto agregado al carrito: " + producto + " - Precio: $" + precio);
      }
    </script>
  </nav>
</footer>
</body>
</html>
