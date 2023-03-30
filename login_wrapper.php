<div class="login-wrapper">
            <div class="login-popup">
                <div class="login-closeBtn">
                    <img src="images/close.svg">
                </div>
                <h1 class="login-title">
                    LOGIN
                </h1>
                <form name="login_form" action="login.php" method="post" class="login-form">
                    <div class="input-wrapper">
                        <input type="id" id="userid" name="id" class="login-input" placeholder="아이디" required>
                        <img src="images/id.svg" class="input-icon">
                        <div class="userid_result"></div>
                    </div>
                    <div class="input-wrapper">
                        <input type="password" name="pw" class="login-input" id="userpw"  placeholder="비밀번호" required>
                        <img src="images/pw.svg" class="input-icon">
                        <div class="pw_result"></div>
                    </div>
                    <button  class="loginBtn" onclick=check_input()>
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
                        <!-- google login -->
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