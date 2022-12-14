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

    <section class="text-gray-400 bg-slate-900 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <h2 class="sm:text-3xl text-2xl text-white font-medium title-font mb-2 md:w-2/5">About Federal Institute of Technical Skills</h2>
            <div class="md:w-3/5 md:pl-6">
                <p class="leading-relaxed text-base">FITS is best known and recognized for its forward looking approach to higher education coupled with imparting and ensuring quality education to the potential students at a very cost effective rate, which is an integral requirement of the employers these days.</p><br/>
                <p class="leading-relaxed text-lg mb-4">Equipped with the extremely rich resources and facilities, with an outstanding student community, faculty and support staff; strong partnerships / linkages with business, industry, government and Nonprofit organizations; and support from alumni and community, FITS is designing a future of global dominance and leadership in providing skilled manpower to all leading firms/construction companies/other organizations.</p>
            </div>
        </div>
    </section>

    <!-- director message -->

    <section class="text-gray-400 bg-slate-900 body-font">
    <h1 class="sm:text-3xl text-2xl text-white font-medium title-font mb-2 text-center">Director's Message</h1>
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-800 text-gray-600">
                            <img src="./assets/director-pic.jpeg" class="rounded-full" alt="">
                        </div>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium title-font mt-4 text-white text-lg">Malik Hamid Awan</h2>
                            <div class="w-12 h-1 bg-red-500 rounded mt-2 mb-4"></div>
                            <p class="text-base text-gray-400">Director, FITS</p>
                        </div>
                    </div>
                    <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-800 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <p class="leading-relaxed text-lg mb-4">We are commited to make a better Pakistan. Come and join us in this journey.</p>
                        <!-- <p class="leading-relaxed text-lg mb-4">Equipped with the extremely rich resources and facilities, with an outstanding student community, faculty and support staff; strong partnerships / linkages with business, industry, government and Nonprofit organizations; and support from alumni and community, FITS is designing a future of global dominance and leadership in providing skilled manpower to all leading firms/construction companies/other organizations.</p> -->
                        <a href="./contact.php" class="text-red-400 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php
    include("./myComponents/footer.php");
    ?>
</body>

</html>