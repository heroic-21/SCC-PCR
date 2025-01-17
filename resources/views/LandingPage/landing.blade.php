<!DOCTYPE html>
<html lang="en" data-mode="light" dir="ltr">

    <head>

        <meta charset="utf-8" />
        <title>Dorsin - Tailwindcss Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Premium Tailwindcss Landing Page Template, Tailwindcss v3.0" />
        <meta name="keywords" content="Tailwindcss v3.0, premium, marketing, multipurpose" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets2/images/favicon.ico">

        <!-- Tailwind Css-->
        <link href="assets2/css/tailwind.css" rel="stylesheet" type="text/css" />

        <!-- Icons Css -->
        <link href="assets2/css/icons.css" rel="stylesheet" type="text/css" />

    </head>


    <body class="dark:bg-zinc-800">
         <!-- Navbar Start -->
        <div class="navbar-custom" id="navbar">
            <nav>
                <div class="lg:container flex flex-wrap items-center">

                    <!-- Main Logo -->
                    <a href="index.html" class="flex lg:ml-0 ml-8">
                        <span class="self-center text-xl font-poppins font-bold tracking-widest whitespace-nowrap uppercase text-white">
                            Dorsin
                        </span>
                    </a>

                    <div class="flex items-center lg:order-2 rtl:mr-auto ltr:ml-auto lg:mr-0 mr-8">
                        <!-- Navbar Button -->
                        <a href="signup.html" class="btn bg-red-500 text-white rounded-full translate-y-0">
                            Try it Free
                        </a>
                        <!-- Navbar Collapse Manu Button -->
                        <button data-collapse="menu-collapse" type="button" class="inline-flex items-center ml-3 text-sm text-white lg:hidden" aria-controls="menu-collapse" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <i class="mdi mdi-menu text-2xl"></i>
                        </button>
                    </div>

                    <!-- Navbar Manu -->
                    <div class="justify-between items-center w-full lg:w-auto lg:flex hidden lg:order-1 ltr:lg:ml-14 rtl:lg:mr-14 rtl:mr-0 ltr:ml-0" id="menu-collapse">
                        <ul class="navbar-nav lg:h-auto h-[290px] lg:overflow-visible overflow-y-scroll lg:ml-0 ml-8" id="navbar-navlist">
                            <li>
                                <div class="dropdown">
                                    <a href="#home" class="nav-item dropdown-toggle" id="navbarDropdownOneButton" data-dropdown-toggle="navbarDropdownOne" aria-current="page">Home <i class="mdi mdi-chevron-down"></i></a>
                                    <div id="navbarDropdownOne" class="dropdown-menu">
                                        <a href="index.html" class="dropdown-item">Home Page 1</a>
                                        <a href="index-2.html" class="dropdown-item">Home Page 2</a>
                                        <a href="index-3.html" class="dropdown-item">Home Page 3</a>
                                        <a href="index-4.html" class="dropdown-item">Home Page 4</a>
                                        <a href="index-5.html" class="dropdown-item">Home Page 5</a>
                                        <a href="index-6.html" class="dropdown-item">Home Page 6</a>
                                        <a href="index-7.html" class="dropdown-item">Home Page 7</a>
                                        <a href="index-8.html" class="dropdown-item">Home Page 8</a>
                                        <a href="index-9.html" class="dropdown-item">Home Page 9</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a data-scroll href="#services" class="nav-item">Services</a>
                            </li>
                            <li>
                                <a data-scroll href="#pricing" class="nav-item">Pricing</a>
                            </li>
                            <li>
                                <a data-scroll href="#team" class="nav-item">Team</a>
                            </li>
                            <li>
                                <a data-scroll href="#blog" class="nav-item">Blog</a>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a href="#Authpage" class="nav-item dropdown-toggle" id="navbarDropdownTwoButton" data-dropdown-toggle="navbarDropdownTwo" aria-current="page">Auth Pages <i class="mdi mdi-chevron-down"></i></a>
                                    <div id="navbarDropdownTwo" class="dropdown-menu">
                                        <a href="login.html" class="dropdown-item">Login</a>
                                        <a href="signup.html" class="dropdown-item">Sign up</a>
                                        <a href="password_forget.html" class="dropdown-item">Forget Password</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Home Start -->
        <section class="lg:pb-40 lg:pt-56 py-32" id="home">
            <div class="overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover" src="assets2/images/bg-home.jpg"
                    alt="build your website image">
                <div class="absolute inset-0 w-full h-full opacity-90" style="background: linear-gradient(to right, #073946, #d14b1b);"></div>
            </div>
            <div class="container mx-auto px-4">
                <div class="flex justify-center">
                    <div class="lg:w-2/3 text-center relative">
                        <div class="space-y-6 mb-10">
                            <h2 class="text-white md:text-[32px] lg:text-[46px] leading-[64px] capitalize">
                                SUMATERA CAREER CENTER
                                <br>
                                Politenik Caltex Riau
                            </h2>
                            <p class="text-gray-300/80 text-lg">
                                Menjadi institusi karir yang mewadahi para alumni yang berbasis IT dalam menyajikan informasi karir, pengembangan diri, dan pelayanan rekrutmen.
                            </p>

                            <div class="flex justify-center space-x-4">
                                <button type="button"
                                    class="btn border text-white border-white hover:bg-white hover:text-white transition-colors duration-300 ease-in-out animate-bounce"
                                    data-modal-trigger aria-controls="modal-video" aria-expanded="false">
                                    Watch Now <span class="mdi mdi-play-circle text-[20px] align-middle ml-2"></span>
                                </button>
                                <button type="button"
                                    class="btn border text-white border-white hover:bg-white hover:text-white transition-colors duration-300 ease-in-out animate-bounce"
                                    data-modal-trigger aria-controls="modal-video" aria-expanded="false">
                                    Watch Now <span class="mdi mdi-play-circle text-[20px] align-middle ml-2"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wave Animation -->
            <div class="absolute left-0 right-0 bottom-0 m-auto h-[150px] overflow-hidden wave-anim">
                <div class="absolute -bottom-[1px] w-full h-full overflow-hidden z-20 opacity-20">
                    <div class="wave wave-one block dark:hidden" style="background-image: url('assets2/images/wave-shape/wave1.png')"></div>
                    <div class="wave wave-one hidden dark:block" style="background-image: url('assets2/images/wave-shape/wave1-dark.png')"></div>
                </div>
                <div class="absolute -bottom-[1px] w-full h-full overflow-hidden z-10 opacity-40">
                    <div class="wave wave-two block dark:hidden" style="background-image: url('assets2/images/wave-shape/wave2.png')"></div>
                    <div class="wave wave-two hidden dark:block" style="background-image: url('assets2/images/wave-shape/wave2-dark.png')"></div>
                </div>
                <div class="absolute -bottom-[1px] w-full h-full overflow-hidden z-[5]">
                    <div class="wave wave-three block dark:hidden" style="background-image: url('assets2/images/wave-shape/wave3.png')"></div>
                    <div class="wave wave-three hidden dark:block" style="background-image: url('assets2/images/wave-shape/wave2-dark.png')"></div>
                </div>
            </div>
        </section>
        <!-- Home Start -->

        <!-- Video Modal Start -->
        <div id="modal-video" data-modal-target class="hidden">
            <div class="flex items-center justify-center fixed inset-0 z-50">
                <div data-modal-close data-modal-overlay tabindex="-1" data-class-in="opacity-50" data-class-out="opacity-0"
                    class="opacity-0 fixed inset-0 w-full z-40 transition-opacity duration-300 bg-black select-none">
                </div>
                <div data-modal-wrapper data-class-in="opacity-100 translate-y-0" data-class-out="opacity-0 -translate-y-5"
                    class="opacity-0 -translate-y-5 w-full z-50 overflow-auto max-w-3xl max-h-screen transition-all duration-300  flex flex-col transform rounded-md">
                    <div class="absolute top-10 right-10 z-50">
                        <!-- Modal Close Button -->
                        <button data-modal-close aria-label="Close" type="button"
                            class="w-10 h-10 text-2xl bg-gray-50 rounded-lg bg-opacity-50 text-gray-700 hover:text-black focus:text-black transition ease-in-out duration-150 ml-auto">
                            <i class="mdi mdi-close text-center -z-20"></i>
                            <span class="sr-only">Close Button</span>
                        </button>
                    </div>
                    <div class="relative overflow-x-hidden overflow-y-auto h-full flex-grow p-5">
                        <video id="VisaChipCardVideo" class="w-full" controls>
                            <!-- Modal Video -->
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal Start -->


        <!-- Service Start -->
        <section id="services">
            <div class="container">
                <div class="flex justify-center mx-5">
                    <div class="lg:w-2/3 space-y-5 text-center">
                        <!-- Section Title -->
                        <h1 class="text-2xl text-gray-800 uppercase tracking-widest dark:text-white">Our Service</h1>
                        <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
                        <p class="text-gray-400 dark:text-gray-300/60">We craft digital, graphic and dimensional thinking, to create category
                            leading brand experiences that have meaning and add a value for our clients.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-12 gap-y-16 mt-12">
                    <!-- Services Card 1 -->
                    <div class="space-y-6 p-4 text-center group hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-16 h-16 leading-loose rounded-full text-4xl text-red-500 block mx-auto text-center items-center shadow-lg bg-white group-hover:bg-red-500 group-hover:text-white dark:bg-zinc-900/50">
                            <i class="pe-7s-diamond"></i>
                        </div>
                        <h4 class="font-medium dark:text-white">Digital Design</h4>
                        <p class=" text-gray-400 dark:text-gray-300/60">Some quick example text to build on the card title and make up the bulk of
                            the card's content. Moltin gives you the platform.</p>
                    </div>

                    <!-- Services Card 2 -->
                    <div class="space-y-6 p-4 text-center group hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-16 h-16 leading-loose rounded-full text-4xl text-red-500 block mx-auto text-center items-center shadow-lg bg-white group-hover:bg-red-500 group-hover:text-white dark:bg-zinc-900/50">
                            <i class="pe-7s-display2"></i>
                        </div>
                        <h4 class="font-medium dark:text-white">Unlimited Colors</h4>
                        <p class=" text-gray-400 dark:text-gray-300/60">Credibly brand standards compliant users without extensible services.
                            Anibh euismod tincidunt ut laoreet.</p>
                    </div>

                    <!-- Services Card 3 -->
                    <div class="space-y-6 p-4 text-center group hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-16 h-16 leading-loose rounded-full text-4xl text-red-500 block mx-auto text-center items-center shadow-lg bg-white group-hover:bg-red-500 group-hover:text-white dark:bg-zinc-900/50">
                            <i class="pe-7s-piggy"></i>
                        </div>
                        <h4 class="font-medium dark:text-white">Strategy Solutions</h4>
                        <p class=" text-gray-400 dark:text-gray-300/60">Separated they live in Bookmarksgrove right at the coast of the Semantics,
                            a large language ocean necessary regelialia.</p>
                    </div>

                    <!-- Services Card 4 -->
                    <div class="space-y-6 p-4 text-center group hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-16 h-16 leading-loose rounded-full text-4xl text-red-500 block mx-auto text-center items-center shadow-lg bg-white group-hover:bg-red-500 group-hover:text-white dark:bg-zinc-900/50">
                            <i class="pe-7s-science"></i>
                        </div>
                        <h4 class="font-medium dark:text-white">Awesome Support</h4>
                        <p class=" text-gray-400 dark:text-gray-300/60">It is a paradisematic country, in which roasted parts of sentences fly
                            into your mouth leave for the far World.</p>
                    </div>

                    <!-- Services Card 5 -->
                    <div class="space-y-6 p-4 text-center group hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-16 h-16 leading-loose rounded-full text-4xl text-red-500 block mx-auto text-center items-center shadow-lg bg-white group-hover:bg-red-500 group-hover:text-white dark:bg-zinc-900/50">
                            <i class="pe-7s-news-paper"></i>
                        </div>
                        <h4 class="font-medium dark:text-white">Truly Multipurpose</h4>
                        <p class=" text-gray-400 dark:text-gray-300/60">Even the all-powerful Pointing has no control about the blind texts it is
                            an almost unorthographic.</p>
                    </div>

                    <!-- Services Card 6 -->
                    <div class="space-y-6 p-4 text-center group hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-16 h-16 leading-loose rounded-full text-4xl text-red-500 block mx-auto text-center items-center shadow-lg bg-white group-hover:bg-red-500 group-hover:text-white dark:bg-zinc-900/50">
                            <i class="pe-7s-plane"></i>
                        </div>
                        <h4 class="font-medium dark:text-white">Easy to customize</h4>
                        <p class=" text-gray-400 dark:text-gray-300/60">Question Marks and devious Semikoli, but the Little Blind Text didn’t
                            listen. She packed her seven versalia.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->


        <!-- feature Start -->
        <section class="bg-gray-50 dark:bg-zinc-900/30" id="feature">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-7">
                    <div class="lg:col-span-5">
                        <div class="space-y-6">
                            <h3 class="text-2xl dark:text-white">A digital web design studio creating modern & engaging online experiences
                            </h3>
                            <p class="text-gray-400 dark:text-gray-300/60">Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large
                                language ocean. A small river named Duden flows by their place and supplies it with the
                                necessary regelialia.
                            </p>
                            <ul
                                class="text-gray-400 dark:text-gray-300/60 list-disc list-outside space-y-3 text-sm ml-5 marker:text-red-500 marker:text-lg">
                                <li>We put a lot of effort in design.</li>
                                <li>The most important ingredient of successful website.</li>
                                <li>Sed ut perspiciatis unde omnis iste natus error sit.</li>
                                <li>Submit Your Orgnization.</li>
                            </ul>
                        </div>

                        <!-- Button -->
                        <a href="" class="btn bg-red-500 text-white mt-14">Learn More
                            <i class="mdi mdi-arrow-right align-middle"></i>
                        </a>
                    </div>
                    <div class="lg:col-span-7">
                        <img src="assets2/images/online-world.svg" alt="online-world" class="w-[500px] lg:ml-auto md:mx-auto">
                    </div>
                </div>
            </div>
        </section>
        <!-- feature End -->


        <!-- Web Info Start -->
        <section class="py-28">
            <div class="overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover" src="assets2/images/img-1.jpg"
                    alt="build your website image">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900 to-purple-800 w-full h-full opacity-90"></div>
            </div>
            <div class="container">
                <div class="lg:flex justify-center">
                    <div class="lg:w-7/12 text-center relative">
                        <h2 class="text-white text-3xl">Build your dream website today</h2>
                        <p class="pt-3 text-gray-300/80">But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her.</p>

                        <!-- Button -->
                        <a  href="#pricing" class="btn bg-white text-black mt-8 mb-5">View Plan &amp; Pricing</a>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0">
                <img src="assets2/images/bg-pattern.png" alt="bg-pattern" class="block dark:hidden">
                <img src="assets2/images/bg-pattern-dark.png" alt="bg-pattern" class="hidden dark:block">
            </div>
        </section>
        <!-- Web Info End -->


        <!-- Pricing Start -->
        <section class="pt-12" id="pricing">
            <div class="container">
                <div class="flex justify-center">
                    <div class="lg:w-2/3 space-y-5 text-center">
                        <!-- Section Title -->
                        <h1 class="text-2xl text-gray-800 uppercase tracking-widest dark:text-white">Our Pricing</h1>
                        <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
                        <p class="text-gray-400 dark:text-gray-300/60">Call to action pricing table is really crucial to your for your business
                            website. Make your bids stand-out with amazing options.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-12">

                    <!-- Pricing Card Economy -->
                    <div class="card text-center transform transition ease-in-out duration-300 hover:-translate-y-4 mb-4 dark:bg-zinc-900/30 dark:border-zinc-700/50">
                        <div class="card-body">
                            <div class="space-y-2">
                                <h1 class="uppercase text-sm dark:text-white">Economy</h1>
                                <h1 class="text-4xl dark:text-white">$9.90</h1>
                                <h1 class="uppercase text-gray-400 dark:text-gray-300/60 text-xs">Billing Per Month</h1>
                            </div>

                            <hr class="my-7 dark:border-zinc-700/50">

                            <div class="space-y-5">
                                <p class="dark:text-gray-300/80">Bandwidth: <span class="text-red-500 font-medium">1GB</span></p>
                                <p class="dark:text-gray-300/80">Onlinespace: <span class="text-red-500 font-medium">50MB</span></p>
                                <p class="dark:text-gray-300/80">Support: <span class="text-red-500 font-medium">No</span></p>
                                <p class="dark:text-gray-300/80"><span class="text-red-500 font-medium">1</span> Domain</p>
                                <p class="dark:text-gray-300/80"><span class="text-red-500 font-medium">No</span> Hidden Fees</p>
                            </div>

                            <!-- Button -->
                            <a href="signup.html" class="btn bg-red-500 text-white mt-10">Join Now</a>
                        </div>
                    </div>

                    <!-- Pricing Card Deluxe (shadow-xl to Active Card) -->
                    <div class="card text-center transform transition ease-in-out duration-300 hover:-translate-y-4 shadow-xl mb-4 dark:bg-zinc-900/30 dark:border-zinc-700/50">
                        <div class="card-body">
                            <div class="space-y-2">
                                <h1 class="uppercase text-sm dark:text-white">Deluxe</h1>
                                <h1 class="text-4xl dark:text-white">$19.90</h1>
                                <h1 class="uppercase text-gray-400 dark:text-gray-300/60 text-xs">Billing Per Month</h1>
                            </div>

                            <hr class="my-7 dark:border-zinc-700/50">

                            <div class="space-y-5">
                                <p class="dark:text-gray-300/80">Bandwidth: <span class="text-red-500 font-medium">10GB</span></p>
                                <p class="dark:text-gray-300/80">Onlinespace: <span class="text-red-500 font-medium">500MB</span></p>
                                <p class="dark:text-gray-300/80">Support: <span class="text-red-500 font-medium">Yes</span></p>
                                <p class="dark:text-gray-300/80"><span class="text-red-500 font-medium">10</span> Domain</p>
                                <p class="dark:text-gray-300/80"><span class="text-red-500 font-medium">No</span> Hidden Fees</p>
                            </div>

                            <!-- Button -->
                            <a href="signup.html" class="btn bg-red-500 text-white mt-10">Join Now</a>
                        </div>
                    </div>

                    <!-- Pricing Card Ultimate -->
                    <div class="card text-center transform transition ease-in-out duration-300 hover:-translate-y-4 mb-4 dark:bg-zinc-900/30 dark:border-zinc-700/50">
                        <div class="card-body">
                            <div class="space-y-2">
                                <h1 class="uppercase text-sm dark:text-white">Ultimate</h1>
                                <h1 class="text-4xl dark:text-white">$29.90</h1>
                                <h1 class="uppercase text-gray-400 dark:text-gray-300/60 text-xs">Billing Per Month</h1>
                            </div>

                            <hr class="my-7 dark:border-zinc-700/50">

                            <div class="space-y-5">
                                <p class="dark:text-gray-300/80">Bandwidth: <span class="text-red-500 font-medium">1GB</span></p>
                                <p class="dark:text-gray-300/80">Onlinespace: <span class="text-red-500 font-medium">2GB</span></p>
                                <p class="dark:text-gray-300/80">Support: <span class="text-red-500 font-medium">Yes</span></p>
                                <p class="dark:text-gray-300/80"><span class="text-red-500 font-medium">Unlimited</span> Domain</p>
                                <p class="dark:text-gray-300/80"><span class="text-red-500 font-medium">No</span> Hidden Fees</p>
                            </div>

                            <!-- Button -->
                            <a href="signup.html" class="btn bg-red-500 text-white mt-10">Join Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Pricing End -->


        <!-- Behind the People Start -->
        <section class="pt-6" id="team">
            <div class="container">
                <div class="flex justify-center">
                    <div class="lg:w-2/3 space-y-5 text-center">
                        <!-- Section Title -->
                        <h1 class="text-2xl text-gray-800 uppercase tracking-widest dark:text-white">Behind the People</h1>
                        <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
                        <p class="text-gray-400 dark:text-gray-300/60">It is a long established fact that create category leading brand
                            experiences a reader will be distracted by the readable content of a page when looking at its
                            layout.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7 mt-12">
                    <!-- Team Member 1 -->
                    <div class="transform transition ease-in-out duration-300  hover:-translate-y-4">
                        <div class="text-center space-y-3">
                            <img alt="" src="assets2/images/team/img-1.jpg" class="rounded">
                            <div class="dark:text-white">
                                <a href="page-profile.html">Frank Johnson</a>
                            </div>
                            <div class="text-sm uppercase text-gray-400 dark:text-gray-300/60">CEO</div>
                            <div class="border-b dark:border-zinc-700/50"></div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="transform transition ease-in-out duration-300  hover:-translate-y-4">
                        <div class="text-center space-y-3">
                            <img alt="" src="assets2/images/team/img-2.jpg" class="rounded">
                            <div class="dark:text-white">
                                <a href="page-profile.html">Elaine Stclair</a>
                            </div>
                            <div class="text-sm uppercase text-gray-400 dark:text-gray-300/60">Designer</div>
                            <div class="border-b dark:border-zinc-700/50"></div>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="transform transition ease-in-out duration-300  hover:-translate-y-4">
                        <div class="text-center space-y-3">
                            <img alt="" src="assets2/images/team/img-3.jpg" class="rounded">
                            <div class="dark:text-white">
                                <a href="page-profile.html">Wanda Arthur</a>
                            </div>
                            <div class="text-sm uppercase text-gray-400 dark:text-gray-300/60">developer</div>
                            <div class="border-b dark:border-zinc-700/50"></div>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="transform transition ease-in-out duration-300  hover:-translate-y-4">
                        <div class="text-center space-y-3">
                            <img alt="" src="assets2/images/team/img-4.jpg" class="rounded">
                            <div class="dark:text-white">
                                <a href="page-profile.html">Joshua Stemple</a>
                            </div>
                            <div class="text-sm uppercase text-gray-400 dark:text-gray-300/60">manager</div>
                            <div class="border-b dark:border-zinc-700/50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Behind the People End -->


        <!-- Work Process Start -->
        <section class="bg-gray-50 dark:bg-zinc-900/30">
            <div class="container">
                <div class="flex justify-center">
                    <div class="lg:w-2/3 space-y-5 text-center">
                        <!-- Section Title -->
                        <h1 class="text-2xl text-gray-800 uppercase tracking-widest dark:text-white">Work Process</h1>
                        <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
                        <p class="text-gray-400 dark:text-gray-300/60">The Big Oxmox advised her not to do so, because there
                            were thousands of bad Commas, wild Question Marks and devious pulvinar metus molestie sed
                            Semikoli.
                        </p>
                    </div>
                </div>

                <!-- Work Process Icons -->
                <div class="lg:grid grid-cols-2 gap-5 mt-12 hidden">
                    <div class="relative">
                        <div
                            class="w-10 h-10 text-[36px] text-center items-center flex absolute text-white bg-red-500 rounded-full z-10 top-[80px] ltr:right-40 rtl:left-40 ltr:rotate-0 rtl:rotate-180">
                            <i class="pe-7s-angle-right mx-auto"></i>
                        </div>
                    </div>
                    <div class="relative">
                        <div
                            class="w-10 h-10 text-[36px] text-center items-center flex absolute text-white bg-red-500 rounded-full z-10 top-[80px] ltr:left-40 rtl:right-40 ltr:rotate-0 rtl:rotate-180">
                            <i class="pe-7s-angle-right mx-auto"></i>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 gap-5 mt-12">
                    <!-- Work Process Part 1 -->
                    <div class="relative ">
                        <div class="text-center space-y-2">
                            <i class="pe-7s-pen text-red-500 text-5xl"></i>
                            <h4 class="pt-3 text-lg font-medium dark:text-white">Tell us what you need</h4>
                            <p class="text-gray-400 dark:text-gray-300/60">The Big Oxmox advised her not to do so.</p>
                        </div>
                        <div class="before:content-[''] before:absolute before:hidden before:border before:border-dashed before:border-gray-300 before:w-2/3 ltr:before:-right-32 rtl:before:-left-32 before:top-[50px] before:lg:block before:dark:border-zinc-700/50"></div>
                    </div>

                    <!-- Work Process Part 2 -->
                    <div class="relative">
                        <div class="text-center space-y-2">
                            <i class="pe-7s-id text-red-500 text-5xl"></i>
                            <h4 class="pt-3 text-lg font-medium dark:text-white">Get free quotes</h4>
                            <p class="text-gray-400 dark:text-gray-300/60">Little Blind Text didn’t listen.</p>
                        </div>
                        <div class="before:content-[''] before:absolute before:hidden before:border before:border-dashed before:border-gray-300 before:w-2/3 ltr:before:-right-32 rtl:before:-left-32 before:top-[50px] before:lg:block before:dark:border-zinc-700/50"></div>
                    </div>

                    <!-- Work Process Part 3 -->
                    <div class="relative">
                        <div class="text-center space-y-2">
                            <i class="pe-7s-target text-red-500 text-5xl"></i>
                            <h4 class="pt-3 text-lg font-medium dark:text-white">Deliver high quality product</h4>
                            <p class="text-gray-400 dark:text-gray-300/60">When she reached the first hills.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mx-auto">
                    <!-- Button -->
                    <a href="signup.html" class="btn bg-red-500 text-white mt-12">Get Started <i class="mdi mdi-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!-- Work Process end -->


        <!-- testimonials Start -->
        <section id="testi">
            <div class="container">
                <div class="flex justify-center">
                    <div class="lg:w-2/3 space-y-5 text-center">
                        <!-- Section Title -->
                        <h1 class="text-2xl text-gray-800 uppercase tracking-widest dark:text-white">What they've said</h1>
                        <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
                        <p class="text-gray-400 dark:text-gray-300/60">The Big Oxmox advised her not to do so, because there
                            were thousands of bad Commas, wild Question Marks and devious pulvinar metus molestie sed
                            Semikoli.
                        </p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 gap-6 mt-10">
                    <!-- Clients 1 -->
                    <div class="transform transition ease-in-out duration-300 mt-20 lg:mt-10 hover:-translate-y-4">
                        <div class="card dark:bg-zinc-900/30 dark:border-zinc-700/50">
                            <img src="assets2/images/testimonials/user-1.jpg" alt="Testimonials user-1 Image" class="w-20 h-20 -m-10 mx-auto rounded-full p-1 border bg-white dark:bg-zinc-700/20 dark:border-zinc-700/80">
                            <div class="card-body mt-4">
                                <p class="text-gray-400 dark:text-gray-300/60 italic text-center">“I feel confident imposing change on myself.
                                    It's a
                                    lot more fun progressing than looking back. That's why scelerisque pretium dolor, sit
                                    amet vehicula erat pelleque
                                    need throw curve balls.”
                                </p>
                            </div>
                        </div>
                        <h5 class="text-center uppercase mt-5 dark:text-white">Ruben Reed - <span class="text-gray-400 dark:text-gray-300/60 capitalize">Charleston</span></h5>
                    </div>

                    <!-- Clients 2 -->
                    <div class="transform transition ease-in-out duration-300 mt-20 lg:mt-10 hover:-translate-y-4">
                        <div class="card dark:bg-zinc-900/30 dark:border-zinc-700/50">
                            <img src="assets2/images/testimonials/user-2.jpg" alt="Testimonials user-2 Image" class="w-20 h-20 -m-10 mx-auto rounded-full p-1 border bg-white dark:bg-zinc-700/20 dark:border-zinc-700/80">
                            <div class="card-body mt-4">
                                <p class="text-gray-400 dark:text-gray-300/60 italic text-center">“Our task must be to free ourselves by widening
                                    our circle of
                                    compassion to learned embrace living creatures Integer varius lacus non magna tempor
                                    congue natuasre the learned whole its
                                    beauty.”
                                </p>
                            </div>
                        </div>
                        <h5 class="text-center uppercase mt-5 dark:text-white">Michael P. Howlett - <span class="text-gray-400 dark:text-gray-300/60 capitalize">Worcester</span></h5>
                    </div>

                    <!-- Clients 3 -->
                    <div class="transform transition ease-in-out duration-300 mt-20 lg:mt-10 hover:-translate-y-4">
                        <div class="card dark:bg-zinc-900/30 dark:border-zinc-700/50">
                            <img src="assets2/images/testimonials/user-3.jpg" alt="Testimonials user-3 Image" class="w-20 h-20 -m-10 mx-auto rounded-full p-1 border bg-white dark:bg-zinc-700/20 dark:border-zinc-700/80">
                            <div class="card-body mt-4">
                                <p class="text-gray-400 dark:text-gray-300/60 italic text-center">“I've learned that people will forget what you
                                    said, people will
                                    forget what you did, but vestibulum learned people will never aliquam in nunc learned
                                    quis tincidunt forget how you vestibulum egestas them
                                    feel.”
                                </p>
                            </div>
                        </div>
                        <h5 class="text-center uppercase mt-5 dark:text-white">Theresa D. Sinclair - <span class="text-gray-400 dark:text-gray-300/60 capitalize">Lynchburg</span></h5>
                    </div>

                </div>
            </div>
        </section>
        <!-- testimonials End -->


        <!-- Web Info-2 Start -->
        <section class="py-28 ">
            <div class="overflow-hidden">
                <img class="absolute inset-0 h-full w-full object-cover" src="assets2/images/img-2.jpg"
                    alt="build your website image">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900 to-purple-800 w-full h-full opacity-90"></div>
            </div>
            <div class="container ">
                <div class="lg:flex justify-center">
                    <div class="lg:w-7/12 text-center relative">
                        <div class="space-y-6">
                            <h2 class="text-white text-3xl">Let's Get Started</h2>
                            <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
                            <p class="text-gray-300/80">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <a href="" class="btn bg-white text-black mb-5">Get Started <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0">
                <img src="assets2/images/bg-pattern-light.png" alt="bg-pattern-light" class="block dark:hidden">
                <img src="assets2/images/bg-pattern-dark2.png" alt="bg-pattern-light" class="hidden dark:block">
            </div>
        </section>
        <!-- Web Info-2 end -->


        <!-- Blog Start -->
        <section class="pt-12 bg-gray-50 dark:bg-zinc-900/30" id="blog">
            <div class="container">
                <div class="flex justify-center">
                    <div class="lg:w-2/3 space-y-5 text-center">
                        <h1 class="text-2xl text-gray-800 uppercase tracking-widest dark:text-white">Blog</h1>
                        <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
                        <p class="text-gray-400 dark:text-gray-300/60">Separated they live in Bookmarksgrove right at the
                            coast of the Semantics, a large language ocean class at a euismod mus ipsum vel ex finibus
                            semper
                            luctus quam.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-20">
                    <div>
                        <!-- Blog 1 -->
                        <div class="transition-all ease-in-out duration-300 hover:-translate-y-4">
                            <img src="assets2/images/blog/img-1.jpg" class="mb-4" alt="Blog img-1">

                            <h1 class="text-gray-400 dark:text-gray-300/60 text-sm">UI &amp; UX Design</h1>

                            <h1 class="mb-2">
                                <a href="page-blog-details.html" class="text-xl hover:text-red-500 dark:text-white">Doing a cross country road trip</a>
                            </h1>

                            <p class="text-gray-400 dark:text-gray-300/60 text-sm">We packed her seven versalia, put her initial into the belt and made herself on the way..</p>

                            <div class="mt-4">
                                <a href="page-blog-details.html" class="text-red-500">
                                    Read More <i class="mdi mdi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <!-- Blog 2 -->
                        <div class="transition-all ease-in-out duration-300  hover:-translate-y-4">
                            <img src="assets2/images/blog/img-2.jpg" class="mb-4" alt="Blog img-2">

                            <h1 class="text-gray-400 dark:text-gray-300/60 text-sm ">Digital Marketing</h1>

                            <h1 class="mb-2">
                                <a href="page-blog-details.html" class="text-xl hover:text-red-500 dark:text-white">New exhibition at our
                                    Museum</a>
                            </h1>

                            <p class="text-gray-400 dark:text-gray-300/60 text-sm ">Pityful a rethoric question ran over her cheek, then she continued her way...</p>

                            <div class="mt-4">
                                <a href="page-blog-details.html" class="text-red-500">
                                    Read More <i class="mdi mdi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <!-- Blog 3 -->
                        <div class="transition-all ease-in-out duration-300  hover:-translate-y-4">
                            <img src="assets2/images/blog/img-3.jpg" class="mb-4" alt="Blog img-3">

                            <h1 class="text-gray-400 dark:text-gray-300/60 text-sm">Travelling</h1>

                            <h1 class="mb-2">
                                <a href="page-blog-details.html" class="text-xl hover:text-red-500 dark:text-white">Why are so many people</a>
                            </h1>

                            <p class="text-gray-400 dark:text-gray-300/60 text-sm">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>

                            <div class="mt-4">
                                <a href="page-blog-details.html" class="text-red-500">
                                    Read More <i class="mdi mdi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->


        <!-- Contact Start -->
        <section id="contact">
            <div class="container">
                <div class="flex justify-center">
                    <div class="lg:w-2/3 space-y-5 text-center">
                        <!-- Section Title -->
                        <h1 class="text-2xl text-gray-800 uppercase tracking-widest dark:text-white">Get in touch</h1>
                        <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
                        <p class="text-gray-400 dark:text-gray-300/60">We thrive when coming up with innovative ideas but
                            also understand that a smart concept should be supported with faucibus sapien odio measurable
                            results.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-20">
                    <div>
                        <!-- office Address -->
                        <div class="md:flex md:flex-row lg:justify-start lg:flex-col lg:text-left md:justify-between">
                            <div class="mb-6">
                                <h1 class=" text-base font-medium mb-2 dark:text-white">Office Address 1:</h1>
                                <h1 class="text-gray-400 dark:text-gray-300/60 text-sm ">4461 Cedar Street Moro, AR 72368</h1>
                            </div>

                            <div class="mb-6">
                                <h1 class=" text-base font-medium mb-2 dark:text-white">Office Address 2:</h1>
                                <h1 class="text-gray-400 dark:text-gray-300/60 text-sm ">2467 Swick Hill Street <br>New Orleans, LA 70171</h1>
                            </div>

                            <div class="mb-6">
                                <h1 class=" text-base font-medium mb-2 dark:text-white">Office Address 3:</h1>
                                <h1 class="text-gray-400 dark:text-gray-300/60 text-sm ">9:00AM To 6:00PM</h1>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-2">
                        <!-- Contact Form -->
                        <form method="post" onsubmit="return validateForm()" name="myForm" id="myForm">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Name Input -->
                                    <input type="text" name="name" id="name" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" placeholder="Enter your name">

                                    <!-- Email ID Input -->
                                    <input type="email" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" id="email" name="email" placeholder="Enter your email">
                                </div>

                                <!-- Subject Input -->
                                <input type="text" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" name="subject" id="subject" placeholder="Enter your subject">

                                <!-- Maessage Textarea Input -->
                                <textarea class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" placeholder="Enter your message" name="comments" id="comments" rows="3"></textarea>

                                <!-- Form Submit Button -->
                                <div class="text-right">
                                    <input type="submit" id="submit" name="send" class="btn bg-red-500 text-white" value="Send Message">
                                </div>
                            </div>
                        </form>
                        <!--end form-->
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End -->


        <!-- Contact us Start -->
        <section class="bg-gray-100 py-6 dark:bg-zinc-800">
            <div class="container">
                <div class="grid lg:grid-cols-3 items-center gap-6">
                    <!-- Social Account Link -->
                    <div class="space-x-3">
                        <a href=""
                            class="border-2 border-gray-400 w-12 h-12 text-xl rounded-full inline-flex text-center items-center text-gray-400 dark:border-zinc-700/30 hover:text-red-500">
                            <i class="mdi mdi-facebook m-auto"></i>
                        </a>
                        <a href=""
                            class="border-2 border-gray-400 w-12 h-12 text-xl rounded-full inline-flex text-center items-center text-gray-400 dark:border-zinc-700/30 hover:text-red-500">
                            <i class="mdi mdi-twitter m-auto"></i>
                        </a>
                        <a href=""
                            class="border-2 border-gray-400 w-12 h-12 text-xl rounded-full inline-flex text-center items-center text-gray-400 dark:border-zinc-700/30 hover:text-red-500">
                            <i class="mdi mdi-linkedin m-auto"></i>
                        </a>
                        <a href=""
                            class="border-2 border-gray-400 w-12 h-12 text-xl rounded-full inline-flex text-center items-center text-gray-400 dark:border-zinc-700/30 hover:text-red-500">
                            <i class="mdi mdi-google-plus m-auto"></i>
                        </a>
                    </div>

                    <!-- Contect Number -->
                    <div class="lg:text-center">
                        <h1 class="text-lg dark:text-gray-300/80">
                            <a href="tel:+1123XXXXX0"><i class="pe-7s-call text-black align-middle text-[22px] ltr:mr-2 rtl:ml-2 dark:text-white"></i>+1 123 456 7890</a>
                        </h1>
                    </div>

                    <!-- Contect Mail -->
                    <div class="ltr:lg:text-right rtl:lg:text-left">
                        <h1 class="text-lg dark:text-gray-300/80">
                            <a href="mailto:abc@example.com"><i class="pe-7s-mail-open text-black align-middle text-[22px] ltr:mr-2 rtl:ml-2 dark:text-white"></i>abc@example.com</a>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact us Start -->


        <!-- Footer Start -->
        <section class="bg-gray-900 dark:bg-zinc-900/40">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                    <div class="lg:col-span-3">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div class="col-span-2">
                                <!-- Logo -->
                                <h1 class="text-lg uppercase text-white font-medium mb-6">Dorsin</h1>

                                <p class="text-gray-400 dark:text-gray-300/60">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                            </div>

                            <div>
                                <div class="text-lg text-white font-medium mb-6">Information</div>
                                <!-- Footer Link -->
                                <ul class="space-y-2 text-sm">
                                    <li><a href="index.html" class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">Home</a></li>
                                    <li><a href="page-about.html" class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">About us</a></li>
                                    <li><a href="page-contact.html" class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">Contact us</a></li>
                                </ul>
                            </div>

                            <div>
                                <div class="text-lg text-white font-medium mb-6">Community</div>
                                <!-- Footer Link -->
                                <ul class="space-y-2 text-sm">
                                    <li><a href="page-faq.html" class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">FAQ</a></li>
                                    <li><a href="login.html" class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">Login</a></li>
                                    <li><a href="signup.html" class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="text-lg text-white mb-6">Subscribe</div>
                        <div class="text-gray-400 dark:text-gray-300/60 text-sm mb-5">In an ideal world this text wouldn’t exist, a client would
                            acknowledge the importance of having web copy before the design starts.
                        </div>

                        <div class="flex bg-gray-800 rounded-lg items-center dark:bg-zinc-700/30">
                            <!-- Subscribe form -->
                            <input type="email" class="border-0 focus:border-0 focus:ring-0 text-gray-50 bg-transparent w-full dark:placeholder:text-gray-300/50 placeholder:text-sm" placeholder="Email" />
                            <button type="submit" class="text-xl text-gray-400 dark:text-gray-300/60 px-3">
                                <i class="pe-7s-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-gray-800 dark:bg-zinc-900/60 py-5">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-3 items-center gap-6">
                    <div class="col-span-2">
                        <div class="text-sm text-gray-400 dark:text-gray-300/60">
                            <script>document.write(new Date().getFullYear()) </script>&copy; Dorsin - <a href="">Themesbrand</a>
                        </div>
                    </div>

                    <div class="ltr:lg:ml-auto rtl:lg:mr-auto">
                        <img src="assets2/images/payment.png" alt="payment-img" class="h-9">
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Start -->


        <div class="fixed ltr:left-0 rtl:right-0 top-80 flex flex-col gap-3 z-40">
            <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="ltr-rtl" class="px-3 py-3 z-40 text-14 transition-all duration-300 ease-linear text-white bg-blue-600 hover:bg-blue-700 ltr:rounded-r rtl:rounded-l font-medium">
                <span class="ltr:hidden text-sm">LTR</span>
                <span  class="rtl:hidden text-sm">RTL</span>
            </a>

              <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="mode" class="px-3 py-3 z-40 text-14 font-normal transition-all duration-300 ease-linear text-white bg-zinc-800 dark:bg-white ltr:rounded-r rtl:rounded-l">
                <i class="mdi mdi-white-balance-sunny text-xl dark:text-zinc-800 hidden dark:block"></i>
                <i class="mdi mdi-moon-waning-crescent text-xl dark:text-zinc-800 block dark:hidden "></i>
            </a>
        </div>

        <!-- Smooth-Scroll Javascript -->
        <script src="assets2/js/smooth-scroll.polyfills.min.js"></script>

        <script src="assets2/js/gumshoe.polyfills.min.js"></script>

        <!-- Modal Javascript -->
        <script src="assets2/js/modal.js"></script>

        <!-- Custom Javascript -->
        <script src="assets2/js/app.js"></script>

    </body>

</html>
