<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Api\V2010\Account;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class TokenTest extends HolodeckTestCase {
    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->api->v2010->accounts("ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                     ->tokens->create();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertRequest(new Request(
            'post',
            'https://api.twilio.com/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tokens.json'
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "Fri, 24 Jul 2015 18:43:58 +0000",
                "date_updated": "Fri, 24 Jul 2015 18:43:58 +0000",
                "ice_servers": [
                    {
                        "url": "stun:global.stun:3478?transport=udp"
                    },
                    {
                        "credential": "5SR2x8mZK1lTFJW3NVgLGw6UM9C0dja4jI/Hdw3xr+w=",
                        "url": "turn:global.turn:3478?transport=udp",
                        "username": "cda92e5006c7810494639fc466ecc80182cef8183fdf400f84c4126f3b59d0bb"
                    }
                ],
                "password": "5SR2x8mZK1lTFJW3NVgLGw6UM9C0dja4jI/Hdw3xr+w=",
                "ttl": "86400",
                "username": "cda92e5006c7810494639fc466ecc80182cef8183fdf400f84c4126f3b59d0bb"
            }
            '
        ));
        
        $actual = $this->twilio->api->v2010->accounts("ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                           ->tokens->create();
        
        $this->assertNotNull($actual);
    }
}