<?php
/**
 * Class file for XiBondsRealTimeTypePriceSources
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypePriceSources
 * @date 08/07/2012
 */
class XiBondsRealTimeTypePriceSources extends XiBondsRealTimeWsdlClass
{
	/**
	 * Constant for value 'FINRA'
	 * @return string 'FINRA'
	 */
	const VALUE_FINRA = 'FINRA';
	/**
	 * Constructor
	 * @return XiBondsRealTimeTypePriceSources
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_FINRA));
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