<?php include("blocks/head.php"); ?>

    <title>ECO FARM | ECOFi</title>
    <meta name="description" content="ECO">
</head>

<body class="farm">

<?php include("blocks/header.php"); ?>
<?php include("blocks/nav-mobile.php"); ?>

        <div class="ecoblock grid center">

            <a class="mobile1" style="font-size: 34px;font-family: changeling-neo;display:block;margin:0px 0 10px;" href="eco-farm.php"><span class="green">ECO</span>FARM</a>
            <p class="mobile1" style="color: #fff;font-size: 14.5px;">STAKE YOUR ECO TODAY</p>

            <div class="eco e01 col-6-12">
                <div class="wrap">
                    <div style="width:80%;" class="wrapcenter centered">
                        <h4 class="desktop">ECO STAKED</h4>
                        <p style="margin-bottom: 0;"><span id="numbershow"></span> <span id="econ" class="mobile"> ECO </span></p>
                        <button style="background-color: black;color:white;padding: 20px 0px;text-align:center;width: 100%;" id="fButton" class="button">DEPOSIT</button>
                    </div>
                </div>
            </div>

            <div class="eco e02 col-3-12">
                <div class="wrap">
                    <div class="wrapcenter centered">
                        <div class="mobile-col-2-3">
                            <h4 class="desktop1">SRPT EARNED TODAY</h4>
                            <h4 class="mobile1 left bold">DAILY EARNINGS</h4>
                        </div>
                        <div class="mobile-col-1-3">
                            <p><span id="dailyearnings"></span></p>
                        </div>
                        <div class="mobile-col-2-3">
                            <h4 class="desktop1">SRPT EARNED PER HOUR</h4>
                            <h4 class="mobile1 left bold">HOURLY EARNINGS</h4>
                        </div>
                        <div class="mobile-col-1-3">
                            <p class="noMaB"><span id="hourlyearnings"></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="eco e03 col-3-12">
                <div class="wrap maBm">
                    <div class="wrapcenter centered">
                        <h4 class="desktop1">CURRENT SPRT</h4>
                        <p class="desktop1" id="srpt"></p>

                        <div class="mobile-col-2-3">
                            <h4 class="desktop1">SPRT TOTAL</h4>
                            <h4 class="mobile1 left bold">SPRT TOTAL</h4>
                        </div>
                        <div class="mobile-col-1-3">
                            <p><span id="totalearnings"></span></p>
                        </div>
                    </div>
                </div>

                <div class="wrap mobile1" style="display: none;">
                    <div class="wrapcenter centered">
                        <div class="mobile-col-2-3">
                            <h4 class="desktop1">DAYS LEFT</h4>
                            <h4 class="mobile1 left bold">DAYS LEFT</h4>
                        </div>
                        <div class="mobile-col-1-3">
                            <p><span id="daysleft">88</span></p>
                        </div>
                    </div>
                </div>

                <div class="wbutton" style="color: white;">WITHDRAW</div>
            </div>

        </div>

        <div class="ecoform center">

            <div class="wrap centered">
                <h4>ECO TO STAKE:</h4>
                <input type="number" name="number" id="number" min="50" step="50" max="99999999999">
                <span>HOW LONG?</span><br>
                <select name="timeline" id="timeline">
                    <option value="3" selected>3 months</option>
                    <option value="6">6 months</option>
                    <option value="12">12 months</option>
                </select>
                <button id="btn" class="button">SUBMIT</button>
            </div>

        </div>
        <br><br>

