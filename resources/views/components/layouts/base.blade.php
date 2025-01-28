<!DOCTYPE html>
<html lang="en" class="scroll-smooth text-[#080C2E] bg-gradient-to-br from-[#1b004f] to-[#54008b]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SE-Fest 2025 (Software Engineering Festival) adalah acara tahunan oleh Prodi Rekayasa Perangkat Lunak Telkom University Surabaya. Acara ini mencakup lomba UI/UX, web development, poster, serta workshop React.js untuk mahasiswa dan siswa SMA/SMK. Asah kemampuan software engineering Anda di SE-Fest 2025!">
    <meta name="keywords" content="SE-Fest, Software Engineering Festival, Lomba UI/UX, Lomba Web Development, Lomba Poster, Workshop React.js, Acara IT Nasional, Kompetisi IT Mahasiswa, Lomba IT SMA SMK, Event IT Surabaya">
    <meta name="author" content="Panitia SE-Fest Telkom University Surabaya">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Event",
          "name": "SE-Fest 2025 - Software Engineering Festival",
          "description": "SE-Fest 2025 adalah acara tahunan yang diselenggarakan oleh Prodi Rekayasa Perangkat Lunak Telkom University Surabaya. Acara ini mencakup lomba UI/UX, web development, poster, dan workshop React.js.",
          "startDate": "2025-01-24T00:00",
          "endDate": "2025-02-24T00:00",
          "location": {
            "@type": "Place",
            "name": "Telkom University Surabaya",
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "Jl. Ketintang No.156, Ketintang, Kec. Gayungan, Surabaya, Jawa Timur",
              "addressLocality": "Surabaya",
              "addressRegion": "Jawa Timur",
              "postalCode": "60231",
              "addressCountry": "ID"
            }
          },
          "organizer": {
            "@type": "Organization",
            "name": "HIMSE Telkom University Surabaya",
            "url": "https://sefest-telkom.ac.id"
          }
        }
        </script>

    @vite(['resources/css/app.css'])
    <title>{{ $title }}</title>
