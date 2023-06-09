<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- initial scale 1 for mobile website -->
    <title>Projet</title>
    <meta name="apple-mobile-web-app-title" content="math.Foodonya">
    <!-- Bootstrap reference starts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins|Titillium+Web&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- md is the breakpoint for 768px device. refer bottom comments on styles.css file. -->
    <!-- Bootstrap reference ends -->

    <!--  Custom Styles file should be added after the Bootstrap library links, as in here.-->
    <link href="../css/style.css" rel="stylesheet" type="text/css">

    <!-- Javascript's powerful AJAX load() is used to load data tiles from load_dashboard_tiles.php every 2 seconds -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        var auto_refresh = setInterval(
            function() {
                $('#load_data_tiles').load('load_dashboard_tiles.php').fadeIn("slow");
            }, 2000); // refresh every 2 seconds
    </script>


</head>

<body class="bg-white" >

    <!-- Bootstrap Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <a class="navbar-brand" href="/index.php"><i class="far fa-chart-bar math-red"></i> <span class="span-math math-red">Projet</span></a>
    </nav>

    <div class="container lb-8 bg-white" style="margin-top: 60px;">

        <!-- dashboard tiles -->
        <div class="container-fluid">
            <!-- Javascript's AJAX load() method updating dashboard tiles will be loaded here from load_dashboard_tiles.php and replaces the bootstrap spinner animation -->
            <div id="load_data_tiles">
                <div class="spinner-border text-warning m-5 light-mode" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                    <!-- this will be replaced by the loading dashboard tiles -->
                </div>
            </div>

        <div class="container container-spacer"></div>

        <!-- Bootstrap footer-->
<nav class="navbar fixed-bottom navbar-dark text-center p-0 m-0">
    <div class="col-md-6 col-xs-6 p-0">
            This is testing Page
        </span>
    </div>
    <div class="author-bg col-md-4 col-xs-6 p-0">
        <span class="author-text navbar-text bottom text-danger">
            Ghassen & Chaima <i class="fas fa-copyright"></i> 2023
        </span>
    </div>
</nav>

</body>

</html>
