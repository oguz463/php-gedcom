<?php
/**
 * php-gedcom
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @package         php-gedcom
 * @license         GPL-3.0
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespace PhpGedcom\Record\Indi;

/**
 * @method string getName()
 * @method string getNpfx()
 * @method string getGivn()
 * @method string getNick()
 * @method string getSpfx()
 * @method string getSurn()
 * @method string getNsfx()
 */
class Name extends \PhpGedcom\Record implements \PhpGedcom\Record\Sourceable {
	protected $_name = null;
	protected $_npfx = null;
	protected $_givn = null;
	protected $_nick = null;
	protected $_spfx = null;
	protected $_surn = null;
	protected $_nsfx = null;

	/**
	 *
	 */
	protected $_note = array();

	/**
	 *
	 */
	protected $_sour = array();

	/**
	 *
	 */
	public function addSour($sour = []) {
		$this->_sour[] = $sour;
	}

	/**
	 *
	 */
	public function addNote($note = []) {
		$this->_note[] = $note;
	}
}
