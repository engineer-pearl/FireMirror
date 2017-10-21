<?php include "config.php"?>
<div class="main" style="width = 100%">
    <div class="date" style ="float:right">
        <p><?php include "time.php"?></p>
    </div>
    <div class="weather">
        <?php include "weather.php"?>
    </div>
    <div class="feed">
        <?php include "feed.php"?>
    </div>
</div>
<div class="ownership">
    Mirror ID: <?php echo $idnumb; ?>
</div>
