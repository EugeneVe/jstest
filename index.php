<?php require 'connections/connections.php'; ?>
<?php
    if(isset($_POST['register'])) {
        session_start();
        $FName = $_POST['FirstName'];
        $LName = $_POST['LastName'];
        $Email = $_POST['Email'];
        $PW = $_POST['Password'];

        $sql = $con->query("INSERT INTO user (fname, lname, email, pass,) 
                            VALUES ({'$FName', '$LName', '$Email', '$PW'})");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>JavaScript test site!!!</title>
    <link rel="stylesheet" type="text/css" href="test.css" />
    <link rel="stylesheet" type="text/css" href="reset.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="loginform/loginstyle.css" />
    <link rel="stylesheet" type="text/css" href="slidepannel.css" />
    <link rel="stylesheet" type="text/css" href="gallery/glisse.css" />
    <link rel="stylesheet" type="text/css" href="gallery_btn.css"/>
</head>
<body>
<!--script with path of js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="loginform/jquery.leanModal.min.js"></script>
<script defer src="loginform/loginform.js"></script>
<script defer src="gallery/glisse.js"></script>
<script async src="js/tabs.js"></script>
<script async src="test.js"></script>
<script async src="js/disqus.js"></script>
<script async src="//clickukr.disqus.com/count.js" id="dsq-count-scr"></script>
<script async src="js/scrolltop.js"></script>
<div class="blockForm">
    <div class="textfoms">
    <form action="" method="post" name="registerForm" id="registerForm">
        <h3>Create account</h3><br>
        <input name="firstname" id="FirstName" type="text" class="textform" placeholder="First Name" size="32" maxlength="32" required><br>
        <input name="lastname" id="LastName" type="text" class="textform" placeholder="Last Name" size="32" maxlength="32" required><br>
        <input name="email" id="Email" type="email" class="textform" placeholder="Email" size="32" maxlength="32" required><br>
        <input name="password" id="Password" type="password" class="textform" placeholder="password" size="32" maxlength="32" required>
        <label><input type="checkbox" id="pscheckbox" name="pscheckbox" value="pscheckbox"><span></span></label></br>
        <div class="reg">
            <input name="register" type="submit" class="input" id="register" value="Register">
        </div>
        <div class="exitbtn">
            <input name="exit" id="exit" type="submit" class="input" value="Exit">
        </div>
    </form>
    </div>
</div>
<div class="desc"></div>
<div class="img-center"></div>
<div id="wrap">
    <div id="header" class="middle">
        <INPUT id="desc_open" type="button" class="btn-info" value="Sign in" onclick="btn1()">
        <div id="login">
            <script src="http://ulogin.ru/js/ulogin.js"></script>
            <div id="uLogin" data-ulogin="display=panel;fields=first_name,last_name;providers=facebook,vkontakte,google;hidden=twitter,odnoklassniki;redirect_uri=http%3A%2F%2Fwww.click.s-host.net/welcome"></div>
        </div>
            <div class="logo"><a href="http://click.s-host.net"><img src="/img/logo.png"></a></div>
            <h2>Welcome to Click JS test!!!</h2>
    </div>
        </div>
    <div class="tabs_box">
        <!--Начало навбара, все остальное внутри него-->
        <ul class="tabs_menu">
            <li><a href="#tab1" class="active">Main</a></li>
            <li><a href="#tab2">Comments</a></li>
            <li><a href="#tab3">Parser</a></li>
        </ul>
            <div class="tab" id="tab1">
            <div class="wrap1">
                <div id="left_menu">
                    <INPUT type="button" class="btn-info" value="Push it 1" onclick="pushit1()"><br>
                    <INPUT type="button" class="btn-info" value="Push it 2" onclick="pushit2()"><br>
                    <INPUT type="button" class="btn-info" value="Push it 3" onclick="pushit3()"><br>
                    <INPUT type="button" class="btn-info" value="Push it 4" onclick="pushit4()"><br>
                    <INPUT type="button" class="btn-info" value="Push it 5" onclick="pushit5()"><br>
                    <INPUT type="button" class="btn-info" value="Push it 6" onclick="pushit6()"><br>
                    <INPUT type="button" class="btn-info" value="Test button" onclick="pushit7()"><br>
                    <INPUT type="button" class="btn-info" value="Empty" onclick="pushit8()">
            </div>
                <div class="showRm"><INPUT type="button" class="btn-info" value="showMeRm""></div>
                <div id="right_menu">
                    <div id="btpushright">
                        <INPUT type="button" class="btn-info" value="test8" onclick="pushit()"><br><br>
                        <div class="menuList">
                            <ul>
                                <li class="rmli">
                                    <a href="http://www.pendrivelinux.com/multiboot-create-a-multiboot-usb-from-linux/">MultiSysManual</a>
                                </li>
                                <li class="rmli">
                                    <a href="http://i2.wp.com/itc.ua/wp-content/uploads/2016/08/Mjc5MTA3NQ.jpeg">MultiSysDownload</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="roundBtnHide"><INPUT type="button" class="rbh" value="X"></div>
                </div>
                <div id="content">
                    <div class="textbarTop">

                        <div id="links">

                            <!--login form start-->
                            <div class="container">
<!--                                <h1>Popup Login & Signup with jQuery</h1>-->
<!--                                <a id="modal_trigger" href="#modal" class="btnlogin">Click here to Login or register</a>-->

                                <div id="modal" class="popupContainer" style="display:none;">
                                    <header class="popupHeader">
                                        <span class="header_title">Login</span>
                                        <span class="modal_close"><i class="fa fa-times"></i></span>
                                    </header>

                                    <section class="popupBody">
                                        <!-- Social Login -->
                                        <div class="social_login">
                                            <div class="">
                                                <a href="#" class="social_box fb">
                                                    <span class="icon"><i class="fa fa-facebook"></i></span>
                                                    <span class="icon_title">Connect with Facebook</span>
                                                </a>
                                                <a href="#" class="social_box google">
                                                    <span class="icon"><i class="fa fa-google-plus"></i></span>
                                                    <span class="icon_title">Connect with Google</span>
                                                </a>
                                            </div>

                                            <div class="centeredText">
                                                <span>Or use your Email address</span>
                                            </div>

                                            <div class="action_btns">
                                                <div class="one_half"><a href="#" id="login_form" class="btnlogin">Login</a></div>
                                                <div class="one_half last"><a href="#" id="register_form" class="btnlogin">Sign up</a></div>
                                            </div>
                                        </div>

                                        <!-- Username & Password Login form -->
                                        <div class="user_login">
                                            <form>
                                                <label>Email / Username</label>
                                                <input type="text" />
                                                <br />

                                                <label>Password</label>
                                                <input type="password" />
                                                <br />

                                                <div class="checkbox">
                                                    <input id="remember" type="checkbox" />
                                                    <label for="remember">Remember me on this computer</label>
                                                </div>

                                                <div class="action_btns">
                                                    <div class="one_half"><a href="#" class="btnlogin back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                                    <div class="one_half last"><a href="#" class="btnlogin btn_red">Login</a></div>
                                                </div>
                                            </form>

                                            <a href="#" class="forgot_password">Forgot password?</a>
                                        </div>

                                        <!-- Register Form -->
                                        <div class="user_register">
                                            <form>
                                                <label>Full Name</label>
                                                <input type="text" />
                                                <br />

                                                <label>Email Address</label>
                                                <input type="email" />
                                                <br />

                                                <label>Password</label>
                                                <input type="password" />
                                                <br />

                                                <div class="checkbox">
                                                    <input id="send_updates" type="checkbox" />
                                                    <label for="send_updates">Send me occasional email updates</label>
                                                </div>

                                                <div class="action_btns">
                                                    <div class="one_half"><a href="#" class="btnlogin back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                                    <div class="one_half last"><a href="#" class="btnlogin btn_red">Register</a></div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <!--login form end-->

                            <a href="index-1.html">::1::</a><br>
                            <a href="index-2.html">::2::</a><br>
                            <a href="index-3.html">::3::</a>
                        </div>
                    </div>
                   <p id="test"></p>
                    <div class="textbar">
                        <ul class="content">
                            Это свойство может принимать 3 значения:
                            <li class="content">normal - уsстанавливается и используется по умолчанию. Под умолчанием подразумевается, что перенос строк не будет осуществляться. Перенос будет только в случае использования html тэга &lt;br&gt;.</li>
                            <li class="content">break-all - делает перенос всех строк, имеющих в качестве окончания символ пробела, а также в местах где есть HTML тэг &lt;br&gt;.Обрезка строк происходит в соответствии с рамками блока.</li>
                            <li class="content">keep-all - действует как normal. Это свойство используется для азиатских стран с учетом специфики их языка.</li>
                        </ul>
                    </div>
                    <div class="textbar2"><center>
                        <div id="panel1">
                            <img class="pics" src="http://img3.goodfon.su/wallpaper/middle/9/49/frg-germaniya-gorod.jpg" data-glisse-big="http://img3.goodfon.su/original/2048x1367/9/49/frg-germaniya-gorod.jpg" rel="group1"/>
                            <img class="pics" src="https://img2.goodfon.ru/wallpaper/middle/8/45/noch-park-skamya.jpg" data-glisse-big="https://img2.goodfon.ru/original/1680x1050/8/45/noch-park-skamya.jpg" rel="group1"/>
                            <img class="pics" src="http://img1.goodfon.su/wallpaper/middle/a/b2/eyewear-virtual-reality.jpg" data-glisse-big="http://img1.goodfon.su/original/2048x1365/a/b2/eyewear-virtual-reality.jpg" rel="group1"/>
                        </div>
                        <!--<p class="slide">-->
                            <a href="#panel1" class="btn-slide1"><span>Open gallery ▼</span></a>
                        <!--</p>-->
                    </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab" id="tab2">
            <div class="wrap2">
                <div id="disqus_thread"></div>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            </div>
        </div>
        <div class="tab" id="tab3">
            <div class="wrap3">

            </div>
        </div>
        <!--Конец навбара, все внутри него-->
        </div>
                    <!--<div id="clear"></div>-->
                        <div id="footer" class="middle"><p>© Click, 2016</p>
                            <div id="scrollup"><img alt="Прокрутить вверх" src="http://dedushka.org/demo/scrollup/up.png"></div>
                        </div>
</div>
</body>
</html>
