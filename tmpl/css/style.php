<?php
	defined("_JEXEC") or die();
?>
<style>
	.top-three-menu-all{
		width:100%;
		min-height: 50px;
		background-color: #fff;
		line-height: 50px;
		text-transform: uppercase;
		margin-top: -10px;
	}
	.top-three-menu-all div{
		width:100%;
		height: 57px;
		border-bottom: 3px solid #2b96fb;
	}
	.top-three-menu-all div div#logo{
		width: 90px;
		float: left;
		margin-left: 30px;
		margin-right: 30px;
	}
	.top-three-menu-all div div#top-three-menu-first-main{
		width: 56%;
		float: left;
	}
	.top-three-menu-first{
		margin-left: 15px;
		margin-right: 15px;
		float:left;
	}
	.top-three-menu-first{
		color:#6f83b5;
		text-decoration: none;		
	}
	.top-three-menu-first:hover{
		color:#2b96fb;
		text-decoration: none;		
	}
	#top-three-menu-second-1{
		display:none;
		width:100%;
		position: absolute;
		margin-top: -2px;
		z-index: 200;
		background-color: #fff;
	}
	#top-three-menu-second-1 ul{
		width:100%;
		/*float:left;*/
		padding:0 0 0 0;	
		margin:0 0 0 0;
		text-transform:uppercase;
	}
	#top-three-menu-second-1 ul li{
		width:33%;
		/*float:left;*/
	}
	.second-level-top-menu{
		margin-top:15px;
	}
	#top-three-menu-second-1 .second-level-top-menu ul li a{
		font-size:18px;
		color:#6f83b5;
	}
	.tree-level-top-menu{
		width:98%;
		margin-left:10px;
		height:150px;
	}
	.tree-level-top-menu ul li a{
		font-size:14px !important;
		color:#6f83b5;
	}

	#top-menu-two-level-left-column{
		float:left;
		width:290px;
		font-size:16px;
		margin-top:15px;
		border-right: 1px solid #2b96fb;
		margin-bottom:15px;
	}
	#top-menu-two-level-left-column ul li{
		width:100%;
		height:50px;
		line-height:50px;
	}
	#top-menu-two-level-left-column ul li:hover{
		border-left: 3px solid #2c5dd8;
		font-size:18px;
		font-weight: 600;
		background-color:#2b96fb;
		color:#fff;
	}
	#top-menu-two-level-left-column ul li a{
		font-size:14px !important;
		color:#6f83b5;
	}
	.secondLevelTopMenu:hover a{
		color:#fff !important;
		
	}
	#menu-three-level-center-column{
		float:left;
		width:81%;
		height:300px;
		font-size:16px;
		margin-top:15px;
		margin-bottom:15px;
		overflow: hidden;
	}
	#menu-three-level-center-column div{
		/*width:50%;*/
		border-right: 1px solid #2b96fb;
		margin-top:15px;
		max-weight:100%;
	}
	#menu-three-level-center-column div ul{
		width:50%;
	}
	#menu-three-level-center-column div ul li{
		float:left;
		width:50%;
		height: 30px;
		line-height:30px;		
	}
	#menu-three-level-center-column div ul li:hover{
		background-color:#2b96fb;
	}
	#menu-three-level-center-column div ul li:hover a{
		color:#fff;
	}
	#menu-three-level-center-column div ul li a{
		font-size:15px !important;
		color:#6f83b5;
	}

	.em-lang-switch.blue-lang-switch .em-open-lang-switch {
		width: 40px;
		height: 30px;
		right: 10px;
		margin-top: -11px;
		border: 0px;
	}
	.em-lang-switch.blue-lang-switch ul {
		right: 10px;
		top: 0px;
		border-radius: 0px;
	}
	.em-lang-switch ul {
		position: absolute;
		right: 10px;
		top: 0px;
		display: inline-block;
		background: #2b96fb;
		z-index: 199;
	}
</style>