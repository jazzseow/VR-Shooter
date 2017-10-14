<!DOCTYPE html>
<html>
    <head>
        <!-- Define the IO with JavaScript Imports -->
        <title>pewpew.io</title>
        <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    </head>
        <body>
            <!-- Define the Scenes within the VR -->
            <a-scene>
                <!-- Define and Import the Assets -->
                <a-assets>
                    <img id="texture" src="assets/texture.jpg"/>
                    <img id="sky" src="assets/skybox.jpg">
                </a-assets>

                <!-- 360-degree Image -->
                <a-sky src="#sky"></a-sky>

                <!-- Define the Camera and Cursor -->
                <a-entity position="0 2 4">
                    <a-entity camera look-controls wasd-controls>
                        <a-entity position="0 6 -3"
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
                <a-box position="0 2 -3" 
                        rotation="0 0 0" 
                        src=#texture>
                    <a-animation attribute="rotation" begin="click" repeat="0" to="0 360 0"></a-animation>
                </a-box> 
            </a-scene>
        </body>
</html>