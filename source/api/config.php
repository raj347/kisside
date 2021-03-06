<?php

// sqlite database file
define("DATABASE_FILENAME", "../data/kiss.sqlite");

// number of seconds before user authorization expires
define("AUTH_EXPIRE_SECONDS", 3600 * 24 * 30);

// directories to expose (need to set php open_basedir as well!)
$BASE_DIRS = array(
  "www-html" => "/var/www/html/"
);

define("DEF_FILE_MODE", 0664);
define("DEF_DIR_MODE", 0775);

$DEF_GENERAL_OPTIONS = array(
  "fsPaneWidth" => 300
);

$DEF_EDITOR_OPTIONS = array(
  "fontSize" => "14px",
  "softTabs" => true,
  "tabSize" => 4,
  "theme" => ""
);

$DEF_USER_OPTIONS = array(
  "general" => $DEF_GENERAL_OPTIONS,
  "editor" => $DEF_EDITOR_OPTIONS
);

?>