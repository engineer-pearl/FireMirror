<head>
<link rel="stylesheet" href="css.css">
</head>
<body>
<?php include "config.php"?>
<div class="main" style="width = 100%">
    <div class="weather" style="float:right">
        <?php include "weather.php"?>
        
    </div>

    <div class="date" style ="text-align:center; font-size:35px">
        <p><?php include "time.php"?></p>
    </div>

    <div class="feed"  style ="position:fixed; bottom:15%; width:100%; text-align:center; ">
        <?php include "tweets/index.php"?>
    </div>

</div>
<br><br><br><br><br><br>
<div class="ownership" style="position:fixed; bottom:0;">
    &nbsp;&nbsp;Mirror ID: <?php echo $idnumb; ?> <br><br>
</div>
</body>
