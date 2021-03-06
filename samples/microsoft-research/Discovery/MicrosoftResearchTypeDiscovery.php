<?php
/**
 * Class file for MicrosoftResearchTypeDiscovery
 * @date 05/07/2012
 */
/**
 * Class MicrosoftResearchTypeDiscovery
 * @date 05/07/2012
 */
class MicrosoftResearchTypeDiscovery extends MicrosoftResearchWsdlClass
{
	/**
	 * The registrationXml
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $registrationXml;
	/**
	 * Constructor
	 * @param string registrationXml
	 * @return MicrosoftResearchTypeDiscovery
	 */
	public function __construct($_registrationXml = null)
	{
		parent::__construct(array('registrationXml'=>$_registrationXml));
	}
	/**
	 * Set registrationXml
	 * @param string registrationXml
	 * @return string
	 */
	public function setRegistrationXml($_registrationXml)
	{
		return ($this->registrationXml = $_registrationXml);
	}
	/**
	 * Get registrationXml
	 * @return string
	 */
	public function getRegistrationXml()
	{
		return $this->registrationXml;
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