<style type="text/css">

    .paB { padding-bottom: 20px; }
    .maB { margin-bottom: 20px; }

    h1 {
        font-family: changeling-neo, serif;
        font-size: 40px;
        margin: 0 0 10px; }

    h3 {
        font-family: Electrolize, serif;
        font-size: 15.5px;
        letter-spacing: 1px; }

    p {
        font-size: 10.5px;
        margin-top: 10px; }

    form {
        max-width: 600px;
        margin: 20px auto; }

    input {
        width: 100%;
        margin: 10px 0;
        padding: 20px;
        border-radius: 8px;
        color: grey; }

    a.button {
        color: white;
        background-color:#25b557;
        border-radius:8px;
        border-width: 0;
        display:inline-block;
        cursor:pointer;
        font-size:16.5px;
        padding: 20px 80px;
        letter-spacing: 2px;
        margin-top: 10px;
        width: 100%; }

    .modal-title, .modal-body, .modal-body p {
        color: black; }

    .ecoblock p, .ecoblock h4 {
        color: #000; }
    h4 {
        font-size: 16.5px;
        margin: 0 0 1em;
        letter-spacing: 1px; }
    p {
        font-size: 40px; }

    .ecoblock .eco {
        margin-bottom: 20px; }
    .ecoblock .eco .wrap {
        background-color: #b5b5b5;
        border-radius: 10px;
        padding: 40px;
        position: relative; }
    .ecoblock .eco.e01 {
        position: relative; }
    .ecoblock .eco.e01 .wrap {
        height: 400px; }
    .ecoblock .eco.e02 {
        position: relative; }
    .ecoblock .eco.e02 .wrap {
        height: 400px; }
    .ecoblock .eco.e03 {
         position: relative;}
    .ecoblock .eco.e03 .wrap {
        height: 312px; }
    .ecoblock .wrapcenter{
        text-align: center; }
    .ecoblock {
        max-width: 1325px;
        padding: 0 35px; }
    .ecoblock input {
        color: grey; }

    .wbutton {
        color: black;
        width: 100%;
        background-color:#127538;
        border-radius:12px;
        display:inline-block;
        cursor:pointer;
        font-size:16.5px;
        padding:20px 0px;
        letter-spacing: 2px;
        margin-top: 20px; }

    form {
        max-width: 600px;
        margin: 20px auto; }

    input, select {
        width: 100%;
        margin: 10px 0;
        padding: 20px;
        border-radius: 8px;
        color: grey; }
        
    h1 {
        font-family: changeling-neo, serif;
        font-size: 40px;
        margin: 0 0 10px; }

    h3 {
        font-family: Electrolize, serif;
        font-size: 15.5px;
        letter-spacing: 1px; }

    #numbershow {
        font-size: 2em; }

    #confirmation {
    background: black;
    padding: 40px;
    transition: all 1s linear; }

    @media only screen and (max-width: 1100px) { .desktop1 { display: none!important; } }
    @media only screen and (min-width: 1100px) { .mobile1 { display: none!important; } }

    @media handheld, only screen and (min-width: 767px) { 
        .mobile-col-1-3 { width: 100%; }
    }

    @media handheld, only screen and (max-width: 1100px) {

        .ecoblock {
            max-width: 800px;
            margin: 0 auto!important;
            padding: 20px 35px!important; }

        .grid {
            width: 100%;
            min-width: 0;
            margin-left: 0;
            margin-right: 0;
            padding-left: 10px;
            padding-right: 10px; }

        [class*='col-'] {
            width: auto;
            float: none;
            margin: 10px 0 30px;
            padding-left: 0;
            padding-right: 0px; }

        [class*='col-'] [class*='col-'] {
            padding-right: 0; }

        [class*='mobile-col-'] {
            float: left;
            margin: 0 0 10px;
            padding-left: 0;
            padding-right: 10px;
            padding-bottom: 0; }

        .mobile-col-1-1 { width: 100%; }
        .mobile-col-2-3, .mobile-col-8-12 { width: 66.66%; }
        .mobile-col-1-2, .mobile-col-6-12 { width: 50%; }
        .mobile-col-1-3, .mobile-col-4-12 { width: 33.33%; }
        .mobile-col-1-4, .mobile-col-3-12 { width: 25%; }
        .mobile-col-1-5 { width: 20%; }
        .mobile-col-1-6, .mobile-col-2-12 { width: 16.667%; }
        .mobile-col-1-7 { width: 14.28%; }
        .mobile-col-1-8 { width: 12.5%; }
        .mobile-col-1-9 { width: 11.1%; }
        .mobile-col-1-10 { width: 10%; }
        .mobile-col-1-11 { width: 9.09%; }
        .mobile-col-1-12 { width: 8.33% }

        /* Layout Columns */
        .mobile-col-11-12 { width: 91.66% }
        .mobile-col-10-12 { width: 83.333%; }
        .mobile-col-9-12 { width: 75%; }
        .mobile-col-5-12 { width: 41.66%; }
        .mobile-col-7-12 { width: 58.33% }

        /* Other */
        #numbershow {
            font-size: 28.5px; }

        #econ {
            font-size: 28.5px; }

        .ecoblock .eco .wrap {
            padding: 20px; }

        .ecoblock .eco.e01 .wrap {
            height: 210px; }

        .ecoblock .eco.e02 .wrap {
            height: 140px; }

        .ecoblock .eco.e02 .wrap .wrapcenter {
            width: 85%; }

        .ecoblock .eco.e03 .wrap {
            height: 75px; }

        .ecoblock .eco.e03 .wrap .wrapcenter {
            width: 85%; }

        .ecoblock .eco .wrap .wrapcenter {
            top: 54%; }
        h4 {
            margin: 0;
            letter-spacing: 0;
            font-size: 15.5px;
            line-height: 30px; }
        p {
            margin: 0;
            font-size: 28px;
            line-height: 30px; }

        .e02 p, .e03 p {
            text-align: right; }

        .maBm {
            margin-bottom: 20px; }

    }

