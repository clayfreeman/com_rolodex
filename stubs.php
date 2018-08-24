<?php declare(strict_types = 1);
/**
 * Populate all Joomla! namespaced class aliases for Phan.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

const _JEXEC = 1;

use Joomla\CMS\Application\CliApplication;

define('JPATH_BASE', __DIR__.'/joomla-cms');
require_once JPATH_BASE.'/includes/defines.php';
require_once JPATH_LIBRARIES.'/import.legacy.php';
require_once JPATH_LIBRARIES.'/cms.php';

/**
 * A Joomla! CLI application to generate stubs for old-style naming conventions.
 */
class StubGenerator extends CLIApplication {
  /**
   * Generates a list of `class_alias()` calls for old-style Joomla! classes.
   *
   * This method writes a PHP stub file to ensure that old class names are
   * aliased to their newer namespace variant.
   */
  public function doExecute(): void {
    // Initialize the stub file with an opening PHP tag
    file_put_contents(JPATH_ROOT.'/stubs.php', "<?php\n");
    // Sort the aliases in ascending order by old class name
    $aliases = JLoader::getDeprecatedAliases();
    usort($aliases, function($a, $b) {
      return $a['old'] <=> $b['old'];
    });
    // Iterate over each alias in the class map to generate a stub for it
    foreach ($aliases as $alias) {
      // Write a line calling `class_alias()` to setup the alias
      file_put_contents(JPATH_ROOT.'/stubs.php', 'class_alias('.
        var_export(strval($alias['new'] ?? ''), true).', '.
        var_export(strval($alias['old'] ?? ''), true).");\n", FILE_APPEND);
      // Log the alias that was just created for debugging purposes
      $this->out($alias['old'].' -> '.$alias['new'], true);
    }
  }
}

// Instantiate the application and execute it
CLIApplication::getInstance('StubGenerator')->execute();
