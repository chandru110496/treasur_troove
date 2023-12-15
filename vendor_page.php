<head>
		<link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
</head>
<main class="login">

	<div class="login__col">
		<div class="go">
	<button onclick="goBack()" class="back">
            <i class="ri-arrow-left-line button"></i></button>
			<p>Go Back</p></div>
		<header class="login__brand">Become a Vendor</header>
		<form class="login__form" method="post" action="">
			<div class="login__form-wrapper">
				<h1>Welcome back</h1>
				
				<button class="login__btn" type="button" data-login="">
					<span class="login__btn-label"><a href="vendor_register.php" style="text-decoration:none;">Login Website</a></span>
					<span class=""></span>
				</button>
				<button class="login__btn" type="button" data-login="">
					<span class=""><a href="vendor/login.php" style="text-decoration:none;">Login in Vendor Panel</a></span>
					<span class=""></span>
				</button>
				
				<p class="login__sign-up">Don’t have an account? <a href="vendor_register.php"  >Register</a></p>
			</div>
		</form>
		
	</div>
	<div class="login__col">
		<div class="login__bg-img">
			<div class="login__testimonial">
				<p><q>Sell online to 14 Cr+ customers at
0% Commission</q></p>
				<p><p>
				<p><small>
Become a Treasure Troove Vendor and grow your business across World
</small></p>
			</div>
		</div>
	</div>
</main>


