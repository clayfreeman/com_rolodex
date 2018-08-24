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
 * This function adds "Save as Copy" and "Close" buttons to the toolbar and sets
 * the page title.
 */
(function() {
  // Add a "Save to Copy" button to facilitate easy duplication
  Toolbar::save2copy('card.save2copy');
  // Add a "Cancel" button to exit the edit page
  Toolbar::cancel('card.cancel', 'JTOOLBAR_CLOSE');
  // Set the title of the edit page
  Toolbar::title(Text::_('COM_ROLODEX_VIEW_CARD_UPDATE'));
})();
?>
<form method='POST' name='adminForm' id='adminForm'>
  <div class='form-horizontal'>
    <fieldset class='adminform'>
      <legend><?= Text::_('COM_ROLODEX_VIEW_CARD_DETAILS') ?></legend>
      <div class='row-fluid'>
        <div class='span6'>
          <?php foreach ($this->form->getFieldset() as $field) { ?>
            <div class='control-group'>
              <div class='control-label'>
                <?= $field->label ?>
              </div>
              <div class='controls'>
                <?= $field->input ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </fieldset>
  </div>
  <input type='hidden' name='id' value='<?= $this->escape($this->card->id) ?>'/>
  <input type='hidden' name='task' value='cards.display'/>
  <input type='hidden' name='view' value='cards'/>
  <?= HTML::_('form.token') ?>
</form>
