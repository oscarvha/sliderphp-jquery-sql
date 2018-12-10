
<header>
    <h1>SITE TITLE</h1>
    <nav>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>
</header>
<head>
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">

</head>
<section class="main-slider">
    <div class="item image">
        <span class="loading">Loading...</span>
        <figure>
            <div class="slide-image slide-media" style="background-image:url('https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRkY4S0JDTk1BbE0');">
                <img data-lazy="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRkY4S0JDTk1BbE0" class="image-entity" />
            </div>
            <figcaption class="caption">Static Image</figcaption>
        </figure>
    </div>
    <div class="item vimeo" data-video-start="4">
        <iframe class="embed-player slide-media" src="https://player.vimeo.com/video/217885864?api=1&byline=0&portrait=0&title=0&background=1&mute=1&loop=1&autoplay=0&id=217885864" width="980" height="520" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <p class="caption">Vimeo</p>
    </div>
    <div class="item image">
        <figure>
            <div class="slide-image slide-media" style="background-image:url('https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM');">
                <img data-lazy="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="image-entity" />
            </div>
            <figcaption class="caption">Static Image</figcaption>
        </figure>
    </div>
    <div class="item youtube">
        <iframe class="embed-player slide-media" width="980" height="520" src="https://www.youtube.com/embed/tdwbYGe8pv8?enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&playlist=tdwbYGe8pv8&start=102" frameborder="0" allowfullscreen></iframe>
        <p class="caption">YouTube</p>
    </div>
    <div class="item image">
        <figure>
            <div class="slide-image slide-media" style="background-image:url('https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLSlBkWDBsWXJNazQ');">
                <img data-lazy="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLSlBkWDBsWXJNazQ" class="image-entity" />
            </div>
            <figcaption class="caption">Static Image</figcaption>
        </figure>
    </div>
    <div class="item video">
        <video class="slide-video slide-media" loop muted preload="metadata" poster="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLSXZCakVGZWhOV00">
            <source src="https://player.vimeo.com/external/138504815.sd.mp4?s=8a71ff38f08ec81efe50d35915afd426765a7526&profile_id=112" type="video/mp4" />
        </video>
        <p class="caption">HTML 5 Video</p>
    </div>
</section>
<section class="container">
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.</p>
    </div>
</section>

