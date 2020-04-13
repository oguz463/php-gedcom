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

namespace PhpGedcom\Record;

use PhpGedcom\Record;
use PhpGedcom\Record\NoteRef;
use PhpGedcom\Record\ObjeRef;
use PhpGedcom\Record\Refn;
use PhpGedcom\Record\SourRef;

/**
 * Class Indi
 * @package PhpGedcom\Record
 */
class Indi extends Record implements Noteable, Objectable, Sourceable {
	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $uid;

	/**
	 * @var string
	 */
	protected $chan;

	/**
	 * @var Indi\Attr[]
	 */
	protected $attr = array();

	/**
	 * @var Indi\Even[]
	 */
	protected $even = array();

	/**
	 * @var Indi\Note[]
	 */
	protected $note = array();

	/**
	 * @var Obje[]
	 */
	protected $obje = array();

	/**
	 * @var Sour[]
	 */
	protected $sour = array();

	/**
	 * @var Indi\Name[]
	 */
	protected $name = array();

	/**
	 * @var string[]
	 */
	protected $alia = array();

	/**
	 * @var string
	 */
	protected $sex;

	/**
	 * @var string
	 */
	protected $rin;

	/**
	 * @var string
	 */
	protected $resn;

	/**
	 * @var string
	 */
	protected $rfn;

	/**
	 * @var string
	 */
	protected $afn;

	/**
	 * @var Indi\Fams[]
	 */
	protected $fams = array();

	/**
	 * @var Indi\Famc[]
	 */
	protected $famc = array();

	/**
	 * @var Indi\Asso[]
	 */
	protected $asso = array();

	/**
	 * @var string[]
	 */
	protected $subm = array();

	/**
	 * @var string[]
	 */
	protected $anci = array();

	/**
	 * @var string[]
	 */
	protected $desi = array();

	/**
	 * @var Refn[]
	 */
	protected $refn = array();

	/**
	 * @var Indi\Bapl
	 */
	protected $bapl;

	/**
	 * @var Indi\Conl
	 */
	protected $conl;

	/**
	 * @var Indi\Endl
	 */
	protected $endl;

	/**
	 * @var Indi\Slgc
	 */
	protected $slgc;

