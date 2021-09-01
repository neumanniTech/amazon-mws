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
 * MWSFinancesService_Model_TaxWithholdingTimeRange
 * 
 * Properties:
 * <ul>
 * 
 * <li>StartDateMillis: int</li>
 * <li>EndDateMillis: int</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_TaxWithholdingTimeRange extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'StartDateMillis' => array('FieldValue' => null, 'FieldType' => 'int'),
    'EndDateMillis' => array('FieldValue' => null, 'FieldType' => 'int'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the StartDateMillis property.
     *
     * @return Long StartDateMillis.
     */
    public function getStartDateMillis()
    {
        return $this->_fields['StartDateMillis']['FieldValue'];
    }

    /**
     * Set the value of the StartDateMillis property.
     *
     * @param int startDateMillis
     * @return this instance
     */
    public function setStartDateMillis($value)
    {
        $this->_fields['StartDateMillis']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if StartDateMillis is set.
     *
     * @return true if StartDateMillis is set.
     */
    public function isSetStartDateMillis()
    {
                return !is_null($this->_fields['StartDateMillis']['FieldValue']);
            }

    /**
     * Set the value of StartDateMillis, return this.
     *
     * @param startDateMillis
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStartDateMillis($value)
    {
        $this->setStartDateMillis($value);
        return $this;
    }

    /**
     * Get the value of the EndDateMillis property.
     *
     * @return Long EndDateMillis.
     */
    public function getEndDateMillis()
    {
        return $this->_fields['EndDateMillis']['FieldValue'];
    }

    /**
     * Set the value of the EndDateMillis property.
     *
     * @param int endDateMillis
     * @return this instance
     */
    public function setEndDateMillis($value)
    {
        $this->_fields['EndDateMillis']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EndDateMillis is set.
     *
     * @return true if EndDateMillis is set.
     */
    public function isSetEndDateMillis()
    {
                return !is_null($this->_fields['EndDateMillis']['FieldValue']);
            }

    /**
     * Set the value of EndDateMillis, return this.
     *
     * @param endDateMillis
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEndDateMillis($value)
    {
        $this->setEndDateMillis($value);
        return $this;
    }

}
