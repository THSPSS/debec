<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/subcard.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/full-menu.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/article_common.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/membership.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/jquery-3.6.1.js"></script>
    <script src="js/popup.js"></script>
    <title>카드멤버십 | 대구백화점</title>
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
            <?php include "login_wrapper.php" ?>
        </div>
    </div>
    <!--header end-->


    <main>
        <div class="article membership">
            <div class="article-wrapper">
                <div class="article-title">
                    <h1>
                        Membership Card
                    </h1>
                    <p>존중하고 사랑하는 마음, 대구백화점이 고객을 섬기는 진실한 마음입니다.</p>
                </div>
                <div class="m-common">
                    <h2 class="m-c-title">대백 제휴카드</h2>
                    <div class="m-c-wrapper">
                        <div class="m-c-box">
                            <img src="images/membership-b1.png" alt="5%쿠폰">
                            <div class="m-c-b-text">
                                <h3>
                                    5% 할인 쿠폰
                                </h3>
                                <p>
                                    (월 최대 6매)
                                </p>
                            </div>
                        </div>
                        <div class="m-c-box">
                            <img src="images/membership-b2.png" alt="5%쿠폰">
                            <div class="m-c-b-text">
                                <h3>
                                    3시간 무료 주차권
                                </h3>
                                <p>
                                    (월 최대 6매)
                                </p>
                            </div>
                        </div>
                        <div class="m-c-box">
                            <img src="images/membership-b3.png" alt="5%쿠폰">
                            <div class="m-c-b-text">
                                <h3>
                                    상시 2~3개월 무이자 할부
                                </h3>
                                <p>
                                    (5만원이상 구매시)
                                </p>
                            </div>
                        </div>
                        <div class="m-c-box">
                            <img src="images/membership-b4.png" alt="5%쿠폰">
                            <div class="m-c-b-text">
                                <h3>
                                    대백 포인트 최대 1% 적립
                                </h3>
                                <p>
                                    (결제수단별 상이)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cardbox m-card">
                    
