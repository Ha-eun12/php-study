<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>메인</title>
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

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" 
          type="text/css"
          href="css/style.css"> -->
    <link rel="stylesheet" 
          type="text/css"
          href="./sass/style.scss">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/main.js" defer></script>
    <script src="js/common.js" defer></script>
</head>
<body>
    <div class="body__container">

        <!-- HEADER -->
        <header class="header">
            <div class="inner">

                <h1 class="header__title">
                    <a class="logo"
                    href="#">
                        <img src="./images/logo.svg"
                            alt="잡인메타" />
                    </a>
                </h1>

                <div class="header--left">
                    <button class="drow-btn ir-btn sy-icon">햄버거 메뉴</button>
                </div>

            </div>
        </header>

        <!-- VISUAL -->
        <div class="main main__visual">
            <form action="#" class="main__form">
                <div class="form__inner input">
                    <input type="text" id="mainSearch">
                    <button 
                        type="submit"
                        class="search-btn ir-btn sy-icon"
                        >검색버튼</button>
                </div>
            </form>

            <div class="main__banner">
                <figure class="main__banner--figure">
                    <img src="./images/temp/tp_main-bnr-01.png" alt="이력서에 희망근무조건을 등록하면 맞춤 공고를 보여드려요">
                </figure>
            </div>

        </div>

        <!-- PUBLIC -->
        <div class="main-public public__container">

            <div class="main-public__tab">
                <ul class="menu-tab">
                    <li><a href="#tabs1" class="active">맞춤공고</a></li>
                    <li><a href="#tabs2">지역별</a></li>
                    <li><a href="#tabs3">직종별</a></li>
                </ul>

                <!-- TABS1 -->
                <section id="tabs1" class="tabs gray-bg">

                    <div class="tabs__title">
                        <h2>맞춤공고</h2>
                        <span class="more-btn">전체보기</span>
                    </div>

                    <ul class="tabs-list section">
                        <li class="tabs-list__card card">
                            <span class="card-top cp-name">아람솔루션</span>
                            <h3>신입/경력 웹 개발자 채용</h3>
                        </li>
                        <li class="tabs-list__card card">
                            <span class="card-top cp-name">아람솔루션</span>
                            <h3>신입/경력 웹 개발자 채용</h3>
                        </li>
                        <li class="tabs-list__card card">
                            <span class="card-top cp-name">아람솔루션</span>
                            <h3>신입/경력 웹 개발자 채용</h3>
                        </li>
                        <li class="tabs-list__card card">
                            <span class="card-top cp-name">아람솔루션</span>
                            <h3>신입/경력 웹 개발자 채용</h3>
                        </li>
                    </ul>

                </section>

                <!-- TABS2 -->
                <section id="tabs2" class="tabs gray-bg">
                    <h2 class="tabs__title">지역별</h2>
                </section>

                <!-- TABS3 -->
                <section id="tabs3" class="tabs gray-bg">
                    <h2 class="tabs__title">직종별</h2>
                </section>

            </div>

        </div>

        <main></main>
        <footer></footer>
    </div>
</body>
</html>