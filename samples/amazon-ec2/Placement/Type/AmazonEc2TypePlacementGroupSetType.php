<?php
/**
 * Class file for AmazonEc2TypePlacementGroupSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypePlacementGroupSetType
 * @date 10/07/2012
 */
class AmazonEc2TypePlacementGroupSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypePlacementGroupInfoType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypePlacementGroupInfoType item
	 * @return AmazonEc2TypePlacementGroupSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param PlacementGroupInfoType item
	 * @return PlacementGroupInfoType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypePlacementGroupInfoType
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