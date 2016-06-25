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
        <h3>Create account</h3><br>
        <div class="exitDesc"><h3>Exit</h3></div>
        <div class="SignInBtn"><h3>Sign in</h3></div>
        <h1>Email</h1>
        <input type="text" class="textform" placeholder="login"><br><br>
        <h1>Password</h1>
        <input type="password" class="textform" placeholder="password"><br>
    </div>
</div>
<div class="desc">
</div>
<div id="wrap">

    <div id="header" class="middle">

        <div id="login">
            <script src="http://ulogin.ru/js/ulogin.js"></script>
            <div id="uLogin" data-ulogin="display=panel;fields=first_name,last_name;providers=facebook,vkontakte,google;hidden=twitter,odnoklassniki;redirect_uri=http%3A%2F%2Fwww.click.s-host.net/welcome"></div>
        </div>
        <div class="logo"><a href="http://click.s-host.net"><img src="/img/logo.png"></a></div>
        <h2>HTML, CSS, JS test area!!!</h2>
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
                    <INPUT type="button" class="btn btn-info" value="Push it 1" onclick="pushit1()"><br>
                    <INPUT type="button" class="btn btn-info" value="Push it 2" onclick="pushit2()"><br>
                    <INPUT type="button" class="btn btn-info" value="Push it 3" onclick="pushit3()"><br>
                    <INPUT type="button" class="btn btn-info" value="Push it 4" onclick="pushit4()"><br>
                    <INPUT type="button" class="btn btn-info" value="Push it 5" onclick="pushit5()"><br>
                    <INPUT type="button" class="btn btn-info" value="Push it 6" onclick="pushit6()"><br>
                    <INPUT type="button" class="btn btn-info" value="Test button" onclick="pushit7()"><br>
                    <INPUT type="button" class="btn btn-info" value="Empty" onclick="pushit8()">
            </div>
                <div id="right_menu">
                    <div id="btpushright">
                        <INPUT id="desc_open" type="button" class="btn btn-info" value="Sign in" onclick="btn1()"><br>
                        <INPUT type="button" class="btn btn-info" value="test8" onclick="pushit()">
                    </div>
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
                            <img class="pics" src="http://s.picsfab.com/static/contents/images/d/8/c/bbf2f7561c16bad293a3dc0933346.jpg" data-glisse-big="http://picsfab.com/download/image/195550/1920x1200_nebo-tuchi-goryi-les-reka-kamni.jpg" rel="group1"/>
                            <img class="pics" src="http://s.picsfab.com/static/contents/images/7/3/1/ebdbd094951fea52e49c245e19953.jpg" data-glisse-big="http://picsfab.com/download/image/196144/1920x1200_photographer-bryunetka-poziruet-doroga-figurka.jpg" rel="group1"/>
                            <img class="pics" src="http://s.picsfab.com/static/contents/images/e/c/3/374c1e703e1493695f1ddc214b119.jpg" data-glisse-big="http://picsfab.com/download/image/195434/1920x1200_goryi-doroga-krasnyij-superkar-skorost.jpg" rel="group1"/>
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