<style>
    * {
	border: 0;
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
:root {
	--hue: 223;
	--bg: hsl(0,0%,100%);
	--fg: hsl(var(--hue),10%,10%);
	--primary: hsl(var(--hue),90%,50%);
	--trans-dur: 0.3s;
	font-size: calc(16px + (24 - 16) * (100vw - 320px) / (2560 - 320));
}
a {
	color: hsl(var(--hue),90%,50%);
	transition: color var(--trans-dur);
}
a:focus-visible,
a:hover {
	text-decoration: none;
}
body,
button,
input {
	color: var(--fg);
	font: 1em/1.5 Nunito, sans-serif;
}
body {
	background-color:#FFFF;
	display: flex;
	height: 100vh;
	
	overflow: hidden;
	transition:
		background-color var(--trans-dur),
		color var(--trans-dur);
}
h1 {
	font-size: 2em;
	margin: 0 0 0.75rem;
	color:black
}
p {
	color:black;
	margin: 0 0 1.5em;
	transition: color var(--trans-dur);
}
.login,
.login__bg-img,
.login__col {
	display: flex;
}
.login,
.login__col {
	width: 100%;
	height: 100%;
}

.go{
	display: flex;
	margin-top: 7px;
	margin-left: 7px;
}
.go p{
	font-size: 15px;
	color:#282020;
	margin-top: 7px;
	margin-left: 7px;
}
.login__bg-img {
	background: url(https://assets.codepen.io/416221/woman_at_computer.jpg) center / cover no-repeat;
	border-radius: 1.5em;
	margin: 0.75em 0.75em 0.75em 0;
	height: 100%;
	min-height: 20em;
}
.login__brand,
.login__copyright {
	padding: 1.5em;
}
.login__brand {
	display: flex;
	align-items: center;
	font-weight: bold;
	color:#282020;
}
.login__brand:before {
	background-color: var(--fg);
	border-radius: 50%;
	content: "";
	display: block;
	margin-right: 0.5em;
	width: 0.75em;
	height: 0.75em;
	transition: background-color var(--trans-dur);
}
.login__btn {
	/* background-color: hsl(var(--hue),90%,50%); */
    border:1px solid #04d5fc;
	border-radius: 0.2em;
	color: hsl(0,0%,100%);
	cursor: pointer;
	display: block;
	margin-bottom: 1.5em;
	outline: transparent;
	padding: 0.5em 1.5em;
	position: relative;
	width: 100%;
	transition:
		background-color var(--trans-dur),
		opacity var(--trans-dur);
	-webkit-appearance: none; 
	appearance: none;
}
.login__btn:disabled {
	cursor: not-allowed;
	opacity: 0.5;
}
.login__btn:not(:disabled):focus-visible,
.login__btn:not(:disabled):hover {
	background-color: hsl(var(--hue),90%,30%);
}
.login__btn-spinner,
.login__btn-spinner:before,
.login__btn-spinner:after {
	animation: spinner 1s ease-in-out infinite;
	background-color: hsl(0,0%,100%);
	border-radius: 50%;
	position: absolute;
}
.login__btn-spinner {
	animation-delay: -0.2s;
	display: none;
	top: 50%;
	left: 50%;
	width: 0.375em;
	height: 0.375em;
	transform: translate(-50%,-50%);
}
.login__btn-spinner:before,
.login__btn-spinner:after {
	content: "";
	display: block;
	width: 100%;
	height: 100%;
}
.login__btn-spinner:before {
	animation-delay: -0.4s;
	left: -0.75em;
}
.login__btn-spinner:after {
	right: -0.75em;
}
.login__btn[data-login="true"] .login__btn-label {
	visibility: hidden;
}
.login__btn[data-login="true"] .login__btn-spinner {
	display: block;
}
.login__checkbox,
.login__field {
	background-color: hsla(var(--hue),90%,50%,0);
	border-radius: 0.2em;
	box-shadow: 0 0 0 1px hsl(var(--hue),10%,70%) inset;
	outline: transparent;
	transition:
		background-color var(--trans-dur),
		box-shadow var(--trans-dur);
	-webkit-appearance: none;
	appearance: none;
}
.login__checkbox {
	margin-right: 0.5em;
	width: 1em;
	height: 1em;
}
.login__checkbox:before {
	color: hsla(0,0%,100%,0);
	content: "\2713";
	display: block;
	line-height: 1.333;
	text-align: center;
}
.login__checkbox:checked {
	background-color: hsla(var(--hue),90%,50%,1);
	box-shadow: 0 0 0 1px var(--primary) inset;
}
.login__checkbox:checked:before {
	color: hsla(0,0%,100%,1);
}
.login__checkbox:focus-visible,
.login__checkbox:hover,
.login__field:focus-visible,
.login__field:hover {
	box-shadow: 0 0 0 1px var(--primary) inset;
}
.login__col {
	flex-direction: column;
	overflow-y: auto;
}
.login__copyright p {
	font-size: 0.75em;
	line-height: 2;
	margin: 0;
}
.login__field {
	padding: 0.5em 0.75em;
	width: 100%;
	height: 2.5em;
}
.login__field-group {
	margin-bottom: 0.75em;
}
.login__field-group--horz {
	display: flex;
	justify-content: space-between;
}
.login__form,
.login__form-wrapper {
	margin: auto;
}
.login__form-wrapper h1{
display:grid;
place-items:center
}
.login__form {
	padding: 0 1.5em;
	width: 100%;
}
.login__form-wrapper {
	max-width: 18em;
    margin-top:-58px;
}
.login__label {
	display: block;
	font-weight: 500;
}
.login__label--horz {
	font-weight: normal;
	display: flex;
	align-items: center;
}
.login__label,
.login__label + a,
.login__sign-up {
	font-size: 0.75em;
	line-height: 2;
}
.login__sign-up {
	margin: 0;
	text-align: center;
}
.login__testimonial {
	background-image: linear-gradient(hsla(0,0%,0%,0),hsla(0,0%,0%,0.6));
	border-radius: 0 0 1.5em 1.5em;
	margin-top: auto;
	padding: 1.5em;
	width: 100%;
}
.login__testimonial p {
	color: hsl(0,0%,100%);
	font-size: 1.5em;
	text-wrap: balance;
}
.login__testimonial p + p {
	margin-bottom: 0;
}
.login__testimonial small {
	font-size: 1rem;
}

/* Dark theme */
@media (prefers-color-scheme: dark) {
	:root {
		--bg: hsl(var(--hue),10%,10%);
		--fg: hsl(var(--hue),10%,90%);
	}
	a {
		color: hsl(var(--hue),90%,70%);
	}
	p {
		color: hsl(var(--hue),10%,70%);
	}
	.login__checkbox,
	.login__field {
		box-shadow: 0 0 0 1px hsl(var(--hue),10%,30%) inset;
	}
	.login__checkbox:focus-visible,
	.login__checkbox:hover,
	.login__field:focus-visible,
	.login__field:hover {
		box-shadow: 0 0 0 1px hsl(var(--hue),90%,70%) inset;
	}
	.login__checkbox:checked:focus-visible,
	.login__checkbox:checked:hover,
	.login__field:checked:focus-visible,
	.login__field:checked:hover {
		box-shadow: 0 0 0 1px hsl(var(--hue),90%,50%) inset;
	}
}

/* Mobile */
@media (max-width: 767px) {
	.login__col + .login__col {
		display: none;
	}
}

/* Animations */
@keyframes spinner {
	from,
	to {
		background-color: hsla(0,0%,100%,1);
	}
	50% {
		background-color: hsla(0,0%,100%,0);
	}
}
</style>
<style>


.back{


border:none;
cursor: pointer;


color: var(--white-color);
background: #00b9ff;
width: 45px;
text-align: center;
height: 45px;
border-radius: 50%;



-webkit-box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
}
.back i {

    right: 0;
    left: 0;
    top: 45%;
    -webkit-transform: translateY(-45%);
    transform: translateY(-45%);
    text-align: center;
    font-size: 13px;
    margin-left: auto;
    margin-right: auto;
}
</style>

<!--  End of the search your Product  items -->
<!-- go back button -->
<script>
    function goBack() {
            // This will take you back to the previous page in the browser's history.
            history.back();
        }
</script>

<!-- <script>
    // for mock login and copyright year only
window.addEventListener("DOMContentLoaded",() => {
	const loginForm = new LoginForm(".login");
});

class LoginForm {
	isLoggingIn = false;
	timer = null;

	constructor(el) {
		this.el = document.querySelector(el);

		this.init();
	}
	init() {
		this.copyright();

		this.form = this.el?.querySelector("form");
		this.form?.addEventListener("submit",this.login.bind(this));

		this.loginBtn = this.el?.querySelector("[data-login]");
		this.loginBtn?.addEventListener("click",this.login.bind(this));
	}
	copyright() {
		const year = this.el?.querySelector("[data-year]");
		if (year) year.innerHTML = new Date().getFullYear();
	}
	login() {
		if (this.isLoggingIn) return;

		this.isLoggingIn = true;
		this.loginStateToggle();

		clearTimeout(this.timer);
		this.timer = setTimeout(this.reset.bind(this),1500);
	}
	loginStateToggle() {
		this.loginBtn.disabled = this.isLoggingIn;
		this.loginBtn.setAttribute("data-login",this.isLoggingIn);
	}
	reset() {
		this.isLoggingIn = false;
		this.loginStateToggle();
		this.form.reset();
	}
}
</script> -->