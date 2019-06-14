<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geo
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("geo") 
 */
class Geo {

	/**
	 * @Type("int") 
	 * @var int
	 */
	protected $anzahlEtagen;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $bundesland;

	/**
	 * @Type("int") 
	 * @var int
	 */
	protected $etage;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $flur;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $flurstueck;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $gemarkung;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $gemeindecode;

	/**
	 * @Type("Ujamii\OpenImmo\API\Geokoordinaten") 
	 * @var Geokoordinaten
	 */
	protected $geokoordinaten;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $hausnummer;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $kartenMakro;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $kartenMikro;

	/**
	 * @Type("Ujamii\OpenImmo\API\LageGebiet") 
	 * @var LageGebiet
	 */
	protected $lageGebiet;

	/**
	 * @Type("Ujamii\OpenImmo\API\LageImBau") 
	 * @var LageImBau
	 */
	protected $lageImBau;

	/**
	 * @Type("Ujamii\OpenImmo\API\Land") 
	 * @var Land
	 */
	protected $land;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $luftbildern;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $ort;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $plz;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $regionalerZusatz;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $strasse;

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
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $virtuelletour;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $wohnungsnr;

	/**
	 * @return int
	 */
	public function getAnzahlEtagen() {
		return $this->anzahlEtagen;
	}

	/**
	 * @return string
	 */
	public function getBundesland() {
		return $this->bundesland;
	}

	/**
	 * @return int
	 */
	public function getEtage() {
		return $this->etage;
	}

	/**
	 * @return string
	 */
	public function getFlur() {
		return $this->flur;
	}

	/**
	 * @return string
	 */
	public function getFlurstueck() {
		return $this->flurstueck;
	}

	/**
	 * @return string
	 */
	public function getGemarkung() {
		return $this->gemarkung;
	}

	/**
	 * @return string
	 */
	public function getGemeindecode() {
		return $this->gemeindecode;
	}

	/**
	 * @return Geokoordinaten
	 */
	public function getGeokoordinaten() {
		return $this->geokoordinaten;
	}

	/**
	 * @return string
	 */
	public function getHausnummer() {
		return $this->hausnummer;
	}

	/**
	 * @return boolean
	 */
	public function getKartenMakro() {
		return $this->kartenMakro;
	}

	/**
	 * @return boolean
	 */
	public function getKartenMikro() {
		return $this->kartenMikro;
	}

	/**
	 * @return LageGebiet
	 */
	public function getLageGebiet() {
		return $this->lageGebiet;
	}

	/**
	 * @return LageImBau
	 */
	public function getLageImBau() {
		return $this->lageImBau;
	}

	/**
	 * @return Land
	 */
	public function getLand() {
		return $this->land;
	}

	/**
	 * @return boolean
	 */
	public function getLuftbildern() {
		return $this->luftbildern;
	}

	/**
	 * @return string
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * @return string
	 */
	public function getPlz() {
		return $this->plz;
	}

	/**
	 * @return string
	 */
	public function getRegionalerZusatz() {
		return $this->regionalerZusatz;
	}

