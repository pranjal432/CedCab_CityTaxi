<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="cedcab.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/4b2ee26aaa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand text-danger" href="#"><h1>City<span style="color:blueviolet">Taxi</span></h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item active">
        <a class="nav-link" href="cedcab.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        
  
  
        </ul>
       
    </div>
</nav>

</div>

    <div class="container-fluid newsection pb-0">

    <div class="container-fluid" style="padding:0px;">

        <div class="container-fluid section2">

        </div>

        

        <div class="container-fluid section2a" style="background: none;padding-top: 0px;">

            

                <div class="container text-center pt-5">
    
                    <h1 style="color:white" >Book a City Taxi to your destination in town</h1>
                    

                    <p>choose from a range of categories and prices</p>
                </div>

                <div class="container pt-3">

                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center mb-5" style="background-color:white;">
                                <input type="submit" class="btn btn-danger city-taxi-button mt-3" value="City Taxi">
                                <hr>
                                <h4 style="color:black;">Your everyday travel partner</h4>
                                <p style="color:black;">AC cabs for point to point travel</p>

                                <form action="" method="POST">
                                    
                                    <div class="form-group row" >

                                        <label class="col-sm-2-auto" for="pickup">PICKUP</label>
                                        <select class="form-control-plaintext col-sm-9 mr-1 drpdown" id="pickp" name="Pickup">
                                        
                                            <option value="" selected disabled hidden>Select Pickup Location</option>
                                            <option value="Charbagh" >Charbagh</option>
                                            <option value="Indira Nagar" >Indira Nagar</option>
                                            <option value="BBD" >BBD</option>
                                            <option value="Barabanki" >Barabanki</option>
                                            <option value="Faizabad" >Faizabad</option>
                                            <option value="Basti" >Basti</option>
                                            <option value="Gorakhpur" >Gorakhpur</option>
                                        
                                        </select>
                                    
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2-auto" for="drop">DROP</label>
                                        <select class="form-control-plaintext col-sm-9 mr-1 drpdown" id="drp" name="Drop">
                                        
                                            <option value="" selected disabled hidden>Select Drop Location</option>
                                            <option value="Charbagh" >Charbagh</option>
                                            <option value="Indira Nagar" >Indira Nagar</option>
                                            <option value="BBD" >BBD</option>
                                            <option value="Barabanki" >Barabanki</option>
                                            <option value="Faizabad" >Faizabad</option>
                                            <option value="Basti" >Basti</option>
                                            <option value="Gorakhpur" >Gorakhpur</option>
                                        
                                        </select>
                                    
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2-auto" for="cabtype">CAB TYPE</label>
                                        <select class="form-control-plaintext col-sm-9 mr-1 drpdown" name="Cabtype" id="cbtype">
                                        
                                            <option value="" selected disabled hidden>Select CAB Type</option>
                                            <option value="CedMicro" >CedMicro</option>
                                            <option value="CedMini" >CedMini</option>
                                            <option value="CedRoyal" >CedRoyal</option>
                                            <option value="CedSuv" >CedSuv</option>
                                        
                                        </select>
                                    
                                    </div>

                                    <div class="form-group row">

                                        <label class="col-sm-2-auto" for="luggage">Luggage</label>
                                        
                                        <input type="text" id="luggage" placeholder="Enter Weight in kg" class="ibox col-sm-9 col-md-9 col-xs-9 col-lg-9 form-control-plaintext">
                                    
                                    </div>

                                    <div class="form-group row bg-danger text-center mr-1 ml-1" id="newdiv1" style="color:black">

                                     

                                    </div>

                                    <div class="form-group row bg-info text-center mr-1 ml-1" id="newdiv" style="color:black">

                                     

                                    </div>

                                    <button type="submit" id="calculate" name="Calculate" class="btn btn-danger btn-lg form-control mb-3">Calculate Fare</button>
                                    
                                </form>

                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                
                            </div>

                        </div>
                    
                        
                    
      
      
                </div>

            

        </div>

    </div>
    </div>

    

   

    <footer class="site-footer" style="background-color:yellow">
      <div class="container">
        <div class="row">
        <div class="col-xs-6 col-md-3 text-center">
            <i class="fab fa-facebook pt-5"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-instagram-square"></i>
          </div>

          <div class="col-xs-12 col-md-6 text-center">
            <h1 style="font-size: 35px;" class="text-danger">Taxi</h1>
            <p><i class="fas fa-heart" style="color:brown ;"></i>go where you<strong>want</strong></p>
          </div>

         

          <div class="col-xs-6 col-md-3 text-center mt-3">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
              <a href="#">Scanfcode</a>.
            </p>
          </div>
        </div>
        <hr>
      </div>
      
    </footer>

    

    <?php

       

        

    ?>

    

    <script>

        $(document).ready(function() {
            

            $("#cbtype").change(function() {
                
                var cbtype=$(this).val();
                
                if(cbtype=="CedMicro") {
                    $("#luggage").attr("disabled","enabled");
                    $("#newdiv1").text("Luggage facility is not available in CedMicro");
                }
                else if(cbtype=="CedMini") {
                    $("#luggage").removeAttr("disabled","enabled");
                    $("#newdiv1").hide();
                }
                else if(cbtype=="CedRoyal") {
                    $("#luggage").removeAttr("disabled","enabled");
                    $("#newdiv1").hide();
                }
                else if(cbtype=="CedSuv") {
                    $("#luggage").removeAttr("disabled","enabled");
                    $("#newdiv1").hide();
                }



            });

            $("#luggage").bind("keypress", function (e) {
                    var keyCode = e.which ? e.which : e.keyCode
             
                    if (!(keyCode >= 48 && keyCode <= 57)) {
                    //console.log(keycode);
                    return false;
                    }
            });

            

            $("#calculate").click(function(event) {
                event.preventDefault();

                var w=$("#pickp").val();
                var x=$("#drp").val();
                var y=$("#cbtype").val();
                var z=$("#luggage").val();

                if(w<0) {
                    alert("Weight should not be zero.");
                }


                

                

                if(w==x) {
                    alert("pickup and drop location cannot be same.");
                    window.location="cedcab.php";
                }

                



                
                
                

                $.ajax({
                    

                    url:'cedcabnew3.php',
                    type:'POST',
                    data: { pickup:w,drop:x,cabtype:y,luggage:z },
                    
                    
                    success: function (result) {

                        $("#newdiv").text(result);
                        
                        
                    },

                    error: function () {
                        alert("error");
                    }

                    
                });

                

                
            });

            

            


            
            
        });

    </script>
    
</body>
</html>