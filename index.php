<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		<script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
		<script src="http://hammerjs.github.io/dist/hammer.min.js"></script>
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<meta name="apple-touch-fullscreen" content="yes" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat Gyro Demo</title>
    
    <link rel="stylesheet" href="style.css" type="text/css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
      
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		chat.getState(); 

    	});
		
		<?php if (isMobile()): ?> 
			var delay = 100;
			
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
			 
			
			setInterval(function() {
				document.getElementById("alphalabel").innerHTML = "Alpha: " + a;
				document.getElementById("betalabel").innerHTML = "Beta: " + b;
				document.getElementById("gammalabel").innerHTML = "Gamma: " + g;
				document.getElementById("x1label").innerHTML = "x1: " + x1;
				document.getElementById("y1label").innerHTML = "y1: " + y1;
				document.getElementById("z1label").innerHTML = "z1: " + z1;
				chat.send(a, b, g, x1,y1,z1);
				}, 1
			);
		<?php endif; ?>
    </script>
	<?php
		function isMobile(){
			$useragent=$_SERVER['HTTP_USER_AGENT'];
			if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
				return true;
			}
			return false;
		}
		
	?>

</head>

<body onload="setInterval('chat.update()', 1)">
	<div id="boxx">
            <!-- Define the Scenes within the VR -->
            <a-scene>
				
				<a-entity id='cameraWrapper' position="0 0 0" rotation="0 0 0">
				<a-camera  camera="zoom: 1" look-controls="enabled: true"></a-camera>
				</a-entity>
				
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
                <a-entity position="0 1 4">
                    <a-entity id='cameraView'  camera look-controls wasd-controls>
                        <a-entity position="0 0 -3"
                            geometry="primitive: ring; radiusInner: 0.1; radiusOuter: 0.2;"
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

                <!-- Background -->
                <a-plane rotation="-90 0 0" width="20" height="20" color="#8E9EAB" position="0 0 0"></a-plane>
                <!-- Walls -->
                <a-plane rotation="0 0 0" width="8" height="3" color="#BCC6CD" position="0 1.5 -4"></a-plane>
                <a-plane rotation="0 -90 0" width="10" height="3" color="#BCC6CD" position="4 1.5 1"></a-plane>
                <a-plane rotation="0 90 0" width="10" height="3" color="#BCC6CD" position="-4 1.5 1"></a-plane>
                <a-plane rotation="0 180 0" width="8" height="3" color="#BCC6CD" position="0 1.5 6"></a-plane>
            </a-scene>
	</div>
</body>

</html>
=======
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

>>>>>>> 966e4196ad47d387fc7a6af03db777af91b9568a
