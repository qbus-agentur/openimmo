<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class WeitereAdresse
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("weitere_adresse") 
 */
class WeitereAdresse {

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $adressart;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $adressfreigabe;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anrede;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anredeBrief;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $emailDirekt;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $emailPrivat;

	/**
	 * @XmlList(inline = true, entry = "email_sonstige") 
	 * @Type("array<Ujamii\OpenImmo\API\EmailSonstige>") 
	 * @var EmailSonstige[]
	 */
	protected $emailSonstige;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $emailZentrale;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $firma;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $freitextfeld;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $hausnummer;

	/**
	 * @Type("Ujamii\OpenImmo\API\Land") 
	 * @var Land
	 */
	protected $land;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $name;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $ort;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $personennummer;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $plz;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $postfach;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $postfOrt;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $postfPlz;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $strasse;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telDurchw;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telFax;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telHandy;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telPrivat;

	/**
	 * @XmlList(inline = true, entry = "tel_sonstige") 
	 * @Type("array<Ujamii\OpenImmo\API\TelSonstige>") 
	 * @var TelSonstige[]
	 */
	protected $telSonstige;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telZentrale;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $titel;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $url;

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
	protected $vorname;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $zusatzfeld;

	/**
	 * @return string
	 */
	public function getAdressart() {
		return $this->adressart;
	}

	/**
	 * @return boolean
	 */
	public function getAdressfreigabe() {
		return $this->adressfreigabe;
	}

	/**
	 * @return string
	 */
	public function getAnrede() {
		return $this->anrede;
	}

	/**
	 * @return string
	 */
	public function getAnredeBrief() {
		return $this->anredeBrief;
	}

	/**
	 * @return string
	 */
	public function getEmailDirekt() {
		return $this->emailDirekt;
	}

	/**
	 * @return string
	 */
	public function getEmailPrivat() {
		return $this->emailPrivat;
	}

	/**
	 * Returns array of EmailSonstige
	 *
	 * @return array
	 */
	public function getEmailSonstige() {
		return $this->emailSonstige ?: [];
	}

	/**
	 * @return string
	 */
	public function getEmailZentrale() {
		return $this->emailZentrale;
	}

	/**
	 * @return string
	 */
	public function getFirma() {
		return $this->firma;
	}

	/**
	 * @return string
	 */
	public function getFreitextfeld() {
		return $this->freitextfeld;
	}

	/**
	 * @return string
	 */
	public function getHausnummer() {
		return $this->hausnummer;
	}

