<?php
#
# The primary controller file for the main directory index.
# Copyright 2020 Christopher Reilly
#

# The index page title
$INDEX_TITLE="String Processor";
# The index page subtitle
$INDEX_SUBTITLE="CSCI E15";
# The index page author
$AUTHOR="Christopher Reilly";
# The index document title
$DOCUMENT_TITLE=$INDEX_TITLE . " - " . $INDEX_SUBTITLE;
$RESULT = $_SESSION['result'];

require 'view/index-view.php';
