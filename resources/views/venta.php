<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Venta</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('https://wallpaperset.com/w/full/0/9/d/372096.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-color: rgba(255, 255, 255, 0.6); /* Color de fondo transparente */
      margin: 0; /* Elimina los márgenes predeterminados */
      padding: 0; /* Elimina el relleno predeterminado */
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h3 class="text-center">Registro de Venta</h3>
          </div>
          <div class="card-body">
            <form action="{{ route('registrar-venta') }}" method="post">
              <div class="form-group">
                <label for="producto">Producto:</label>
                <input type="text" class="form-control" id="producto" name="producto" required>
              </div>

              <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
              </div>

              <div class="form-group">
                <label for="precio_unitario">Precio Unitario:</label>
                <input type="number" class="form-control" id="precio_unitario" name="precio_unitario" min="0.01" step="0.01" required>
              </div>

              <button type="submit" class="btn btn-primary btn-block">Registrar Venta</button>
            </form>
          </div>
        </div>

        <!-- Sección para mostrar los productos agregados -->
        <div class="card mt-4">
          <div class="card-header bg-secondary text-white">
            <h4 class="text-center">Productos Agregados</h4>
          </div>
          <div class="card-body" id="productos-agregados">
            <!-- Aquí se mostrarán los productos agregados -->
          </div>
        </div>
        
        <!-- Botón de volver al menú -->
        <div class="text-center mt-3">
          <a href="http://127.0.0.1:8000/icomers" class="btn btn-primary">Volver al Menú</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (opcional, para funcionalidades adicionales) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Script para agregar productos -->
  <script>
    // Función para agregar productos a la sección de productos agregados
    function agregarProducto(producto, cantidad, precio) {
      // Crea un elemento de fila para el producto
      var fila = document.createElement("div");
      fila.classList.add("row", "mb-2");

      // Agrega la información del producto (nombre, cantidad, precio)
      var columnaInfo = document.createElement("div");
      columnaInfo.classList.add("col-md-12");
      columnaInfo.innerHTML = "<p><strong>Producto:</strong> " + producto + "</p>" +
                              "<p><strong>Cantidad:</strong> " + cantidad + "</p>" +
                              "<p><strong>Precio Unitario:</strong> $" + precio + "</p>";
      fila.appendChild(columnaInfo);

      // Agrega la fila al contenedor de productos agregados
      document.getElementById("productos-agregados").appendChild(fila);
    }

    // Función para procesar productos desde la URL
    window.addEventListener('DOMContentLoaded', (event) => {
      // Obtener los parámetros de la URL
      const params = new URLSearchParams(window.location.search);
      const producto = params.get('producto');
      const precio = params.get('precio');

      // Verificar si hay producto y precio en la URL
      if (producto && precio) {
        // Agregar el producto al formulario de registro de venta
        document.getElementById("producto").value = producto;
        document.getElementById("precio_unitario").value = precio;
      }
    });
  </script>
</body>
</html>
