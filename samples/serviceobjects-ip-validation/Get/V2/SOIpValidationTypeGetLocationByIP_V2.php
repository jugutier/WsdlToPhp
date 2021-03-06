<?php
/**
 * Class file for SOIpValidationTypeGetLocationByIP_V2
 * @date 08/07/2012
 */
/**
 * Class SOIpValidationTypeGetLocationByIP_V2
 * @date 08/07/2012
 */
class SOIpValidationTypeGetLocationByIP_V2 extends SOIpValidationWsdlClass
{
	/**
	 * The IPAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddress;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string IPAddress
	 * @param string LicenseKey
	 * @return SOIpValidationTypeGetLocationByIP_V2
	 */
	public function __construct($_IPAddress = null,$_LicenseKey = null)
	{
		parent::__construct(array('IPAddress'=>$_IPAddress,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set IPAddress
	 * @param string IPAddress
	 * @return string
	 */
	public function setIPAddress($_IPAddress)
	{
		return ($this->IPAddress = $_IPAddress);
	}
	/**
	 * Get IPAddress
	 * @return string
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>