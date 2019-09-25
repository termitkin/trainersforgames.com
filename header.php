<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title><?php wp_title('', true);?> | Trainers For Games</title>
<?php wp_head();?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="/favicon.ico">
<link rel="preconnect" href="https://pagead2.googlesyndication.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://googleads.g.doubleclick.net">
<link rel="preconnect" href="https://adservice.google.com">
<style>
html {
  height: 100%;
}
body {
	height: calc(100% - 50px);
}
body, div, header, aside, footer, input, button, ul {
  margin: 0;
  padding: 0;
}
.google-ads-in-header {
  width: 100%;
  max-width: 728px;
  margin: 20px auto 0 auto;
}
@media screen and (min-width: 992px) {
  .google-ads-in-header {
    width: 728px;
  }
}
.header {
  background-color: #007dad;
  height: 80px;
  display: flex;
  justify-content: center;
}
@media screen and (min-width: 576px) {
  .header {
    height: 40px;
  }
}
.header__content {
  width: 100%;
  height: 80px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  font-family: sans-serif;
}
@media screen and (min-width: 576px) {
  .header__content {
    width: 780px;
    height: 40px;
    padding: 0 15px;
    flex-direction: row;
    justify-content: space-between;
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
  background-color: #fff;
  transition: background-color 0.25s;
  box-sizing: border-box;
}
.search-form__input:hover,
.search-form__input:focus {
  background-color: #ffffcc;
  outline: none;
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
.search-form__button:hover,
.search-form__button:focus {
  background-color: #ffffcc;
  outline: none;
}
.site-logo {
  color: #fff;
  font-size: 20px;
  font-weight: 700;
  text-decoration: none;
  transition: color 0.25s;
}
.site-logo:focus,
.site-logo:hover {
  color: #ffffcc;
  text-decoration: none;
}
.content-and-sidebar-wrapper {
  min-height: calc(100% - 266px);
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding: 0 15px;
}
@media screen and (min-width: 576px) {
  .content-and-sidebar-wrapper {
    min-height: calc(100% - 174px);
  }
}
@media screen and (min-width: 992px) {
  .content-and-sidebar-wrapper {
    flex-direction: row;
    justify-content: space-between;
  }
}
.post {
  width: 100%;
  max-width: 500px;
  margin-top: 10px;
  color: #444;
  font-size: 13px;
  line-height: 1.4;
  font-family: sans-serif;
}
.post__password {
  color: #E60050;
  font-weight: bold;
}
.post__trainer-version {
  color: #E60050;
}
.post p {
  margin: 13px 0;
}
.post strong {
  color: #454545;
}
.post a {
  color: #007dad;
}
.post a:hover,
.post a:focus {
  text-decoration: none;
}
.post img {
  width: 100%;
  max-width: 500px;
  height: auto;
}
.posts-wrapper {
  width: 100%;
  min-height: 100%;
  max-width: 500px;
  margin: 0 auto;
}
@media screen and (min-width: 992px) {
  .posts-wrapper {
    margin: 0;
  }
}
.sidebar {
  display: flex;
  flex-direction: column;
  max-width: 260px;
  overflow-x: hidden;
  margin: 0 auto;
  font-family: sans-serif;
}
@media screen and (min-width: 992px) {
  .sidebar {
    margin: 0;
  }
}
.post-heading {
  display: inline;
  font-size: 18px;
  color: #007dad;
  font-weight: 400;
  font-family: sans-serif;
}
.popular-posts-heading {
  margin: 12px 0 3px 0;
  font-size: 18px;
  color: #007dad;
}
.popular-posts-list {
  max-width: 260px;
  list-style-type: none;
  font-size: 12px;
}
.link {
  text-decoration: underline;
  color: #007dad;
  font-size: 13px;
  font-weight: 400;
  font-family: sans-serif;
}
.link:hover,
.link:focus {
  text-decoration: none;
}
.link_size_big {
  font-size: 18px;
}
.link_color_white {
  color: #fff;
}
.comment-list,
.children {
  padding: 0;
  margin: 0;
  list-style-type: none;
  font-family: sans-serif;
}
.comment-list,
.comment-body,
.comments-title,
.comment-reply-title {
  color: #444;
  font-size: 14px;
  font-family: sans-serif;
}
.comment-content {
  word-wrap: break-word;
}
.comment-metadata {
  display: flex;
}
.comment-metadata a {
  color: #999;
  text-decoration: underline;
}
.comment-metadata a:hover {
  color: #333;
  text-decoration: none;
}
.edit-link {
  margin-left: auto;
}
.comment {
  margin-top: 15px;
}
.comment-content {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 0 10px;
  margin: 10px 0;
}
.children {
  width: 95%;
  margin-left: auto;
}
.comment-form,
.comment-notes,
.comment-form-comment,
.comment-form-author {
  display: flex;
  flex-direction: column;
  margin: 0 0 15px 0;
}
.comment-notes {
  display: none;
}
.input,
#author,
#comment {
  width: 100%;
  height: 30px;
  border-radius: 3px;
  border: 1px solid #ccc;
  margin: 0;
  padding: 7px;
  background-color: #fff;
  transition: background-color 0.25s;
  box-sizing: border-box;
}
#author,
#comment {
  margin-top: 5px;
}
#comment {
  min-width: 100%;
  max-width: 100%;
}
.input_search {
  border: none;
  border-radius: 3px 0 0 3px;
}
.submit {
  height: 30px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 3px 3px 3px 3px;
  cursor: pointer;
  padding: 7px;
}
.submit:hover,
.submit:focus {
  background-color: #ffffcc;
}
.submit_search {
  border: 0;
  border-radius: 0 3px 3px 0;
  border-left: 1px solid #ccc;
}
#comment {
  min-height: 100px;
}
.input:hover,
.input:focus,
#comment:hover,
#comment:focus,
#author:hover,
#author:focus {
  background-color: #ffffcc;
  outline: none;
}
</style>
</head>
<body>
  <header role="banner" class="header">
    <div class="header__content">
      <a class="site-logo" href="/" title="Home page">TrainersForGames.Com</a>
      <form role="search" class="search-form" id="searchform" action="//trainersforgames.com/" method="get">
        <input class="input input_search" aria-label="Enter here title of a game to find a trainer" name="s" type="text" placeholder="Find a trainer..">
        <button class="submit submit_search" aria-label="Search button" id="searchsubmit" type="submit">Search</button>
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
