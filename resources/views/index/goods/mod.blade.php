<?php
    $mongo = new MongoClient('mongodb://localhost:27017/shop1910');
    $db = $mongo->user;//选择数据库
    $collection = $db->friend;//选择文档集合
    $doc = [//定义一个文档，即一个数组
        'First Name' => 'Jet',
        'Last Name' => 'Wu',
        'Age' => 26,
        'Phone' => '110',
        'E-Mail' => [
            '123456@qq.com',
            '666666@sina.com',
            '8888888@qq.com',
            '77887788@qq.com'
        ]
    ];
    $res = $collection->insert($doc);//向集合中插入一个文档
    echo '<pre>';
    print_r($res);//$res['ok']=1表示插入成功