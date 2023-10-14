<section class="pb-5">
    <div class="container pb-5">
        <h1 class="text-center">Our services</h1>
        <div class="row">
            <?php foreach ($data['home_service'] as $key => $value) { ?>
                <div class="col-md-4 my-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-transparent border-0 pb-0">
                            <i class="fas <?= $value['icon'] ?> fa-3x p-2 pri-bg rounded text-white"></i>
                        </div>
                        <div class="card-body">
                            <h5><?= $value['title'] ?></h5>
                            <p class="card-text"><?= $value['short_desc'] ?></p>
                            <a href="<?= ROOT ?>service/<?= $key ?>" class="exploreBtn"><b>Explore more <i class="fas fa-arrow-right"></i></b></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="sign-up-trigger">
    <div class="container text-center py-5 text-white">
        <h3>Bulk SMS Offer</h3>
        <p>Send SMS easily and anywhere at an offer rate of Ksh. <?= APPINFO['smsPrice'] ?></p>
        <a href="<?= ROOT ?>register" class="btn btn-custom"><i class="fas fa-pencil"></i> Sign Up</a>
    </div>
</section>

<section class="section bg-light">
    <div class="container py-5">
        <div class="row justify-content-around align-items-center">
            <h1 class="text-center">Why Choose Us</h1>
            <div class="col-lg-6 col-xl-5 my-3">
                <div class="d-flex pb-5">
                    <div class="bg-white rounded p-3">
                        <i class="fa-2x fas fa-headphones"></i>
                    </div>
                    <div class="col ps-3">
                        <h5 class="mb-2">24/7 Support</h5>
                        <p class="m-0">In case of any queries or feedback you can talk to us any time of day, via email of online chat.</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="bg-white rounded p-3">
                        <i class="fa-2x fas fa-arrow-down"></i>
                    </div>
                    <div class="col ps-3">
                        <h5 class="mb-2">Lowest Pricing</h5>
                        <p class="m-0">Our products are priced way below the competition. With our Bulk SMS service starting at only <?= APPINFO['smsPrice'] ?> KES</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 my-3">
                <div class="d-flex pb-5">
                    <div class="bg-white rounded p-3">
                        <i class="fa-2x fas fa-code"></i>
                    </div>
                    <div class="col ps-3">
                        <h5 class="mb-2">Seamless Integration</h5>
                        <p class="m-0">We have made it easy for developers to integrate their applications with our products' API </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="bg-white rounded p-3">
                        <i class="fa-2x fas fa-undo"></i>
                    </div>
                    <div class="col ps-3">
                        <h5 class="mb-2">Reliability</h5>
                        <p class="m-0">With an up time of more than 99.9%, in addition to robust back up implementation, we offer reiable services 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>