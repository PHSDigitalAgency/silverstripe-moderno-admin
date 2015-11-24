<?php

/**
 *
 */
class LeftAndMainThemeAdmin extends LeftAndMainExtension
{

  public function init()
  {
    $theme = strtolower(SiteConfig::current_site_config()->ThemeAdmin);

    Requirements::combine_files('theme-admin.css', array(
      "silverstripe-moderno-admin/css/$theme.css",
      "silverstripe-moderno-admin/css/$theme-editor.css",
    ));

  }
}
