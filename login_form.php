<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/full-menu.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="shortcut icon" href="images/favicon.png"  type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <script src="js/jquery-3.6.1.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>로그인 | 대구백화점</title>
    <style>
        .haAclf { padding : 6px 4px}
    </style>

    <script>
        function check_input() {
            if(!document.login_form.id.value){
                alert("아이디를 입력하세요");
                document.login_form.id.focus();
                return;
            }
            if(!document.login_form.pw.value){
                alert("비밀번호를 입력하세요");
                document.login_form.pw.focus();
                return;
            }

            document.login_form.submit();// 확인 버튼을 누르는 것과 같은 효과 form action 나옴
        }
    </script>
    
</head>
<body>


    <!--header-->
    <div class="header-section">
        <div class="full-menu">
            <?php include "full-menu.php"?>
        </div>
        <div class="header">
            <?php include "header.php" ?>
        </div>
    </div>
    <!--header end-->
    
    <!--loginform-->
    <main>
    
        <div class="login-wrapper sub-login">
            <div class="login-popup">
                <h1 class="login-title">
                    LOGIN
                </h1>
                
                <form action="login.php" method="post" class="login-form" name="login_form">
                    <div class="input-wrapper">
                        <input type="id" class="login-input" id="userid" name="id" placeholder="아이디" required>
                        <img src="images/id.svg" class="input-icon">
                        <div class="userid_result"></div>
                    </div>
                    
                    <div class="input-wrapper">
                        <input type="password" name="pw" id="userpw" class="login-input" placeholder="비밀번호" required>
                        <img src="images/pw.svg" class="input-icon">
                        <div class="pw_result"></div>
                    </div>
                    <button class="loginBtn" onclick=check_input()>
                        <p>
                            로그인
                        </p>
                    </button>
                    <div class="form-bottom">
                        <div class="remember-wrapper">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                <p>
                                    아이디 기억하기
                                </p>
                            </label>
                        </div>
                        <div class="find-wrapper">
                            <a href="">
                                아이디/비밀번호 찾기
                            </a>
                        </div>
                    </div>
                    <div class="sns-login">
                        <div id="naverIdLogin" style="display: none;"></div>
                        <a href="#" id="naverLogin"><img src="images/login-naver.png"></a>
                        <a href="javascript:kakaoLogin();"><img src="images/login-kakao.png"></a>
                        <img src="images/login-google.png">
                    </div>
                    <div class="register">
                        <p>
                            아직 회원이 아니시라면?
                            <span>
                                <a href="register.php">
                                    회원가입
                                </a>
                            </span>
                        </p>
                    </div>
                </form>
                
            </div>
        </div>
    </main>
    <!--login form end-->
    <!--footer-->
    <div class="footer">
       <?php include "footer.php"?>
    </div>
    <!--footer end-->


    
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
    <script>
        AOS.init({
            once: true
        })
    </script>

    <script>
        if (window.innerWidth > 768) {
            document.clear(
                '<script src="js/header.fixed.js"><\/script>'
            )
        }
        else {
            document.write(
                '<script src="js/header.fixed.js"><\/script>'
            )
        }
    </script>

    <script src="js/full-menu.js"></script>
    <script src="js/text.notice.js"></script>
    <script src="js/cookie.js"></script>

    <script>
        $(window).resize(function () {
            var width_size = window.innerWidth;

            if (width_size > 768) {
                $('.pc-m-icon').show();
                $('.fm-list').show();
                $('.header').css('z-index','998');
            } else {
                $('.login-wrapper').hide();
                $('.fm-list').hide();
            }
        })
    </script>

    <script>
        $(window).resize(function () {
            var width_size = window.innerWidth;

            if (width_size == 1920) {
                document.location.reload();
            }
        })
    </script>

    <!-- 카카오 로그인 -->
    <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>

    <script>
        window.Kakao.init("d75cdfef1a140f85e91273c593d78b74")

        function kakaoLogin() {
            window.Kakao.Auth.login( {
                scope:"profile, account_email, gender",
                success: function(authObj) {
                    console.log(authObj);
                    window.Kakao.API.request({
                        url:"/v2/user/me", 
                        success: res => {
                            const kakao_account = res.kakao_account;
                            console.log(kakao_account);
                        }
                    })
                }
            });
        }
    </script>

    <!-- 네이버 로그인 -->
    <script src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.2.js" charset="utf-8"></script>
    <script type="text/javascript">

        var naverLogin = new naver.LoginWithNaverId({
            clientId: "CF_rGnqVhI57WO2zYPBS",
            callbackUrl: "http://127.0.0.1:5500/",
            isPopup: true,/* 팝업을 통한 연동처리 여부 */
            loginButton: {color: "green", type: 3, height: 50}
            
        });
        
        naverLogin.init(); //initialize Naver Login Button
        
        $(document).on("click", "#naverLogin", function(){ 
            var btnNaverLogin = document.getElementById("naverIdLogin").firstChild;
            btnNaverLogin.click();
        });

    </script>

    <script>
        $('#userid').blur(function(){
            if($('#userid').val().length < 1){
                document.getElementsByClassName("userid_result")[0].innerHTML = "<p >아이디를 입력해주세요.</p>";
            }else{
                document.getElementsByClassName("userid_result")[0].innerHTML = "";
            }
        })

        $('#userpw').focus(function(){
            if($('#userid').val().length < 1){
                document.getElementsByClassName("userid_result")[0].innerHTML = "<p >아이디를 입력해주세요.</p>";
            }else{
                document.getElementsByClassName("userid_result")[0].innerHTML = "";
            }
        })

        $('#userpw').blur(function(){
            if($('#userpw').val().length < 1){
                document.getElementsByClassName("pw_result")[0].innerHTML = "<p >비밀번호를 입력해주세요.</p>";
            }else{
                document.getElementsByClassName("pw_result")[0].innerHTML = "";
            }
        })
    </script>


</body>
</html>