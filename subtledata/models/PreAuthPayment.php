<?php
/**
 *  Copyright 2011 Wordnik, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class PreAuthPayment {

  static $swaggerTypes = array(
      'status' => 'int',
      'tip_amount' => 'float',
      'total_amount' => 'float',
      'amount_before_tip' => 'float',
      'payment_source' => 'string',
      'external_payment_id' => 'int',
      'external_response_field_1' => 'string',
      'tender_type_name' => 'string',
      'external_response_field_2' => 'string',
      'external_response_field_3' => 'string',
      'external_response_field_4' => 'string'

    );

  /**
  * Payment Status
  */
  public $status; // int
  /**
  * Payment tip amount
  */
  public $tip_amount; // float
  /**
  * Payment Total Amount
  */
  public $total_amount; // float
  /**
  * Payment amount before tip
  */
  public $amount_before_tip; // float
  /**
  * Payment Source
  */
  public $payment_source; // string
  /**
  * SubtleData External Payment ID
  */
  public $external_payment_id; // int
  /**
  * External Data 1
  */
  public $external_response_field_1; // string
  /**
  * Tender Type
  */
  public $tender_type_name; // string
  /**
  * External Data 2
  */
  public $external_response_field_2; // string
  /**
  * External Data 3
  */
  public $external_response_field_3; // string
  /**
  * External Data 4
  */
  public $external_response_field_4; // string
  }

