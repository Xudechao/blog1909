<?php
return array (
    //应用ID,您的APPID。
    'app_id' => "2016101800717609",

    //商户私钥，您的原始格式RSA私钥
    'merchant_private_key' => "MIIEpAIBAAKCAQEAjdBSR0zsFOslsk1hAWV7rQ52T38pK0EA7SJ7sLDVbjUoXJEr3rDLtA2od1EKv3S9KDDeTqW2E3FwRmLGyGLpZjwZ85i++3XAAIs2YaObNNRiisLEHIhVaVQYdopcYaa6PEU8qQV8WLWgFX30ILf8WVOekgR9f/pPmH+VOfwjayArwUCADGMD+3bDlpaupbY35+mXx6vtK0UYFweGHl4G5/Tx6BhmShY5RMqLz/tB6maLjvgKyayMWYxIcsvCzTpGadSOWm62PRdhojWh+gcGL5JJpOV0tS/lPppCKGuk6an3PL/o2+m1DWKwRaKQ4xB/58MZuvH0UB1b6qMGsumarwIDAQABAoIBACdOh4+1tXXy22b5ZZrSex4zdP2B3HJduRkBRtFpoi7C0yYdItC9piiI5Jn1v4njnI5oRSX9bmMjPSB1Pm3KZLDula7cNotSTt6Xt4IGq/1PpOSbKWpTK4FfSsyIeySh5trPwgmDOL0J0o5CdAkhlfNYZwpH7lUrlyZIrp780QBe52w+L8uqon0mrhaS6F/VhbdmIt1afGD0uAQGQgWjfynolp66LeacLPYxbInS3DcuzdZFvi43QNh77VgXNDB6yljTQPP+5yUXpo/YR2tVUHDO+7PD7mT9bSMm33HW5B3EKXfrzHc4Z5odk2y2YSDCCFO89qIGaviqLz8E1Z+Y57kCgYEAzlKg0gJNsOyets6hQO3T+TksN2QlfDSOngk4w5ZCg6RF8KQQ2Jw5QoNaF0HQ98F8gyO233WVXfrZNgxqbYmB3hIh6drdvXMXDJi2DlAa7iZaRqboFx3jLSVBx3qnsqSv72CGYC3A786zltRjDRBcxcPdAomBSgGNfkDZX19cGXsCgYEAr/V4rxH7weq0/0bA+ZwCWul7SmH0tX3vIZTbfDkUnCWgbOAu5HBYkNuXLDK88PbiNgJEclDQmjMOe1KD8Q2sgFzOHO8Sio2sARsovvLtjHT0PsOmUyKVbF51LaZ5flSzWc9h2T/7UqzcX2kFQa64ZAVa5w0tkYCBaF0w4EUvO10CgYEAg1oRboHu6jNKPAHCoW6H5AOlBcKpJrDjFvOyArrXr61WpYQeAXk77v9mzKWnHwQ8e9Sx6QOXy1QXExTGcOP5HOMYWiRvxNvPkcJrLSOMcY9TK+W4nnb1mVk9znxk5RN5uoEOK48VZNaIeP7P7JI9Ld6rBqF6AR6J8RXiDZjNLp8CgYBh6YJCSQuCmIwnEMQJIZrd49ZLSb7Vz0HlueN4eHrTeMyQSR9O1oUx9j9kxMcGfxrZWuGjivzJEWgZj40D8cvvkbTPvOjgWH1CEE7YEm3FHr9avZwr3q6vItCpml04wwEaFKAqN8Qt+SqXnOTj68mHPsOalmao9I0N+e1cnqLtsQKBgQCHc3DWlzw5U7rFh1sE7BCsQMX2nlBZ0kQADMhRsiMS/6+UsQnidsaJ/s739FDLFtgZwZQ5djBlK6lUzG4IyRO7ewjz4Btf+DzAXgpAiNYwNWaTEygE81LbknmuNAMc4uhtFSfKVpSLhDH3y+YNsGefF7Y9twbf3Wiy7FgAK0eHaQ==",

    //异步通知地址
    'notify_url' => "http://工程公网访问地址/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",

    //同步跳转
    'return_url' => "http://www.blog.com/return_url",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAg4M2RgkXmqVY6PToVX1uM/vJ66Ohysu2qCritlbdsTXcbgHaMWPMS1wMYTvK3Z9d7CtlanHNiiUYmvjy4dBa+lgAkSNo/iHAu8ncAMdiAXKwsKX12xyMC3FvElo0LYULc4AlD7zYI1Ta3WUmUy5/PKqryv4aittOED366Yz/IwkBrLFGTgX33oqOIc5ZZASkSVJkcmFW6M6YpKX+yK5l5T2NBTn3bgLYmJYzdsI6/gLo5j6Mduj4jOLptFH+/vZPBIUTmBYd8H9H5e6X0Mx+84IvTLYgrTd16CTSSaZPhXsSgpFkCaRauMj1DhzsRJu911J3CHzEZORsTTzN3CjAvwIDAQAB",


);