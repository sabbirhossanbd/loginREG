<?php
    include 'inc/header.php';
    include 'lib/user.php';
    $user = new User();
?>
        <div class="panel panel-default">
        	<div class="panel-heading">
        		<h2>User list <span class="pull-right"><strong>Welcome! </strong>Sabbir</span></h2>
        	</div>

        	<div class="panel-body">
        		<table class="table table-striped">
        			<th width="20%">Serial</th>
        			<th width="20%">Name</th>
        			<th width="20%">Username</th>
        			<th width="20%">Email Address</th>
        			<th width="20%">Action</th>


        			<tr>
        				<td>01</td>
        				<td>sabbir hossan</td>
        				<td>Sabbir</td>
        				<td>SabbirHossan@gmail.com</td>
        				<td>
        				   <a class="btn btn-primary" href="profile.php?id=1">View</a>
        				</td>
        			</tr>


        			<tr>
        				<td>02</td>
        				<td>shohel rana</td>
        				<td>Shohel</td>
        				<td>shohelHossan@gmail.com</td>
        				<td>
        				  <a class="btn btn-primary" href="profile.php?id=1">View</a>
        				</td>
        			</tr>

        			<tr>
        				<td>03</td>
        				<td>kamal hasan</td>
        				<td>kamal</td>
        				<td>kamalHossan@gmail.com</td>
        				<td>
        				   <a class="btn btn-primary" href="profile.php?id=1">View</a>
        				</td>
        			</tr>

        		</table>
        	</div>
        </div>
    
    <?php 
       include 'inc/footer.php';
    ?>