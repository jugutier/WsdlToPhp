<?php
/**
 * Class file for EbayTradingTypeQuantityType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeQuantityType
 * Documentation : Basic type for specifying quantities.
 * @date 04/07/2012
 */
class EbayTradingTypeQuantityType extends EbayTradingWsdlClass
{
	/**
	 * The _
	 * @var decimal
	 */
	public $_;
	/**
	 * The unit
	 * Meta informations :
	 * 	- use : optional
	 * @var token
	 */
	public $unit;
	/**
	 * Constructor
	 * @param decimal _
	 * @param token unit
	 * @return EbayTradingTypeQuantityType
	 */
	public function __construct($__ = null,$_unit = null)
	{
		parent::__construct(array('_'=>$__,'unit'=>$_unit));
	}
	/**
	 * Set _
	 * @param decimal _
	 * @return decimal
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return decimal
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set unit
	 * @param token unit
	 * @return token
	 */
	public function setUnit($_unit)
	{
		return ($this->unit = $_unit);
	}
	/**
	 * Get unit
	 * @return token
	 */
	public function getUnit()
	{
		return $this->unit;
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