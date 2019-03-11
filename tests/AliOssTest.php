<?php

namespace ShaoZeMing\AliOss\Test;

use OSS\Core\OssException;
use PHPUnit\Framework\TestCase;
use ShaoZeMing\AliOss\Services\OSSService;


class AliOssTest extends TestCase
{
    protected $oss;


    public function setUp()
    {

        try {
            $this->oss = new OSSService();
        } catch (OssException $e) {
            $err = "Error : 错误：" . $e->getMessage();
            echo $err . PHP_EOL;
        }

    }


    public function testOssManager()
    {
        $this->assertInstanceOf(OSSService::class, $this->oss);
    }


    public function testPush()
    {
        echo PHP_EOL . "aliyun  Oss test 中...." . PHP_EOL;
        try {

            $result =  $this->oss->createBucket('mijia-xiaoming'); // 获取播放权限参数
            print_r($result);
            return $result;
        } catch (OssException $e) {
//
            $err = "Error : 错误：" . $e->getMessage();
            echo $err . PHP_EOL;

        } catch (\Exception $e) {
//
            $err = "Error : 错误：" . $e->getMessage();
            echo $err . PHP_EOL;

        }
    }
}
