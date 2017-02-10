<?php header("Content-type: text/css; charset: UTF-8"); ?>

body {
	font-family: monospace;
	font-size: 18px;  
	color: #111;  
	margin: 0;
	height: auto;
	width: 100%;
	overflow: hidden;
	scroll: none;
	background: url('../images/site/wood3_opt.jpg') repeat 50% 0;	
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

@media only print{
	body,
	#wrapper,
	#wrapper #content{
		background-image: none;	
		background-color: #fff !important;
		border: none;
		width: 11in;
		height: 8.5in;
	}	
	
	#isPrint{
		display: block;
	}
	
	#isMobile,
	#isPhone{
		display: none !important;
	}
	
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

.paper #nav{
	list-style: none;
	width: 100%;
	margin: 0;
	font-family: "Courgette";
	font-weight: bold;
	font-size:25px;	
	position: absolute;
	top: 0px;
	left: 0%;
	z-index: 10;
	-webkit-margin-before: 0;
	-webkit-margin-after: 0;
	-webkit-margin-start: 0;
	-webkit-margin-end: 0;
	-webkit-padding-start: 0;
	padding:0 2.5%
}

@media only print{
	.paper #nav{
		display: none;	
	}
}

.paper #mobile-nav{
	display: none;
	position: absolute;
	top: 5px;
	right: 10px;
	background: url('../images/site/burgertime.png') transparent no-repeat 100% 0; 
	background-size: contain;
	width: 145px;
	padding-right: 45px;
	height: 45px;	
	cursor: pointer; 
	z-index: 1000;
	border-radius: 5px;	
	font-family: "Courgette";
	font-weight: bold;
	font-size:35px;	
}


#nav .spacer{	 
	 display: inline-block;
	 width: 35px;
	 height: 15px;	 
	 margin: 10px 0 3px 0;
	 background: url('../images/site/spacer.png') no-repeat 50% 100%;	 	 	 
}

#nav.announcement .spacer{
	background-image: none;
}

#nav .link{	 
	 display: inline-block;
	 margin: 10px 0 3px 0;
	 border-radius: 5px;
	 padding: 5px 25px;
	 border: 1px solid transparent;
	 text-shadow: 1px 1px 1px rgba(255,255,255,.5);	
}

#nav.announcement .link{
	padding: 5px 71px;
}

#nav .link:hover{
	color: #fff;
	background-color: rgba(0,0,0,.7); 
	cursor: pointer;
	text-shadow: 1px 1px 1px rgba(128,128,128,.5);	
	box-shadow: 2px 2px 4px rgba(0,0,0,.4); 	
}


#nav .link.active{
	color: #fff;
	background-color: rgba(0,0,0,.9); 
	cursor: pointer;
	text-shadow: 1px 1px 1px rgba(128,128,128,.5);	
	box-shadow: 2px 2px 4px rgba(0,0,0,.4); 
}

@media only screen and (max-width: 1150px){	
	.paper #slides h2,
	.paper #mobile-nav{
		display: block !important;
	}
	
	.paper #nav{
		display: none;
		width: 40%;
		min-width:300px;
		top: 50px;
		right: 10px;
		left: initial;		
		padding: 0;
		z-index: 1001;
	}
	
	#nav .link,
	#nav .link:hover,
	#nav .link.active{
		color: #fff;
		background-color: rgba(0,0,0,.9) !important; 
		cursor: pointer;
		text-shadow: 1px 1px 1px rgba(128,128,128,.5);	
		box-shadow: 2px 2px 4px rgba(0,0,0,.4); 
		margin-right: 0;
		padding: 5px 25px !important;
	}	
	
	#nav .spacer{	 
		display: none;
	}
	
	#nav .link{	 
		display: block;
		text-align: right;
	}	
}

.paper #slides{
	position: relative;
	overflow: hidden;
	padding: 0;
	margin: 0;
	width: auto;
	height: auto;
	max-width: 100%;
}

.paper #slides:after{
	content: " ";
	display: table;
	clear: both;
}

.paper #slides .slide{
	position: absolute;
	top: 0px;
	left: 0;
	width: 100%;
	border: 1px #c00;
	overflow-x: hidden;
	overflow-y: auto;	
	padding: 0;
	font-size: 18px;
	line-height: 23px;
	font-family: Montserrat;	
	opacity(0);	
	display: none;
	margin: 0;
	padding-top: 65px;	
}

