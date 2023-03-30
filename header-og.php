<div class="full-menu">
        <div class="full-menu-wrapper">
            <div class="fm-top">
                <a href="index.php">
                    <img src="images/logo.png">
                </a>
                <img src="images/close.svg" class="fm-closeBtn">
            </div>
            <div class="fm-middle-group">
                <div class="fm-middle">
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">이용안내</h1>
                        <ul class="fm-list">
                            <li>지점안내</li>
                            <li>층별안내</li>
                            <li>편의시설</li>
                            <li>오시는길</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">공지사항</h1>
                        <ul class="fm-list">
                            <li>공지사항</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">이벤트</h1>
                        <ul class="fm-list">
                            <li>이벤트</li>
                            <li>당첨자발표</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">쇼핑뉴스</h1>
                        <ul class="fm-list">
                            <li>쇼핑정보</li>
                            <li>DM</li>
                            <li>Tax Free Info</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">D-Style</h1>
                        <ul class="fm-list">
                            <li>Only-D</li>
                            <li>해외직수입브랜드</li>
                        </ul>
                    </div>
                </div>
                <div class="fm-middle">
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">문화센터</h1>
                        <ul class="fm-list">
                            <li>문화센터소개</li>
                            <li>수강신청·검색</li>
                            <li>수강관리</li>
                            <li>추천·신설강좌</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">갤러리</h1>
                        <ul class="fm-list">
                            <li>갤러리소개</li>
                            <li>전시안내</li>
                            <li>전시검색</li>
                            <li>대관안내</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">프라임홀</h1>
                        <ul class="fm-list">
                            <li>행사일정</li>
                            <li>프라임홀소개</li>
                            <li>대관안내</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">레오문화홀</h1>
                        <ul class="fm-list">
                            <li>문화홀소개</li>
                            <li>공연일정</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">아트&컬쳐 소식</h1>
                        <ul class="fm-list">
                            <li>아트&컬쳐 소식</li>
                        </ul>
                    </div>
                </div>
                <div class="fm-middle">
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">대백상품권</h1>
                        <ul class="fm-list">
                            <li>상품권소개</li>
                            <li>구입안내</li>
                            <li>발권안내</li>
                            <li>사용장소</li>
                            <li>제휴상품권</li>
                            <li>제휴점문의</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">법인영업</h1>
                        <ul class="fm-list">
                            <li>법인영업소개</li>
                            <li>대백특판안내</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">카드&멤버십</h1>
                        <ul class="fm-list">
                            <li>멤버십안내</li>
                            <li>포인트안내</li>
                            <li>카드소개</li>
                            <li>전자쿠폰안내</li>
                            <li>주차권안내</li>
                            <li>VIP CLUB</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title">바로가기</h1>
                        <ul class="fm-list">
                            <li>대백몰</li>
                            <li>대백특판</li>
                        </ul>
                    </div>
                    <div class="fm-list-wrapper">
                        <h1 class="fm-list-title"></h1>
                        <ul class="fm-list">
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-full-menu">
                <div class="m-fm-top">
                    <!-- not logged in php-->
                    <?php
                            if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
                            else $userid="";
                            if (isset($_SESSION["username"])) $username = $_SESSION["username"];
                            else $username="";

                            if(!$userid) {
                    ?>
                    <h1>
                        반갑습니다 고객님!
                    </h1>
                    <p>
                        대구백화점에 로그인하시면 다양한 혜택과 서비스를 받으실 수 있습니다.
                    </p>
                    <div class="m-fm-login">
                        <a href="login_form.php" class="m-fm-loginbox">
                            <i class="ri-login-box-line"></i>
                            <p>
                                로그인
                            </p>
                        </a>
                    <!--logged in php-->
                    <?php
                    } else {
                        $logged = $username. "(" .$userid.")님";
                    
                    ?>
                    <h1>
                        반갑습니다 <a href="member_modify_form.php"><?=$logged?></a>
                    </h1>
                    <div class="m-fm-login">
                        <a href="logout.php" class="m-fm-loginbox">
                            <i class="ri-login-box-line"></i>
                            <p>
                                로그아웃
                            </p>
                        </a>
                    <?php
                    } 
                    
                    ?>
                    <a href="" class="m-fm-loginbox">
                        <i class="ri-information-line"></i>
                        <p>
                            이용안내
                        </p>
                    </a>
                    <a href="" class="m-fm-loginbox">
                        <i class="ri-customer-service-2-line"></i>
                        <p>
                            고객센터
                        </p>
                    </a>
                </div>
            </div>
            <div class="m-fm-middle">
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">이용안내</h1>
                    <ul class="fm-list">
                        <li>지점안내</li>
                        <li>층별안내</li>
                        <li>편의시설</li>
                        <li>오시는길</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">공지사항</h1>
                    <ul class="fm-list">
                        <li>공지사항</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">이벤트</h1>
                    <ul class="fm-list">
                        <li>이벤트</li>
                        <li>당첨자발표</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">쇼핑뉴스</h1>
                    <ul class="fm-list">
                        <li>쇼핑정보</li>
                        <li>DM</li>
                        <li>Tax Free Info</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">D-Style</h1>
                    <ul class="fm-list">
                        <li>Only-D</li>
                        <li>해외직수입브랜드</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">문화센터</h1>
                    <ul class="fm-list">
                        <li>문화센터소개</li>
                        <li>수강신청·검색</li>
                        <li>수강관리</li>
                        <li>추천·신설강좌</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">갤러리</h1>
                    <ul class="fm-list">
                        <li>갤러리소개</li>
                        <li>전시안내</li>
                        <li>전시검색</li>
                        <li>대관안내</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">프라임홀</h1>
                    <ul class="fm-list">
                        <li>행사일정</li>
                        <li>프라임홀소개</li>
                        <li>대관안내</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">레오문화홀</h1>
                    <ul class="fm-list">
                        <li>문화홀소개</li>
                        <li>공연일정</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">아트&컬쳐 소식</h1>
                    <ul class="fm-list">
                        <li>아트&컬쳐 소식</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">대백상품권</h1>
                    <ul class="fm-list">
                        <li>상품권소개</li>
                        <li>구입안내</li>
                        <li>발권안내</li>
                        <li>사용장소</li>
                        <li>제휴상품권</li>
                        <li>제휴점문의</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">법인영업</h1>
                    <ul class="fm-list">
                        <li>법인영업소개</li>
                        <li>대백특판안내</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">카드&멤버십</h1>
                    <ul class="fm-list">
                        <li>멤버십안내</li>
                        <li>포인트안내</li>
                        <li>카드소개</li>
                        <li>전자쿠폰안내</li>
                        <li>주차권안내</li>
                        <li>VIP CLUB</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title">바로가기</h1>
                    <ul class="fm-list">
                        <li>대백몰</li>
                        <li>대백특판</li>
                    </ul>
                </div>
                <div class="fm-list-wrapper">
                    <h1 class="fm-list-title"></h1>
                    <ul class="fm-list">
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<div class="header">
        <div class="nav">
            <div class="gnb-top">
                <a href="index.php">
                    <img src="images/logo.png" class="logo">
                </a>
                <div class="gnb-t-right">
                    <form action="" class="search-wrapper">
                        <input type="text" name="" class="searchBar" placeholder="검색어를 입력하세요">
                        <button type="submit" class="submitBtn">
                            <i class="ri-search-line"></i>
                        </button>
                    </form>
                    <!--php login -->
                    <?php
                        if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
                        else $userid="";
                        if (isset($_SESSION["username"])) $username = $_SESSION["username"];
                        else $username="";

                        if(!$userid) {
                        
                    ?>
                    <ul class="gnb-right-menu">
                        <li><a href="register.php">회원가입</a></li>
                        <li class="loginBtn">로그인</li>
                        <li><a href="">고객센터</a></li>
                    </ul>
                    <?php
                        } else {
                                $logged = $username. "(".$userid.")님";
                        
                    ?>
                    <ul class="gnb-right-menu">
                        <li><a href="member_modify_form.php"><?=$logged?></a></li>
                        <li style="cursor:pointer;"><a href="logout.php">로그아웃</a></li>
                        <li><a href="">고객센터</a></li>
                    </ul>
                    <?php
                    } 
                    
                    ?>
                </div>
            </div>
            <div class="gnb-bottom">
                <ul class="gnb">
                    <li><a href="">이용안내</a></li>
                    <li><a href="">문화ZONE</a></li>
                    <li><a href="">상품권</a></li>
                    <li><a href="membership.php">카드멤버십</a></li>
                </ul>
                <div class="news" id="notice5">
                    <div class="open-event fl">
                        <ul class="notice-list">
                            <li>
                                <a href="">
                                    APP 회원 특별혜택, 커피 한잔 할래요?
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    깐부맺고 포인트받자!
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    11.01(화)부터 영업시간이 변경됩니다.
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    2022 겨울학기 대백문화센터 강사님을 모십니다.
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="toggle">
                    <i class="ri-menu-3-line pc-m-icon"></i>
                </div>
            </div>
        </div>
        <div class="mobile-nav">
            <a href="/">
                <img src="images/logo-w.png" class="logo-w">
                <img src="images/logo.png" class="logo active">
            </a>
            <div class="toggle">
                <i class="ri-menu-3-line m-icon"></i>
                <img src="images/close.svg" class="c-icon">
            </div>
        </div>
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
                    </div>
                    <div class="input-wrapper">
                        <input type="password" name="pw" class="login-input" placeholder="비밀번호" required>
                        <img src="images/pw.svg" class="input-icon">
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
</div>