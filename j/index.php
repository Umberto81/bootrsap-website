<?php 
require_once(dirname(__FILE__) . '/extlib/vdaemon/vdaemon.php');
require_once(dirname(__FILE__) . '/extlib/recaptchalib.php');
require_once(dirname(__FILE__) . '/core/config.php');
 ?>
<html>
<head>
<style type="text/css">
body {
	background: #e4e4e4;
}

.form {
	width: 600px;
	margin: 0 auto;
	background: #fff;
	padding: 45px;
	border: 1px solid #c2c2c2;
}

.error {
    color: #AA0000
}
.controlerror {
    background-color: #ffffdd;
    border: 1px solid #AA0000;
}

.input {
	width: 300px;
	height: 35px;
	margin-left: 10px;
}
</style>
</head>
<body>
<div class="form">
<?php
$msg = $_GET['msg'];

if ( $msg == '1' ) {
	echo '<p>Your information was submitted successfully.</p>';
}
?>

<form action="core/process.php" method="post" id="registration" runat="vdaemon">
<vlsummary class="error" headertext="Error(s) found:">
<input type="hidden" name="formID" value="users2" />
<input type="hidden" name="redirect_to" value="" />

<p><vllabel errclass="error" validators="InputNameReq" for="name" cerrclass="controlerror">Name: </vllabel><input type="text" name="name" class="input" />
	<vlvalidator name="InputNameReq" type="required" control="name" errmsg="Your name is required."></p>
	
<p><vllabel errclass="error" validators="Input2NameReq" for="email" cerrclass="controlerror">Email: </vllabel> <input type="text" name="email" class="input" />
	<vlvalidator name="Input2NameReq" type="required" control="email" errmsg="Your email is required."></p>
	
<p>Proof:<input type="text" name="proof" class="input" /></p>

<p>Bio: <textarea rows="10" cols="40" name="bio"></textarea></p>

<p>I'm most interested in learning: 
<select name="interest">
	<option value="php">PHP</option>
	<option value="css">CSS</option>
	<option value="html">HTML</option>
</select></p>

<p>I'm at least 18 years of age: Yes: <input type="radio" name="old_enough" value="yes" /> No: <input type="radio" name="old_enough" value="no" /></p>

<!--<p>Checkbox1 <input type="checkbox" name="checkbox" value="checkbox1" /> Checkbox2: <input type="checkbox" name="checkbox" value="checkbox2" /></p>-->

<?php
	echo recaptcha_get_html(R_PUBLIC);
?>
<br />

<input type="submit" value="Submit" />
</form>
</div>
</body>
</html>
<?php VDEnd(); ?>