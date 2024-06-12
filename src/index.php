<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <link href="assets/css/output.css" rel="stylesheet">
    <link rel="icon" href="assets/img/logop.jpg">
    <title>Pastebin</title>
</head>

<body class="font-Poppins">
    <!-- Header -->
    <header>
        <nav class="fixed top-0 bg-white w-full flex justify-center items-center gap-x-96 py-1 z-20 shadow-xl">
            <!-- <div class="py-1"><img src="assets/img/logo-bookmark.svg" alt="" /></div> -->
            <h1 class="flex items-center font-bold text-2xl text-blue-950">
                <img src="assets/img/logopng.png" alt="Logo" class="w-16 h-16">Pastebin
            </h1>

            <div></div>
            <ul class="flex justify-end items-center gap-12 text-bookmark-blue uppercase text-xs">
                <li class="cursor-pointer"><a href="#feature">Features</a></li>
                <li class="cursor-pointer"><a href="#user">Users</a></li>
                <li class="cursor-pointer"><a href="#contact">Contact</a></li>
                <?php if (isset($_SESSION['id_user'])) echo '<li class="cursor-pointer"><a href="my_paste.php">My Paste</a></li>'; else echo ''; ?>
                <?php if (isset($_SESSION['id_user']))
                    echo '<div class="w-1/4 me-10 flex">
                    <div class="absolute mt-2 pl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                            <path fill="white" fill-opacity="0.25" d="M3 11c0-3.771 0-5.657 1.172-6.828C5.343 3 7.229 3 11 3h2c3.771 0 5.657 0 6.828 1.172C21 5.343 21 7.229 21 11v2c0 3.771 0 5.657-1.172 6.828C18.657 21 16.771 21 13 21h-2c-3.771 0-5.657 0-6.828-1.172C3 18.657 3 16.771 3 13z" />
                            <circle cx="12" cy="10" r="4" fill="white" />
                            <path fill="white" fill-rule="evenodd" d="M18.946 20.253a.232.232 0 0 1-.14.25C17.605 21 15.836 21 13 21h-2c-2.835 0-4.605 0-5.806-.498a.232.232 0 0 1-.14-.249C5.483 17.292 8.429 15 12 15c3.571 0 6.517 2.292 6.946 5.253" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <a href="controllers/logout_process.php" class="text-sm font-medium text-white bg-red-500 px-6 py-4 rounded-lg"><span class="text-red-500">___</span>Logout</a>
                </div>';
                else
                    echo '<div class="w-1/4 me-10 flex">
                    <div class="absolute mt-2 pl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                            <path fill="white" fill-opacity="0.25" d="M3 11c0-3.771 0-5.657 1.172-6.828C5.343 3 7.229 3 11 3h2c3.771 0 5.657 0 6.828 1.172C21 5.343 21 7.229 21 11v2c0 3.771 0 5.657-1.172 6.828C18.657 21 16.771 21 13 21h-2c-3.771 0-5.657 0-6.828-1.172C3 18.657 3 16.771 3 13z" />
                            <circle cx="12" cy="10" r="4" fill="white" />
                            <path fill="white" fill-rule="evenodd" d="M18.946 20.253a.232.232 0 0 1-.14.25C17.605 21 15.836 21 13 21h-2c-2.835 0-4.605 0-5.806-.498a.232.232 0 0 1-.14-.249C5.483 17.292 8.429 15 12 15c3.571 0 6.517 2.292 6.946 5.253" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <a href="login.php" class="text-sm font-medium text-white bg-red-500 px-6 py-4 rounded-lg"><span class="text-red-500">___</span>Login</a>
                </div>'; ?>
            </ul>
            <div class="flex sm:hidden flex-1 justify-end">
                <i class="text-2xl fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!-- Hero -->
    <section class="relative">
        <div class="container flex flex-row items-center gap-12 mt-48">
            <!-- Content -->
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <h2 class="text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
                    Where to Store and Share Texts Easily
                </h2>
                <p class="text-bookmark-grey text-lg text-center lg:text-left mb-6">
                    Pastebin is the fastest and easiest way to store and share text online, so you can access them anytime and anywhere
                </p>
                <div class="flex justify-center flex-wrap gap-6">
                    <a href="#create-paste" class="btn btn-purple hover:bg-bookmark-white hover:text-black">
                        Let's Get Started
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10">
                <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="assets/img/hero-bg.png" alt="" />
            </div>
        </div>
        <!-- Rounded Rectangle -->
        <div class="
          hidden
          md:block
          overflow-hidden
          bg-sky-700
          rounded-l-full
          absolute
          h-80
          w-2/4
          top-32
          right-0
          lg:
          -bottom-28
        "></div>
    </section>

    <!-- Features -->
    <section id="feature" class="bg-bookmark-white py-20 mt-20 lg:mt-60">
        <!-- Heading -->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-bookmark-blue">Features</h1>
            <p class="text-center text-bookmark-grey mt-4">
                Pastebin offers a fast and simple way to store and share text online. With guaranteed privacy, ease of use, and quick sharing capabilities.
            </p>

        </div>
        <!-- Feature #1 -->
        <div class="relative mt-20 lg:mt-24">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
                <!-- Image -->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="assets/img/illustration-features-tab-1.png" alt="" />
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Privacy Guaranteed</h1>
                    <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        All pastes you make will remain private. Your data is secure and will not be shared with third parties. Only you have access to the pastes you create. Your privacy is our priority.
                    </p>
                    <!-- <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">More Info</button> -->
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="
            hidden
            lg:block
            overflow-hidden
            bg-sky-700
            rounded-r-full
            absolute
            h-80
            w-2/4
            -bottom-24
            -left-36
          "></div>
        </div>
        <!-- Feature #2 -->
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col lg:flex-row-reverse items-center justify-center gap-x-24">
                <!-- Image -->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="assets/img/illustration-features-tab-2.png" alt="" />
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Easy to Use</h1>
                    <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        No registration is required to start using our services. This means you can immediately access and utilize our features without any delays. We value your time and strive to provide a hassle-free experience. Our platform is designed to be user-friendly and intuitive, ensuring you can get started right away.
                    </p>
                    <!-- <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">More Info</button> -->
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="
            hidden
            lg:block
            overflow-hidden
            bg-sky-700
            rounded-l-full
            absolute
            h-80
            w-2/4
            -bottom-24
            -right-0
          "></div>
        </div>
        <!-- Feature #3 -->
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
                <!-- Image -->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="assets/img/illustration-features-tab-3.png" alt="" />
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Share quickly</h1>
                    <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        Share your text quickly using generated links. This allows for easy and efficient sharing with colleagues, friends, or clients. Our system ensures that your content is accessible instantly without any complicated steps. Whether you're collaborating on a project or simply sharing information, our generated links make the process smooth and fast.
                    </p>
                    <!-- <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">More Info</button> -->
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="
            hidden
            lg:block
            overflow-hidden
            bg-sky-700
            rounded-r-full
            absolute
            h-80
            w-2/4
            -bottom-24
            -left-36
          "></div>
        </div>
    </section>

    <section id="create-paste" class="py-20 mt-20">
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-bookmark-blue">Paste Here!</h1>
            <p class="text-center text-bookmark-grey mt-4">
                You can easily share your text or code snippets by pasting them below. Fill in the title and content, then click "Paste!" to save and share your text.
            </p>
        </div>
        <form class="flex flex-col my-8 shadow-lg p-6 bg-bookmark-white rounded-3xl" action="controllers/create_paste_process.php" enctype="application/x-www-form-urlencoded" method="post">
            <input type="text" name="id_user" id="id_user" hidden value="<?php if (isset($_SESSION['id_user'])) echo $_SESSION['id_user'];
                                                                            else echo ''; ?>">

            <label for="title" class="mb-2 text-lg font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" required class="mb-4 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:outline-none">

            <label for="content" class="mb-2 text-lg font-medium text-gray-700">Content</label>
            <textarea required placeholder="Enter your paste content!" name="content" id="content" cols="30" rows="10" class="mb-4 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:outline-none"></textarea>

            <label for="public_url" class="mb-2 text-lg font-medium text-gray-700">Public Url</label>
            <input type="text" name="public_url" id="public_url" placeholder="Public Url" class="mb-4 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:outline-none">

            <input type="submit" value="Paste!" class="mt-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 cursor-pointer transition-all">
        </form>

    </section>

    <section id="user" class="py-20 mt-14">
        <!-- Heading -->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-bookmark-blue">Our Users</h1>
            <p class="text-center text-bookmark-grey mt-4">
                Our users include developers, students, and professionals who rely on Pastebin Anda for quick and secure text sharing. Their positive feedback highlights our commitment to privacy, ease of use, and efficiency.
            </p>
        </div>
        <!-- Cards -->
        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 max-w-screen-lg mt-16">
            <!-- Card 1 -->
            <div class="flex flex-col rounded-md shadow-md lg:mb-16">
                <div class="p-6 flex flex-col items-center">
                    <img src="assets/img/rafid.jpg" alt="" class="rounded-full w-40" />
                    <h3 class="mt-5 mb-2 text-bookmark-blue text-lg">Budi Setiawantwotree</h3>
                    <p class="mb-2 text-bookmark-grey font-light">Developer</p>
                </div>
                <hr class="border-b border-bookmark-white" />
                <div class="flex p-6">
                    <p class="flex-1 btn btn-purple hover:bg-bookmark-white hover:text-black">
                        "Pastebin Anda is incredibly useful for sharing code with my team!"
                    </p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="flex flex-col rounded-md shadow-md lg:my-8">
                <div class="p-6 flex flex-col items-center">
                    <img src="assets/img/sana.jpg" alt="" class="rounded-full w-40" />
                    <h3 class="mt-5 mb-2 text-bookmark-blue text-lg">Hanah Deulset</h3>
                    <p class="mb-2 text-bookmark-grey font-light">Student</p>
                </div>
                <hr class="border-b border-bookmark-white" />
                <div class="flex p-6">
                    <p class="flex-1 btn btn-purple hover:bg-bookmark-white hover:text-black">
                        "It's very easy to use and privacy is guaranteed."
                    </p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="flex flex-col rounded-md shadow-md lg:mt-16">
                <div class="p-6 flex flex-col items-center">
                    <img src="assets/img/swafoto.jpeg" alt="" class="rounded-full w-40" />
                    <h3 class="mt-5 mb-2 text-bookmark-blue text-lg">Abdi Tehayana</h3>
                    <p class="mb-2 text-bookmark-grey font-light">Freelancer</p>
                </div>
                <hr class="border-b border-bookmark-white" />
                <div class="flex p-6">
                    <p class="flex-1 btn btn-purple hover:bg-bookmark-white hover:text-black">
                        "A must-have tool for anyone who needs to quickly share text."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer section start -->
    <footer id="contact" class="bg-bookmark-white pt-16 pb-12">
        <div class="container">
            <!-- <div class="justify-center flex flex-wrap pb-20">
                <ul class="flex justify-end items-center gap-12 text-bookmark-blue uppercase text-xs">
                    <li class="cursor-pointer">Features</li>
                    <li class="cursor-pointer">Users</li>
                    <li class="cursor-pointer">Contact</li>
                  </ul>        
            </div> -->
            <div class="flex flex-wrap">
                <div class="w-1/2 pl-10 px-4 mb-12 text-slate-300 font-medium">
                    <h2 class="font-bold text-4xl text-black mb-5">Contact with Us</h2>
                    <p class="text-black">email: pastebin.support@gmail.com</p>
                    <p class="text-black">phone: +62 81558921481</p>
                </div>
                <form action="mailto:rafidharyu313@gmail.com" method="get">
                    <div class="w-full mb-12">
                        <div class="w-full mb-4 pl-20">
                            <label for="pesan" class="font-bold text-2xl text-black">Have any issues?</label>
                            <textarea type="text" id="pesan" class="w-full bg-slate-200 text-dark p-3 mt-4 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
                        </div>
                        <div class="w-full pl-20">
                            <button type="submit" class="bg-white text-base font-semibold text-black py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Submit</button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- Youtube -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white ">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                    <!-- Instagram -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white ">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                        </svg>
                    </a>
                    <!-- Tiktok -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white ">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>TikTok</title>
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                        </svg>
                    </a>
                    <!-- Github -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white ">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>GitHub</title>
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                    </a>
                    <!-- Linkedin -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white ">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div>
                <p class="font-medium text-slate-500 text-center text-xs">© 2024 Kelompok6 Inc.All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer section end -->
</body>

</html>