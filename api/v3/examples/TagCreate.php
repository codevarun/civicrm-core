<?php
/**
 * Test Generated example of using tag create API
 * *
 */
function tag_create_example(){
$params = array(
  'name' => 'Super Heros',
  'description' => 'Outside undie-wearers',
);

try{
  $result = civicrm_api3('tag', 'create', $params);
}
catch (CiviCRM_API3_Exception $e) {
  // handle error here
  $errorMessage = $e->getMessage();
  $errorCode = $e->getErrorCode();
  $errorData = $e->getExtraParams();
  return array('error' => $errorMessage, 'error_code' => $errorCode, 'error_data' => $errorData);
}

return $result;
}

/**
 * Function returns array of result expected from previous function
 */
function tag_create_expectedresult(){

  $expectedResult = array(
  'is_error' => 0,
  'version' => 3,
  'count' => 1,
  'id' => 12,
  'values' => array(
      '12' => array(
          'id' => '12',
          'name' => 'Super Heros',
          'description' => 'Outside undie-wearers',
          'parent_id' => '',
          'is_selectable' => '',
          'is_reserved' => '',
          'is_tagset' => '',
          'used_for' => 'civicrm_contact',
          'created_id' => '',
          'created_date' => '2013-07-28 05:52:14',
        ),
    ),
);

  return $expectedResult;
}


/*
* This example has been generated from the API test suite. The test that created it is called
*
* testCreate and can be found in
* http://svn.civicrm.org/civicrm/trunk/tests/phpunit/CiviTest/api/v3/TagTest.php
*
* You can see the outcome of the API tests at
* http://tests.dev.civicrm.org/trunk/results-api_v3
*
* To Learn about the API read
* http://book.civicrm.org/developer/current/techniques/api/
*
* and review the wiki at
* http://wiki.civicrm.org/confluence/display/CRMDOC/CiviCRM+Public+APIs
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/