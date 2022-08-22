<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Raed Khayat</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <style>
    /* Style Settings */
    body {
      background-color: white;
      font-family: "Roboto", sans-serif;
      margin: auto;
      padding: 10px;
      display: flex column;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      align-content: center;
    }

    .Bottom-Section {
      margin: auto;
      width: 50%;
      align-items: center;
    }

    #userPhoto {
      width: 150px;
      height: 150px;
      display: block;
      margin: 45px auto 30px;
      border-radius: 50%;
      border: solid #e6e6e6 2px;
      box-shadow: 0px 7px 15px rgba(20, 20, 20, 0.5);
    }

    #userName {
      color: #1c1c1c;
      font-size: 25px;
      display: block;
      margin: auto;
      width: 50%;
      text-align: center;
      text-decoration: none;
    }

    #links {
      max-width: 600px;
      width: auto;
      margin: 25px auto;
      display: flex column;
      flex-wrap: wrap;
      padding: 10px;
    }

    .link {
      display: block;
      background-color: #e6e6e6;
      color: #1c1c1c;
      font-family: inherit;
      text-align: center;
      margin-bottom: 20px;
      padding: 17px;
      text-decoration: none;
      font-size: 20px;
      border: solid #e6e6e6 2px;
      box-shadow: 0px 7px 15px rgba(20, 20, 20, 0.5);
    }

    .link:hover {
      background-color: #1c1c1c;
      color: #e6e6e6;
    }

    .icon-container {
      display: flex;
      justify-content: space-evenly;
      padding: 15px;
      margin: auto;
      width: 60%;
      align-items: center;
      text-align: center;
    }

    .icon {
      font-size: 30px;
      color: #bbb;
      opacity: 0.6;
      height: 30px;
      text-decoration: none;
    }

    .icon:hover {
      color: black;
      opacity: 1.6;
    }

    p {
      text-align: center;
      color: #bbb;
    }

    /*This Glowing Hover Effect was made by qpi65 , i used it to Highlight my name */
    h1 {
      color: #484848;
      font-size: 30px;
      font-weight: bold;
      font-family: monospace;
      letter-spacing: 7px;
      cursor: pointer
    }

    h1 span {
      transition: .5s linear
    }

    h1:hover span {
      color: Black;
      text-shadow:
        0 0 10px #fff,
        0 0 20px white,
        0 0 40px black;
    }

    /*This Glowing Hover Effect was made by qpi65 , i used it to Highlight my name */
  </style>
  <img id="userPhoto" src="https://i.imgur.com/vQ6CDIK.png" alt="User Photo">
  <a class="icon" href="https://codepen.io/co0lray" id="userName" target="_blank">
    <h1><span>Raed Khayat</span></h1>
  </a>
  <div id="links">
    <a class="link" href="https://github.com/co0lray" target="_blank"><i class="fa fa-github" style="padding:10px"></i>Github</a>
    <a class="link" href="https://stackoverflow.com/users/6804807/co0lray" target="_blank"><i class="fa fa-stack-overflow" style="padding:10px"></i>Stackoverflow</a>
    <a class="link" href="https://www.reddit.com/user/co0lray" target="_blank"><i class="fa fa-reddit" style="padding:10px"></i> Reddit </a>
    <a class="link" href="https://www.linkedin.com/in/raed-khayat/" target="_blank"><i class="fa fa-linkedin-square" style="padding:10px"></i>Linkedin</a>
    <a class="link" href="https://twitter.com/co0lray" target="_blank"><i class="fa fa-twitter-square" style="padding:10px"></i> Twitter</a>
    <a class="link" href="https://www.instagram.com/co0l_ray/" target="_blank"><i class="fa fa-instagram" style="padding:10px"></i>Instagram</a>
    <a class="link" href="https://www.youtube.com/channel/UC-XXyJ8xlNGUQx7Isxzsp2w" target="_blank"><i class="fa fa-youtube" style="padding:10px"></i>Youtube</a>
    <a class="link" href="https://www.twitch.tv/co0lray" target="_blank"><i class="fa fa-twitch" style="padding:10px"></i>Twitch</a>
    <a class="link" href="https://www.tiktok.com/@co0lray?lang=en" target="_blank"><i class="fab fa-tiktok" style="padding:10px"></i>TikTok</a>
  </div>
  <div class="Bottom-Section">
    <p style="color:black">You Can Also Find me Here:</p>
    <div class="icon-container">
      <a class="icon" href="https://medium.com/@coollray" target="_blank"><i class="fa fa-medium"></i></a>
      <a class="icon" href="https://www.pinterest.com/coollray/" target="_blank"><i class="fa fa-pinterest"></i></a>
      <a class="icon" href="https://co0lray.tumblr.com" target="_blank"><i class="fa fa-tumblr-square"> </i></a>
      <a class="icon" href="https://vimeo.com/co0lray" target="_blank"><i class="fa fa-vimeo"></i></a>
      <a class="icon" href="https://www.snapchat.com/add/raed_khayat" target="_blank"><i class="fa fa-snapchat"></i></a>
    </div>
  </div>
  <footer style="text-align:center;">

    <p style="color:black">Powered by : <a class="icon" href="https://co0lray.github.io/co0lray/" target="_blank">co0lray</p>
  </footer>

  <!-- Javascript -->
  <script src="https://kit.fontawesome.com/7e482ae4fd.js"></script>
</body>

</html>