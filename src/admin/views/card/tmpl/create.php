<?php declare(strict_types = 1);
/**
 * This file contains the layout and supporting logic for the component's
 * "Card" view and is used exclusively by the `ViewCard` class.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

// Prevent direct access to this file according to Joomla! best practices
defined('_JEXEC') or exit;

use Joomla\CMS\Toolbar\ToolbarHelper as Toolbar;
use Joomla\CMS\HTML\HTMLHelper as HTML;
use Joomla\CMS\Language\Text;

/**
 * Perform layout-specific functionality in an IIFE.
 *
 * This function adds a "Cancel" button to the toolbar and sets the page title.
 */
(function() {
  // Add a "Cancel" button to exit the new "Card" page
  Toolbar::cancel('card.cancel');
  // Set the title of the new "Card" page
  Toolbar::title(Text::_('COM_ROLODEX_VIEW_CARD_CREATE'));
})();
?>
<form method='POST' name='adminForm' id='adminForm'>
  <fieldset class='adminform form-horizontal'>
    <legend>
      <?= $this->escape(Text::_('COM_ROLODEX_VIEW_CARD_DETAILS')) ?>
    </legend>
    <div class='row-fluid'>
      <div class='span6'>
        <?= $this->form->renderFieldset('default') ?>
      </div>
    </div>
  </fieldset>
  <input type='hidden' name='task' value='cards.display'/>
  <input type='hidden' name='view' value='cards'/>
  <?= HTML::_('form.token') ?>
</form>
