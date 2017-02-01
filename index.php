<?php
	$title = "Home";
	include("header.php") 
?>
	<div id="main">
		<div id="grid">
		<div style="width:940px;margin:0 auto 0;margin-bottom:10px;background-color:gray;height:200px;">
			<h1 style="font-weight:bold;color:#fff;text-align:right;padding-right: 20px;padding-top:160px;">Family owned and operated business serving the north Atlanta area since 1972.</h1>
		</div>
			<div id="left">
				<h1>Call and ask about our...</h1>
					<ul>
						<li>FREE Estimates</li>
						<li>Lifetime Warranty</li>
						<li>Shuttle service to Chamblee MARTA Station</li>
						<li>One day bumper repairs with appointment</li>
						<li>Headlight restoration with some collision repairs</li>
					</ul>
			</div>
			<div id="right">
				<? include("sidebar.php") ?>
			</div>
		</div>
	</div>
<?php include("footer.php") ?>