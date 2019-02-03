<!DOCTYPE html>
<html>
<script>
      document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#splash').addEventListener('transitionend', (event) => {
          event.target.remove();
        });
        requestAnimationFrame(() => {
          document.querySelector('#splash').classList.add('animate');
        });
      });
</script>
<head>
	<title>LockScreen</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1080, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="icon" sizes="128x128" href="icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="mobile-web-app-capable" content="yes">
	<preference name="FadeSplashScreen" value="false"/>
</head>
<script type="text/javascript">
	function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
    if (value === 1 || value === 5 || value===9){
    	document.getElementById('icons').innerHTML = '<i class="fa fa-circle" style="font-size:8px;color:white;position:fixed;left:113px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:153px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:193px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:233px;top:150px"></i>'
    	document.getElementById('warn').innerHTML = ''
    }

    else if (value === 2||value === 6||value===10){
    	document.getElementById('icons').innerHTML = '<i class="fa fa-circle" style="font-size:8px;color:white;position:fixed;left:113px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:white;position: fixed;left:153px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:193px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:233px;top:150px"></i>'
    }

    else if (value === 3 || value === 7 || value===11){
    	document.getElementById('icons').innerHTML = '<i class="fa fa-circle" style="font-size:8px;color:white;position:fixed;left:113px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:white;position: fixed;left:153px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:white;position: fixed;left:193px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:233px;top:150px"></i>'
    }

    else if (value === 4||value === 8){
    	document.getElementById('icons').innerHTML = '<i class="fa fa-circle" style="font-size:8px;color:white;position:fixed;left:113px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:white;position: fixed;left:153px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:white;position: fixed;left:193px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:white;position: fixed;left:233px;top:150px"></i>';
    	document.getElementById('warn').innerHTML = 'Wrong Password ! Please Try Again'
    	setTimeout(newone(),1000);
    }

    if (value == 12) {
    window.open('', '_self', ''); 
    window.close();
	}
}
function newone()
{
	document.getElementById('icons').innerHTML = '<i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position:fixed;left:113px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:153px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:193px;top:150px"></i><i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:233px;top:150px"></i>';
    document.getElementById('warn').innerHTML = 'wrong password '
}
</script>
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
body {overflow: hidden; }
body{
	background-image: url('ombg.jpg');
    min-height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
div{
	display: inline-block;
}
button {
	background-color: transparent;
    border:none;
    outline:none;
    width:31%;
    font-size: 35px;
    padding:24px;
    color: white;
    
}
button:active{
	outline:0;
	background-color: #cecece;
    background-repeat:no-repeat;
    border:0px solid #cecece;
    border-radius: 100px;
    opacity:0.2;
}
button:focus{
	outline:0;
}
</style>
<body style="background-color: transparent;">
<center id="warn" style="color:#d9d7d7;font-size:16px;position: fixed;top:90px;left:120px;text-align: center;"></center>	
<div id="icons">
	<i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:113px;top:150px"></i>
	<i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:153px;top:150px"></i>
	<i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:193px;top:150px"></i>
	<i class="fa fa-circle" style="font-size:8px;color:#a9a9a9;position: fixed;left:233px;top:150px"></i>
</div>	
<div id="number"style="position:fixed;bottom:165px">	
<button onclick="incrementValue()">1</button>
<button onclick="incrementValue()">2</button>
<button onclick="incrementValue()">3</button>
<button onclick="incrementValue()">4</button>
<button onclick="incrementValue()">5</button>
<button onclick="incrementValue()">6</button>
<button onclick="incrementValue()">7</button>
<button onclick="incrementValue()">8</button>
<button onclick="incrementValue()">9</button>
<button style="position: fixed;bottom: 90px;left:121px;"onclick="incrementValue()">0</button>
</div>
<div style="position: fixed;bottom: 10px;width:100%">
	<button style="width:45% ;font-size: 16px;padding:10px;">Emergency Call</button>
	<button style="width:45% ;font-size: 16px;padding:10px;">Back</button>
</div>
</body>
</html>
