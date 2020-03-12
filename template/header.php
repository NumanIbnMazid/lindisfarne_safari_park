<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default">
			
		</div>
		<div class="header-two navbar navbar-default">
		<!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="index.php">lindisfarne@example.com</a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.php">Lindisfarne <b>SafariPark</b><span class="tag">Connect with Nature </span> <span class="tag"><div id="clockbox"></div> </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
					</div>
					
					<div class="time_1"> 
						<div class="ope">
							<span><h3>Opens At</h3></span> <span><h4>10.00AM</h4></span>
						</div>							
						<div class="clo"> 
							<span><h3>Closed At</h3></span> <span><h4>8.00 PM</h4></span>
						</div>
					</div>
					
					<div class="date"> 
						
						<h3>Sunday -to- Friday</h3>
													
					</div>
					<div id="clockbox" style="font:14pt Arial; color:#FF0000;"></div>
					
					
					<style type="text/css"> 
						.time_1{
							position: relative;
							left: -25px;
							top: 19px;
							color: #353F49;
							font-weight: 700;
						}
						.date{
							position:relative;
							right: -130px;
							top: -8px;
						}
					</style>

					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		
		<div class="top-nav navbar navbar-default">
		<!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					
					
					
				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>
<!--//header-->

	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);

}
</script>



	