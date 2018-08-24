<?php declare(strict_types = 1);
/**
 * This file serves as the component's logical entrypoint for execution.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Dispatcher\Dispatcher;
use Joomla\CMS\MVC\Factory\MVCFactoryFactoryInterface as MVCFFI;
use Joomla\Input\Input;

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

  /**
   * Supplement the default constructor implementation to set a default task.
   *
   * @param  CMSApplication  $app     The Joomla! application object instance.
   * @param  Input           $input   The application's input object instance.
   * @param  MVCFFI          $mvcffi  The application's MVC factory factory.
   */
  public function __construct(CMSApplication $app,
      Input $input, MVCFFI $mvcffi) {
    // Call the parent constructor implementation to properly initialize
    parent::__construct($app, $input, $mvcffi);
    // Check whether a task was supplied in the application input parameters
    if ($this->input->getCmd('task', FALSE) === FALSE) {
      // Supply a default task of `$view`.display to absolve this extension of
      // requiring a generic controller class
      $this->input->set('task', $this->input->get('view').'.display');
    }
  }
}
