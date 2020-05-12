<?php
echo "<ul>";
foreach ($users as $user) {
    echo "<li><h4><b>{$user['name']}</b></h4></li>";
}
echo "</ul>";
