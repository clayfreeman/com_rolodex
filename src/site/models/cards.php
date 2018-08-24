<?php declare(strict_types = 1);
/**
 * This file represents the "Cards" data layer and is responsible for handling
 * all data-oriented operations.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

// namespace Joomla\Component\Rolodex\Site\Model;

use Joomla\CMS\MVC\Model\ListModel;

/**
 * The "Cards" model is responsible for listing all records from the database.
 */
class RolodexModelCards extends ListModel {
  /**
   * Fetch a query to get a list of "Cards" from the database.
   *
   * The query will be pre-configured to contain only the `id` and `name`
   * columns for published records.
   *
   * @throws  \RuntimeException  If the current database driver's query
   *                             class can't be found.
   * @throws  \RuntimeException  If a subquery alias isn't provided.
   *
   * @return  \JDatabaseQuery    A pre-configured query instance that is ready
   *                             to fetch results from the database.
   */
  protected function getListQuery() {
    // Fetch a reference to the Joomla database driver object instance
    $db = $this->getDBO();
    // Fetch a reference to a new query object instance
    $query = $db->getQuery(TRUE);
    // Prepare the query to select list-worthy columns from the "Cards" table
    $query->select($db->quoteName(['id', 'name']));
    $query->from($db->quoteName('#__rolodex_cards'));
    $query->where($db->quoteName('published').' = 1');
    return $query;
  }
}
