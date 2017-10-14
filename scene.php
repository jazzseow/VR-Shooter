<!DOCTYPE html>
<html>
    <head>
        <!-- Define the IO with JavaScript Imports -->
        <title>pewpew.io</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aframe/0.7.0/aframe-master.js"></script>
    </head>
        <body>
            <!-- Define the Scenes within the VR -->
            <a-scene>
                <!-- Define and Import the Assets -->
                <a-assets>
                    <img id="texture" src="assets/texture.jpg"/>
                    <img id="sky" src="assets/skybox.jpg">

                    <a-mixin id="cube" geometry="primitive: box"></a-mixin>
                    <a-mixin id="cube-hovered" material="color: magenta"></a-mixin>
                    <a-mixin id="cube-selected" material="color: cyan"></a-mixin>
                    <a-mixin id="red" material="color: red"></a-mixin>
                    <a-mixin id="green" material="color: green"></a-mixin>
                    <a-mixin id="blue" material="color: blue"></a-mixin>
                    <a-mixin id="yellow" material="color: yellow"></a-mixin>
                    <a-mixin id="sphere" geometry="primitive: sphere"></a-mixin>
                </a-assets>

                <!-- 360-degree Image -->
                <a-sky src="#sky"></a-sky>

                <!-- Define the Camera and Cursor -->
                <a-entity position="0 2.2 4">
                    <a-entity id="camera" camera look-controls wasd-controls>
                        <a-entity position="0 0 -3"
                            geometry="primitive: ring; radiusInner: 0.2; radiusOuter: 0.3;"
                            material="color: cyan; shader: flat"
                            cursor="maxDistance: 30; fuse: true">
                    <a-animation begin="click" easing="ease-in" attribute="scale"
                        fill="forwards" from="0.2 0.2 0.2" to="1 1 1" dur="150"></a-animation>
                    <a-animation begin="fusing" easing="ease-in" attribute="scale"
                        fill="backwards" from="1 1 1" to="0.2 0.2 0.2" dur="1500"></a-animation>
                        </a-entity>
                    </a-entity>
				</a-entity>
                <!-- Sample Box Assets -->
                <a-entity id="chair" position="-1.5 0 -3">
                    <a-box width="0.05" height="0.46" depth="0.05" position="-0.21 0.23 0.23" color="#555"></a-box>
                    <a-box width="0.05" height="0.46" depth="0.05" position="0.21 0.23 -0.23" color="#555"></a-box>
                    <a-box width="0.05" height="0.46" depth="0.05" position="0.21 0.23 0.23" color="#555"></a-box>
                    <a-box width="0.05" height="0.46" depth="0.05" position="-0.21 0.23 -0.23" color="#555"></a-box>
                    <a-box width="0.48" height="0.07" depth="0.52"  position="0 0.49 0" color="#333"></a-box>
                    <a-box width="0.48" height="0.51" depth="0.07"  position="0 0.78 -0.225" color="#333"></a-box>
                    <a-animation attribute="rotation" begin="click" repeat="0" to="0 360 0"></a-animation>
                </a-entity>

                <a-cylinder position="4 3 0" color="crimson" height="1" radius="0.5"></a-cylinder>
                
                <!-- Background -->
                <a-plane rotation="-90 0 0" width="20" height="20" color="#8E9EAB" position="0 0 0"></a-plane>
                <!-- Walls -->
                <a-plane rotation="0 0 0" width="8" height="3" color="#BCC6CD" position="0 1.5 -4"></a-plane>
                <a-plane rotation="0 -90 0" width="10" height="3" color="#BCC6CD" position="4 1.5 1"></a-plane>
                <a-plane rotation="0 90 0" width="10" height="3" color="#BCC6CD" position="-4 1.5 1"></a-plane>
                <a-plane rotation="0 180 0" width="8" height="3" color="#BCC6CD" position="0 1.5 6"></a-plane>
				
				<a-entity id="bullet" >
					<a-box  height='1' width='1' depth='3'/>
					<a-animation attribute="position"
					dur="1000"
					to='0 0 -10'
					repeat="indefinite"></a-animation> 
				</a-entity>
				<a-entity id="text" position='0 5 0'></a-entity>
            </a-scene>
        </body>
		<script type="text/javascript">
			var t1= "width:10; value:";
			
			setInterval(function() {
				var rot = document.querySelector("#camera").getAttribute('rotation');
				var pos = document.querySelector("#camera").getAttribute('position');
				var t3 = t1.concat(pos.x, pos.y, pos.z);
				document.querySelector("#text").setAttribute('text', t3);
				document.querySelector("#bullet").setAttribute('position', {x:pos.x,y:pos.y,z:pos.z});
				document.querySelector("#bullet").setAttribute('rotation', {x:rot.x,y:rot.y,z:rot.z});
			},1);
			
		</script>
		
</html>

