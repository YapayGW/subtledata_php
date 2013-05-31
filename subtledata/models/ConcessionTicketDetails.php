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
class ConcessionTicketDetails {

  static $swaggerTypes = array(
      'employee_id' => 'int',
      'user_id' => 'int',
      'number_of_people_in_party' => 'int',
      'ticket_notes' => 'string',
      'items' => 'array[Item]',
      'terminal_id' => 'int',
      'table_id' => 'int',
      'revenue_center_id' => 'int',
      'card_payments' => 'array[CardPayment]',
      'device_id' => 'int'

    );

  /**
  * 
  */
  public $employee_id; // int
  /**
  * SubtleData User ID
  */
  public $user_id; // int
  /**
  * Number of people in party
  */
  public $number_of_people_in_party; // int
  /**
  * Custom ticket notes
  */
  public $ticket_notes; // string
  public $items; // array[Item]
  /**
  * Subtledata Terminal ID
  */
  public $terminal_id; // int
  /**
  * Table ID for the new ticket
  */
  public $table_id; // int
  /**
  * Subtledata Revenue Center ID
  */
  public $revenue_center_id; // int
  public $card_payments; // array[CardPayment]
  /**
  * Associated Device ID for user
  */
  public $device_id; // int
  }

