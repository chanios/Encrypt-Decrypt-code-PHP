<?php
require('config.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>MD5 Encryption - Kecerdasan Buatan UMJ Sore :. Ahyar</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
	<script type="text/javascript" src="jquery.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="container">
		<h2>Encrypt and decrypt <?php echo $Cfg["hash"];?></h2>
		<input type="text" class="str"/>
		<input type="button" value="Encrypt Me!" id="tbl-enkrip" class="tbl"/>
		<input type="button" value="Decrypt Me!" id="tbl-dekrip" class="tbl"/>
	<div id="result-bar">
		Hash :<br/>
		<span class="hasil"></span>
	</div>
	<a href="http://www.ayayank.com" title="Mengenkripsi dan mendekripsi md5">ayayank.com</a>
	</div>
	<!-- manipulasi AJAX -->
	<script>
            var menuDisplayed = false;
            var menuBox = null;

            window.addEventListener("contextmenu", function() {
			if(!document.getElementById('copyer')==null){
			document.getElementById('copyer').remove();
			}
			if(document.getElementById('copyer')==null){
			selection = window.getSelection(),
            pagelink = '',
            copytext = selection + pagelink,
            newdiv = document.createElement('div');
			newdiv.id = 'copyer';
			newdiv.style.position = 'absolute';
			newdiv.style.left = '-99999px';
			document.body.appendChild(newdiv);
			newdiv.innerHTML = copytext;
			}
                var left = arguments[0].clientX;
                var top = arguments[0].clientY;
                menuBox = window.document.querySelector(".menu");
                menuBox.style.left = left + "px";
                menuBox.style.top = top + "px";
                menuBox.style.display = "block";
				menuBox.style.animation = "sweepmenu .5s ease-in-out";

                arguments[0].preventDefault();
					menuDisplayed = true;
            }, false);

            window.addEventListener("click", function() {
                if(menuDisplayed == true){
					menuDisplayed = false;
					window.setTimeout(function () {
						document.getElementById('copyer').remove();
					}, 100);
					menuBox.style.animation = "sweepmenud .5s ease-in-out";
					window.setTimeout(function () {
						menuBox.style.display = "none";
					}, 500);

                }
            }, true);
			    function copyy() {
        copyer = document.getElementById("copyer");
window.getSelection().selectAllChildren(copyer);
		document.execCommand('copy');
        window.setTimeout(function () {
            document.getElementById('copyer').remove();
        }, 100);
    }
        </script>
<style>
	@keyframes sweepmenu {
  0%    {opacity: 0; width: 1px}
  100%  {opacity: 1; width: 200px}
}
	@keyframes sweepmenud {
  0%    {display: block; opacity: 1; width: 200px}
  100%  {display: block; opacity: 0; width: 1;px}
}
            .menu
            {
                width: 200px;
                box-shadow: 3px 3px 5px #888888;
                border-style: solid;
                border-width: 1px;
                border-color: rgba(28,28,28,0.9);
                border-radius: 2px;
                padding-left: 5px;
                padding-right: 5px;
                padding-top: 3px;
                padding-bottom: 3px;
                position: fixed;
                display: none;
				overflow: hidden;
				background: rgba(28,28,28,0.9);
				z-index: 999999999999990;
            }

            .menu-item
            {
				color: #ffffff;
				text-shadow: 0 0 2px rgba(0,0,0,.5);
                height: 20px;
				overflow: hidden;
				z-index: 9999999999999900;
            }

            .menu-item:hover
            {
                background-color: rgba(100,100,100,0.9);
                cursor: pointer;
            }
	* {
    transition: -webkit-filter 0.5s cubic-bezier(0.65, 0.05, 0.36, 1),width 0.5s cubic-bezier(0.65, 0.05, 0.36, 1) background-color 0.5s cubic-bezier(0.65, 0.05, 0.36, 1),
	color 0.5s cubic-bezier(0.65, 0.05, 0.36, 1);
    will-change: -webkit-filter, width, background-color, color;
}
</style>
        <div class="menu">
			<div onclick="copyy();" class="menu-item">Copy</div>
			<hr>
            <a href="https://www.youtube.com/results?search_query=chan022bots"><div class="menu-item">Search On Youtube</div></a>
            <hr>
            <a href="https://www.google.co.th/?q=chan022bots"><div class="menu-item">Search On Google</div></a>
            <hr>
            <div class="menu-item">@chan022YT</div>
        </div>

	<script>
function md5decode(hash){
var output;
$.ajax({
			   type: "POST",
			   url: ("brute-force.php?md5=" + hash),
			   data: {
						},
			   async: false,
			   dataType: "json",
			   success: function(data){
			   output = data.output;
			}});
			return output;
}
		$(document).ready(function(){
		$('#tbl-enkrip').click(function(){
			var string = $('.str').val();
			$('.hasil').html('<img src="img/loader.gif"> Loading..');
			$('.hasil').load('encrypt.php?str='+string+'&me=<?php echo $Cfg["hash"];?>');
			});
		$('#tbl-dekrip').click(function(){
			var string = $('.str').val();
			$('.hasil').html('<img src="img/loader.gif"> Loading..');
			$('.hasil').load('brute-force.php?md5='+string+'&me=<?php echo $Cfg["hash"];?>');
			});
		});
	</script>
	<!-- Akhir manipulasi AJAX -->
</body>
</html>
