var gn = new GyroNorm();

gn.init().then(function () {
    gn.start(function (data) {

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

        gyroNorm = data;
    });
}).catch(function (e) {
    // Catch if the DeviceOrientation or DeviceMotion is not supported by the browser or device
    console.error(e);
});