<?php
define('DIR', '');
require_once DIR . 'config.php';
$control = new Controller();  
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="typing.css">
    <script src="./Chat.js"></script>
	<?php $control->getCSS(DIR); 
    $link_to_instagram = "https://www.instagram.com/reva__university/";
    $link_to_twitter = "https://twitter.com/REVAuniversity";
    $link_to_facebook ="https://www.facebook.com/REVAUniversity/";
    $link_to_web="https://www.reva.edu.in/";
    ?>
<style>
h1   {color: pink;}
p    {color: red;}
</style>
</head>

<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <img src="1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="chicago.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="ny.jpg" alt="New York">
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->

<body>
    <!--<div class="loading-part">
        <div class="loader-home">Loading...</div>
    </div> -->

    <div id="wrapper">
        <div class="lines-overlay"></div>
        <div id="main">
            <ul class="social-icons">
                <li>
                    <a href='<?php echo $link_to_twitter; ?>' target='_blank'>
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href='<?php echo $link_to_facebook; ?>' target='_blank'>
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href='<?php echo $link_to_instagram; ?>' target='_blank'>
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href='<?php echo $link_to_web; ?>' target='_blank'>
                        <i class="fa fa-globe"></i>
                    </a>
                </li>
            </ul>
            <header id="header">
                <h1>Welcome to Project managment system</h1>
                <nav style="width: fit-content;margin: auto;">
                	<?php $control->sessionMessage(); ?>
                </nav>
                <nav>
                    <ul>
                        <li>
                            <a href="#"class="messages icon-popup icon "><img src="admin_png.png" /></a> 
                            <p class="name">Admin</p>
                        </li>
                        <li>
                            <a href="#" class="about icon-popup icon "><img src="admin_png.png" /></a>
                            <p class="name">Faculty</p>
                        </li>
                        <li>
                            <a href="#" class="photos icon-popup icon "><img src="admin_png.png" /></a>
                            <p class="name">Student</p>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>
    <div class="global-content">
        <div class="slider-nav">
            <a href="#" class="prev-button">
                <i class="fa fa-hand-o-left"></i>
            </a>
            <a href="#" class="close-content">
                <i class="icon ion-close-round"></i>
            </a>
            <a href="#" class="next-button">
                <i class="fa fa-hand-o-right"></i>
            </a>
        </div>
        <section class="content-message slide first">
            <div class="content-in ">
                <div class="content-table">
                    <div class="content-cell">
                        <div class="content-inner">
                            <div class="container">
                                <h1>Admin Login</h1>
                                <span class="border"></span>
                                <div id="countdown_dashboard"></div>
                                <form action="admin_login_validation.php" id="notifyMee" method="POST" class="news-form col-lg-4 col-lg-offset-4">
                                    <div class="form-group">
                                        <div class="controls form-group">
                                            <input type="text"  name="name" required="" placeholder="Write your name"   class="form-control ">
                                            <br>
                                            <input type="password"  name="password" required="" placeholder="Write your password"   class="form-control ">
                                            <br>
                                            <button type="submit" name="admin" class="btn btn-lg btn-block btn-danger submit">Login</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="block-message">
                                    <div class="message">
                                        <p class="notify-valid"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-about slide">
            <div class="content-in ">
                <div class="content-table">
                    <div class="content-cell">
                        <div class="content-inner">
                            <h1>Faculty Login</h1>
                            <span class="border"></span>
                            <div class="row contact-info"></div>
                            <form action="faculty_login_validation.php" id="notifyMee" method="POST" class="news-form col-lg-4 col-lg-offset-4">
                                <div class="form-group">
                                    <div class="controls form-group">
                                        <input type="text"  name="name" required="" placeholder="Write your name"   class="form-control ">
                                        <br>
                                        <input type="password"  name="password" required="" placeholder="Write your password"   class="form-control ">
                                        <br>
                                        <a href="forgot.php">forget password?</a>
                                        <br>
                                        <br>
                                        <button type="submit" name="faculty" class="btn btn-lg btn-block btn-danger submit">Login</button>
                                    </div>
                                </div>
                            </form>
                            <div id="answer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-photos slide last">
            <div class="content-in ">
                <div class="content-table">
                    <div class="content-cell">
                        <div class="content-inner">
                            <div class="container">
                                <h1>Student Login</h1>
                                <span class="border"></span>
                                <div class="photo-collection row"></div>
                                <form action="student_login_validation.php" id="notifyMee" method="POST" class="news-form col-lg-4 col-lg-offset-4">
                                    <div class="form-group">
                                        <div class="controls form-group">
                                            <input type="text"  name="name" required="" placeholder="Write your name"   class="form-control ">
                                            <br>
                                            <input type="password"  name="password" required="" placeholder="Write your password"   class="form-control ">
                                            <br>
                                            <button type="submit" name="student" class="btn btn-lg btn-block btn-danger submit">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer id="footer" style="color:blue">
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/640b3d714247f20fefe52466/1gr5ug1pi';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </footer>
    <?php $control->getJS(DIR); ?>
</body>
</html>