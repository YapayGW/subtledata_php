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
class TableDetails {

  static $swaggerTypes = array(
      'pos_table_id' => 'string',
      'subtledata_id' => 'int',
      'revenue_center_name' => 'string',
      'revenue_center_id' => 'int',
      'open_tickets' => 'array[OpenTicket]',
      'name' => 'string'

    );

  /**
  * Table Identifier
  */
  public $pos_table_id; // string
  /**
  * Table ID
  */
  public $subtledata_id; // int
  /**
  * Revenue Center Name
  */
  public $revenue_center_name; // string
  /**
  * Revenue Center ID
  */
  public $revenue_center_id; // int
  public $open_tickets; // array[OpenTicket]
  /**
  * Table Name
  */
  public $name; // string
  }

