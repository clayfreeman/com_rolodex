<?php declare(strict_types = 1);
/**
 * This file contains the layout and supporting logic for the component's
 * "Item" view and is used exclusively by the `ViewItem` class.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

// Prevent direct access to this file according to Joomla! best practices
defined('_JEXEC') or exit;

use Joomla\CMS\Language\Text;
?>
<h1><?= $this->escape($this->card->name ?? '') ?></h1>
<div>
  <span style='font-weight: bold'>
    <?= $this->escape(Text::_('COM_ROLODEX_CARD_COL_PHONE')) ?>:
  </span>
  <code><?= $this->escape($this->card->phone ?? '') ?></code>
</div>
