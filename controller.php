<html>
    <head>
        <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
		<script src="http://hammerjs.github.io/dist/hammer.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<title>Gyro Demo</title> 
		<meta name="apple-touch-fullscreen" content="yes" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    </head>
    
	<body>
	<div id="boxx">
		<a-scene>
			
			<a-entity id='cameraWrapper' position="0 0 0" rotation="0 0 0">
			  <a-camera  camera="zoom: 1" look-controls="enabled: true"></a-camera>
			</a-entity>
			
			<a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9" shadow></a-box>
			<a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E" shadow></a-sphere>
			<a-cylinder position="1 0.75 -3" radius="0.5" height="1.5" color="#FFC65D" shadow></a-cylinder>
			<a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4" shadow></a-plane>
			<a-sky color="#ECECEC"></a-sky>
				
		</a-scene>
	</div>
		<script>
			var stage = document.getElementById("boxx"); 
			
			var mc = new Hammer(stage);
			mc.get('swipe').set({ direction: Hammer.DIRECTION_ALL });
			
			var pos = document.querySelector('#cameraWrapper').getAttribute('position');
			var x1 = pos['x'];
			var y1 = pos['y'];
			var z1 = pos['z'];
			
			var rot = document.querySelector('#cameraWrapper').getAttribute('rotation');
			var a = rot['x'];
			var b = rot['y'];
			var g = rot['z'];		
			
			setInterval(function() {
				document.querySelector("#cameraWrapper").setAttribute('rotation', {x: a, y: b, z: g});
			}, 1);
			
			mc.on("swipeleft", function () {
				x1 = x1 + 0.2;
				document.querySelector("#cameraWrapper").setAttribute('position', {x: x1, y: y1, z: y1});
			});

			mc.on("swiperight", function () { 
				x1 = x1 - 0.2;
				document.querySelector("#cameraWrapper").setAttribute('position', {x: x1, y: y1, z: z1});
			});
			
			mc.on("swipeup", function () { 
				z1 = z1 - 0.2;
				document.querySelector("#cameraWrapper").setAttribute('position', {x: x1, y: y1, z: z1});
			}); 
			
			mc.on("swipedown", function () { 			
				z1 = z1 + 0.2;
				document.querySelector("#cameraWrapper").setAttribute('position', {x: x1, y: y1, z: z1});
			});
			
			
		</script>
    </body>
</html>

