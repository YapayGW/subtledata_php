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
class Location {

  static $swaggerTypes = array(
      'cross_streets' => 'string',
      'receipt_number_instructions' => 'string',
      'employee_request_through_app' => 'bool',
      'menu_ordering_available' => 'bool',
      'payment_via_credit_card_available_message' => 'string',
      'postal_code' => 'string',
      'location_id' => 'int',
      'app_specials' => 'bool',
      'user_rating' => 'string',
      'location_name' => 'string',
      'tender_types' => 'array[TenderType]',
      'process_new_credit_cards' => 'bool',
      'table_number_instructions' => 'string',
      'state' => 'string',
      'color_theme' => 'int',
      'latitude' => 'float',
      'logo_url' => 'string',
      'website_url' => 'string',
      'revenue_centers' => 'array[RevenueCenter]',
      'city' => 'string',
      'ordering_available_message' => 'string',
      'phone' => 'string',
      'terminals' => 'array[Terminal]',
      'location_picture_url' => 'string',
      'favorites_ordering_available' => 'bool',
      'neighborhood_name' => 'string',
      'discount_types' => 'array[DiscountType]',
      'longitude' => 'float',
      'price_rating' => 'int',
      'process_pre_authed_cards' => 'bool',
      'address_line_2' => 'string',
      'address_line_1' => 'string'

    );

  /**
  * Cross Streets
  */
  public $cross_streets; // string
  /**
  * Receipt number instructions
  */
  public $receipt_number_instructions; // string
  /**
  * Request for help throguh the app
  */
  public $employee_request_through_app; // bool
  /**
  * Menu Available
  */
  public $menu_ordering_available; // bool
  /**
  * Payment via credit card available message
  */
  public $payment_via_credit_card_available_message; // string
  /**
  * Address Postal Code
  */
  public $postal_code; // string
  /**
  * Location ID
  */
  public $location_id; // int
  /**
  * Specials available through app
  */
  public $app_specials; // bool
  /**
  * User Rating
  */
  public $user_rating; // string
  /**
  * Location Name
  */
  public $location_name; // string
  public $tender_types; // array[TenderType]
  /**
  * Process New Credit Cards
  */
  public $process_new_credit_cards; // bool
  /**
  * Table number instructions
  */
  public $table_number_instructions; // string
  /**
  * Address State
  */
  public $state; // string
  /**
  * Color Theme
  */
  public $color_theme; // int
  /**
  * Location Latitude
  */
  public $latitude; // float
  /**
  * Logo URL
  */
  public $logo_url; // string
  /**
  * Website URL
  */
  public $website_url; // string
  public $revenue_centers; // array[RevenueCenter]
  /**
  * Address City
  */
  public $city; // string
  /**
  * Ordering available message
  */
  public $ordering_available_message; // string
  /**
  * Phone Number
  */
  public $phone; // string
  public $terminals; // array[Terminal]
  /**
  * Location Picture URL
  */
  public $location_picture_url; // string
  /**
  * Favorites available for ordering
  */
  public $favorites_ordering_available; // bool
  /**
  * Neighborhood Name
  */
  public $neighborhood_name; // string
  public $discount_types; // array[DiscountType]
  /**
  * Location Longitude
  */
  public $longitude; // float
  /**
  * Price Rating
  */
  public $price_rating; // int
  /**
  * Process Pre Authed Credit Cards
  */
  public $process_pre_authed_cards; // bool
  /**
  * Address Line 2
  */
  public $address_line_2; // string
  /**
  * Address Line 1
  */
  public $address_line_1; // string
  }

