<?php

/**
 * Module file: Extended Client Fields
 *
 * This module lets you add additional fields to the client accounts to store whatever
 * information you want.
 */

$MODULE["author"]          = "Encore Web Studios";
$MODULE["author_email"]    = "formtools@encorewebstudios.com";
$MODULE["author_link"]     = "http://www.encorewebstudios.com";
$MODULE["version"]         = "1.1.2";
$MODULE["date"]            = "2010-09-10";
$MODULE["origin_language"] = "en_us";
$MODULE["supports_ft_versions"] = "2.0.0";

// define the module navigation - the keys are keys defined in the language file. This lets
// the navigation - like everything else - be customized to the users language
$MODULE["nav"] = array(
  "module_name"           => array("index.php", false),
  "phrase_add_field"      => array("add.php", true),
  "phrase_section_titles" => array("titles.php", false),
  "word_help"             => array("help.php", false)
    );
