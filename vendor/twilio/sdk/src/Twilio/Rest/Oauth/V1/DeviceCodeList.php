<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Oauth
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Oauth\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Serialize;


class DeviceCodeList extends ListResource
    {
    /**
     * Construct the DeviceCodeList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(
        Version $version
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        ];

        $this->uri = '/device/code';
    }

    /**
     * Create the DeviceCodeInstance
     *
     * @param string $clientSid A 34 character string that uniquely identifies this OAuth App.
     * @param string[] $scopes An Array of scopes for authorization request
     * @param array|Options $options Optional Arguments
     * @return DeviceCodeInstance Created DeviceCodeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $clientSid, array $scopes, array $options = []): DeviceCodeInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'ClientSid' =>
                $clientSid,
            'Scopes' =>
                Serialize::map($scopes,function ($e) { return $e; }),
            'Audiences' =>
                Serialize::map($options['audiences'], function ($e) { return $e; }),
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new DeviceCodeInstance(
            $this->version,
            $payload
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Oauth.V1.DeviceCodeList]';
    }
}
