<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class VerwaltungObjekt
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("verwaltung_objekt") 
 */
class VerwaltungObjekt {

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $abdatum;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $alsFerien;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $bisdatum;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $branchen;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $denkmalgeschuetzt;

	/**
	 * @Type("Ujamii\OpenImmo\API\Geschlecht") 
	 * @var Geschlecht
	 */
	protected $geschlecht;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $gewerblicheNutzung;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $gruppennummer;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $haustiere;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $hochhaus;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $laufzeit;

	/**
	 * @Type("Ujamii\OpenImmo\API\MaxMietdauer") 
	 * @var MaxMietdauer
	 */
	protected $maxMietdauer;

	/**
	 * @Type("int") 
	 * @var int
	 */
	protected $maxPersonen;

	/**
	 * @Type("Ujamii\OpenImmo\API\MinMietdauer") 
	 * @var MinMietdauer
	 */
	protected $minMietdauer;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $nichtraucher;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $objektadresseFreigeben;

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
	 * @Type("string") 
	 * @var string
	 */
	protected $verfuegbarAb;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $vermietet;

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $versteigerungstermin;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $wbsSozialwohnung;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $zugang;

	/**
	 * @return \DateTime
	 */
	public function getAbdatum() {
		return $this->abdatum;
	}

	/**
	 * @return boolean
	 */
	public function getAlsFerien() {
		return $this->alsFerien;
	}

	/**
	 * @return \DateTime
	 */
	public function getBisdatum() {
		return $this->bisdatum;
	}

	/**
	 * @return string
	 */
	public function getBranchen() {
		return $this->branchen;
	}

	/**
	 * @return boolean
	 */
	public function getDenkmalgeschuetzt() {
		return $this->denkmalgeschuetzt;
	}

	/**
	 * @return Geschlecht
	 */
	public function getGeschlecht() {
		return $this->geschlecht;
	}

	/**
	 * @return boolean
	 */
	public function getGewerblicheNutzung() {
		return $this->gewerblicheNutzung;
	}

	/**
	 * @return string
	 */
	public function getGruppennummer() {
		return $this->gruppennummer;
	}

	/**
	 * @return boolean
	 */
	public function getHaustiere() {
		return $this->haustiere;
	}

	/**
	 * @return boolean
	 */
	public function getHochhaus() {
		return $this->hochhaus;
	}

	/**
	 * @return float
	 */
	public function getLaufzeit() {
		return $this->laufzeit;
	}

	/**
	 * @return MaxMietdauer
	 */
	public function getMaxMietdauer() {
		return $this->maxMietdauer;
	}

	/**
	 * @return int
	 */
	public function getMaxPersonen() {
		return $this->maxPersonen;
	}

	/**
	 * @return MinMietdauer
	 */
	public function getMinMietdauer() {
		return $this->minMietdauer;
	}

	/**
	 * @return boolean
	 */
	public function getNichtraucher() {
		return $this->nichtraucher;
	}

