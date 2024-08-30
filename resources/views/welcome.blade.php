<!DOCTYPE html>
<html lang="zxx" dir="lrt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Travello - Multipurpose travel and tour booking.These template is suitable for  travel agency , tour, travel website , tour operator , tourism , booking  trip or adventure website. ">
    <meta name="keywords" content="travel, trip booking,tour, hotel, tour guide, tourism, blog, flight, travel agency, tourism agency, accommodation, tour website">
    <meta name="author" content="inittheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Multipurpose travel and tour booking">
    <meta property="og:site_name" content="Travello">
    <meta property="og:url" content="https://inittheme.com">
    <meta property="og:image" content="https://inittheme.com/images/selfie.jpg">
    <meta property="og:description" content="Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:title" content="Multipurpose travel and tour booking">
    <meta name="twitter:description" content="Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:image" content="https://twitter.com/inittheme/photo">
    <!DOCTYPE html>
    <html lang="zxx" dir="lrt">
    <head>
        <script>
            const setTheme = (theme) => {
                theme ??= localStorage.theme || "light";
                document.documentElement.dataset.theme = theme;
                localStorage.theme = theme;
            };
            setTheme();
        </script>
        <meta logo="assets/images/logo/logo.png">
        <meta white-logo="assets/images/logo/logo-white.png">
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Travello - Multipurpose travel and tour booking.These template is suitable for  travel agency , tour, travel website , tour operator , tourism , booking  trip or adventure website. ">
        <meta name="keywords" content="travel, trip booking,tour, hotel, tour guide, tourism, blog, flight, travel agency, tourism agency, accommodation, tour website">
        <meta name="author" content="inittheme">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Multipurpose travel and tour booking">
        <meta property="og:site_name" content="Travello">
        <meta property="og:url" content="https://inittheme.com">
        <meta property="og:image" content="https://inittheme.com/images/selfie.jpg">
        <meta property="og:description" content="Multipurpose travel and tour booking, multipurpose template">
        <meta name="twitter:title" content="Multipurpose travel and tour booking">
        <meta name="twitter:description" content="Multipurpose travel and tour booking, multipurpose template">
        <meta name="twitter:image" content="https://twitter.com/inittheme/photo">
        <meta name="twitter:card" content="summary">
        <!-- Google site verification -->
        <meta name="google-site-verification" content="...">
        <meta name="facebook-domain-verification" content="...">
        <meta name="csrf-token" content="...">
        <meta name="currency" content="$">
        <!-- Title -->
        <title>Multipurpose travel and tour booking </title>
        <link rel="icon" type="image/x-icon" sizes="20x20" href="assets/images/icon/favicon.png">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-5.3.0.min.css">
        <!-- Fonts & icon -->
        <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">
        <!-- Plugin -->
        <link rel="stylesheet" type="text/css" href="assets/css/plugin.css">
        <!-- Main CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/main-style.css">
        <!-- RTL CSS::When Need RTL Uncomments File -->
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/rtl.css"> -->
    </head>
    <body>
        <header>
            <div class="header-area">
                

        <!-- Contact area S t a r t -->
        <form method="post" action="{{ route('messages.store') }}" class="contact-form">
    @csrf <!-- هذا مهم لحماية الفورم من الهجمات -->
    <div class="row g-4">
        <div class="col-sm-6">
            <input class="custom-form" type="text" name="name" placeholder="Enter your name" required>
        </div>
        <div class="col-sm-6">
            <input class="custom-form" type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="col-sm-6">
            <input class="custom-form" type="text" name="phone" placeholder="Your Phone" required>
        </div>
        <div class="col-sm-6">
            <input class="custom-form" type="text" name="subject" placeholder="Select subject" required>
        </div>
        <div class="col-sm-12">
            <textarea class="custom-form-textarea" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Enter your message..." required></textarea>
        </div>
    </div>
    <div class="mt-40">
        <button type="submit" class="send-btn">Send Message</button>
    </div>
</form>

        

    <!-- Scroll Up  -->
    
    <!-- Add an search-overlay element -->
    <div class="search-overlay"></div>
    <!-- jquery-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/main.js"></script>
</body>
</html>
