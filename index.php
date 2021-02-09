<?php
require 'validator.php'
//require 'sendEmail.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wraper">
        <div class="container">
            <header>
                <nav>
                    <div class="header-nav">
                        <div class="header-nav__logo">
                            <img src="img/icons/header/Logo.png" alt="">
                            <img src="img/icons/header/pineapple.png" alt="">
                        </div>
                        <ul class="header-nav-items">
                            <li class="header-nav-items__links">
                                <a href="#" class="link">About</a>
                            </li>
                            <li class="header-nav-items__links">
                                <a href="#" class="link">How it works</a>
                            </li>
                            <li class="header-nav-items__links">
                                <a href="#" class="link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="content">
                <div class="content-bg">
                    <section class="content-form" >
                        <div class="content-form__validation" id="validation">
                            <h2 class="content__title">Subscribe to newsletter</h2>
                            <p class="content__text">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>  
                            <form id="form" method="POST">
                                <div class="form-email"  onmouseout=changeColorInputArrow() onmouseover=changeColorInputArrowHover()>
                                    <input class="input _req _email" type="email" id="email" name="email"  placeholder="Type your email address here…">
        
                                    <button type="submit" id="submit" class="btn" ><img id="inputArrow" src="img/icons/page-content/ic arrow.svg" alt="" ></button>
                                </div>
                                <div id="massageError">
                                <?php
                                echo $msg;
                                ?>
                                </div>
                                <div class="checkbox"  >
                                    <input id="check1" class="_req" type="checkbox" name="agree" value="on" >
                                    <label for="check1" ><span>I agree to <a href="#" class="link">terms of service</a></span> </label>
                                </div>           
                            </form>
                            
                        </div>
                        <div class="content-form__success">
                            <div class="content-form__success_logo">
                                <img src="img/icons/page-success/Union.svg" alt="">
                            </div>
                            <h2 class="content-form__success_title">Thanks for subscribing!</h2>
                            <p class="content-form__success_text">You have successfully subscribed to our email listing. Check your email for the discount code.</p>
                        </div>
                    </section>
            

                    
                    <footer>
                        <div class="social-media">
                            <div class="social-media-link">
                                <div class="social-media-link__facebook" onmouseout=changeColorFacebook() onmouseover=changeColorFacebookHover()>
                                    <a href="#"><img id="facebook" src="img/icons/footer/ic facebook.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="social-media-link">
                                <div class="social-media-link__instagram" onmouseout=changeColorInstagram() onmouseover=changeColorInstagramHover() >
                                    <a href="#"><img id="instagram" src="img/icons/footer/ic instagram.svg"  alt=""></a>
                                </div>
                            </div>
                            <div class="social-media-link">
                                <div class="social-media-link__twitter" onmouseout=changeColorTwitter() onmouseover=changeColorTwitterHover()>
                                    <a href="#"><img id="twitter" src="img/icons/footer/ic twitter.svg"  alt=""></a>
                                </div>
                            </div>
                            <div class="social-media-link">
                                <div class="social-media-link__youtube" onmouseout=changeColorYoutube() onmouseover=changeColorYoutubeHover()>
                                    <a href="#"><img id="youtube" src="img/icons/footer/ic youtube.svg"  alt=""></a>
                                </div>
                            </div>
                            <a href="" class="icon"></a>
                            
                        </div>
                    </footer>
                </div>
                
            </div>
        </div>
        <div class="image">
            <img src="img/BG.png" alt="">
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="js/Effects.js"></script>
    <script src="js/validation.js"></script>
</body>

</html>