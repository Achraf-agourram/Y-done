<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Y-done</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-[#fdfaf6] text-gray-900">
        <main>
            {{ $slot }}
        </main>

        <div id="toast-container" class="fixed top-5 right-5 z-[100] flex flex-col gap-3 w-full max-w-[320px]">

            @if (session('success'))
                <div class="toast-item flex items-center p-4 bg-orange-600 text-white rounded-xl shadow-2xl animate-in-right">
                    <div
                        class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-white rounded-full text-[10px]">
                        <i class="fa-solid fa-check text-white"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-[11px] font-bold uppercase tracking-widest">{{ session('success') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()" class="ml-auto text-gray-500 hover:text-white">
                        <i class="fa-solid fa-xmark text-xs"></i>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div
                        class="toast-item flex items-center p-4 bg-white border border-red-100 shadow-xl rounded-xl animate-in-right">
                        <div
                            class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-red-500 rounded-full text-[10px]">
                            <i class="fa-solid fa-exclamation text-white"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-[11px] font-bold uppercase tracking-widest text-red-600">Erreur de saisie</p>
                            <p class="text-[9px] text-gray-500">{{ $error }}</p>
                        </div>
                        <button onclick="this.parentElement.remove()" class="ml-auto text-gray-300 hover:text-gray-600">
                            <i class="fa-solid fa-xmark text-xs"></i>
                        </button>
                    </div>
                @endforeach
            @endif
        </div>

        <style>
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }

                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }

            @keyframes fadeOut {
                from {
                    opacity: 1;
                    transform: scale(1);
                }

                to {
                    opacity: 0;
                    transform: scale(0.9);
                }
            }

            .animate-in-right {
                animation: slideInRight 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
            }

            .toast-exit {
                animation: fadeOut 0.3s ease forwards;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const toasts = document.querySelectorAll('.toast-item');

                toasts.forEach((toast) => {
                    setTimeout(() => {
                        toast.classList.add('toast-exit');
                        setTimeout(() => {
                            toast.remove();
                        }, 300);
                    }, 5000);
                });
            });
        </script>
    </body>
</html>
