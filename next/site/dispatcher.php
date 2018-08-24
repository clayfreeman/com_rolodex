<?php declare(strict_types = 1);
/**
 * This file serves as the component's logical entrypoint for execution.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

use Joomla\CMS\Dispatcher\Dispatcher;

/**
 * This class serves as the component's logical entrypoint for execution.
 */
class RolodexDispatcher extends Dispatcher {
  /**
   * The namespace under which this component's logic resides.
   *
   * @var  string
   */
  protected $namespace = 'Joomla\\Component\\Rolodex';
}
