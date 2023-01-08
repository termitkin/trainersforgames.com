<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title><?php wp_title('', true);?> | Trainers For Games</title>
<?php wp_head();?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="/favicon.ico">
<link rel="preconnect" href="https://pagead2.googlesyndication.com">
<script>
(() => {
    const themeName = localStorage.getItem('theme-name') || 'auto';

    document.documentElement.setAttribute('data-theme-name', themeName);
})();
</script>
<style>
:root {
    --bg-main: #fff;
    --bg-secondary: #007dad;
    --link: #007dad;
    --text-main: #444;
    --text-light: #fff;
    --accent: #e6005c;
    --dark-grey: #333;
    --light-yellow: #ffc;
}
@media (prefers-color-scheme: dark) {
    :root:not([data-theme-name='light']) {
        --bg-main: #12202e;
        --bg-secondary: #13314d;
        --link: #00b8ff;
        --text-main: #ddd;
        --accent: #a3ff00;
    }
}
:root[data-theme-name='dark'] {
    --bg-main: #12202e;
    --bg-secondary: #13314d;
    --link: #00b8ff;
    --text-main: #ddd;
    --accent: #a3ff00;
}
html {
    height: 100%;
}
body {
    height: calc(100% - 50px);
    background-color: var(--bg-main);
    font-family: Arial, Helvetica, sans-serif;
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
    background-color: var(--bg-secondary);
    display: flex;
    justify-content: center;
    padding: 1rem;
}
@media screen and (min-width: 576px) {
    .header {
        height: 40px;
        padding: 0;
    }
}
.header__content {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    gap: 1rem;
}
@media screen and (min-width: 576px) {
    .header__content {
        width: 780px;
        padding: 0 15px;
        flex-direction: row;
        justify-content: space-between;
        gap: unset;
    }
}
.search-form {
    width: 100%;
    max-width: 260px;
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    align-items: center;
}
.site-logo {
    color: #fff;
    font-size: 1rem;
    font-weight: 700;
    text-decoration: none;
    transition: color 0.25s;
}
.site-logo:focus,
.site-logo:hover {
    color: var(--light-yellow);
    text-decoration: none;
}
@media screen and (min-width: 576px) {
    .site-logo {
        margin-right: auto;
    }
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
        min-height: calc(100% - 90px);
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
    color: var(--text-main);
    font-size: 0.8125rem;
    line-height: 1.4;
}
.post__password {
    color: var(--accent);
    font-weight: bold;
}
.post__trainer-version {
    color: var(--accent);
}
.post p {
    margin: 13px 0;
}
.post a {
    color: var(--link);
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
}
@media screen and (min-width: 992px) {
    .sidebar {
        margin: 0;
    }
}
.post-heading {
    display: inline;
    font-size: 1.125rem;
    color: var(--link);
    font-weight: 400;
}
.popular-posts-heading {
    margin: 12px 0 3px 0;
    font-size: 1.125rem;
    color: var(--link);
}
.popular-posts-list {
    max-width: 260px;
    list-style-type: none;
    font-size: 0.75rem;
}
.popular-posts-list__item {
    margin: 0 0 6px 0;
}
.popular-posts-list__item:last-child {
    margin: 0;
}
.link {
    text-decoration: underline;
    color: var(--link);
    font-size: 0.8125rem;
    font-weight: 400;
}
.link:hover,
.link:focus {
    text-decoration: none;
}
.link_size_big {
    font-size: 1.125rem;
}
.link_color_white {
    color: #fff;
}
.logged-in-as a,
.comment-reply-title a{
    color: var(--link);
}
.comment-reply-title a:hover,
.comment-reply-title a:focus,
.logged-in-as a:hover,
.logged-in-as a:focus {
    text-decoration: none;
}
.comment-list,
.children {
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.comment-list,
.comment-body,
.comments-title,
.comment-reply-title {
    color: var(--text-main);
    font-size: 0.875rem;
}
.comment-body {
    word-wrap: break-word;
    padding: 10px;
    border-radius: 5px;
    outline: 1px dashed var(--link);
    background-color: var(--bg-main);
}
.comment-meta {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    background-color: var(--bg-secondary);
    color: var(--text-light);
    padding: 5px;
    border-radius: 5px;
}
.comment-metadata {
    display: flex;
}
.comment-metadata a {
    color: var(--text-light);
    text-decoration: underline;
}
.comment-metadata a:hover {
    color: var(--text-light);
    text-decoration: none;
}
.edit-link {
    margin-left: auto;
}
.comment {
    margin-top: 15px;
}
.comment-content {
    word-wrap: break-word;
}
.children {
    width: 95%;
    margin-left: auto;
}
.comment-reply-link {
    color: var(--link);
    text-decoration: underline;
}
.comment-reply-link:hover {
    text-decoration: none;
}
.comment-form,
.comment-notes,
.comment-form-comment,
.comment-form-author {
    display: flex;
    flex-direction: column;
    margin: 0 0 15px 0;
    font-size: 0.875rem;
    color: var(--text-main);
}
.comment-form-comment,
.comment-form-author {
    font-size: 0.875rem;
    align-items: flex-start;
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
    border: 1px solid var(--link);
    margin: 0;
    padding: 7px;
    background-color: var(--bg-main);
    transition: background-color 0.25s;
    box-sizing: border-box;
    color: var(--text-main);
    font-size: 0.83125rem;
    line-height: 0.83125rem;
}
#author,
#comment {
    width: 100%;
    margin-top: 5px;
}
#comment {
    max-width: 100%;
    min-width: 100%;
}
.input_type_search {
    border: none;
    border-radius: 3px 0 0 3px;
    font-size: 0.83125rem;
    line-height: 0.83125rem;
}
.submit {
    min-height: 30px;
    background-color: var(--bg-secondary);
    color: var(--text-light);
    border: unset;
    border-radius: 3px 3px 3px 3px;
    cursor: pointer;
    padding: 7px;
    font-size: 0.83125rem;
    line-height: 0.83125rem;
}
.submit_type_search {
    height: 30px;
    border: 0;
    border-radius: 0 3px 3px 0;
    border-left: 1px solid var(--link);
    font-size: 0.83125rem;
    line-height: 0.83125rem;
    background-color: var(--bg-main);
    color: var(--text-main);
}
#comment {
    min-height: 100px;
}
.footer {
    padding: 15px;
    background-color: var(--bg-secondary);
    color: #fff;
    margin-top: 20px;
    font-size: 0.875rem;
    display: flex;
    justify-content: center;
    box-sizing: border-box;
}
@media screen and (min-width: 576px) {
    .footer {
        padding: 7px 15px;
    }
}
.footer__inner {
    width: 100%;
    max-width: 780px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
}
@media screen and (min-width: 576px) {
    .footer__inner {
        flex-direction: row;
        justify-content: space-between;
    }
}
.footer__content {
    min-height: 36px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}
