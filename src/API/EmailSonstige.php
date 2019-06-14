<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class EmailSonstige
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("email_sonstige") 
 */
class EmailSonstige {

	/**
	 */
	const EMAILART_EM_DIREKT = 'EM_DIREKT';

	/**
	 */
	const EMAILART_EM_PRIVAT = 'EM_PRIVAT';

	/**
	 */
	const EMAILART_EM_SONSTIGE = 'EM_SONSTIGE';

	/**
	 */
	const EMAILART_EM_ZENTRALE = 'EM_ZENTRALE';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $bemerkung;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see EMAILART_* constants
	 * @var string
	 */
	protected $emailart;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $emailart Shortcut setter for emailart
	 * @param string $bemerkung Shortcut setter for bemerkung
	 * @param string $value the actual value
	 */
	public function __construct($emailart = null, $bemerkung = null, $value = null) {
		$this->emailart = $emailart;
		$this->bemerkung = $bemerkung;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getBemerkung() {
		return $this->bemerkung;
	}

	/**
	 * @return string
	 */
	public function getEmailart() {
		return $this->emailart;
	}

	/**
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param string $bemerkung Setter for bemerkung
	 * @return EmailSonstige
	 */
	public function setBemerkung($bemerkung) {
		$this->bemerkung = $bemerkung;
		return $this;
	}

	/**
	 * @param string $emailart Setter for emailart
	 * @return EmailSonstige
	 */
	public function setEmailart($emailart) {
		$this->emailart = $emailart;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return EmailSonstige
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