<style>
    *, *:before, *:after {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body {
        font-family: Arial, "Hiragino Kaku Gothic Pro W3", Meiryo, sans-serif;
        background-color: #2d3042;
        position: relative;
        color: #efefef;
        text-align: center;
    }
    body a, body a:visited {
        color: #efefef;
        text-decoration: none;
    }
    body a:hover {
        color: #fff;
    }

    .caption, .slick-slide::before, .slick-slide {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .slick-slide::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 60px;
        padding: 0 5%;
        text-align: left;
        z-index: 1;
    }
    header h1 {
        display: inline-block;
        font-size: 22px;
        font-weight: bold;
        padding-top: 18px;
    }
    header nav {
        display: inline-block;
        float: right;
    }
    header nav ul li {
        display: inline-block;
        vertical-align: top;
        font-size: 13px;
    }
    header nav ul li a {
        display: block;
        padding: 24px 15px;
    }
    header nav ul li a:hover {
        background-color: rgba(255, 255, 255, 0.18);
    }

    .main-slider {
        position: relative;
        width: 100%;
        height: 38vw;
        min-height: 8vw;
        margin-bottom: 50px;
        opacity: 0;
        visibility: hidden;
        transition: all 1.2s ease;
    }
    .main-slider.slick-initialized {
        opacity: 1;
        visibility: visible;
    }

    .slick-slide {
        position: relative;
        height: 38vw;
    }
    .slick-slide::before {
        background-color: #000;
        opacity: 0.3;
        z-index: 1;
    }
    .slick-slide video {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        transform: translate(-50%, -50%);
    }
    .slick-slide iframe {
        position: relative;
        pointer-events: none;
    }
    .slick-slide figure {
        position: relative;
        height: 100%;
    }
    .slick-slide .slide-image {
        opacity: 0;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: all 0.8s ease;
    }
    .slick-slide .slide-image.show {
        opacity: 1;
    }
    .slick-slide .image-entity {
        width: 100%;
        opacity: 0;
        visibility: hidden;
    }
    .slick-slide .loading {
        position: absolute;
        top: 44%;
        left: 0;
        width: 100%;
    }
    .slick-slide .slide-media {
        animation: slideOut 0.4s cubic-bezier(0.4, 0.29, 0.01, 1);
    }
    .slick-slide.slick-active {
        z-index: 1;
    }
    .slick-slide.slick-active .slide-media {
        animation: slideIn 2.4s cubic-bezier(0.4, 0.29, 0.01, 1);
    }
    .slick-slide.slick-active .caption {
        opacity: 1;
        transform: translateY(0);
        transition: all 0.7s cubic-bezier(0.32, 0.34, 0, 1.62) 0.6s;
    }

    .caption {
        position: absolute;
        top: 44%;
        left: 5%;
        text-align: center;
        padding: 20px;
        border: 3px solid;
        color: #fff;
        margin: 0;
        font-size: 40px;
        font-weight: bold;
        letter-spacing: 0.02em;
        opacity: 0;
        z-index: 1;
        transition: all 0.3s ease;
        transform: translateY(100px);
    }

    .slick-dots {
        text-align: center;
        padding-top: 15px;
    }
    .slick-dots li {
        display: inline-block;
        vertical-align: top;
        margin: 0 8px;
    }
    .slick-dots li button {
        width: 16px;
        height: 16px;
        border: none;
        cursor: pointer;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0 0 0 0 transparent;
        vertical-align: middle;
        color: #fff;
        background-color: #fff;
        transition: all 0.3s ease;
        opacity: 0.4;
    }
    .slick-dots li button:focus {
        outline: none;
    }
    .slick-dots li button:hover {
        opacity: 1;
    }
    .slick-dots li.slick-active button {
        border-color: #2d3042;
        box-shadow: 0 0 0 2px #fff;
        opacity: 1;
    }

    .container {
        background-color: #f2f2f2;
        color: #444;
        line-height: 1.6;
        padding: 40px 0;
    }
    .container .content {
        width: 90%;
        max-width: 980px;
        margin: 0 auto;
    }
    .container p {
        margin-bottom: 40px;
    }

    @keyframes slideIn {
        from {
            filter: blur(15px);
        }
        to {
            filter: blur(0);
        }
    }
    @keyframes slideOut {
        from {
            filter: blur(0);
        }
        to {
            filter: blur(15px);
        }
    }
</style>
<script>
  var slideWrapper = $(".main-slider"),
    iframes = slideWrapper.find('.embed-player'),
    lazyImages = slideWrapper.find('.slide-image'),
    lazyCounter = 0;

  // POST commands to YouTube or Vimeo API
  function postMessageToPlayer(player, command){
    if (player == null || command == null) return;
    player.contentWindow.postMessage(JSON.stringify(command), "*");
  }

  // When the slide is changing
  function playPauseVideo(slick, control){
    var currentSlide, slideType, startTime, player, video;

    currentSlide = slick.find(".slick-current");
    slideType = currentSlide.attr("class").split(" ")[1];
    player = currentSlide.find("iframe").get(0);
    startTime = currentSlide.data("video-start");

    if (slideType === "vimeo") {
      switch (control) {
        case "play":
          if ((startTime != null && startTime > 0 ) && !currentSlide.hasClass('started')) {
            currentSlide.addClass('started');
            postMessageToPlayer(player, {
              "method": "setCurrentTime",
              "value" : startTime
            });
          }
          postMessageToPlayer(player, {
            "method": "play",
            "value" : 1
          });
          break;
        case "pause":
          postMessageToPlayer(player, {
            "method": "pause",
            "value": 1
          });
          break;
      }
    } else if (slideType === "youtube") {
      switch (control) {
        case "play":
          postMessageToPlayer(player, {
            "event": "command",
            "func": "mute"
          });
          postMessageToPlayer(player, {
            "event": "command",
            "func": "playVideo"
          });
          break;
        case "pause":
          postMessageToPlayer(player, {
            "event": "command",
            "func": "pauseVideo"
          });
          break;
      }
    } else if (slideType === "video") {
      video = currentSlide.children("video").get(0);
      if (video != null) {
        if (control === "play"){
          video.play();
        } else {
          video.pause();
        }
      }
    }
  }

  // Resize player
  function resizePlayer(iframes, ratio) {
    if (!iframes[0]) return;
    var win = $(".main-slider"),
      width = win.width(),
      playerWidth,
      height = win.height(),
      playerHeight,
      ratio = ratio || 16/9;

    iframes.each(function(){
      var current = $(this);
      if (width / ratio < height) {
        playerWidth = Math.ceil(height * ratio);
        current.width(playerWidth).height(height).css({
          left: (width - playerWidth) / 2,
          top: 0
        });
      } else {
        playerHeight = Math.ceil(width / ratio);
        current.width(width).height(playerHeight).css({
          left: 0,
          top: (height - playerHeight) / 2
        });
      }
    });
  }

  // DOM Ready
  $(function() {
    // Initialize
    slideWrapper.on("init", function(slick){
      slick = $(slick.currentTarget);
      setTimeout(function(){
        playPauseVideo(slick,"play");
      }, 1000);
      resizePlayer(iframes, 16/9);
    });
    slideWrapper.on("beforeChange", function(event, slick) {
      slick = $(slick.$slider);
      playPauseVideo(slick,"pause");
    });
    slideWrapper.on("afterChange", function(event, slick) {
      slick = $(slick.$slider);
      playPauseVideo(slick,"play");
    });
    slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
      lazyCounter++;
      if (lazyCounter === lazyImages.length){
        lazyImages.addClass('show');
        // slideWrapper.slick("slickPlay");
      }
    });

    //start the slider
    slideWrapper.slick({
      // fade:true,
      autoplaySpeed:500,
      autoplay:true,
      lazyLoad:"progressive",
      speed:600,
      arrows:false,
      dots:true,
      cssEase:"cubic-bezier(0.87, 0.03, 0.41, 0.9)"
    });
  });

  // Resize event
  $(window).on("resize.slickVideoPlayer", function(){
    resizePlayer(iframes, 16/9);
  });
</script>