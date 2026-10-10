<?php

return [
    'checkout' => [
        'cart' => [
            'integrity' => [
                'qty-missing' => '至少一個產品的數量應大於1。',
            ],

            'invalid-file-extension' => '找到無效的文件擴展名。',
            'inventory-warning' => '所請求的數量不可用，請稍後重試。',
            'missing-links' => '此產品缺少可下載的鏈接。',
            'missing-options' => '此產品缺少選項。',
            'selected-products-simple' => '所選產品應為簡單類型。',
        ],
    ],

    'datagrid' => [
        'copy-of-slug' => '的副本-:value',
        'copy-of' => ':value的副本',
        'variant-already-exist-message' => '具有相同屬性選項的變體已經存在。',
    ],

    'response' => [
        'product-can-not-be-copied' => '類型為:type的產品無法複製',
    ],

    'sort-by' => [
        'options' => [
            'cheapest-first' => '最便宜的先',
            'expensive-first' => '最貴的先',
            'from-a-z' => '從A到Z',
            'from-z-a' => '從Z到A',
            'latest-first' => '最新的先',
            'oldest-first' => '最舊的先',
        ],
    ],

    'type' => [
        'abstract' => [
            'offers' => '每個:qty以:price購買，每個節省:discount',
        ],

        'bundle' => '捆綁銷售',
        'booking' => '預訂',
        'configurable' => '可配置的',
        'downloadable' => '可下載的',
        'grouped' => '分組的',
        'simple' => '簡單的',
        'virtual' => '虛擬的',
    ],
];
