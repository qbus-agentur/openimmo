<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Freitexte
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("freitexte") 
 */
class Freitexte {

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $ausstattBeschr;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $dreizeiler;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $lage;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $objektbeschreibung;

	/**
	 * @Type("Ujamii\OpenImmo\API\ObjektText") 
	 * @var ObjektText
	 */
	protected $objektText;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $objekttitel;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $sonstigeAngaben;

	/**
	 * @XmlList(inline = true, entry = "user_defined_anyfield") 
	 * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>") 
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList(inline = true, entry = "user_defined_extend") 
	 * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>") 
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @XmlList(inline = true, entry = "user_defined_simplefield") 
	 * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>") 
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
	 * @return string
	 */
	public function getAusstattBeschr() {
		return $this->ausstattBeschr;
	}

	/**
	 * @return string
	 */
	public function getDreizeiler() {
		return $this->dreizeiler;
	}

	/**
	 * @return string
	 */
	public function getLage() {
		return $this->lage;
	}

	/**
	 * @return string
	 */
	public function getObjektbeschreibung() {
		return $this->objektbeschreibung;
	}

	/**
	 * @return ObjektText
	 */
	public function getObjektText() {
		return $this->objektText;
	}

	/**
	 * @return string
	 */
	public function getObjekttitel() {
		return $this->objekttitel;
	}

	/**
	 * @return string
	 */
	public function getSonstigeAngaben() {
		return $this->sonstigeAngaben;
	}

	/**
	 * Returns array of UserDefinedAnyfield
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield() {
		return $this->userDefinedAnyfield ?: [];
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return array
	 */
	public function getUserDefinedExtend() {
		return $this->userDefinedExtend ?: [];
	}

	/**
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield() {
		return $this->userDefinedSimplefield ?: [];
	}

	/**
	 * @param string $ausstattBeschr Setter for ausstattBeschr
	 * @return Freitexte
	 */
	public function setAusstattBeschr($ausstattBeschr) {
		$this->ausstattBeschr = $ausstattBeschr;
		return $this;
	}

	/**
	 * @param string $dreizeiler Setter for dreizeiler
	 * @return Freitexte
	 */
	public function setDreizeiler($dreizeiler) {
		$this->dreizeiler = $dreizeiler;
		return $this;
	}

	/**
	 * @param string $lage Setter for lage
	 * @return Freitexte
	 */
	public function setLage($lage) {
		$this->lage = $lage;
		return $this;
	}

	/**
	 * @param string $objektbeschreibung Setter for objektbeschreibung
	 * @return Freitexte
	 */
	public function setObjektbeschreibung($objektbeschreibung) {
		$this->objektbeschreibung = $objektbeschreibung;
		return $this;
	}

	/**
	 * @param ObjektText $objektText Setter for objektText
	 * @return Freitexte
	 */
	public function setObjektText(ObjektText $objektText) {
		$this->objektText = $objektText;
		return $this;
	}

	/**
	 * @param string $objekttitel Setter for objekttitel
	 * @return Freitexte
	 */
	public function setObjekttitel($objekttitel) {
		$this->objekttitel = $objekttitel;
		return $this;
	}

	/**
	 * @param string $sonstigeAngaben Setter for sonstigeAngaben
	 * @return Freitexte
	 */
	public function setSonstigeAngaben($sonstigeAngaben) {
		$this->sonstigeAngaben = $sonstigeAngaben;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Freitexte
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Freitexte
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Freitexte
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
