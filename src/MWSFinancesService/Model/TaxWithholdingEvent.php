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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2020-08-26
 * Generated: Fri Sep 18 08:52:06 PDT 2020
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_TaxWithholdingEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>PostedDate: string</li>
 * <li>TaxWithholdingPeriod: MWSFinancesService_Model_TaxWithholdingTimeRange</li>
 * <li>BaseAmount: MWSFinancesService_Model_Currency</li>
 * <li>WithheldAmount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_TaxWithholdingEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TaxWithholdingPeriod' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_TaxWithholdingTimeRange'),
    'BaseAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'WithheldAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
                return !is_null($this->_fields['PostedDate']['FieldValue']);
            }

    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);
        return $this;
    }

    /**
     * Get the value of the TaxWithholdingPeriod property.
     *
     * @return TaxWithholdingTimeRange TaxWithholdingPeriod.
     */
    public function getTaxWithholdingPeriod()
    {
        return $this->_fields['TaxWithholdingPeriod']['FieldValue'];
    }

    /**
     * Set the value of the TaxWithholdingPeriod property.
     *
     * @param MWSFinancesService_Model_TaxWithholdingTimeRange taxWithholdingPeriod
     * @return this instance
     */
    public function setTaxWithholdingPeriod($value)
    {
        $this->_fields['TaxWithholdingPeriod']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxWithholdingPeriod is set.
     *
     * @return true if TaxWithholdingPeriod is set.
     */
    public function isSetTaxWithholdingPeriod()
    {
                return !is_null($this->_fields['TaxWithholdingPeriod']['FieldValue']);
            }

    /**
     * Set the value of TaxWithholdingPeriod, return this.
     *
     * @param taxWithholdingPeriod
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxWithholdingPeriod($value)
    {
        $this->setTaxWithholdingPeriod($value);
        return $this;
    }

    /**
     * Get the value of the BaseAmount property.
     *
     * @return Currency BaseAmount.
     */
    public function getBaseAmount()
    {
        return $this->_fields['BaseAmount']['FieldValue'];
    }

    /**
     * Set the value of the BaseAmount property.
     *
     * @param MWSFinancesService_Model_Currency baseAmount
     * @return this instance
     */
    public function setBaseAmount($value)
    {
        $this->_fields['BaseAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BaseAmount is set.
     *
     * @return true if BaseAmount is set.
     */
    public function isSetBaseAmount()
    {
                return !is_null($this->_fields['BaseAmount']['FieldValue']);
            }

    /**
     * Set the value of BaseAmount, return this.
     *
     * @param baseAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBaseAmount($value)
    {
        $this->setBaseAmount($value);
        return $this;
    }

    /**
     * Get the value of the WithheldAmount property.
     *
     * @return Currency WithheldAmount.
     */
    public function getWithheldAmount()
    {
        return $this->_fields['WithheldAmount']['FieldValue'];
    }

    /**
     * Set the value of the WithheldAmount property.
     *
     * @param MWSFinancesService_Model_Currency withheldAmount
     * @return this instance
     */
    public function setWithheldAmount($value)
    {
        $this->_fields['WithheldAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if WithheldAmount is set.
     *
     * @return true if WithheldAmount is set.
     */
    public function isSetWithheldAmount()
    {
                return !is_null($this->_fields['WithheldAmount']['FieldValue']);
            }

    /**
     * Set the value of WithheldAmount, return this.
     *
     * @param withheldAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withWithheldAmount($value)
    {
        $this->setWithheldAmount($value);
        return $this;
    }

}