</style>

<?php include("blocks/footer.php"); ?>

    <script type="text/javascript" src="scripts.js"></script>

<script type="text/javascript">
    // this bit is to keep the minimum at 50 on the input
    document.getElementById("number").addEventListener("change", function() {
      let v = parseInt(this.value);
      if (v < 50) this.value = 50;
      if (v > 99999999999) this.value = 99999999999;
    });

    // to create cookies with input value and timeline chosen
    document.getElementById('btn').addEventListener('click', createCookies);

    // fetch the cookie to display data
    var mydate = getCookie("date");
    var timeline = getCookie("timeline");
    var eco = getCookie("number");

    if (getCookie("number") == "") {

    } else {
        var hourlyearnings = eco / 100;

        var dailyearnings = hourlyearnings * 24;

        if (timeline == 3) {
            totalearnings = hourlyearnings * 2190;
        } else if (timeline == 6) {
            totalearnings = hourlyearnings * 4380;
        } else if (timeline == 12) {
            totalearnings = hourlyearnings * 8760;
        }

        // document.getElementById("fButton").innerHTML = "CURRENT DEPOSIT";
        document.getElementById("number").value = getCookie("number");
        document.getElementById("numbershow").innerHTML = getCookie("number");
        document.getElementById("dailyearnings").innerHTML = dailyearnings;
        document.getElementById("hourlyearnings").innerHTML = hourlyearnings;
        document.getElementById("totalearnings").innerHTML = totalearnings;

        const oldDate = getCookie("date");
        console.log(oldDate);
        var now = Date.now();
        console.log(now);
        var difference = now - oldDate;
        var millisecondsPerHour = 60 * 60 * 1000;
        var hoursSince = Math.floor(difference / millisecondsPerHour);

        var srptTotal = hourlyearnings * hoursSince;
        console.log(srptTotal);
        document.getElementById("srpt").innerHTML = srptTotal;

    }

    var now2 = Date.now();

    function createCookies(evt) {
        if (document.getElementById('number').value % 50 == 0){ 
            setCookie('number', document.getElementById("number").value);
            setCookie('timeline', document.getElementById("timeline").value);
            setCookie('date', now2);
            location.reload();
        } else {
            alert("Please choose a multiple of 50");
        }
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        exdays = exdays || 365;
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }

    function startTimer() {
        var now = new Date();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        setTimeout('refresh()',(((30 - (minutes % 30) - ((seconds>0)?1:0)) * 60) + (60 - seconds)) * 1000);
    }

    function refresh() {
        window.location.href = 'https://ecofi.io/mockup-farm.php'; // EDIT THIS MONEY!
    }

    startTimer();

    function calculate() {
        document.getElementById('number').value = eval(document.getElementById('amount').value);
    }
</script>


</body>
</html>