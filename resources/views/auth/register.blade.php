<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Nanana Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">

        <h2 class="text-2xl font-bold text-center mb-4">Register</h2>

        <form action="{{ route('register.process') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block mb-1 font-medium">Username</label>
                <input type="text" name="username" required
                       class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Password</label>
                <input type="password" name="password" required
                       class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Role</label>

                <select name="role" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
                    <option value="owner">Owner</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit"
                class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg px-4 py-2">
                Register
            </button>

            <p class="text-center mt-4 text-sm text-gray-600">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
            </p>

        </form>

    </div>
</div>

</body>
</html>
