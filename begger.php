
<!--BEGGER-->


<?php include('config.php');
include "myheader.php"
  ?>

   
   <!---->
       <br/><br/><br/><br/>
		<div id="wrapper" style="border-radius: 25px;background: url(img/paperback.jpg);background-position: left top;background-repeat: repeat;padding: 20px; width: 100%;height: 500px; ">
		
           <center>
			<!--<section id="content">-->
			
				<table class="table-bordered table-striped table-hover"  width="1000px" height="200px" cell-padding="10" cellspacing="10" style="border-style: groove;margin-left:-70px;margin-top:50px;margin-bottom:100px;color:black;">
                    <h1 style="color:black">Beggars</h1>
					<th>Location</th><th>Requirement</th>
					
					<?php
                            $query="select * from begger";
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
				<br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<!--</section> -->
		</div>
		<br/><br/>
		<div id="storyboard" style="border-radius: 25px;border: 2px solid #73AD21;padding: 20px;display: inline-block;">
	<div id="storyboard1" style="border-radius: 25px;background: #f4f442;padding: 20px;display: inline-block;">
	    <p>There are approximately 78 million homeless people in India, with over 11 million children. Often people come to metro cities in search of work but end up without a job, a home and often – penniless. That is what gives birth to beggars and illegal slums. According to the Indian government in 2015, there are over 4 lakh beggars in India with 81,000 belonging to West Bengal. There are 4,13,670 beggars exactly- 2.2 lakh males and 1.91 lakh females. The Bombay Prevention of Begging Act, 1959 was the one of the first provisions to criminalise begging. It did not just make begging an offence but also asked for detention, training and employment of the beggars so they can be taken off the streets.</p>    
	</div>
      <br><br>
  <div id="storyboard1" style="border-radius: 25px;background: #f4f442;padding: 20px;display: inline-block;">
     <p>India has an estimated one million or more street children in each of the following cities: New Delhi, Kolkata, and Mumbai.[2] Mainly because of family conflict, they come to live on the streets and take on the full responsibilities of caring for themselves, including working to provide for and protecting themselves. Though street children do sometimes band together for greater security, they are often exploited by employers and the police.</p>
      </div>
      
      
      </div>
      <br/><br/>
      <!--
      <div id="storyboard" style="border-radius: 25px;border: 2px solid #73AD21;padding: 20px;display: inline-block;">
	<div id="storyboard2" style="border-radius: 25px;background: #ff99ff;padding: 20px;display: inline-block;">
	    <p></p>    
	</div>
      <br><br>
      <div id="storyboard2" style="border-radius: 25px;background: #ff99ff;padding: 20px;display: inline-block;">
     <p></p>
      </div>
      <br/><br/>
        <div id="storyboard2" style="border-radius: 25px;background: #ff99ff;padding: 20px;display: inline-block;">
     <p></p>
      </div>
      
      </div>
		-->
	<?php include"myfooter.php";?>