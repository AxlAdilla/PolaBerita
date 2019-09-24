<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>
<style>
.imgNews{
    
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    height:150px;
}
a{
    text-decoration:none;
    color:white;
}
a:hover {
    color:white;
}
</style>
<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">PORTAL BERITA</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <li><a href="sign-in.php" class="" data-close="true"><i class="material-icons">person</i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Kategori</h2>
            </div>

            <div style="display:flex;flex-direction:row">
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <a href="?category=business" class="btn btn-primary" style="width:100%">Bisnis</a>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <a href="?category=entertainment" class="btn btn-primary" style="width:100%">Hiburan</a>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <a href="?category=general" class="btn btn-primary" style="width:100%">Umum</a>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <a href="?category=health" class="btn btn-primary" style="width:100%">Kesehatan</a>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <a href="?category=science" class="btn btn-primary" style="width:100%">Sains</a>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <a href="?category=sports" class="btn btn-primary" style="width:100%">Olah Raga</a>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <a href="?category=technology" class="btn btn-primary" style="width:100%">Teknologi</a>
                </div>
            </div>
        </div>
        <div class="container-fluid m-t-20">
            <div class="block-header">
                <h2>Berita Terpanas</h2>
            </div>
            <div class="row clearfix align-center">
            <?php
                $category='';
                if(isset($_GET['category'])){
                    $category= $_GET['category'];
                }
                $ch = curl_init(); 
                // set url 
                curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=id&category=".$category."&apiKey=6d4678ec56764048b013936199a51f5f"); 

                //return the transfer as a string 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

                // $output contains the output string 
                $output = curl_exec($ch); 

                curl_close($ch);
                $decoded = json_decode($output);
            ?>
                <!-- <div id="loaderNews" class="preloader pl-size-xs m-t-20">
                    <div class="spinner-layer pl-indigo">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div> -->
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="topNews" class="card">
                            <div class="body">
                                <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic_2" data-slide-to="0" class=""></li>
                                        <li data-target="#carousel-example-generic_2" data-slide-to="1" class=""></li>
                                        <li data-target="#carousel-example-generic_2" data-slide-to="2" class="active"></li>
                                        <li data-target="#carousel-example-generic_2" data-slide-to="3" class="active"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox" style=" width:100%; height: 400px !important;">
                                            <?php for ($i=0; $i < 4 ; $i++) { 
                                                if($i == 0){ 
                                            ?>
                                                    <div class="item active">
                                            <?php
                                                }else{ 
                                            ?>
                                                    <div class="item" >
                                            <?php
                                                }
                                            ?>
                                            <img style="width:100%;height:400px" src='<?php echo $decoded->articles[$i]->urlToImage ?>'>
                                            <div class="carousel-caption">
                                                <a target="_blank" href="<?php echo $decoded->articles[$i]->url ?>">
                                                    <h3><?php echo $decoded->articles[$i]->title ?></h3>
                                                    <p><?php echo $decoded->articles[$i]->description ?></p>
                                                </a> 
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <!-- Controls -->
                                    <a target="_blank" class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($decoded->articles as $i=>$val){ 
                            if($i > 3){ ?>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a target="_blank" href="<?php echo $val->url ?>" style="color:black">

                                        <div id="topNews" class="card" style="height:300px;overflow:hidden;">
                                            <div class="imgNews" class="body" style="background-image:url('<?php echo $val->urlToImage ?>');">
                                            </div>
                                            <div class="footer">
                                                <h4>
                                                    <?php echo $val->title ?>
                                                </h4>
                                                <p>
                                                    <?php echo $val->description ?>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!--  Custom Js -->
    <script src="js/admin.js"></script>
    <!-- <script src="js/pages/index.js"></script> -->

    <!-- Demo Js -->
    <!-- <script src="js/demo.js"></script> --> 
    <!-- <script>
    var url = 'https://newsapi.org/v2/top-headlines?' +
        'country=us&' +
        'apiKey=6d4678ec56764048b013936199a51f5f';
    var req = new Request(url);
    fetch(req)
        .then(function(response) {
            return (response.json());
        })
        .then(function(resp){
            console.log(resp);
        })
    </script> -->
</body>

</html>
