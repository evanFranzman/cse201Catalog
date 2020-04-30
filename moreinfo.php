<!DOCTYPE html>
<html>
<head>
<!--
  Bootstrap documentation found on jsfiddle,
  Author: Bootstrap
  Date:  
  Type: documentation
  Bootstrap docs: https://getbootstrap.com/docs

-->
<style>
<!Code based off w3 Schools 
Title: Responsive Website Layout
Author: W3Schools 
Date: 2020
Code Version: 1.0
Availabilty: https://www.w3schools.com/css/tryit.asp?filename=trycss_website_layout_blog
-->
* {
  box-sizing: border-box;
}

body {
  font-family: "Arial Black", Gadget, sans-serif;
  padding: 10px;
  background: #393e41;
}


/* Header/Blog Title */
.header {
  padding: 30px;
  font-family: Impact, Charcoal, sans-serif;
  text-align: center;
  background: #7B868C;
}

.header h1 {
  font-size: 50px;
}

h2 {
  text-align: center;
}

.header p {
  font-style: italic;
}

.card{
  background-color: #7B868C;
  padding-top: 5px;
  padding-left: 5px;
  padding-bottom: 5px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #256EFF;
  color: black;
}

ul {
  list-style-image: url('https://at-cdn-s01.audiotool.com/2014/05/03/documents/NVvFtqKblBCxCJRsDwfDG9L6eb9/0/cover256x256-9a3514db6df04c81a0a44c4108876723.jpg');
  list-style-position: inside;
}

img.aboutImage{
  height: 200px;
  width: 200px;
}


/* Footer */
.footer {
  padding: 5px;
  text-align: right;
  background: #333;
  color: #f2f2f2;
}

</style>
<title>Game Gazette</title>
</head>
<body>

<div class="header">
  <h1>Game Gazette</h1>
  <p>**Insert slogan here</p>
</div>

<div class="topnav">
  <a href='home_page.html'>Game List</a>
  <a href="#">Request a Review</a>
  <a href="login.html" style="float:right">Login</a>
</div>

    <div class="card">
      <h2 id="game_name">More Info</h2>
	<div>
		GameName
	</div>
	<div>
		publisher
	</div>
	<img src="" alt="Picture of the game">
    </div>
</div>

<div class="footer">
  <p>
  Scrum Bags Corp.
  </p>
  <a href="about_us.html">About Us</a>
</div>

</body>
</html>
