<?php
// Importar el modelo correspondiente
use App\Models\Venta;

// Resto del código...

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibieron todos los campos necesarios
    if (isset($_POST["producto"]) && isset($_POST["cantidad"]) && isset($_POST["precio_unitario"])) {
        // Recuperar los datos del formulario
        $producto = $_POST["producto"];
        $cantidad = $_POST["cantidad"];
        $precio_unitario = $_POST["precio_unitario"];
        
        // Validación de datos (opcional pero recomendado)
        // Aquí podrías realizar validaciones, por ejemplo, verificar que la cantidad sea un número válido, etc.
        
        // Guardar los datos en la base de datos utilizando el modelo
        Venta::create([
            'producto' => $producto,
            'cantidad' => $cantidad,
            'precio_unitario' => $precio_unitario
        ]);

        // Redireccionar u mostrar mensaje de éxito
        return redirect()->back()->with('success', 'La venta ha sido registrada correctamente.');
    } else {
        // Si falta algún campo, mostrar un mensaje de error
        return redirect()->back()->with('error', 'Error: Debes completar todos los campos del formulario.');
    }
} else {
    // Si no se recibió una solicitud POST, redireccionar al inicio o mostrar un mensaje de error
    return redirect()->route('inicio')->with('error', 'Error: No se ha enviado una solicitud POST.');
}
?>

