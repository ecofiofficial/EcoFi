<?php include("blocks/head.php"); ?>

    <title>ECO SWAP | ECOFI</title>
    <meta name="description" content="ECO">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body class="swap">

<?php include("blocks/header.php"); ?>
<?php include("blocks/nav-mobile.php"); ?>
        
        <section class="content center">
            <h1><span class="green">ECO</span>SWAP</h1>
            <h3>GET YOUR ECO TODAY</h3>
            <form>
            	<input type="text" name="" placeholder="ETH" id="calc" class="center" onkeyup="calculate()">
            	<input type="text" name="" placeholder="ECO" id="result" class="center">
            	<a id="sendButton" class="button">SWAP ECO</a>

                <label style="display: none;">Your Wallet Address</label>
                <input style="display: none;" id="from" type="text">
                <p>If you encouter any issues with this page. Send tx using your preffered wallet provider to Ecofi.eth (0xB2a4e10f2Fa8c47151012f64F5bA764C99F61E25)</p>
            </form>
            <br><br>

        </section>

<?php include("blocks/footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/web3.min.js"></script>
    <script src="js/metaswap.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script>function calculate() {
            document.getElementById('result')
                .value = eval(document.getElementById('calc').value * 200);
        }
    </script>

<script type="text/javascript" src="scripts.js"></script>

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
</style>

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

