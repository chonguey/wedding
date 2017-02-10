<?php header("Content-type: text/css; charset: UTF-8"); ?>

body {
	font-family: monospace;
	font-size: 18px;
	color: #111;
	margin: 0;
	height: auto;
	width: 100%;
	background: url('../images/site/wood3_opt.jpg') repeat 50% 0;
	background-attachment: fixed;
	text-shadow: 1px 1px 1px rgba(128,128,128,.5);
	vertical-align: top;
}

#isPrint,
#isMobile,
#isPhone{
	display: none;
}


@media only screen and (max-width: 1150px){
	#isMobile{
		display: block;
	}
}

@media only screen and (max-width: 699px){
	#isPhone{
		display: block;
	}
}


/* Let's get this party started */
::-webkit-scrollbar {
    width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-border-radius: 3px;
    border-radius: 3px;

}

/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 3px;
    border-radius: 3px;
    background: rgba(0,0,0,0.5);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}
::-webkit-scrollbar-thumb:window-inactive {
	background: rgba(0,0,0,0.9);
}

body *{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
}

p{
	-webkit-margin-before: 0;
	-webkit-margin-after: 0;
	-webkit-margin-start: 0px;
	-webkit-margin-end: 0px;
}

img {
	display: block;
}

#wrapper{
	transform-origin: top center;
}

#wrapper #content{
	width: 100%;
	height: 100%;
	margin: 0 auto;
	min-width: 1280px;
}

#wrapper #content:before{
	content: " ";
	display: table;
	clear: both;
}

#hr{
	width: 100%;
	margin: 0 auto;
	height: auto;
	display: block;
}

#wrapper #content .paper{
	margin-top: 75px;
	margin-bottom: 75px;
	margin-left: auto;
	margin-right: auto;
	width: 1280px;
	min-height: 768px;
	border-radius: 8px;
	box-shadow: 15px 15px 80px rgba(0,0,0,1);
	background: url('../images/site/seamless_paper_texture.png') repeat 0 0;
	border: 2px solid #222;
	position: relative;
}

@media only print{
	#wrapper #content .paper{
		width: 100%;
		height: 100%;
		margin: 0 !important;
		border-radius: 0 !important;
		border: none;
		background: #fff;
		box-shadow: none;
	}
}

@media only screen and (max-width: 1279px){
	#wrapper #content{
		min-width: 1024px;
		transform-origin: top left;
	}
}

@media only screen and (max-width: 1150px){
	#wrapper #content{
		min-width: 1px;
	}


	#wrapper #content .paper{
		width: 100% !important;
		margin: 0 !important;
		height: 100% !important;
		min-height: 100% !important;
		border: none;
		border-radius: 0;
	}
}

#gallery img {
  opacity: 0;
  transition: opacity 1s ease-in;
  width: 98%;
  margin: 1%;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
  border: solid 1px #000;
}

#ThankYou{
	font-family: "Cookie";
	font-size: 80px;
	text-align: center;
	display: block;
	margin: 0 auto 45px auto;
}

@media only screen and (min-width: 1280px){
	#ThankYou{
		font-size: 250px;
	}
}

.thank-you-msg{
	margin: 15px auto;
}

.handlee{
		font-family: "Handlee";
		font-size: 40px;
		text-align: center;
		font-weight: bold;
}

@media only screen and (min-width: 1280px){
	.handlee b{
			font-size: 80px;
	}
}

.courgette{
	font-family: "Courgette";
	font-size: 40px;
	text-align: center;
}

.signature{
		font-size: 50px;
		text-align: center;
		margin: 15px 0;
		font-family: "Great Vibes";
		font-weight: bold;
}

@media only screen and (min-width: 1280px){
	.signature{
		font-size: 150px;
	}
}


.flourish{
	height: 90px;
	background: url('../images/site/flourish_side.png') no-repeat 50% 50%;
}

#footer{
	position: relative;
	height: 500px;
	overflow: hidden;
	top: -100px;
	margin-bottom: -100px;
}

#footer .cabin{
	width: auto;
	height: 145%;
	right: -5%;
	bottom: -53%;
	position: absolute;
	z-index: 1;
}

#footer .us{
	width: 60%;
	height: auto;
	left: 23.5%;
	bottom: 7%;
	position: absolute;
	z-index: 4;
}

#footer .pines{
	width: auto;
	height: 115%;
	left: -2%;
	bottom: -15%;
	position: absolute;
	z-index: 2;
}

#footer .pine{
	width: auto;
	height: 115%;
	right: -2%;
	bottom: -15%;
	position: absolute;
	z-index: 2;
}

@media only screen and (max-width: 1280px){
	#footer{
		display: none;
	}
}