<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Google translate div -->
<div class="google_trans">
        <div id="google_translate_element"></div>
    </div>
    <!-- Google translate div -->
    <!-- Menu for all pages -->
    <div class="menu_bar_bottom">
        <li><a href="index.html" style="color: crimson;">
                <img src="assets/house.svg" class="icon_ng"><span>Home</span></a></li>
        <li><a href="business-energy.html">
                <img src="assets/school.svg" class="icon_ng"><span>Business & Energy School</span></a></li>
        <li><a href="energy-space.html">
                <img src="assets/rocket.svg" class="icon_ng"><span>Energy Space</span></a></li>
        <li><a href="blog.html">
                <img src="assets/blog.svg" class="icon_ng"><span>Blog</span></a></li>
    </div>
    <div class="menu_bar" style="position: fixed;">
        <div class="logo">
            <a href="index.html">
                <img src="./assets/logo.png" alt="eg_logo" class="logo_img">
            </a>
        </div>
        <div class="menu_items">
            <div class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="business-energy.html">Business & Energy School</a></li>
                <li><a href="energy-space.html">Energy Space</a></li>
                <li><a href="blog.html">Blog</a></li>
            </div>
        </div>
    </div>


    <div class="container">
        <section class="articles">
            <div class="left">
                <img src="assets/blogimg3.png ">
            </div>
            <div class="right">
                <div class="head">
                    <div class="logo">LOGO
                        <img src="photo 2.png" alt="">
                    </div>
                    <div class="desc_logo">description</div>
                    <div class="icon"></div>
                </div>
                <h1>Titre</h1>
                <p class="desc_right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quidem repudiandae voluptate minima officiis perspiciatis fugiat maxime animi rerum, eum non ea!</p>
                <div class="foot">
                    <div class="left_foot">
                        <div class="vues">vues</div>
                        <div class="commentaires">commentaires</div>
                    </div>
                    <div class="right_foot">
                        <div class="nombre_love">nombre de love</div>
                        <div class="love">love</div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- Start Footer section page -->
    <div class="footer_section">
        <div class="believers">
            <div class="believer_title">
                They believe in us !
            </div>
            <div class="believer_el">
                <div class="img1">
                    <img src="assets/believer1.png">
                </div>
                <div class="img2">
                    <img src="assets/believer2.png">
                </div>
                <div class="img3">
                    <img src="assets/believer3.png">
                </div>
                <div class="img4">
                    <img src="assets/believer4.png">
                </div>
                <div class="img5">
                    <img src="assets/believer5.png">
                </div>
                <div class="img6">
                    <img src="assets/believer6.png">
                </div>
                <div class="img7">
                    <img src="assets/believer7.png">
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="newsletter">
                <div class="newsletter_gtitle">Newsletter</div>
                <div class="newsletter_ltitle">Get our latest info, podcasts, advices...</div>
                <form action="#" class="newsletter_form">
                    <input type="text" placeholder="First name">
                    <input type="text" placeholder="Email">
                    <fieldset>
                        <label>
                            <input type="checkbox">
                            <span>Je préfère recevoir les informations en français</span>
                        </label>
                        <br>
                        <label>
                            <input type="checkbox">
                            <span>I wish to receive the content in English</span>
                        </label>
                    </fieldset>
                    <input type="button" class="subscribe_btn" value="Subscribe">
                </form>
            </div>
            <div class="social_links_section">
                <div class="logo_immg">
                    <img src="assets/logo.png">
                </div>
                <div class="socials_link">
                    <a href="#">
                        <img src="assets/facebook.svg">
                    </a>
                    <a href="#">
                        <img src="assets/twitter.svg">
                    </a>
                    <a href="#">
                        <img src="assets/linkedin.svg">
                    </a>
                    <a href="#">
                        <img src="assets/youtube.svg">
                    </a>
                </div>
            </div>
            <div class="all_links">
                <div class="all_link_title">
                    Links
                </div>
                <ul class="site_links">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="index.html">Programs</a></li>
                    <li><a href="index.html">Energy Space</a></li>
                    <li><a href="index.html">Blog</a></li>
                </ul>
            </div>
            <div class="copyright">
                © 2022 - Energy Generation - All rights reserved.
            </div>
        </div>
    </div>
    <!-- End Footer section page -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
</body>
</html>