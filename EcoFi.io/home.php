<?php include("blocks/head.php"); ?>

    <title>ECOFI</title>
    <meta name="description" content="ECO">
</head>

<body class="home">

<?php include("blocks/header.php"); ?>
<?php include("blocks/nav-mobile.php"); ?>
        
        <section class="content normal">
            <h1 class="mobile center">ECOFI</h1>
            <div class="grid">
                <div class="col-1-3">
                    <div class="wrap">
                        <h2>LEARN MORE</h2>
                        <h6 class="green">KNOWLEDGE</h6>
                        <img src="img/03.png" alt="">
                        <p>New to ECO? Learn about the possibilities of ECO.</p>
                        <a href="about.php" class="button">LEARN</a>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap">
                        <h2>GET ECO</h2>
                        <h6 class="green">ECOSWAP</h6>
                        <img src="img/02.png" alt="">
                        <p style="margin: 0 0 2.2em;">"Swap ECO"</p>
                        <a style="width:48%;float: left;" href="eco-swap.php" class="button">SWAP</a>
                        <a style="width:48%;float: right;padding: 11px 20px;" href="https://app.uniswap.org/#/swap?inputCurrency=0x901cabaa1ee064ee8649c83f283d3f2165e13480&outputCurrency=ETH" target="_blank" class="button"><img src="img/logo_white.svg"></a>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap">
                        <h2>FARM SPRT</h2>
                        <h6 class="green">STAKING</h6>
                        <img src="img/01.png" alt="">
                        <p>Beta Staking closed, Official Staking Lauching Soon.</p>
                        <a href="farmpreview.php" class="button">FARM</a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="content tablet">
            <h1 class="mobile center maB">ECOFI</h1>
            <div class="grid">
                <div class="wrap" href="home.php">
                    <a href="about.php">
                    <div class="col-1-2 mobile-col-1-2 left">
                        <h2>LEARN MORE</h2>
                        <h6 class="green">KNOWLEDGE</h6>
                    </div>
                    <div class="col-1-2 mobile-col-1-2 noPa center">
                        <img src="img/03.png" alt="">
                    </div>
                    </a>
                </div>
                <div class="wrap" href="home.php">
                    <a href="eco-swap.php">
                    <div class="col-1-2 mobile-col-1-2 left">
                        <h2>GET ECO</h2>
                        <h6 class="green">ECOSWAP </h6>
                    </div>
                    <div class="col-1-2 mobile-col-1-2 noPa center">
                        <img src="img/02.png" alt="">
                    </div>
                    </a>
                </div>
                <div class="wrap" href="home.php">
                    <a href="eco-farm.php">
                    <div class="col-1-2 mobile-col-1-2 left">
                        <h2>FARM SPRT</h2>
                        <h6 class="green">STAKING</h6>
                    </div>
                    <div class="col-1-2 mobile-col-1-2 noPa center">
                        <img src="img/01.png" alt="">
                    </div>
                    </a>
                </div>
            </div>
        </section>

<?php include("blocks/footer.php"); ?>

<style type="text/css">

    .paB { padding-bottom: 20px; }
    .maB { margin-bottom: 20px; }

        .content {
        margin: 0 25px; }

    .content .grid {
        padding: 20px; }

    .content .grid .col-1-3 {
        text-align: center;
        padding: 20px;
        color: #000; }

    .content .grid .col-1-3 .wrap {
        text-align: center;
        background-color: #fff;
        border-radius:12px;
        padding: 40px;
        color: #000;
        height: 500px; }

    .content .grid .col-1-3 h2 {
         }

    .content .grid .col-1-3 h6 {
         }

    .content .grid .col-1-3 img {
        max-width: 285px; }

    .content .grid .col-1-3 p {
        color: #000; }

    .content .grid .col-1-3 a {
        color: #fff;
        background-color:#000;
        border-radius:12px;
        display:inline-block;
        cursor:pointer;
        font-size:16.5px;
        padding:20px 20px;
        width: 100%;
        letter-spacing: 2px;
        margin-top: 20px; }

    .content.tablet {
        display: none; }

    .content.normal {
        display: block; }

    @media only screen and (max-width: 1300px) {
        .content .grid {
            max-width: 600px; }

        .content .grid .wrap {
            text-align: center;
            background-color: #fff;
            border-radius:12px;
            color: #000;
            padding: 0;
            height: 160px;
            margin-bottom: 30px; }

        .content .grid .wrap > a{
            padding: 40px 20px;
            display: block; } 

        .content .grid .col-1-2 {
            padding: 20px 0;
            color: #000; }

        .content .grid .col-1-2 h2 {
            font-size: 25px; }

        .content .grid .col-1-2 h6 {
            font-size: 16.5px;
            font-weight: normal;
            margin: 5px 0 0; }

        .content .grid .col-1-2 p {
            color: #000; }



        .content.tablet {
            display: block; }

        .content.normal {
            display: none; }
        .content .grid .col-1-2 img {
            max-width: 170px; }
    }

    @media handheld, only screen and (max-width: 767px) {
        .content .grid {
            padding: 0px; }
        .content .grid .col-1-3 img {
            max-width: 200px; }

        .content .grid .col-1-2 h2 {
            font-size: 22px; }

        .content .grid .col-1-2 h6 {
            font-size: 15.5px; }
        .content .grid .col-1-2 img {
            max-width: 140px; }
    }
</style>
<script type="text/javascript" src="scripts.js"></script>

</body>
</html>