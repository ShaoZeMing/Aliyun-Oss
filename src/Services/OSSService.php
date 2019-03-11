<?php

namespace ShaoZeMing\AliOss\Services;


use OSS\OssClient;

class OSSService extends OssClient
{


    /**
     *
     */
    public $config;
    /**
     * @var
     */
    public $accessKeyID;
    /**
     * @var
     */
    public $accessKeySecret;
    /**
     * @var
     */
    public $endpoint;
    /**
     * @var
     */
    public $isCName;

    /**
     * @var
     */
    public $bucket;
    /**
     * @var
     */
    public $isSsl;

    /**
     * @var
     */
    public $timeout;


    /**
     * OSSService constructor.
     * @param null $config
     * @param null $securityToken
     * @param null $requestProxy
     * @throws \OSS\Core\OssException
     */
    public function __construct($config = null, $securityToken = null, $requestProxy = null)
    {

        $this->setConfig($config);

        parent::__construct($this->accessKeyID, $this->accessKeySecret, $this->endpoint, $this->isCName, $securityToken, $requestProxy);

    }


    /**
     * User: ZeMing Shao
     * Email: szm19920426@gmail.com
     * @param $config
     */
    public function setConfig($config)
    {

        $this->config = $config ?: include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config.php';

        $this->accessKeyID = $this->config['oss']['AccessKeyID'];
        $this->accessKeySecret = $this->config['oss']['AccessKeySecret'];
        $this->endpoint = $this->config['oss']['endpoint'];
        $this->bucket = $this->config['oss']['bucket'];
        $this->isCName = $this->config['oss']['is_cname'];
        $this->isSsl = $this->config['oss']['is_ssl'];
        $this->timeout = $this->config['oss']['timeout'];
    }


}
