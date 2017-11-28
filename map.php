<?php
    ##This is our list of maps
    $pictures = array(
    "3" => array(
        "https://csumb.edu/sites/default/files/images/st-block-31-1423244951922-raw-thirdfloor.jpg",
        "<ul><li>Turn left out the door. Continue to the end of the hallway.</li><li>Take the stairwell behind the blue door.</li></ul> Medical resources can be found in room 102",
        ),
    "2" => array(
    "https://csumb.edu/sites/default/files/images/st-block-31-1423245014139-raw-secondfloor.jpg", 
        "<ul><li>Turn left out the door. Continue to the end of the hallway.</li><li>Take the stairwell behind the blue door.</li></ul> Medical resources can be found in room 202", 
    ),
    "1" => array(
    "http://csumb.edu/sites/default/files/images/st-block-27-1423244904851-raw-firstfloor.jpg", 
        "<ul><li>Turn left out the door. Continue to the end of the hallway.</li><li>Take the stairwell behind the blue door.</li></ul> Medical resources can be found in room 302"
        )
    );
 ?>
 
<?php if ( isset($_GET['floor']) ): ?>
        <?php $item = $pictures[$_GET['floor']] ?>
        <div style="float: right; width: 50%">
        <?php echo $item[1] ?>
        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><?php include"key.php"?>
    </div>
    <img src="<?php echo $item[0]; ?>" style="width:400px;"></br>
<?php else: ?> 
<?php
    foreach($pictures as $item):
    #$item = $pictures["1"];
?>
    <div style="float: right; width: 50%">
        <?php echo $item[1] ?>
        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><?php include"key.php"?>
    </div>
    <img src="<?php echo $item[0]; ?>" style="width:400px;"></br>

<?php endforeach ?>
<?php endif; ?>
