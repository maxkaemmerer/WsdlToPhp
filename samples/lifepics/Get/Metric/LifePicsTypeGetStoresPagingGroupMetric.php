<?php
/**
 * Class file for LifePicsTypeGetStoresPagingGroupMetric
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresPagingGroupMetric
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresPagingGroupMetric extends LifePicsWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Longitude;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Latitude;
	/**
	 * The Distance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Distance;
	/**
	 * The MerchantID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MerchantID;
	/**
	 * The PickupOnly
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PickupOnly;
	/**
	 * The StartIndex
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $StartIndex;
	/**
	 * The DisplayCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DisplayCount;
	/**
	 * The MerchantGroupKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MerchantGroupKey;
	/**
	 * The IsMetric
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsMetric;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string PostalCode
	 * @param string Longitude
	 * @param string Latitude
	 * @param string Distance
	 * @param string MerchantID
	 * @param boolean PickupOnly
	 * @param int StartIndex
	 * @param int DisplayCount
	 * @param string MerchantGroupKey
	 * @param boolean IsMetric
	 * @return LifePicsTypeGetStoresPagingGroupMetric
	 */
	public function __construct($_SessionID = null,$_PostalCode = null,$_Longitude = null,$_Latitude = null,$_Distance = null,$_MerchantID = null,$_PickupOnly,$_StartIndex,$_DisplayCount,$_MerchantGroupKey = null,$_IsMetric)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'PostalCode'=>$_PostalCode,'Longitude'=>$_Longitude,'Latitude'=>$_Latitude,'Distance'=>$_Distance,'MerchantID'=>$_MerchantID,'PickupOnly'=>$_PickupOnly,'StartIndex'=>$_StartIndex,'DisplayCount'=>$_DisplayCount,'MerchantGroupKey'=>$_MerchantGroupKey,'IsMetric'=>$_IsMetric));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set Longitude
	 * @param string Longitude
	 * @return string
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return string
	 */
	public function getLongitude()
	{
		return $this->Longitude;
	}
	/**
	 * Set Latitude
	 * @param string Latitude
	 * @return string
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return string
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Distance
	 * @param string Distance
	 * @return string
	 */
	public function setDistance($_Distance)
	{
		return ($this->Distance = $_Distance);
	}
	/**
	 * Get Distance
	 * @return string
	 */
	public function getDistance()
	{
		return $this->Distance;
	}
	/**
	 * Set MerchantID
	 * @param string MerchantID
	 * @return string
	 */
	public function setMerchantID($_MerchantID)
	{
		return ($this->MerchantID = $_MerchantID);
	}
	/**
	 * Get MerchantID
	 * @return string
	 */
	public function getMerchantID()
	{
		return $this->MerchantID;
	}
	/**
	 * Set PickupOnly
	 * @param boolean PickupOnly
	 * @return boolean
	 */
	public function setPickupOnly($_PickupOnly)
	{
		return ($this->PickupOnly = $_PickupOnly);
	}
	/**
	 * Get PickupOnly
	 * @return boolean
	 */
	public function getPickupOnly()
	{
		return $this->PickupOnly;
	}
	/**
	 * Set StartIndex
	 * @param int StartIndex
	 * @return int
	 */
	public function setStartIndex($_StartIndex)
	{
		return ($this->StartIndex = $_StartIndex);
	}
	/**
	 * Get StartIndex
	 * @return int
	 */
	public function getStartIndex()
	{
		return $this->StartIndex;
	}
	/**
	 * Set DisplayCount
	 * @param int DisplayCount
	 * @return int
	 */
	public function setDisplayCount($_DisplayCount)
	{
		return ($this->DisplayCount = $_DisplayCount);
	}
	/**
	 * Get DisplayCount
	 * @return int
	 */
	public function getDisplayCount()
	{
		return $this->DisplayCount;
	}
	/**
	 * Set MerchantGroupKey
	 * @param string MerchantGroupKey
	 * @return string
	 */
	public function setMerchantGroupKey($_MerchantGroupKey)
	{
		return ($this->MerchantGroupKey = $_MerchantGroupKey);
	}
	/**
	 * Get MerchantGroupKey
	 * @return string
	 */
	public function getMerchantGroupKey()
	{
		return $this->MerchantGroupKey;
	}
	/**
	 * Set IsMetric
	 * @param boolean IsMetric
	 * @return boolean
	 */
	public function setIsMetric($_IsMetric)
	{
		return ($this->IsMetric = $_IsMetric);
	}
	/**
	 * Get IsMetric
	 * @return boolean
	 */
	public function getIsMetric()
	{
		return $this->IsMetric;
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