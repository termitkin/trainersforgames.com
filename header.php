<!doctype html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title('', true);?> | Trainers For Games</title>
  <?php wp_head();?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="fb:admins" content="100001912999823"/>
  <meta property="fb:app_id" content="204938163503477" />
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="dns-prefetch" href="https://pagead2.googlesyndication.com">
  <link rel="dns-prefetch" href="https://google-analytics.com">
  <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net">
  <link rel="dns-prefetch" href="https://adservice.google.com">
  <link rel="dns-prefetch" href="https://platform.twitter.com">
  <link rel="dns-prefetch" href="https://syndication.twitter.com">
  <link rel="dns-prefetch" href="https://www.facebook.com">
  <link rel="dns-prefetch" href="https://connect.facebook.net">
  <style>
  * {
    box-sizing: border-box;
    font-family: arial, sans-serif;
  }
  html, body {
    overflow-x: hidden;
  }
  body, div, header, aside, footer, input, button, ul {
    margin: 0;
    padding: 0;
  }
  .google-ads-in-header {
    width: 728px;
    margin: 20px auto 0 auto;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .google-ads-in-header {
      width: 100%;
      margin: 20px auto 0 auto;
    }
  }

  .header {
    background-color: #09c;
    height: 40px;
    display: flex;
    justify-content: center;
  }

  .header__content-wrapper {
    width: 780px;
    height: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .header__content-wrapper {
      width: 100%;
      height: 40px;
      margin: 0 auto;
      padding: 0 1%;
    }
  }

  .search-form {
    width: 260px;
    height: 30px;
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    align-items: center;
  }

  .search-form__input {
    width: 200px;
    height: 30px;
    border-radius: 3px 0 0 3px;
    border: 0;
    margin: 0;
    padding: 7px;
  }

  .search-form__button {
    height: 30px;
    background-color: #fff;
    border: 0;
    border-radius: 0 3px 3px 0;
    border-left: 1px solid #ccc;
    cursor: pointer;
    padding: 7px;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .search-form {
      width: 44%;
    }

    .search-form__input {
      width: 48%;
      height: 30px;
    }

    .search-form__button {
      width: 40%;
      height: 30px;
    }
  }

  .site-logo {
    width: 206px;
    height: 23px;
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    text-decoration: none;
  }

  .site-logo:hover {
    text-decoration: none;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .site-logo {
      width: 54%;
    }
  }

  .content-and-sidebar-wrapper {
    width: 780px;
    height: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .content-and-sidebar-wrapper {
      width: 100%;
    }
  }

  .post {
    width: 500px;
    margin-top: 10px;
    color: #444;
    font-size: 13px;
    line-height: 1.4;
  }
  .post p {
    margin: 13px 0;
  }
  .post strong {
    color: #454545;
  }
  .post a {
    color: #09c;
  }
  .post a:hover {
    text-decoration: none;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .post {
      width: 98%;
    }

    .post img {
      width: 100%;
      max-width: 500px;
      height: auto;
    }
  }

  .posts-wrapper {
    width: 500px;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .posts-wrapper {
      width: 100%;
      padding: 0 1vw;
    }
  }
  
  .sidebar {
    width: 260px;
    min-height: 709px;
    overflow-x: hidden;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .sidebar {
      display: none;
    }
  }

  .post-heading,
  .post-heading__link {
    display: block;
    width: 500px;
    min-height: 25px;
    font-size: 18px;
    color: #09c;
    font-weight: 400;
  }
  .post-heading__link:hover {
    text-decoration: none;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .post-heading,
    .post-heading__link {
      max-width: 98%;
      
    }
  }
  .twitter-timeline {
  	width:260px !important;
  	height:500px !important;
  }
  .popular-posts-heading {
    padding-top: 20px;
    font-size: 18px;
    color: #09c;
  }
  .popular-posts-list {
    width: 260px;
    list-style-type: none;
    font-size: 12px;
  }
  .popular-posts-list__link {
    color: #09c;
  }
  </style>
</head>
<body>
  <header role="banner" class="header">
    <div class="header__content-wrapper">
      <a class="site-logo" href="/" title="Home page">TrainersForGames.Com</a>
      <form role="search" class="search-form" id="searchform" action="//trainersforgames.com/" method="get">
        <input class="search-form__input" aria-label="Enter here title of a game to find a trainer" name="s" type="text" placeholder="Find a trainer..">
        <button class="search-form__button" aria-label="Search button" id="searchsubmit" type="submit">Search</button>
      </form>
    </div>
  </header>

  <div class="google-ads-in-header">
      <!-- trainersforgames в шапке 728px -->
      <ins class="adsbygoogle"
           style="display:inline-block;width:728px;height:90px"
           data-ad-client="ca-pub-3398097190333973"
           data-ad-slot="6194394950"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
  </div>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
  ga('create', 'UA-12705312-13', 'trainersforgames.com',{'siteSpeedSampleRate': 100});
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
  </script>
