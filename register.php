<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article_common.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/full-menu.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="shortcut icon" href="images/favicon.png"  type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>회원가입 | 대구백화점</title>
    <script>
         function check_input()
            {
                if (!document.member_form.pw.value) {
                    alert("비밀번호를 입력하세요!"); 
                    document.member_form.pw.focus();
                    return;
                }

                if (!document.member_form.pw_confirm.value) {
                    alert("비밀번호확인을 입력하세요!");    
                    document.member_form.pw_confirm.focus();
                    return;
                }

                if (!document.member_form.name.value) {
                    alert("이름을 입력하세요!");    
                    document.member_form.name.focus();
                    return;
                }

                if (!document.member_form.email.value) {
                    alert("이메일 주소를 입력하세요!");    
                    document.member_form.email.focus();
                    return;
                }

                if (document.member_form.pw.value != 
                        document.member_form.pw_confirm.value) {
                    alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                    //값이 같지 않다면 포커스를 비밀번호 폼에 넣어주기
                    document.member_form.pw.focus();
                    document.member_form.pw.select();// 블럭으로 선택되어짐 한꺼번에 지울 수 있음
                    return;
                }

                document.member_form.submit();// 확인하기 버튼
            }
    </script>
</head>
<?php
    session_start();
?>
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

    <!--register-->
    <main>
        <div class="register">
            <div class="register-wrapper">
                <div class="article-title">
                    <h1>
                        Register
                    </h1>
                </div>
                <div class="register-title">
                    <ul class="r-t-box">
                        <li>회원가입은 만 17세 이상만 가능합니다.</li>
                        <li>본인 인증에 문제가 있는 경우, 서울신용평가정보㈜ [SIREN24 고객센터(1577-1006)]로 문의해 주시기 바랍니다.</li>
                        <li>정보통신망법(2012.8.18 시행) 제 23조 2항(주민번호 사용제한) 규정에 따라 온라인상 주민번호의 수집/이용을 제한합니다.</li>
                        <li>타인의 주민등록번호를 도용하거나 허위의 주민등록번호를 사용하실 경우 주민등록법에 따라 3년 이하 징역 또는 1천만원 이하 벌금형에 처해질 수 있습니다.</li>
                    </ul>
                </div>
                <form name="member_form" action="member_insert.php" method="post">
                    <div class="form-wrapper">
                        <div class="input-wrapper">
                            <h1 class="input-title">
                                아이디 <span>*</span>
                            </h1>
                            <div class="id-input">
                                <input type="text" id="id" name="id" class="myInput" placeholder="아이디는 6자 이상으로 생성" maxlength="14" required />
                            </div>
                            <div class="result idcheck_result"></div>
                        </div>
                        <div class="input-wrapper pw">
                            <h1 class="input-title">
                                비밀번호 <span>*</span>
                            </h1>
                            <input type="password" id="pw" name="pw" class="myInput" placeholder="비밀번호는 6-20자 · 대문자 · 기호를 포함" maxlength="20" required />
                            <div class="pw_toggle"><i class="uil uil-eye-slash" id="eye"></i></div>
                            <div class="result pwcheck_result"></div>
                        </div>
                        <div class="input-wrapper">
                            <h1 class="input-title">
                                비밀번호 확인 <span>*</span>
                            </h1>
                            <input type="password" id="pw_check" name="pw_confirm" class="myInput" placeholder="비밀번호를 한번 더 입력하세요." maxlength="20" required />
                            <div class="pwCheck_toggle"><i class="uil uil-eye-slash" id="eye_two"></i></div>
                            <div class="result pw_confirm_result"></div>
                        </div>
                        <div class="input-wrapper">
                            <h1 class="input-title">
                                이메일 <span>*</span>
                            </h1>
                            <input type="email" id="email" name="email" class="myInput" placeholder="이메일주소를 입력해주세요." required />
                            <div class="result email_result"></div>
                        </div>
                        <div class="input-wrapper">
                            <h1 class="input-title">
                                이름 <span>*</span>
                            </h1>
                            <input type="text" id="name" name="name" class="myInput" placeholder="이름을 입력해주세요." required />
                            <div class="result name_result"></div>
                        </div>
                        <div class="input-wrapper">
                            <h1 class="input-title">
                                닉네임
                            </h1>
                            <input type="text" name="nick" class="myInput" placeholder="별명을 입력해주세요." />
                        </div>
                        <div class="input-wrapper">
                            <h1 class="input-title">
                                주소
                            </h1>
                            <input type="text" name="address" class="myInput" placeholder="주소를 입력해주세요." />
                        </div>
                        <div class="submit-wrapper">
                            <a href="javascript:history.back()" class="registerBtn cancleBtn"><p>취소</p></a>
                            <button id="join_button" type="button" class="registerBtn" onclick=check_input() disabled="true "><p>가입하기</p></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!--register end-->

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

    <script src="js/register_login.js"></script>
    <script src="js/full-menu.js"></script>
    <script src="js/text.notice.js"></script>

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

    <script>

        $(document).ready(function(){
            console.log("page ready");
            localStorage.removeItem("check_id");
            localStorage.removeItem("uinput");
        });

        $(document).mouseover(function(){
            let value = localStorage.getItem("check_id");
            if(value=="recheck"){
                $('.idcheck_result').html('<p style="color:red;">중복되는 아이디입니다.</p>');
                };

            if(value=="confirm") {
            $('.idcheck_result').html('<p style="color:blue;">사용할 수 있는 아이디입니다!</p>');
            $('#pw').focus();
            $('.registerBtn').css('opacity','1');
            $('.registerBtn').removeAttr("disabled");
            };
        })

        $('#id').blur(function(){
            console.log("click");
          if($('#id').val().length >= 6){
            window.open(`member_check_id.php?id=${$('#id').val()}`);
            console.log("아이디 체크 완료");
          }else{
            $('.idcheck_result').html('<p style="color:red;">아이디는 6자 이상으로 생성해주세요.</p>');
          }

 
        });


        let pwResult = document.getElementsByClassName("pwcheck_result")[0]
        

        // 비밀번호 확인
        $('#pw').blur(function(){
                pwResult.innerHTML = "<p>비밀번호를 입력해주세요.<p>";
        });

        $('#pw').blur(function(){
            if (!/^(?=.*[A-Z])(?=.*[!@#$%^*+=-]).{6,20}$/.test($('#pw').val())) {
                pwResult.innerHTML = "<p>비밀번호는 6자 ~ 20자 이내이어야 하며, 대문자/특수문자를 포함해야 합니다.<p>";
                
            }else {
                pwResult.innerHTML = "";
            }
        });

        $('#pw_check').blur(function(){
            if ($('#pw_check').val().length < 1) {
                 document.getElementsByClassName("pw_confirm_result")[0].innerHTML = "<p>비밀번호를 한번 더 입력해주세요.<p>";
            }else if($('#pw').val() != $('#pw_check').val()) {
                document.getElementsByClassName("pw_confirm_result")[0].innerHTML = "<p>비밀번호가 일치하지 않습니다. 다시 입력해 주세요.<p>";
            }else if($('#pw').val() === $('#pw_check').val()) {
                document.getElementsByClassName("pw_confirm_result")[0].innerHTML = "";
            }
        });

        $('#email').blur(function(){
            if ($('#email').val().length < 1) {
            document.getElementsByClassName("email_result")[0].innerHTML = "<p>이메일을 입력해주세요.<p>";
            }else if (!/^(?=.*[@])/.test($('#email').val())){
            document.getElementsByClassName("email_result")[0].innerHTML = "<p style='color:red;'>이메일은 '@'기호가 들어가야 합니다<p>";
            }
            else{
            document.getElementsByClassName("email_result")[0].innerHTML = "";
            }
        });

        $('#name').blur(function(){
            if ($('#name').val().length < 1) {
                document.getElementsByClassName("name_result")[0].innerHTML = "<p>이름을 입력해주세요.<p>";}
            else {
                document.getElementsByClassName("name_result")[0].innerHTML = "";
            }
        });




    </script>
    <!-- 비밀번호 show and hide-->
    <script>


        $('.pw_toggle').click(function(){
            if($('#pw').attr("type")=="password"){
                $('#pw').attr("type","text");
                $('#eye').addClass('uil-eye').removeClass('uil-eye-slash');
            }else {
                $('#pw').attr("type","password");
                $('#eye').addClass('uil-eye-slash').removeClass('uil-eye');
            }
        })

        $('.pwCheck_toggle').click(function(){
            if($('#pw_check').attr("type")=="password"){
                $('#pw_check').attr("type","text");
                $('#eye_two').addClass('uil-eye').removeClass('uil-eye-slash');
            }else {
                $('#pw_check').attr("type","password");
                $('#eye_two').addClass('uil-eye-slash').removeClass('uil-eye');
            }
        })

    </script>
</body>
</html>