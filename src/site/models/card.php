<?php declare(strict_types = 1);
/**
 * This file represents the "Card" data layer and is responsible for handling
 * all data-oriented operations.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

// namespace Joomla\Component\Rolodex\Site\Model;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\ItemModel;

/**
 * The "Card" model represents a single record from the database.
 */
class RolodexModelCard extends ItemModel {
  /**
   * Fetch a single "Card" from the database by ID.
   *
   * If an ID is not provided as an argument, this method will attempt to
   * extract an item ID from the application input.
   *
   * Only the `name` and `phone` columns are included in the result.
   *
   * @param   ?int               $id  A "Card" identification number.
   *
   * @throws  \Exception              When the application fails to start.
   * @throws  \RuntimeException       If the current database driver's query
   *                                  class can't be found.
   * @throws  \RuntimeException       If a subquery alias isn't provided.
   * @throws  \RuntimeException       If the query fails to execute.
   * @throws  \RuntimeException       If unable to load a record from the
   *                                  result set.
   *
   * @return  ?object                 A result object from the database.
   */
  public function getItem(?int $id = NULL): ?object {
    // Determine whether the item ID was provided via argument or input
    $id = $id ?? Factory::getApplication()->input->get('id', NULL, 'UINT');
    // Ensure that the resulting item ID is positive
    if (is_numeric($id) && $id > 0) {
      // Fetch a reference to the Joomla database driver object instance
      $db = $this->getDBO();
      // Fetch a reference to a new query object instance
      $query = $db->getQuery(TRUE);
      // Prepare the query to select the item from the "Cards" table by ID
      $query->select($db->quoteName(['name', 'phone']));
      $query->from($db->quoteName('#__rolodex_cards'));
      $query->where($db->quoteName('id').' = '.intval($id));
      // Set the active query for the database driver
      $db->setQuery($query);
      // Attempt to execute the query and fetch an item object
      if ($db->execute() && ($item = $db->loadObject())) {
        // Return the resulting item from the database
        return $item;
      }
    }
    return NULL;
  }
}
