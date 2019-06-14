<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Uebertragung
 * Übertragungsangaben
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("uebertragung") 
 */
class Uebertragung {

	/**
	 */
	const ART_OFFLINE = 'OFFLINE';

	/**
	 */
	const ART_ONLINE = 'ONLINE';

	/**
	 */
	const MODUS_CHANGE = 'CHANGE';

	/**
	 */
	const MODUS_DELETE = 'DELETE';

	/**
	 */
	const MODUS_NEW = 'NEW';

	/**
	 */
	const UMFANG_TEIL = 'TEIL';

	/**
	 */
	const UMFANG_VOLL = 'VOLL';

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see ART_* constants
	 * @var string
	 */
	protected $art;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see MODUS_* constants
	 * @var string
	 */
	protected $modus;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $regiId;

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $sendersoftware;

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $senderversion;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $technEmail;

	/**
	 * optional
	 *
	 * @Type("DateTime<'Y-m-d\TH:i:s'>") 
	 * @XmlAttribute 
	 * @var \DateTime
	 */
	protected $timestamp;

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see UMFANG_* constants
	 * @var string
	 */
	protected $umfang;

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $version;

	/**
	 * @return string
	 */
	public function getArt() {
		return $this->art;
	}

	/**
	 * @return string
	 */
	public function getModus() {
		return $this->modus;
	}

	/**
	 * @return string
	 */
	public function getRegiId() {
		return $this->regiId;
	}

	/**
	 * @return string
	 */
	public function getSendersoftware() {
		return $this->sendersoftware;
	}

	/**
	 * @return string
	 */
	public function getSenderversion() {
		return $this->senderversion;
	}

	/**
	 * @return string
	 */
	public function getTechnEmail() {
		return $this->technEmail;
	}

	/**
	 * @return \DateTime
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}

	/**
	 * @return string
	 */
	public function getUmfang() {
		return $this->umfang;
	}

	/**
	 * @return string
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * @param string $art Setter for art
	 * @return Uebertragung
	 */
	public function setArt($art) {
		$this->art = $art;
		return $this;
	}

	/**
	 * @param string $modus Setter for modus
	 * @return Uebertragung
	 */
	public function setModus($modus) {
		$this->modus = $modus;
		return $this;
	}

	/**
	 * @param string $regiId Setter for regiId
	 * @return Uebertragung
	 */
	public function setRegiId($regiId) {
		$this->regiId = $regiId;
		return $this;
	}

	/**
	 * @param string $sendersoftware Setter for sendersoftware
	 * @return Uebertragung
	 */
	public function setSendersoftware($sendersoftware) {
		$this->sendersoftware = $sendersoftware;
		return $this;
	}

	/**
	 * @param string $senderversion Setter for senderversion
	 * @return Uebertragung
	 */
	public function setSenderversion($senderversion) {
		$this->senderversion = $senderversion;
		return $this;
	}

	/**
	 * @param string $technEmail Setter for technEmail
	 * @return Uebertragung
	 */
	public function setTechnEmail($technEmail) {
		$this->technEmail = $technEmail;
		return $this;
	}

	/**
	 * @param \DateTime $timestamp Setter for timestamp
	 * @return Uebertragung
	 */
	public function setTimestamp(\DateTime $timestamp) {
		$this->timestamp = $timestamp;
		return $this;
	}

	/**
	 * @param string $umfang Setter for umfang
	 * @return Uebertragung
	 */
	public function setUmfang($umfang) {
		$this->umfang = $umfang;
		return $this;
	}

	/**
	 * @param string $version Setter for version
	 * @return Uebertragung
	 */
	public function setVersion($version) {
		$this->version = $version;
		return $this;
	}
}
