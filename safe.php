<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>

	<title>Twitter</title>
	<meta charset="utf-8" />
	<link href="twitter/css/style.css" rel="stylesheet" /><!--CSS Reset-->
	<link href="twitter/css/dark.css" rel="stylesheet" /><!--Light Stylesheet, Choose from dark.css, light.css or blue.css-->  
	
	   <link rel="stylesheet" href="css.css">
    <link rel='stylesheet prefetch' href='https://github.com/erikflowers/weather-icons'>
    <link rel="stylesheet" href="weather-app/css/style.css">
</head>
<body>

    <?php include "config.php" ?>
 <!–– Weather ----------------------------------------------------->
    <div class="weather">
        <?php include "weather.php"?>
    </div>
<!––End of Weather-----------------------------------------Start of Time---------------------------->

       <div class="time">
           <?php include "time.php"?>
       </div>
<!––End of time-----------------------------------------Start of Twitter--------------------------->
        <div class="feed">
          <?php 
		include 'twitter/display-tweets.php';//Include the display-tweets file- Ensure that you have the correct path
		
		/*Display_tweets takes 4 arguments
			Replace twitter-id with your twitter username (required)
			Replace style with your preffered date format, default is '', no date will be displayed (optional)
			The 3rd argument is the mount of tweets you wish to fetch, if no number is specified the default is 10 (optional)
			The 4th argument is time in minutes you wish to fetch your tweets from the Twitter API,if no number is specified the default is 60 minutes
			One example:
			display_tweets('twitter-id','time_since', 20, 60);
			Fetches 20 tweets at 60 minute intervals displaying the time since option
		*/
		
		display_tweets('BBCWorld','time_since',3,5);
?>

        </div>
        
    </div>
    <br><br><br><br><br><br>
    <div class="ownership" style="position:fixed; bottom:0;">
        &nbsp;&nbsp;Mirror ID:
        <?php echo $idnumb; ?> <br><br>
    </div>
</body>
</html>
