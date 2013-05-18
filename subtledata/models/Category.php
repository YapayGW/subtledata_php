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
class Category {

  static $swaggerTypes = array(
      'items' => 'array[Item]',
      'has_items' => 'bool',
      'instructional_text' => 'string',
      'category_images' => 'array[CategoryImage]',
      'category_id' => 'int',
      'has_subcategories' => 'bool',
      'category_name' => 'string'

    );

  public $items; // array[Item]
  /**
  * Category has items
  */
  public $has_items; // bool
  /**
  * Instructional Text
  */
  public $instructional_text; // string
  public $category_images; // array[CategoryImage]
  /**
  * Category ID
  */
  public $category_id; // int
  /**
  * Category has subcategories
  */
  public $has_subcategories; // bool
  /**
  * Category Name
  */
  public $category_name; // string
  }
