<?php include"config.php";?>








<?php include"myheader.php";?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <center>
    <div class="wrapper">
        <h2>Admin Home</h2>
        <p></p>
        <br/><br/>
        <form action="adminhome.php?ndicator=1" method="post" style="width:500px">
            <div class="form-group"  >
                <input type="button" name="personsofinterest" class="btn btn-primary btn-lg btn-warning" value="Persons of Interest" style="position:absolute;transition: .5s ease;left:202px;top: 198px;width:200px">
            </div>
            <br/>
            <div class="form-group">
                <input type="button" name="Donations" class="btn btn-primary btn-lg btn-warning" value="Donations" style="position:absolute;transition: .5s ease;right:202px;top: 198px;;width:200px">
            </div>
            <br/>
            <div class="form-group">
                <input type="button" name="volunteers" class="btn btn-primary btn-lg btn-warning" value="Volunteers" style="position:absolute;transition: .5s ease;left:202px;top: 248px;;width:200px">
            </div>
            <br/>
            <div class="form-group">
                <input type="button" name="beggarkids" class="btn btn-primary btn-lg btn-warning" value="Beggar Kids" style="position:absolute;transition: .5s ease;right:202px;top: 248px;;width:200px">
            </div>
            <br/>
            <div class="form-group">
                <input type="button" name="homeless" class="btn btn-primary btn-lg btn-warning" value="Homeless" style="position:absolute;transition: .5s ease;left:202px;top: 298px;;width:200px">
            </div>
            <br/>
            <div class="form-group">
                <input type="button" name="childlabour" class="btn btn-primary btn-lg btn-warning" value="Child Labour" style="position:absolute;transition: .5s ease;right:202px;top: 298px;;width:200px">
            </div>
            <br/>
            <div class="form-group">
                <input type="button" name="schooling" class="btn btn-primary btn-lg btn-warning" value="Schooling" style="position:absolute;transition: .5s ease;left:202px;top: 348px;;width:200px">
            </div>
            <br/>
            <div class="form-group">
                <input type="button" name="users" class="btn btn-primary btn-lg btn-warning" value="Users" style="position:absolute;transition: .5s ease;right:202px;top: 348px;;width:200px">
            </div>
            <br/>
            <div class="form-group">
                <input type="button" name="admins" class="btn btn-primary btn-lg btn-warning" value="Admins" style="position:absolute;transition: .5s ease;left:202px;top: 398px;;width:200px">
            </div>
            <br/>
        </form>
    </div>    
      </center>
  <br/><br/><br/><br/> 
   <?php include"myfooter.php";?>