	/**
	 * @return Land
	 */
	public function getLand() {
		return $this->land;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
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
	public function getPersonennummer() {
		return $this->personennummer;
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
	public function getPostfach() {
		return $this->postfach;
	}

	/**
	 * @return string
	 */
	public function getPostfOrt() {
		return $this->postfOrt;
	}

	/**
	 * @return string
	 */
	public function getPostfPlz() {
		return $this->postfPlz;
	}

	/**
	 * @return string
	 */
	public function getStrasse() {
		return $this->strasse;
	}

	/**
	 * @return string
	 */
	public function getTelDurchw() {
		return $this->telDurchw;
	}

	/**
	 * @return string
	 */
	public function getTelFax() {
		return $this->telFax;
	}

	/**
	 * @return string
	 */
	public function getTelHandy() {
		return $this->telHandy;
	}

	/**
	 * @return string
	 */
	public function getTelPrivat() {
		return $this->telPrivat;
	}

	/**
	 * Returns array of TelSonstige
	 *
	 * @return array
	 */
	public function getTelSonstige() {
		return $this->telSonstige ?: [];
	}

	/**
	 * @return string
	 */
	public function getTelZentrale() {
		return $this->telZentrale;
	}

	/**
	 * @return string
	 */
	public function getTitel() {
		return $this->titel;
	}

	/**
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
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
	 * @return string
	 */
	public function getVorname() {
		return $this->vorname;
	}

	/**
	 * @return string
	 */
	public function getZusatzfeld() {
		return $this->zusatzfeld;
	}

	/**
	 * @param string $adressart Setter for adressart
	 * @return WeitereAdresse
	 */
	public function setAdressart($adressart) {
		$this->adressart = $adressart;
		return $this;
	}

	/**
	 * @param boolean $adressfreigabe Setter for adressfreigabe
	 * @return WeitereAdresse
	 */
	public function setAdressfreigabe($adressfreigabe) {
		$this->adressfreigabe = $adressfreigabe;
		return $this;
	}

	/**
	 * @param string $anrede Setter for anrede
	 * @return WeitereAdresse
	 */
	public function setAnrede($anrede) {
		$this->anrede = $anrede;
		return $this;
	}

	/**
	 * @param string $anredeBrief Setter for anredeBrief
	 * @return WeitereAdresse
	 */
	public function setAnredeBrief($anredeBrief) {
		$this->anredeBrief = $anredeBrief;
		return $this;
	}

	/**
	 * @param string $emailDirekt Setter for emailDirekt
	 * @return WeitereAdresse
	 */
	public function setEmailDirekt($emailDirekt) {
		$this->emailDirekt = $emailDirekt;
		return $this;
	}

	/**
	 * @param string $emailPrivat Setter for emailPrivat
	 * @return WeitereAdresse
	 */
	public function setEmailPrivat($emailPrivat) {
		$this->emailPrivat = $emailPrivat;
		return $this;
	}

	/**
	 * @param array $emailSonstige Setter for emailSonstige
	 * @return WeitereAdresse
	 */
	public function setEmailSonstige(array $emailSonstige) {
		$this->emailSonstige = $emailSonstige;
		return $this;
	}

	/**
	 * @param string $emailZentrale Setter for emailZentrale
	 * @return WeitereAdresse
	 */
	public function setEmailZentrale($emailZentrale) {
		$this->emailZentrale = $emailZentrale;
		return $this;
	}

	/**
	 * @param string $firma Setter for firma
	 * @return WeitereAdresse
	 */
	public function setFirma($firma) {
		$this->firma = $firma;
		return $this;
	}

	/**
	 * @param string $freitextfeld Setter for freitextfeld
	 * @return WeitereAdresse
	 */
	public function setFreitextfeld($freitextfeld) {
		$this->freitextfeld = $freitextfeld;
		return $this;
	}

	/**
	 * @param string $hausnummer Setter for hausnummer
	 * @return WeitereAdresse
	 */
	public function setHausnummer($hausnummer) {
		$this->hausnummer = $hausnummer;
		return $this;
	}

	/**
	 * @param Land $land Setter for land
	 * @return WeitereAdresse
	 */
	public function setLand(Land $land) {
		$this->land = $land;
		return $this;
	}

	/**
	 * @param string $name Setter for name
	 * @return WeitereAdresse
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * @param string $ort Setter for ort
	 * @return WeitereAdresse
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
		return $this;
	}

	/**
	 * @param string $personennummer Setter for personennummer
	 * @return WeitereAdresse
	 */
	public function setPersonennummer($personennummer) {
		$this->personennummer = $personennummer;
		return $this;
	}

	/**
	 * @param string $plz Setter for plz
	 * @return WeitereAdresse
	 */
	public function setPlz($plz) {
		$this->plz = $plz;
		return $this;
	}

	/**
	 * @param string $postfach Setter for postfach
	 * @return WeitereAdresse
	 */
	public function setPostfach($postfach) {
		$this->postfach = $postfach;
		return $this;
	}

	/**
	 * @param string $postfOrt Setter for postfOrt
	 * @return WeitereAdresse
	 */
	public function setPostfOrt($postfOrt) {
		$this->postfOrt = $postfOrt;
		return $this;
	}

	/**
	 * @param string $postfPlz Setter for postfPlz
	 * @return WeitereAdresse
	 */
	public function setPostfPlz($postfPlz) {
		$this->postfPlz = $postfPlz;
		return $this;
	}

	/**
	 * @param string $strasse Setter for strasse
	 * @return WeitereAdresse
	 */
	public function setStrasse($strasse) {
		$this->strasse = $strasse;
		return $this;
	}

	/**
	 * @param string $telDurchw Setter for telDurchw
	 * @return WeitereAdresse
	 */
	public function setTelDurchw($telDurchw) {
		$this->telDurchw = $telDurchw;
		return $this;
	}

	/**
	 * @param string $telFax Setter for telFax
	 * @return WeitereAdresse
	 */
	public function setTelFax($telFax) {
		$this->telFax = $telFax;
		return $this;
	}

	/**
	 * @param string $telHandy Setter for telHandy
	 * @return WeitereAdresse
	 */
	public function setTelHandy($telHandy) {
		$this->telHandy = $telHandy;
		return $this;
	}

	/**
	 * @param string $telPrivat Setter for telPrivat
	 * @return WeitereAdresse
	 */
	public function setTelPrivat($telPrivat) {
		$this->telPrivat = $telPrivat;
		return $this;
	}

	/**
	 * @param array $telSonstige Setter for telSonstige
	 * @return WeitereAdresse
	 */
	public function setTelSonstige(array $telSonstige) {
		$this->telSonstige = $telSonstige;
		return $this;
	}

	/**
	 * @param string $telZentrale Setter for telZentrale
	 * @return WeitereAdresse
	 */
	public function setTelZentrale($telZentrale) {
		$this->telZentrale = $telZentrale;
		return $this;
	}

	/**
	 * @param string $titel Setter for titel
	 * @return WeitereAdresse
	 */
	public function setTitel($titel) {
		$this->titel = $titel;
		return $this;
	}

	/**
	 * @param string $url Setter for url
	 * @return WeitereAdresse
	 */
	public function setUrl($url) {
		$this->url = $url;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return WeitereAdresse
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return WeitereAdresse
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return WeitereAdresse
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param string $vorname Setter for vorname
	 * @return WeitereAdresse
	 */
	public function setVorname($vorname) {
		$this->vorname = $vorname;
		return $this;
	}

	/**
	 * @param string $zusatzfeld Setter for zusatzfeld
	 * @return WeitereAdresse
	 */
	public function setZusatzfeld($zusatzfeld) {
		$this->zusatzfeld = $zusatzfeld;
		return $this;
	}
}
