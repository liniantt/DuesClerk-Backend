<?php

/**
* Constants class
* This class contains all the constants required by all project files
*
* @author David Kariuki (dk)
* @copyright Copyright (c) 2020 - 2021 David Kariuki (dk) All Rights Reserved.
*/

// Namespace declaration
namespace duesclerk\configs;

// Enable error reporting
error_reporting(1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL|E_NOTICE|E_STRICT);


// Website and domain details
define("PROTOCOL",                              "https://");
define("SUB_DOMAIN",                            "www.");
define("ROOT_DOMAIN",                           "duesclerk.com");
define("ROOT_DOMAIN_WITH_SUB_DOMAIN",           SUB_DOMAIN . ROOT_DOMAIN);
define("WEBSITE_URL",                           PROTOCOL . ROOT_DOMAIN_WITH_SUB_DOMAIN);
define("COMPANY_NAME",                          "DuesClerk");


// Table Names
define("TABLE_USERS",                           "Users");
define("TABLE_EMAIL_VERIFICATION",              "EmailVerification");
define("TABLE_USER_LOGS",                       "UserLogs");
define("TABLE_COUNTRIES",                       "Countries");
define("TABLE_CONTACTS",                        "Contacts");


/**
* Table users fields
*/
define("FIELD_USER_ID",                         "UserId");
define("FIELD_FIRST_NAME",                      "FirstName");
define("FIELD_LAST_NAME",                       "LastName");
define("FIELD_EMAIL_ADDRESS",                   "EmailAddress");
define("FIELD_COUNTRY_ID",                      "CountryId");
define("FIELD_COUNTRY_NAME",                    "CountryName");
define("FIELD_COUNTRY_CODE",                    "CountryCode");
define("FIELD_COUNTRY_ALPHA2",                  "CountryAlpha2");
define("FIELD_COUNTRY_ALPHA3",                  "CountryAlpha3");
define("FIELD_COUNTRY_FLAG",                    "CountryFlag");
define("FIELD_HASH",                            "Hash");
define("FIELD_BUSINESS_NAME",                   "BusinessName");
define("FIELD_ACCOUNT_TYPE",                    "AccountType");
define("FIELD_SIGN_UP_DATE_TIME",               "SignUpDateTime");
define("FIELD_EMAIL_VERIFIED",                  "EmailVerified");
define("FIELD_UPDATE_DATE_TIME",                "UpdateDateTime");


/**
* Table email verification fields
*/
define("FIELD_VERIFICATION_ID",                 "VerificationType");
define("FIELD_VERIFICATION_CODE",               "VerificationType");
define("FIELD_VERIFICATION_TYPE",               "VerificationType");
define("FIELD_VERIFICATION_CODE_REQUEST_TIME",  "VerificationCodeRequestTime");


/**
* Table logs fields
*/
define("FIELD_USER_LOG_ID",                     "UserLogId");
define("FIELD_USER_LOG_TYPE",                   "UserLogType");
define("FIELD_USER_LOG_TIME",                   "UserLogTime");


/**
* Table contacts fields
*/
define("FIELD_CONTACTS_ID",                      "ContactsId");
define("FIELD_CONTACTS_FULL_NAME",               "ContactsFullName");
define("FIELD_CONTACTS_PHONE_NUMBER",            "ContactsPhoneNumber");
define("FIELD_CONTACTS_EMAIL_ADDRESS",           "ContactsEmailAddress");
define("FIELD_CONTACTS_ADDRESS",                 "ContactsAddress");
define("FIELD_CONTACTS_TYPE",                    "ContactsType");


/**
* Table field lengths
*/
define("LENGTH_MIN_SINGLE_NAME",                1);
define("LENGTH_MIN_PASSWORD",                   8);
define("LENGTH_MAX_EMAIL_ADDRESS",              320);
define("LENGTH_TABLE_IDS_SHORT",                20);
define("LENGTH_TABLE_IDS_LONG",                 40);
define("LENGTH_VERIFICATION_CODE",              6);


// User account keys
define("FIELD_PASSWORD",                        "Password");
define("FIELD_NEW_PASSWORD",                    "NewPassword");
define("FIELD_NEW_ACCOUNT_TYPE",                "NewAccountType");
define("KEY_ACCOUNT_TYPE_PERSONAL",             "AccountTypePersonal");
define("KEY_ACCOUNT_TYPE_BUSINESS",             "AccountTypeBusiness");
define("KEY_USER",                              "User");
define("KEY_UPDATE_PROFILE",                    "UpdateProfile");
define("KEY_SIGN_UP",                           "SignUp");
define("KEY_SIGN_IN",                           "SignIn");


// Email verification keys
define("KEY_VERIFICATION_TYPE_EMAIL_ACCOUNT",   "VerificationEmailAccount");
define("KEY_VERIFICATION_TYPE_PASSWORD_RESET",  "VerificationPasswordReset");
define("KEY_VERIFICATION_CODE_EXPIRY_TIME",     1); // 1 hour
define("KEY_EMAIL_VERIFICATION",                "EmailVerification");
define("KEY_SEND_VERIFICATION_CODE",            "SendVerificationCode");


// Contact keys
define("KEY_CONTACT",                           "Contact");
define("KEY_CONTACTS",                          "Contacts");
define("KEY_CONTACT_TYPE_PEOPLE_I_OWE",         "ContactTypePeopleIOwe");
define("KEY_CONTACT_TYPE_PEOPLE_OWING_ME",      "ContactTypePeopleOwingMe");


// Country keys
define("KEY_COUNTRY",                           "Country");
define("KEY_COUNTRY_DATA",                      "CountryData");


// Error, error message and success message keys
define("KEY_ERROR",                             "Error");
define("KEY_ERROR_MESSAGE",                     "ErrorMessage");
define("KEY_SUCCESS_MESSAGE",                   "SuccessMessage");


// Password reset
define("KEY_PASSWORD_RESET",                    "PasswordReset");


// Expressions (preg match)
define("EXPRESSION_NAMES",                      "/^[A-Za-z .'-]+$/");



// Logs keys
define("LOG_TYPE_SIGN_UP",                      "LogTypeSignUp");
define("LOG_TYPE_SIGN_IN",                      "LogTypeSignIn");
define("LOG_TYPE_SIGN_OUT",                     "LogTypeSignOut");
define("LOG_TYPE_UPDATE_PROFILE",               "LogTypeUpdateProfile");
define("LOG_TYPE_UPDATE_PASSWORD",              "LogTypeUpdatePassword");
define("LOG_TYPE_SWITCH_ACCOUNT_TYPE",          "LogTypeSwitchAccountType");


// Date formats
define("FORMAT_DATE_TIME_FULL",                 "l d, F Y H:i:s");
define("FORMAT_DATE_TIME_NUMERICAL",            "m/d/Y h:i:s a");

// File types
define("FILE_TYPE_PNG",                         ".png");


/**
* Class declaration for autoloaer visibility and
* to get constants value when calling the constant in between quotes
*/
class Constants
{

    /**
    * Class constructor
    */
    function __construct()
    {

    }


    /**
    * Class destructor
    */
    function __destruct()
    {

    }


    /**
    * Function to return constant value within SQL statements
    *
    * @param constant - Constants value
    */
    public function valueOfConst($constant)
    {

        if (!empty($constant)) {
            // Constant not empty

            return $constant; // Return constant

        } else {
            // Constant empty

            // Throw exception
            throw new Exception(
                'Method '.__METHOD__.' failed : The required constant is null or undefined'
            );
        }
    }
}

// EOF: Constants.php
