<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nashik</title>
    <link rel="stylesheet" href="mycss.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script
</head>
<body>
<div class="container img-responsive" style="background-image: url(vineyards1.jpg);text-align: center; height:  210px;width: auto;border:2px;border-color: black;vertical-align: central">
    <br/>
    <br/>
    <h1 style="color: #000000;font-family: 'Josefin Slab', serif">NASHIK</h1>
</div>

<nav class="navbar navbar-default">
    <div class="container-fluid" style="background-color: brown; color: #ffffff;padding: 2px;">
        <div class="navbar-header" style="text-align: center;width: auto">
            <a href="#" class="navbar-brand" style="font-family: Josefin slab,serif;color: #ffffff">INFORMATION</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="#" class="me" style="color: #ffffff;font-family: 'Josefin Slab', serif">History</a> </li>
                <li><a href="#" class="me" style="color: #ffffff;font-family: 'Josefin Slab', serif;">Agricultar</a></li>
                <li><a href="#" class="me" style="color: #ffffff; font-family: 'Josefin Slab', serif">About City</a></li>
                <li><a href="#" class="me" style="color: #ffffff; font-family: 'Josefin Slab', serif">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<div  style="font-family: 'Josefin Slab', serif;text-align: center;color: #ffffff">
    Nashik is one of the most important cities of Northern Maharashtra.
    Nashik, in Maharashtra, is situated at a distance of 200 km from Mumbai (Bombay) as well as Pune.
    The city has become the center of attraction because of its beautiful surroundings and cool and pleasant climate.
    Nashik has a personality of its own due to its mythological, historical, social and cultural importance.
    The city, vibrant and active on the industrial, political, social and cultural fronts, has influenced the lives of many a great personalities.
    The river Godavari flows through the city.
    Temples and ghats on the banks of Godavari have made Nashik one of the holiest places for Hindus all over the World
</div>



<h2 class="w3-center">Automatic Slideshow</h2>

<div class="w3-content w3-section" style="max-width:500px">
    
    <img class="mySlides" src="images/sula.jpg" style="width:100%">
    <img class="mySlides" src="images/Black-Grapes-On-Tree.jpg" style="width:100%">
</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>


<div class="container">
    <section>
        <div class="page-header" id="aboutauthor">
            <h2>History<small> Know the person himself.</small></h2>
        </div><!-- End Page Header -->

        <div class="row">
            <div class="col-sm-8">
                <h3>Travel Diaries by Abbas Lakdawala</h3>
                <p>is Doing MCA(Science) From MIT college Pune,Is a Developer and coder,Loves to Travel and has soft spot for bikes and Cars.He loves to chases his dreams.</p>
            </div>
            <div class="col-sm-4">
                <img src="images/Nashik.jpg" class="img-responsive" alt="image">
            </div>
        </div><!-- End row -->


        <div class="container">
            <section>
                <div class="page-header" id="aboutauthor">
                    <h2>Agricultar<small> Know the person himself.</small></h2>
                </div><!-- End Page Header -->

                <div class="row">
                    <div class="col-sm-8">
                        <h3>Travel Diaries by Abbas Lakdawala</h3>
                        <p>is Doing MCA(Science) From MIT college Pune,Is a Developer and coder,Loves to Travel and has soft spot for bikes and Cars.He loves to chases his dreams.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="images/Nashik.jpg" class="img-responsive" alt="image">
                    </div>
                </div><!-- End row -->



                <div class="container">
                    <section>
                        <div class="page-header" id="aboutauthor">
                            <h2>About City<small> Know the person himself.</small></h2>
                        </div><!-- End Page Header -->

                        <div class="row">
                            <div class="col-sm-8">
                                <h3>Travel Diaries by Abbas Lakdawala</h3>
                                <p>is Doing MCA(Science) From MIT college Pune,Is a Developer and coder,Loves to Travel and has soft spot for bikes and Cars.He loves to chases his dreams.</p>
                            </div>
                            <div class="col-sm-4">
                                <img src="images/Nashik.jpg" class="img-responsive" alt="image">
                            </div>
                        </div><!-- End row -->










<div class="page-header" id="aboutauthor">
    <h2>About Author.<small> Know the person himself.</small></h2>
</div><!-- End Page Header -->

<div class="row">
    <div class="col-sm-8">
        <h3>About Nasik by Rakesh Duddugunta </h3>
        <p>MCA(Science) From MIT college Pune.</p>
    </div>
    <div class="col-sm-4">
        <img src="images/Black-Grapes-On-Tree.jpg" class="img-responsive" alt="image">
    </div>
</div><!-- End row -->



</body>
</html>
