<nav class="navbar navbar-default navbar-static-top navbar-primary navbar-fixed" role="navigation" style="margin-bottom:6px;background-color:lightslategrey;color:white;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style = "color:yellow;"><i class = "fa fa-home fa-large" > </i>MCFONLINE VOTING SYSTEM</a>
					
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
				<?php 
					require 'dbcon.php';
					$query = $conn->query("SELECT * from voters where voters_id ='$session_id'")or die (mysqli_errno ());
					$row = $query->fetch_array();
				?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color:yellow;font-size:14pt;">
						<i class="fa fa-cog fa-spin fa-fw" align="center"></i>Welcome: <?php echo strtoupper($user_username = $user_row['firstname']." ".$user_row['lastname']);?>
					</a>
                </li>
            </ul>
            