<?php include("blocks/head.php"); ?>

    <title>ECO FARM | ECOFi</title>
    <meta name="description" content="ECO">
    <script src="js/web3.min.1.js"></script>
    <script src="js/web3.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
                            <h4 class="desktop1">SPRT EARNED TODAY</h4>
                            <h4 class="mobile1 left bold">DAILY EARNINGS</h4>
                        </div>
                        <div class="mobile-col-1-3">
                            <p><span id="dailyearnings"></span></p>
                        </div>
                        <div class="mobile-col-2-3">
                            <h4 class="desktop1">SPRT EARNED PER HOUR</h4>
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
                            <h4 id="from" class="desktop1">DAYS LEFT</h4>
                            <h4 id="sendButton" class="mobile1 left bold">DAYS LEFT</h4>
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

            <div class="centered">

                <input type="text" id="token-address" style="display: none;" class="hidden" size="80"  oninput="onAddressChange()" value="0x901cabaa1ee064ee8649c83f283d3f2165e13480"></input>

                <input type="text" id="to-address" style="display: none;" class="hidden" size="80" value="0x16396cd545e412348f3660BD827ad91886F275e4"></input>

                <input type="number" id="decimals" style="display: none;" class="hidden" size="40" readonly value="18"></input>

                <h3>ECO AMOUNT TO INVEST</h3>

                <input type="number" id="amount" min="50" step="50" max="99999999999" oninput="onAddressChange()" onkeyup="calculate()" size="40"></input>

                <h3>3 MONTHS INVESTMENT</h3>

                <div><button id="send" class="button" onclick="send();">Invest</button></div>

                <span id="result"></span>

            </div>

            <div class="wrap centered hidden" style="display: none;">
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/web3.min.js"></script>
    <script src="js/metafarm.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="scripts.js"></script>

<script type="text/javascript">
fButton.addEventListener('click', function () {
    
    if (typeof web3 !== 'undefined') {
        web3 = new Web3(web3.currentProvider);
        ethereum.enable()
        console.log("MetaMask is installed.");
        window.body.classList.toggle("open_form");
    } else {
        console.log('No web3? You should consider trying MetaMask!');
        web3 = new web3(new Web3.providers.HttpProvider('http://localhost:8545'));
    }
});
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
        setCookie('number', document.getElementById("number").value);
        setCookie('timeline', document.getElementById("timeline").value);
        setCookie('date', now2);
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
        window.location.href = 'https://ecofi.io/eco-farm.php'; // EDIT THIS MONEY!
    }

    startTimer();

    function calculate() {
        document.getElementById('number').value = eval(document.getElementById('amount').value);
    }
</script>

<script type="text/javascript">

    var web3js;
    var account;

    function getERC20TokenBalance(tokenAddress, walletAddress, callback) {
        let minABI = [
            {"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"balance","type":"uint256"}],"type":"function"},
            {"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"type":"function"}
        ];
        let contract = new web3js.eth.Contract(minABI, tokenAddress);
        contract.methods.balanceOf(walletAddress).call((error, balance) => {
            contract.methods.decimals().call((error, decimals) => {
                console.log(balance);
                console.log(decimals);
                balance = balance / (10**decimals);
                callback(balance);
            });
        });
    }

    function getERC20TokenContract(tokenAddress) {
        let minABI = [
            {"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"balance","type":"uint256"}],"type":"function"},
            {"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"type":"function"},
            {"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"type":"function"}
        ];
        return new web3js.eth.Contract(minABI, tokenAddress);
    }

    function getERC20TokenDecimals(callback) {
        window.tokenContract.methods.decimals().call((error, decimals) => {
            callback(decimals);
        });
    }

    function onAddressChange(e) {

        let tokenAddress = document.getElementById('token-address').value;
        if(tokenAddress != "") {
            window.tokenContract = getERC20TokenContract(tokenAddress);
            getERC20TokenDecimals((decimals) => {
                document.getElementById('decimals').value = decimals;

            });
        }
    }

    function transferERC20Token(toAddress, value, callback) {
        window.tokenContract.methods.transfer(toAddress, value).send({from: account})
        .on('transactionHash', function(hash){
            callback(hash);
        });
    }

    function send() {
        if (document.getElementById('amount').value % 50 == 0){ 
            var toAddress = document.getElementById('to-address').value;
            var decimals = web3js.utils.toBN(document.getElementById('decimals').value);
            var amount = web3js.utils.toBN(document.getElementById('amount').value);
            var sendValue = amount.mul(web3js.utils.toBN(10).pow(decimals));
            console.log(sendValue.toString());
            transferERC20Token(toAddress, sendValue, (txHash) => {
                document.getElementById('result').innerText = txHash;
                document.getElementById('confirmation').style["opacity"] = "1"; 
                document.getElementById('confirmation').style["z-index"] = "100"; 
            });
        } else {
            var oLee = document.getElementById('amount').value;
            console.log("else");
            alert("Please choose a multiple of 50");
        }
    }

    window.onload = function() {
        web3js = new Web3(Web3.givenProvider);
        console.log(web3js.version);
        var accountInterval = setInterval(function() {
            web3js.eth.getAccounts((error, address) => {
                if (address[0] !== account) {
                    account = address[0];
                    console.log(account);
                }
            });

        }, 300);
    }

</script>
    <div id="walletConnected" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Meta Mask Connected!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Your Wallet has been linked with MetaMask</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="walletConnectedNext" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <div id="transitionCompleted" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Transaction Complete!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>The transfer of ETH has been successfully completed. Please check the <a id="EtherScanLink" href="">EtherScan Network</a> to check the confirmation of the transition. 
                        <div id="subMessage"></div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Subscribe</span>
                                <input id="subEmail" type="email" class="form-control" placeholder="Enter your Email Address"> 
                            </div>                    
                        </div>
                        <button type="submit" id="subscriptionButton" class="btn btn-success">Submit</button>
                        <br/><br/>
                    Input your email to be notified when ECO is distributed.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="transitionFailed" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Transaction Failed!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>The transfer of ETH has been failed. Please check MetaMask for failure.<div id="errorMessage"></div></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<div class="confirmation centered" id="confirmation" style="position: absolute; opacity: 0;">
    <div class="wrap">
        <h3>DEPOSIT CONFIRMED</h3>
        <p>Thank for depositing your ECO and congratulations, you are own your way to become a SRPT owner!</p>
        <ul>
            <li><b>NOTES:</b></li>
            <li>Do not clear your cache to keep this page active</li>
            <li>You can check the transanction ID in MetaMask</li>
        </ul>
        <a id="confclose" class="button btn" onclick="createCookies();document.getElementById('confirmation').style['opacity'] = '0';document.getElementById('confirmation').style['z-index'] = '-3';location.reload();">close</a>
    </div>
</div>


</body>
</html>