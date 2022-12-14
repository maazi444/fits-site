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

    <section class="text-gray-400 bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-900 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <!-- <iframe width="100%" height="100%" title="map" class="absolute inset-0" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.5);"></iframe> -->
                <iframe width="100%" height="100%" title="map" class="absolute inset-0" frameborder="0" marginheight="0" marginwidth="0" scrolling="no"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d830.4061227454322!2d73.07774927853787!3d33.64097721650963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc123c2664904ec6c!2sFedral%20institute%20of%20mobile%20%26%20technical%20skills!5e0!3m2!1sen!2s!4v1660738677773!5m2!1sen!2s" width="600" height="450" style="filter: grayscale(1) contrast(1.2) opacity(0.5);" loading="lazy"></iframe>
                <div class="bg-gray-900 relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-white tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">Office No. 253, 2nd Floor, Umair Shopping Center, 6th Road Rawalpindi, Pakistan</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-white tracking-widest text-xs">EMAIL</h2>
                        <a class="text-red-400 leading-relaxed">federalinstitute@gmail.com</a>
                        <h2 class="title-font font-semibold text-white tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">+92 333 3555572</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-white text-lg mb-1 font-medium title-font">Contact</h2>
                <p class="leading-relaxed mb-5">We are here to help you 7 days a week and respond within 24 hours.</p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
                    <textarea id="message" name="message" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Send Now</button>
                <p class="text-xs text-gray-400 text-opacity-90 mt-3">By doing this, you agree to our <a href="./termsofservice.php" class="text-white">terms of service</a> and <a href="privacy-policy.php" class="text-white">privacy policy</a>.</p>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php
    include("./myComponents/footer.php");
    ?>
</body>

</html>