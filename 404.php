<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title><?php wp_title('', true);?> | Trainers For Games</title>
<?php wp_head();?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="/favicon.ico">
<style>
* {
  box-sizing: border-box;
  font-family: arial, sans-serif;
}
html, body, div, header, aside, footer, input, button, ul {
  margin: 0;
  padding: 0;
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
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 0 15px;
}
.page-404 {
  max-width: 780px;
  margin: 0 auto;
  padding: 0 15px;
}
.page-404__heading {
  color: #333;
}
.page-404__image {
  width: 100%;
  max-width: 780px;
  height: auto;
}
</style>
</head>
<body>
  <header role="banner" class="header">
    <div class="header__content">
      <a class="site-logo" href="/" title="Home page">TrainersForGames.Com</a>
      <form role="search" class="search-form" id="searchform" action="//trainersforgames.com/" method="get">
        <input class="search-form__input" aria-label="Enter here title of a game to find a trainer" name="s" type="text" placeholder="Find a trainer..">
        <button class="search-form__button" aria-label="Search button" id="searchsubmit" type="submit">Search</button>
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

	<div class="page-404">
        <h1 class="page-404__heading">Error 404: Page not Found</h1>
		<img class="page-404__image" src="<?php echo esc_url( get_template_directory_uri() );?>/404-error/404.jpg" alt="Error 404: Page not Found" />
	</div>
</body>
</html>
