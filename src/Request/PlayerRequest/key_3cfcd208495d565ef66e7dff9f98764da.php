<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: request.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>key_3cfcd208495d565ef66e7dff9f98764da</code>
 */
class key_3cfcd208495d565ef66e7dff9f98764da extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.key_29d4568c009d203ab10e33ea9953a0264 unknown1 = 2;</code>
     */
    protected $unknown1 = null;
    /**
     * Generated from protobuf field <code>fixed32 key3cfcd208495d565ef66e7dff9f98764da = 3;</code>
     */
    protected $key3cfcd208495d565ef66e7dff9f98764da = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \key_29d4568c009d203ab10e33ea9953a0264 $unknown1
     *     @type int $key3cfcd208495d565ef66e7dff9f98764da
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.key_29d4568c009d203ab10e33ea9953a0264 unknown1 = 2;</code>
     * @return \key_29d4568c009d203ab10e33ea9953a0264
     */
    public function getUnknown1()
    {
        return $this->unknown1;
    }

    /**
     * Generated from protobuf field <code>.key_29d4568c009d203ab10e33ea9953a0264 unknown1 = 2;</code>
     * @param \key_29d4568c009d203ab10e33ea9953a0264 $var
     * @return $this
     */
    public function setUnknown1($var)
    {
        GPBUtil::checkMessage($var, \key_29d4568c009d203ab10e33ea9953a0264::class);
        $this->unknown1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 key3cfcd208495d565ef66e7dff9f98764da = 3;</code>
     * @return int
     */
    public function getKey3Cfcd208495D565Ef66E7Dff9F98764Da()
    {
        return $this->key3cfcd208495d565ef66e7dff9f98764da;
    }

    /**
     * Generated from protobuf field <code>fixed32 key3cfcd208495d565ef66e7dff9f98764da = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setKey3Cfcd208495D565Ef66E7Dff9F98764Da($var)
    {
        GPBUtil::checkUint32($var);
        $this->key3cfcd208495d565ef66e7dff9f98764da = $var;

        return $this;
    }

}
