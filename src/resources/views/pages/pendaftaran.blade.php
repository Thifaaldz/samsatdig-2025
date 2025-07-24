<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran SIM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-blue-50">

    <header class="bg-blue-800 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">SAMSAT DIGITAL - Pendaftaran SIM</h1>
        </div>
    </header>

    <main class="container mx-auto p-6">
        @livewire('pendaftaran-sim-form')
    </main>

    <footer class="bg-blue-900 text-white text-center p-4 mt-10">
        &copy; {{ date('Y') }} SAMSAT Digital. All Rights Reserved.
    </footer>

    @livewireScripts
</body>
</html>
