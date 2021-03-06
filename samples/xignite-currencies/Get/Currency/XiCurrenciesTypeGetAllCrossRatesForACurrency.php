<?php
/**
 * Class file for XiCurrenciesTypeGetAllCrossRatesForACurrency
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetAllCrossRatesForACurrency
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetAllCrossRatesForACurrency extends XiCurrenciesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * Constructor
	 * @param string Symbol
	 * @return XiCurrenciesTypeGetAllCrossRatesForACurrency
	 */
	public function __construct($_Symbol = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
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