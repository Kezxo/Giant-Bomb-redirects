<?php

function addSection($heading, $urls) {
    echo "\t\t<section>\n";
    echo "\t\t\t<h1>$heading</h1>\n";

    foreach ($urls as $url) {
        if ($url[0] == '!') {
            $url = substr($url, 1);
            echo "<span class=\"expired\">$url</span><br>\n";
        } else {
            echo "<a href=\"http://$url\">$url</a><br>\n";
        }
    }

    echo "\t\t</section>\n\n";
}


$p = 'https://raw.githubusercontent.com/thejamesm/Giant-Bomb-redirects/master';

$url_file = "$p/urls.txt";
$urls = file($url_file, FILE_IGNORE_NEW_LINES);
$twitter_acct_file = "$p/twitter_accts.txt";
$twitter_accts = file($twitter_acct_file, FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta name="google" value="notranslate">
        <title>sʇɔǝɹıpǝɹ qɯo𐐒 ʇuɐı⅁</title>
        <link rel="stylesheet" href="style.css">
        <script>
            window.onload = function() {
                window.scrollTo( 0, document.body.scrollHeight );
            };
        </script>
    </head>
    <body>
<?php
addSection('Giant Bomb', $urls);
addSection('Misc', $misc);
?>
        <section>
            <h1>Twitter</h1>
<?php
foreach ($twitter_accts as $twitter_acct) {
    echo "<a href=\"http://twitter.com/$twitter_acct\">@$twitter_acct</a><br>\n";
}
?>
        </section>
    </body>
</html>
