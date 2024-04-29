<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Venta</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                        <form action="procesar_venta.php" method="post">
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
                <!-- Botón de volver al menú -->
                <div class="text-center mt-3">
                    <a href="http://127.0.0.1:8000/icomers" class="btn btn-secondary">Volver al Menú</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (opcional, para funcionalidades adicionales) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
