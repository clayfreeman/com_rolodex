<?php declare(strict_types = 1);
/**
 * This controller is responsible for coordinating the "Cards" data and
 * presentation layers.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

// namespace Joomla\Component\Rolodex\Administrator\Controller;

use Joomla\CMS\MVC\Controller\AdminController;
use Joomla\CMS\MVC\Controller\BaseController;

/**
 * The "Cards" controller is responsible for facilitating Model and View logic.
 */
class RolodexControllerCards extends AdminController {
  /**
   * Fetch the model used to fetch or manipulate a "Card".
   *
   * This method is a default initializer for the parent class method with the
   * same name. If no value for `$name` is provided, it will be initialized to
   * "Card".
   *
   * The "ignore_request" configuration key is overriden to be `FALSE`.
   *
   * @param   string  $name    The name of the model class.
   * @param   string  $prefix  The prefix of the model class.
   * @param   array   $config  An array of configuration parameters for
   *                           the model.
   *
   * @return  mixed            `\Joomla\CMS\MVC\Model\BaseDatabaseModel` on
   *                           success, `FALSE` on failure.
   */
  public function getModel($name = '', $prefix = '', $config = []) {
    $config['ignore_request'] = FALSE;
    return parent::getModel($name ?: 'Card', $prefix, $config);
  }
}
