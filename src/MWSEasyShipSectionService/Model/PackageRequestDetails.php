<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Easy Ship Section Service
 * @version  2018-09-01
 * Library Version: 2018-09-01
 * Generated: Sat Nov 14 02:54:45 UTC 2020
 */

/**
 *  @see MWSEasyShipSectionService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSEasyShipSectionService_Model_PackageRequestDetails
 * 
 * Properties:
 * <ul>
 * 
 * <li>PackageDimensions: MWSEasyShipSectionService_Model_Dimensions</li>
 * <li>PackageWeight: MWSEasyShipSectionService_Model_Weight</li>
 * <li>PackageItemList: array</li>
 * <li>PackagePickupSlot: MWSEasyShipSectionService_Model_PickupSlot</li>
 * <li>PackageIdentifier: string</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_PackageRequestDetails extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PackageDimensions' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_Dimensions'),
    'PackageWeight' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_Weight'),
    'PackageItemList' => array('FieldValue' => array(), 'FieldType' => array('MWSEasyShipSectionService_Model_Item'), 'ListMemberName' => 'Item'),
    'PackagePickupSlot' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_PickupSlot'),
    'PackageIdentifier' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PackageDimensions property.
     *
     * @return Dimensions PackageDimensions.
     */
    public function getPackageDimensions()
    {
        return $this->_fields['PackageDimensions']['FieldValue'];
    }

    /**
     * Set the value of the PackageDimensions property.
     *
     * @param MWSEasyShipSectionService_Model_Dimensions packageDimensions
     * @return this instance
     */
    public function setPackageDimensions($value)
    {
        $this->_fields['PackageDimensions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageDimensions is set.
     *
     * @return true if PackageDimensions is set.
     */
    public function isSetPackageDimensions()
    {
                return !is_null($this->_fields['PackageDimensions']['FieldValue']);
            }

    /**
     * Set the value of PackageDimensions, return this.
     *
     * @param packageDimensions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageDimensions($value)
    {
        $this->setPackageDimensions($value);
        return $this;
    }

    /**
     * Get the value of the PackageWeight property.
     *
     * @return Weight PackageWeight.
     */
    public function getPackageWeight()
    {
        return $this->_fields['PackageWeight']['FieldValue'];
    }

    /**
     * Set the value of the PackageWeight property.
     *
     * @param MWSEasyShipSectionService_Model_Weight packageWeight
     * @return this instance
     */
    public function setPackageWeight($value)
    {
        $this->_fields['PackageWeight']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageWeight is set.
     *
     * @return true if PackageWeight is set.
     */
    public function isSetPackageWeight()
    {
                return !is_null($this->_fields['PackageWeight']['FieldValue']);
            }

    /**
     * Set the value of PackageWeight, return this.
     *
     * @param packageWeight
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageWeight($value)
    {
        $this->setPackageWeight($value);
        return $this;
    }

    /**
     * Get the value of the PackageItemList property.
     *
     * @return List<Item> PackageItemList.
     */
    public function getPackageItemList()
    {
        if ($this->_fields['PackageItemList']['FieldValue'] == null)
        {
            $this->_fields['PackageItemList']['FieldValue'] = array();
        }
        return $this->_fields['PackageItemList']['FieldValue'];
    }

    /**
     * Set the value of the PackageItemList property.
     *
     * @param array packageItemList
     * @return this instance
     */
    public function setPackageItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PackageItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PackageItemList.
     */
    public function unsetPackageItemList()
    {
        $this->_fields['PackageItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if PackageItemList is set.
     *
     * @return true if PackageItemList is set.
     */
    public function isSetPackageItemList()
    {
                return !empty($this->_fields['PackageItemList']['FieldValue']);
            }

    /**
     * Add values for PackageItemList, return this.
     *
     * @param packageItemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPackageItemList()
    {
        foreach (func_get_args() as $PackageItemList)
        {
            $this->_fields['PackageItemList']['FieldValue'][] = $PackageItemList;
        }
        return $this;
    }

    /**
     * Get the value of the PackagePickupSlot property.
     *
     * @return PickupSlot PackagePickupSlot.
     */
    public function getPackagePickupSlot()
    {
        return $this->_fields['PackagePickupSlot']['FieldValue'];
    }

    /**
     * Set the value of the PackagePickupSlot property.
     *
     * @param MWSEasyShipSectionService_Model_PickupSlot packagePickupSlot
     * @return this instance
     */
    public function setPackagePickupSlot($value)
    {
        $this->_fields['PackagePickupSlot']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackagePickupSlot is set.
     *
     * @return true if PackagePickupSlot is set.
     */
    public function isSetPackagePickupSlot()
    {
                return !is_null($this->_fields['PackagePickupSlot']['FieldValue']);
            }

    /**
     * Set the value of PackagePickupSlot, return this.
     *
     * @param packagePickupSlot
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackagePickupSlot($value)
    {
        $this->setPackagePickupSlot($value);
        return $this;
    }

    /**
     * Get the value of the PackageIdentifier property.
     *
     * @return String PackageIdentifier.
     */
    public function getPackageIdentifier()
    {
        return $this->_fields['PackageIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the PackageIdentifier property.
     *
     * @param string packageIdentifier
     * @return this instance
     */
    public function setPackageIdentifier($value)
    {
        $this->_fields['PackageIdentifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageIdentifier is set.
     *
     * @return true if PackageIdentifier is set.
     */
    public function isSetPackageIdentifier()
    {
                return !is_null($this->_fields['PackageIdentifier']['FieldValue']);
            }

    /**
     * Set the value of PackageIdentifier, return this.
     *
     * @param packageIdentifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageIdentifier($value)
    {
        $this->setPackageIdentifier($value);
        return $this;
    }

}
