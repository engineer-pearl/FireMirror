#!/bin/bash

MAX_AMP=0;
SAFE="TRUE";

pwd;
echo "SAFE:<$SAFE>";
echo "Welcome to FireMirror Command Line Monitoring System!";
echo "Monitoring in progress...";
xdg-open http://localhost/safe.php;
xdotool key F11;
echo 'about to loop';
pwd;
while [[ "$SAFE" == "TRUE" ]]
do
  # records a 5 second soubd byte and saves it to file
  echo 'recording a sound byte';
  sudo arecord -fS16_LE -Dplughw:1,0 -d5 /tmp/sound_byte.wav;
  # sox/tmp/sound_byte.wav -n stat: prints generic info about sound file
  # 2>&1: redirects from stderr to stdout
  # grep "Maximum amplitude": searches the Maximum amplitude line
  # cut -d ' ' -f7: cuts input delimited by a single space and returns the 7th field
  MAX_AMP=$(sox /tmp/sound_byte.wav -n stat 2>&1 | grep "Maximum amplitude" | cut -d ' ' -f7);
  echo "MAX_AMP:<$MAX_AMP>";
  if [[ $MAX_AMP > 0.45 ]]
  then
    echo "THE ALARM WAS DETECTED!";
    SAFE="FALSE";
    xdg-open http://localhost/emergency.php?emergency=fire
    echo "Monitoring finished...";
  fi
done
