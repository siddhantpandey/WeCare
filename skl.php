
<!--SCHOOL-->


<?php include('config.php');
include "myheader.php"
  ?>

   
   <!---->
   <br/><br/><br/><br/><br/><br/>
		<div id="wrapper" style="border-radius: 25px;background: url(img/paperback.jpg);background-position: left top;background-repeat: repeat;padding: 20px; width: 100%;height: 500px; ">
			<!--<section id="content">-->
				<center><table border="1"  width="75%" height="200px" cell-padding="10" cellspacing="10" style="border-style: groove;margin-left:-70px;margin-top:50px;margin-bottom:100px;color:black;">
                    <h1 style="color:black">Schooling</h1>
					<th>Location</th><th>Requirement</th>
					
					<?php

			
					$query="select * from skul";
			                $select_query=mysqli_query($link,$query);
			                while ($row=mysqli_fetch_assoc($select_query)) 
			                {
			                

						echo'<tr>
							<td>'.$row['Location'].'</td>
							<td>'.$row['Requirment'].'</td>
							
							
							</tr>';

							}

					?>



				</table>
				<a href="report.php?indicator=1"><button class="btn btn-primary btn-warning btn-lg" style="width:200px; height:30px; padding:8px; font-size:12px ;border-radius:5px;">Donate</button></a>
				</center>
			<!--</section> -->
		</div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php include"myfooter.php";?>