<?php
if(!file_exists("./config.php"))
{
	echo "<script>
	window.location = './install.php'; 
	</script>";
}
require('config.php');
?>
<!DOCTYPE html>
<html>
<script src="./jquery.js"></script>
<!-- right click -->
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
	color 0.5s cubic-bezier(0.65, 0.05, 0.36, 1),scale 0.5s cubic-bezier(0.65, 0.05, 0.36, 1);
    will-change: -webkit-filter, width, background-color, color, scale;
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
<!-- End right click -->
<center>
<div><h1>Encrypt & Decrypt <?php echo $Cfg['hash'];?></h1></div>
<hr></hr>
<input type="text" class="str"/>
		<input type="button" value="Encrypt Me!" id="tbl-enkrip" class="tbl"/>
		<input type="button" value="Decrypt Me!" id="tbl-dekrip" class="tbl"/>
		<div id="result-bar">
		<span class="hasil"></span>
	</div>
</center>
</html>
    <style>
	*:hover{
		transform: scale(1.05,1.05);
	}
    div {
        font-family: 'Open Sans', Helvetica, sans-serif;
    }

    hr {
        border: 0;
        background-color: #e6e6e6;
        height: 1px;
    }
    h1 {color: #ff8000;font-size: 32px;letter-spacing: -0.408px;}
    a {
        color: inherit;
    }

    #main_container {
        max-width: 577px;
        min-width: 240px;
        position: fixed;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -60%);
        -moz-transform: translate(-50%, -60%);
        -ms-transform: translate(-50%, -60%);
        transform: translate(-50%, -60%);
    }

    tit1le {
        font-size: 36px;
        font-weight: 300;
        text-align: left;
        letter-spacing: -0.01em;
        line-height: 40px;
    }

    #underline {
        margin-top: 20px;
        margin-left: -1px;
    }

    #main_text {
        margin-top: 20px;
        color: #121314;
        font-size: 16px;
        letter-spacing: -0.01em;
        line-height: 24px;
    }

    #additional_text {
        color: #7a7574;
        font-size: 14px;
        letter-spacing: -0.01em;
        line-height: 18px;
    }

    .red {
        color: #e81123;
    }

    .orange {
        color: #ff8000;
    }

    @media only screen and (max-width: 500px) {
        #underline {
            margin-top: 10px;

        }
        #main_text {
            color: #373b3f;
        }
        #title {
            font-size: 32px;
            letter-spacing: -0.48px;
        }
        #additional_text {
            letter-spacing: -0.21px;
            line-height: 24px;
        }
        hr {
            opacity: 0.2;
        }
    }
    </style>
	<script>
function md5decode(hash){
var output;
$.ajax({
			   type: "POST",
			   url: ("brute-force.php?md5=" + hash + '&me=<?php echo $Cfg["hash"];?>'),
			   data: {
						},
			   async: false,
			   dataType: "json",
			   success: function(data){
			   input = data.input;
			   output = data.output;
			   use = data.use;
			}});
			return ("<hr>hash input: " + input + "<hr>string: " + output + "<hr>use time:" + use);
}
function md5encode(string){
var output;
$.ajax({
			   type: "POST",
			   url: ("encrypt.php?str=" + string + '&me=<?php echo $Cfg["hash"];?>'),
			   data: {
						},
			   async: false,
			   dataType: "json",
			   success: function(data){
			   input = data.input;
			   output = data.output;
			   use = data.use;
			}});
			return ("<hr>string input: " + input + "<hr>hash: " + output + "<hr>use time:" + use);
}
		$(document).ready(function(){
		$('#tbl-enkrip').click(function(){
			var string = $('.str').val();
			$('.hasil').html('<img src="img/loader.gif"> Loading..');
			$('.hasil').html(md5encode(string));
			});
		$('#tbl-dekrip').click(function(){
			var string = $('.str').val();
			$('.hasil').html('<img src="img/loader.gif"> Loading..');
			$('.hasil').html(md5decode(string));;
			});
		});
	</script>
</body>
</html>
