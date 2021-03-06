<?php
/**
 * Class file for MicrosoftResearchServiceQuery
 * @date 05/07/2012
 */
/**
 * Class MicrosoftResearchServiceQuery
 * @date 05/07/2012
 */
class MicrosoftResearchServiceQuery extends MicrosoftResearchWsdlClass
{
	/**
	 * Method to call Query
	 * Meta informations :
	 * 	- documentation : Basic entrypoint for Query
	 * @uses MicrosoftResearchWsdlClass::getSoapClient()
	 * @uses MicrosoftResearchWsdlClass::setResult()
	 * @uses MicrosoftResearchWsdlClass::getResult()
	 * @uses MicrosoftResearchWsdlClass::saveLastError()
	 * @uses MicrosoftResearchTypeQuery::getQueryXml()
	 * @param MicrosoftResearchTypeQuery Query
	 * @return MicrosoftResearchTypeQueryResponse
	 */
	public function Query(MicrosoftResearchTypeQuery $_MicrosoftResearchTypeQuery)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Query(array('queryXml'=>$_MicrosoftResearchTypeQuery->getQueryXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return MicrosoftResearchTypeQueryResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>