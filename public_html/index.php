<?php
    $Link = "https://whitelistme2.000webhostapp.com/";
    $DirForImages = "iamges";
    $Tittle = "Example";
    $Description = "Example";

    $files = array_merge(glob($DirForImages . "/*.png"));
    $files = array_combine($files, array_map("filemtime", $files));
    arsort($files);
    $latest_file = key($files);
    echo $latest_file;

    $s = '<html><head> <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" /><link type="application/json+oembed" href="https://whitelistme2.000webhostapp.com/doc.json" /><meta name="twitter:card" content="player" /> <meta name="twitter:site" content="@harry" /><meta name="twitter:title" content="' . $Tittle . '" /><meta name="twitter:description" content="' . $Description . '" /><meta name="twitter:player:width" content="320" /><meta name="twitter:player:height" content="180" /><meta name="twitter:player:stream:content_type" content="video/mp4" /> <meta property="og:image" content="' . $Link . $latest_file;
    $x = '"/><meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#0b68ea"/>';
    echo $s . $x;
?>