	/**
	 * @param string $id
	 * @return Indi
	 */
	public function setId($id = '') {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param string $uid
	 * @return Indi
	 */
	public function setUid($uid = '') {
		$this->uid = $uid;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUid() {
		return $this->uid;
	}

	/**
	 * @param Indi\Name $name
	 * @return Indi
	 */
	public function addName($name = []) {
		$this->name[] = $name;
		return $this;
	}

	/**
	 * @return Indi\Name[]
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param Indi\Attr $attr
	 * @return Indi
	 */
	public function addAttr($attr = []) {
		$attrName = $attr->getType();

		if (!array_key_exists($attrName, $this->attr)) {
			$this->attr[$attrName] = [];
		}

		$this->attr[$attrName][] = $attr;
		return $this;
	}

	/**
	 * @return Indi\Attr[]
	 */
	public function getAllAttr() {
		return $this->attr;
	}
	/**
	 * @return Indi\Attr[]
	 */
	public function getAttr($key = '') {
		if (isset($this->attr[strtoupper($key)])) {
			return $this->attr[strtoupper($key)];
		}

	}
	/**
	 * @param Indi\Even $even
	 * @return Indi
	 */
	public function addEven($even = []) {
		$evenName = $even->getType();

		if (!array_key_exists($evenName, $this->even)) {
			$this->even[$evenName] = [];
		}

		$this->even[$evenName][] = $even;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getAllEven() {
		return $this->even;
	}

	/**
	 * @return array
	 */
	public function getEven($key = '') {
		if (isset($this->even[strtoupper($key)])) {
			return $this->even[strtoupper($key)];
		}

	}

	/**
	 * @param Indi\Asso $asso
	 * @return Indi
	 */
	public function addAsso($asso = []) {
		$this->asso[] = $asso;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getAsso() {
		return $this->asso;
	}

	/**
	 * @param Refn $ref
	 * @return Indi
	 */
	public function addRefn($ref = []) {
		$this->refn[] = $ref;
		return $this;
	}

	/**
	 * @return Refn[]
	 */
	public function getRefn() {
		return $this->refn;
	}

	/**
	 * @param \PhpGedcom\Record\NoteRef $note
	 * @return Indi
	 */
	public function addNote($note = []) {
		$this->note[] = $note;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * @param ObjeRef $obje
	 * @return Indi
	 */
	public function addObje($obje = []) {
		$this->obje[] = $obje;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getObje() {
		return $this->obje;
	}

	/**
	 * @param SourRef $sour
	 * @return Indi
	 */
	public function addSour($sour = []) {
		$this->sour[] = $sour;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getSour() {
		return $this->sour;
	}

	/**
	 * @param string $indi
	 * @return Indi
	 */
	public function addAlia($indi = '') {
		$this->alia[] = $indi;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getAlia() {
		return $this->alia;
	}

	/**
	 * @param Indi\Famc $famc
	 * @return Indi
	 */
	public function addFamc($famc = []) {
		$this->famc[] = $famc;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getFamc() {
		return $this->famc;
	}

	/**
	 * @param Indi\Fams $fams
	 * @return Indi
	 */
	public function addFams($fams = []) {
		$this->fams[] = $fams;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getFams() {
		return $this->fams;
	}

	/**
	 * @param string $subm
	 * @return Indi
	 */
	public function addAnci($subm = '') {
		$this->anci[] = $subm;
		return $this;
	}

	/**
	 * @return string[]
	 */
	public function getAnci() {
		return $this->anci;
	}

	/**
	 * @param string $subm
	 * @return Indi
	 */
	public function addDesi($subm = '') {
		$this->desi[] = $subm;
		return $this;
	}

	/**
	 * @return string[]
	 */
	public function getDesi() {
		return $this->desi;
	}

	/**
	 * @param string $subm
	 * @return Indi
	 */
	public function addSubm($subm = '') {
		$this->subm[] = $subm;
		return $this;
	}

	/**
	 * @return string[]
	 */
	public function getSubm() {
		return $this->subm;
	}

	/**
	 * @param string $resn
	 * @return Indi
	 */
	public function setResn($resn = '') {
		$this->resn = $resn;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getResn() {
		return $this->resn;
	}

	/**
	 * @param string $sex
	 * @return Indi
	 */
	public function setSex($sex = '') {
		$this->sex = $sex;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSex() {
		return $this->sex;
	}

	/**
	 * @param string $rfn
	 * @return Indi
	 */
	public function setRfn($rfn = '') {
		$this->rfn = $rfn;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRfn() {
		return $this->rfn;
	}

	/**
	 * @param string $afn
	 * @return Indi
	 */
	public function setAfn($afn = '') {
		$this->afn = $afn;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAfn() {
		return $this->afn;
	}

	/**
	 * @param string $chan
	 * @return Indi
	 */
	public function setChan($chan = '') {
		$this->chan = $chan;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getChan() {
		return $this->chan;
	}

	/**
	 * @param string $rin
	 * @return Indi
	 */
	public function setRin($rin = '') {
		$this->rin = $rin;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRin() {
		return $this->rin;
	}

	/**
	 * @param Indi\Bapl $bapl
	 * @return Indi
	 */
	public function setBapl($bapl = []) {
		$this->bapl = $bapl;
		return $this;
	}

	/**
	 * @return Indi\Bapl
	 */
	public function getBapl() {
		return $this->bapl;
	}

	/**
	 * @param Indi\Conl $conl
	 * @return Indi
	 */
	public function setConl($conl = []) {
		$this->conl = $conl;
		return $this;
	}

	/**
	 * @return Indi\Conl
	 */
	public function getConl() {
		return $this->conl;
	}

	/**
	 * @param Indi\Endl $endl
	 * @return Indi
	 */
	public function setEndl($endl = []) {
		$this->endl = $endl;
		return $this;
	}

	/**
	 * @return Indi\Endl
	 */
	public function getEndl() {
		return $this->endl;
	}

	/**
	 * @param Indi\Slgc $slgc
	 * @return Indi
	 */
	public function setSlgc($slgc = []) {
		$this->slgc = $slgc;
		return $this;
	}

	/**
	 * @return Indi\Slgc
	 */
	public function getSlgc() {
		return $this->slgc;
	}
}
