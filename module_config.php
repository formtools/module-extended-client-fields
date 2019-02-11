<?php

$STRUCTURE = array();
$STRUCTURE["tables"] = array();
$STRUCTURE["tables"]["module_extended_client_fields"] = array(
    array(
        "Field"   => "client_field_id",
        "Type"    => "mediumint(8) unsigned",
        "Null"    => "NO",
        "Key"     => "PRI",
        "Default" => ""
    ),
    array(
        "Field"   => "template_hook",
        "Type"    => "varchar(255)",
        "Null"    => "YES",
        "Key"     => "",
        "Default" => ""
    ),
    array(
        "Field"   => "admin_only",
        "Type"    => "enum('yes','no')",
        "Null"    => "YES",
        "Key"     => "",
        "Default" => ""
    ),
    array(
        "Field"   => "field_label",
        "Type"    => "varchar(255)",
        "Null"    => "NO",
        "Key"     => "",
        "Default" => ""
    ),
    array(
        "Field"   => "field_type",
        "Type"    => "enum('textbox','textarea','password','radios','checkboxes','select','multi-select')",
        "Null"    => "NO",
        "Key"     => "",
        "Default" => ""
    ),
	array(
		"Field"   => "field_identifier",
		"Type"    => "varchar(255)",
		"Null"    => "YES",
		"Key"     => "",
		"Default" => ""
	),
    array(
        "Field"   => "field_orientation",
        "Type"    => "enum('horizontal','vertical','na')",
        "Null"    => "NO",
        "Key"     => "",
        "Default" => "na"
    ),
    array(
        "Field"   => "default_value",
        "Type"    => "varchar(255)",
        "Null"    => "YES",
        "Key"     => "",
        "Default" => ""
    ),
    array(
        "Field"   => "is_required",
        "Type"    => "enum('yes','no')",
        "Null"    => "YES",
        "Key"     => "",
        "Default" => ""
    ),
    array(
        "Field"   => "error_string",
        "Type"    => "mediumtext",
        "Null"    => "YES",
        "Key"     => "",
        "Default" => ""
    ),
    array(
        "Field"   => "field_order",
        "Type"    => "smallint(6)",
        "Null"    => "NO",
        "Key"     => "",
        "Default" => ""
    )
);
$STRUCTURE["tables"]["module_extended_client_field_options"] = array(
    array(
        "Field"   => "client_field_id",
        "Type"    => "mediumint(9)",
        "Null"    => "NO",
        "Key"     => "PRI",
        "Default" => ""
    ),
    array(
        "Field"   => "option_text",
        "Type"    => "varchar(255)",
        "Null"    => "YES",
        "Key"     => "",
        "Default" => ""
    ),
    array(
        "Field"   => "field_order",
        "Type"    => "smallint(6)",
        "Null"    => "NO",
        "Key"     => "PRI",
        "Default" => ""
    )
);


$HOOKS = array(
    array(
        "hook_type"       => "template",
        "action_location" => "admin_edit_client_main_top",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "admin_edit_client_main_middle",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "admin_edit_client_main_bottom",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),

    array(
        "hook_type"       => "template",
        "action_location" => "admin_edit_client_settings_top",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "admin_edit_client_settings_bottom",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "admin_edit_view_client_map_filter_dropdown",
        "function_name"   => "",
        "hook_function"   => "displayExtendedFieldOptions",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "head_bottom",
        "function_name"   => "",
        "hook_function"   => "insertHeadJs",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "code",
        "action_location" => "end",
        "function_name"   => "FormTools\\Administrator::adminUpdateClient",
        "hook_function"   => "adminSaveExtendedClientFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "edit_client_main_top",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "edit_client_main_middle",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "edit_client_main_bottom",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "edit_client_settings_top",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "template",
        "action_location" => "edit_client_settings_bottom",
        "function_name"   => "",
        "hook_function"   => "displayFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "code",
        "action_location" => "end",
        "function_name"   => "FormTools\\Clients::updateClient",
        "hook_function"   => "clientSaveExtendedClientFields",
        "priority"        => "50"
    ),
    array(
        "hook_type"       => "code",
        "action_location" => "start",
        "function_name"   => "FormTools\\ViewFilters::getViewFilterSql",
        "hook_function"   => "updateViewFilterSqlPlaceholders",
        "priority"        => "50"
    ),
	array(
		"hook_type"       => "code",
		"action_location" => "main",
		"function_name"   => "FormTools\\User->getAccountPlaceholders",
		"hook_function"   => "getExtendedClientFieldPlaceholders",
		"priority"        => "50"
	)
);


$FILES = array(
    "add.php",
    "edit.php",
    "code/",
    "code/Fields.class.php",
    "code/Module.class.php",
    "scripts/",
    "scripts/field_options.js",
    "help.php",
    "images/",
    "images/icon_extended_client_fields.gif",
    "index.php",
    "lang/",
    "lang/en_us.php",
    "library.php",
    "module_config.php",
    "smarty_plugins/",
    "smarty_plugins/section_html.tpl",
    "templates/",
    "templates/add.tpl",
    "templates/edit.tpl",
    "templates/help.tpl",
    "templates/index.tpl",
    "templates/titles.tpl",
    "titles.php"
);
