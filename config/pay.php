<?php

return [
    'alipay' => [
        'app_id'         => '2016092200570199',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsYJJMeQs9spc02QRDGlRTUtWmbmliUFxG3jqLbHJniw+Hw70i30LRSR4tjhsP62mHh8LAB7eq4mixcRTuVuIP8ZDj+wxPs1uxxCsB/XSqN2ZJ+v6wys3G0rkid4VO63YU/vUu2gR0xMZnaaBCmhAPYcOVgYBfNVK7ETLMU6e148xJL194xBxJg3FBVvn3ZDSSaMmlQMDhQrSWafpWHr5XMyBZPinD0yE7bVt1kCwkl/1LZsJ6z9ZKS7E4WjoSvS3v8pAijKtZcgIC9JFEpwj1rYYczLjU4wfoOIlb4X1jhw61+csOO6A8wqcjU+QCQkTrIb0vM4pWhKyi0VHm3zsAwIDAQAB',
        'private_key'    => 'MIIEpgIBAAKCAQEA4DS7VIDQPYNz5uY/fRChMmMZKEZMMTSNhASRAdhX0xqV4fiDoQ5buq+5AhjMdcNqgo6db/P9seJsO3ZqE/gaDudr8OGFq1/Kc146Ld6mijeqRnyuCxV4XD9o0ACZbdexc8iGpXavf6tvJqiVulSwRpsTWongFsFslJGtOOWXWNpl4nhSdhhPux4fFn4wdVOzuwNtKBKjOpx4XpOF5AQOGG2V8mhJQhHDqK6fDvMOwPpFs0qGun6/S/Fxc6qpqMOFJKNQ6vGo3Gy9xz7NLrTGliwBPp//e0PiDKmjUO6u7S1KBpNJxDaYtixI2Kyh+DPUeWHtYnAgA+IAw5qgsXQAMwIDAQABAoIBAQDGi2vo5TmDf8k/jF5krjlRmZhJphcK6/L2GeUfsSn08/IO7jgCg+iPZdV8GeHV13uWqhyZa4QZ5tzZu38st+S7lgxsgAoTPPzXNXZn8GeitrC/QuINRrITXsO+jwlP0FaApe82z+eSM4p2vYv6OczweZul7brX6+nvlyHC5O4l63i0MxDDsZbX2//t8tD0gKjR+h6dKwX/rxkG8xm6N/lKTMV1ayHuZ3WFkW5RNk/yhmsRJ+W/M8RqzFuC3hMQ115shbmWK6EHaImdx3kCbKJCez4Ua0LV4fl8q7HJIb1TRHfT8K3beAycpHGxAEdNY6dUuzKT/m6mIRJ3TSDLmEIhAoGBAPxCeMJLEvSz4zdnMFMbMM2M0KZXa/ni/JiDXUxcyE1hXadFIkZwRejirZv1GEDSGGBuTqUdsM25xIXGr9x2hnCkv7JI6Vrx3MB8Sq2fS70gSAPqNCcTV2Lm0yhlKEnGud5xs3jJKjsKkIY/NyOAMrXcjAamOcbg0VzgOknYjTifAoGBAOOHxhd4KzD1QXg3t5f6X7+Lrp5ptRkfxpUtSst+OjPH2bZz5FFdZCjqSPu/1MPWQh7Bl4sf4G+7xvHItZwq8Ne3OIOsS8eGRAtPSg5UwO/8dNidF4bidZhVA2Q6FQZKWVQT4AmrvywNPzS3RN1+QUnW2zKXXeCSUCOc8UA04EvtAoGBAJliLZ0uGtuRmcHxS2/s45LIYYITPANYYnC1x4AMFnr+jfyMS9f6oneFhTyEHfgkB1BzIfzB/eRJZVZWRk5N/1b0xd64+LMkxy5/JMVHS702qLNAr+9mkkb/xTsVrxaU8CVyi0cRQk1eEhyeyX8bjzoHXVkZr53ey06mxKpsMwpPAoGBAI35pNP0Og88mnOnYLpGkwR05qsWjth0iXeAYZGE3FB/PgypWCilO+CEALKGSv9AbNXAOw2nAGb4JvWsJhaifNI+E9el5UtFLqRX/3/dxt55C3g23f1exb4eHhWmYIQiVIcwN7YRIyMbyPrd+Oy04YxvsytoZD3DTppKTgegdu0pAoGBAKmu1n7DZTGrFhOLcjLNkxwoUZk/UIct5HqXFT/PjM8fIypXzNSO+6XSj63KmD1T9gzJk7leJoeU2DBgsPixjfzFo2rBftp2giOrz6RlfC1z1fGc8vZb2l2wvZbYAzaz3PiBbQZZm5TD9DM4c0ZLqlSE7WGw54iRxmte8F+9dY3P',
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