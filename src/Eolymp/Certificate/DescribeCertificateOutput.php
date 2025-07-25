<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/certificate/certificate_service.proto

namespace Eolymp\Certificate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.certificate.DescribeCertificateOutput</code>
 */
class DescribeCertificateOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.certificate.Certificate certificate = 1;</code>
     */
    protected $certificate = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Certificate\Certificate $certificate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Certificate\CertificateService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.certificate.Certificate certificate = 1;</code>
     * @return \Eolymp\Certificate\Certificate|null
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    public function hasCertificate()
    {
        return isset($this->certificate);
    }

    public function clearCertificate()
    {
        unset($this->certificate);
    }

    /**
     * Generated from protobuf field <code>.eolymp.certificate.Certificate certificate = 1;</code>
     * @param \Eolymp\Certificate\Certificate $var
     * @return $this
     */
    public function setCertificate($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Certificate\Certificate::class);
        $this->certificate = $var;

        return $this;
    }

}

