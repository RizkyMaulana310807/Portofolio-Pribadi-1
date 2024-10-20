<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Rizky Maulana</title>
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css" />
    <style>
    </style>
</head>
<body class="flex flex-col">
    <header class="block bg-white top-0 inset-x-0 z-50 border-0.5 border-black shadow-lg">
        <nav class="flex items-center justify-between p-4 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <!-- <span class="sr-only">Your Company</span> -->
                    <h1 class="font-extrabold transition-all">Rizky Maulana</h1>
                    <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""> -->
                </a>
            </div>
            <div class="hidden md:hidden lg:flex gap-x-4 items-center sm:hidden">
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600 dark:hover:text-indigo-400 hover:underline">About</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600 dark:hover:text-indigo-400 hover:underline">Contact</a>
                <a href="#" class="text-sm font-semibold border-2 border-white bg-black leading-6 text-white dark:text-gray-200 p-1.5 px-3 rounded-lg hover:underline hover:bg-white hover:text-black hover:border-black transition-all text-center">Project <span aria-hidden="true">&rarr;</span></a>
                <!-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400">Home</a> -->
                <!-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400">Project</a> -->
                    <!-- <button title="Dark / Light Mode" onclick="toggleDarkMode()" type="button" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200 bg-gray-200 dark:bg-gray-800 p-2 rounded-md">
                        Dark Mode
                    </button> -->
            </div>
            
            <div id="buttonMenu" class="flex lg:hidden">
                <!-- Hapus atribut onclick="toggleMenu()" -->
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 dark:text-gray-300" aria-label="Open main menu">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </nav>

        <div id="mobile-menu" class="lg:hidden hidden fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white dark:bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <!-- <span class="sr-only">Your Company</span> -->
                    <h1>Rizky Maulana</h1>
                    <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""> -->
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-gray-300" aria-label="Close menu">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Product</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Features</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Marketplace</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Company</a>
                    </div>
                    <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="bg-[#ffffff] flex-grow overflow-hidden">
        <div class="flex flex-col items-center h-screen">
            <p class="text-center mt-10 mb-5 w-full p-2">Hi, my name is Rizky Maulana. im a freelance.</p>
            <div class="flex flex-col">
                <h1 class="text-[48px] lg:text-[100px] md:text-[75px] sm:text-[55px] font-black text-center" data-aos="fade-right" data-aos-delay="250">WEB DEVELOPER</h1>
                <h1 class="text-[48px] stroktext lg:text-[100px] md:text-[75px] sm:text-[55px] font-black relative text-transparent stroke-2 stroke-red-600 text-center" data-aos="fade-left">
                    & GAME DEVELOPER
                </h1>
            </div>
            <div class="text-center flex gap-20 mt-10">
                <a href="#" class="text-sm md:text-base lg:text-2xl py-2 px-4 border-2 border-black rounded-lg text-black bg-transparent hover:bg-black hover:text-white transition duration-300" data-aos="fade-up">You Need A WEB Dev</a>
                <a href="#" class="text-center bg-red-500 inline-flex justify-center items-center" data-aos="fade-down" data-aos-delay="250">What you need?</a>
                <a href="#" class="text-sm md:text-base lg:text-2xl py-2 px-4 border-2 border-transparent rounded-lg text-white bg-black hover:bg-transparent hover:text-black hover:border-black transition duration-300" data-aos="fade-up">You Need A GAME Dev</a>
            </div>
        </div>
        

        <div class="flex h-screen bg-white">
            <div class="bg-black w-1/2 flex items-center justify-center">
                <div class="overflow-hidden w-1/2 h-1/2 rounded-lg" data-aos="fade-up" data-aos-delay="150">
                    <img src="src/images/icon/gura.jpeg" alt="anonym" class="w-full h-full object-cover transition-transform duration-250 ease-in-out hover:scale-110">
                </div>                               
            </div>
            <div class="bg-black w-1/2 p-6 flex justify-center flex-col">
                <div class="relative mb-20"> <!-- Tambahkan margin bawah untuk jarak -->
                    <h1 class="wstrktxt text-white opacity-50 absolute font-black text-5xl left-6 top-6" data-aos="fade-up" data-aos-delay="150">About Me.</h1>
                    <h1 class="absolute text-white font-black text-5xl left-4 top-4" data-aos="fade-up">About Me.</h1>
                </div>
                <p class="text-white" data-aos="fade-up" data-aos-delay="150">Hanya seorang anak muda yang ingin menguasai dunia</p>
                <div>
                    <table class="w-full">
                        <tbody>
                            <tr data-aos="fade-left">
                                <td class="text-white px-4 py-2 font-bold">Nama:</td>
                                <td class="text-white px-4 py-2 font-extralight">Rizky Maulana</td>
                            </tr>
                            <tr data-aos="fade-left" data-aos-delay="50">
                                <td class="text-white px-4 py-2 font-bold">Tanggal lahir:</td>
                                <td class="text-white px-4 py-2 font-extralight">31-Agustus-2007</td>
                            </tr>
                            <tr data-aos="fade-left" data-aos-delay="100">
                                <td class="text-white px-4 py-2 font-bold">Address:</td>
                                <td class="text-white px-4 py-2 font-extralight">Padalarang, Bandung Barat</td>
                            </tr>
                            <tr data-aos="fade-left" data-aos-delay="150">
                                <td class="text-white px-4 py-2 font-bold">Phone:</td>
                                <td class="text-white px-4 py-2 font-extralight">+62-812-8721-7886</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex flex-rows gap-10 mt-10">
                        <a href="#" class="transform hover:scale-110 transition-all text-white border-2 border-white rounded-full bg-transparent hover:bg-white hover:text-black px-7 py-2">My Skills</a>
                        <a href="#" class="transform hover:scale-110 transition-all text-white border-2 border-white rounded-full bg-transparent hover:bg-white hover:text-black px-7 py-2">Soft Skills</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white flex flex-col h-screen">
            <div class=" flex">
                <h1 class="text-white font-bold text-6xl">Recent Project : </h1>
            </div>
            <div class="flex h-[75%] w-screen bg-slate-200 items-center m-auto justify-center">
                <!-- card1 -->
                <div class="bg-white h-[75%] w-72 rounded-xl border-2 border-transparent transform hover:scale-110 transition-all hover:border-black group">
                    <div class="p-4">
                        <img src="src/images/project/image.png" class="rounded-2xl border-2 border-white group-hover:border-black" alt="a">
                    </div>
                    <div class="p-4 flex flex-col gap-6">
                        <div>
                            <h1 class="font-extrabold">Nama Project</h1>
                            <p class="font-thin">Descripsi Project</p>
                        </div>
                        <div class="group">
                        <a href="#" class="bg-white text-black border-2 border-black px-7 py-2 rounded-full transform hover:scale-110 inline-flex hover:bg-black hover:text-white transition-all">Try it</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-black flex flex-col h-screen p-4">
            <div class="">
                <h1 class="text-white text-4xl font-extrabold text-center">Get In Touch </h1>
            </div>
            <div class="bg-black h-full w-full flex flex-rows">
                <div class="bg-black w-1/2 flex items-center justify-center">
                    <div class="flex w-1/2 bg-white rounded-2xl flex-col p-4 gap-4">
                        <div class="flex flex-row">
                            <h1 class="text-black font-bold text-4xl">info</h1>
                            <div class="">
                                <i class="fa-solid fa-info border-2 border-black px-1.5 py-0.5 rounded-full text-sm"></i>
                            </div>
                            
                        </div>
                        <div class="flex flex-col gap-4">
                            <label for="#"><i class="fa-solid fa-envelope"></i> Email</label>
                            <label for="#"><i class="fa-solid fa-phone"></i> Phone</label>
                            <label for="#"><i class="fa-solid fa-address-book"></i> Street</label>
                            <label for="#">Others</label>
                        </div>
                    </div>
                </div>
                <div class="bg-black w-1/2 h-screen flex items-center justify-center">
                    <!-- header -->
                    <div class="bg-white flex flex-col gap-4 h-[65%] w-[85%] p-4 rounded-xl">
                        <h1 class="text-black text-2xl font-bold">Contact Me</h1>
                        <form class="flex flex-col gap-4 bg-white p-4 rounded-lg m-auto" method="POST">
                            <div class="flex justify-between">
                                <div class="relative border-2 border-black w-full rounded-lg">
                                    <input type="text" name="input1" id="input1" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-red-500 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                    <label for="input1" class="absolute text-sm text-gray-500 dark:text-black duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nama</label>
                                </div>
                                <div class="relative border-2 border-black w-full rounded-lg">
                                    <input type="text" name="input2" id="input2" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-red-500 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                    <label for="input2" class="absolute text-sm text-gray-500 dark:text-black duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Email</label>
                                </div>
                            </div>
                            <div class="relative border-2 border-black w-full rounded-lg">
                                <input type="text" name="input3" id="input3" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-red-500 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="input3" class="absolute text-sm text-gray-500 dark:text-black duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Pesan</label>
                            </div>
                            <div class="bg-white flex justify-center p-3 rounded-lg border-2 border-black hover:bg-black transition-all group">
                                <button type="submit" class="text-black group-hover:text-white font-semibold transition duration-200 px-4 py-2 rounded">Kirim</button>
                            </div>
                        </form>
                        <?php if ($messageSent): ?>
    <p>Email berhasil dikirim!</p>
<?php elseif ($errorMessage): ?>
    <p style="color: red;"><?= $errorMessage; ?></p>
<?php endif; ?>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </main>

    <!-- <footer class="bg-black p-4 flex flex-rows justify-between">
        <p class="text-white">&copy; Rizky Maulana. All right reserved</p>
        <a href="#" class="text-white">Back to top</a>
    </footer> -->
    

    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Select the header
            const header = document.querySelector('header');
            const mobileMenu = document.getElementById('mobile-menu');
            const openMenuButton = document.querySelector('#buttonMenu button');
            const closeMenuButton = mobileMenu.querySelector('button');
    
            // Event listener for opening menu
            openMenuButton.addEventListener('click', () => {
                console.log("Menu dibuka");
                mobileMenu.classList.remove('hidden');
            });
    
            // Event listener for closing menu
            closeMenuButton.addEventListener('click', () => {
                console.log("Menu ditutup");
                mobileMenu.classList.add('hidden');
            });
                
        });
    
        AOS.init({
            offset: 200,
            duration: 1000,
            easing: 'ease-in-out',
        });
    </script>
    
</body>
</html>
