<?php
$folder = '*';
$folding = '/';
if (isset($_GET['folder'])) {
    if (is_dir($_GET['folder']) && substr($_GET['folder'], 0, 1) != '.' && substr($_GET['folder'], 0, 1) != '/') {
        $folder = $_GET['folder'].'/*';
        $parent = dirname($_GET['folder']);
        $folding = '/'.$_GET['folder'];
    }
}
?><!doctype html>
<html>
<head>
    <title><?php echo $_SERVER['SERVER_ADDR'];?> - <?php echo $folding;?></title>
    <style>
    * {
        font-family: sans-serif;
        color: #D4F4FF;
    }
    body {
        background-color:#333333;
    }
    #main {
        width:900px;
        margin:auto;
        background-image: url('data:image/png;base64,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');
        background-repeat:no-repeat;
        background-position: center 20px;
        padding-top:60px;
    }
    h1 {
        color:#F9F9FF;
    }
    a, a:hover, a:visited, a:focus {
        text-decoration: none;
    }
    ul li {
        list-style: none;
        font-variant: small-caps;
    }
    </style>
</head>
<body>
    <div id='main'>
        <?php
        echo '<h1>There you are : '.$folding.'</h1>';
        if ($folder != '*') {
            echo '<ul><li><a href="./index.php?folder='.$parent.'">[../] Parent folder</a></li></ul>';
        }
        echo '<ul>';
        $files_and_folders = glob($folder);
        foreach ($files_and_folders as $file) {
            if (substr($file, 0, 1) == '..' or is_file($file)) {
                continue;
            }
            $literal = preg_replace('/([A-Z])/', ' $1', strtr(basename('./'.$file), '-_', '  '));
            echo '<li><a href="./index.php?folder='.$file.'">'.$literal.'</a></li>';
        }
        echo '</ul>';
        echo '<ul>';
        foreach ($files_and_folders as $file) {
            if (substr($file, 0, 1) == '.' or is_dir($file)) {
                continue;
            }
            $literal = preg_replace('/([A-Z])/', ' $1', strtr(basename('./'.$file), '-_', '  '));
            echo '<li><a href="./'.$file.'">'.$literal.'</a></li>';
        }
        echo '</ul>';
        ?>
        <hr />
        <p>Your local network ip address is <?php
        $interfaces = ['wlan','eth','en'];
        $found=0;
        foreach($interfaces as $interface) {
            for($i=0;$i<5;$i++) {
                $command = "/sbin/ifconfig ".$interface.$i." | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'";
                $localIP = exec($command);
                if ($localIP != '') {
                    echo '('.$interface.$i.') <a href="//'.$localIP.'">'.$localIP.'</a>';
                    $found++;
                }
            }
        }
        if ($found == 0) {
            echo 'No network found.';
        }
        ?></p>
        <hr />
        <ul>
            <li><a href='https://www.facebook.com/wildcodeschool/'>Facebook</a></li>
            <li><a href='https://twitter.com/wildcodeschool'>Twitter</a></li>
            <li><a href='http://wildcodeschool.fr/'>WCS</a></li>
            <li><a target='_blank' href='http://odyssey.wildcodeschool.fr/'>Odyssey</a></li>
            <li><a target='_blank' href='https://wcs-2016-s1.hackpad.com/'>Hackpad</a></li>
            <li><a target='_blank' href='https://tidal.wildcodeschool.fr/sundarbans/channels/town-square'>Mattermost</a></li>
            <li><a target='_blank' href='https://devdocs.io/'>DevDocs.io</a></li>
            <li><a target='_blank' href='http://exercism.io/'>exercism.io</a></li>
            <li><a target='_blank' href='http://musicforprogramming.net/'>Music for code</a></li>
        </ul>
    </div>
</body>
</html>
