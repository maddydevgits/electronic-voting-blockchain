<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="src/images/favicon.png" />
    <title>Electronic Voting using Blockchain Technology</title>
    <meta name="description" content="" />
    <link rel="image_src" href="src/images/img_head.jpg" />



    <link href="src/css/bootstrap.min.css" rel="stylesheet" />
    <link href='src/css/stylef500.css?v=13' rel='stylesheet' type='text/css' />
    <link href='src/css/responsivee5bf.css?v=12' rel='stylesheet' type='text/css' />
    <link href='src/css/animate.css' rel='stylesheet' type='text/css' />


</head>

<body>
    <section class="section-3">
        <div class="wrapper" style="min-height: 636px;">
            <div class="container">
                <h2>
                  Result
                </h2>

                <div class="col-md-12 text-center">
                <h1>Total voters : <span id="voters"></span> voters </h1>
                </div>
                <div class="blocks">
                    <div class="row">
                        <div class="col-md-4 col-xs-12   wow bounceInDown" data-wow-delay="0.2s">
                            <div class="block">
                                <div class="row">
                                    <div class="col-md-12 col-xs-3 text-center">
                                        <div class="icon">
                                            <img src="src/images/user.png" class="img-responsive img-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-9">
                                        <div class="title">Nominee 1 Got
                                          <span id="v1"> </span>votes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12  wow bounceInDown" data-wow-delay="0.4s">
                            <div class="block">
                                <div class="row">
                                     <div class="col-md-12 col-xs-3 text-center">
                                        <div class="icon">
                                            <img src="src/images/user.png" class="img-responsive img-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-9">
                                        <div class="title">Nominee 2 Got
                                          <span id="v2"> </span> votes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12  wow bounceInDown" data-wow-delay="0.6s">
                            <div class="block">
                                <div class="row">
                                     <div class="col-md-12 col-xs-3 text-center">
                                        <div class="icon">
                                            <img src="src/images/user.png" class="img-responsive img-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-9">
                                        <div class="title">Nominee 3 Got
                                          <span id="v3"> </span> votes</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--END-POP-->
    <script type="text/javascript" src="src/js/jquery.min.js"></script>
	<script type="text/javascript" src="src/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="src/js/app.js"></script>
    <script type="text/javascript" src="src/js/wow.min.js"></script>
    <script type="text/javascript" src="src/js/SmoothScroll.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="src/js/js/web3.min.js"></script>
    <script src="src/js/js/truffle-contract.js"></script>
    <script src="src/js/js/voterresult.js"></script>



</body>


</html>
