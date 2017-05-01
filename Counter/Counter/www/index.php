<!DOCTYPE html>
<html>
<head>
	<title>123</title>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="10"/>
</head>
<body>

<?php
	require_once("dbtools.inc.php");	  
	$link = create_connection();
	$sql="SELECT Waiting,Place FROM treatment WHERE Name='磁場'";
	$result=execute_sql($link,"rehabilitation_scheduling",$sql);
	$meta=mysqli_fetch_object($result);
?>
<img width="400" height="490"usemap="#canvasmap" style="border:0px;z-index:-1;"/>
<map name="canvasmap" style="border:0px;>
  <area shape="rect"  coords="96,326,156,386"   onclick="alert('You clicked 磁區')">
 
</map>

<div><canvas id="aa" width="400" height="490" style='position:absolute;z-index:-1;top:8px;left:7px;'></canvas>
<script type="text/javascript">
	var canvas=document.getElementById("aa");
	var context=canvas.getContext("2d");
	
	var a=<?php echo $meta->Waiting;?>;
	if(a > 10){
		context.fillStyle="#FFB6C1";
		context.fillRect(<?php echo $meta->Place; ?>);
	}
	if(a>5 && a<=10){
		context.fillStyle="#FFFFBB";
		context.fillRect(<?php echo $meta->Place; ?>);
	}
	if(a<=5){
		context.fillStyle="#99FF99";
		context.fillRect(<?php echo $meta->Place; ?>);
	}

	if (canvas.getContext){
    var ctx = canvas.getContext('2d');
	    for (var i = 0; i < 20; i++) {
		    ctx.beginPath();
		    ctx.moveTo(i*20,150);
		    ctx.lineTo(10+i*20,150);
		    ctx.moveTo(i*20,200);
		    ctx.lineTo(10+i*20,200);
		    ctx.moveTo(250+i*20,320);
		    ctx.lineTo(260+i*20,320);
		    ctx.moveTo(250,200+i*20);
		    ctx.lineTo(250,210+i*20);
		    ctx.stroke();
	    }
		    ctx.beginPath();
		    ctx.lineWidth="2";
		    ctx.moveTo(0,0);
		    ctx.lineTo(400,0);
		    ctx.moveTo(0,0);
		    ctx.lineTo(0,435);
		    ctx.moveTo(0,435);
		    ctx.lineTo(250,435);
		    ctx.moveTo(400,0);
		    ctx.lineTo(400,490);
		    ctx.moveTo(250,490);
		    ctx.lineTo(400,490);
		    ctx.stroke();

	}
	context.font="25px Arial";
	context.fillStyle="blue";
	context.textAlign="center";
	context.fillText("神經區",325,80);
	context.fillText("運動區",325,270);
	context.fillText("牽引區",325,360);
	context.fillText("電療區",180,330);

	context.font="15x Arial";
	context.fillStyle="green";
	context.textAlign="center";
	context.fillText("腳踏車",150,60);
	context.fillText("傾斜床",70,90);
	context.fillText("電刺激",145,280);
	context.fillText("雷射",225,390);
	context.fillText("干擾波",140,425);
	context.fillText("磁場",122,365);
	context.fillText("循環機",70,250);
	context.fillText("運動",325,225);
	context.fillText("頸牽",325,480);
	context.fillText("腰",265,400);
	context.fillText("牽",265,430);

	context.font="15x Arial";
	context.fillStyle="red";
	context.textAlign="center";
	context.fillText("紅外線",160,225);
	context.fillText("微波",30,391);
	context.fillText("超音波",360,310);
	context.fillText("熱敷",325,420);
	context.fillText("短",385,400);
	context.fillText("波",385,430);
 //    var img = new Image();
 //  	img.onload = function(){
	//         context.drawImage(img,175,80,50,50);
	// };
 //  	img.src = 'red.png';
 //  	var img1 = new Image();
 //  	img1.onload = function(){
	//         context.drawImage(img1,300,260,50,50);
	//   };
 //  	img1.src = 'green.png';
 //  	var img2 = new Image();
 //  	img2.onload = function(){
	//         context.drawImage(img2,100,350,50,50);
	//   };
 //  	img2.src = 'yellow.png';
</script></div>



</body>
</html>