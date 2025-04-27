<?php
$headless_url = defined('HEADLESS_URL') ? HEADLESS_URL : '/';
header('Location: ' . $headless_url);
exit;