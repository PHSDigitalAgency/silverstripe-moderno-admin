<?php

/**
 *
 */
class SiteConfigThemeAdmin extends DataExtension
{

  	private static $db = array(
  		'ThemeAdmin' => "Enum('Moderno,Dark','Moderno')",
  	);

    public function updateCMSFields(FieldList $fields) {
      $fields->addFieldToTab('Root.Main', DropdownField::create('ThemeAdmin', _t('SiteConfigExtension.ThemeAdmin', 'Theme admin'), singleton('SiteConfig')->dbObject('ThemeAdmin')->enumValues()), 'Logo');
    }
}
