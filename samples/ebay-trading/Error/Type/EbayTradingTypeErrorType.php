<?php
/**
 * Class file for EbayTradingTypeErrorType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeErrorType
 * Documentation : These are request errors (as opposed to system errors) that occur due to problems with business-level data (e.g., an invalid combination of arguments) that the application passed in.
 * @date 04/07/2012
 */
class EbayTradingTypeErrorType extends EbayTradingWsdlClass
{
	/**
	 * The ShortMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A brief description of the condition that raised the error.
	 * @var string
	 */
	public $ShortMessage;
	/**
	 * The LongMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A more detailed description of the condition that raised the error.
	 * @var string
	 */
	public $LongMessage;
	/**
	 * The ErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique code that identifies the particular error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. See the "Errors by Number" document.
	 * @var token
	 */
	public $ErrorCode;
	/**
	 * The UserDisplayHint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the error message text is intended to be displayed to an end user or intended only to be parsed by the application. If true or not present (the default), the message text is intended for the end user. If false, the message text is intended for the application, and the application should translate the error into a more appropriate message. Only applicable to Item Specifics errors and warnings returned from listing requests.
	 * @var boolean
	 */
	public $UserDisplayHint;
	/**
	 * The SeverityCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the error is a severe error (causing the request to fail) or an informational error (a warning) that should be communicated to the user.
	 * @var EbayTradingTypeSeverityCodeType
	 */
	public $SeverityCode;
	/**
	 * The ErrorParameters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This optional element carries a list of context-specific error variables that indicate details about the error condition. These are useful when multiple instances of ErrorType are returned.
	 * @var EbayTradingTypeErrorParameterType
	 */
	public $ErrorParameters;
	/**
	 * The ErrorClassification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : API errors are divided between two classes: system errors and request errors.
	 * @var EbayTradingTypeErrorClassificationCodeType
	 */
	public $ErrorClassification;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ShortMessage
	 * @param string LongMessage
	 * @param token ErrorCode
	 * @param boolean UserDisplayHint
	 * @param EbayTradingTypeSeverityCodeType SeverityCode
	 * @param EbayTradingTypeErrorParameterType ErrorParameters
	 * @param EbayTradingTypeErrorClassificationCodeType ErrorClassification
	 * @param DOMDocument any
	 * @return EbayTradingTypeErrorType
	 */
	public function __construct($_ShortMessage = null,$_LongMessage = null,$_ErrorCode = null,$_UserDisplayHint = null,$_SeverityCode = null,$_ErrorParameters = null,$_ErrorClassification = null,$_any = null)
	{
		parent::__construct(array('ShortMessage'=>$_ShortMessage,'LongMessage'=>$_LongMessage,'ErrorCode'=>$_ErrorCode,'UserDisplayHint'=>$_UserDisplayHint,'SeverityCode'=>$_SeverityCode,'ErrorParameters'=>$_ErrorParameters,'ErrorClassification'=>$_ErrorClassification,'any'=>$_any));
	}
	/**
	 * Set ShortMessage
	 * @param string ShortMessage
	 * @return string
	 */
	public function setShortMessage($_ShortMessage)
	{
		return ($this->ShortMessage = $_ShortMessage);
	}
	/**
	 * Get ShortMessage
	 * @return string
	 */
	public function getShortMessage()
	{
		return $this->ShortMessage;
	}
	/**
	 * Set LongMessage
	 * @param string LongMessage
	 * @return string
	 */
	public function setLongMessage($_LongMessage)
	{
		return ($this->LongMessage = $_LongMessage);
	}
	/**
	 * Get LongMessage
	 * @return string
	 */
	public function getLongMessage()
	{
		return $this->LongMessage;
	}
	/**
	 * Set ErrorCode
	 * @param token ErrorCode
	 * @return token
	 */
	public function setErrorCode($_ErrorCode)
	{
		return ($this->ErrorCode = $_ErrorCode);
	}
	/**
	 * Get ErrorCode
	 * @return token
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set UserDisplayHint
	 * @param boolean UserDisplayHint
	 * @return boolean
	 */
	public function setUserDisplayHint($_UserDisplayHint)
	{
		return ($this->UserDisplayHint = $_UserDisplayHint);
	}
	/**
	 * Get UserDisplayHint
	 * @return boolean
	 */
	public function getUserDisplayHint()
	{
		return $this->UserDisplayHint;
	}
	/**
	 * Set SeverityCode
	 * @param SeverityCodeType SeverityCode
	 * @return SeverityCodeType
	 */
	public function setSeverityCode($_SeverityCode)
	{
		return ($this->SeverityCode = EbayTradingTypeSeverityCodeType::valueIsValid($_SeverityCode)?$_SeverityCode:null);
	}
	/**
	 * Get SeverityCode
	 * @return EbayTradingTypeSeverityCodeType
	 */
	public function getSeverityCode()
	{
		return $this->SeverityCode;
	}
	/**
	 * Set ErrorParameters
	 * @param ErrorParameterType ErrorParameters
	 * @return ErrorParameterType
	 */
	public function setErrorParameters($_ErrorParameters)
	{
		return ($this->ErrorParameters = $_ErrorParameters);
	}
	/**
	 * Get ErrorParameters
	 * @return EbayTradingTypeErrorParameterType
	 */
	public function getErrorParameters()
	{
		return $this->ErrorParameters;
	}
	/**
	 * Set ErrorClassification
	 * @param ErrorClassificationCodeType ErrorClassification
	 * @return ErrorClassificationCodeType
	 */
	public function setErrorClassification($_ErrorClassification)
	{
		return ($this->ErrorClassification = EbayTradingTypeErrorClassificationCodeType::valueIsValid($_ErrorClassification)?$_ErrorClassification:null);
	}
	/**
	 * Get ErrorClassification
	 * @return EbayTradingTypeErrorClassificationCodeType
	 */
	public function getErrorClassification()
	{
		return $this->ErrorClassification;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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