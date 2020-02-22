<?php
#
# The primary view file for the main directory index.
# Copyright 2020 Christopher Reilly
#

require "view/parts/expando-part.php";

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<link rel="stylesheet" href="css/style.css">';
echo '<script src="view/index-script.js"></script>';

echo '<title>'.$DOCUMENT_TITLE.'</title>';
echo '<meta charset="utf-8">';

echo '</head>';

echo '<body>';
require "view/header-view.php";
echo '<hr class="break">';
require "view/string-form-view.php";
if (isset($RESULT)) {
    require "view/result-view.php";
}
require "footer-view.php";
echo '</body>';
echo '</html>';
