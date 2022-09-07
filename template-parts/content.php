<div class="container">
    <div class="row">
        <carousel></carousel>
    </div>
</div>

<section id="jumbo" class="jumbo">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-lg-5 order-2 order-lg-1">
                <h2>Lorem ipsum dolor Sit ament </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    <strong>cillum dolore eu</strong> fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="/tocontact" class="btn" title="contact">
                    <span><img src="assets/images/icon-envelope.svg"
                            alt="contact"></span>Contact
                </a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="./assets/images/webp/jumbo-phone.webp" class="img-fluid" alt="phone">
            </div>
        </div>
    </div>
</section>

<section class="stats">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5 mb-5">
                <h2>Ailleron Group by the numbers</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="stats__item">
                    <div class="stats__item__counter"><span>></span><counter :end="5">
                    </counter>mln</div>
                    <p class="div__item__desc">verification sessions<br>by 2021</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="stats__item stats__item--border">
                    <div class="stats__item__counter"><counter :end="200">
                    </counter><span>+</span></div>
                    <p class="div__item__desc">countries for<br>ID verification</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="stats__item stats__item--border">
                    <div class="stats__item__counter"><span><</span><counter :end="90">
                    </counter>sec</div>
                    <p class="div__item__desc">eID complete<br>verification</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="stats__item stats__item--border">
                    <div class="stats__item__counter">
                        <counter :end="10">
                        </counter><span>+</span></div>
                    <p class="div__item__desc">banking<br>clients</p>
                </div>
            </div>
        </div>
    </div>
</section>