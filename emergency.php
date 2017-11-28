<head>
<link rel="stylesheet" href="css.css">
</head>
<body>
<!-- emergency.php?emergency=fire -->
<?php $emergency = $_GET['emergency']; ?>
<?php if($emergency == 'fire'): ?>
    <div class="maps">
    <?php include "map.php" ?>
    </div>
<?php endif ?>
</body>
