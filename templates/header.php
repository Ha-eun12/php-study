<?php
    if(!isset($title)) {
        $title = '';
    }
    if($title == '로그인') {

    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title><?= $title; ?></title>
    <meta name="title" content="job in meta | 잡인메타">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="aram solution">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> <!-- root에 있으면 생략가능 -->
    <link rel="icon" href="favicon.png">
    <link rel="apple-touch-icon" href="favicon.png">
    
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index,nofollow">
</head>
<body>
    <div class="body__container">

        <!-- HEADER -->
        <!-- <header class="header header__container">
            <h1><?= $title; ?></h1>
            <button class="header__close">닫기</button>
        </header> -->

        <header>

            <!-- 메인 -->
            <div class="">
                <h1>
                    <img src="images/logo.svg" alt="잡인메타 로고">
                </h1>

                <a href="#">
                    <img src="images/icon/ico_sy_menu-24px.png" alt="햄버거메뉴">
                </a>
            </div>

            <!-- 서브페이지 -->
            <!-- <div class="">
                <h1><?= $title; ?></h1>
                <button class="header__close">닫기</button>
            </div> -->

        </header>