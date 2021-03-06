<?php
/**
 * Class file for PPInvoiceTypePaymentDetailsType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypePaymentDetailsType
 * Documentation : Payment details about the invoice.
 * @date 02/07/2012
 */
class PPInvoiceTypePaymentDetailsType extends PPInvoiceWsdlClass
{
	/**
	 * The viaPayPal
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : True if the invoice was paid using PayPal.
	 * @var boolean
	 */
	public $viaPayPal;
	/**
	 * The paypalPayment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : PayPal payment details.
	 * @var PPInvoiceTypePayPalPaymentDetailsType
	 */
	public $paypalPayment;
	/**
	 * The otherPayment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Other payment details.
	 * @var PPInvoiceTypeOtherPaymentDetailsType
	 */
	public $otherPayment;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean viaPayPal
	 * @param PPInvoiceTypePayPalPaymentDetailsType paypalPayment
	 * @param PPInvoiceTypeOtherPaymentDetailsType otherPayment
	 * @param DOMDocument any
	 * @return PPInvoiceTypePaymentDetailsType
	 */
	public function __construct($_viaPayPal,$_paypalPayment = null,$_otherPayment = null,$_any = null)
	{
		parent::__construct(array('viaPayPal'=>$_viaPayPal,'paypalPayment'=>$_paypalPayment,'otherPayment'=>$_otherPayment,'any'=>$_any));
	}
	/**
	 * Set viaPayPal
	 * @param boolean viaPayPal
	 * @return boolean
	 */
	public function setViaPayPal($_viaPayPal)
	{
		return ($this->viaPayPal = $_viaPayPal);
	}
	/**
	 * Get viaPayPal
	 * @return boolean
	 */
	public function getViaPayPal()
	{
		return $this->viaPayPal;
	}
	/**
	 * Set paypalPayment
	 * @param PayPalPaymentDetailsType paypalPayment
	 * @return PayPalPaymentDetailsType
	 */
	public function setPaypalPayment($_paypalPayment)
	{
		return ($this->paypalPayment = $_paypalPayment);
	}
	/**
	 * Get paypalPayment
	 * @return PPInvoiceTypePayPalPaymentDetailsType
	 */
	public function getPaypalPayment()
	{
		return $this->paypalPayment;
	}
	/**
	 * Set otherPayment
	 * @param OtherPaymentDetailsType otherPayment
	 * @return OtherPaymentDetailsType
	 */
	public function setOtherPayment($_otherPayment)
	{
		return ($this->otherPayment = $_otherPayment);
	}
	/**
	 * Get otherPayment
	 * @return PPInvoiceTypeOtherPaymentDetailsType
	 */
	public function getOtherPayment()
	{
		return $this->otherPayment;
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