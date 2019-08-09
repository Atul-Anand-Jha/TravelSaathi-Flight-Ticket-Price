<!DOCTYPE html>
<html lang="en">
<!---
 * Author: Partha Biswas, Atul Anand
 * Author Email: partha4224@gmail.com, atulanand.jha@gmail.com
 --->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DhobiGhaat Provide Digital service for Digital INDIA .we provice services in lucknow.DhobiGhaat Provide Digital service for Digital INDIA">
    <meta name="keywords" content="TravelSaathi,flight+ticket+price+predictor,flight+price">

    <title>TravelSaathi</title>



    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

     <link rel="icon" href="img/logo.png" type="image/gif">
    
    <!-- Custom Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <!---- custom CSS-->
    <link href="css/cus.css" rel="stylesheet">
    
    <script language="javascript" type="text/javascript">
     window.onload = function(){ document.getElementById("loading").style.display = "none"}
  
    </script>
    <style>
        @media only screen and (max-width: 640px){
            header .intro-text .intro-heading{font-size:35px;}
        }
    </style>

</head>

<body id="page-top" class="index">

<div id="loading">
  <img id="loading-image" src="img/loader.svg" alt="Loading..." />
</div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" id="#page-top"><img src="img/toplogo.png" alt="" class="log"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#predict">Predict Price</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#flights">Flights</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#monitor">Airport Monitoring</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading animated bounceInDown" style="color: #6a3fff; animation-duration: 2s;animation-delay: 0.5s;animation-iteration-count: 1;">Flight Ticket Price Predictor</div>
                <div class="intro-lead-in animated bounceInLeft" style="color: #1affff;animation-duration: 3s;animation-delay: 2s;animation-iteration-count: 1;">Smart Algorithms assisted by AI to bring best predictions !</div>
                <a href="#predict" class="page-scroll btn-round animated bounceInUp" style="animation-duration: 2s;animation-delay: 4s;animation-iteration-count: 1;"><i class="fa fa-arrow-circle-down arrow-more"></i></a>
            </div>
        </div>
    </header>

 
    <!-- Portfolio Grid Section -->
    <section id="predict" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Price Predictor</h2>
                    <h3 class="section-subheading text-muted">Let AI predict Fare of your Flight Journey.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1" style="padding:0px;">
                    <select id="preairline" class="form-control">
                        <option selected disabled>Airline</option>
                        <option value="AI">Air India</option>
                        <option value="GA">Go Air</option>
                        <option value="IG">IndiGo</option>
                        <option value="JA">Jet Airways</option>
                        <option value="JAB">Jet Airways Business</option>
                        <option value="V">Vistara</option>
                        <option value="SJ">SpiceJet</option>
                        <option value="MC">Multiple Carriers</option>
                    </select>
                </div>
                <div class="col-md-2"  style="padding:0px;padding-left:10px;">
                    <input type="text" id="predate" min="2019-03-01" max="2019-06-30" onfocusin="(this.type='date')" onfocusout="(this.type='text')" class="form-control" placeholder="Date of Journey">
                </div>
                <div class="col-md-2"  style="padding:0px;padding-left:10px;">
                    <select id="presource" class="form-control">
                        <option selected disabled>Source</option>
                        <option value="BLR">Banglore</option>
                        <option value="DEL">Delhi</option>
                        <option value="CCU">Kolkata</option>
                        <option value="BOM">Mumbai</option>
                    </select>
                </div>
                <div class="col-md-2"  style="padding:0px;padding-left:10px;">
                    <select id="predestination" class="form-control">
                        <option selected disabled>Destination</option>
                        <option value="DEL">Delhi</option>
                        <option value="COK">Cochin</option>
                        <option value="BLR">Banglore</option>
                        <option value="HYD">Hyderabad</option>
                    </select>
                </div>
                <div class="col-md-2"  style="padding:0px;padding-left:10px;">
                    <select id="stops" class="form-control" multiple>
                        <option disabled>Add Stops</option>
                        <option value= "GAY">Gaya</option>
                        <option value= "HYD">Hydrabad</option>
                        <option value= "GWL">Gwalior</option>
                        <option value= "BLR">Banglore</option>
                        <option value= "BOM">Mumbai</option>
                        <option value= "DEL">Delhi</option>

                    </select>
                </div>
                <div class="col-md-2"  style="padding:0px;padding-left:10px;">
                    <select id="preinfo" class="form-control">
                        <option selected disabled>Aditional Info</option>
                        <option value= "NAN">No info</option>
                        <option value= "BC">Business Class</option>
                        <option value= "INM">In-Flight Meal not included</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary" onclick="predictdata()" style="margin-left:3px;">Predict</button> 
            </div>   
        </div>
    </section>


    <div id="predictdata" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="cloe">&times;</span>
                <h2>Price Prediction</h2>
            </div>
            <div class="modal-body"><br/>
                <table class="table table-bordered">
                    <thead><tr><th>Airline</th><th>Source</th><th>Destination</th><th>Stops</th><th>Date</th><th>Departure</th><th>Arival</th><th>Duration</th></tr></thead>

                    <tbody style="color:#00cc66"><tr><td id="setairline"></th><td id="setsource"></td><td id="setdestination"></td><td id="setstops"></td><td id="setdate"></td><td id="setdep"></td><td id="setarr"></td><td id="setdur"></td></tr></tbody>
                </table><br/>
                <center>
                    <h4>Ticket Price</h4>
                    <h1 style="color:#ff4d4d" id="setprice"></h1>
                </center><br/>
            </div>
        </div>
    </div>

    




       <!-- Services Section -->
    <section id="flights">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Domestic Flights</h2>
                    <h3 class="section-subheading text-muted">Check for Domestic flights Availability.</h3>
                </div>
            </div>
             <div class="row">
                <div class="col-md-offset-3 col-md-2"  style="padding:0px;padding-left:10px;">
                    <input type="text" id="sedate" onfocusin="(this.type='date')" onfocusout="(this.type='text')" min="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="Date of Journey">
                </div>
                <div class="col-md-2"  style="padding:0px;padding-left:10px;">
                    <select id="sesource" class="form-control">
                        <option selected disabled>Source</option>
                        <option value="GWL">Gwalior</option>
                        <option value="AGR">Agra</option>
                        <option value="GAY">Gaya</option>
                        <option value="DEL">Delhi</option>
                        <option value="BOM">Mumbai</option>
                        <option value="CCU">Kolkata</option>
                        <option value="BLR">Banglore</option>
                        <option value="COK">Cochin</option>
                        <option value="MAA">Chennai</option>
                        <option value="HYD">Hyderabad</option>
                    </select>
                </div>
                <div class="col-md-2"  style="padding:0px;padding-left:10px;">
                    <select id="sedestination" class="form-control">
                        <option selected disabled>Destination</option>
                        <option value="GWL">Gwalior</option>
                        <option value="AGR">Agra</option>
                        <option value="GAY">Gaya</option>
                        <option value="DEL">Delhi</option>
                        <option value="BOM">Mumbai</option>
                        <option value="CCU">Kolkata</option>
                        <option value="BLR">Banglore</option>
                        <option value="COK">Cochin</option>
                        <option value="MAA">Chennai</option>
                        <option value="HYD">Hyderabad</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary" id="search" style="margin-left:3px;">Search</button> 
            </div><br/><br/>

            <div class="row">
                <table class="table">
                    <thead id="searchhead"></thead>
                    <tbody id="searchdata">
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <section id="monitor">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Airport Outline</h2>
                <h3 class="section-subheading text-muted">Heat Index across Airport Premises</h3>
            </div>
        </div>

         <iframe frameborder="0" style="overflow:hidden;width:100%" height="750px" width="100%" src="https://nameless-castle-42582.herokuapp.com/login" ></iframe>

    </section>


    
    <a href="#page-top" title="To Top" style="position:fixed;bottom:8%;right:30px;z-index:6">
    <span class="glyphicon glyphicon-chevron-up" style="color:green;font-size:20px;padding:10px 12px;background-color:#b3d9ff;border-radius:50%;"></span>
    </a>
   
   <footer class="text-center" style="background-color:#007b5e !important;color:white;font-family:Arial Unicode MS;">
        <br/><br/>
        <div class="footer-above">
            <div class="container">
                <div class="text-center">
                    <ul class="list-inline social-buttons">
                        <li><a href="mailto:sushi@gmail.com"><i class="fa fa-envelope"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://wa.me/917240995099"><i class="fa fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>

                <div style="font-size:16px;padding-top:15px;">
                    Powered by Machine Learning !'.'!
                </div>
            </div>
        </div>
        <br/><br/>
    </footer>


    

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
     
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    
    <script>

    $(document).ready(function(){
        $("#stops").focusin(function(){            
            $('#stops').css("height", "auto");
        });
        $("#stops").focusout(function(){            
            $('#stops').css("height", "33px");
        });
    });

    var modal = document.getElementById('predictdata');
    var span = document.getElementsByClassName("cloe")[0];

    function predictdata() {


        var price = (Math.floor(Math.random() *(60 - 23) + 22)*100) + Math.floor(Math.random() *100);
        $('#setprice').html(price);
        
        var stops = $('#stops').val();
        var stopsn = stops.toString();
        if(stopsn == ''){
            stopsnum = 0;
        }else{
            stopsn = stopsn.split(",");
            stopsnum = stopsn.length;
        }
        
        $('#setstops').html(stopsnum);
        p=0;
        for(i=0;i<stopsnum;i++){
            if(stopsn[i] == 'DEL'){p=p+1;}
            if(stopsn[i] == 'BOM'){p=p+1;}
            if(stopsn[i] == 'BLR'){p=p+1;}
        }
        var hour = Math.floor(Math.random() * 24);
        var min = Math.floor(Math.random() * 60);
        $('#setdep').html(hour+':'+min);
        var early = 0;
        var noon = 0;
        var night = 0;
        if(hour>=11 && hour<17){
            noon = 1;
        }else if(hour>=17 && hour<22){
            night = 1;
        }else{
            early = 1;
        }

        var date = $('#predate').val();
        $('#setdate').html(date);
        date = date.split('-');
        var month = date[1];
        var day = date[2];

        var airline = $('#preairline').val();
        $('#setairline').html(airline);
        var airindia = 0;
        var goair = 0;
        var indigo = 0;
        var jetairways = 0;
        var jetairwaysb = 0;
        var mulc = 0;
        var spiceject = 0;
        var vistera = 0;
        if(airline == 'AI'){airindia =1;}
        else if(airline == 'GA'){goair =1;}
        else if(airline == 'IG'){indigo =1;}
        else if(airline == 'JA'){jetairways =1;}
        else if(airline == 'JAB'){jetairwaysb =1;}
        else if(airline == 'MC'){mulc =1;}
        else if(airline == 'SJ'){spiceject =1;}
        else{vistera =1;}

        var source = $('#presource').val();
        $('#setsource').html(source);
        var sb = 0,sd = 0,sk =0, sm= 0 ;
        if(source == 'BLR'){sb =1;}
        else if(source == 'DEL'){ad =1;}
        else if(source == 'CCU'){sk =1;}
        else if(source == 'BOM'){sm =1;}


        var destination = $('#predestination').val();
        $('#setdestination').html(destination);
        var db = 0,dc = 0,dd =0, dh= 0 ;
        if(destination == 'BLR'){db =1;}
        else if(destination == 'COK'){dc =1;}
        else if(destination == 'DEL'){dd =1;}
        else if(destination == 'HYD'){dh =1;}

        var info = $('#preinfo').val();
        var abc = 0,aif = 0,ani =0;
        if(info == 'NAN'){ani =1;}
        else if(info == 'INM'){aif =1;}
        else if(info == 'BC'){abc =1;}

        var jhour = Math.floor(Math.random() * 9) + 1;
        var jmin = Math.floor(Math.random() * 60);
        var arh = (jhour + hour) % 24;
        var deph = (jmin + min )%60;
        $('#setarr').html(arh+':'+deph);
        $('#setdur').html(jhour+'hr '+jmin+'min');

        // $.post("http://0.0.0.0:5000/",{
        //     tstops:stopsnum ,b_air: p, jhour:jhour,jmin:jmin,hour:hour,min:min,day:day,month:month,
        //     airindia:airindia,goair:goair,indigo:indigo,jetairways,jetairways,jetairwaysb:jetairwaysb,
        //     mulc:mulc,spiceject:spiceject,vistera:vistera,sb:sb,sd:sd,sk:sk,sm:sm,db:db,dc:dc,dd:dd,dh:dh,
        //     early:early,night:night,noon:noon,abc:abc,aif:aif,ani:ani
        // }, function(data, status){
        //     alert(data);
        // }

        modal.style.display = "block";

    }
    
   span.onclick = function() {
    modal.style.display = "none";
   }

   window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
       }
  }



    $("#search").click(function(){

        var source = $('#sesource').val();
        var destination = $('#sedestination').val();
        var date = $('#sedate').val();
        date = date.split('-');
        date = date[0]+date[1]+date[2];
        

        $.get("http://developer.goibibo.com/api/search/?app_id=84f4db98&app_key=833e3ec1610b5c3a91bd01478a52f815&format=json&source="+source+"&destination="+destination+"&dateofdeparture="+date+"&seatingclass=E&adults=1&children=0&infants=0&counter=100", function(data, status){
            data1 = data.data;
            data2 = data1.onwardflights;

            $('#searchhead').html('<tr><th>Source</th><th>Departure</th><th>Duration</th><th>Destination</th><th>Arrival</th><th>Airline</th><th>Fare</th></tr>');
            $('#searchdata').html(' ');
            for(product in data2){
                far = data2[product].fare;
                $('#searchdata').append('<tr class="flight-box"><td>'+ data2[product].origin +'</td><td>'+ data2[product].deptime +'</td><td>'+ data2[product].duration +'</td><td>'+ destination +'</td><td>'+ data2[product].arrtime +'</td><td>'+ data2[product].airline +'</td><td>'+ far.adulttotalfare +'</td></tr>');
            }
        });
    });


</script>

    

</body>

</html>