	/**
	 * @return boolean
	 */
	public function getObjektadresseFreigeben() {
		return $this->objektadresseFreigeben;
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
	 * @return string
	 */
	public function getVerfuegbarAb() {
		return $this->verfuegbarAb;
	}

	/**
	 * @return boolean
	 */
	public function getVermietet() {
		return $this->vermietet;
	}

	/**
	 * @return \DateTime
	 */
	public function getVersteigerungstermin() {
		return $this->versteigerungstermin;
	}

	/**
	 * @return boolean
	 */
	public function getWbsSozialwohnung() {
		return $this->wbsSozialwohnung;
	}

	/**
	 * @return string
	 */
	public function getZugang() {
		return $this->zugang;
	}

	/**
	 * @param \DateTime $abdatum Setter for abdatum
	 * @return VerwaltungObjekt
	 */
	public function setAbdatum(\DateTime $abdatum) {
		$this->abdatum = $abdatum;
		return $this;
	}

	/**
	 * @param boolean $alsFerien Setter for alsFerien
	 * @return VerwaltungObjekt
	 */
	public function setAlsFerien($alsFerien) {
		$this->alsFerien = $alsFerien;
		return $this;
	}

	/**
	 * @param \DateTime $bisdatum Setter for bisdatum
	 * @return VerwaltungObjekt
	 */
	public function setBisdatum(\DateTime $bisdatum) {
		$this->bisdatum = $bisdatum;
		return $this;
	}

	/**
	 * @param string $branchen Setter for branchen
	 * @return VerwaltungObjekt
	 */
	public function setBranchen($branchen) {
		$this->branchen = $branchen;
		return $this;
	}

	/**
	 * @param boolean $denkmalgeschuetzt Setter for denkmalgeschuetzt
	 * @return VerwaltungObjekt
	 */
	public function setDenkmalgeschuetzt($denkmalgeschuetzt) {
		$this->denkmalgeschuetzt = $denkmalgeschuetzt;
		return $this;
	}

	/**
	 * @param Geschlecht $geschlecht Setter for geschlecht
	 * @return VerwaltungObjekt
	 */
	public function setGeschlecht(Geschlecht $geschlecht) {
		$this->geschlecht = $geschlecht;
		return $this;
	}

	/**
	 * @param boolean $gewerblicheNutzung Setter for gewerblicheNutzung
	 * @return VerwaltungObjekt
	 */
	public function setGewerblicheNutzung($gewerblicheNutzung) {
		$this->gewerblicheNutzung = $gewerblicheNutzung;
		return $this;
	}

	/**
	 * @param string $gruppennummer Setter for gruppennummer
	 * @return VerwaltungObjekt
	 */
	public function setGruppennummer($gruppennummer) {
		$this->gruppennummer = $gruppennummer;
		return $this;
	}

	/**
	 * @param boolean $haustiere Setter for haustiere
	 * @return VerwaltungObjekt
	 */
	public function setHaustiere($haustiere) {
		$this->haustiere = $haustiere;
		return $this;
	}

	/**
	 * @param boolean $hochhaus Setter for hochhaus
	 * @return VerwaltungObjekt
	 */
	public function setHochhaus($hochhaus) {
		$this->hochhaus = $hochhaus;
		return $this;
	}

	/**
	 * @param float $laufzeit Setter for laufzeit
	 * @return VerwaltungObjekt
	 */
	public function setLaufzeit($laufzeit) {
		$this->laufzeit = $laufzeit;
		return $this;
	}

	/**
	 * @param MaxMietdauer $maxMietdauer Setter for maxMietdauer
	 * @return VerwaltungObjekt
	 */
	public function setMaxMietdauer(MaxMietdauer $maxMietdauer) {
		$this->maxMietdauer = $maxMietdauer;
		return $this;
	}

	/**
	 * @param int $maxPersonen Setter for maxPersonen
	 * @return VerwaltungObjekt
	 */
	public function setMaxPersonen($maxPersonen) {
		$this->maxPersonen = $maxPersonen;
		return $this;
	}

	/**
	 * @param MinMietdauer $minMietdauer Setter for minMietdauer
	 * @return VerwaltungObjekt
	 */
	public function setMinMietdauer(MinMietdauer $minMietdauer) {
		$this->minMietdauer = $minMietdauer;
		return $this;
	}

	/**
	 * @param boolean $nichtraucher Setter for nichtraucher
	 * @return VerwaltungObjekt
	 */
	public function setNichtraucher($nichtraucher) {
		$this->nichtraucher = $nichtraucher;
		return $this;
	}

	/**
	 * @param boolean $objektadresseFreigeben Setter for objektadresseFreigeben
	 * @return VerwaltungObjekt
	 */
	public function setObjektadresseFreigeben($objektadresseFreigeben) {
		$this->objektadresseFreigeben = $objektadresseFreigeben;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return VerwaltungObjekt
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return VerwaltungObjekt
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return VerwaltungObjekt
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param string $verfuegbarAb Setter for verfuegbarAb
	 * @return VerwaltungObjekt
	 */
	public function setVerfuegbarAb($verfuegbarAb) {
		$this->verfuegbarAb = $verfuegbarAb;
		return $this;
	}

	/**
	 * @param boolean $vermietet Setter for vermietet
	 * @return VerwaltungObjekt
	 */
	public function setVermietet($vermietet) {
		$this->vermietet = $vermietet;
		return $this;
	}

	/**
	 * @param \DateTime $versteigerungstermin Setter for versteigerungstermin
	 * @return VerwaltungObjekt
	 */
	public function setVersteigerungstermin(\DateTime $versteigerungstermin) {
		$this->versteigerungstermin = $versteigerungstermin;
		return $this;
	}

	/**
	 * @param boolean $wbsSozialwohnung Setter for wbsSozialwohnung
	 * @return VerwaltungObjekt
	 */
	public function setWbsSozialwohnung($wbsSozialwohnung) {
		$this->wbsSozialwohnung = $wbsSozialwohnung;
		return $this;
	}

	/**
	 * @param string $zugang Setter for zugang
	 * @return VerwaltungObjekt
	 */
	public function setZugang($zugang) {
		$this->zugang = $zugang;
		return $this;
	}
}
