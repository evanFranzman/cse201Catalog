<!DOCTYPE html>
<html>
<head>
    <!-- Tags and Bootstrap CSS from getBootstrap.com
    Title: Introduction
    Author: getBootstrap.com
    Date: 2020
    Code Version: 1.0
    Availability: https://getbootstrap.com/docs/4.4/getting-started/introduction/ 
    -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="game_style.css">
  
<style>
	<!––Code based off w3 Schools 
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
  font-family: Courier New;
  padding: 10px;
  background: #393e41;
}


/* Header/Blog Title */
.header {
  padding: 30px;
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


/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}


/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Footer */
.footer {
  padding: 5px;
  text-align: right;
  background: #333;
  color: #f2f2f2;
}


.footer h2{
  text-align: left;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}


/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
<title>Game Gazette: Create an Account</title>
</head>
<body>

<div class="header">
  <h1>Game Gazette</h1>
  <p>**Insert slogan here</p>
</div>

<div class="topnav">
  <a href='home_page.php'>Game List</a>
  <a href="requestReview.php">Request a Review</a>
  <a href="login.php" style="float:right">Login</a>
  
</div>

	<div class="card">
<h2>Request a Review</h2>
      <form>
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com">
       </div>
       <div class="form-group">
    <label for="gameRequested">Name of Game</label>
    <input type="text" class="form-control" id="gameRequested" placeholder="Name of Game"> 
  </div>
	<div class="form-group">
		<label for="details">Details</label>
		<textarea class="form-control" id="details" name="details" rows="3"></textarea>
	</div>
    <button type="submit" class="btn btn-primary">Submit</button>
      </form>
	</div>

<div class="footer">
  <p>
  Scrum Bags Corp.
  </p>
  <a href="about_us.html">About Us</a>
</div>

</body>
</html>



