<?php
/**
 * Class file for OvhTypeTelephonyRestrictionModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyRestrictionModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyRestrictionModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The restrictions
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $restrictions;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param OvhTypeMyArrayOfStringType restrictions
	 * @return OvhTypeTelephonyRestrictionModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_restrictions = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'restrictions'=>new OvhTypeMyArrayOfStringType($_restrictions)));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set restrictions
	 * @param MyArrayOfStringType restrictions
	 * @return MyArrayOfStringType
	 */
	public function setRestrictions($_restrictions)
	{
		return ($this->restrictions = $_restrictions);
	}
	/**
	 * Get restrictions
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getRestrictions()
	{
		return $this->restrictions;
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