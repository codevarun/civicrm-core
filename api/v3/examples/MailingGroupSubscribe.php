<?php
/**
 * Test Generated example of using mailing_group subscribe API
 * *
 */
function mailing_group_subscribe_example(){
$params = array(
  'email' => 'test@test.test',
  'group_id' => 2,
  'contact_id' => 3,
  'hash' => 'b15de8b64e2cec34',
  'time_stamp' => '20101212121212',
);

try{
  $result = civicrm_api3('mailing_group', 'subscribe', $params);
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
function mailing_group_subscribe_expectedresult(){

  $expectedResult = array(
  'is_error' => 0,
  'version' => 3,
  'count' => 4,
  'values' => array(
      'contact_id' => '3',
      'subscribe_id' => '1',
      'hash' => 'bf4d724dbbb38c0c',
      'is_error' => 0,
    ),
);

  return $expectedResult;
}


/*
* This example has been generated from the API test suite. The test that created it is called
*
* testMailerGroupSubscribeGivenContactId and can be found in
* http://svn.civicrm.org/civicrm/trunk/tests/phpunit/CiviTest/api/v3/MailingGroupTest.php
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