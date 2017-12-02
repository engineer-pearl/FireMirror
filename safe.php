<head>
    <link rel="stylesheet" href="css.css">
    <link rel='stylesheet prefetch' href='https://github.com/erikflowers/weather-icons'>
    <link rel="stylesheet" href="weather-app/css/style.css">

</head>

<body>
    <?php include "config.php"?>
    <div class="main" style="width = 100%">
       <!–– Weather ----------------------------------------------------->
       <div class ="weather">
            <?php include "weather.php" ?>
        </div>
        <!––End of Weather-----------------------------------------Start of Time---------------------------->
<div class="time" style="width:100%">
    <?php include "time.php" ?>
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
