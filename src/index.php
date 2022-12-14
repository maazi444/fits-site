<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Federal Institute of Technical Skills</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/12583d8ffd.js" crossorigin="anonymous"></script>
</head>

<body class="font-sans bg-slate-900">
    <!-- header -->
    <?php
    include("./myComponents/header.php");
    ?>
    <!-- hero section -->
    <section id="hero" class="container mx-auto mt-4">
        <div class="bg-white bg-opacity-0 flex items-center justify-around rounded-md flex-wrap-reverse">
            <!-- left section -->
            <div class="flex flex-col items-center md:items-start">
                <h1 class="text-4xl  text-gray-200 font-bold font-sans w-97 mx-auto md:text-7xl md:mx-0">Join Us to Chase Your <span class="font-bold text-redPink">Dreams</span></h1>
                <p class="text-gray-400 mt-3 text-md mx-auto md:mx-0 md:xl">Learn Industry standard skills from the professional and expert instructors</p>
                <div id="action-btns" class="mt-5">
                    <a href="./courses.php" class="text-white p-2 inline-block rounded-md bg-red-500 hover:bg-red-400">View Courses <i class="fas fa-chevron-right"></i></a>
                    <a href="./contact.php" class="text-white inline-block p-2 px-5 bg-white bg-opacity-20 rounded-md ml-4 hover:bg-opacity-30">Contact Us</a>
                </div>
            </div>
            <!-- right section -->
            <div class="w-97">
                <img src="./assets/chase-dreams.png" alt="" class="opacity-100">
            </div>
        </div>
    </section>
    <!-- popular courses section -->
    <section id="courses" class="container border border-gray-600 rounded-md p-4 mx-auto mt-10">
        <!-- courses section header -->
        <div class="flex items-center justify-between">
            <h1 class="text-2xl text-gray-100">Popular Courses</h1>
            <a href="courses.php" class="bg-white text-gray-200 bg-opacity-20 rounded-full p-2 px-4 block hover:bg-opacity-25">View More Courses <i class="fas fa-chevron-right"></i></a>
        </div>
        <!-- courses cards -->
        <div class="flex justify-evenly items-start m-4  flex-wrap">
            <div class="bg-gray-800 bg-opacity-60 rounded-md w-80 p-2 my-4">
                <img src="./assets/mobile-rep.png" alt="mobile repairing course" class="w-60 mx-auto p-2">
                <div class="p-2 border-t-2 border-gray-500">
                    <h1 class="text-xl text-white">Mobile Hardware & Software</h1>
                    <p class="text-gray-300 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi soluta amet neque voluptates magni quo blanditiis?</p>
                </div>
            </div>
            <div class="bg-gray-800 bg-opacity-60 rounded-md w-80 p-2 my-4">
                <img src="./assets/nebosh-white.webp" alt="NEBOSH course" class="h-60 mx-auto p-2">
                <div class="p-2 border-t-2 border-gray-500">
                    <h1 class="text-xl text-white">NEBOSH Safety Course</h1>
                    <p class="text-gray-300 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi soluta amet neque voluptates magni quo blanditiis?</p>
                </div>
            </div>
            <div class="bg-gray-800 bg-opacity-60 rounded-md w-80 p-2 my-4">
                <img src="./assets/web-development.png" alt="Web design & development course" class="w-60 mx-auto p-2">
                <div class="p-2 border-t-2 border-gray-500">
                    <h1 class="text-xl text-white">Web Design & Development</h1>
                    <p class="text-gray-300 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi soluta amet neque voluptates magni quo blanditiis?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Us -->
    <section class="text-gray-400 bg-slate-900 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-red-400 tracking-widest font-medium title-font mb-1">GET A UNIQUE EXPERIENCE</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-white">Why Choose Us?</h1>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-red-500 text-white flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                            <h2 class="text-white text-lg title-font font-medium">Learn from Experts</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Learn from the experts that are working for years in their relative field.</p>
                            <a href="#" class="mt-3 text-red-400 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-red-500 text-white flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <h2 class="text-white text-lg title-font font-medium">Learn Practically</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Build your skills by total practical work and learn the skill in a unique way.</p>
                            <a href="#" class="mt-3 text-red-400 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-red-500 text-white flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <circle cx="6" cy="6" r="3"></circle>
                                    <circle cx="6" cy="18" r="3"></circle>
                                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                </svg>
                            </div>
                            <h2 class="text-white text-lg title-font font-medium">Less money, more profit</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Learn worthy skills such as mobile repairing and web development in much less money.</p>
                            <a href="#" class="mt-3 text-red-400 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials -->
    <section id="testimonials" class="container mx-auto mt-10">
        <p class="text-blue-600 text-xl text-center">TESTIMONIALS</p>
        <h1 class="text-4xl font-medium text-gray-200 text-center mt-5">What Our Students Say</h1>
        <div class="container mx-auto flex items-center justify-around flex-row flex-wrap mt-10">
            <!-- testimonial card -->
            <div class="w-80 border border-gray-500 rounded-md p-4 flex flex-col items-center m-3">
                <img src="./assets/student1-image.jpg" class="rounded-full w-40 mx-auto" alt="Zohair Abbas Review">
                <cite class="text-white text-center mt-5">&ldquo;I learned Graphic Designing from this institute and today, I am working as a freelancer in the field of graphic designing. I would recommend this institute to everone.&ldquo;</cite>
                <div class="flex items-center mx-auto mt-4 gap-2">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-white text-xl mt-3">Zohair Abbas</p>
                <p class="text-sm text-blue-600">Graphic Design</p>
            </div>

            <!-- testimonial card -->
            <div class="w-80 border border-gray-500 rounded-md p-4 flex flex-col items-center m-3">
                <img src="./assets/t-pic2.jpeg" class="rounded-full w-40 mx-auto" alt="Mohsin Review">
                <cite class="text-white text-center mt-5">&ldquo;Got certificate from this institute and today I am running my own successful bussiness. Kind staff and student friendly environment. Recommended institute.&ldquo;</cite>
                <div class="flex items-center mx-auto mt-4 gap-2">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-white text-xl mt-3">Mohsin</p>
                <p class="text-sm text-blue-600">Mobile Hardware & Software</p>
            </div>

            <!-- testimonial card -->
            <div class="w-80 border border-gray-500 rounded-md p-4 flex flex-col items-center m-3">
                <img src="./assets/t-pic3.jpeg" class="rounded-full w-40 mx-auto" alt="Zohair Abbas Review">
                <cite class="text-white text-center mt-5">&ldquo;I would 100% recommend this institute. This institute gives much attention on student theoratical and physical learning.&ldquo;</cite>
                <div class="flex items-center mx-auto mt-4 gap-2">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-white text-xl mt-3">Aliyan Ali</p>
                <p class="text-sm text-blue-600">Laptop Hardware & Software</p>
            </div>
        </div>
    </section>
    <!-- CEO words -->
    <section class="text-gray-400 bg-slate-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-500 mb-8" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                </svg>
                <p class="leading-relaxed text-lg">We are commited to make a better Pakistan. Come and join us in this journey.</p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                <h2 class="text-white font-medium title-font tracking-wider text-sm">Malik Hamid Awan</h2>
                <p class="text-gray-500">Founder, FITS</p>
            </div>
        </div>
    </section>
    <!-- call to action -->
    <section class="text-gray-400 body-font">
        <div class="container bg-gray-800 bg-opacity-60 rounded-md my-4 px-5 py-24 mx-auto">
            <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-white">Got any question? Visit us or contact us now</h1>
                <a href="./contact.php" class="flex-shrink-0 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-400 rounded text-lg mt-10 sm:mt-0">Contact Us</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- footer -->
    <?php
    include("./myComponents/footer.php");
    ?>
</body>

</html>