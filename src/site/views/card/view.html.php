<?php declare(strict_types = 1);
/**
 * This file represents the "Card" presentation layer and is responsible for
 * handling the display of and interaction with data.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

// namespace Joomla\Component\Rolodex\Site\View\Card;

use Joomla\CMS\MVC\View\HtmlView as BaseView;

/**
 * The "Card" view is for a specific record from the database.
 */
class RolodexViewCard extends BaseView {
  /**
   * An object representing a "Card" record from the database.
   *
   * @var  object
   */
  protected $card;

  /**
   * This method prepares the class instance to render a template layout.
   *
   * @param   string      $template  Which template should be loaded to render.
   *
   * @throws  \Exception             On error from the model.
   *
   * @return  mixed                  `string` containing the rendered template
   *                                 on success, otherwise an `object` or `bool`
   *                                 on failure.
   */
  public function display($template = NULL) {
    // Attempt to fetch the requested item from the database
    $this->card = $this->get('Item');
    // Ensure that no errors have occurred while fetching data
    if (count($errors = $this->get('Errors')) === 0) {
      // Set the layout manually since we only have one layout
      $this->setLayout('read');
      // Call the parent class implementation for this method
      return parent::display($template);
    } else {
      // Throw an exception for the first error
      foreach ($errors as $error) {
        throw new \Exception($error);
      }
    }
    // Assume an error occurred while displaying this view
    return FALSE;
  }
}
