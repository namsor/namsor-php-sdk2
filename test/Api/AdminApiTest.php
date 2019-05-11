<?php
/**
 * AdminApiTest
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NamSor API v2
 *
 * NamSor API v2 : enpoints to process personal names (gender, cultural origin or ethnicity) in all alphabets or languages. Use GET methods for small tests, but prefer POST methods for higher throughput (batch processing of up to 1000 names at a time). Need something you can't find here? We have many more features coming soon. Let us know, we'll do our best to add it!
 *
 * OpenAPI spec version: 2.0.2-beta
 * Contact: contact@namsor.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * AdminApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdminApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for addCredits
     *
     * Add usage credits to an API Key..
     *
     */
    public function testAddCredits()
    {
    }

    /**
     * Test case for apiUsage
     *
     * Print current API usage..
     *
     */
    public function testApiUsage()
    {
    }

    /**
     * Test case for apiUsageHistory
     *
     * Print historical API usage..
     *
     */
    public function testApiUsageHistory()
    {
    }

    /**
     * Test case for apiUsageHistoryAggregate
     *
     * Print historical API usage (in an aggregated view, by service, by day/hour/min)..
     *
     */
    public function testApiUsageHistoryAggregate()
    {
    }

    /**
     * Test case for availablePlans
     *
     * List all available plans in the user's preferred currency..
     *
     */
    public function testAvailablePlans()
    {
    }

    /**
     * Test case for availablePlans1
     *
     * List all available plans in the default currency (usd)..
     *
     */
    public function testAvailablePlans1()
    {
    }

    /**
     * Test case for availableServices
     *
     * List of API services and usage cost in Units (default is 1=ONE Unit)..
     *
     */
    public function testAvailableServices()
    {
    }

    /**
     * Test case for billingCurrencies
     *
     * List possible currency options for billing (USD, EUR, GBP, ...).
     *
     */
    public function testBillingCurrencies()
    {
    }

    /**
     * Test case for billingHistory
     *
     * Read the history billing information (invoices paid via Stripe or manually)..
     *
     */
    public function testBillingHistory()
    {
    }

    /**
     * Test case for billingInfo
     *
     * Read the billing information (company name, address, phone, vat ID).
     *
     */
    public function testBillingInfo()
    {
    }

    /**
     * Test case for charge
     *
     * Create a Stripe Customer, based on a payment card token (from secure StripeJS) and email..
     *
     */
    public function testCharge()
    {
    }

    /**
     * Test case for corporateKey
     *
     * Setting an API Key to a corporate status..
     *
     */
    public function testCorporateKey()
    {
    }

    /**
     * Test case for debugLevel
     *
     * Update debug level for a classifier.
     *
     */
    public function testDebugLevel()
    {
    }

    /**
     * Test case for flush
     *
     * Flush counters..
     *
     */
    public function testFlush()
    {
    }

    /**
     * Test case for invalidateCache
     *
     * Invalidate system caches..
     *
     */
    public function testInvalidateCache()
    {
    }

    /**
     * Test case for learnable
     *
     * Activate/deactivate learning from a source..
     *
     */
    public function testLearnable()
    {
    }

    /**
     * Test case for namsorCounter
     *
     * Get the overall API counter.
     *
     */
    public function testNamsorCounter()
    {
    }

    /**
     * Test case for paymentInfo
     *
     * Get the Stripe payment information associated with the current google auth session token..
     *
     */
    public function testPaymentInfo()
    {
    }

    /**
     * Test case for procureKey
     *
     * Procure an API Key (sent via Email), based on an auth token. Keep your API Key secret..
     *
     */
    public function testProcureKey()
    {
    }

    /**
     * Test case for redeployUI
     *
     * Redeploy UI from current dev branch..
     *
     */
    public function testRedeployUI()
    {
    }

    /**
     * Test case for redeployUI1
     *
     * Redeploy UI from current dev branch..
     *
     */
    public function testRedeployUI1()
    {
    }

    /**
     * Test case for removeUserAccount
     *
     * Subscribe to a give API plan, using the user's preferred or default currency..
     *
     */
    public function testRemoveUserAccount()
    {
    }

    /**
     * Test case for shutdown
     *
     * Stop learning and shutdown system..
     *
     */
    public function testShutdown()
    {
    }

    /**
     * Test case for softwareVersion
     *
     * Get the current software version.
     *
     */
    public function testSoftwareVersion()
    {
    }

    /**
     * Test case for sourceStats
     *
     * Print basic source statistics..
     *
     */
    public function testSourceStats()
    {
    }

    /**
     * Test case for stats
     *
     * Print basic system statistics..
     *
     */
    public function testStats()
    {
    }

    /**
     * Test case for stripeConnect
     *
     * Connects a Stripe Account..
     *
     */
    public function testStripeConnect()
    {
    }

    /**
     * Test case for subscribePlan
     *
     * Subscribe to a give API plan, using the user's preferred or default currency..
     *
     */
    public function testSubscribePlan()
    {
    }

    /**
     * Test case for updateBillingInfo
     *
     * Sets or update the billing information (company name, address, phone, vat ID).
     *
     */
    public function testUpdateBillingInfo()
    {
    }

    /**
     * Test case for updateLimit
     *
     * Modifies the hard/soft limit on the API plan's overages (default is 0$ soft limit)..
     *
     */
    public function testUpdateLimit()
    {
    }

    /**
     * Test case for updatePaymentDefault
     *
     * Update the default Stripe card associated with the current google auth session token..
     *
     */
    public function testUpdatePaymentDefault()
    {
    }

    /**
     * Test case for userInfo
     *
     * Get the user profile associated with the current google auth session token..
     *
     */
    public function testUserInfo()
    {
    }

    /**
     * Test case for verifyEmail
     *
     * Verifies an email, based on token sent to that email.
     *
     */
    public function testVerifyEmail()
    {
    }

    /**
     * Test case for verifyRemoveEmail
     *
     * Verifies an email, based on token sent to that email.
     *
     */
    public function testVerifyRemoveEmail()
    {
    }

    /**
     * Test case for vet
     *
     * Vetting of a source..
     *
     */
    public function testVet()
    {
    }
}