@media screen and (min-width: 576px) {
    .footer__content_align_left {
        align-items: flex-start;
    }
    .footer__content_align_right {
        align-items: flex-end;
    }
}
.pagination {
    width: 100%;
    max-width: 500px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
@media screen and (min-width: 576px) {
    .pagination {
        justify-content: flex-start;
    }
}
.page-numbers {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 4px 0 0;
    padding: 5px 10px 5px 10px;
    background-color: var(--link);
    color: #fff;
    text-decoration: none;
    border-radius: 3px;
}
.page-numbers:hover,
.page-numbers:focus {
    background-color: var(--bg-secondary);
}
.dots:hover,
.dots:focus {
    background-color: var(--bg-secondary);
}
.current,
.current:hover,
.current:focus {
    background-color: var(--dark-grey);
}
.google-ads-and-comments-wrapper {
    width: 100%;
    max-width: 500px;
    min-height: 307px;
}
.social-network-like-buttons {
    max-width: 500px;
    height: 20px;
    margin-top: 10px;
}
.leave-a-comment {
    max-width: 500px;
    margin: 10px 0;
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--link);
}
.post-views-label,
.post-views-count {
    color: var(--text-main);
    font-size: 0.75rem;
    display: inline;
}
.you-can-download {
    width: 100%;
    max-width: 500px;
    margin-bottom: 15px;
    color: var(--text-main);
}
.theme-switchers {
    display: flex;
    margin: 0.75rem 0;
    align-items: center;
    gap: 0.5rem;
}
@media screen and (min-width: 576px) {
    .theme-switchers {
        margin: 0 1rem 0 auto;
    }
}
.theme-switcher {
    width: 36px;
    height: 36px;
    background-color: transparent;
    border: unset;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.15s;
}
.theme-switcher:hover {
    cursor: pointer;
    background-color: cadetblue;
}
.theme-switcher svg {
    fill: currentColor;
}
</style>
</head>
<body>
  <header role="banner" class="header">
    <div class="header__content">
      <a class="site-logo" href="/" title="Home page">TrainersForGames.Com</a>
      <form role="search" class="search-form" id="searchform" action="//trainersforgames.com/" method="get">
        <input class="input input_type_search" aria-label="Enter here title of a game to find a trainer" name="s" type="text" placeholder="Find a trainer..">
        <button class="submit submit_type_search" aria-label="Search button" id="searchsubmit" type="submit">Search</button>
      </form>
    </div>
  </header>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12705312-13', 'trainersforgames.com',{'siteSpeedSampleRate': 100});
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
  </script>
