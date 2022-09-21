<?php
# Getting the current page name
define("page", basename($_SERVER['PHP_SELF'], '.blade.php'));

# If the installation file exists
if (file_exists(__DIR__."/../install.php")) {
	die('<meta http-equiv="refresh" content="0;url=install.php">');
}