.paper #slides h2{
	display: none;
	position: absolute;
	z-index: 19;
	top: 10px;
	left: 20px;	
	font-family: "Courgette";
	font-weight: bold;
	font-size:37px;	
	line-height: 37px;
	padding: 0 50px 0 0;
	margin: 0;
}

.paper #slides p{
	margin: 10px 0;	
}


/*************************************************************************************************/
/* Save The Date */
/*************************************************************************************************/

#save-the-date{
	overflow: hidden;	
	overflow-y: hidden !important;
	border-radius: 8px;
	padding-top: 0 !important;
}

#save-the-date iframe{
	width: 102%;	
	height:  650px;
	margin: 0;
	padding: 0;
	border: none;		
}

@media only print{
	#save-the-date,
	#save-the-date iframe{
		display: none !important;	
	}
}

/*************************************************************************************************/
/* Photos */
/*************************************************************************************************/

#photos .slide-hero{
	width: 50%;
	height:  auto;
	float: right;
	position: relative;
	right: -40px;
	top: 40px;
	z-index: 1;
}

#photos .gallery-photo-first{
	width: 45%;
	margin-right: 0 !important;
}

#photos .gallery-photo-full{
	width: 90%;
	clear: both;		
}

#photos .gallery-photo{
	width: 42.5%;
}

#photos .gallery-photo-first,
#photos .gallery-photo-full,
#photos .gallery-photo{
	margin: 2.5% 0 2.5% 5%;
	float: left;
	box-shadow: 5px 5px 15px rgba(0,0,0,0.5);
	border: 1px solid #222;	
}

@media only screen and (max-width: 767px){	
	#photos .slide-hero{
		width: 90%;
		position: static;
	}	
	
	#photos .gallery-photo-first,
	#photos .gallery-photo-full,
	#photos .gallery-photo{
		width: 90%;
		clear: both;
	}	
}

/*************************************************************************************************/
/* Reception Login */
/*************************************************************************************************/

#reception-login .login-hero{
	margin: 0 auto;
	max-width: 90%;		
}

#reception-login FORM{
	display: block;	
	margin: -50px auto 0 auto;
	max-width: 90%;		
	text-align: center;
	position: relative;
	z-index: 2;
}

#reception-login FORM INPUT[type=text]{
	background-color: #eee;
	border-radius: 5px;	
	border: 1px solid #999;
	box-shadow: 1px 1px 1px rgba(128,128,128,.5);
	display: block;
	padding: 5px;
	border-color: #000;
	font-size: 16px;
	margin: 10px auto;
	width: 420px;
	max-width: 98%;
}

#reception-login FORM INPUT[type=submit]{
	display: block;
	margin: 0 auto;
	font-family: "Courgette";
	font-weight: bold;
	font-size:22px;		
	color: #fff !important;
	background-color: rgba(0,0,0,.9); 
	cursor: pointer;
	text-shadow: 1px 1px 1px rgba(128,128,128,.5);	
	box-shadow: 2px 2px 4px rgba(0,0,0,.4); 
	border-radius: 5px;
	padding: 3px 25px;
	border: 1px solid transparent;
	text-shadow: 1px 1px 1px rgba(255,255,255,.5);	
}

/*************************************************************************************************/
/* Reception */
/*************************************************************************************************/

#reception h3{
	font-family: "Courgette";
	text-decoration: underline;
	font-size: 28px;
	line-height: normal;
	-webkit-margin-before: 0;
	-webkit-margin-after: 0;
	display: block;	
	margin: 0;
	padding: 0;
}

#reception .slide-hero{
	width: 60%;
	height:  auto;
	position: absolute;
	right: -60px;
	top:  0px;
	z-index: 1;
}

#reception div{
	position: relative;
	z-index: 2;	
}

#reception #lodge-history div{
	padding-right:42%;	
	margin-top: 3px;	
}

#reception #lodge-history{
	padding-left: 2.5%;	
	margin-bottom: 20px;
}

#reception #attendance,
#reception #food-beverage,
#reception #date-time,
#reception #attire,
#reception #directions{
	margin-top: 10px;
	float: left;
	font-size: 15px;
	line-height: 17px;
	margin-left: 2.5%;
}

#reception #attendance h3,
#reception #food-beverage h3,
#reception #date-time h3,
#reception #attire h3,
#reception #directions h3{
	margin-top: 20px;	
}

