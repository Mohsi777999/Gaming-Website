<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include ("navbar.php"); ?>
    <main>
        <div class="banner">
            <div class="banner-content" data-aos="fade-up" data-aos-duration="2500">
                <h1>LET YOUR</h1>
                <h1>MIND <b>EXPLORE</b></h1>
                <h1>NEW WORLD</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quas alias excepturi, ipsum architecto
                    libero illum aperiam doloribus quod magnam ex ad soluta, sint nihil unde eius voluptates? Ratione
                    ducimus, in harum ipsam excepturi doloribus mollitia rem .</p>
                <a href="./games.php">
                    <button class="bubbly-button">EXPLORE GAMES</button></a>

                <div class="counter-group">

                    <div class="counter1">
                        <div id="percent-counter1"></div>
                        <div class="counter-head">
                            <h4 style="color: aliceblue;">New Users</h4>
                        </div>
                    </div>

                    <div class="counter2">
                        <div id="percent-counter2"></div>
                        <div class="counter-head">
                            <h4 style="color: aliceblue;">Happy Users</h4>
                        </div>
                    </div>

                    <div class="counter3">
                        <div id="percent-counter3"></div>
                        <div class="counter-head">
                            <h4 style="color: aliceblue;">Games</h4>
                        </div>
                    </div>

                </div>

            </div>
            <div class="banner-img" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                <img src="./img/chare.JPG" alt="">
            </div>
        </div>

        <div class="wrapper">
            <div class="marquee">

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>ACTION GAMES</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>FIGHTING GAMES</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>HORROR GAMES</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>RACING GAMES</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>FIRING GAMES</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>ONLINE GAMES</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>OFFLINE GAMES</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>OPEN WORLD</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>ADVENTURE GAMES</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>ADVENTURE GAMES</h2>
                </div>

                <div class="head">
                    <img src="./img/star.png" width="30%" height="20%" alt="">
                    <h2>ADVENTURE GAMES</h2>
                </div>

            </div>
        </div>

    </main>


    <div class="choose-head" data-aos="fade-up" data-aos-duration="3000">
        <h1>CHOOSE YOUR</h1>
        <h1><span>FAVORITE</span> GAMES</h1>
    </div>


    <section>
        <div class="container swiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide swiper-slide--one">
                    <span>Action Game</span>
                    <div>
                        <h2>PUBG BATTLE GROUNDS PC</h2>
                        <p>
                            <button style="padding: 8px 18px;" class="bubbly-button">Explore</button>
                        </p>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide--two">
                    <span>Open World Game</span>
                    <div>
                        <h2>GRAND THEFT AUTO V</h2>
                        <p>
                            <button style="padding: 8px 18px;" class="bubbly-button">Explore</button>
                        </p>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide--three">
                    <span>Action Game</span>
                    <div>
                        <h2>COD MODERN WARFARE 2</h2>
                        <p>
                            <button style="padding: 8px 18px;" class="bubbly-button">Explore</button>
                        </p>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide--four">
                    <span>Thiller Game</span>
                    <div>
                        <h2>BATMAN ARKHAM KNIGHTS</h2>
                        <p>
                            <button style="padding: 8px 18px;" class="bubbly-button">Explore</button>
                        </p>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide--five">
                    <span>Sports Game</span>
                    <div>
                        <h2>FIFA 22</h2>
                        <p>
                            <button style="padding: 8px 18px;" class="bubbly-button">Explore</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <div class="wrapper2" data-aos="fade-up"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" data-aos-duration="1000">
        <a class="cta" href="./games.php">
            <span>FREE GAMES</span>
            <span>
                <svg class="svgg" width="66px" height="43px" viewBox="0 0 66 43" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path class="one"
                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                            fill="#FFFFFF"></path>
                        <path class="two"
                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                            fill="#FFFFFF"></path>
                        <path class="three"
                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                            fill="#FFFFFF"></path>
                    </g>
                </svg>
            </span>
        </a>
        <a class="cta" href="./games.php">
            <span>PAID GAMES</span>
            <span>
                <svg class="svgg" width="66px" height="43px" viewBox="0 0 66 43" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path class="one"
                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                            fill="#FFFFFF"></path>
                        <path class="two"
                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                            fill="#FFFFFF"></path>
                        <path class="three"
                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                            fill="#FFFFFF"></path>
                    </g>
                </svg>
            </span>
        </a>
    </div>

    <div class="section-2 container">
        <img src="./img/virtual.png" data-aos-duration="1500" data-aos="fade-up"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
        <div class="section2-content" data-aos-duration="1500" data-aos="fade-up"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
            <h1>DISCOVER THE</h1>
            <h1>VIRTUAL REALITY</h1>
            <h1>GAMING</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis amet illum dolores quia autem
                consequuntur veritatis assumenda blanditiis, quaerat nisi asperiores fugiat magni aperiam reprehenderit
                quibusdam molestiae officia! Nulla, porro?</p>
            <a href="./about.php">
                <button style="padding: 22px 86px;" class="bubbly-button">Read More</button></a>
        </div>
    </div>

    <div class="line">
        <h1><b>WELCOME</b> TO THE <b>TOP</b> GAMES</h1>
    </div>

    <div class="line-btns">
        <a href="./games.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Latest Games
        </a>
        <a href="./games.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Popular games
        </a>
        <a href="./games.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Coming Soon
        </a>
    </div>


    <div class="container nfts-section">

        <?php

        $fetchgames = "SELECT * FROM games LIMIT 8";
        $fetchres = mysqli_query($conn, $fetchgames);

        while ($rowgames = mysqli_fetch_array($fetchres)) { ?>

            <div class="nft">
                <div class='main'>
                    <img class='tokenImage' src="<?php echo $rowgames['game_img']; ?>" alt="NFT" />
                    <h2 style="color:rgb(216, 213, 213); font-size: 30px; padding: 10px 0px 2px 0px;">
                        <?php echo $rowgames['game_name']; ?>
                    </h2>
                    <div class="purchase-btn">
                        <button style="--content: 'Purchase';">
                            <div class="left"></div>
                            Purchase
                            <div class="right"></div>
                        </button>
                        <a target="_blank" href=""><svg
                                style="width:2em;height:2em;position:fixed;top:1em;left:1em;opacity:.8;"
                                viewBox="0 0 24 24">
                                <path fill="#fff"
                                    d="M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z" />
                            </svg></a>
                    </div>

                    <div class='tokenInfo'>
                        <div class="price">
                            <p style="font-size: 20px;"><?php echo $rowgames['game_price']; ?></p>
                        </div>
                        <div class="duration">
                            <ins>◷</ins>
                            <p><?php echo $rowgames['game_genre']; ?></p>
                        </div>
                    </div>
                    <hr />

                </div>
            </div>

            <?php
        }

        ?>
    </div>


    <div class="line">
        <h1>TESTI<b>NOMIALS</b></h1>
    </div>

    <div class="reviews">
        <mainn>
            <div class="slider container">
                <div class="slide-row" id="slide-row">
                    <div class="slide-col">
                        <div class="content">
                            <p>Zen Doan is a business analyst, entrepreneur and media proprietor, and investor. She also
                                known as the best selling book author.</p>
                            <h2>Zen</h2>
                            <p>Author</p>
                        </div>
                        <div class="hero">
                            <img src="https://user-images.githubusercontent.com/13468728/234031693-6bbaba7d-632c-4d7d-965f-75a76a549ce2.jpg"
                                alt="avatar">
                        </div>
                    </div>

                    <div class="slide-col">
                        <div class="content">
                            <p>Jonathan Koletic is an American internet entrepreneur and media proprietor, and investor.
                                He
                                is the founder of the multi-national technology company Treymont.</p>
                            <h2>Jonathan</h2>
                            <p>Treymont Inc.</p>
                        </div>
                        <div class="hero">
                            <img src="https://user-images.githubusercontent.com/13468728/234031617-2dfb19ea-01d0-4370-b63b-bb6bdfb4f78e.jpg"
                                alt="avatar">
                        </div>
                    </div>

                    <div class="slide-col">
                        <div class="content">
                            <p>Charlie Green is an European entrepreneur and media consultant, and investor. He is the
                                founder of the Hallmark Inc.</p>
                            <h2>Charlie</h2>
                            <p>Hallmark Inc.</p>
                        </div>
                        <div class="hero">
                            <img src="https://user-images.githubusercontent.com/13468728/234031646-10533999-39e5-4c7b-ab54-d0299b13ce74.jpg"
                                alt="avatar">
                        </div>
                    </div>

                    <div class="slide-col">
                        <div class="content">
                            <p>Sarah Dam is an American internet entrepreneur and media proprietor, and investor. She is
                                the
                                founder of the multi-national technology company Zara.</p>
                            <h2>Sarah</h2>
                            <p>Zara Inc.</p>
                        </div>
                        <div class="hero">
                            <img src="https://github.com/ecemgo/ecemgo/assets/13468728/55116c98-5f9a-4b0a-9fdb-4911b52d5ef3"
                                alt="avatar">
                        </div>
                    </div>

                </div>
            </div>

            <div class="indicator">
                <span class="btn active"></span>
                <span class="btn"></span>
                <span class="btn"></span>
                <span class="btn"></span>
            </div>
        </mainn>
    </div>
    <?php include ("footer.php"); ?>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="./script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        const btns = document.querySelectorAll(".btn");
        const slideRow = document.getElementById("slide-row");
        const main = document.querySelector("mainn");
        let currentIndex = 0;
        function updateSlide() {
            const mainWidth = main.offsetWidth;
            const translateValue = currentIndex * -mainWidth;
            slideRow.style.transform = `translateX(${translateValue}px)`;

            btns.forEach((btn, index) => {
                btn.classList.toggle("active", index === currentIndex);
            });
        }
        btns.forEach((btn, index) => {
            btn.addEventListener("click", () => {
                currentIndex = index;
                updateSlide();
            });
        });
        window.addEventListener("resize", () => {
            updateSlide();
        });

        AOS.init();
    </script>
</body>

</html>