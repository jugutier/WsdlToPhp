<?php
/**
 * Class file for SOCurrencyExchangeTypeConvertCurrency
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeConvertCurrency
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeConvertCurrency extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Amount;
	/**
	 * The ConvertFromCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvertFromCurrency;
	/**
	 * The ConvertToCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvertToCurrency;
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
	 * @param string Amount
	 * @param string ConvertFromCurrency
	 * @param string ConvertToCurrency
	 * @param string LicenseKey
	 * @return SOCurrencyExchangeTypeConvertCurrency
	 */
	public function __construct($_Amount = null,$_ConvertFromCurrency = null,$_ConvertToCurrency = null,$_LicenseKey = null)
	{
		parent::__construct(array('Amount'=>$_Amount,'ConvertFromCurrency'=>$_ConvertFromCurrency,'ConvertToCurrency'=>$_ConvertToCurrency,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Amount
	 * @param string Amount
	 * @return string
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return string
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set ConvertFromCurrency
	 * @param string ConvertFromCurrency
	 * @return string
	 */
	public function setConvertFromCurrency($_ConvertFromCurrency)
	{
		return ($this->ConvertFromCurrency = $_ConvertFromCurrency);
	}
	/**
	 * Get ConvertFromCurrency
	 * @return string
	 */
	public function getConvertFromCurrency()
	{
		return $this->ConvertFromCurrency;
	}
	/**
	 * Set ConvertToCurrency
	 * @param string ConvertToCurrency
	 * @return string
	 */
	public function setConvertToCurrency($_ConvertToCurrency)
	{
		return ($this->ConvertToCurrency = $_ConvertToCurrency);
	}
	/**
	 * Get ConvertToCurrency
	 * @return string
	 */
	public function getConvertToCurrency()
	{
		return $this->ConvertToCurrency;
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