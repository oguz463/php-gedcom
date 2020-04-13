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

namespace PhpGedcom\Record\Head;

/**
 *
 */
class Sour extends \PhpGedcom\Record {
	/**
	 *
	 */
	protected $_sour = null;

	/**
	 *
	 */
	protected $_vers = null;

	/**
	 *
	 */
	protected $_name = null;

	/**
	 *
	 */
	protected $_corp = null;

	/**
	 *
	 */
	protected $_data = null;

	/**
	 *
	 * @param Sour\Corp $corp
	 */
	public function setCorp($corp = []) {
		$this->_corp = $corp;
	}

	/**
	 *
	 * @return Sour\Corp
	 */
	public function getCorp() {
		return $this->_corp;
	}

	/**
	 *
	 * @param \PhpGedcom\Record\Head\Sour\Data $data
	 */
	public function setData($data = []) {
		$this->_data = $data;
	}

	/**
	 *
	 * @return \PhpGedcom\Record\Head\Sour\Data
	 */
	public function getData() {
		return $this->_data;
	}

	/**
	 *
	 * @return Sour\Name
	 */
	public function getName() {
		return $this->_name;
	}

	/**
	 *
	 * @param Sour\Name
	 */
	public function setName($name = []) {
		$this->_name = $name;
	}

	/**
	 *
	 * @return Sour\Version
	 */
	public function getVersion() {
		return $this->_vers;
	}

	/**
	 *
	 * @param Sour\Version
	 */
	public function setVersion($version = []) {
		$this->_vers = $version;
	}

}
