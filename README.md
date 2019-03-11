# Aliyun Sts for PHP

---
[![](https://travis-ci.org/ShaoZeMing/Aliyun-Oss.svg?branch=master)](https://travis-ci.org/ShaoZeMing/Aliyun-Oss) 
[![](https://img.shields.io/packagist/v/ShaoZeMing/aliyun-oss.svg)](https://packagist.org/packages/shaozeming/aliyun-oss) 
[![](https://img.shields.io/packagist/dt/ShaoZeMing/aliyun-oss.svg)](https://packagist.org/packages/stichoza/shaozeming/aliyun-oss)

> 这个项目的功能就是获取sts token, 功能虽然很单一，但和其他项目都是低耦合，如果你想使用oss,vod，...请访问他的兄弟项目 


## 同胞兄弟

- [ShaoZeMing/aliyun-vod](https://github.com/ShaoZeMing/Aliyun-Vod) 阿里云点播
- [ShaoZeMing/aliyun-sts](https://github.com/ShaoZeMing/Aliyun-Sts) 阿里云STS
- [ShaoZeMing/aliyun-core](https://github.com/ShaoZeMing/Aliyun-Core) 阿里云接口Core核心包
- [ShaoZeMing/aliyun-oss](https://github.com/ShaoZeMing/Aliyun-Oss) 阿里云OSS
- 待续...

## Installing

```shell
$ composer require shaozeming/aliyun-oss -v
```

### configuration 

拷贝项目下`src/config.php`到你项目中，进行配置其中sts。

配置示例代码：

```php


return [

       /**
        * oss 配置
        */
       'oss' => [
           'AccessKeyID' => 'LT********cgJFsp',
           'AccessKeySecret' => 'fNcK*************d6Gn',
           'endpoint' => 'oss-cn-beijing.aliyuncs.com',
           'bucket' => 'miji***a365',  //
           'is_cname' => false,  // 是否使用自己绑定域名
           'is_ssl' => false,  // 是否使用https
           'timeout' => 3600,  // 授权访问默认时间
       ]
];


```

## Example

> - 由于官方提供了composer 包，本包只对配置文件进行统一整理，和其他几个项目共同配置，并继承了官方核心服务接口，你可以参考官方文档对应方法使用。
> - 对照官方文档地址：https://help.aliyun.com/document_detail/32101.html?spm=a2c4g.11174283.6.749.32877da2BkSiov



```php
use ShaoZeMing\AliOss\Services\OSSService;

 
    
           try {
                    $oss = new OSSService($config);
                    $result =  $oss->createBucket('shaozeming'); // 创建Bucket
                   
                   
                  //  $bucket= " <yourBucketName>";
                  //  $object = "<yourObjectName>";  
                  //  $content = "Hi, OSS.";
                  //  $result =  $oss->putObject($bucket,$object,$content); // 上传文件
                  //  .....
                    print_r($result);
                    return $result;
                } catch (OssException $e) {
                     $err = "Error : 错误：" . $e->getMessage();
                     echo $err . PHP_EOL;
                 } catch (\Exception $e) {
        //
                    $err = "Error : 错误：" . $e->getMessage();
                    echo $err . PHP_EOL;
        
                }
       


```

## License

MIT

