<!DOCTYPE html>
<html>
<head>
<script
src="https://ajax.googleapis.com/ajax/libs/jqu
ery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
$(".btn1").click(function(){
$("p").hide(1000);
});
$(".btn2").click(function(){
$("p").show(1000);
});
});
</script>
</head>
<body>
<p>This is a paragraph.</p>
<button class="btn1">Hide</button>
<button class="btn2">Show</button>
</body>
</html>