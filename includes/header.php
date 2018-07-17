<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
				<span class="icon-bar"><</span>
				<span class="icon-bar"><</span>
			</button>
			<a href="#" class="navbar-brand">Course Information</a>
		</div>
		<div class="collapse navbar-collapse" id="mynav">
			<ul class="nav navbar-nav navbar-right">
				
				<?php if(isset($_SESSION['id'])){	?>
										
															
					<li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
					
				<?php } ?>
				
			</ul>
		</div>
	</div>
</nav>
<div class="container-flow">
		<div class="row" style="margin-top:70px ">
			<center>
				<div class="col-xs-2 col-xs-offset-10" style="background-color:rgba(0,0,0,0.7) ">
					<h3 style="color:white"> User ID : <?php echo $_SESSION['id']; ?> </h3> 
				</div>
			</center>
		</div>
</div>