	/**
	 * @return string
	 */
	public function getStrasse() {
		return $this->strasse;
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
	 * @return boolean
	 */
	public function getVirtuelletour() {
		return $this->virtuelletour;
	}

	/**
	 * @return string
	 */
	public function getWohnungsnr() {
		return $this->wohnungsnr;
	}

	/**
	 * @param int $anzahlEtagen Setter for anzahlEtagen
	 * @return Geo
	 */
	public function setAnzahlEtagen($anzahlEtagen) {
		$this->anzahlEtagen = $anzahlEtagen;
		return $this;
	}

	/**
	 * @param string $bundesland Setter for bundesland
	 * @return Geo
	 */
	public function setBundesland($bundesland) {
		$this->bundesland = $bundesland;
		return $this;
	}

	/**
	 * @param int $etage Setter for etage
	 * @return Geo
	 */
	public function setEtage($etage) {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param string $flur Setter for flur
	 * @return Geo
	 */
	public function setFlur($flur) {
		$this->flur = $flur;
		return $this;
	}

	/**
	 * @param string $flurstueck Setter for flurstueck
	 * @return Geo
	 */
	public function setFlurstueck($flurstueck) {
		$this->flurstueck = $flurstueck;
		return $this;
	}

	/**
	 * @param string $gemarkung Setter for gemarkung
	 * @return Geo
	 */
	public function setGemarkung($gemarkung) {
		$this->gemarkung = $gemarkung;
		return $this;
	}

	/**
	 * @param string $gemeindecode Setter for gemeindecode
	 * @return Geo
	 */
	public function setGemeindecode($gemeindecode) {
		$this->gemeindecode = $gemeindecode;
		return $this;
	}

	/**
	 * @param Geokoordinaten $geokoordinaten Setter for geokoordinaten
	 * @return Geo
	 */
	public function setGeokoordinaten(Geokoordinaten $geokoordinaten) {
		$this->geokoordinaten = $geokoordinaten;
		return $this;
	}

	/**
	 * @param string $hausnummer Setter for hausnummer
	 * @return Geo
	 */
	public function setHausnummer($hausnummer) {
		$this->hausnummer = $hausnummer;
		return $this;
	}

	/**
	 * @param boolean $kartenMakro Setter for kartenMakro
	 * @return Geo
	 */
	public function setKartenMakro($kartenMakro) {
		$this->kartenMakro = $kartenMakro;
		return $this;
	}

	/**
	 * @param boolean $kartenMikro Setter for kartenMikro
	 * @return Geo
	 */
	public function setKartenMikro($kartenMikro) {
		$this->kartenMikro = $kartenMikro;
		return $this;
	}

	/**
	 * @param LageGebiet $lageGebiet Setter for lageGebiet
	 * @return Geo
	 */
	public function setLageGebiet(LageGebiet $lageGebiet) {
		$this->lageGebiet = $lageGebiet;
		return $this;
	}

	/**
	 * @param LageImBau $lageImBau Setter for lageImBau
	 * @return Geo
	 */
	public function setLageImBau(LageImBau $lageImBau) {
		$this->lageImBau = $lageImBau;
		return $this;
	}

	/**
	 * @param Land $land Setter for land
	 * @return Geo
	 */
	public function setLand(Land $land) {
		$this->land = $land;
		return $this;
	}

	/**
	 * @param boolean $luftbildern Setter for luftbildern
	 * @return Geo
	 */
	public function setLuftbildern($luftbildern) {
		$this->luftbildern = $luftbildern;
		return $this;
	}

	/**
	 * @param string $ort Setter for ort
	 * @return Geo
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
		return $this;
	}

	/**
	 * @param string $plz Setter for plz
	 * @return Geo
	 */
	public function setPlz($plz) {
		$this->plz = $plz;
		return $this;
	}

	/**
	 * @param string $regionalerZusatz Setter for regionalerZusatz
	 * @return Geo
	 */
	public function setRegionalerZusatz($regionalerZusatz) {
		$this->regionalerZusatz = $regionalerZusatz;
		return $this;
	}

	/**
	 * @param string $strasse Setter for strasse
	 * @return Geo
	 */
	public function setStrasse($strasse) {
		$this->strasse = $strasse;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Geo
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Geo
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Geo
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param boolean $virtuelletour Setter for virtuelletour
	 * @return Geo
	 */
	public function setVirtuelletour($virtuelletour) {
		$this->virtuelletour = $virtuelletour;
		return $this;
	}

	/**
	 * @param string $wohnungsnr Setter for wohnungsnr
	 * @return Geo
	 */
	public function setWohnungsnr($wohnungsnr) {
		$this->wohnungsnr = $wohnungsnr;
		return $this;
	}
}
