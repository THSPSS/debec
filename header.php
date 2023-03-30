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
