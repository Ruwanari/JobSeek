<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>template/css/styling.css" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
</head>
</head>
<body>
<center>
<div class="navbar">
    <ul>
        <img id="image" src="<?php echo base_url();?>template/images/logo.png"" style="width: 225px;height: 60px; float: right;">
        <li><a href="" >Home</a></li>
        <li><a href="" >Vacancies</a></li>
        <li><a href="" >Upload CV</a></li>
        <li><a href="" >Contact Us</a></li>
        <li><a href="" >Get Job Alerts</a></li>
        

    </ul>
    </div>
    </center>

    <div id="container">
    



<div class="container">
    <h1 class="well" style="background-color: ">Post your job</h1>
    <div class="col-lg-12 well">
    <div class="row">
    
               <form method="post" action="<?php echo base_url();?>index.php/test/create"> 
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Company Name</label>
                                <input type="text" placeholder="Company Name" name="Name" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Upload the Company Logo</label>
                                <br>
                            <div style="height:0px;overflow:hidden">
                                <input type="file" id="fileInput" name="fileInput" />
                            </div>
                            <button type="button" onclick="chooseFile();">choose file</button>

                            <script>
                            function chooseFile() {
                                $("#fileInput").click();
                            }
                            </script>
                            </div>

                        </div>                  
                        <div class="form-group">
                            <label>Choose company profile</label>
                            <select name="Profile" class="form-control">
                                <option value="ABC">ABC</option>
                                <option value="DEF">DEF</option>
                                <option value="GHI">GHI</option>
                                <option value="JKL">JKL</option>
                            </select>
                            
                        </div>  
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Location</label>
                                <input type="text" name="Location" placeholder="Enter City Name Here.." class="form-control">
                            </div>  
                            
                            <div class="col-sm-4 form-group">
                                <label>Category</label>
                                <input type="text" name="Category" placeholder="Enter Category Here.." class="form-control">
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Salary Range</label>
                                <input type="text" name="SalaryRange" placeholder="Enter Salary Range.." class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Job Position</label>
                                <input type="text" name="JobPosition" placeholder="Enter Job Position.." class="form-control">
                            </div>  
                        </div>   
                    
                    <div class="form-group">
                        <label>Job Type</label>
                        <br>
                        <input type="checkbox" name="type" value="Accounting"> Accounting<br>
                        <input type="checkbox" name="type" value="Clerk" checked> Clerk<br>
                        <input type="checkbox" name="type" value="IT"> IT<br>
                        <input type="checkbox" name="type" value="Banking" checked> Banking<br>
                    </div> 
                    
                                    
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="TelNumber" placeholder="Enter Phone Number Here.." class="form-control">
                    </div>      
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="Email" placeholder="Enter Email Address Here.." class="form-control">
                    </div>  
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" name="Website" placeholder="Enter Website Name Here.." class="form-control">
                    </div>
                    <input type="Submit" name="Submit" value="Submit" class="btn btn-lg btn-info">                   
                    </div>
                </form> 
                
                </div>
    </div>
    </div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<!-- // -->
<div class="container">

    

<!-- Social Footer, Colour Matching Icons -->
<!-- Include Font Awesome Stylesheet in Header -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<!-- // -->
<div class="container">

    <hr>
        <div class="text-center center-block">
            
            <br />
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
    <hr>
</div>
</body>
</html>









