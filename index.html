<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <meta>
        	<!-- For Web Client View: import Web Meeting SDK CSS -->
            <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.0.1/css/bootstrap.css" />
            <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.0.1/css/react-select.css" />
        </meta>
    </head>
    <body>
        <div id="meetingSDKElement">
        <!-- Zoom Meeting SDK Rendered Here -->
        </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <body>
            <!-- For either view: import Web Meeting SDK JS dependencies -->
            <script src="https://source.zoom.us/2.0.1/lib/vendor/react.min.js"></script>
            <script src="https://source.zoom.us/2.0.1/lib/vendor/react-dom.min.js"></script>
            <script src="https://source.zoom.us/2.0.1/lib/vendor/redux.min.js"></script>
            <script src="https://source.zoom.us/2.0.1/lib/vendor/redux-thunk.min.js"></script>
            <script src="https://source.zoom.us/2.0.1/lib/vendor/lodash.min.js"></script>

            <!-- For Component View -->
            <script src="https://source.zoom.us/2.0.1/zoom-meeting-embedded-2.0.1.min.js"></script>
            <script >
                const client = ZoomMtgEmbedded.createClient();
                let meetingSDKElement = document.getElementById('meetingSDKElement');

                client.init({
                debug: true,
                zoomAppRoot: meetingSDKElement,
                language: 'en-US',
                customize: {
                    meetingInfo: ['topic', 'host', 'mn', 'pwd', 'telPwd', 'invite', 'participant', 'dc', 'enctype'],
                    toolbar: {
                    buttons: [
                        {
                        text: 'Custom Button',
                        className: 'CustomButton',
                        onClick: () => {
                            console.log('custom button');
                        }
                        }
                    ]
                    }
                }
                });

                import { KJUR } from "jsrsasign";
// https://www.npmjs.com/package/jsrsasign

                function generateVideoToken(sdkKey, sdkSecret, topic, password = "") {
                let signature = "";
                // try {
                const iat = Math.round(new Date().getTime() / 1000);
                const exp = iat + 60 * 60 * 2;

                // Header
                const oHeader = { alg: "HS256", typ: "JWT" };
                // Payload
                const oPayload = {
                    app_key: sdkKey,
                    iat,
                    exp,
                    tpc: topic,
                    pwd: password,
                };
                // Sign JWT
                const sHeader = JSON.stringify(oHeader);
                const sPayload = JSON.stringify(oPayload);
                signature = KJUR.jws.JWS.sign("HS256", sHeader, sPayload, sdkSecret);
                return signature;
                }

                generateVideoToken(
                "6PKjmapPWsAs0v5pC06Vudclk0V5xGA9yKH3",
                "WlyFuIhOD9vbl9t04Me5FkUStFZbw25i1vBM",
                "session_name",
                "session_password"
                ); // call the generateVideoToken function


            </script>

        </body>
        <script src="" async defer></script>
    </body>
</html>