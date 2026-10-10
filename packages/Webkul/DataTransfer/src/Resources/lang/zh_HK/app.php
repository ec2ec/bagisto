<?php

return [
    'importers' => [
        'customers' => [
            'title' => '顧客',

            'validation' => [
                'errors' => [
                    'duplicate-email' => '電子郵件: \'%s\' 在導入文件中出現了多次。',
                    'duplicate-phone' => '電話: \'%s\' 在導入文件中出現了多次。',
                    'email-not-found' => '電子郵件: \'%s\' 在系統中未找到。',
                    'invalid-customer-group' => '客户組無效或不受支持。',
                ],
            ],
        ],

        'products' => [
            'title' => '產品',

            'validation' => [
                'errors' => [
                    'duplicate-url-key' => 'URL 鍵: \'%s\' 已經為 SKU: \'%s\' 生成。',
                    'image-not-file' => '圖片：\'%s\' 是網址，但此導入設置為從文件中獲取圖片。請將圖片來源選為“文件中的圖片鏈接”，或將該值替換為文件名。',
                    'image-not-found' => '圖片：\'%s\' 未在此導入期望存放圖片的位置找到。',
                    'image-not-url' => '圖片：\'%s\' 不是網址，但此導入設置為從文件中的鏈接獲取圖片。請選擇其他圖片來源，或將該值替換為完整的 https:// 地址。',
                    'invalid-attribute-family' => '屬性家族列中的值無效或不受支持。',
                    'invalid-type' => '產品類型無效或不受支持。',
                    'sku-not-found' => '未找到具有指定 SKU 的產品。',
                    'super-attribute-not-found' => '未找到代碼為\'%s\'的超級屬性或不屬於屬性組: \'%s\'',
                ],
            ],
        ],

        'tax-rates' => [
            'title' => '税率',

            'validation' => [
                'errors' => [
                    'duplicate-identifier' => '標識符: \'%s\' 在導入文件中找到多次。',
                    'identifier-not-found' => '標識符: \'%s\' 在系統中未找到。',
                ],
            ],
        ],
    ],

    'validation' => [
        'errors' => [
            'column-empty-headers' => '列數 "%s" 的標題為空。',
            'column-name-invalid' => '列名無效: "%s".',
            'column-not-found' => '未找到所需的列: %s.',
            'column-numbers' => '列數與標題行中的行數不匹配。',
            'invalid-attribute' => '標題包含無效的屬性(s): "%s".',
            'more-issues' => '以及另外 :count 個問題 — 請下載完整報告查看全部內容。',
            'more-rows' => '（另有 :count 行）',
            'system' => '發生了意外的系統錯誤。',
            'wrong-quotes' => '使用了曲線引號而不是直角引號。',
        ],
    ],
];
