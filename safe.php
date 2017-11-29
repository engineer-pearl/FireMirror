<head>
    <link rel="stylesheet" href="css.css">
    <link rel='stylesheet prefetch' href='https://github.com/erikflowers/weather-icons'>
    <link rel="stylesheet" href="weather-app/css/style.css">

</head>

<body>
    <?php include "config.php"?>


    <!–– Weather ----------------------------------------------------->
    <div class="main" style="width = 100%">
        <div class="weather" style="float:right">
            <div>
                <div class="container">
                    <div class="title">
                        <h1 id="city"></h1>
                        <div id="graphic" class="weather-icon"></div>
                        <div id="description" class='important-info text'></div>
                        <div id="farenheit" class="temp-info"></div>
                        <div id="celsius" class="temp-info"></div>
                    </div>
                </div>
                <div class="description-container">
                    <div class="block-1">
                        <div class="text">
                            <span>Max</span>
                            <span id="max" class="important-info"> </span>
                        </div>
                        <div class="text">
                            <span>Min</span>
                            <span id="min" class='important-info'> </span>
                        </div>

                    </div>
                    <div class="block-2">
                        <div id="longitude" class=" text important-info">Lon: </div>
                        <div id="latitude" class="text important-info">Lat: </div>
                    </div>
                    <div class="block-3">
                        <div id="humidity" class="text important-info">Humidity: </div>
                        <div id="pressure" class="text important-info">Pressure: </div>
                        <div id="windSpeed" class="text important-info">Winds: </div>
                    </div>
                </div>

                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
                <script src="weather-app/js/index.js"></script>

            </div>

        </div>
        <!––End of Weather-----------------------------------------Start of Time---------------------------->

        <div class="date" style="text-align:center; font-size:35px">
                  <script type="text/javascript">
            // This function gets the current time and injects it into the DOM
            function updateClock() {
                // Gets the current time
                var now = new Date();
                // Get the hours, minutes and seconds from the current time
                var hours = now.getHours();
                var minutes = now.getMinutes();
                var seconds = now.getSeconds();
                // Format hours, minutes and seconds
                if (hours > 12) {
                    hours = hours - 12;
                }
                if (minutes < 10) {
                    minutes = "0" + minutes;
                }
                if (seconds < 10) {
                    seconds = "0" + seconds;
                }
 
                // Gets the element we want to inject the clock into
                var elem = document.getElementById('clock');
 
                // Sets the elements inner HTML value to our clock data
                elem.innerHTML = hours + ':' + minutes + ':' + seconds;
            }
        </script>
        
    </head>
    <body onload="setInterval('updateClock()', 200);">
          
            <script language="JavaScript">
                function mdy(todaysdate) {
                    //calls the function mdy why to get our date
                    return todaysdate.getMonth()+1+"/"+todaysdate.getDate()+"/"+todaysdate.getFullYear();
                }
            </script>

            <script language="JavaScript">
                sampleDate1=new Date();
                document.write (mdy(sampleDate1));
            </script>
            
        <!-- This is the container for our clock, it can be any HTML element. -->
        <h1 id="clock"></h1>
        </div>
        <!––End of time-----------------------------------------Start of Twitter--------------------------->
        <div class="feed" style="position:fixed; bottom:15%; width:100%; text-align:center; ">
            <?php include "tweets/index.php"?>
        </div>
        
    </div>
    <br><br><br><br><br><br>
    <div class="ownership" style="position:fixed; bottom:0;">
        &nbsp;&nbsp;Mirror ID:
        <?php echo $idnumb; ?> <br><br>
    </div>
</body>
