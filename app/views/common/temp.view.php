<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?= strtoupper(APPINFO['appName']) ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="<?= ROOT ?>public/assets/images/favicon.ico" type="image/x-icon">
    <link rel='stylesheet' type='text/css' media='screen' href='<?= ROOT ?>public/assets/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?= ROOT ?>public/assets/css/app.css'>
    <link rel="stylesheet" href="<?= ROOT ?>public/assets/fa/css/all.min.css">
    <style>
        .hero-section {
            position: relative;
            <?php if ($name == "Home") : ?>min-height: 95vh;
            <?php endif; ?>
        }

        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo ".pw-" . $i . "{ width: " . $i . "%!important; }";
            echo ".ph-" . $i . "{ height: " . $i . "%!important; }";
            echo ".piw-" . $i . "{ width: " . $i . "px!important; }";
            echo ".pih-" . $i . "{ height: " . $i . "px!important; }";
        }
        ?>
    </style>
    <script src='<?= ROOT ?>public/assets/js/jquery.min.js'></script>
</head>

<body>

    <section class="hero-section">
        <!-- Nav bar -->
        <nav class="navbar navbar-expand-lg bg-transparent w-100" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="<?= ROOT ?>">
                    <img src="<?= ROOT ?>public/assets/images/logo.png" style="max-width: 100px; max-height: 100px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>"><strong>Home</strong></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <strong>Our Solutions</strong>
                            </a>
                            <ul class="dropdown-menu shadow">
                                <?php foreach (SERVICES as $key => $value) { ?>
                                    <li><a class="dropdown-item" href="<?= ROOT ?>service/<?= $key ?>"><?= ucwords($value['title']) ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <strong>Developers</strong>
                            </a>
                            <ul class="dropdown-menu shadow">
                                <li><a class="dropdown-item" href="<?= ROOT ?>developer/bulk_sms">Bulk SMS API</a></li>
                                <li><a class="dropdown-item" href="<?= ROOT ?>developer/ussd">USSD API</a></li>
                                <li><a class="dropdown-item" href="<?= ROOT ?>developer/short_code">Short Codes API</a></li>
                                <li><a class="dropdown-item" href="<?= ROOT ?>developer/airtime">Airtime API</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>pricing"><strong>Pricing</strong></a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>contact"><strong>Contact Us</strong></a></li>
                        <li class="nav-item"><a class="nav-link btn btn-custom text-white px-4" href="https://sms.hencangroup.co.ke/auth/login"><strong class="text-white"><i class="fas fa-sign-in"></i> Login</strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="determiner"></div>

        <?php if ($name == "Home") { ?>
            <div class="container py-5 home-desc text-white">
                <div class="row">
                    <div class="col-md-8">
                        <h1>HENCAN BULK SMS</h1>
                        <p>
                            We are in frontline in BUILDING RELATIONSHIPS WITH YOUR CUSTOMERS Delivering 10 Billion+ SMS every month and helping businesses in expanding and promoting their business through SMS.
                        </p>
                        <p>
                            We are the cheapest provider of Bulk SMS in Kenya with a flat rate of 0.8 KES per unit across All Networks . Get up to 20 credits FREE for test SMS on Sign Up
                        </p>
                        <p>
                            <a href="<?= ROOT ?>register" class="btn btn-custom">Get started</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- waves -->
            <svg class="waves border-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,208C384,235,480,245,576,240C672,235,768,213,864,181.3C960,149,1056,107,1152,90.7C1248,75,1344,85,1392,90.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        <?php } else { ?>
            <div class="container py-5 text-white">
                <h2><?= $name ?></h2>
            </div>
        <?php } ?>
    </section>

    <section class="content">
        <?php if ($name == "Home") { ?>
            <?php require $fileName; ?>
        <?php } else { ?>
            <div class="container py-5">
                <?php require $fileName; ?>
            </div>
        <?php } ?>
    </section>

    <section class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent px-0 border-0">
                            <img src="<?= ROOT ?>public/assets/images/logo.png" style="max-width: 200px; max-height: 200px;">
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0 text-white">
                            We are focused at providing simple and the fastest bulk sms delivery services. We are located in Westlands - Nairobi.
                            We are acredited by Communications authority of Kenya.
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent px-0 border-0 text-white border-bottom">
                            <h3>Our Partners</h3>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0">
                            <a href="https://advantasms.com/">Advanta Africa</a>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0">
                            <a href="https://www.hencangroup.co.ke/">Hencan Group Enterprises</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent px-0 border-0 text-white border-bottom">
                            <h3>Contact Us</h3>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0">
                            <a href=""><i class="fas fa-phone"></i> +254796594366</a>
                        </li>
                        <li class="list-group-item bg-transparent px-0 border-0">
                            <a href=""><i class="fas fa-envelope"></i> info@hencanbulksms.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 text-center pt-4">
                    <a href="">&copy Hencan Bulk SMS <?= date('Y') ?> | All rights reserved | Powered by: ICT Team</a>
                </div>
            </div>
        </div>
    </section>

    <script src='<?= ROOT ?>public/assets/js/bootstrap.js'></script>
    <script src='<?= ROOT ?>public/assets/js/ajax.js'></script>
    <script src='<?= ROOT ?>public/assets/js/app.js'></script>
    <script src="<?= ROOT ?>public/assets/js/sweetalert.js"></script>
</body>

</html>