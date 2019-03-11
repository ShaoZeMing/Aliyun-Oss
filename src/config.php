<?php
/**
 * Created by PhpStorm.
 * User: shaozeming
 * Date: 2019/3/9
 * Time: 11:57 AM
 */

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
