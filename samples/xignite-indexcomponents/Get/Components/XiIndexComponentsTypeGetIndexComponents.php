<?php
/**
 * Class file for XiIndexComponentsTypeGetIndexComponents
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypeGetIndexComponents
 * @date 08/07/2012
 */
class XiIndexComponentsTypeGetIndexComponents extends XiIndexComponentsWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiIndexComponentsTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiIndexComponentsTypeIdentifierTypes IdentifierType
	 * @return XiIndexComponentsTypeGetIndexComponents
	 */
	public function __construct($_Identifier = null,$_IdentifierType)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiIndexComponentsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiIndexComponentsTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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