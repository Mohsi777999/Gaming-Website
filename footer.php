<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;600&family=Krona+One&display=swap');

        footer {
            width: 100%;
            background-color: transparent;
        }

        footer .footer-heading {
            padding: 100px 0px 0px 0px;
        }

        footer .footer-heading h1 {
            color: white;
            font-family: 'Krona One', sans-serif;
            text-align: center;
        }

        footer .footer-para {
            padding: 30px 530px 10px 482px;
        }

        footer .footer-para p {
            color: #9f9e9e;
            font-family: Inter;
            font-weight: 600;
            text-transform: uppercase;
            text-align: center;
        }

        footer .footer-icons {
            display: flex;
            gap: 50px;
            padding: 0px 0px 60px 805px;
        }

        footer .footer-icons i {
            font-size: 30px;
        }

        footer .footer-copyright {
            display: flex;
            justify-content: space-around;
            color: white;
            gap: 170ex;
        }

        @media (max-width:480px) {

            footer .footer-para {
                padding: 30px 15px 10px 18px;
            }

            footer .footer-icons {
                display: flex;
                gap: 20px;
                flex-direction: column;
                padding: 0px 0px 60px 175px;
            }

            footer .footer-copyright {
                justify-content: center;
                flex-direction: column;
                align-items: center;
                gap: 1ex;
            }
        }

        @media (min-width:481px) and (max-width:991px) {
            footer .footer-para {
                padding: 30px 15px 10px 18px;
            }

            footer .footer-icons {
                display: flex;
                gap: 20px;
                padding: 0px 0px 60px 0px;
                justify-content: center;
            }

            footer .footer-copyright {
                justify-content: center;
                align-items: center;
                gap: 40ex;
            }
        }

        @media (min-width:991px) and (max-width:1200px) {
            footer .footer-para {
                padding: 30px 109px 10px 120px;
            }

            footer .footer-icons {
                gap: 20px;
                padding: 0px 0px 60px 0px;
                justify-content: center;
            }

            footer .footer-copyright {
                gap: 65ex;
            }
        }

        @media (min-width:1200px) and (max-width:1500px) {
            footer .footer-heading {
                padding: 30px 0px 0px 0px;
            }

            footer .footer-para {
                padding: 30px 109px 10px 120px;
            }

            footer .footer-icons {
                gap: 20px;
                padding: 0px 0px 60px 0px;
                justify-content: center;
            }

            footer .footer-copyright {
                gap: 85ex;
            }
        }
    </style>
</head>

<body>

    <!-- Footer Code Start Here  -->

    <footer> <!-- Parent Div  -->
        <div class="footer-heading">
            <h1>GameVerse</h1>
        </div>
        <div class="footer-para">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum</p>
        </div>
        <div class="footer-icons"> <!-- Icons Parent Div  -->
            <a href="https://www.facebook.com/panhwermohsinali"><i class="fa fa-facebook-square" style="color: #4069c0;"
                    aria-hidden="true" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"></i></a>
            <a href="https://www.instagram.com/panhwer_mohsin_ali/"><i class="fa fa-instagram" style="color: #d872ec;"
                    aria-hidden="true" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"></i></a>
            <a href="https://www.youtube.com/@sparkgamerz"><i class="fa fa-youtube-play" style="color: #c4302b;"
                    aria-hidden="true" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"></i></a>
            <a href="https://github.com/Mohsi777999"><i class="fa fa-github" style="color: #d2deed;" aria-hidden="true"
                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"></i>
        </div></a>
        <div class="footer-copyright"> <!-- Parent Div  -->
            <p>copyright @2024 GameVerse</p>
            <p>Owner: Mr.MOHSIN</p>
        </div>
    </footer>

    <!-- Footer Code End Here  -->

</body>

</html>