<!--카드1=============================================================================-->
                    <div class="card-box__item">
                        <!--앞-->
                        <div class=" m-cd-box card-box__before card-box__card">
                            <img src="images/membership-c1.png" alt="">
                            <h3>대백 시티카드 아인스</h3>
                        </div>
                    
                        <!--뒤-->
                        <div class="card-box__after">
                    
                            <h3 class="card-title">대백 시티카드 아인스</h3>
                    
                            <div class="card-box__btn-wrap">
                                <span>연회비</span>
                                <a href="#popup_layer_1" class="btn-txt btn-txt--arr-r pop-open" id="detail">자세히보기</a>
                            </div>
                    
                            <div class="card-type">
                                <div class="card-type__item">
                    
                                    <p class="card-type__money">국내전용 4,000</p><br />
                                    <p class="card-type__money">국내외겸용 5,000</p>
                                </div>
                            </div>
                        </div>
                    
                    
                        <div class="pop-wrap" id="popup_layer_1" aria-hidden="false" tabindex="0" data-open="true"
                            style="display: none; z-index: 9000;">
                            <div class="pop-container" style="width: 400px; height: 462px; top: 253.5px; left: 760px;" tabindex="0">
                                <!-- width, height값 삭제하지 마세요~ -->
                                <!-- pop-header -->
                                <header class="pop-header">
                                    <h1 class="pop-notice">연회비 안내</h1>
                                </header>
                                <div class="pop-close"><a href="javascript:void(0)" class="btn-pop">닫기</a></div>
                                <!--// pop-header -->
                    
                                <!-- 팝업컨텐츠 -->
                                <div class="pop-inner" tabindex="0">
                                    <div class="pop-cont" style="height: calc((100% - 112px) + 40px);">
                                        <div class="tbl-data tbl-data--type3">
                                            <table>
                                                <caption class="caption">연회비 안내</caption>
                                                <colgroup>
                                                    <col style="width:20%">
                                                    <col>
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="v-top"><img src="./images/membership-logo-domestic.png" alt="국내전용"></th>
                                                        <td>
                                                            <div class="box-count">
                                                                <span>국내</span>
                                                                <span>12,000</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="v-top"><img src="./images/membership-logo-visa.png" alt="VISA카드"></th>
                                                        <td>
                                                            <div class="box-count">
                                                                <span>VISA</span>
                                                                <span>12,000</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="btn-wrap btn-wrap--footer">
                                        <button type="button" class="btn btn--primary">확인</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--카드2=============================================================================-->
                    <div class="card-box__item">
                        <!--앞-->
                    
                        <div class="m-cd-box card-box__before card-box__card">
                            <img src="images/membership-c2.png" alt="대백 대구은행 카드">
                            <h3>대백 대구은행 카드</h3>
                        </div>
                    
                        <!--뒤-->
                        <div class="card-box__after">
                    
                            <h3 class="card-title">대백 시티카드 아인스</h3>
                    
                            <div class="card-box__btn-wrap">
                                <span>연회비</span>
                                <a href="#popup_layer_2" class="btn-txt btn-txt--arr-r pop-open" id="detail">자세히보기</a>
                            </div>
                    
                            <div class="card-type">
                                <div class="card-type__item">
                    
                                    <p class="card-type__money">국내전용 4,000</p><br />
                                    <p class="card-type__money">국내외겸용 5,000</p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="pop-wrap" id="popup_layer_2" aria-hidden="false" tabindex="0" data-open="true"
                            style="display: none; z-index: 9000;">
                            <div class="pop-container" style="width: 400px; height: 462px; top: 253.5px; left: 760px;" tabindex="0">
                                <!-- width, height값 삭제하지 마세요~ -->
                                <!-- pop-header -->
                                <header class="pop-header">
                                    <h1 class="pop-notice">연회비 안내</h1>
                                </header>
                                <div class="pop-close"><a href="javascript:void(0)" class="btn-pop">닫기</a></div>
                                <!--// pop-header -->
                    
                                <!-- 팝업컨텐츠 -->
                                <div class="pop-inner" tabindex="0">
                                    <div class="pop-cont" style="height: calc((100% - 112px) + 40px);">
                                        <div class="tbl-data tbl-data--type3">
                                            <table>
                                                <caption class="caption">연회비 안내</caption>
                                                <colgroup>
                                                    <col style="width:20%">
                                                    <col>
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="v-top"><img src="./images/membership-logo-domestic.png" alt="국내전용"></th>
                                                        <td>
                                                            <div class="box-count">
                                                                <span>국내</span>
                                                                <span>4,000</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="v-top"><img src="./images/membership-logo-visa.png" alt="VISA카드"></th>
                                                        <td>
                                                            <div class="box-count">
                                                                <span>VISA</span>
                                                                <span>5,000</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="btn-wrap btn-wrap--footer">
                                        <button type="button" class="btn btn--primary">확인</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--카드3===================================================================================-->
                    <div class="card-box__item">
                        <!--앞-->

                        <div class="m-cd-box card-box__before card-box__card">
                            <img src="images/membership-c3.png" alt="대백 플러스 체크카드">
                            <h3>대백 플러스 체크카드</h3>
                        </div>

                        <!--뒤-->
                        <div class="card-box__after">

                            <h3 class="card-title">대백 시티카드 아인스</h3>

                            <div class="card-box__btn-wrap" id="card-box__btn-wrap3">
                                <span>발급비</span>
                                <a href="#popup_layer_3" class="btn-txt btn-txt--arr-r pop-open" id="detail">자세히보기</a>
                            </div>

                            <div class="card-type">
                                <div class="card-type__item" id="card-type__item3">

                                    <p class="card-type__money">2,000원 (익월까지 3만원이상 이용시 면제)</p><br />
                                    <p class="card-type__money">선불형 교통카드 (비교통 선택가능)</p>
                                </div>
                            </div>
                        </div>

                        <div class="pop-wrap" id="popup_layer_3" aria-hidden="false" tabindex="0" data-open="true"
                            style="display: none; z-index: 9000;">
                            <div class="pop-container" style="width: 400px; height: 462px; top: 253.5px; left: 760px;"
                                tabindex="0">
                                <!-- width, height값 삭제하지 마세요~ -->
                                <!-- pop-header -->
                                <header class="pop-header">
                                    <h1 class="pop-notice">연회비 안내</h1>
                                </header>
                                <div class="pop-close"><a href="javascript:void(0)" class="btn-pop">닫기</a></div>
                                <!--// pop-header -->

                                <!-- 팝업컨텐츠 -->
                                <div class="pop-inner" tabindex="0">
                                    <div class="pop-cont" style="height: calc((100% - 112px) + 40px);">
                                        <div class="tbl-data tbl-data--type3">
                                            <table>
                                                <caption class="caption">연회비 안내</caption>
                                                <colgroup>
                                                    <col style="width:20%">
                                                    <col>
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="v-top"><img
                                                                src="./images/membership-logo-domestic.png" alt="국내전용"></th>
                                                        <td>
                                                            <div class="box-count">
                                                                <span>2,000원 (익월까지 3만원이상 이용시 면제)</span><br /><br />
                                                                <span>선불형 교통카드 (비교통 선택가능)</span>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="btn-wrap btn-wrap--footer">
                                        <button type="button" class="btn btn--primary">확인</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <h2 class="m-c-title">대백 포인트카드</h2>
