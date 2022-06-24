<?php
   include('connect.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mail= $_POST['mail'];
        $checkbox1 = $_POST['checkbox1'];
        $checkbox2 = $_POST['checkbox2'];

        $sql = "insert into EG_refont_blog (name, mail, checkbox1, checkbox2)
                 values('$name' , '$mail', '$checkbox1', '$checkbox2')";

                 
        $result = mysqli_query($conn,$sql);
        if($result){
            echo"record saved";
            // header('location:blog2.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
<!--============================== Menu for all pages=========================================== -->
    <div class="menu_bottom">
        <li><a href="index.html">Home</a></li>
        <li><a href="business-energy.html">Business & Energy School</a></li>
        <li><a href="energy-space.html">Energy Space</a></li>
        <li><a href="blog.html">Blog</a></li>
    </div>
    <div class="menu_bar">
        <div class="logo">
            <a href="index.html">
                <img src="assets/logo.png" alt="eg_logo" class="logo_img">
            </a>
        </div>
        <div class="menu_items">
            <div class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="business-energy.html">Business & Energy School</a></li>
                <li><a href="energy-space.html">Energy Space</a></li>
                <li><a href="blog.html">Blog</a></li>
            </div>
            <li class="lang">
                <span>
                    <a href="#">
                        <img src="assets/FRA.png" alt="french img" class="langfr">
                    </a>
                </span>
            </li>
            <li class="lang">
                <span>
                    <a href="#">
                        <img src="assets/GBR.png" alt="eng img" class="langen">
                    </a>
                </span>
            </li>
        </div>
    </div>
<!--======================================header for blog page===================================-->
            <header>
                <div class="left">
                    <a href="#Posts">All Posts</a>
                    <a href="#Scolaire">Formation Scolaire</a>
                    <a href="#Formation">Formation</a>
                </div>
                <div class="right">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <button><a href="#">sign in / sign up</a></button>
                </div>
            </header>
<!--======================================Articles for blog page===================================-->
        <section class="articles" id="Posts">
            <div class="left">
                <img src="/Users/imacg1/Desktop/EG_refont/eg_website_refont/assets/blogimg3.png ">
            </div>
            <div class="right">
                <div class="head">
                    <div class="logo">
                        <img src="/Users/imacg1/Desktop/EG_refont/eg_website_refont/assets/photo2.png " alt="">
                    </div>
                    <div class="desc_logo">
                        <span>Odjouman Allagbe</span><br>
                        <span>18 mars 2020</span>
                        <span> 3 Min de lecture</span>
                    </div>
                </div>
                <div class="description">
                    <h1>Coup de projecteur sur le <br> parcours entrepreneuriat de <br> la Formation Solaire à Energy <br> Generation</h1>
                    <p class="desc_right">Parce que le solaire représente une véritable <br> opportunité de création d'emplois pour les jeunes,<br> tout en participant au développement...</p>
                </div>
                <div class="foot">
                    <div class="left_foot">
                        <div class="vues">222 vues</div>
                        <div class="commentaires">0 commentaire</div>
                    </div>
                    <div class="right_foot">
                        <div class="love"><i class="fa-regular fa-heart"></i></div>
                        <div class="nombre_love">40</div>
                    </div>
                </div>
            </div>
        </section><br><br>

        <section class="articles">
            <div class="left">
                <img src="/Users/imacg1/Desktop/EG_refont/eg_website_refont/assets/blogimg2.png  ">
            </div>
            <div class="right">
                <div class="head">
                    <div class="logo">
                        <img src="/Users/imacg1/Desktop/EG_refont/eg_website_refont/assets/photo2.png " alt="">
                    </div>
                    <div class="desc_logo">
                        <span>Odjouman Allagbe</span><br>
                        <span>18 mars 2020</span>
                        <span> 3 Min de lecture</span>
                    </div>
                </div>
                <div class="description">
                    <h1>Coup de projecteur sur le <br> parcours entrepreneuriat de <br> la Formation Solaire à Energy <br> Generation</h1>
                    <p class="desc_right">Parce que le solaire représente une véritable <br> opportunité de création d'emplois pour les jeunes,<br> tout en participant au développement...</p>
                </div>
                <div class="foot">
                    <div class="left_foot">
                        <div class="vues">222 vues</div>
                        <div class="commentaires">0 commentaire</div>
                    </div>
                    <div class="right_foot">
                        <div class="love"><i class="fa-regular fa-heart"></i></div>
                        <div class="nombre_love">40</div>
                    </div>
                </div>
            </div>
        </section><br><br>

        <section class="articles">
            <div class="left">
                <img src="/Users/imacg1/Desktop/EG_refont/eg_website_refont/assets/blogimg3.png ">
            </div>
            <div class="right">
                <div class="head">
                    <div class="logo">
                        <img src="/Users/imacg1/Desktop/EG_refont/eg_website_refont/assets/photo2.png " alt="">
                    </div>
                    <div class="desc_logo">
                        <span>Odjouman Allagbe</span><br>
                        <span>18 mars 2020</span>
                        <span> 3 Min de lecture</span>
                    </div>
                </div>
                <div class="description">
                    <h1>Coup de projecteur sur le <br> parcours entrepreneuriat de <br> la Formation Solaire à Energy <br> Generation</h1>
                    <p class="desc_right">Parce que le solaire représente une véritable <br> opportunité de création d'emplois pour les jeunes,<br> tout en participant au développement...</p>
                </div>
                <div class="foot">
                    <div class="left_foot">
                        <div class="vues">222 vues</div>
                        <div class="commentaires">0 commentaire</div>
                    </div>
                    <div class="right_foot">
                        <div class="love"><i class="fa-regular fa-heart"></i></div>
                        <div class="nombre_love">40</div>
                    </div>
                </div>
            </div>
        </section>
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
                <form action="blog_db.php" method="post" class="newsletter_form" >
                    <input type="text" placeholder="First name" name="name">
                    <input type="text" placeholder="Email" name="mail">
                    <fieldset>
                        <label>
                            <input type="checkbox" name="checkbox1">
                            <span>Je préfère recevoir les informations en français</span>
                        </label> 
                        <br>
                        <label>
                            <input type="checkbox" name="checkbox2">
                            <span>I wish to receive the content in English</span>
                        </label>
                    </fieldset>
                    <input type="submit" class="subscribe_btn" value="Subscribe" name="submit">
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
    </div>
</body>
</html>