

<?php
echo "<ul>";
foreach ($ads as $ad) {
    echo "<li><h4><b>{$ad['title']}</b></h4> by {$ad['author']}</li>";
}
echo "</ul>";
