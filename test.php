<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<title>Gyro Demo</title> 
		<meta name="apple-touch-fullscreen" content="yes" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<style> 
		#no {
			display: none;	
		}
		
		@media screen {
			html, body, div, span {
				margin: 0;
			  padding: 0;
			  border: 0;
			  outline: 0;
			  font-size: 100%;
			  vertical-align: baseline;
			}			
			body {
				height: auto;
		  	-webkit-text-size-adjust:none;
		  	font-family:Helvetica, Arial, Verdana, sans-serif;
		  	padding:0px;
				overflow-x: hidden;		
			}		
			
			.outer {
				background: rgba(123, 256, 245, 0.9);
				padding: 0px;
				min-height: 48px;
				
			}
			
			.box {
				position: relative;
				float: left;
				width: 45%;
				padding: 7px;
				border: 1px solid rgba(255, 255, 255, 0.6);
				background: rgba(178,215,255,0.75);
				min-height: 160px;
			}	
			
			.box2 {
				position: relative;
				float: left;
				width: 45%;
				padding: 7px;
				border: 1px solid rgba(255, 255, 255, 0.6);
				background: rgba(178,215,255,0.75);
			}	
			
			.box span {
				display: block;
			}
			
			span.head {
				font-weight: bold;				
			}
		
		}
		</style> 
	</head> 

	<body>
		<div id="yes"> 
				<div class="box" id="accel">
					<span class="head">Accelerometer</span>
					<span id="xlabel"></span>
					<span id="ylabel"></span>
					<span id="zlabel"></span>
					<span id="ilabel"></span>					
					<span id="arAlphaLabel"></span>										
					<span id="arBetaLabel"></span>										
					<span id="arGammaLabel"></span>																				
				</div>		
			
				<div class="box" id="gyro">
					<span class="head">Gyroscope</span>
					<span id="alphalabel"></span>			
					<span id="betalabel"></span>
					<span id="gammalabel"></span>
				</div>
				
		</div>
		<div id="no">
			Your browser does not support Device Orientation and Motion API. Try this sample with iPhone, iPod or iPad with iOS 4.2+.    
		</div>
		
		<script> 
			// Position Variables
			var x = 0;
			var y = 0;
			var z = 0;

			// Speed - Velocity
			var vx = 0;
			var vy = 0;
			var vz = 0;

			// Acceleration
			var ax = 0;
			var ay = 0;
			var az = 0;
			var ai = 0;
			var arAlpha = 0;
			var arBeta = 0;
			var arGamma = 0;

			var delay = 100;
			var vMultiplier = 0.01;
		
			var alpha = 0;
			var beta = 0;
			var gamma = 0;
			
			
			if (window.DeviceMotionEvent==undefined) {
				document.getElementById("no").style.display="block";
				document.getElementById("yes").style.display="none";
			} 
			else {
				window.ondevicemotion = function(event) {
					ax = Math.round(Math.abs(event.accelerationIncludingGravity.x * 1));
					ay = Math.round(Math.abs(event.accelerationIncludingGravity.y * 1));
					az = Math.round(Math.abs(event.accelerationIncludingGravity.z * 1));		
					ai = Math.round(event.interval * 100) / 100;
					rR = event.rotationRate;
					if (rR != null) {
						arAlpha = Math.round(rR.alpha);
						arBeta = Math.round(rR.beta);
						arGamma = Math.round(rR.gamma);
					}

/*					
					ax = Math.abs(event.acceleration.x * 1000);
					ay = Math.abs(event.acceleration.y * 1000);
					az = Math.abs(event.acceleration.z * 1000);		
	*/				
				}
								
				window.ondeviceorientation = function(event) {
					alpha = Math.round(event.alpha);
					beta = Math.round(event.beta);
					gamma = Math.round(event.gamma);
				}				
				
				setInterval(function() {
					document.getElementById("xlabel").innerHTML = "X: " + ax;
					document.getElementById("ylabel").innerHTML = "Y: " + ay;
					document.getElementById("zlabel").innerHTML = "Z: " + az;										
					document.getElementById("ilabel").innerHTML = "I: " + ai;										
					document.getElementById("arAlphaLabel").innerHTML = "arA: " + arAlpha;															
					document.getElementById("arBetaLabel").innerHTML = "arB: " + arBeta;
					document.getElementById("arGammaLabel").innerHTML = "arG: " + arGamma;																									
					document.getElementById("alphalabel").innerHTML = "Alpha: " + alpha;
					document.getElementById("betalabel").innerHTML = "Beta: " + beta;
					document.getElementById("gammalabel").innerHTML = "Gamma: " + gamma;

				}, delay);
				
				var variableToSend = 'foo';
				$.post('test.php', {variable: variableToSend});
			} 
			</script> 
		</body> 
</html> 
