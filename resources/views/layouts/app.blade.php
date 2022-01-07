<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Games</title>
    <link  href="/css/main.css"  rel="stylesheet">

</head>
<body class="bg-gray-900 text-white">
<header class="border-b border-gray-800">
    <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
        <div class="flex flex-col lg:flex-row items-center text-white">
            <a href="/">
                <img src="/img/LogoWhite.svg" alt="cilveksMasina" class="w-40 flex-none ">
            </a>
            <ul class="flex ml-16 space-x-8">
                <li><a  href="#" class="hover:text-gray-400">GAMES</a></li>
                <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>

            </ul>
        </div>
         <div class="flex items-center">
             <div class="relative">
                 <input type="text" class="bg-gray-800 tx-sm rounded-full focus:outline-none focus:shadow-outline
                  w-64 px-3 pl-8 py-1 " placeholder="Search...">
                 <div class="absolute top-0 flex items-center h-full ml-2">
                     <svg class="fill-current text-gray-400 w-4"  viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                     </svg>
                 </div>
             </div>
             <div class="ml-6">
                 <a href="#"><img src="https://s.gravatar.com/avatar/5f6728474d8b5356723019d370ed6a0d?s=80" alt="avatar"
                     class="rounded-full w-8"></a>
             </div>

         </div>
    </nav>
</header>
<main class="py-8">
    @yield('content')
</main>
<footer class="border-t border-gray-800">
    <div class="container mx-auto px-4 py-6">
        Powered by <a href="#" class="underline hover:text-gray-400">Cilvēks Mašīna</a>
    </div>
</footer>
</body>
</html>
