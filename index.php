<html>
    <head>
        <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    </head>
    
	<body>
		<a-scene>
			<a-assets>
				<img id="texture" src="img/texture.jpg" />
			</a-assets>

			<a-camera position="0 0 0" rotation="45 0 0"></a-camera>
			
			<a-box position="-1 0.5 -3" 
				rotation="0 0 0" 
				src=#texture></a-box>
							
			<a-box position="1 0.5 -3" 
				   rotation="0 0 0" 
				   src=#texture></a-box>

			<a-box position="-1 1 -3" 
				   rotation="0 0 0" 
				   src=#texture></a-box>

			<a-box position="-1 2 -3" 
						rotation="0 0 0" 
						src=#texture></a-box>

			<a-box position="-1 0.5 -1" 
					rotation="0 0 0" 
					src=#texture></a-box>

			<a-box position="-1 3 -1" 
					rotation="0 0 0" 
					src=#texture></a-box>
				
		</a-scene>
    </body>
</html>

