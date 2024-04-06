<?php
    $directory = 'https://raw.githubusercontent.com/dj4christ/RachelMusicSite/master/'; // Replace this with the path to your folder

    if (is_dir($directory)){
        $files = scandir($directory);
        $audio_files = array_filter($files, function($file) {
            return pathinfo($file, PATHINFO_EXTENSION) === 'mp3'; // Adjust file extension as needed
        });
        
        $num_audio_files = count($audio_files);
        echo "Number of audio files: $num_audio_files";
    } else {
        echo "The specified directory does not exist.";
    }
?>
