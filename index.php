<?php
	$connection = mysql_connect('localhost','root',NULL);
	$database = mysql_select_db('portfolio');
?>
<?php
	if(isset($_POST['btn'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		$query=mysql_query("INSERT into messages(name,email,messages) VALUES('".$name."','".$email."','".$msg."')");
		if($query){
			header("Location:index.php?done=1");
		}else{
			echo"Oh My God! Kaam Karo Naa Che";
		}
	}
?>
<html>
<head>
	<title>Nishchay Shopurkar</title>
	<script src="jquery.min.js"></script>
	<script>
		$(function(){
				$("h3").fadeIn(2000);
				$("span").fadeIn(6000);
			$("a").click(function(){
				$("#head").animate({ height: 150 }, 1000);
				$("#links").hide();
				$("h3").hide();
				$("h4").fadeIn(1500);
				$(".one").fadeIn(3000);
				$(".two").fadeIn(4500);
				$(".three").fadeIn(6000);
			  });
			  $(".three").click(function(){
				$("#dspl").fadeOut(500);
				$("#message").fadeIn(5000);
			  });
			  $("#notif").click(function(){
			  	$("#notif").fadeOut();
			  })
		});
	</script>
	<style type="text/css">
		html,body{margin:0;padding:0;overflow:hidden;background-color:rgb(30,30,30);}
		#head{
			font-size:5.5em;
			background-color:rgb(231,75,40);
			color:#fff;
			font-family:'Century Gothic';
			height:57%;
			font-weight:700;
			text-align:center;
			margin:0;
			padding-top:5%;
		}
		h4,h5{
			margin:0;
			display:none;
		}
		#sub{
			background-color:rgb(30,30,30);
			color:#fff;
			font-family:'Century Gothic';
			font-size:3em;
			margin:0;
			min-height:31%;
			height:auto;
			text-align:center;
			padding-top:2%;
		}
		#sub h4 span{
			font-size:0.6em;
		}
		#links{
			margin:4% 4% 0 8%;
		}
		a{
			font-family:'KBREINDEERGAMES';
			color:#fff;
			margin:0em 5% 5% 0;
			font-size:0.5em;
			border:1px solid #fff;
			padding:0.4em;
			border-radius:1.5em;
			text-decoration:none;
		}
		a:hover{
			padding:0.45em;
			background:#fff;
			color:rgb(231,75,40);
		}
		.one,.two,.three{
			font-size:0.6em;
			display:none;
		}
		.three span{
			padding:0.1em;
			margin:0;
			font-weight:bold;
			text-decoration: underline;
		}
		.three span:hover{
			padding:0.1em;
			text-decoration: none;
			color:yellow;
		}
		input{
			width:40.2em;
			padding:0.8em;
			font-size:0.4em;
			border:3px solid #fff;
			background:rgba(0,0,0,0.0);
			color:#fff;
			font-family:'Helvetica Neue';
		}
		textarea{
			padding:0.8em;
			font-size:0.4em;
			border:3px solid #fff;
			background:rgba(0,0,0,0.0);
			color:#fff;
			font-family:'Helvetica Neue';
		}
		#message{
			display:none;
		}
		.btn{
			width:10.1em;
		}
		.btn:hover{
			color:#fff;
			background-color:rgb(231,75,40);
		}
		#notif{
			width:100%;
			height:1.8em;
			text-align:center;
			text-decoration:underline;
			font-size:1.2em;
			padding-top:0.4em;
			color:#fff;
			font-family:'Century Gothic';
		}
		#notif span{
			float:right;
			padding-right:1em;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_GET['done'])){
			echo "<div id=\"notif\">";
				echo "Delivered!<span>x</span>";
			echo "</div>";
		}
	?>
	<div id="head">
		Nishchay Shopurkar<br/>
		<h3>Web Developer, Tech-activist, <span>Awesome</span></h3>
		<?php
			if(!isset($_GET['done'])){
				echo "<div id=\"links\">";
				echo 	"<a href=\"#\">me</a>";
				echo	"<a href=\"#\">work</a>";
				echo	"<a href=\"#\">blog</a>";
				echo	"<a href=\"#\">contact</a>";
				echo "</div>";
			}else{
				echo "&nbsp;";
			}
		?>
</div>
	<div id="sub">
		<div id="dspl">
			<h4>Coming S<span>oo</span>n...</h4>
			<div class="one">Till then,</div>
			<div class="two">consider</div>
			<div class="three">dropping a <span>message...</span></div>
		</div>
		<div id="message">
			<form method="post" action="index.php">
				<input type="text" placeholder="Fullname" name="name" required/><br/>
				<input type="email" placeholder="Email Address" name="email" required/><br/>
				<textarea cols=80 rows=5 name="msg" required>Message</textarea><br/>
				<input type="submit" class="btn" name="btn"/>
			</form>
		</div>
	</div>
</body>
</html>
<?php
	mysql_close();
?>
