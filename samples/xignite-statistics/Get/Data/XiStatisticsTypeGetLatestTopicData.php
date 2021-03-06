<?php
/**
 * Class file for XiStatisticsTypeGetLatestTopicData
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetLatestTopicData
 * @date 08/07/2012
 */
class XiStatisticsTypeGetLatestTopicData extends XiStatisticsWsdlClass
{
	/**
	 * The TopicCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TopicCode;
	/**
	 * Constructor
	 * @param string TopicCode
	 * @return XiStatisticsTypeGetLatestTopicData
	 */
	public function __construct($_TopicCode = null)
	{
		parent::__construct(array('TopicCode'=>$_TopicCode));
	}
	/**
	 * Set TopicCode
	 * @param string TopicCode
	 * @return string
	 */
	public function setTopicCode($_TopicCode)
	{
		return ($this->TopicCode = $_TopicCode);
	}
	/**
	 * Get TopicCode
	 * @return string
	 */
	public function getTopicCode()
	{
		return $this->TopicCode;
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