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