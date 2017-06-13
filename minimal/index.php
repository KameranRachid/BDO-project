<?php

include 'loginSystem.php';
include 'navbar.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Aquiver
      
    </title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
      <link href="../assets/css/toolkit-minimal.css" rel="stylesheet">
      <link href="../assets/css/application-minimal.css" rel="stylesheet">
    

    

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      /* …curses ios, etc… */
      @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
          width: 1px;
          min-width: 100%;
          *width: 100%;
        }
        #stage {
          height: 1px;
          overflow: auto;
          min-height: 100vh;
          -webkit-overflow-scrolling: touch;
        }
      }
    </style>
  </head>


<body>
  






<div class="block app-block-intro">
  <div class="container text-center">
    <h1 class="block-title m-b-sm text-uppercase app-myphone-brand">WELCOME TO AQUIVER</h1>
    <p class="lead m-b-lg p-b-md">Friendly PVE/PVP Guild</p>
    <img src="../assets/img/Black-Desert-Online.jpg">
  </div>
</div>

<div class="block block-bordered-lg">
  <div class="container text-center app-translate-15" data-transition="entrance">
    <blockquote class="pull-quote">
      <img class="img-circle" src="../assets/img/black_desert_by_ru_devlin-d9evffh.png.743aa58c3558b0d0ab9bb0f44e7b6e03.png">
      <p>
        Some random text will be added sooner or later
      </p>
      <cite>Sumeba miyako</cite>
    </blockquote>
  </div>
</div>

<div class="block block-bordered-lg p-b-0 app-block-stats">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-6">
        <img
          src="../assets/img/black-desert-online-wallpaper-images-11.jpg"
          class="app-translate-5"
          data-transition="entrance">
        <hr class="m-t-0 m-b-lg m-x-auto visible-xs">
      </div>
      <div class="col-md-5 col-sm-6 text-xs-center text-sm-left">
        <p class="lead">
          A small introduction to the guild. Wohoooo! <br/>
          I've got no ideas what to write here so I am just going to throw in some text 
        </p>
        <div class="row m-y-md">
          <div class="col-xs-6">
            <div class="statcard">
              <h1 class="statcard-number block-title">2</h1>
              <span class="statcard-desc">Nodes</span>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="statcard">
              <h1 class="statcard-number block-title">10</h1>
              <span class="statcard-desc">Groups</span>
            </div>
          </div>
        </div>
        <div class="row hidden-sm">
          <div class="col-xs-6 m-b-lg">
            <div class="statcard">
              <h1 class="statcard-number block-title">10m</h1>
              <span class="statcard-desc">$/day guides</span>
            </div>
          </div>
          <div class="col-xs-6 m-b-lg">
            <div class="statcard">
              <h1 class="statcard-number block-title">100%</h1>
              <span class="statcard-desc">Friendly Users</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block-bordered-lg">
  <div class="container">
    <div class="row">
    </div>
    <div class="row">
      <div class="col-sm-6">
        <ul class="featured-list">
          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span><i class="fa fa-superpowers" aria-hidden="true"></i></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>One of the coolest community</strong></p>
            <p class="featured-list-icon-text">
              We are a very friendly and helpful guild. We are more of a family that cares for the members in our community. Join us today!
            </p>
          </li>

          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span><i class="fa fa-ravelry" aria-hidden="true"></i></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>Easy guides to follow</strong></p>
            <p class="featured-list-icon-text">
              We are always updating and creating the best guides to improve your income and grinding experience.
            </p>
          </li>

        </ul>
      </div>
      <div class="col-sm-6">
        <ul class="featured-list">

          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span><i class="fa fa-bomb" aria-hidden="true"></i></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>We are the BOMB</strong></p>
            <p class="featured-list-icon-text">
              What do we mean by that?, it's really simple. We gather friendly and experienced players to raid in parties the world bosses and node wars.
            </p>
          </li>

          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span><i class="fa fa-circle-o-notch" aria-hidden="true"></i></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>Organised Events</strong></p>
            <p class="featured-list-icon-text">
              Some lorem ipsum since i have no idea what we should add here .
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="block block-bordered-lg p-l-0 p-t-0 p-r-0">
  <div id="carousel-example-generic-2" class="carousel carousel-light slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic-2" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="block">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p class="lead m-x-auto text-center">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<span class="hidden-xs"> but also the leap into electronic .</span>
                </p>
              </div>
            </div>
            <img class="img-responsive m-t-lg app-block-game-img" src="../assets/img/black-desert-online-wallpaper-images-11.jpg">
          </div>
        </div>
      </div>
      <div class="item">
        <div class="block">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p class="lead m-x-auto text-center">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<span class="hidden-xs"> but also the leap into electronic .</span>
                </p>
              </div>
            </div>
            <img class="img-responsive m-t-lg app-block-game-img" src="../assets/img/black-desert-online-wallpaper-images-11.jpg">
          </div>
        </div>
      </div>
      <div class="item">
        <div class="block">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p class="lead m-x-auto text-center">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<span class="hidden-xs"> but also the leap into electronic .</span>
                </p>
              </div>
            </div>
            <img class="img-responsive m-t-lg app-block-game-img" src="../assets/img/black-desert-online-wallpaper-images-11.jpg">
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">
      <span class="icon icon-chevron-thin-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">
      <span class="icon icon-chevron-thin-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="block block-bordered-lg block-overflow-hidden p-b-0 app-block-design">
  <div class="container">
    <div class="row pos-r">
      <div class="col-sm-7 text-xs-center text-sm-left">
        <p class="lead">
          We focus on creating the best and most comfortable community that you have ever been into. An insipration to our comrades and friends that you can trust.
        </p>
        <div class="row">
        </div>
      </div>
    </div>
  </div>
  <div class="text-right app-block-design-img">
    <img src="../assets/img/BlackDesertwallpaperWhite.thumb.png.c7e8c7562bee8c5192f5a8db2f0631ad.png" class="app-translate-50" data-transition="entrance">
  </div>
</div>

<div class="block app-block-footer">
  <div class="container">
    <div class="row text-center">
      <h1>Aquiver BDO</h1>
      <h3 id="copyRight">&copy;Kameran Rachid</h3>
    </div>
  </div>
</div>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>
  </body>
</html>



