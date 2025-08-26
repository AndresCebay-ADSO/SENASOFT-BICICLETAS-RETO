<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SENA BIKE</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-gray-100 p-8 rounded-xl shadow-lg">
        <div class="flex justify-center mb-4">
            <img src="/images/sena-logo.png" alt="SENA" class="h-12 mr-2">
            <img src="/images/senabike-logo.png" alt="SENA BIKE" class="h-12">
        </div>
        <h2 class="text-center text-xl font-bold text-gray-700 mb-6">Inicia sesión en tu cuent</h2>

        <form method="POST" action="#">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input id="email" type="email" name="email" required autofocus 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Contraseña</label>
                <input id="password" type="password" name="password" required 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Inicia sesion
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="./views/register.blade.php" class="text-blue-600 hover:underline">¿No tienes cuenta?</a>
        </div>
    </div>
</body>
</html>
