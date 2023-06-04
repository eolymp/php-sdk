<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/l10n/localization_service.proto

namespace Eolymp\L10n\ListTermsInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.l10n.ListTermsInput.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query = 100;</code>
     */
    protected $query = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString key = 2;</code>
     */
    private $key;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString message = 3;</code>
     */
    private $message;
    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 4;</code>
     */
    private $status;
    /**
     * Generated from protobuf field <code>repeated .eolymp.l10n.ListTermsInput.ExpressionTranslation translation = 5;</code>
     */
    private $translation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *     @type \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $id
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $key
     *     @type \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $message
     *     @type \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $status
     *     @type \Eolymp\L10n\ListTermsInput\ExpressionTranslation[]|\Google\Protobuf\Internal\RepeatedField $translation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\L10N\LocalizationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query = 100;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionID id = 1;</code>
     * @param \Eolymp\Wellknown\ExpressionID[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionID::class);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString key = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString key = 2;</code>
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKey($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->key = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString message = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionString message = 3;</code>
     * @param \Eolymp\Wellknown\ExpressionString[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessage($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionString::class);
        $this->message = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.wellknown.ExpressionEnum status = 4;</code>
     * @param \Eolymp\Wellknown\ExpressionEnum[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Wellknown\ExpressionEnum::class);
        $this->status = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.l10n.ListTermsInput.ExpressionTranslation translation = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.l10n.ListTermsInput.ExpressionTranslation translation = 5;</code>
     * @param \Eolymp\L10n\ListTermsInput\ExpressionTranslation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranslation($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\L10n\ListTermsInput\ExpressionTranslation::class);
        $this->translation = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Eolymp\L10n\ListTermsInput_Filter::class);