<!--카드4===================================================================================-->
                    <div class="m-c-pointcard">

                        <div class="card-box__item">
                            <!--앞-->

                            <div class="m-cd-box m-p-box card-box__before card-box__card">
                                <img src="images/membership-c5.png" alt="플러스 포인트 카드">
                                <h3>플러스 포인트 카드</h3>
                            </div>

                            <!--뒤-->
                            <div class="card-box__after">

                                <h3 class="card-title">대백 시티카드 아인스</h3>



                                <div class="card-box__btn-wrap">
                                    <span>연회비</span>
                                    <a href="#popup_layer_4" class="btn-txt btn-txt--arr-r pop-open"
                                        id="detail">자세히보기</a>
                                </div>

                                <div class="card-type">
                                    <div class="card-type__item">

                                        <p class="card-type__money">없음</p>

                                    </div>

                                </div>

                            </div>

                            <div class="pop-wrap" id="popup_layer_4" aria-hidden="false" tabindex="0" data-open="true"
                                style="display: none; z-index: 9000;">
                                <div class="pop-container"
                                    style="width: 400px; height: 462px; top: 253.5px; left: 760px;" tabindex="0">
                                    <!-- width, height값 삭제하지 마세요~ -->
                                    <!-- pop-header -->
                                    <header class="pop-header">
                                        <h1 class="pop-notice">연회비 안내</h1>
                                    </header>
                                    <div class="pop-close"><a href="javascript:void(0)" class="btn-pop">닫기</a></div>
                                    <!--// pop-header -->

                                    <!-- 팝업컨텐츠 -->
                                    <div class="pop-inner" tabindex="0">
                                        <div class="pop-cont" style="height: calc((100% - 112px) + 40px);">
                                            <div class="tbl-data tbl-data--type3">
                                                <table>
                                                    <caption class="caption">연회비 안내</caption>
                                                    <colgroup>
                                                        <col style="width:20%">
                                                        <col>
                                                    </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" class="v-top">없음</th>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="btn-wrap btn-wrap--footer">
                                            <button type="button" class="btn btn--primary">확인</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--카드5===============================================================================-->
                        <div class="card-box__item">
                            <!--앞-->

                            <div class="m-cd-box m-p-box card-box__before card-box__card">
                                <img src="images/membership-c4.png" alt="대백 사랑 포인트 카드">
                                <h3>대백 사랑 포인트 카드</h3>
                            </div>

                            <!--뒤-->
                            <div class="card-box__after">

                                <h3 class="card-title">대백 시티카드 아인스</h3>



                                <div class="card-box__btn-wrap">
                                    <span>연회비</span>
                                    <a href="#popup_layer_5" class="btn-txt btn-txt--arr-r pop-open"
                                        id="detail">자세히보기</a>
                                </div>

                                <div class="card-type">
                                    <div class="card-type__item">

                                        <p class="card-type__money">없음</p>
                                    </div>

                                </div>

                            </div>

                            <div class="pop-wrap" id="popup_layer_5" aria-hidden="false" tabindex="0" data-open="true"
                                style="display: none; z-index: 9000;">
                                <div class="pop-container"
                                    style="width: 400px; height: 462px; top: 253.5px; left: 760px;" tabindex="0">
                                    <!-- width, height값 삭제하지 마세요~ -->
                                    <!-- pop-header -->
                                    <header class="pop-header">
                                        <h1 class="pop-notice">연회비 안내</h1>
                                    </header>
                                    <div class="pop-close"><a href="javascript:void(0)" class="btn-pop">닫기</a></div>
                                    <!--// pop-header -->

                                    <!-- 팝업컨텐츠 -->
                                    <div class="pop-inner" tabindex="0">
                                        <div class="pop-cont" style="height: calc((100% - 112px) + 40px);">
                                            <div class="tbl-data tbl-data--type3">
                                                <table>
                                                    <caption class="caption">연회비 안내</caption>
                                                    <colgroup>
                                                        <col style="width:20%">
                                                        <col>
                                                    </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" class="v-top">없음</th>

                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="btn-wrap btn-wrap--footer">
                                            <button type="button" class="btn btn--primary">확인</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--카드6=================================================================================-->
                        <div class="card-box__item">
                            <!--앞-->

                            <div class="m-cd-box m-p-box card-box__before card-box__card">
                                <img src="images/membership-c6.png" alt="VIP 포인트 카드">
                                <h3>VIP 포인트 카드</h3>
                            </div>


                            <!--뒤-->
                            <div class="card-box__after">

                                <h3 class="card-title">대백 시티카드 아인스</h3>



                                <div class="card-box__btn-wrap">
                                    <span>연회비</span>
                                    <a href="#popup_layer_6" class="btn-txt btn-txt--arr-r pop-open"
                                        id="detail">자세히보기</a>
                                </div>

                                <div class="card-type">
                                    <div class="card-type__item">

                                        <p class="card-type__money">없음</p>
                                    </div>

                                </div>

                            </div>

                            <div class="pop-wrap" id="popup_layer_6" aria-hidden="false" tabindex="0" data-open="true"
                                style="display: none; z-index: 9000;">
                                <div class="pop-container"
                                    style="width: 400px; height: 462px; top: 253.5px; left: 760px;" tabindex="0">
                                    <!-- width, height값 삭제하지 마세요~ -->
                                    <!-- pop-header -->
                                    <header class="pop-header">
                                        <h1 class="pop-notice">연회비 안내</h1>
                                    </header>
                                    <div class="pop-close"><a href="javascript:void(0)" class="btn-pop">닫기</a></div>
                                    <!--// pop-header -->

                                    <!-- 팝업컨텐츠 -->
                                    <div class="pop-inner" tabindex="0">
                                        <div class="pop-cont" style="height: calc((100% - 112px) + 40px);">
                                            <div class="tbl-data tbl-data--type3">
                                                <table>
                                                    <caption class="caption">연회비 안내</caption>
                                                    <colgroup>
                                                        <col style="width:20%">
                                                        <col>
                                                    </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" class="v-top">없음</th>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="btn-wrap btn-wrap--footer">
                                            <button type="button" class="btn btn--primary">확인</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>


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

    <script src="js/login.js"></script>
    <script src="js/full-menu.js"></script>
    <script src="js/text.notice.js"></script>

    <script>
        $(window).resize(function () {
            var width_size = window.innerWidth;

            if (width_size > 768) {
                $('.pc-m-icon').show();
                $('.fm-list').show();
                $('.header').css('z-index', '998');
            } else {
                $('.login-wrapper').hide();
                $('.fm-list').hide();
            }
        })
    </script>

</body>

</html>