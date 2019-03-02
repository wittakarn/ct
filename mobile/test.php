<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../js/gyronorm.complete.min.js"></script>
    <style>
        #src {
            position: absolute; 
            top: 50%;
            left: 50%;
            border: 1px solid black;
        }
    </style>
    <title>test</title>
</head>

<body>
    <div id="detail"></div>
    <div id="src" style="">[]</div>
    <script>
        var src = document.getElementById("src");
        var detail = document.getElementById("detail");

        src.addEventListener('touchend', rotate);

        function rotate (e) {
        var touch = e.changedTouches.item(0);

        // Turn off default event handling
        e.preventDefault();

        // Rotate element 'src'.
        src.style.width = touch.radiusX * 2 + 'px';
        src.style.height = touch.radiusY * 2 + 'px';
        src.style.transform = "rotate(" + touch.rotationAngle + "deg)";
        detail.innerHTML = touch.radiusX;
        };

        var gn = new GyroNorm();

        gn.init().then(function(){
        gn.start(function(data){
            console.log(data.do.beta);
            // Process:
            // data.do.alpha	( deviceorientation event alpha value )
            // data.do.beta		( deviceorientation event beta value )
            // data.do.gamma	( deviceorientation event gamma value )
            // data.do.absolute	( deviceorientation event absolute value )

            // data.dm.x		( devicemotion event acceleration x value )
            // data.dm.y		( devicemotion event acceleration y value )
            // data.dm.z		( devicemotion event acceleration z value )

            // data.dm.gx		( devicemotion event accelerationIncludingGravity x value )
            // data.dm.gy		( devicemotion event accelerationIncludingGravity y value )
            // data.dm.gz		( devicemotion event accelerationIncludingGravity z value )

            // data.dm.alpha	( devicemotion event rotationRate alpha value )
            // data.dm.beta		( devicemotion event rotationRate beta value )
            // data.dm.gamma	( devicemotion event rotationRate gamma value )
        });
        }).catch(function(e){
        // Catch if the DeviceOrientation or DeviceMotion is not supported by the browser or device
        });
    </script>
</body>

</html>