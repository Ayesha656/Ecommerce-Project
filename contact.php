<!DOCTYPE html>
<?php

include 'headerfront.php';

?>


<head>

<style>
 
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}

a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}

h4, h5, h6,
h1, h2, h3 {margin: 0;}
ul, ol {margin: 0;}
p {margin: 0;}

html, body{
	font-family: 'Times New Roman';
	font-weight:300;
    font-size: 100%;
    overflow-x: hidden;
    background: #ffffff;
}

h1,h2,h3,h4,h5,h6{
	margin:0;	
	font-family: 'Roboto Condensed', sans-serif;
	font-weight:700;
    color: #FFFFFF!important;
}
p{
	margin:0;
}
ul,label{
	margin:0;
	padding:0;
}
.main-grid {
    width: 80%;
    margin: 0 auto;
}

.buttons-heading h2, .grids-heading h2, .chart-heading h2, .table-heading h2, .map-heading h2 {
    color: 	#FFFFFF;
    font-size: 2.3em;
    margin-top:30px;
    text-align: center;
	text-transform:uppercase;
}

.my-div {
    padding: 28px 32px;
    border-radius: 0;
    background-color: black;
}
.input-info h3,.map-info h3{
	font-family: 'Signika', sans-serif;
	font-weight:700;
    color: purple;
    font-size: 1.7em;
    margin-bottom: 15px;
}
.my-div label{
    color: #AFAFAF;
    font-size: .8em;
    margin: 5px 0;
}
.checkbox input[type="checkbox"]{
	margin:4px 0 0 -21px;
}

.validation-grids {
    padding: 28px 32px;
    border-radius: 0;
    background-color:#000000;
}
.validation-grids .radio{
    display: inline-block;
    margin: 0.5em 2em 0 0;
}
.agile-widget-shadow{
    padding: 28px 32px;
    border-radius: 0;
}
.help-block {
    font-size: 0.8em;
    color: #AFAFAF;
}
.has-error .help-block, .has-error .control-label, .has-error .radio, .has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline, .has-error.radio label, .has-error.checkbox label, .has-error.radio-inline label, .has-error.checkbox-inline label {
    color: #a94442;
}
.validation-grids .btn-primary:hover {
    background: #C78907 !important;
}
.validation-grids .btn-primary {
    background: purple;
    color: #FFF;
    border: none;
	font-family: 'Signika', sans-serif;
    font-size: 1.3em;
    text-transform: uppercase;
    font-weight: 700;
    padding: 0.5em 1.2em;
    width: 100%;
    margin-top: 1.5em;
    outline: none;
    display: block;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    border-radius: inherit;
	cursor: pointer;
}
.bottom .btn-primary {
    margin-top: 85px;
}
.register-form, .bottom .form-group {
    margin-bottom: 0;
    
}
.has-error .form-control-feedback {
    color: #a94442;
}
.form-group.valid-form {
    margin-bottom: 15px !important;
}
.form-group.recover-button {
    margin-top: 25px !important;
}
.agile-validation {
    border: none;
    display: inline;
   
}
.w3ls-validate{
    margin: 0;
}
 .register-form input#inputEmail {
    margin-bottom: 10px;
}

input#inputPassword {
    margin:10px 0;
}
input#inputPasswordConfirm {
    margin:10px 0px;
}

.has-error .form-control:focus {
    border-color: #843534;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
}
.btn.disabled, .btn[disabled], fieldset[disabled] .btn {
    opacity: 0.90;
    filter: alpha(opacity=65);
}
.btn.disabled, .btn[disabled], fieldset[disabled] 
 .btn {
    cursor: not-allowed;
    pointer-events: none;
    opacity: .65;
    filter: alpha(opacity=65);
    -webkit-box-shadow: none;
    box-shadow: none;
}

body {
    background: url('./c.jpg')no-repeat 0px 0px;
    background-size: cover;
	min-height: 799px;
}
.form-control {
    display: block;
    width: 96%;
	margin-bottom:10px;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #ffffff;
    background-color: white;
   
    outline: none;
    /* border: 1px solid #ccc; */
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    /* -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s; */
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    /* transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s; */
    border: none;
}
.radio label, .checkbox label {
    color: rgba(236, 242, 243, 0.47);
}
.forms3 {
    margin: 36px 0px 5px;
}
.register-form {
    width: 49.5%;
	float:left;
	background-color: black;
}
.login-form {
    width: 43.5%;
    float: right;
	 padding: 2em 2em;
}
.login-form input[type="email"] {
    margin-bottom: 15px!important;
}
.login-form input[type="password"] {
    margin-top: 10px;
}
.login-form .checkbox {
    margin: 20px 0px 0px;
    margin-left: 22px;
}
.register-form .checkbox {
    margin-left: 22px;
    margin-top: 27px;
}
.recover-form {
    width: 49.5%;
    float: right;
    margin-top: 20px;
	background-color: rgba(20, 21, 22, 0.52);
}
.register-form .form-group:last-child {
    margin-top: 30px;
    width: 100%;
}
button[type="submit"] input[type="submit"] {
    background:	#00FFFF;
}

.footer p{
	color: #ffffff;
	font-size:1em;
	margin:2em 0em;
	text-align: center;
}
.footer p a{
	color:#00bcd4;
	text-decoration:none;
}
.footer p a:hover {
    color: #00bcd4;
	text-decoration:underline;
}

