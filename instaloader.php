<?php
echo "WELCOME TO THIS TOOL \n";
$username=readline("the username of instagram : ");

echo "[1] Posts (Images) \n";
echo "[2] Posts (Videos)\n";
echo "[3] Posts (Images + Videos)\n";

$choice=readline("What do you want download : ");

if ($choice==1) {
    shell_exec('instaloader '.$username.' --no-profile-pic --no-metadata-json --no-compress-json --no-captions --no-video-thumbnails --no-videos ');    
} else {
    if ($choice==2) {
        shell_exec('instaloader '.$username.'  --no-profile-pic --no-metadata-json --no-compress-json --no-captions --no-video-thumbnails --no-pictures ');
    } else {
        if ($choice==3) {
            shell_exec('instaloader '.$username.'  --no-profile-pic --no-metadata-json --no-compress-json --no-captions --no-video-thumbnails ');
        } else {
            echo 'Make correct choice';
        }
    }
} 
?>