#reception ol{
	list-style: none;
	-webkit-margin-before: 0;
	-webkit-margin-after: 0;
	-webkit-padding-start: 0;
	margin: 0;
	padding: 0;
}

#reception ol li{
	margin: 0 0 7px 0;
}

#reception ol li:last-of-type{
	margin-bottom: 0;	
}

#reception .clear{
	clear: both;
	height: 5px;	
}

#reception #attendance{
	width: 96.5%;	
	height: auto;
	clear: both;
	margin-right: 1%;
	float: none !important;
	padding-bottom: 10px;
}

@media only print{
	#reception #attendance{
		display: none;	
	}	
}

#reception #attendance IFRAME{
	display: none;	
}

#reception #attendance FORM{
	display: block;	
	margin: 0 0 7px 0;
}

#reception #attendance LABEL{
	display: inline-block;
	line-height: 17px;
	margin: 0 50px 0 0;
	padding: 0;	
	cursor: pointer;
}

#reception #attendance #form-response span{
	display: inline-block;
	padding: 4px 15px;
	color: #fff;
	border-radius: 3px;	
	box-shadow: 1px 1px 1px rgba(128,128,128,.5);
	margin: -4px 0;
}

#reception #attendance #form-response .happy{
	background-color: #3CA483;	
}

#reception #attendance #form-response .meh{
	background-color: #333;	
}

#reception #attendance #form-response .sad{
	background-color: #912E01;	
}

#reception #attendance INPUT[type=radio]{
	height: 17px;
	width: 17px;	
	padding: 0;
	margin: 0;
	position: relative;
	top: 4px;
	left: 0;
	display: inline-block;
	cursor: pointer;	
}

#reception #attendance SELECT{
	height: 20px;
	width: 40px;
	background-color: #eee;
	border-radius: 5px;	
	border: 1px solid #999;
	cursor: pointer;
}

#reception #attire{
	width: 37%;		
	clear: left;
	margin-right: 3%;
}

#reception #directions{
	width: 52%;
}

#reception #directions a:link,
#reception #directions a:visited{
	color: #000;
	display: inline-block;
	padding-left: 28px;	
	line-height: 23px;
	background: url('../images/site/map_20.png') no-repeat 0 50%;
}

@media only print{
	#reception #directions a{
		display: none !important;	
	}	
}

#reception #food-beverage{
	width: 52%;
	clear: right;			
}

#reception #date-time{
	width: 37%;		
	margin-right: 3%;
}

@media only screen and (max-width: 767px){	
	#reception .slide-hero{
		position: static;
		width: 90%;
		margin: 0 5% -50px 5%;	
	}
	
	#reception #lodge-history div{
		padding-right: 2.5%;			
	}
	
	#reception #lodge-history{
		padding-top: 0;			
	}
	
	#reception #attendance #form-response{
		display: block;	
	}
	
	#reception #attire,
	#reception #directions,
	#reception #food-beverage,
	#reception #date-time{
		width: 95%;
		margin: 0 2.5%;
		height: auto;	
	}
	
	#reception #attendance LABEL{
		margin-bottom: 10px;	
	}
}

/*************************************************************************************************/
/* Gifts */
/*************************************************************************************************/

#gifts{	
	overflow: hidden !important;
	border-radius: 0 0 8px 8px;
}

#gifts .slide-hero{
	position: absolute;	
	width: 37%;
	left: -8%;
	bottom: -100px;
	z-index: 1;
}

#gifts .slide-hero2{
	position: absolute;
	right: 25%;
	bottom: 0;
	z-index: 1;
	max-width: 30%;	
}


#gifts p{
	padding-left: 25%;
	text-align: center !important;
	margin: 30px 0 60px 0 !important;
	position: relative;
	z-index: 2;	
}

#gifts .charity-link{
	width: 44.5%;
	width: calc(45% - 4px);
	height: 220px;
	padding: 30px 0;
	display: block;
	float: left;
	border: 1px solid transparent;
	text-align: center;
	margin: 0 2.5%;
	position: relative;
	z-index: 2;
}

#gifts .paypal-donate{	
	width: 220px;	
	margin: 10px auto;
	padding: 10px;
	display: block;
	border: 1px solid transparent;	
}

