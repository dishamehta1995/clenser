<!DOCTYPE html>
<html>
<head>
	<title>Characther remover</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,user-scalable=0">
</head>
<style type="text/css">
	body{color: #fff;background: #111;font-size: 18px; line-height: 1.5;font-family: arial;box-sizing: border-box;}
	p{text-transform: lowercase;}
	button{font-size: 16px; padding: 10px 20px; border-radius: 25px;}
	textarea {width: 100%; min-height: 100px; }

</style>
<body>
	<textarea></textarea>
	<button class="button">Submit</button>
	<input type="text" value="Hello World" id="myInput">
	<button onclick="myFunction()">Copy text</button>
	<p>	</p>
</body>
<script type="text/javascript" src="jquery.min.js"></script>
<script>
$(function (){
	$('.button').on('click',function(){
	  var str = $("textarea").val(); 
	  var newStr = str.replace(new RegExp('[,.’?!”“:;:@#$%^&*()+={}|"/><~`]', 'g'), '');
	  var newStr = newStr.replace(new RegExp('[-—]', 'g'), ' ');
	  var newStr = newStr.replace("'", '');
	  var newStr = newStr.replace("‘", '');
	  var newStr = newStr.replace('[', '');
	  var newStr = newStr.replace(']', '');
	  $("p").text(newStr);		
	})
});
</script>
</html>
