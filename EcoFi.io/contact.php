<?php include("blocks/head.php"); ?>

    <title>Contact | ECO</title>
    <meta name="description" content="ECO">
</head>

<body class="home">

<?php include("blocks/header.php"); ?>
<?php include("blocks/nav-mobile.php"); ?>
        
        <section class="content center">
            <h1><span class="green">Looking for the team?</h1>
            
<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_contact" style="display:none;" onload="
    if (submitted) {
        document.getElementById('sent').setAttribute('style', 'opacity: 1; z-index: 1;transition:opacity 600ms linear 1000ms;margin-top:140px;');
        document.getElementById('contact-form').setAttribute('style', 'opacity:0;transition:opacity 600ms linear;');
}"></iframe>
            <div id="sent" style="opacity: 0;">
                <h3>Done!</h3>
                <h3>We look forward to talking to you.</h3>
            </div>
            <form id="contact-form" onsubmit="submitted=true;" target="hidden_contact" method="post" action="submit.php">
                <h3>Feel free to reach out and our team will respond shortly.</h3>
            	<input type="text" name="name" placeholder="Name">
            	<input type="email" name="email" placeholder="Email">
                <input type="text" name="url" class="required-1"><br>
            	<textarea placeholder="Message" name="message"></textarea>
            	<button>SEND</button>
            </form>
            <br><br>

        </section>

<?php include("blocks/footer.php"); ?>

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
	margin: 20px auto;
}
input, textarea {
	width: 100%;
	margin: 10px 0;
	padding: 20px;
	border-radius: 8px;
	color: grey;
}
button {
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
    width: 100%;
}
</style>
</body>
</html>