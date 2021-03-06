<?php
/**
 * Class file for XiGlobalmasterTypeGetIssuers
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetIssuers
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetIssuers extends XiGlobalmasterWsdlClass
{
	/**
	 * The IncludeRelated
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeIssuerRelatedTypes
	 */
	public $IncludeRelated;
	/**
	 * The Identifiers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifiers;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeIssuerRelatedTypes IncludeRelated
	 * @param string Identifiers
	 * @param XiGlobalmasterTypeIdentifierTypes IdentifierType
	 * @param string AsOfDate
	 * @return XiGlobalmasterTypeGetIssuers
	 */
	public function __construct($_IncludeRelated,$_Identifiers = null,$_IdentifierType,$_AsOfDate = null)
	{
		parent::__construct(array('IncludeRelated'=>$_IncludeRelated,'Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set IncludeRelated
	 * @param IssuerRelatedTypes IncludeRelated
	 * @return IssuerRelatedTypes
	 */
	public function setIncludeRelated($_IncludeRelated)
	{
		return ($this->IncludeRelated = XiGlobalmasterTypeIssuerRelatedTypes::valueIsValid($_IncludeRelated)?$_IncludeRelated:null);
	}
	/**
	 * Get IncludeRelated
	 * @return XiGlobalmasterTypeIssuerRelatedTypes
	 */
	public function getIncludeRelated()
	{
		return $this->IncludeRelated;
	}
	/**
	 * Set Identifiers
	 * @param string Identifiers
	 * @return string
	 */
	public function setIdentifiers($_Identifiers)
	{
		return ($this->Identifiers = $_Identifiers);
	}
	/**
	 * Get Identifiers
	 * @return string
	 */
	public function getIdentifiers()
	{
		return $this->Identifiers;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiGlobalmasterTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalmasterTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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