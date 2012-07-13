<style type="text/css">
.wrap {
padding-top:0;
display:block;
clear:both;
position:relative;
font-family: Arial;
}
.wrap h2 {
font-size:16px;
display:block;
font-style: normal;
font-weight:bold;
color:#555;
margin:0!important;
overflow:hidden;
height:51px;
padding:0px;
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
position:relative;
cursor:pointer;
font-family: Arial;
background: url(<?php bloginfo('template_directory'); ?>/images/buttonoverlay.png) repeat-x top left #EEE;
}
.wrap .blockactive h2 {
background: #EEE;
}
.wrap .blockactive .inner {
border-top:2px solid #DDD;
background: #fff;
}
.wrap h2 span {
float:left;
padding:0px 15px;
line-height:50px;
}
.wrap h2 input {
float:right;
margin:10px 10px 0 0;
padding:6px 10px;
color: #FFF;
border:1px solid #000;
background: url(<?php bloginfo('template_directory'); ?>/images/buttonoverlay.png) repeat-x top left #333;
}
.wrap h2 input:hover {
background:#555;
color:#FFF;
}
.wrap h2.heading {
margin:0px;
padding:0px;
height:120px;
display:block;
overflow: hidden;
width:100%;
}
p.heading {
margin-top:0px;
font-size:12px;
padding:10px;
display:block;
font-family: Arial;
font-style: normal;
color:#555;
background:#CCC;
}
.block {
background: #f4f4f4;
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
border:1px solid #DDD;
overflow:hidden;
margin:0 0 10px 0;
}
.blockactive {
background: #EEE;
}
.block p {
padding:0px 20px 10px 20px;
}
.block .inner {
padding:10px;
margin-top:0px;
}
.block h4 {
font-size:14px;
margin:20px 0 20px 10px;
color:#333;
background: #CCC;
padding:0 10px;
line-height:30px;
height:30px;
display:table;
border:1px solid #999;
}
p input {
clear:both;
margin-top:10px;
width:400px;
}
small {
display:block;
margin-left:210px;
padding:5px 0 0 5px;
}
img {
display:block;
margin-left:230px;
padding-bottom: 10px;
}
p label {
font-weight:bold;
width:200px;
padding:5px 10px 0 0;
line-height:20px;
display:block;
float:left;
}
p textarea {
margin-top:10px;
width:500px;
height:100px;
}

.buttons {
font-size:16px;
display:block;
font-family: Arial;
font-style: normal;
font-weight:bold;
color:#555;
margin:0;
background: none transparent;
overflow:hidden;
height:40px;
padding:0px;
position:relative;
}

.buttons input {
float:left;
margin:6px 5px 0 0 ;
padding:6px 10px;
background: #333;
border:1px solid #000;
color: #FFF;
}

.buttons input:hover {
background:#555;
color:#FFF;
}

#message {
position:absolute;
top:0px;
right:0px;
padding:10px 20px;
}
#message p {
padding:0px;
}

.sliderstyles {
display:block;
float:right;
margin:-20px 0  0 0;
}

.sliderstyles p {
float:left;
margin:0 10px 0 0;
display:block;
width:90px;
overflow: hidden;
padding: 0!important;
}

.sliderstyles p span {
padding:0 0 0 5px;
font-size:11px;
}

p.sliderstylescontainer select {
width:200px!important;
float:left;
}

ul.stylechooser {
display:block;
overflow: hidden;
margin:0 10px;
}

.stylechooser  li {
float:left;
margin:0 20px 20px 0;
width:188px;
display:block;
}

.stylechooser li a {
display:block;
overflow: hidden;
background: #f4f4f4;
padding:15px;
font-size:12px;
text-decoration: none;
text-align: center;
border:0px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
opacity:0.7;
}

.stylechooser li a img {
margin:0 0 10px 0;
border:1px solid #666;
padding:3px;
background: #FFF;
}

.stylechooser li a:hover {
background:#434343;
color: #FFF;
-webkit-box-shadow: 0px 0px 4px #DDD;
-moz-box-shadow: 0px 0px 4px #DDD;
box-shadow: 0px 0px 4px #DDD;
background-image: -moz-linear-gradient(top, #5d5d5d, #414141); /* FF3.6 */
background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #5d5d5d),color-stop(1, #414141)); /* Saf4+, Chrome */
filter:  progid:DXImageTransform.Microsoft.gradient(startColorStr='#5d5d5d', EndColorStr='#414141'); /* IE6,IE7 */
-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#5d5d5d', EndColorStr='#414141')"; /* IE8 */
}

.stylechooser li.active a img {
}

.stylechooser li.active a {
background: #DDD;
border-color: #DDD;
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
color: #000;
}

.stylechooser h3 {
font-size:18px;
padding:0 15px;
}

.stylechoosercontainer {
display:block;
overflow: hidden;
clear: both;
}

.stylecontainer {
display:block;
}

ul.stylelist {
line-height:24px;
list-style: none;
overflow: hidden;
margin:-20px 0 20px 230px;
font-size:12px;
display:block;
}

ul.stylelist li {
float:left;
display:block;
margin:0 20px 0 0;
}

.block .inner input, .block .inner textarea {
background: #FFF;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
padding:6px 10px;
margin:0 0 0px 0;
border:1px solid #CCC;;
outline:0px;
-webkit-box-shadow: 0px 2px 2px #DDD;
-moz-box-shadow: 0px 2px 2px #DDD;
box-shadow: 0px 2px 2px #DDD;
}

.block .inner input:focus, .block .inner textarea:focus {
border-color:#999;
}
</style>