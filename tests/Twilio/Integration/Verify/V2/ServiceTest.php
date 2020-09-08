<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Verify\V2;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class ServiceTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->verify->v2->services->create("friendly_name");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['FriendlyName' => "friendly_name", ];

        $this->assertRequest(new Request(
            'post',
            'https://verify.twilio.com/v2/Services',
            null,
            $values
        ));
    }

    public function testCreateRecordResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "name",
                "code_length": 4,
                "lookup_enabled": false,
                "psd2_enabled": false,
                "skip_sms_to_landlines": false,
                "dtmf_input_required": false,
                "tts_name": "name",
                "mailer_sid": "MDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "do_not_share_warning_enabled": false,
                "custom_code_enabled": true,
                "push": {
                    "include_date": true,
                    "notify_service_sid": null
                },
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "url": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "verification_checks": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/VerificationCheck",
                    "verifications": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Verifications",
                    "rate_limits": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RateLimits",
                    "messaging_configurations": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessagingConfigurations",
                    "entities": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Entities",
                    "webhooks": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks",
                    "access_tokens": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/AccessTokens"
                }
            }
            '
        ));

        $actual = $this->twilio->verify->v2->services->create("friendly_name");

        $this->assertNotNull($actual);
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->verify->v2->services("VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://verify.twilio.com/v2/Services/VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchRecordResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "name",
                "code_length": 4,
                "lookup_enabled": false,
                "psd2_enabled": false,
                "skip_sms_to_landlines": false,
                "dtmf_input_required": false,
                "tts_name": "name",
                "mailer_sid": "MDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "do_not_share_warning_enabled": false,
                "custom_code_enabled": true,
                "push": {
                    "include_date": true,
                    "notify_service_sid": null
                },
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "url": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "verification_checks": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/VerificationCheck",
                    "verifications": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Verifications",
                    "rate_limits": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RateLimits",
                    "messaging_configurations": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessagingConfigurations",
                    "entities": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Entities",
                    "webhooks": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks",
                    "access_tokens": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/AccessTokens"
                }
            }
            '
        ));

        $actual = $this->twilio->verify->v2->services("VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->verify->v2->services("VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://verify.twilio.com/v2/Services/VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->verify->v2->services("VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->verify->v2->services->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://verify.twilio.com/v2/Services'
        ));
    }

    public function testReadAllResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://verify.twilio.com/v2/Services?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "next_page_url": null,
                    "key": "services",
                    "url": "https://verify.twilio.com/v2/Services?PageSize=50&Page=0"
                },
                "services": [
                    {
                        "sid": "VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "friendly_name": "name",
                        "code_length": 4,
                        "lookup_enabled": false,
                        "psd2_enabled": false,
                        "skip_sms_to_landlines": false,
                        "dtmf_input_required": false,
                        "tts_name": "name",
                        "mailer_sid": "MDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "do_not_share_warning_enabled": false,
                        "custom_code_enabled": true,
                        "push": {
                            "include_date": true,
                            "notify_service_sid": null
                        },
                        "date_created": "2015-07-30T20:00:00Z",
                        "date_updated": "2015-07-30T20:00:00Z",
                        "url": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "links": {
                            "verification_checks": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/VerificationCheck",
                            "verifications": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Verifications",
                            "rate_limits": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RateLimits",
                            "messaging_configurations": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessagingConfigurations",
                            "entities": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Entities",
                            "webhooks": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks",
                            "access_tokens": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/AccessTokens"
                        }
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->verify->v2->services->read();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->verify->v2->services("VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://verify.twilio.com/v2/Services/VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateRecordResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "name",
                "code_length": 4,
                "lookup_enabled": false,
                "psd2_enabled": false,
                "skip_sms_to_landlines": false,
                "dtmf_input_required": false,
                "tts_name": "name",
                "mailer_sid": "MDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "do_not_share_warning_enabled": false,
                "custom_code_enabled": true,
                "push": {
                    "include_date": true,
                    "notify_service_sid": null
                },
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "url": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "verification_checks": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/VerificationCheck",
                    "verifications": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Verifications",
                    "rate_limits": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/RateLimits",
                    "messaging_configurations": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessagingConfigurations",
                    "entities": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Entities",
                    "webhooks": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Webhooks",
                    "access_tokens": "https://verify.twilio.com/v2/Services/VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/AccessTokens"
                }
            }
            '
        ));

        $actual = $this->twilio->verify->v2->services("VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }
}