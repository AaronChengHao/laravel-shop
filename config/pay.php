<?php

return [
    'alipay' => [
    'app_id' => '2016091400505700',
    'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAufEEf/zNiibUAXDSb+UCAGEgjT9QUxmcpW+o94ksgG46dHX4XAoNrqYrvAqblNQ7xorsPMXvjA6U9JaU3SWo8/Pym02IZXMaODB4XipbytLHRKAB/LrZlNFJjLq+X1nXucJaCQsdioikb8xW7ZUlZsJSeejIVDVeygfuaqf2hJMJehbi/5UoRe0DZbz6/8SoWWg0oX/a9mYsGTQTFHYRBKWCnryfBLr/2ArnPQHudUyXuykVNEkydI8CIu3PbDPz6G+VoUKOzuJ7dhjxTq7OPzTR/lO7r7OqKIs7i5nTgqZJMUxIN39gEPhDzjjRS1g5jvAMOnCC87Kbgli8KtvQkwIDAQAB',
    'private_key' => 'MIIEowIBAAKCAQEAufEEf/zNiibUAXDSb+UCAGEgjT9QUxmcpW+o94ksgG46dHX4XAoNrqYrvAqblNQ7xorsPMXvjA6U9JaU3SWo8/Pym02IZXMaODB4XipbytLHRKAB/LrZlNFJjLq+X1nXucJaCQsdioikb8xW7ZUlZsJSeejIVDVeygfuaqf2hJMJehbi/5UoRe0DZbz6/8SoWWg0oX/a9mYsGTQTFHYRBKWCnryfBLr/2ArnPQHudUyXuykVNEkydI8CIu3PbDPz6G+VoUKOzuJ7dhjxTq7OPzTR/lO7r7OqKIs7i5nTgqZJMUxIN39gEPhDzjjRS1g5jvAMOnCC87Kbgli8KtvQkwIDAQABAoIBAAH3V3nW/YFpebJuM/t063l/jW2Q7tOCINLrBFlhvPO6tqmGmdK3VH+1SB8b6ZtAR0WJMIhP+4F6of6YHQjdnhS+TqFvx3JzLiLL+Gnefsv9QJgsLPk0LJrTP7jaPKsbcxmGwZb45B4T5dE80up+OkAE7ARX/s5NJixyuwWrswKh2sQU0hFzNaPnsBFv7NknPuRuYR2xtQmikCts3P7CYCYJV8+2lBAc2W7OvwPpBtKP+1NUogazXAp98joxEzgs3IwDe8Eaqs6n/rFrZOYGVmSWu+ASaMQAY8CaT/PHp91wKeZhmsdHXAWoMv2nkq+ta18z9KdCSJlFDyneTLXSX/kCgYEA8EOwRX4JIJK5pBU7G39oKt/qY420NmwOBRsADmZpMcKWXjKR8r2+AxxDM5QJCHw6nkUOmDdPSF9DCfFbxHPKJ9VKzmslNPp3eJm6T/IJ2EXXiGuShAoOTa6E5NStg42TqHJ4aQXd9ZZe7+XWMVViDWMrA/cmhQTfr2VZQK9kLaUCgYEAxh6KwxXyUqXH4miFdjDnXu7c7ARYfISUzrVq56LUwY2bNElMXy9g5TfVzgPUy4b+zn6dfxTYZMgYWyTmHbe8pbPTOYLLvo8K1gJi8huKlBusK1p/5GDg7Umbvnv2auOzMhdMnAEv5XxdPok9ME6UoWm1kfkPrZEe3EFl9tHgn9cCgYA9Ky58crsGJPTIVnNm68fsand1AwWneVkUaaxY/i+38G9x6fQIVdBDYHWncv/dvir6UmCF1kcECOS7akxPtp74BzB1Xwfo9f9mn9S0N83T1uwpmiGCJkE/+7dvvsmyHWBDWWlYa5r3xGHFN8GRa8h72gyAhPK0mOoN8IKJml2p1QKBgQCtaMBGP2hp5MdPKfNfXzC1DFf8kVUuMBHb2DkpZIHapGqr2lhpnBuwpi2S9BGGz7Mp5PNP71v04ptG88YjTtZlJ0ADv7M8KRHv/gjDJ04lkw8gp0b4C7/0khArK2+lYYZQmsooZnWY5UDsYs1XAgDgQ5l0mk6ZukMLwIZSAqQc4wKBgAK7RZ7MGVlGsm1DjDY5AKs7m/n4XtlbAbAIKtsMH1DcO0jHXgYkipQpwaqHQQVd6PKODsRbzv7xvoTDNjNlKilP5dBETF01pwgWmjrqIrmRqVCXXskQKF9zZ9nxGAdcz76nwUQww4ru3LQ5VVkRS64YfR2/zWtvdla5BeRB7Oty',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],



];
