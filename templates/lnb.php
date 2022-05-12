<?php
    $userName = "아람킴";
    $userAge = "26";
    $userZender = "여";
?>
<div class="lnb">
    <div class="inner">

        <div class="lnb__top">

            <!-- LNB LOGO -->
            <div class="lnb-logo section">
                <a class="logo"
                    href="#">
                    <img src="./images/logo.svg"
                    alt="<?= $title; ?>" />
                </a>

                <button class="close-btn sy-icon">닫기</button>
            </div>

            <!-- USER -->  
            <div class="lnb-user section">

                <div class="user-img">
                    <img src="../images/icon/pf-none.png" alt="<?= $userName ?>">
                </div>

                <!-- USER INFO -->
                <div class="user-info">
                    
                    <div class="user-info__left">
                        <span class="user-name"><?= $userName ?></span>
                        <span class="user-age"><?= $userZender ?></span>
                        <span class="user-age"><?= $userAge ?></span>
                    </div>

                    <div class="user-info__right">
                        <a href="#">회원정보view2</a>
                    </div>
                </div>
            </div>

        </div>

        <ul class="lnb__li">

            <li>
                <a href="#">채용공고</a>
                <ul>
                    <li>
                        <a href="#">맞춤공고</a>
                    </li>
                    <li>
                        <a href="#">지역별 공고</a>
                    </li>
                    <li>
                        <a href="#">직종별 공고</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">맞춤공고</a>
            </li>

            <li>
                <a href="#">관심공고</a>
            </li>

            <li>
                <a href="#">마이페이지</a>
                <ul>
                    <li>
                        <a href="#">회원정보 수정</a>
                    </li>
                    <li>
                        <a href="#">입사지원 현황</a>
                    </li>
                    <li>
                        <a href="#">공지사항</a>
                    </li>
                    <li>
                        <a href="#">환경설정</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</div>