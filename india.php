<?php
include 'sql/connection.php';
session_start();
$_SESSION['city'] = 'india';
if (!isset($_SESSION['username']))
echo "<script>
alert('Please Login or Signup');
window.location.href='test.php';
</script>";

?>
<?php
include 'include/navigation.php';
?>
<html>
<head>

<title>Using Bootstrap City</title>
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Lato|Titillium+Web" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #286da8;
}

.carousel-indicators li {
    border-color: #286da8;
}

.carousel-indicators li.active {
    background-color: #286da8;
}

.item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
}

.item span {
    font-style: normal;
}
.panel {
    border: 1px solid #286da8;
    border-radius:0;
    transition: box-shadow 0.5s;
}

.panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .3);
}

.panel-footer .btn:hover {
    border: 1px solid #286da8;
    background-color: #fff !important;
    color: #286da8;
}

.panel-heading {
    color: #fff !important;
    background-color: #286da8!important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}

.panel-footer {
    background-color: #fff !important;
}

.panel-footer h3 {
    font-size: 32px;
}

.panel-footer h4 {
    color: #aaa;
    font-size: 14px;
}

.panel-footer .btn {
    margin: 15px 0;
    background-color: #286da8;
    color: #fff;
}
</style>
</head>
<body>

  <h2><center>India</center></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/rajasthan.jpg" alt="rajasthan">
      <div class="carousel-caption">
        <h3>Rajasthan</h3>
        <p>The Incredible State of India. Jaane Kya Dikh Jaye.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/gujarat.jpg" alt="gujarat">
      <div class="carousel-caption">
        <h3>Gujarat</h3>
        <p>Khushboo Gujarat Ki.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/mp.jpg" alt="madhyapradesh">
      <div class="carousel-caption">
        <h3>Madhya Pradesh</h3>
        <p>The Heart of Incredible India.</p>
      </div>
    </div>

    <div class="item">
        <img src="img/kashmir.jpg" alt="kashmir">
        <div class="carousel-caption">
          <h3>Kashmir</h3>
          <p>Chalo Kashmir.</p>
        </div>
      </div>

      <div class="item">
          <img src="img/kerala.jpg" alt="kerala">
          <div class="carousel-caption">
            <h3>Kerala</h3>
            <p>God's Own Counry.</p>
          </div>
      </div>

      <div class="item">
          <img src="img/kolkata.jpg" alt="westbengal">
          <div class="carousel-caption">
            <h3>West Bengal</h3>
            <p>Beautiful Bengal.</p>
          </div>
      </div>


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <div class="container-fluid">
   <div class="text-center">
     <h2>Pricing</h2>
     <h4>Choose a payment plan that works for you</h4>
   </div>
   <div class="row">
     <div class="col-sm-4">
       <div class="panel panel-default text-center">
         <div class="panel-heading">
           <h1>Basic</h1>
         </div>
         <div class="panel-body">
           <p><strong>30</strong> Days & <strong>29</strong> Nights</p>
		    <p>Short & Sweet, but a Complete Experience</p>
			<p></p>
           <p>Guided City Tours</p>
           <p>A Day per Culture and Diversity </p>
           <p>Economy Seatings</p>
         </div>
         <div class="panel-footer">
           <h3>₹ 3 Lacks only</h3>
           <form method="POST" action="pay.php"> <button type="submit" name="basic"
                class="btn btn-lg"> Pay Now</button> </form>
         </div>
       </div>
     </div>
     <div class="col-sm-4">
       <div class="panel panel-default text-center">
         <div class="panel-heading">
           <h1>Pro</h1>
         </div>
         <div class="panel-body">
            <p><strong>45</strong> Days & <strong>46</strong> Nights</p>
		   <p>From the Mughal to Colonised Indian Experience </p>
           <p>Exclusive Cruise Days</p>
           <p>Jammu and Kashmir</p>
           
           <p>Business Seatings</p>
         </div>
         <div class="panel-footer">
           <h3>₹ 5 Lacks only</h3>
           <form method="POST" action="pay.php"> <button type="submit" name="pro"
                class="btn btn-lg"> Pay Now</button> </form>
         </div>
       </div>
     </div>
    <div class="col-sm-4">
       <div class="panel panel-default text-center">
         <div class="panel-heading">
           <h1>Premium</h1>
         </div>
         <div class="panel-body">
          <p><strong>60</strong> Days & <strong>59</strong> Nights</p>
           <p>Exclusive Sight Seeing</i> </p>
           
           <p>Exclusive Sport Events</p>
		   
           <p>From the Mughal to Colonised Indian Experience  </p>
		   <p>Charter Seatings</p>
         </div>
         <div class="panel-footer">
           <h3>₹ 7 Lacks only</h3>
          <form method="POST" action="pay.php"> <button type="submit" name="premium"
                class="btn btn-lg"> Pay Now</button> </form>
         </div>
       </div>
     </div>
   </div>
 </div>
<?php
include 'include/footer.php';
?>

</body>
</html>
