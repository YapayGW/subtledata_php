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
class Item {

  static $swaggerTypes = array(
      'description' => 'string',
      'price' => 'float',
      'name' => 'string',
      'revenue_center_id' => 'int',
      'item_id' => 'int',
      'item_images' => 'array[ItemImage]'

    );

  /**
  * Item Description
  */
  public $description; // string
  /**
  * Item Price
  */
  public $price; // float
  /**
  * Item Name
  */
  public $name; // string
  /**
  * Revenue Center ID
  */
  public $revenue_center_id; // int
  /**
  * Item ID
  */
  public $item_id; // int
  public $item_images; // array[ItemImage]
  }
