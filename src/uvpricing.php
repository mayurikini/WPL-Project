<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Expires" content="0">
		<link rel="shortcut icon" type="image/png" href="./img/favicon.ico">

		<title>University Housing</title>

		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./css/base.css">
		
		<script type="text/javascript" src="./js/jquery-1.11.2.min.js"></script>
		
		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css">
		  
		<!-- jQuery -->
<!--		<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		  
		<!-- DataTables -->
		<script type="text/javascript" charset="utf8" src="./js/jquery.dataTables.min.js"></script>

		<script src="./js/bootstrap.min.js"></script>
		
		<script>
		$(document).ready( function () {
			$('table#floor-plans').DataTable();
		});
		
		</script>
		
		
		<style>
			div.floor-plans img{
				width : 500px;
			}
			div.page-header h1{
				text-align: center;
			}
		</style>
</head>
<body>
	<div class="base-navbar">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-inner">
				<div class="container" style="width: auto;">
					<img class="logo-mini" src="./img/logo.png">
					<div id="right-nav-options" class="btn-group pull-right">
						<?php 
						session_start();
						//$_SESSION['SESS_USER_NAME'] = $username;
						$username=$_SESSION['SESS_USER_NAME'];
						//echo '$username';
						if(isset($_SESSION['SESS_USER_NAME']) && strcmp($username,'ADMIN') != 0) {
						echo"<a class='btn btn-small' href='userHome.php'>Profile</a>";
						}
						if(isset($_SESSION['SESS_USER_NAME']) && strcmp($username,'ADMIN') == 0 ) {
						echo"<a class='btn btn-small' href='adminhome.php'>Home</a>";
						}
						echo"<a class='btn btn-small' href='home.php'>Housing</a>";
						if(isset($_SESSION['SESS_USER_NAME'])){
						echo"<a class='btn btn-small' href='appView.php'>Availability</a>";
						}
						if(!isset($_SESSION['SESS_USER_NAME'])){
						echo"<a class='btn btn-small' href='signup.php'>Apply Now</a>";
						}
						echo"<a class='btn btn-small' href='uvpricing.php'>Floor Plans</a>
						<a class='btn btn-small' href='mealPlan.php'>Meal Plans</a>
						<a class='btn btn-small' href='faq.php'>FAQs</a>
						<a class='btn btn-small' href='contact.php'>Contact US</a>";
						if(isset($_SESSION['SESS_USER_NAME'])){
							echo '<a class="btn btn-small" href="logout.php" >Logout</a>';
						}
						else{
							echo '<a class="btn btn-small" href="login.php" >Login</a>';
						}
						
						?>
		
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="base-content">
	<div class="page-header">
	    <h1>Floor Plans</h1>
	</div>
	<table id="floor-plans" class="table table-hover">
		<thead>
            <tr>
              <th>Floor Plan</th>
              <th>Bedroom Type</th>
              <th>Bed</th>
              <th>Bath</th>
              <th>Square Feet</th>
              <th>Price/Month</th>
            </tr>
			</thead>
			<tbody>
            <tr>
              <td><a href="#a1" class="anchorLink"><strong>A1</strong></a></td>
              <td>Private</td>
              <td>1</td>
              <td>1</td>
              <td>384</td>
              <td>630</td>
            </tr>
            <tr>
              <td><a href="#a2" class="anchorLink"><strong>A2</strong></a></td>
              <td>Private</td>
              <td>1</td>
              <td>1</td>
              <td>452</td>
              <td>690</td>
            </tr>
            <tr>
              <td><a href="#a3" class="anchorLink"><strong>A3</strong></a></td>
              <td>Private</td>
              <td>1</td>
              <td>1</td>
              <td>530</td>
              <td>770</td>
            </tr>
            <tr>
              <td><a href="#a4" class="anchorLink"><strong>A4</strong></a></td>
              <td>Private</td>
              <td>1</td>
              <td>1</td>
              <td>631</td>
              <td>760</td>
            </tr>
            <tr>
              <td><a href="#a5" class="anchorLink"><strong>A5</strong></a></td>
              <td>Private</td>
              <td>1</td>
              <td>1</td>
              <td>653</td>
              <td>795</td>
            </tr>
            <tr>
              <td><a href="#a6" class="anchorLink"><strong>A6</strong></a></td>
              <td>Private</td>
              <td>1</td>
              <td>1</td>
              <td>667</td>
              <td>770</td>
            </tr>
            <tr>
              <td><a href="#1x1p" class="anchorLink"><strong>A7</strong></a></td>
              <td>Private</td>
              <td>1</td>
              <td>1</td>
              <td>530</td>
              <td>790</td>
            </tr>
            <tr>
              <td><a href="#1x1s" class="anchorLink"><strong>A8</strong></a></td>
              <td>Shared</td>
              <td>1</td>
              <td>1</td>
              <td>530</td>
              <td>395</td>
            </tr>
            
            <tr>
              <td><a href="#b1" class="anchorLink"><strong>B1</strong></a></td>
              <td>Private</td>
              <td>2</td>
              <td>2</td>
              <td>900</td>
              <td>590</td>
            </tr>
            <tr>
              <td><a href="#b2" class="anchorLink"><strong>B2</strong></a></td>
              <td>Private</td>
              <td>2</td>
              <td>2</td>
              <td>915</td>
              <td>590</td>
            </tr>
            <tr>
              <td><a href="#b3" class="anchorLink"><strong>B3</strong></a></td>
              <td>Private</td>
              <td>2</td>
              <td>2</td>
              <td>978</td>
              <td>665</td>
            </tr>
            <tr>
              <td><a href="#2x2p" class="anchorLink"><strong>B4</strong></a></td>
              <td>Private</td>
              <td>2</td>
              <td>2</td>
              <td>978</td>
              <td>680</td>
            </tr>
            <tr>
              <td><a href="#2x2s" class="anchorLink"><strong>B5</strong></a></td>
              <td>Shared</td>
              <td>2</td>
              <td>2</td>
              <td>978</td>
              <td>340</td>
            </tr>
			</tbody>
          </table>
		 <div class="floor-plans">
		<div class="clearfix">
          <div class="g2 pull-left">
            <a name="a1" id="a1"></a>
            <h3>A1 - One Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $630 per month. <br>
            <img src="img/floorplan/a1.png" alt="One Bedroom - A1"></p>
          </div>
          <div class="g2 pull-right">
            <a name="a2" id="a2"></a>
            <h3>A2 - One Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $690 per month.<br>
            <img src="img/floorplan/a2.png" alt="One Bedroom - A2"></p>
          </div>
        </div>
        <div class="clearfix">
          <div class="g2 pull-left">
            <a name="a3" id="a3"></a>
            <h3>A3 - One Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $770 per month.<br>
            <img src="img/floorplan/a3.png" alt="One Bedroom - A3"></p>
          </div>
          <div class="g2 pull-right">
            <a name="a4" id="a4"></a>
            <h3>A4 - One Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $760 per month.<br>
            <img src="img/floorplan/a4.png" alt="One Bedroom - A4"></p>
          </div>
        </div>
        <div class="clearfix">
          <div class="g2 pull-left ">
            <a name="a5" id="a5"></a>
            <h3>A5 - One Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $795 per month.<br>
            <img src="img/floorplan/a5.png" alt="One Bedroom - A5"></p>
          </div>
          <div class="g2 pull-right">
            <a name="a6" id="a6"></a>
            <h3>A6 - One Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $770 per month.<br>
            <img src="img/floorplan/a6.png" alt="One Bedroom - A6"></p>
          </div>
        </div>
        <div class="clearfix">
          <div class="g2 pull-left">
            <a name="1x1p" id="1x1p"></a>
            <h3>1x1 - One Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $790 per month.<br/> Price includes utilities less electricity.<br>
            <img src="img/floorplan/1x1p.png" alt="One Bedroom - 1x1"></p>
          </div>
          <div class="g2 pull-right">
            <a name="1x1s" id="1x1s"></a>
            <h3>1x1 - One Bedroom*</h3>
            <p><strong>Shared bedroom</strong> = $395 per month per person.<br/> Price includes utilities less electicity.<br/> Two people maximum to a room.<br>
            <img src="img/floorplan/1x1s.png" alt="One Bedroom - 1x1 - shared"></p>
          </div>
        </div>
        <div class="clearfix">
          <p class="footnote">* Apartment is unfurnished.  Measurements are approximate, floor plans may vary.”</p>
          <hr>
        </div>
        <div class="clearfix">
          <div class="g5 pull-left">
            <a name="b1" id="b1"></a>
            <h3>B1 - Two Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $590 per month.<br>
            <img src="img/floorplan/b1.png" alt="Two Bedroom - B1"></p>
          </div>
          <div class="g5 pull-right">
            <a name="b2" id="b2"></a>
            <h3>B2 - Two Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $590 per month.<br>
            <img src="img/floorplan/b2.png" alt="Two Bedroom - B2"></p>
          </div>
        </div>
        <div class="clearfix">
          <div class="g5 pull-left">
            <a name="b3" id="b3"></a>
            <h3>B3 - Two Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $665 per month.<br>
            <img src="img/floorplan/b3.png" alt="Two Bedroom - B3"></p>
          </div>
          <div class="g5 pull-right">
            <a name="2x2p" id="2x2p"></a>
            <h3>2x2 - Two Bedroom*</h3>
            <p><strong>Private bedroom</strong> = $680 per month.<br/> Price includes utilities less electricity.<br>
            <img src="img/floorplan/2x2p.png" alt="Two Bedroom - 2x2"></p>
          </div>
        </div>
        <div class="clearfix">
          <div class="g5 pull-left">
            <a name="2x2s" id="2x2s"></a>
            <h3>2x2 - Two Bedroom*</h3>
            <p><strong>Shared bedroom</strong> = $340 per month per person.<br/> Price includes utilities less electricity.<br>
            <img src="img/floorplan/2x2s.png" alt="Two Bedroom - 2x2 shared"></p>
          </div>
        </div>
          <hr>
          <p class="footnote">* Apartment is unfurnished.  Measurements are approximate, floor plans may vary.</p>
		</div>
	</div>
	<div class="base-footer">
		<h6>
			Copyright © <span id="currentYear">2015 </span>	
			University Housing
		</h6>
	</div>
</body>
</html>