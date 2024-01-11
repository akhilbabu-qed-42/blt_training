<?php

namespace Example\Blt\Plugin\Commands;

use Acquia\Blt\Robo\BltTasks;

/**
 * Defines a custom blt commant that is configurable from blt.yml.
 */
class UpdateSiteNameCommand extends BltTasks {

  /**
   * Set the site name.
   *
   * @command custom:set:site:name
   */
  public function setSiteName() {
    $site_name = $this->getConfigValue("custom_commands.set_site_name.default_value");
    if ($site_name) {
      $task = $this->taskDrush();
      $task->drush("config:set system.site name $site_name -y");
      $task->run();
    }
  }

}
