<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bieterverfahren
 * Angaben zum Bieterverfahren
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("bieterverfahren") 
 */
class Bieterverfahren {

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $beginnAngebotsphase;

	/**
	 * @Type("DateTime<'Y-m-d\TH:i:s'>") 
	 * @var \DateTime
	 */
	protected $beginnBietzeit;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $besichtigungstermin;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $besichtigungstermin2;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $endeBietzeit;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $hoechstgebotZeigen;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $mindestpreis;

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
	 * @return \DateTime
	 */
	public function getBeginnAngebotsphase() {
		return $this->beginnAngebotsphase;
	}

	/**
	 * @return \DateTime
	 */
	public function getBeginnBietzeit() {
		return $this->beginnBietzeit;
	}

	/**
	 * @return \DateTime
	 */
	public function getBesichtigungstermin() {
		return $this->besichtigungstermin;
	}

	/**
	 * @return \DateTime
	 */
	public function getBesichtigungstermin2() {
		return $this->besichtigungstermin2;
	}

	/**
	 * @return \DateTime
	 */
	public function getEndeBietzeit() {
		return $this->endeBietzeit;
	}

	/**
	 * @return boolean
	 */
	public function getHoechstgebotZeigen() {
		return $this->hoechstgebotZeigen;
	}

	/**
	 * @return float
	 */
	public function getMindestpreis() {
		return $this->mindestpreis;
	}

	/**
	 * Returns array of UserDefinedAnyfield
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield() {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return array
	 */
	public function getUserDefinedExtend() {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield() {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @param \DateTime $beginnAngebotsphase Setter for beginnAngebotsphase
	 * @return Bieterverfahren
	 */
	public function setBeginnAngebotsphase(\DateTime $beginnAngebotsphase) {
		$this->beginnAngebotsphase = $beginnAngebotsphase;
		return $this;
	}

	/**
	 * @param \DateTime $beginnBietzeit Setter for beginnBietzeit
	 * @return Bieterverfahren
	 */
	public function setBeginnBietzeit(\DateTime $beginnBietzeit) {
		$this->beginnBietzeit = $beginnBietzeit;
		return $this;
	}

	/**
	 * @param \DateTime $besichtigungstermin Setter for besichtigungstermin
	 * @return Bieterverfahren
	 */
	public function setBesichtigungstermin(\DateTime $besichtigungstermin) {
		$this->besichtigungstermin = $besichtigungstermin;
		return $this;
	}

	/**
	 * @param \DateTime $besichtigungstermin2 Setter for besichtigungstermin2
	 * @return Bieterverfahren
	 */
	public function setBesichtigungstermin2(\DateTime $besichtigungstermin2) {
		$this->besichtigungstermin2 = $besichtigungstermin2;
		return $this;
	}

	/**
	 * @param \DateTime $endeBietzeit Setter for endeBietzeit
	 * @return Bieterverfahren
	 */
	public function setEndeBietzeit(\DateTime $endeBietzeit) {
		$this->endeBietzeit = $endeBietzeit;
		return $this;
	}

	/**
	 * @param boolean $hoechstgebotZeigen Setter for hoechstgebotZeigen
	 * @return Bieterverfahren
	 */
	public function setHoechstgebotZeigen($hoechstgebotZeigen) {
		$this->hoechstgebotZeigen = $hoechstgebotZeigen;
		return $this;
	}

	/**
	 * @param float $mindestpreis Setter for mindestpreis
	 * @return Bieterverfahren
	 */
	public function setMindestpreis($mindestpreis) {
		$this->mindestpreis = $mindestpreis;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Bieterverfahren
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Bieterverfahren
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Bieterverfahren
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
