<?php
/**
 * JapaneseApiTest
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
 * NamSor API v2 : enpoints to process personal names (gender, cultural origin or ethnicity) in all alphabets or languages. Use GET methods for small tests, but prefer POST methods for higher throughput (batch processing of up to 100 names at a time). Need something you can't find here? We have many more features coming soon. Let us know, we'll do our best to add it!
 *
 * OpenAPI spec version: 2.0.10
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
 * JapaneseApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JapaneseApiTest extends TestCase
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
     * Test case for genderJapaneseNameFull
     *
     * Infer the likely gender of a Japanese full name ex. 王晓明.
     *
     */
    public function testGenderJapaneseNameFull()
    {
    }

    /**
     * Test case for genderJapaneseNameFullBatch
     *
     * Infer the likely gender of up to 100 full names.
     *
     */
    public function testGenderJapaneseNameFullBatch()
    {
    }

    /**
     * Test case for genderJapaneseNamePinyin
     *
     * Infer the likely gender of a Japanese name in LATIN (Pinyin)..
     *
     */
    public function testGenderJapaneseNamePinyin()
    {
    }

    /**
     * Test case for genderJapaneseNamePinyinBatch
     *
     * Infer the likely gender of up to 100 Japanese names in LATIN (Pinyin)..
     *
     */
    public function testGenderJapaneseNamePinyinBatch()
    {
    }

    /**
     * Test case for japaneseNameKanjiCandidates
     *
     * Identify japanese name candidates in KANJI, based on the romanized name ex. Yamamoto Sanae.
     *
     */
    public function testJapaneseNameKanjiCandidates()
    {
    }

    /**
     * Test case for japaneseNameKanjiCandidatesBatch
     *
     * Identify japanese name candidates in KANJI, based on the romanized name (firstName = japaneseGivenName; lastName=japaneseSurname), ex. Yamamoto Sanae.
     *
     */
    public function testJapaneseNameKanjiCandidatesBatch()
    {
    }

    /**
     * Test case for japaneseNameLatinCandidates
     *
     * Romanize japanese name, based on the name in Kanji..
     *
     */
    public function testJapaneseNameLatinCandidates()
    {
    }

    /**
     * Test case for japaneseNameLatinCandidatesBatch
     *
     * Romanize japanese names, based on the name in KANJI.
     *
     */
    public function testJapaneseNameLatinCandidatesBatch()
    {
    }

    /**
     * Test case for japaneseNameMatch
     *
     * Return a score for matching Japanese name in KANJI ex. 山本 早苗 with a romanized name ex. Yamamoto Sanae.
     *
     */
    public function testJapaneseNameMatch()
    {
    }

    /**
     * Test case for japaneseNameMatchBatch
     *
     * Return a score for matching a list of Japanese names in KANJI ex. 山本 早苗 with romanized names ex. Yamamoto Sanae.
     *
     */
    public function testJapaneseNameMatchBatch()
    {
    }

    /**
     * Test case for japaneseNameMatchFeedbackLoop
     *
     * [CREDITS 1 UNIT] Feedback loop to better perform matching Japanese name in KANJI ex. 山本 早苗 with a romanized name ex. Yamamoto Sanae.
     *
     */
    public function testJapaneseNameMatchFeedbackLoop()
    {
    }

    /**
     * Test case for parseJapaneseName
     *
     * Infer the likely first/last name structure of a name, ex. 山本 早苗 or Yamamoto Sanae.
     *
     */
    public function testParseJapaneseName()
    {
    }

    /**
     * Test case for parseJapaneseNameBatch
     *
     * Infer the likely first/last name structure of a name, ex. 山本 早苗 or Yamamoto Sanae.
     *
     */
    public function testParseJapaneseNameBatch()
    {
    }
}
