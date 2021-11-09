<!DOCTYPE html>
<?php
    function generate_signature ( $api_key, $api_secret, $meeting_number, $role){

        //Set the timezone to UTC
        date_default_timezone_set("UTC");
      
          $time = time() * 1000 - 30000;//time in milliseconds (or close enough)
          
          $data = base64_encode($api_key . $meeting_number . $time . $role);
          
          $hash = hash_hmac('sha256', $data, $api_secret, true);
          
          $_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);
          
          //return signature, url safe base64 encoded
          return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
      }
?>
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

                client.join({
                    apiKey: apiKey,
                    signature: signature, // role in signature needs to be 0
                    meetingNumber: meetingNumber,
                    password: password,
                    userName: userName
                })


            </script>

        </body>
        <script src="" async defer></script>
    </body>
</html>