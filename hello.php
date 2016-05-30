<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>JavaScript test site!!!</title>
    <link href="slidepannel.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="gallery/glisse.css" rel="stylesheet" type="text/css" />
    <link href="app.css" rel="stylesheet" type="text/css" />
    <!--script with path of js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script defer src="js/tabs.js"></script>
    <script defer src="js/scrolltop.js"></script>
    <script defer src="gallery/glisse.js"></script>
    <script defer src="test.js" ></script>
    <script async src="js/disqus.js"></script>
    <script async id="dsq-count-scr" src="//clickukr.disqus.com/count.js"></script>
</head>
<body>
<div id="wrap">
    <div id="header" class="middle">
        <div class="logo"><a href="http://click.s-host.net"><img src="/img/logo.png"></a></div>
        <h2>HTML, CSS, JS test area.</h2>
        <script src="//ulogin.ru/js/ulogin.js"></script>
        <div id="uLogin" data-ulogin="display=small;fields=first_name,last_name;providers=vkontakte,facebook,google,twitter,odnoklassniki;hidden=;redirect_uri=http%3A%2F%2Fclick.s-host.net%2Fcheck.php"></div>    </div>
    <div class="tabs_box">
        <!--Начало навбара, все остальное внутри него-->
        <ul class="tabs_menu">
            <li><a href="#tab1" class="active">Main</a></li>
            <li><a href="#tab2">Comments "DISQUS"</a></li>
            <li><a href="#tab3">Help</a></li>
            <li><a href="#tab4">Hello</a></li>
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
                        <div id="panel">
                            <img class="pics" src="http://s.picsfab.com/static/contents/images/d/8/c/bbf2f7561c16bad293a3dc0933346.jpg" data-glisse-big="http://picsfab.com/download/image/195550/1920x1200_nebo-tuchi-goryi-les-reka-kamni.jpg" rel="group1"/>
                            <img class="pics" src="http://s.picsfab.com/static/contents/images/7/3/1/ebdbd094951fea52e49c245e19953.jpg" data-glisse-big="http://picsfab.com/download/image/196144/1920x1200_photographer-bryunetka-poziruet-doroga-figurka.jpg" rel="group1"/>
                            <img class="pics" src="http://s.picsfab.com/static/contents/images/e/c/3/374c1e703e1493695f1ddc214b119.jpg" data-glisse-big="http://picsfab.com/download/image/195434/1920x1200_goryi-doroga-krasnyij-superkar-skorost.jpg" rel="group1"/>
                        </div>
                        <!--<p class="slide">-->
                            <a href="#" class="btn-slide"><span>Open gallery ▼</span></a>
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
                <div class="textbar2"><center>
                        <div id="panel">
                            <img class="pics" src="http://s.picsfab.com/static/contents/images/d/8/c/bbf2f7561c16bad293a3dc0933346.jpg" data-glisse-big="http://picsfab.com/download/image/195550/1920x1200_nebo-tuchi-goryi-les-reka-kamni.jpg" rel="group1"/>
                            <img class="pics" src="http://s.picsfab.com/static/contents/images/7/3/1/ebdbd094951fea52e49c245e19953.jpg" data-glisse-big="http://picsfab.com/download/image/196144/1920x1200_photographer-bryunetka-poziruet-doroga-figurka.jpg" rel="group1"/>
                            <img class="pics" src="http://s.picsfab.com/static/contents/images/e/c/3/374c1e703e1493695f1ddc214b119.jpg" data-glisse-big="http://picsfab.com/download/image/195434/1920x1200_goryi-doroga-krasnyij-superkar-skorost.jpg" rel="group1"/>
                        </div>
                        <!--<p class="slide">-->
                        <a href="#" class="btn-slide"><span>Open gallery ▼</span></a>
                        <!--</p>-->
                    </center>
                </div>
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
