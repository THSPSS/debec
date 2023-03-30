<?php
    session_start();
?>
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
    <link rel="stylesheet" href="css/promotion.css">
    <link rel="stylesheet" href="css/article_common.css">
    <link rel="stylesheet" href="css/article1.css">
    <link rel="stylesheet" href="css/article2.css">
    <link rel="stylesheet" href="css/article3.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="shortcut icon" href="images/favicon.png"  type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/jquery-3.6.1.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/calendar.js"></script>
    <link rel="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>대구백화점</title>
    <!--로그인 확인-->
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
        };
    </script>
    <!--로그인 확인-->
</head>
<body>
    
    <!--header-->
    <div class="header-section">
        <div class="full-menu">
            <?php include "full-menu.php"?>
        </div>
        <div class="header">
            <?php include "header.php" ?>
            <?php include "login_wrapper.php" ?>
        </div>
    </div>
    <!--header end-->

    <main>

        <section class="section-carousel">
            <?php include "carousel.php" ?>
        </section>

        <section class="section-article-1">
            <?php include "article-1.php" ?>
        </section>

        <section class="section-article-2">
            <?php include "article-2.php" ?>
        </section>

        <section class="section-article-3">
            <?php include "article-3.php" ?>
        </section>

    </main>

    <!--footer-->
    <div class="footer">
       <?php include "footer.php"?>
    </div>
    <!--footer end-->



    <!--달력 레이어 팝업 시작 -->
    <div class="layerPop">
        <div class="popup-header">
            <p class="p">대구백화점 영업시간&휴점일 안내</p>
        </div>
        <section class="inform-layer">
            <div class="calendar-header">
                <h2 class="h2 month"></h2>
                <span class="span"><p class="full-year"></p><p class="month-letter"></p></span>
            </div>
            <div class="calendar-body"></div>
            <div class="calendar-footer">
                <div class="notice">
                    <div class="box"></div>
                    <p class="notice-p">연장영업</p>
                </div>
                <div class="notice2">
                    <div class="box"></div>
                    <p class="notice-p">휴점일</p>
                </div>
            </div>
        </section>
        <div class="last-notice">
            <div class="not_show" name="다시보지않기" id="btn-inform-close" title="오늘하루 보지않기">
                다시보지않기
            </div>
            <div class="btn">닫기</div>
        </div>
    </div>

    <script>
        let month =  document.querySelector('.month');
        let year = document.querySelector('.full-year');
        let monthLetter = document.querySelector('.month-letter');
        let calendar_days = document.querySelector('.calendar-body');




        const WEEKDAY = ['일', '월', '화', '수', '목', '금', '토'];
        const MONTH = ['Janary', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'];
        const DAYS = [ 31 , 28 , 30, 31, 30 , 31, 30, 31, 30, 31, 30, 31]

        let now = new Date();
        let actual_month = now.getMonth()+1;
        let now_year = now.getFullYear();
        let calendar_div = 35 
        let num
        
        //leap year checking
        if (now_year % 4 == 0){
            if (now_year % 100 != 0){
                console.log("it's leap year")
                DAYS.splice(1, 1, 29);
            }else{
                year % 400 == 0
                console.log("it's leap year")
            }
        } else {
            console.log("it's not leap year")
        } 
        

        year.innerHTML = now.getFullYear()
        month.innerHTML = now.getMonth()+1
        monthLetter.innerHTML = MONTH[now.getMonth()]

        



        
        let date = now_year +'-'+actual_month+'-' + 1
        let week = WEEKDAY[new Date(date).getDay()]
            switch(week) {
                case "일" : num=0; break
                case "월" : num=1; break
                case "화" : num=2; break
                case "수" : num=3; break
                case "목" : num=4; break
                case "금" : num=5; break
                case "토" : num=6; break
            }




        for(let i= 1; i <= calendar_div ; i++){
            let day = document.createElement('div');
            let actual_day = i - num;
            let sub_day = calendar_div + num

            if (i <= num|| i > sub_day ){
                day.innerHTML = '';
            } 
            else {
                day.innerHTML = actual_day;
            }


            if ( actual_day == 7 ) {
                day.classList.add('off-day');
            } 
            calendar_days.appendChild(day);
        }


    </script>
    <!-- 달력 레이버 팝업 끝 -->

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

    <script src="js/login.js"></script>
    <script src="js/full-menu.js"></script>
    <script src="js/text.notice.js"></script>
    <script src="js/cookie.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "fade",
            speed: 500,
            loop: true,
            loopedSlides: 1,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                clickable: true,
                el: ".swiper-pagination",
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper2", {
            slidesPerView: "auto",
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
            0: {
                spaceBetween: 10,
                centeredSlides: true,
            },
            550: {
                spaceBetween: 20,
            },
        },
        });
    </script>

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

    
    <!-- 인스타 피드-->
    <script src="js/instafeed.min.js"></script>
    <script src="js/additional.js"></script>

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
            callbackUrl: "http://127.0.0.1:5500/index.php",
            isPopup: true,/* 팝업을 통한 연동처리 여부 */
            loginButton: {color: "green", type: 3, height: 50}
            
        });
        
        naverLogin.init(); //initialize Naver Login Button
        
        $(document).on("click", "#naverLogin", function(){ 
            var btnNaverLogin = document.getElementById("naverIdLogin").firstChild;
            btnNaverLogin.click();
        });

        $(document).ready(function(){
            localStorage.removeItem("check_id");
            localStorage.removeItem("uinput");
        })

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