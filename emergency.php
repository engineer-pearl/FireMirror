<!-- emergency.php?emergency=fire -->
<?php $emergency = $_GET['emergency']; ?>
<?php if($emergency == 'fire'): ?>
    <div class="maps">
    <?php include "map.php" ?>
    </div>
<?php endif ?>
