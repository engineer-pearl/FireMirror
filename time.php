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