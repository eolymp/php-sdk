<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/l10n/translation_pair.proto

namespace Eolymp\L10n;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.l10n.TranslationPair</code>
 */
class TranslationPair extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.l10n.Term term = 1;</code>
     */
    protected $term = null;
    /**
     * Generated from protobuf field <code>.eolymp.l10n.Translation source = 2;</code>
     */
    protected $source = null;
    /**
     * Generated from protobuf field <code>.eolymp.l10n.Translation translation = 3;</code>
     */
    protected $translation = null;
    /**
     * Generated from protobuf field <code>.eolymp.l10n.Translation suggestion = 4;</code>
     */
    protected $suggestion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\L10n\Term $term
     *     @type \Eolymp\L10n\Translation $source
     *     @type \Eolymp\L10n\Translation $translation
     *     @type \Eolymp\L10n\Translation $suggestion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\L10N\TranslationPair::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.l10n.Term term = 1;</code>
     * @return \Eolymp\L10n\Term
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Generated from protobuf field <code>.eolymp.l10n.Term term = 1;</code>
     * @param \Eolymp\L10n\Term $var
     * @return $this
     */
    public function setTerm($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\L10n\Term::class);
        $this->term = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.l10n.Translation source = 2;</code>
     * @return \Eolymp\L10n\Translation
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>.eolymp.l10n.Translation source = 2;</code>
     * @param \Eolymp\L10n\Translation $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\L10n\Translation::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.l10n.Translation translation = 3;</code>
     * @return \Eolymp\L10n\Translation
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Generated from protobuf field <code>.eolymp.l10n.Translation translation = 3;</code>
     * @param \Eolymp\L10n\Translation $var
     * @return $this
     */
    public function setTranslation($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\L10n\Translation::class);
        $this->translation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.l10n.Translation suggestion = 4;</code>
     * @return \Eolymp\L10n\Translation
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }

    /**
     * Generated from protobuf field <code>.eolymp.l10n.Translation suggestion = 4;</code>
     * @param \Eolymp\L10n\Translation $var
     * @return $this
     */
    public function setSuggestion($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\L10n\Translation::class);
        $this->suggestion = $var;

        return $this;
    }

}
