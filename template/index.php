<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.css">
<style>
   body {
  

  background: gray url(https://subtlepatterns.com/patterns/geometry2.png) repeat 0 0;
  
  
  text-align: center;
  
  
 
   }



    [class*="con"] {
        padding: 1rem;
        background-color:darkred;
        
        color: #fff;
        text-align: center;
        border-radius: 10px;
        
    } 
    [class*="float"] {
        padding: 1rem;
        background-color: darkred;
        margin-top: 15px;
        margin-left: 10px;
        height: 500px;
        width: 125px;
        margin-right: 10px;
        border-radius: 10px;
    }
    [class *="nav"] {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 10px;
       
    
        

    }
    [class *="card"] {
        margin-top: 20px;
        height: 500px;
        border-radius: 10px;
        background-color:grey;
        margin-bottom: 50px;
    }
    
    .profile-card{
  background: linear-gradient(to bottom, rgba(39,170,225,.8), rgba(28,117,188,.8));
  background-size: cover;
  width: 100%;
  min-height: 90px;
  border-radius: 4px;
  padding: 10px 20px;
  color: #fff;
  margin-bottom: 40px;
}

.profile-card img.profile-photo{
  border: 7px solid #fff;
  float: left;
  margin-right: 20px;
  position: relative;
  top: -30px;
  height: 70px;
  width: 70px;
  border-radius: 50%;
}

.profile-card h5 a{
  font-size: 15px;
}

.profile-card a{
  font-size: 12px;
}

/*Newsfeed Links CSS*/

ul.nav-news-feed{
  padding-left: 20px;
  padding-right: 20px;
  margin: 0 0 40px 0;
    background:#fff;
  padding-top:20px;
}

ul.nav-news-feed li{
  list-style: none;
  display: block;
  padding: 15px 0;
}

ul.nav-news-feed li div{
  position: relative;
  margin-left: 30px;
  }

ul.nav-news-feed li div::after{
  content: "";
  width: 100%;
  height: 1px;
  border-top: 1px solid #f1f2f2;
  position: absolute;
  bottom: -15px;
  left: 0;
}

ul.nav-news-feed li a{color: #6d6e71;}

ul.nav-news-feed li i{
  font-size: 18px;
  margin-right: 15px;
  float: left;
}

ul.nav-news-feed i.icon1{color: #8dc63f;}

ul.nav-news-feed i.icon2{color: #662d91;}

ul.nav-news-feed i.icon3{color: #ee2a7b;}

ul.nav-news-fee i.icon4{color: #f7941e;}

ul.nav-news-fee i.con5{color: #1c75bc;}

ul.nav-news-feed i.icon6{color: #9e1f63;}

/*Chat Block CSS*/

#chat-block{
  margin: 0 0 40px 0;
  text-align: center;
  background:#fff;
  padding-top:20px;
}

#chat-block .title{
  background: #8dc63f;
  padding: 2px 20px;
  width: 70%;
  height: 30px;
  border-radius: 15px;
  position: relative;
  margin: 0 auto 20px;
  color: #fff;
  font-size: 14px;
  font-weight: 600;
}

ul.online-users{
  padding-left: 20px;
  padding-right: 20px;
  text-align: center;
  margin: 0;
}

ul.online-users li{
  list-style: none;
  position: relative;
  margin: 3px auto !important;
  padding-left: 2px;
  padding-right: 2px;
}

ul.online-users li span.online-dot{
  background: linear-gradient(to bottom, rgba(141,198,63, 1), rgba(0,148,68, 1));
  border: none;
  height: 12px;
  width: 12px;
  border-radius: 50%;
  position: absolute;
  bottom: -6px;
  border: 2px solid #fff;
  left: 0;
  right: 0;
  margin: auto;
}

img.profile-photo {
    height: 58px;
    width: 58px;
    border-radius: 50%;
}

ul.online-users {
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    margin: 0;
}

.list-inline {
    padding-left: 0;
    margin-left: -5px;
    list-style: none;
}

.list-inline>li {
    display: inline-block;
    padding-right: 5px;
    padding-left: 5px;
}

.text-white {
    color: #fff;
}
   
    /*[class*="con"] {
        padding: 1rem;
        background-color: #9e33e5;
        border: 2px solid #fff;
        color: #fff;
        text-align: center;
    } 
    */
</style>

</head>
<?php
  switch ($_GET["n"])
  {
    case "home":
      $heading = "Home";
    break;
    case "register":
      $heading = "Register";
      
    break;
    case "now":
      $heading = "Now";
    break;
    case "reserve":
      $heading = "Reserve";
    break;
    case "example1":
        $heading = "1";
    break;
    case "example2":
        $heading = "2";
    break;
    case "example3":
        $heading = "3";
    break;
    case "example4":
        $heading = "4";
    break;
    case "example5":
        $heading = "5";
    break;
    case "example6":
        $heading = "6";
    break;


    default: 
      $heading = "Welcome";
      $body = "Bet god x";
    break;
  }
  ?>

<body>

   
<div class="container">  
    
</div>

</div> 
<ul class="nav nav-pills nav-justified" style="background-color: darkred">
    <li class="nav-item" >
      <a class="nav-link active" href="index.php?n=home" style="background-color: black">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="index.php?n=register" style="background-color: black">Post an open table </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="index.php?n=now" style="background-color: black">Get a table now </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="index.php?n=reserve" style="background-color: black">Make reservations for a table</a>
    </li>
  </ul>
  
  <div class="float-left"> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  
           <!-- <div class="profile-card">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="profile-photo">
            	<h5><a href="#" class="text-white">Sarah Cruiz</a></h5>
            	<a href="#" class="text-white"><i class="fa fa-user"></i> 1,299 followers</a>
            </div><profile card ends-->
            <div class="row">
  
    <div class="list-group" id="list-tab" role="tablist">
     
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="index.php?n=example1" role="tab" aria-controls="profile">Example 1</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="index.php?n=example2" role="tab" aria-controls="messages">Example 2</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="index.php?n=example3" role="tab" aria-controls="settings">Example 3</a>
     
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="index.php?n=example4"role="tab" aria-controls="profile">Example 4</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="index.php?n=example5"role="tab" aria-controls="messages">Example 5</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="index.php?n=example6" role="tab" aria-controls="settings">Example 6</a>
    </div>
  </div>

             <!--news-feed links ends-->
            <!--<div id="chat-block">
              <div class="title">Chat online</div>
              <ul class="online-users list-inline">
                <li><a href="#" title="Linda Lohan"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Sophia Lee"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="John Doe"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Alexis Clark"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="James Carter"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Robert Cook"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Richard Bell"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Anna Young"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Julia Cox"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
              </ul>
            </div><chat block ends-->
        </div>

  
  
  
  
 
<div class="float-right"> link</div>
<div class="card"> <div class="card-body"> 


<?php 
  if ($_GET['n'] == 'register') {
    include('register.php');
  }
  if ($_GET['n'] == 'example1') {
    include('example1.php');
  }
  if ($_GET['n'] == 'example2') {
    include('example2.php');
  }
  if ($_GET['n'] == 'example3') {
    include('example3.php');
  }
  if ($_GET['n'] == 'example4') {
    include('example4.php');
  }
  if ($_GET['n'] == 'example5') {
    include('example5.php');
  }
  if ($_GET['n'] == 'example6') {
    include('example6.php');
  }
  
?>




  </div> </div> 

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