</head>
<body>
    <div id="main" class="w-full h-full min-h-screen overflow-hidden mx-auto">
        <!-- Nav Start -->
        <nav id="navbar" class="fixed top-0 w-full backdrop-blur-md z-50">
            <div class="max-w-[1280px] mx-auto w-full flex justify-between items-center sm:px-[75px] px-5 py-[30px]">
                <div class="w-[175px] shrink-0 overflow-hidden">
                    <img src="{{asset('img/sefest2025.png')}}" class="w-full h-full object-cover" alt="logo">
                </div>
                <!-- Hamburger Button -->
                <button id="hamburger" name="hamburger" type="button" class="lg:hidden block relative z-50 rounded-lg">
                    <span class="hamburger-line block bg-white my-1 transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line block  bg-white my-1 transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line block  bg-white my-1 transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                <!-- Menu List -->
                <ul id="nav-menu" class="hidden lg:flex flex-col lg:flex-row items-center gap-2 bg-slate-100 lg:bg-transparent lg:text-white right-4 p-4 lg:p-0 shadow-lg lg:shadow-none absolute lg:static top-full  rounded-md lg:rounded-none z-40 text-center">
                    <li><a href="/#" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">Home</a></li>
                    <li><a href="/#about" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">About</a></li>
                    <li><a href="/#competition" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">Competition</a></li>
                    <li><a href="/#workshop" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">Workshop</a></li>
                    <li><a href="/merch" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">Merch</a></li>
                </ul>
            </div>
        </nav>
        {{ $slot }}
        <section id="overview" class="relative z-20 max-w-[1000px] sm:max-w-[1280px] w-full overflow-hidden mx-auto px-[75px] sm:px-[75px] -mb-[250px]">
            <div class="bg-[#640EF1] rounded-[40px]">
                <div class="flex gap-[60px] items-center p-[50px]">
                    <div class="flex flex-col gap-[40px] w-[478px]">
                        <div class="!w-fit bg-white rounded-full px-4 py-2">
                            <div class="flex gap-[6px] items-center">
                                <img src="{{asset('asset/images/icons/global.svg')}}" class="w-6 h-6" alt="icons">
                                <p class="font-semibold">100+ peserta SEFEST hadir setiap tahun!</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[10px] text-white">
                            <h2 class="font-clash-display font-semibold text-[40px]">Benefit Competition <br> and Workshop</h2>
                            <p class="leading-[32px]">Mengikuti kompetisi dan workshop ini memberikan Anda peluang emas untuk meningkatkan kemampuan, memperluas relasi, dan mendapatkan pengalaman berharga. Jangan sampai melewatkan kesempatan ini karena setiap momen di sini dirancang untuk menginspirasi, mengembangkan, dan membuka jalan menuju peluang besar di masa depan</p>
                        </div>
                        <div class="flex gap-5 items-center">
                            <a href="/form/registrasi/lomba" class="bg-weserve-yellow rounded-full px-10 py-4 font-bold text-[18px] hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Register Competition</a>
                            <a href="#">
                                <div class="flex gap-[6px] items-center">

                                    <p class="font-semibold text-white hover:text-purple-500">Rule-Book</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 items-center gap-5">
                        <a href="#">
                            <div class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                <div class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/ellipse_mini.svg')}}" alt="shadow">
                                </div>
                                <div class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/scroll.svg')}}" alt="icon">
                                </div>
                                <div class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/scroll-white.svg')}}" alt="icon">
                                </div>
                                <h3 class="font-bold text-[18px] group-hover:text-white transition-all duration-300">Certificate</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                <div class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/ellipse_mini.svg')}}" alt="shadow">
                                </div>
                                <div class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/cpu-charge.svg')}}" alt="icon">
                                </div>
                                <div class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/cpu-charge-white.svg')}}" alt="icon">
                                </div>
                                <h3 class="font-bold text-[18px] group-hover:text-white transition-all duration-300">Consultation</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                <div class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/ellipse_mini.svg')}}" alt="shadow">
                                </div>
                                <div class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/security-user-purple.svg')}}" alt="icon">
                                </div>
                                <div class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/security-user.svg')}}" alt="icon">
                                </div>
                                <h3 class="font-bold text-[18px] group-hover:text-white transition-all duration-300">Networking</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                <div class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/ellipse_mini.svg')}}" alt="shadow">
                                </div>
                                <div class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/status-up-purple.svg')}}" alt="icon">
                                </div>
                                <div class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/status-up.svg')}}" alt="icon">
                                </div>
                                <h3 class="font-bold text-[18px] group-hover:text-white transition-all duration-300">Portfolio</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                <div class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/ellipse_mini.svg')}}" alt="shadow">
                                </div>
                                <div class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/candle.svg')}}" alt="icon">
                                </div>
                                <div class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/candle-white.svg')}}" alt="icon">
                                </div>
                                <h3 class="font-bold text-[18px] group-hover:text-white transition-all duration-300">Knowledge</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                <div class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/ellipse_mini.svg')}}" alt="shadow">
                                </div>
                                <div class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/crown.svg')}}" alt="icon">
                                </div>
                                <div class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/crown-white.svg')}}" alt="icon">
                                </div>
                                <h3 class="font-bold text-[18px] group-hover:text-white transition-all duration-300">Rewards</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
            <footer class="relative z-10 w-full overflow-hidden mx-auto bg-[#070C29] pt-[50px] sm:pt-[300px] ">
                <div class="flex flex-col gap-[30px] px-5 sm:px-[75px] pb-[30px] sm:pb-[50px] max-w-[1280px] mx-auto">
                    <!-- Logo and Description -->
                    <div class="flex flex-col items-center sm:flex-row sm:items-start sm:justify-between sm:gap-[100px]">
                        <div class="text-center sm:text-left flex flex-col gap-[15px]">
                            <div class="w-[175px] h-[42px] shrink-0 overflow-hidden mx-auto sm:mx-0">
                                <img src="{{asset('img/sefest2025.png')}}" class="h-full object-contain" alt="logo">
                            </div>
                            <p class="font-medium text-weserve-light leading-[28px] sm:leading-[32px] text-justify">
                                Software Engineering Festival atau biasa disingkat dengan SEFEST adalah acara tahunan yang diselenggarakan oleh Prodi Rekayasa Perangkat Lunak Telkom University Surabaya dengan tim pelaksana dari Himpunan Mahasiswa Software Engineering (HIMSE) Telkom University Surabaya.
                            </p>
                        </div>
                    </div>

                    <!-- Links Section -->
                    <div class="grid grid-cols-1 gap-[30px] text-center sm:grid-cols-3 sm:text-left">
                        <!-- Competition -->
                        <div class="sm:grid-cols-1 justify-items-start text-start">
                            <h4 class="text-white font-bold text-[18px]">Competition</h4>
                            <ul class="list-none pt-5">
                                <li><a href="#" class="text-weserve-light font-medium hover:text-purple-500">Web Development</a></li>
                                <li><a href="#" class="text-weserve-light font-medium hover:text-purple-500">UI/UX Design</a></li>
                                <li><a href="#" class="text-weserve-light font-medium hover:text-purple-500">Poster Competition</a></li>
                            </ul>
                        </div>

                        <!-- Workshop -->
                        <div class="sm:grid-cols-1 justify-items-start text-start">
                            <h4 class="text-white font-bold text-[18px]">Workshop</h4>
                            <ul class="list-none pt-3">
                                <li><a href="#" class="text-weserve-light font-medium hover:text-purple-500">Fullstack JavaScript React JS</a></li>
                            </ul>
                        </div>

                        <!-- Contact Person -->
                        <div class="sm:grid-cols-1 justify-items-start text-start">
                            <h4 class="text-white font-bold text-[18px]">Social Media</h4>
                            <ul class="list-none pt-5">
                                <li><a href="https://www.instagram.com/himse.telkomsurabaya/" class="text-weserve-light font-medium hover:text-purple-500">Instagram</a></li>
                                <li><a href="#" class="text-weserve-light font-medium hover:text-purple-500">Web</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="flex justify-center gap-4 mt-5">
                        <a href="https://www.instagram.com/himse.telkomsurabaya/" class="bg-white rounded-full p-[10px]">
                            <img src="{{ asset('asset/images/icons/icons8-instagram-logo.svg') }}" class="w-[24px] h-[24px]" alt="icon">
                        </a>
                        <a href="#" class="bg-white rounded-full p-[10px]">
                            <img src="{{asset('asset/images/icons/global-purple.svg')}}" class="w-[24px] h-[24px]" alt="icon">
                        </a>
                        <a href="#" class="bg-white rounded-full p-[10px]">
                            <img src="{{asset('asset/images/icons/video-play.svg')}}" class="w-[24px] h-[24px]" alt="icon">
                        </a>
                    </div>

                    <!-- Copyright -->
                    <p class="text-center text-weserve-light font-medium mt-5">
                        All Rights Reserved • Copyright by <span class="text-[#34675C]">SE-Fest 2025</span> <br> <span class="text-red-500">Telkom University</span> Surabaya
                    </p>
                </div>
            </footer>
            <!-- Footer end -->

            <!-- tombol contact person -->
            <div id="contactperson" class="hidden fixed right-10 bottom-12 space-y-4 z-[9999]">
                <!-- Contact Person 1 -->
                <a href="https://wa.link/3nku47" class="flex items-center gap-1 pl-10 p-4 h-14 w-full rounded-full bg-white hover:animate-pulse shadow-lg ">
                    <img src="{{asset('asset/images/icons/whatsapp.svg')}}" alt="WhatsApp" class="h-6 w-6">
                    <span class="text-sm font-medium leading-tight text-gray-800 pl-2">Contact Person Admin 1</span>
                </a>
                <!-- Contact Person 2 -->
                <a href="https://wa.link/yhl4zz" class="flex items-center gap-1 pl-10 h-14 w-full rounded-full bg-white hover:animate-pulse shadow-lg">
                    <img src="{{asset('asset/images/icons/whatsapp.svg')}}" alt="WhatsApp" class="h-6 w-6">
                    <span class="text-sm font-medium leading-tight text-gray-800 pl-2">Contact Person Admin 2</span>
                </a>
            </div>
    </div>

    <!-- swiper js -->
    <script src="{{asset('asset/js/script.js')}}"></script>
</body>
</html>
