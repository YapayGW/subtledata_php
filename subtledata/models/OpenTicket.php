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
class OpenTicket {

  static $swaggerTypes = array(
      'employee_id' => 'int',
      'user_id' => 'int',
      'number_of_guests' => 'int',
      'items' => 'array[Item]',
      'tax' => 'float',
      'discount' => 'float',
      'pos_ticket_id' => 'int',
      'remaining_balance' => 'float',
      'table_id' => 'int',
      'ticket_id' => 'int',
      'date_opened' => 'string',
      'table_name' => 'string',
      'total' => 'float',
      'subtotal' => 'float',
      'service_charge' => 'float'

    );

  /**
  * Employee ID
  */
  public $employee_id; // int
  /**
  * User ID
  */
  public $user_id; // int
  /**
  * Number of guests on ticket
  */
  public $number_of_guests; // int
  public $items; // array[Item]
  /**
  * Tax amount
  */
  public $tax; // float
  /**
  * Discount amount
  */
  public $discount; // float
  /**
  * POS System Ticket Identifier
  */
  public $pos_ticket_id; // int
  /**
  * Ticket remaining balance
  */
  public $remaining_balance; // float
  /**
  * Table ID
  */
  public $table_id; // int
  /**
  * Ticket ID
  */
  public $ticket_id; // int
  /**
  * Date/Time Ticket Opened
  */
  public $date_opened; // string
  /**
  * Table Name
  */
  public $table_name; // string
  /**
  * Total amount
  */
  public $total; // float
  /**
  * Subtotal amount
  */
  public $subtotal; // float
  /**
  * Service charge
  */
  public $service_charge; // float
  }
