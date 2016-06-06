<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>JavaScript test site!!!</title>
    <link href="slidepannel.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="gallery/glisse.css" rel="stylesheet" type="text/css" />
    <link href="gallery_btn.css" rel="stylesheet" type="text/css" />
    <!--script with path of js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script defer src="gallery/glisse.js"></script>
    <script async src="js/tabs.js"></script>
    <script async src="test.js" ></script>
    <script async src="js/disqus.js"></script>
    <script async id="dsq-count-scr" src="//clickukr.disqus.com/count.js"></script>
    <script async src="js/scrolltop.js"></script>
</head>
<body>
<div id="wrap">
    <div id="header" class="middle">
        <div class="exit">
            <INPUT type="button" class="btnex" value="Exit" onclick="pushit9()">
        </div>
        <div class="logo"><a href="http://click.s-host.net/welcome.php"><img src="/img/logo.png"></a></div>
        <h2>Welcome to Click JS test</h2>
    </div>
    <div class="tabs_box">
        <!--Начало навбара, все остальное внутри него-->
        <ul class="tabs_menu">
            <li><a href="#tab1" class="active">Main</a></li>
            <li><a href="#tab2">Comments "DISQUS"</a></li>
            <li><a href="#tab3">Help</a></li>
            <li><a href="#tab4">hide page</a></li>
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
                    <INPUT type="button" class="btn btn-info" value="Empty" onclick="pushit8()"><br>

            </div>
                <div id="right_menu">
                    <div id="btpushright">
                        <INPUT type="button" class="btn btn-info" value="Sign in" onclick="pushit()">
                    </div>
                </div>
                <div id="content">
                    <div class="textbarTop">
                            <INPUT type="button" class="btn btn-info" value="1" onclick="btn1()"><br><br>
                        <div id="links">
                            <a href="index-1.html">::1::</a><br>
                            <a href="index-2.html">::2::</a><br>
                            <a href="index-3.html">::3::</a>
                        </div>
                    </div>
                   <p id="test"></p>
                    <div class="textbar">
                        <ul>
                            Это свойство может принимать 3 значения:
                            <li>normal - уsстанавливается и используется по умолчанию. Под умолчанием подразумевается, что перенос строк не будет осуществляться. Перенос будет только в случае использования html тэга &lt;br&gt;.</li>
                            <li>break-all - делает перенос всех строк, имеющих в качестве окончания символ пробела, а также в местах где есть HTML тэг &lt;br&gt;.Обрезка строк происходит в соответствии с рамками блока.</li>
                            <li>keep-all - действует как normal. Это свойство используется для азиатских стран с учетом специфики их языка.</li>
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
                <?php
                include_once ('lib/curl_query.php');
                $html = curl_get('http://www.goodfon.su');
                echo $html;
                ?>
            </div>
        </div>
        <div class="tab" id="tab4">
            <div class="wrap4">
                <center>
                    <div id="panel2">
                        <img class="pics" src="http://s.picsfab.com/static/contents/images/7/4/5/f8501e50141b48c57e32b7157edc8.jpg" data-glisse-big="http://picsfab.com/download/image/200429/1920x1080_photographer-devushka-model-foto-figura-telo.jpg" rel="group2"/>
                        <img class="pics" src="http://s.picsfab.com/static/contents/images/d/6/9/dc0cc745d53b3a0a5ce130d23b768.jpg" data-glisse-big="http://picsfab.com/download/image/107834/1920x1080_lacey-banghard-popa-myach-spina-basketbol.jpg" rel="group2"/>
                        <img class="pics" src="http://s.picsfab.com/static/contents/images/1/8/f/faffcc68ce26914f02e96764563ca.jpg" data-glisse-big="http://picsfab.com/download/image/200198/1920x1080_photographer-devushka-shatenka.jpg" rel="group2"/>
                        <img class="pics" src="http://s.picsfab.com/static/contents/images/1/e/e/aa0d2d1270e72efa9ef075185e5f8.jpg" data-glisse-big="http://picsfab.com/download/image/200196/1920x1080_photographer-devushka-bryunetka.jpg" rel="group2"/>
                    </div>
                    <!--<p class="slide">-->
                    <a href="#panel2" class="btn-slide2"><span>Open gallery ▼</span></a>
                    <!--</p>-->
                </center>
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
