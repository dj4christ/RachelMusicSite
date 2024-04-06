<?php
$url = 'https://raw.githubusercontent.com/dj4christ/RachelMusicSite/master/';
$html = file_get_contents($url);

if ($html !== false) {
    // Use regular expression to find links to MP3 files
    preg_match_all('/href=["\']?([^"\'>]+\.mp3)["\']?/', $html, $matches);

    // Count the number of matches
    $num_audio_files = count($matches[1]);
    echo "Number of audio files: $num_audio_files";
} else {
    echo "Failed to fetch URL: $url";
}
?>
