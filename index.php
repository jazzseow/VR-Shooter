<html>
    <head>
        <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    </head>
    
	<body>
		<a-scene>
			<a-assets>
				<img id="texture" src="img/texture.jpg" />
			</a-assets>
			
			<a-entity id='cameraWrapper' position="0 0 0" rotation="45 0 0">
			  <a-camera></a-camera>
			</a-entity>
			
			<a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9" shadow></a-box>
			<a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E" shadow></a-sphere>
			<a-cylinder position="1 0.75 -3" radius="0.5" height="1.5" color="#FFC65D" shadow></a-cylinder>
			<a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4" shadow></a-plane>
			<a-sky color="#ECECEC"></a-sky>
				
		</a-scene>
		<script>
			document.querySelector("#cameraWrapper").setAttribute('position', {x: 0, y: 0, z: });
		</script>
    </body>
</html>

