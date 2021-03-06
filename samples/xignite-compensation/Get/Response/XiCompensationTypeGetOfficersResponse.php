<?php
/**
 * Class file for XiCompensationTypeGetOfficersResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetOfficersResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetOfficersResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetOfficersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeArrayOfOfficer
	 */
	public $GetOfficersResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeArrayOfOfficer GetOfficersResult
	 * @return XiCompensationTypeGetOfficersResponse
	 */
	public function __construct($_GetOfficersResult = null)
	{
		parent::__construct(array('GetOfficersResult'=>new XiCompensationTypeArrayOfOfficer($_GetOfficersResult)));
	}
	/**
	 * Set GetOfficersResult
	 * @param ArrayOfOfficer GetOfficersResult
	 * @return ArrayOfOfficer
	 */
	public function setGetOfficersResult($_GetOfficersResult)
	{
		return ($this->GetOfficersResult = $_GetOfficersResult);
	}
	/**
	 * Get GetOfficersResult
	 * @return XiCompensationTypeArrayOfOfficer
	 */
	public function getGetOfficersResult()
	{
		return $this->GetOfficersResult;
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