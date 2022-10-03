<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="bg-cyan-500">
    <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center">
            <span class="text-2xl font-[Poppins] cursor-pointer">
                Peduli Gizi
            </span>
            <div class="md:hidden">
                <span class="material-icons text-3xl cursor-pointer mx-2" onclick="Menu(this)">
                    menu
                </span>
            </div>
        </div>
        <ul
            class="nav-items md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl hover:text-cyan-500 duration-500">HOME</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl hover:text-cyan-500 duration-500">ABOUT</a>
            </li>
            <button class="bg-cyan-500 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded">
                Get started
            </button>
        </ul>
    </nav>

    <script>
        function Menu(e) {
            let navItems = document.querySelector('.nav-items');
            e.innerHTML.trim() === 'menu' ? (e.innerHTML = 'close', navItems.classList.add('top-[70px]'), navItems.classList
                .add('opacity-100')) : (e.innerHTML = 'menu', navItems.classList.remove('top-[70px]'), navItems
                .classList.remove('opacity-100'));
        }
    </script>
</body>

</html>
