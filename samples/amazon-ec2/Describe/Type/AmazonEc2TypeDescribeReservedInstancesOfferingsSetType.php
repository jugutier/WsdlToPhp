<?php
/**
 * Class file for AmazonEc2TypeDescribeReservedInstancesOfferingsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeReservedInstancesOfferingsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeReservedInstancesOfferingsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeReservedInstancesOfferingsSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeReservedInstancesOfferingsSetItemType item
	 * @return AmazonEc2TypeDescribeReservedInstancesOfferingsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeReservedInstancesOfferingsSetItemType item
	 * @return DescribeReservedInstancesOfferingsSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeReservedInstancesOfferingsSetItemType
	 */
	public function getItem()
	{
		return $this->item;
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