#gifts .paypal-donate:hover,
#gifts .charity-link:hover{
	border: 1px solid #666;
	border-radius: 10px;
	background: rgba(0,0,0,0.05);
	box-shadow: 1px 1px 1px rgba(0,0,0,0.3);
}

#gifts .paypal-donate img,
#gifts .charity-link img{
	display: inline-block;
	margin: 0 auto;
	max-width: 95%;
}

@media only screen and (max-width: 1150px) and (min-width: 768px){	
	#gifts .slide-hero{
		position: absolute;	
		width: 50%;
		left: -25%;
		bottom: -100px;
		z-index: 1;
	}
}

@media only screen and (max-width: 767px){		
	#gifts{	
		overflow-y: scroll !important;
	}
	
	#gifts .slide-hero{
		display: none;	
	}
	
	#gifts p{
		padding: 0 5%;
		text-align: left;
		margin-top: 0 !important;
	}
	
	#gifts .charity-link{
		width: 90%;
		width: calc(90% - 4px);
		margin: 0 5%;
		height: auto;
	}
	
	#gifts .slide-hero2{
		position: static;
		margin: 5% 10% -30% 10%;		
		max-width:	80%;
		width: 80%;
		
	}	
}

/*************************************************************************************************/
/* Acknowledgements */
/*************************************************************************************************/

#acknowledgements{
	overflow: hidden !important;
	border-radius: 0 0 8px 8px;
}

#acknowledgements .slide-hero{
	width: 35%;
	height: auto;
	position: absolute;
	right: -10%;
	bottom: -80px;
	z-index: 1;
}

#acknowledgements .slide-hero2{
	max-width: 25%;
	height: auto;
	position: absolute;
	left: 10%;
	bottom: 0;
	z-index: 1;
}

#acknowledgements p{
	padding-right: 20%;	
	padding-left: 4%;
	font-family: "Handlee";
	font-size: 22px;
	line-height: 25px;
	margin-bottom: 40px !important;	
	display: block;
	position: relative;
	z-index: 2;
}

#acknowledgements B{
	font-family: "Handlee";
	line-height: 24px;	
	font-size: 26px;
	display: block;	
	padding-left: 2.5%;	
}

#acknowledgements p B{
	display: inline;
	font-size: 22px;
	position: relative;
	z-index: 2;
}

@media only screen and (max-width: 1150px){	
	#acknowledgements{	
		overflow-y: scroll !important;
	}
	
	#acknowledgements .slide-hero,
	#acknowledgements .slide-hero2{
		display: none;	
	}
	
	#acknowledgements p{
		padding-right: 2.5%;	
	}	
}


/*************************************************************************************************/
/* Stats */
/*************************************************************************************************/

#stats{
	width: 95%;
	margin: 0 2.5%;
}

#stats TD{
	font-size: 14px;
	line-height: 20px;	
	vertical-align: top;
}

#stats h3{
	font-size: 18px;
	border-bottom:  solid 1px #999;	
	margin-bottom: 10px;
}

#stats TD div i{
	float: left;	
	width: 25px;
	font-style: normal;	
	color: #444;
	display: inline-block;
}

#stats TD div span{
	float: right;
	font-size: 11px;
	color: #444;
	display: inline-block;
	margin-right: 20px;
}

#stats .invited,
#stats .attending,
#stats .fluff{
	width: 33.3%;
	padding: 0 3% 0 0;
}

#stats .yes{
	width: 70%;
	padding: 0 3% 0 0;
}

#stats .yes div{
	width: 48%;
	margin-right: 2%;
	float: left;
	border-right: solid 1px #999;
}
	
#stats .yes div:nth-of-type(2n+2){
	border-right-width: 0;
}


#stats .maybe,
#stats .no{
	width: 15%;
	padding: 0 3% 0 0;
}

#stats .no i{
	display: none;
}

#stats .waiting div{
	width: 32%;
	margin-right: 1.3%;
	float: left;
	border-right: solid 1px #999;
}
	
#stats .waiting div:nth-of-type(3n+3){
	border-right-width: 0;
}

@media only screen and (max-width: 767px){	
	#stats,
	#stats TBODY,
	#stats TR,
	#stats TD{
		display: block !important;
		width: 100% !important;
	}
	
	#stats .waiting div,
	#stats .yes div{
		width: 98%;
		margin: 0 1%;	
		float: none;
		border-right-width: 0 !important;
	}
}