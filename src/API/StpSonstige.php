<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpSonstige
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("stp_sonstige") 
 */
class StpSonstige {

	/**
	 */
	const PLATZART_CARPORT = 'CARPORT';

	/**
	 */
	const PLATZART_DUPLEX = 'DUPLEX';

	/**
	 */
	const PLATZART_FREIPLATZ = 'FREIPLATZ';

	/**
	 */
	const PLATZART_GARAGE = 'GARAGE';

	/**
	 */
	const PLATZART_PARKHAUS = 'PARKHAUS';

	/**
	 */
	const PLATZART_SONSTIGES = 'SONSTIGES';

	/**
	 */
	const PLATZART_TIEFGARAGE = 'TIEFGARAGE';

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
	 * @see PLATZART_* constants
	 * @var string
	 */
	protected $platzart;

	/**
	 * @return string
	 */
	public function getBemerkung() {
		return $this->bemerkung;
	}

	/**
	 * @return string
	 */
	public function getPlatzart() {
		return $this->platzart;
	}

	/**
	 * @param string $bemerkung Setter for bemerkung
	 * @return StpSonstige
	 */
	public function setBemerkung($bemerkung) {
		$this->bemerkung = $bemerkung;
		return $this;
	}

	/**
	 * @param string $platzart Setter for platzart
	 * @return StpSonstige
	 */
	public function setPlatzart($platzart) {
		$this->platzart = $platzart;
		return $this;
	}
}
