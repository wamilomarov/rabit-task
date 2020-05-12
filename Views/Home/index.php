<?php
echo "<ul>";
foreach ($links as $link) {
    echo "<li><a href='{$link['link']}'><h4><b>{$link['name']}</b></h4></a></li>";
}
echo "</ul>";
