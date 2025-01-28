<!DOCTYPE html>
<html lang="en" class="scroll-smooth text-[#080C2E] bg-gradient-landing-page">
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
    <title>Homepage SE-FEST25</title>
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
                    <li><a href="#" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">Home</a></li>
                    <li><a href="#about" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">About</a></li>
                    <li><a href="#competition" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">Competition</a></li>
                    <li><a href="#workshop" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">Workshop</a></li>
                    <li><a href="/merch" class="text-base sm:text-white text-black py-2 mx-8 flex hover:text-purple-500 transition duration-500 ease-in-out">Merch</a></li>
                </ul>
            </div>
        </nav>
        <!-- nav end -->

        <!-- Hero Section -->
        <div class="flex flex-col gap-[100px] pt-[80px]">
            <section id="hero-section" class="max-w-[1280px] w-full overflow-hidden mx-auto">
                <div class="sm:px-[75px] px-5 pt-[80px] flex sm:flex-row flex-col justify-between items-center">
                    <div class="flex flex-col gap-[40px] sm:w-[500px]">
                        <div class="flex gap-[4px] bg-white rounded-full items-center px-4 py-2">
                            <img src="{{asset('asset/images/icons/global.svg')}}" class="w-6 h-6" alt="icons">
                            <p class="font-semibold">100+ Peserta SEFEST hadir setiap tahun!</p>
                        </div>
                        <div class="flex flex-col gap-[10px]">
                            <h1 class="font-clash-display text-[50px] leading-[100%] font-semibold min-h-[140px] text-white">Creating <br class="mt-5"> Sustainable Futures <br> with Software Solutions </h1>
                            <p class="font-medium text-gray-400 pt-4">Hi, Nice to meet you! <br>Welcome to Software Engineer Festival!</p>
                        </div>

                        <div class="flex gap-7 items-center">
                            <a href="/form/registrasi/lomba" class="bg-[#640EF1] rounded-full px-10 py-4 font-bold text-[18px] text-white hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Register</a>
                            <a href="#">
                                <div class="flex gap-[6px] items-center">
                                    <img src="{{asset('asset/images/icons/device-message-purple.svg')}}" class="w-6 h-6" alt="icon">
                                    <p class="font-medium text-white">Rule-Book</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-full sm:w-[500px] h-[550px] shrink-0 overflow-hidden">
                        <img src="{{asset('asset/images/thumbnail/homepage.webp')}}" class="w-full h-full object-contain" alt="thumbnail" data-aos="flip-up">
                    </div>
                </div>
            </section>
        </div>
            <!-- end hero section -->

            <!-- start About SE FEST  -->
            <section id="about" class="w-full mx-auto px-[20px] mt-[15px] pt-10">
                <div class="flex flex-col gap-[30px] items-center">
                    <div class="flex flex-col gap-[10px] text-center">
                        <h2 class="font-clash-display font-semibold text-[46px] text-white mt-10 pt-10">About <span class="text-[#34675C]">SE-Fest</span> </h2>
                        <p class="font-medium text-gray-400 leading-[32px] text-justify sm:text-center">
                            Software Engineering Festival atau biasa disingkat dengan SEFEST adalah acara tahunan yang diselenggarakan oleh <br> Prodi Rekayasa Perangkat Lunak Telkom University Surabaya dengan tim pelaksana dari Himpunan Mahasiswa Software Engineering (HIMSE) Telkom University Surabaya.
                        </p>
                    </div>

                    <div class="w-full overflow-hidden">
                        <div class="flex gap-[20px] py-[30px] animate-infinite-scroll">
                            <div class="flex gap-5">
                                <div class="flex gap-[20px]">
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-[#640EF1] transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/documentation1.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-[#640EF1] transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/gambar23.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/gambar1.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/gambar3.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/gambar4.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/gambar5.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/gambar6.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/gambar7.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/gambar8.web')}}p" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="{{asset('asset/images/thumbnail/documentation1.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about se fest -->

            <!-- start Competition -->
            <section id="competition" class="max-w-[1280px] w-full overflow-hidden mx-auto mt-[15px] pt-10">
                <div class="flex flex-col gap-[30px] sm:px-[75px] px-5">
                    <div class="flex justify-end mt-5 pt-5">
                        <div class="!w-fit bg-purple-500 rounded-full px-40 py-3 pr-11 mt-10">
                            <p class="font-clash-display font-medium text-medium text-center text-[22px]">Competition</p>
                        </div>
                    </div>
                    <!-- Wrapper Grid -->
                    <div class="flex justify-center items-center">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-[40px]">
                            <!-- Lomba 1 -->
                            <div class="relative flex flex-col gap-[30px] px-5 py-[30px] bg-white hover:bg-[#782fee] rounded-[16px] group transition-all duration-300" data-aos="flip-left">
                                <div class="hidden absolute right-1 -translate-y-4 group-hover:block opacity-80">
                                    <img src="{{asset('asset/images/icons/ellipse.svg')}}" alt="">
                                </div>
                                <div class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/web-development-svgrepo-com.svg')}}" alt="icon">
                                </div>
                                <div class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/web-development-svgrepo-com.svg')}}" alt="icon">
                                </div>
                                <div class="flex flex-col gap-1 z-10">
                                    <h3 class="font-bold text-[22px] group-hover:text-white transition-all duration-300">Web Development</h3>
                                    <p class="font-medium leading-[28px] text-[#5D5D7C] group-hover:text-black pt-5">Sebuah kompetisi yang menantang siswa SMA/SMK sederajat untuk merancang website yang menarik, fungsional, dan sesuai dengan tema acara.</p>
                                </div>
                            </div>

                            <!-- Lomba 2 -->
                            <div class="relative flex flex-col gap-[30px] px-5 py-[30px] bg-white hover:bg-[#782fee] rounded-[16px] group transition-all duration-300" data-aos="flip-up">
                                <div class="hidden absolute right-1 -translate-y-4 group-hover:block opacity-80">
                                    <img src="{{asset('asset/images/icons/ellipse.svg')}}" alt="">
                                </div>
                                <div class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/icons8-figma.svg')}}" alt="icon">
                                </div>
                                <div class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/icons8-figma.svg')}}" alt="icon">
                                </div>
                                <div class="flex flex-col gap-1 z-10">
                                    <h3 class="font-bold text-[22px] group-hover:text-white transition-all duration-300">UI/UX Design</h3>
                                    <p class="font-medium leading-[28px] text-[#5D5D7C] group-hover:text-black pt-5">
                                        Lomba UI/UX Design adalah kompetisi bagi siswa SMA/SMK sederajat untuk merancang antarmuka pengguna (UI) dan pengalaman pengguna (UX) yang menarik, intuitif, dan sesuai dengan tema acara.
                                    </p>
                                </div>
                            </div>

                            <!-- Lomba 3 -->
                            <div class="relative flex flex-col gap-[30px] px-5 py-[30px] bg-white hover:bg-[#782fee] rounded-[16px] group transition-all duration-300" data-aos="flip-right">
                                <div class="hidden absolute right-1 -translate-y-4 group-hover:block opacity-80">
                                    <img  src="{{asset('asset/images/icons/ellipse.svg')}}" alt="">
                                </div>
                                <div class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/icons8-canva.svg')}}" alt="icon">
                                </div>
                                <div class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                    <img src="{{asset('asset/images/icons/icons8-canva.svg')}}" alt="icon">
                                </div>
                                <div class="flex flex-col gap-1 z-10">
                                    <h3 class="font-bold text-[22px] group-hover:text-white transition-all duration-300">Poster Challenge</h3>
                                    <p class="font-medium leading-[28px] text-[#5D5D7C] group-hover:text-black pt-5">
                                        Peserta ditantang untuk membuat poster yang menggambarkan konsep utama dalam pengembangan perangkat lunak (Software Development Life Cycle/SDLC) serta penerapannya dalam menciptakan solusi teknologi yang berkelanjutan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <a href="/form/registrasi/lomba" class="bg-[#640EF1] block rounded-full sm:w-1/4 px-10 py-4 font-bold text-[18px] text-white w-full text-center hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                            Register Competition
                        </a>
                    </div>
                </div>
            </section>
            <!-- end Competition -->

            <!-- Start Workshop -->
                    <section id="workshop" class="max-w-[1280px] w-full overflow-hidden mx-auto mt-[15px] pt-10 px-5 sm:px-[75px]">
                            <div class="flex flex-col sm:flex-row gap-6 sm:gap-[70px] items-center sm:items-start">
                    <!-- Gambar Workshop -->
                    <div class="w-full sm:w-[500px] h-[300px] sm:h-[550px] shrink-0 overflow-hidden">
                        <img src="{{asset('asset/images/thumbnail/fotonaufal.webp')}}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <!-- Konten -->
                    <div class="flex flex-col gap-6 w-full sm:w-[500px]">
                        <!-- Judul dan Deskripsi -->
                        <div class="flex flex-col gap-5">
                            <h2 class="text-[40px] sm:text-[46px] font-semibold text-white">Workshop <br> JavaScript React</h2>
                            <p class="font-medium leading-[24px] sm:leading-[32px] text-[#a7a7c6]">
                                Peserta akan mempraktikkan teknik debugging, optimalisasi performa aplikasi, dan menerapkan prinsip best practices dalam pengembangan front-end modern. Sesi ini dirancang untuk memberikan keterampilan hands-on, sehingga peserta dapat langsung menerapkan React.js dalam proyek mereka.
                            </p>
                        </div>
                        <!-- Benefit -->
                        <div class="flex flex-col gap-4">
                            <div class="flex gap-4 bg-white rounded-[16px] p-5">
                                <img src="{{asset('asset/images/icons/portfolio-my-profile-browser-svgrepo-com.svg')}}" class="w-[46px] h-[46px]" alt="icon">
                                <div class="flex flex-col gap-[2px]">
                                    <h3 class="font-bold text-[18px] sm:text-[22px] leading-[24px]">Good for Personal Portfolio</h3>
                                    <p class="font-medium text-weserve-grey pt-2">Projek workshop yang menarik untuk tambahan portfolio anda!</p>
                                </div>
                            </div>
                            <div class="flex gap-4 bg-white rounded-[16px] p-5">
                                <img src="{{asset('asset/images/icons/certificate-svgrepo-com.svg')}}" class="w-[46px] h-[46px]" alt="icon">
                                <div class="flex flex-col gap-[2px]">
                                    <h3 class="font-bold text-[18px] sm:text-[22px] leading-[24px]">Graduation Certificate</h3>
                                    <p class="font-medium text-weserve-grey pt-2">Mendapatkan sertifikat keikutsertaan dalam workshop.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 bg-white rounded-[16px] p-5">
                                <img src="{{asset('asset/images/icons/status-up-purple.svg')}}" class="w-[46px] h-[46px]" alt="icon">
                                <div class="flex flex-col gap-[2px]">
                                    <h3 class="font-bold text-[18px] sm:text-[22px] leading-[24px]">Most Popular Framework</h3>
                                    <p class="font-medium text-weserve-grey pt-2">React JS adalah salah satu framework populer dalam pengembangan web development.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tombol Registrasi workshop -->
                        <div class="flex w-full">
                            <a href="/form/registrasi/workshop" class="bg-[#640EF1] rounded-full px-10 py-4 font-bold text-[18px] text-white w-full sm:w-auto text-center hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                                Get Ticket Workshop
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="timeline" class="max-w-[1280px] w-full overflow-hidden mx-auto mt-[15px] pt-10 px-5 sm:px-[75px]">
                <div class="flex flex-col sm:flex-row gap-6 sm:gap-[70px] items-center sm:items-start">
                    <div class="flex flex-col gap-6 w-full sm:w-[500px]">
                        <div class="flex flex-col gap-5">
                            <h2 class="text-[40px] sm:text-[46px] font-semibold text-white">Timeline Lomba</h2>
                            <p class="font-medium leading-[24px] sm:leading-[32px] text-[#a7a7c6]">
                                Lomba Sefest 2025 <br> "Creating Sustainable Futures with Software Solutions"
                            </p>
                        </div>
                    </div>
                    <div class="w-full sm:w-[500px] h-[300px] sm:h-[550px] shrink-0 overflow-hidden">
                        <div id="bodyDetailPengiriman" class="flex justify-center pb-4 pt-9 items-center text-white">
                            <ul role="list" class="-mb-8" id="tracking-order">
                                <li>
                                    <div class="flex flex-row gap-4">
                                        <div class="flex flex-col text-end mt-[-16px] md:w-52 w-40">
                                            <span class="text-sm font-semibold">Soft Opening Sefest 2025</span>
                                            <span class="nowrap text-sm">24 Januari 2025</span>
                                        </div>
                                        <div class="relative pb-8 md:pb-16">
                                            <span class="pipe absolute left-1.5 top-3 -ml-px h-full w-0.5 bg-white" aria-hidden="true"></span>
                                            <div class="relative">
                                                <div>
                                                    <span class="bullet h-3 w-3 rounded-full bg-white flex items-center justify-center z-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col text-start mt-[-16px] min-w-40 md:min-w-52">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex flex-row gap-4">
                                        <div class="flex flex-col text-end mt-[-16px] min-w-40 md:min-w-52">
                                        </div>
                                        <div class="relative pb-8 md:pb-16">
                                            <span class="pipe absolute left-1.5 top-3 -ml-px h-full w-0.5 bg-white" aria-hidden="true"></span>
                                            <div class="relative">
                                                <div>
                                                    <span class="bullet h-3 w-3 rounded-full bg-white flex items-center justify-center z-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col text-start mt-[-16px] md:w-52 w-40">
                                            <span class="text-sm font-semibold">Registrasi Lomba Sefest 2025</span>
                                            <span class="nowrap text-sm">25 Januari - 5 Februari 2025</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex flex-row gap-4">
                                        <div class="flex flex-col text-end mt-[-16px] md:w-52 w-40">
                                            <span class="text-sm font-semibold">Registrasi Workshop</span>
                                            <span class="nowrap text-sm">25 Januari - 21 Februari 2025</span>
                                        </div>
                                        <div class="relative pb-8 md:pb-16">
                                            <span class="pipe absolute left-1.5 top-3 -ml-px h-full w-0.5 bg-white" aria-hidden="true"></span>
                                            <div class="relative">
                                                <div>
                                                    <span class="bullet h-3 w-3 rounded-full bg-white flex items-center justify-center z-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col text-start mt-[-16px] min-w-40 md:min-w-52">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex flex-row gap-4">
                                        <div class="flex flex-col text-end mt-[-16px] min-w-40 md:min-w-52">
                                        </div>
                                        <div class="relative pb-8 md:pb-16">
                                            <span class="pipe absolute left-1.5 top-3 -ml-px h-full w-0.5 bg-white" aria-hidden="true"></span>
                                            <div class="relative">
                                                <div>
                                                    <span class="bullet h-3 w-3 rounded-full bg-white flex items-center justify-center z-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col text-start mt-[-16px] md:w-52 w-40">
                                            <span class="text-sm font-semibold">Eliminitation Stage</span>
                                            <span class="nowrap text-sm">6 Februari - 20 Februari 2025</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex flex-row gap-4">
                                        <div class="flex flex-col text-end mt-[-16px] md:w-52 w-40">
                                            <span class="text-sm font-semibold">Final Stage</span>
                                            <span class="nowrap text-sm">13 Januari - 20 Februari 2025</span>
                                        </div>
                                        <div class="relative pb-8 md:pb-16">
                                            <span class="pipe absolute left-1.5 top-3 -ml-px h-full w-0.5 bg-white" aria-hidden="true"></span>
                                            <div class="relative">
                                                <div>
                                                    <span class="bullet h-3 w-3 rounded-full bg-white flex items-center justify-center z-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col text-start mt-[-16px] min-w-40 md:min-w-52">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex flex-row gap-4">
                                        <div class="flex flex-col text-end mt-[-16px] min-w-40 md:min-w-52">
                                        </div>
                                        <div class="relative pb-8 md:pb-16">
                                            {{-- <span class="pipe absolute left-1.5 top-3 -ml-px h-full w-0.5 bg-white" aria-hidden="true"></span> --}}
                                            <div class="relative">
                                                <div>
                                                    <span class="bullet h-3 w-3 rounded-full bg-white flex items-center justify-center z-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col text-start mt-[-16px] md:w-52 w-40">
                                            <span class="text-sm font-semibold">Exhibition, Awarding dan Workshop</span>
                                            <span class="nowrap text-sm">23 Februari 2025</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
          <!-- end Workshop -->

          <!-- Faq Sesion start -->
            <section id="faq-section" class="max-w-[1280px] w-full overflow-hidden mx-auto pt-20">
            <div class="flex flex-col gap-[30px] sm:px-[75px] px-5">
                <h2 class="font-clash-display font-semibold text-[46px] text-center text-white">Frequently Asked Questions</h2>
                <!-- flex col 1 -->
                <div class="w-full flex flex-col sm:flex-row gap-[30px]">
                    <!-- pertanyaan 1 -->
                    <div class="flex flex-col gap-[20px] w-full">
                        <!-- pertanyaan 1 -->
                        <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                            <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                                <h4 class="text-[20px] font-bold">Dimana Saya Bisa Melihat Timeline?</h4>
                                <div :class="{'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen}" class="transition-all duration-300">
                                    <img :src="isOpen ? '{{asset('asset/images/icons/arrow-up-navybg.svg')}}' : '{{asset('asset/images/icons/arrow-down-whitebg.svg')}}'" alt="icon">
                                </div>
                            </div>
                            <div class="flex flex-col gap-5 pt-[20px] w-[450px] max-w-full" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                                <p class="text-weserve-grey font-medium leading-[32px] max-w-full">Timeline tersedia pada instagram @event.himse</p>
                                <a href="#" class="text-weserve-purple font-semibold">Timeline</a>
                            </div>
                        </div>
                       <!-- Pertanyaan 2 -->
                        <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                            <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                                <h4 class="text-[17px] font-bold">Bagaimana Cara Mendaftar dan Mengikuti Event Ini?</h4>
                                <div :class="{'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen}" class="transition-all duration-300">
                                    <img :src="isOpen ? '{{asset('asset/images/icons/arrow-up-navybg.svg')}}' : '{{asset('asset/images/icons/arrow-down-whitebg.svg')}}'" alt="icon">
                                </div>
                            </div>
                            <div class="flex flex-col gap-5 pt-[20px] w-[450px] max-w-full" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                                <p class="text-weserve-grey font-medium leading-[32px] max-w-full">Peserta lomba akan mengisi form ketika menekan tombol Register Competition. dan ketika ingin mendaftar workshop Peserta menekan tombol Get Ticket Workshop diatas, lalu mengisi form pendaftaran workshop </p>
                            </div>
                        </div>
                       <!-- Pertanyaan 3  -->
                        <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                            <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                                <h4 class="text-[20px] font-bold">Event Ini Berbayar atau Gratis?</h4>
                                <div :class="{'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen}" class="transition-all duration-300">
                                    <img :src="isOpen ? '{{asset('asset/images/icons/arrow-up-navybg.svg')}}' : '{{asset('asset/images/icons/arrow-down-whitebg.svg')}}'" alt="icon">
                                </div>
                            </div>
                            <div class="flex flex-col gap-5 pt-[20px] w-[450px] max-w-full" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                                <p class="text-weserve-grey font-medium leading-[32px]">Untuk kompetisi Web Development, UI/UX Design, Poster Challenge Gratis. Namun untuk Workshop berbayar😉</p>
                            </div>
                        </div>
                    </div>
                    <!-- div penutup flex col 1 -->
                    <div class="flex flex-col gap-[20px] w-full">
                        <!-- pertanyaan 4 -->
                        <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                            <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                                <h4 class="text-[17px] font-bold">Apa Saja Benefit yang Akan Saya Dapatkan Jika Mengikuti Event Ini?</h4>
                                <div :class="{'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen}" class="transition-all duration-300">
                                    <img :src="isOpen ? '{{asset('asset/images/icons/arrow-up-navybg.svg')}}' : '{{asset('asset/images/icons/arrow-down-whitebg.svg')}}'" alt="icon">
                                </div>
                            </div>
                            <div class="flex flex-col gap-5 pt-[20px] w-[450px] max-w-full" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                                <p class="text-weserve-grey font-medium leading-[32px]">Benefit yang bisa di dapatkan peserta ketika mengikuti Kompetisi dan Workshop SE-FEST 2025 Adalah Sertifikat Keikutsertaan Lomba/Workshop, Tambahan Portfolio menarik ketika mengikuti Workshop/Lomba, Rewards Kompetisi, Konsultasi ketika Workshop berlangsung, Networking serta Knowledge</p>
                            </div>
                        </div>
                        <!-- Pertanyaan 5  -->
                        <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                            <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                                <h4 class="text-[17px] font-bold">Dimana saya bisa melihat Rule-Book?</h4>
                                <div :class="{'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen}" class="transition-all duration-300">
                                    <img :src="isOpen ? '{{asset('asset/images/icons/arrow-up-navybg.svg')}}' : '{{asset('asset/images/icons/arrow-down-whitebg.svg')}}'" alt="icon">
                                </div>
                            </div>
                            <div class="flex flex-col gap-5 pt-[20px] w-[450px] max-w-full" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                                <p class="text-weserve-grey font-medium leading-[32px]">Rule-Book tersedia pada halaman paling atas web ini</p>
                            </div>
                        </div>
                        <!-- habis -->
                    </div>
                    <!-- div penutup flex col 2 -->
                </div>
            </div>
        </section>
        <!-- Faq Sesion end -->

        <!-- Media Partner start -->
        <section id="mediapartner" class="max-w-[1280px] w-full overflow-hidden mx-auto pt-20">
            <h3 class="font-clash-display font-semibold text-[46px] text-center text-white">Media Partner</h3>
            <div class="w-full px-2 flex flex-wrap items-center justify-center">
                <div class="group max-w-[120px] mx-6 py-4 transition-all duration-300">
                    <div class="hidden w-full h-[120px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                        <img src="{{asset('asset/images/thumbnail/image.webp')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                    <div class="block w-full h-[120px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                        <img src="{{asset('asset/images/thumbnail/image.webp')}}" class="w-full h-full object-contain" alt="logo">
                    </div>
                </div>
            </div>
        </section>
        <!-- Media Partner end -->

        <!-- section overview start -->
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
        <!-- section overview end -->

        <!-- Footer Start -->
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

    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- swiper js -->
    <script src="{{asset('asset/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset('asset/js/swiper.js')}}"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