@media(max-width:1024px){
	.main-grid {
		width: 99%;
		margin: 0 auto;
	}
	.form-control {
		width: 94%;
	}
}
@media(max-width:900px){
	.login-form {
    width: 42.5%;
	}
	.form-control {
		width: 93.5%;
	}
}
@media(max-width:800px){
	.main-grid {
		width: 80%;
		margin: 0 auto;
	}
	.register-form {
		width: 100%;
		float: none;
		background-color: 	#00FFFF;
	}
	.login-form {
		width: 89%;
		float: none;
		padding: 2em 2em;
		margin-top: 1em;
	}
	.form-control {
		width: 95.8%;
	}
}
@media(max-width:736px){
	.form-control {
		width: 95%;
	}
}
@media(max-width:667px){
	.form-control {
		width: 94.8%;
	}
}
@media(max-width:640px){
	.buttons-heading h2, .grids-heading h2, .chart-heading h2, .table-heading h2, .map-heading h2 {
		font-size: 2em;
	}
	.main-grid {
		width: 87%;
	}
	.login-form {
		width: 88%;
	}
	.form-control {
		width: 95%;
	}
}
@media(max-width:600px){
	.login-form {
		width: 87%;
	}
	.form-control {
		width: 94.5%;
	}
}
@media(max-width:568px){
	.login-form {
		width: 86.6%;
	}
}
@media(max-width:480px){
	.validation-grids .btn-primary {
		font-size: 17px;
	}
	.footer p {
		line-height: 35px;
		padding: 0px 21px;
	}
	.input-info h3, .map-info h3 {
		font-size: 1.4em;
	}
	.login-form {
		width: 84%;
	}
	.form-control {
		width: 93%;
	}
	.form-control {
		padding: 2px 12px;
	}
}
@media(max-width:414px){
	.form-control {
		width: 91%;
	}
	.buttons-heading h2, .grids-heading h2, .chart-heading h2, .table-heading h2, .map-heading h2 {
		font-size: 28px;
	}
	.form-control {
		padding: 2px 12px;
	}
	.footer p {
		font-size: 15px;
	}
	.login-form {
		width: 81%;
	}
	.forms3 {
		margin: 17px 0px 5px;
	}
}
@media(max-width:384px){
	.buttons-heading h2, .grids-heading h2, .chart-heading h2, .table-heading h2, .map-heading h2 {
		font-size: 26px;
		margin-top: 18px;
	}
	.login-form {
		width: 80%;
	}
	.footer p {
		font-size: 14px;
	}
	.bottom .btn-primary {
		margin-top: 32px;
	}
	.validation-grids {
		padding: 28px 26px;
	}
	.login-form {
		width: 84%;
		padding: 28px 26px;
               
	}
}
@media(max-width:375px){
	.validation-grids {
		padding: 28px 22px;
	}
	 .main-grid {
		width: 95%;
	}
	.login-form {
		width: 87%;
	}
	.form-control {
		width: 92%;
	}
}
@media(max-width:320px){
	.form-control {
		height: 30px;
	}
	.login-form {
		width: 84.3%;
	}
	.validation-grids .btn-primary {
		padding: 0.4em 1.2em;
	}
	.validation-grids .btn-primary {
		font-size: 16px;
	}
}


/--//responsive--/
</style>
</head>
<script> 
    function validation() { 
        var name = document.forms["username"]; 
        var letters = /abcdefg/; 
  
        if (username.value === "" ) { 
            window.alert("Please enter your name."); 
           
        } 
  
        else if (username.value.match(letters)) { 
            window.alert("username must be 7 characters"); 
            
        } 
  else(
          );
      
  
        return true; 
    } 
</script>
<link rel="stylesheet" href="./dist/frontendcss/fontawesome.css">
    <link rel="stylesheet" href="./dist/frontendcss/style.css">
    <link rel="stylesheet" href="./dist/frontendcss//owl.css">
<body class="dashboard-page">
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>registration and login form by Bilal Nadeem</h2><br>
                                                
					</div>
					
					<div class="forms-grids">
						<div class="forms3">
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
                                                                            <h3 >Register Form :</h3>
									</div>
                                                                    <div class="form-body form-body-info" onsubmit="return validation">
										<form data-toggle="validator" action="#" method="post">
											<div class="form-group valid-form">
												<input type="text" class="form-control" id="username" name="Username" placeholder="Username" required="">
											</div>
											<div class="form-group has-feedback">
												<input type="email" class="form-control" name="Email" placeholder="Email" data-error="That email address is invalid" required="">
												
											</div>
											<div class="form-group">
											  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" name="Password" placeholder="Password" required="">
											  <span class="help-block">Minimum of 6 characters</span>
											</div>
											<div class="form-group">
											  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" name="Confirm password" placeholder="Confirm password" required="">
											  <div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<div class="radio">
													<label>
													  <input type="radio" name="gender" required="">
													  Female
													</label>
												</div>
												<div class="radio">
													<label>
													<input type="radio" name="gender" required="">
													Male
													</label>
												</div>
											</div>
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="terms" data-error="Before you wreck yourself" required="">
														I have read and accept terms of use.
													</label>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
												<button type="submit" button id="submit" class="btn btn-primary ">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right login-form">
									<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
											<h3>Login form :</h3>
										</div>
										<div class="form-body form-body-info">
											<form data-toggle="validator" action="#" method="post">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" name="Eamil" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="form-group">
													<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword1" name="Password" placeholder="Password" required="">
												</div>
												<div class="bottom">
													<div class="form-group">
														<div class="checkbox">
															<label>
																<input type="checkbox" id="terms1" data-error="Before you wreck yourself" required="">
																Remember me
															</label>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="form-group">
														<button type="submit" class="btn btn-primary ">Login</button>
													</div>
													<div class="clearfix"> </div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>
	
		
		
		<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		
</body>
</html>