<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsive Contact Us Form | CodingLab </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      width: 100%;
    }

    .containerr {
      width: 85%;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 6px;
      padding: 20px 60px 30px 40px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      color: white;
    }

    .containerr .contentr {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .containerr .contentr .left-sider {
      width: 25%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-top: 15px;
      position: relative;
    }

    .contentr .left-sider::before {
      content: '';
      position: absolute;
      height: 70%;
      width: 2px;
      right: -15px;
      top: 50%;
      transform: translateY(-50%);
      background: #afafb6;
    }

    .contentr .left-sider .details {
      margin: 14px;
      text-align: center;
    }

    .contentr .left-sider .details i {
      font-size: 30px;
      color: #3e2093;
      margin-bottom: 10px;
    }

    .contentr .left-sider .details .topic {
      font-size: 18px;
      font-weight: 500;
    }

    .contentr .left-sider .details .text-one,
    .contentr .left-sider .details .text-two {
      font-size: 14px;
      color: #afafb6;
    }

    .containerr .contentr .right-sider {
      width: 75%;
      margin-left: 75px;
    }

    .content .right-side .topic-text {
      font-size: 23px;
      font-weight: 600;
      color: #3e2093;
    }

    .right-side .input-box {
      height: 50px;
      width: 100%;
      margin: 12px 0;
    }

    .right-side .message-box {
      min-height: 110px;
    }

    .right-side .input-box textarea {
      padding-top: 6px;
    }

    .right-side .button {
      display: inline-block;
      margin-top: 12px;
    }

    .input-box input {
      padding: 10px 20px
    }

    .message-box textarea {
      padding: 10px 20px
    }

    .map-locate {
      background: rgba(255, 255, 255, 0.2);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      width: 100%;
      padding: 10px 10px;
      margin-bottom: 100px;
    }

    @media (max-width: 950px) {
      .container {
        width: 90%;
        padding: 30px 40px 40px 35px;
      }

      .container .content .right-side {
        width: 75%;
        margin-left: 55px;
      }
    }

    @media (max-width: 820px) {
      .container {
        margin: 40px 0;
        height: 100%;
      }

      .container .content {
        flex-direction: column-reverse;
      }

      .container .content .left-side {
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
      }

      .container .content .left-side::before {
        display: none;
      }

      .container .content .right-side {
        width: 100%;
        margin-left: 0;
      }

      .input-box input {
        padding: 10px 20px
      }

      .message-box textarea {
        padding: 10px 20px;
        width: 100%;
      }

      .contentr .left-sider .details .text-one,
      .contentr .left-sider .details .text-two {
        font-size: 14px;
        color: #afafb6;
        width: 100vw;
      }

      .containerr .contentr {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        gap: 50px;
      }

      .contentr .left-sider::before {
        display: none;
      }

      .containerr .contentr .right-sider {
        width: 100%;
        margin-left: 0px;
      }
    }
  </style>
</head>

<body>
  <?php include ("navbar.php"); ?>
  <div class="containerr container my-5 py-5">
    <div class="contentr">
      <div class="left-sider">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-sider">
        <div class="topic-text">
          <h3>Send us a message</h3>
        </div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from
          here. It's my pleasure to help you.</p>
        <form method="POST">
          <div class="input-box">
            <input type="text" name="hname" placeholder="Enter your name" required> &nbsp;
            <input type="email" name="hemail" placeholder="Enter your email" required>
          </div>
          <div class="message-box my-3">
            <textarea name="helpm" type="text" name="hmsg" cols="50" rows="4" placeholder="Drop your message here"
              required></textarea>
          </div>
          <input type="submit" class="btn btn-primary" name="helpbtn" required value="Send Now">
        </form>
      </div>
    </div>
  </div>

  <?php

  if (isset($_POST['helpbtn'])) {
    $hname = $_POST['hname'];
    $hemail = $_POST['hemail'];
    $hmsg = $_POST['helpm'];

    $sqlhelp = "INSERT INTO `help`(`person_name`, `person_email`, `person_msg`) VALUES ('$hname','$hemail','$hmsg')";
    $resulthelp = mysqli_query($conn, $sqlhelp);
  }

  ?>

  <div class="map-locate container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7234.818836623535!2d67.12368408069563!3d24.952181360722815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33883a37ea445%3A0x4d5f7df77a3eb5b1!2sGulzar-e-Hijri%20Sachal%20Goth%20Gulzar%20E%20Hijri%20Scheme%2033%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1716080833678!5m2!1sen!2s"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <?php include ("footer.php"); ?>
  <script src="./script.js"></script>
</body>

</html>