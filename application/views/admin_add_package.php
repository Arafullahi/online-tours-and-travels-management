<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resource/favicon.ico">

    <title>Welcome To Place Learning</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/view_content.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/sidenav.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>resource/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>resource/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>resource/js/ie-emulation-modes-warning.js"></script>
     <script src="<?php echo base_url();?>tinymce/tinymce.min.js"></script>
   


  </head>


  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Home</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url();?>admin/dashboard"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
        
      </ul>
     <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url()?>login_controller/logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a></li>
          <li><a href="#">Check</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="<?php echo base_url();?>admin/add_package.html"class="btn btn-primary btn-lg active" role="button">Create Travel Package</a>&nbsp;&nbsp;
  <a href="<?php echo base_url();?>admin/user_list"class="btn btn-primary btn-lg active" role="button">User List</a>&nbsp;&nbsp;
  <a href="#"class="btn btn-primary btn-lg active" role="button">Clients</a>&nbsp;&nbsp;
  <a href="#"class="btn btn-primary btn-lg active" role="button">Contact</a>&nbsp;&nbsp;
  <a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>&nbsp;&nbsp;
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
<script>
    tinymce.init({
        selector:"#mytextarea"
    });
    </script>

<div class="container" style="height: inherit">
      <!-- Example row of columns -->
     
 <div class="container prod">
        <H3 align="right">Full Package Specification</H3>
   <!-- <form action="<?//php echo base_url().'admin/upload'?>" method="post" enctype="multipart/form-data">-->
        <?php echo form_open_multipart('admin/upload')?>
        <div class="row">
        <div class="col-50" align="center">
            <table class="product-table">
                <tr><td> Package Name:</td><td>
                        <!--<input type="text" name="name"><?php echo '<div class="error">'.$error_name.'</div>';?>-->
                        <?php echo form_input();?>
                    </td></tr> 
                <tr><td>Package ID:</td>
<td><input type="text" style="text-align:center" name="package_id" placeholder="Package ID"  value="<?php echo rand().'-PI';?>" /></td>
</tr>
                <tr><td>Transport:</td><td> Bus:<input type="radio" name="agree" value="Bus">
                    Ship:<input type="radio" name="agree" value="Ship"> 
                     Air:<input type="radio" name="agree" value="Air">    <?php echo '<div class="error">'.$error_radio.'</div>';?></td>
                </tr>
                <tr><td>Test Dropdown</td><td>
                        <select >
    
    <option value="">None</option>
  <?php 

            foreach($groups as $row)
            { 
              echo '<option value="'.$row->Lastname.'">'.$row->Lastname.'</option>';
            }
            ?>
</select>
                        
                    </td>
                </tr>
                <tr><td >Tour Plan</td><td><textarea  name="longdes" id="mytextarea" > </textarea><?php echo '<div class="error">'.$error_plan.'</div>';?></td></tr>
                <tr><td>Price:</td><td><input type="text" style="text-align:center" name="price" placeholder="Price"  /> <?php echo '<div class="error">'.$error_price.'</div>';?> </td></tr>
                <tr><td><input type="file" name="userfile" class="btn btn-primary btn-info" ><?php echo '<div class="error">'.$error_image.'</div>';?></td></tr>
                <tr><td><input type="file" name="userfile1" class="btn btn-primary btn-info" ><?php echo '<div class="error">'.$error_image.'</div>';?></td></tr>
        
                <tr><td><input type="submit" name="submit" value="upload" class="btn btn-primary btn-success active"> </td>
                    
                        <td><input type="reset" name="reset" value="Reset" class="btn btn-primary btn-warning active"></td></tr>
        
            </table>
        </div>
        </div>
    <!--</form>-->
    <?php echo form_close();?>
    </div>
      <div class="row">
 
</div>
        <div class="col-md-4">

          
        </div> 
     

      <hr>
      <div class="footer">
      <footer style="background-color:#080808">
          <center>
          <img src="<?php echo base_url();?>resource/images/logo4.jpg" height="50px" width="150px">&nbsp;&nbsp;
           <img src="<?php echo base_url();?>resource/images/logo3.jpg" height="50px" width="150px">&nbsp;&nbsp;
            <img src="<?php echo base_url();?>resource/images/logo2.png" height="50px" width="150px">&nbsp;&nbsp;
          </center>
          <p style="color: #EBF3EC">&copy; Copyright (c) 2016 All Rights Reserved</p>
      </footer>
      </div>
      </div>
    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>resource/js/jquery.min.js"></script>
    
    
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>resource/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


