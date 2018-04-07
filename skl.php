
<!--SCHOOL-->


<?php include('config.php');
  ?>



<html>
<head>


	

</head>
<body>
	<div id="container">  
		<header>
		
		</header>
		<div id="wrapper">
			<!--<section id="content">-->
				<center><table border="2" style="margin-left:-70px;margin-top:50px;margin-bottom:100px;">
					<th>Location</th><th>Requirment</th><th>Donate</th>
					
					<?php

			
					$query="select * from skul";
			                $select_query=mysqli_query($link,$query);
			                while ($row=mysqli_fetch_assoc($select_query)) 
			                {
			                

						echo'<tr>
							<td>'.$row['Location'].'</td>
							<td>'.$row['Requirment'].'</td>
							
							<td><a href="">Click_Donate</td>
							</tr>';

							}

					?>



				</table>
				</center>
			<!--</section> -->
		</div>
		
	</div>

</body>
</html>
