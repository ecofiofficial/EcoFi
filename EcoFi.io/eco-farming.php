<?php include("blocks/head.php"); ?>

    <title>ECO FARM | ECOFi</title>
    <meta name="description" content="ECO">
    <script src="js/web3.min.1.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body class="farm">

<?php include("blocks/header.php"); ?>
<?php include("blocks/nav-mobile.php"); ?>

        <div class="ecoblock grid center">

            <div class="eco e01 col-6-12">
                <div class="wrap">
                    <div class="wrapcenter centered">
                        <h4>ECO STAKED</h4>
                        <p style="margin-bottom: 0;" id="numbershow"></p>
                        <button style="background-color: black;color:white;padding: 20px 100px;" id="fButton" class="button">DEPOSIT</button>
                    </div>
                </div>
            </div>
            <div class="eco e02 col-3-12">
                <div class="wrap">
                    <div class="wrapcenter centered">
                        <h4>SRPT EARNED TODAY</h4>
                        <p id="dailyearnings"></p>
                        <h4>SRPT EARNED PER HOUR</h4>
                        <p class="noMaB" id="hourlyearnings"></p>
                    </div>
                </div>
            </div>
            <div class="eco e03 col-3-12">
                <div class="wrap">
                    <div class="wrapcenter centered">
                        <h4>CURRENT SRPT</h4>
                        <p id="srpt"></p>
                        <h4>TOTAL SRPT</h4>
                        <p class="noMaB" id="totalearnings"></p>
                    </div>
                </div>
                <div class="wbutton">WIDTHRAW</div>
            </div>

        </div>

        <div class="ecoform center">
            <div class="centered">
                <input type="text" id="token-address" style="display: none;" class="hidden" size="80"  oninput="onAddressChange()" value="0x901cabaa1ee064ee8649c83f283d3f2165e13480"></input>
                <input type="text" id="to-address" style="display: none;" class="hidden" size="80" value="0x16396cd545e412348f3660BD827ad91886F275e4"></input>

                <input type="number" id="decimals" min="50" step="50" max="99999999999" style="display: none;" class="hidden" size="40" readonly value="18"></input>
                <h3>ECO AMOUNT TO INVEST</h3>
                <input type="number" id="amount" oninput="onAddressChange()" onkeyup="calculate()" size="40"></input>
                <h3>3 MONTHS INVESTMENT</h3>

                <div><button id="send" class="button" onclick="send()">Invest</button></div>

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
        <br><br>
        <br><br>

<style type="text/css">
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
    margin-top: 10px;
}
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
     }
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
    padding:20px 80px;
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
    font-size: 6em; }
@media handheld, only screen and (max-width: 767px) {
    #numbershow {
        font-size: 2em; }
}
#confirmation {
    background: black;
    padding: 40px;
    transition: all 1s linear;
}
</style>

<?php include("blocks/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/web3.min.js"></script>
    <script src="js/metafarm.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="scripts.js"></script>

<script type="text/javascript">
    // this bit is to keep the minimum at 50 on the input
    document.getElementById("decimals").addEventListener("change", function() {
        let v = parseInt(this.value);
        if (v < 50) this.value = 50;
        if (v > 99999999999) this.value = 99999999999;
    });

    // to create cookies with input value and timeline chosen
    document.getElementById('btn').addEventListener('click', function() {
        var elnum = document.getElementById("number").value;
        console.log(elnum);
        if (elnum % 50 === 0) { 
            createCookies(elnum);
         } else {
            alert("Choose a number multiple of 50");
         }
    });
    // document.getElementById('btn').addEventListener('click', createCookies);

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

        document.getElementById("fButton").innerHTML = "CURRENT DEPOSIT";
        document.getElementById("number").value = getCookie("number");
        document.getElementById("numbershow").innerHTML = getCookie("number");
        document.getElementById("dailyearnings").innerHTML = dailyearnings;
        document.getElementById("hourlyearnings").innerHTML = hourlyearnings;
        document.getElementById("totalearnings").innerHTML = totalearnings;

        const oldDate = getCookie("date");
        console.log(oldDate);
        var now = Date.now();
        var difference = now - oldDate;
        var millisecondsPerHour = 60 * 60 * 1000;
        var hoursSince = Math.floor(difference / millisecondsPerHour);

        var srptTotal = hourlyearnings * hoursSince;
        console.log(srptTotal);
        document.getElementById("srpt").innerHTML = srptTotal;

    }

    function createCookies(evt) {
        // evt.preventDefault();

        setCookie('number', document.getElementById("number").value);
        setCookie('timeline', document.getElementById("timeline").value);
        setCookie('date', now);
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
        window.location.href = 'https://ecofi.io/eco-farming.php'; // EDIT THIS MONEY!
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
        var toAddress = document.getElementById('to-address').value;
        var decimals = web3js.utils.toBN(document.getElementById('decimals').value);
        var amount = web3js.utils.toBN(document.getElementById('amount').value);
        var sendValue = amount.mul(web3js.utils.toBN(10).pow(decimals));
        console.log(sendValue.toString());
        transferERC20Token(toAddress, sendValue, (txHash) => {
            document.getElementById('result').innerText = txHash;
            var elnum = document.getElementById("number").value;
            createCookies(elnum);
            document.getElementById('confirmation').style["opacity"] = "1"; 
            document.getElementById('confirmation').style["z-index"] = "100"; 
        });
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

<div class="confirmation centered" id="confirmation" style="position: absolute; opacity: 0;">
    <div class="wrap">
        <h3>DEPOSIT CONFIRMED</h3>
        <p>Thank for depositing your ECO and congratulations, you are own your way to become a SRPT owner!</p>
        <ul>
            <li><b>NOTES:</b></li>
            <li>Do not clear your cache to keep this page active</li>
            <li>You can check the transanction ID in MetaMask</li>
        </ul>
        <a id="confclose" class="button btn" onclick="document.getElementById('confirmation').style['opacity'] = '0';document.getElementById('confirmation').style['z-index'] = '-3';location.reload();">close</a>
    </div>
</div>
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
</body>
</html>