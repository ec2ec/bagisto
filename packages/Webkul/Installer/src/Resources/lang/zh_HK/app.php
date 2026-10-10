<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => '默認',
            ],

            'attribute-groups' => [
                'description' => '描述',
                'general' => '通用',
                'inventories' => '庫存',
                'meta-description' => '元描述',
                'price' => '價格',
                'rma' => 'RMA',
                'settings' => '設定',
                'shipping' => '運送',
            ],

            'attributes' => [
                'allow-rma' => '允許退貨（RMA）',
                'brand' => '品牌',
                'color' => '顏色',
                'cost' => '成本',
                'description' => '描述',
                'featured' => '特色',
                'guest-checkout' => '訪客結帳',
                'height' => '高度',
                'length' => '長度',
                'manage-stock' => '庫存管理',
                'meta-description' => '元描述',
                'meta-keywords' => '元關鍵詞',
                'meta-title' => '元標題',
                'name' => '名稱',
                'new' => '新品',
                'price' => '價格',
                'product-number' => '產品號',
                'rma-rules' => '退貨規則 (RMA)',
                'short-description' => '簡短描述',
                'size' => '尺寸',
                'sku' => 'SKU',
                'special-price' => '特價',
                'special-price-from' => '特價起始日期',
                'special-price-to' => '特價結束日期',
                'status' => '狀態',
                'tax-category' => '税收類別',
                'url-key' => '網址關鍵字',
                'visible-individually' => '單獨顯示',
                'weight' => '重量',
                'width' => '寬度',
            ],

            'attribute-options' => [
                'black' => '黑色',
                'green' => '綠色',
                'l' => 'L',
                'm' => 'M',
                'red' => '紅色',
                's' => 'S',
                'white' => '白色',
                'xl' => 'XL',
                'yellow' => '黃色',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => '根分類描述',
                'name' => '根',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => '關於我們頁面內容',
                    'title' => '關於我們',
                ],

                'contact-us' => [
                    'content' => '聯繫我們頁面內容',
                    'title' => '聯繫我們',
                ],

                'customer-service' => [
                    'content' => '客户服務頁面內容',
                    'title' => '客户服務',
                ],

                'payment-policy' => [
                    'content' => '付款政策頁面內容',
                    'title' => '付款政策',
                ],

                'privacy-policy' => [
                    'content' => '隱私政策頁面內容',
                    'title' => '隱私政策',
                ],

                'refund-policy' => [
                    'content' => '退款政策頁面內容',
                    'title' => '退款政策',
                ],

                'return-policy' => [
                    'content' => '退貨政策頁面內容',
                    'title' => '退貨政策',
                ],

                'shipping-policy' => [
                    'content' => '運送政策頁面內容',
                    'title' => '運送政策',
                ],

                'terms-conditions' => [
                    'content' => '條款和條件頁面內容',
                    'title' => '條款和條件',
                ],

                'terms-of-use' => [
                    'content' => '使用條款頁面內容',
                    'title' => '使用條款',
                ],

                'whats-new' => [
                    'content' => '最新消息頁面內容',
                    'title' => '最新消息',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'meta-description' => '演示商店元描述',
                'meta-keywords' => '演示商店元關鍵詞',
                'meta-title' => '演示商店',
                'name' => '默認',
            ],

            'currencies' => [
                'AED' => '阿聯酋迪拉姆',
                'ARS' => '阿根廷比索',
                'AUD' => '澳大利亞元',
                'BDT' => '孟加拉塔卡',
                'BHD' => '巴林第納爾',
                'BRL' => '巴西雷亞爾',
                'CAD' => '加拿大元',
                'CHF' => '瑞士法郎',
                'CLP' => '智利比索',
                'CNY' => '人民幣',
                'COP' => '哥倫比亞比索',
                'CZK' => '捷克克朗',
                'DKK' => '丹麥克朗',
                'DZD' => '阿爾及利亞第納爾',
                'EGP' => '埃及鎊',
                'EUR' => '歐元',
                'FJD' => '斐濟元',
                'GBP' => '英鎊',
                'HKD' => '港元',
                'HUF' => '匈牙利福林',
                'IDR' => '印尼盾',
                'ILS' => '以色列新謝克爾',
                'INR' => '印度盧比',
                'JOD' => '約旦第納爾',
                'JPY' => '日元',
                'KRW' => '韓元',
                'KWD' => '科威特第納爾',
                'KZT' => '哈薩克斯坦堅戈',
                'LBP' => '黎巴嫩鎊',
                'LKR' => '斯里蘭卡盧比',
                'LYD' => '利比亞第納爾',
                'MAD' => '摩洛哥迪拉姆',
                'MUR' => '毛里求斯盧比',
                'MXN' => '墨西哥比索',
                'MYR' => '馬來西亞林吉特',
                'NGN' => '尼日利亞奈拉',
                'NOK' => '挪威克朗',
                'NPR' => '尼泊爾盧比',
                'NZD' => '新西蘭元',
                'OMR' => '阿曼里亞爾',
                'PAB' => '巴拿馬巴波亞',
                'PEN' => '秘魯新索爾',
                'PHP' => '菲律賓比索',
                'PKR' => '巴基斯坦盧比',
                'PLN' => '波蘭茲羅提',
                'PYG' => '巴拉圭瓜拉尼',
                'QAR' => '卡塔爾里亞爾',
                'RON' => '羅馬尼亞列伊',
                'RUB' => '俄羅斯盧布',
                'SAR' => '沙特里亞爾',
                'SEK' => '瑞典克朗',
                'SGD' => '新加坡元',
                'THB' => '泰銖',
                'TND' => '突尼斯第納爾',
                'TRY' => '土耳其里拉',
                'TWD' => '新台幣',
                'UAH' => '烏克蘭格里夫納',
                'USD' => '美元',
                'UZS' => '烏茲別克斯坦蘇姆',
                'VES' => '委內瑞拉玻利瓦爾',
                'VND' => '越南盾',
                'XAF' => '中非金融合作法郎',
                'XOF' => '西非金融合作法郎',
                'ZAR' => '南非蘭特',
                'ZMW' => '贊比亞克瓦查',
            ],

            'locales' => [
                'ar' => '阿拉伯語',
                'bn' => '孟加拉語',
                'ca' => '加泰羅尼亞語',
                'de' => '德語',
                'en' => '英語',
                'es' => '西班牙語',
                'fa' => '波斯語',
                'fr' => '法語',
                'he' => '希伯來語',
                'hi_IN' => '印度區區',
                'id' => '印尼語',
                'it' => '意大利語',
                'ja' => '日語',
                'nl' => '荷蘭語',
                'pl' => '波蘭語',
                'pt_BR' => '巴西葡萄牙語',
                'ro' => '羅馬尼亞語',
                'ru' => '俄語',
                'sin' => '僧伽羅語',
                'tr' => '土耳其語',
                'uk' => '烏克蘭語',
                'zh_CN' => '簡體中文',
                'zh_HK' => '繁體中文（香港）',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'general' => '普通',
                'guest' => '訪客',
                'wholesale' => '批發',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => '默認',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'bold-collections' => [
                    'content' => [
                        'btn-title' => '查看收藏',
                        'description' => '隆重推出我們大膽的新系列！通過大膽的設計和充滿活力的宣言提升您的風格。探索引人注目的圖案和大膽的色彩，重新定義您的衣櫃。準備好擁抱非凡吧！',
                        'title' => '準備好迎接我們全新的大膽系列吧！',
                    ],

                    'name' => '大膽系列',
                ],

                'bold-collections-2' => [
                    'content' => [
                        'btn-title' => '查看系列',
                        'description' => '我們的大膽系列在這裏，用無畏的設計和鮮明、充滿活力的色彩重新定義您的衣櫥。從大膽的圖案到有力的色調，這是您打破常規、邁入非凡的機會。',
                        'title' => '用我們的新系列釋放您的大膽！',
                    ],

                    'name' => '大膽系列',
                ],

                'book-tickets' => [
                    'name' => '預訂門票',

                    'options' => [
                        'title' => '預訂門票',
                    ],
                ],

                'categories-collections' => [
                    'name' => '類別 收藏',
                ],

                'footer-links' => [
                    'name' => '頁腳鏈接',

                    'options' => [
                        'about-us' => '關於我們',
                        'contact-us' => '聯繫我們',
                        'customer-service' => '客户服務',
                        'payment-policy' => '付款政策',
                        'privacy-policy' => '隱私政策',
                        'refund-policy' => '退款政策',
                        'return-policy' => '退貨政策',
                        'shipping-policy' => '運輸政策',
                        'terms-conditions' => '條款及條件',
                        'terms-of-use' => '使用條款',
                        'whats-new' => '什麼是新的',
                    ],
                ],

                'game-container' => [
                    'content' => [
                        'sub-title-1' => '我們的系列',
                        'sub-title-2' => '我們的系列',
                        'title' => '遊戲新增了我們的新內容！',
                    ],

                    'name' => '遊戲容器',
                ],

                'image-carousel' => [
                    'name' => '圖像輪播',

                    'sliders' => [
                        'title' => '為新系列做好準備',
                    ],
                ],

                'kids-collection' => [
                    'name' => '兒童系列',

                    'options' => [
                        'title' => '兒童系列',
                    ],
                ],

                'mens-collection' => [
                    'name' => '男士系列',

                    'options' => [
                        'title' => '男士系列',
                    ],
                ],

                'offer-information' => [
                    'content' => [
                        'title' => '第一份訂單可享受高達 40% 的折扣 現在購買',
                    ],

                    'name' => '優惠資訊',
                ],

                'services-content' => [
                    'description' => [
                        'emi-available-info' => '所有主要信用卡均可免費使用 EMI',
                        'free-shipping-info' => '所有訂單均可享受免費送貨',
                        'product-replace-info' => '可輕鬆更換產品！',
                        'time-support-info' => '專門的 24/7 支持，通過聊天和電子郵件提供',
                    ],

                    'name' => '服務內容',

                    'title' => [
                        'emi-available' => 'EMI 可用',
                        'free-shipping' => '免費送貨',
                        'product-replace' => '產品更換',
                        'time-support' => '24/7 支持',
                    ],
                ],

                'top-collections' => [
                    'content' => [
                        'sub-title-1' => '我們的系列',
                        'sub-title-2' => '我們的系列',
                        'sub-title-3' => '我們的系列',
                        'sub-title-4' => '我們的系列',
                        'sub-title-5' => '我們的系列',
                        'sub-title-6' => '我們的系列',
                        'title' => '遊戲新增了我們的新內容！',
                    ],

                    'name' => '熱門收藏',
                ],

                'womens-collection' => [
                    'name' => '女士系列',

                    'options' => [
                        'title' => '女士系列',
                    ],
                ],
            ],
        ],

        'user' => [
            'roles' => [
                'description' => '該角色用户將擁有所有訪問權限',
                'name' => '行政人員',
            ],

            'users' => [
                'name' => '例子',
            ],
        ],

        'sample-categories' => [
            'category-translation' => [
                '2' => [
                    'description' => '<p>男士</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '男士',
                    'slug' => 'mens',
                    'url-path' => 'men',
                ],

                '3' => [
                    'description' => '<p>兒童</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '兒童',
                    'slug' => 'kids',
                    'url-path' => 'kids',
                ],

                '4' => [
                    'description' => '<p>女士</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '女士',
                    'slug' => 'womens',
                    'url-path' => 'woman',
                ],

                '5' => [
                    'description' => '<p>正裝</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '正裝',
                    'slug' => 'formal-wear-men',
                    'url-path' => 'men/formal-wear-men',
                ],

                '6' => [
                    'description' => '<p>休閒裝</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '休閒裝',
                    'slug' => 'casual-wear-men',
                    'url-path' => 'men/casual-wear-men',
                ],

                '7' => [
                    'description' => '<p>運動裝</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '運動裝',
                    'slug' => 'active-wear',
                    'url-path' => 'men/active-wear',
                ],

                '8' => [
                    'description' => '<p>鞋類</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '鞋類',
                    'slug' => 'footwear',
                    'url-path' => 'men/footwear',
                ],

                '9' => [
                    'description' => '<p>女童服裝</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '女童服裝',
                    'slug' => 'formal-wear-female',
                    'url-path' => 'woman/formal-wear-female',
                ],

                '10' => [
                    'description' => '<p>男童服裝</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '男童服裝',
                    'slug' => 'casual-wear-female',
                    'url-path' => 'woman/casual-wear-female',
                ],

                '11' => [
                    'description' => '<p>女童鞋</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '女童鞋',
                    'slug' => 'active-wear-female',
                    'url-path' => 'woman/active-wear-female',
                ],

                '12' => [
                    'description' => '<p>男童鞋</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '男童鞋',
                    'slug' => 'footwear-female',
                    'url-path' => 'woman/footwear-female',
                ],

                '13' => [
                    'description' => '<p>正裝</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '正裝',
                    'name' => '正裝',
                    'slug' => 'girls-clothing',
                    'url-path' => 'kids/girls-clothing',
                ],

                '14' => [
                    'description' => '<p>休閒裝</p>',
                    'meta-description' => '休閒時尚',
                    'meta-keywords' => '',
                    'meta-title' => '休閒裝',
                    'name' => '休閒裝',
                    'slug' => 'boys-clothing',
                    'url-path' => 'kids/boys-clothing',
                ],

                '15' => [
                    'description' => '<p>運動裝</p>',
                    'meta-description' => '運動裝系列',
                    'meta-keywords' => '',
                    'meta-title' => '運動裝',
                    'name' => '運動裝',
                    'slug' => 'girls-footwear',
                    'url-path' => 'kids/girls-footwear',
                ],

                '16' => [
                    'description' => '<p>鞋類</p>',
                    'meta-description' => '鞋類系列',
                    'meta-keywords' => '',
                    'meta-title' => '鞋類',
                    'name' => '鞋類',
                    'slug' => 'boys-footwear',
                    'url-path' => 'kids/boys-footwear',
                ],

                '17' => [
                    'description' => '<p>健康</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '健康',
                    'slug' => 'wellness',
                    'url-path' => 'wellness',
                ],

                '18' => [
                    'description' => '<p>可下載瑜伽教程</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '可下載瑜伽教程',
                    'slug' => 'downloadable-yoga-tutorial',
                    'url-path' => 'wellness/downloadable-yoga-tutorial',
                ],

                '19' => [
                    'description' => '<p>電子書</p>',
                    'meta-description' => '電子書收藏',
                    'meta-keywords' => '',
                    'meta-title' => '電子書收藏',
                    'name' => '電子書',
                    'slug' => 'e-books',
                    'url-path' => 'wellness/e-books',
                ],

                '20' => [
                    'description' => '<p>電影票</p>',
                    'meta-description' => '每月暢享10部電影的魔力，無需額外付費。',
                    'meta-keywords' => '',
                    'meta-title' => 'CineXperience 月度電影通行證',
                    'name' => '電影票',
                    'slug' => 'movie-pass',
                    'url-path' => 'wellness/movie-pass',
                ],

                '21' => [
                    'description' => '<p>預訂</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '預訂',
                    'slug' => 'bookings',
                    'url-path' => '',
                ],

                '22' => [
                    'description' => '<p>預約</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '預約',
                    'slug' => 'appointment-booking',
                    'url-path' => '',
                ],

                '23' => [
                    'description' => '<p>活動預訂</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '活動預訂',
                    'slug' => 'event-booking',
                    'url-path' => '',
                ],

                '24' => [
                    'description' => '<p>社區大廳預訂</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '社區大廳預訂',
                    'slug' => 'community-hall-bookings',
                    'url-path' => '',
                ],

                '25' => [
                    'description' => '<p>餐桌預訂</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '餐桌預訂',
                    'slug' => 'table-booking',
                    'url-path' => '',
                ],

                '26' => [
                    'description' => '<p>租賃預訂</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '租賃預訂',
                    'slug' => 'rental-booking',
                    'url-path' => '',
                ],

                '27' => [
                    'description' => '<p>電子產品</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '電子產品',
                    'slug' => 'electronics',
                    'url-path' => '',
                ],

                '28' => [
                    'description' => '<p>手機及配件</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '手機及配件',
                    'slug' => 'mobile-phones-accessories',
                    'url-path' => '',
                ],

                '29' => [
                    'description' => '<p>筆記本電腦和平板</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '筆記本電腦和平板',
                    'slug' => 'laptops-tablets',
                    'url-path' => '',
                ],

                '30' => [
                    'description' => '<p>音頻設備</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '音頻設備',
                    'slug' => 'audio-devices',
                    'url-path' => '',
                ],

                '31' => [
                    'description' => '<p>智能家居與自動化</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '智能家居與自動化',
                    'slug' => 'smart-home-automation',
                    'url-path' => '',
                ],

                '32' => [
                    'description' => '<p>家居</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '家居',
                    'slug' => 'household',
                    'url-path' => '',
                ],

                '33' => [
                    'description' => '<p>廚房電器</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '廚房電器',
                    'slug' => 'kitchen-appliances',
                    'url-path' => '',
                ],

                '34' => [
                    'description' => '<p>廚具與餐具</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '廚具與餐具',
                    'slug' => 'cookware-dining',
                    'url-path' => '',
                ],

                '35' => [
                    'description' => '<p>傢俱與裝飾</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '傢俱與裝飾',
                    'slug' => 'furniture-decor',
                    'url-path' => '',
                ],

                '36' => [
                    'description' => '<p>清潔用品</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '清潔用品',
                    'slug' => 'cleaning-supplies',
                    'url-path' => '',
                ],

                '37' => [
                    'description' => '<p>圖書與文具</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '圖書與文具',
                    'slug' => 'books-stationery',
                    'url-path' => '',
                ],

                '38' => [
                    'description' => '<p>虛構與非虛構書籍</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '虛構與非虛構書籍',
                    'slug' => 'fiction-non-fiction-books',
                    'url-path' => '',
                ],

                '39' => [
                    'description' => '<p>教育與學術</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '教育與學術',
                    'slug' => 'educational-academic',
                    'url-path' => '',
                ],

                '40' => [
                    'description' => '<p>辦公用品</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '辦公用品',
                    'slug' => 'office-supplies',
                    'url-path' => '',
                ],

                '41' => [
                    'description' => '<p>藝術與工藝材料</p>',
                    'meta-description' => '',
                    'meta-keywords' => '',
                    'meta-title' => '',
                    'name' => '藝術與工藝材料',
                    'slug' => 'art-craft-materials',
                    'url-path' => '',
                ],
            ],
        ],
    ],

    'installer' => [
        'middleware' => [
            'already-installed' => '應用程序已經安裝。',
        ],

        'index' => [
            'create-administrator' => [
                'admin' => '管理員',
                'bagisto' => 'Bagisto',
                'confirm-password' => '確認密碼',
                'email' => '電子郵件',
                'email-address' => 'admin@example.com',
                'password' => '密碼',
                'title' => '創建管理員',
            ],

            'environment-configuration' => [
                'algerian-dinar' => '阿爾及利亞第納爾 (DZD)',
                'allowed-currencies' => '允許的貨幣',
                'allowed-locales' => '允許的語言環境',
                'application-name' => '應用程序名稱',
                'argentine-peso' => '阿根廷比索 (ARS)',
                'australian-dollar' => '澳大利亞元 (AUD)',
                'bagisto' => 'Bagisto',
                'bangladeshi-taka' => '孟加拉塔卡 (BDT)',
                'bahraini-dinar' => '巴林第納爾 (BHD)',
                'brazilian-real' => '巴西雷亞爾 (BRL)',
                'british-pound-sterling' => '英鎊 (GBP)',
                'canadian-dollar' => '加拿大元 (CAD)',
                'cfa-franc-bceao' => 'CFA 法郎 BCEAO (XOF)',
                'cfa-franc-beac' => 'CFA 法郎 BEAC (XAF)',
                'chilean-peso' => '智利比索 (CLP)',
                'chinese-yuan' => '人民幣 (CNY)',
                'colombian-peso' => '哥倫比亞比索 (COP)',
                'czech-koruna' => '捷克克朗 (CZK)',
                'danish-krone' => '丹麥克朗 (DKK)',
                'database-connection' => '數據庫連接',
                'database-hostname' => '數據庫主機名',
                'database-name' => '數據庫名稱',
                'database-password' => '數據庫密碼',
                'database-port' => '數據庫端口',
                'database-prefix' => '數據庫前綴',
                'database-prefix-help' => '前綴必須為4個字符，並且只能包含字母、數字和下劃線。',
                'database-username' => '數據庫用户名',
                'default-currency' => '默認貨幣',
                'default-locale' => '默認語言環境',
                'default-timezone' => '默認時區',
                'default-url' => '默認網址',
                'default-url-link' => 'https://localhost',
                'egyptian-pound' => '埃及鎊 (EGP)',
                'euro' => '歐元 (EUR)',
                'fijian-dollar' => '斐濟元 (FJD)',
                'hong-kong-dollar' => '港元 (HKD)',
                'hungarian-forint' => '匈牙利福林 (HUF)',
                'indian-rupee' => '印度盧比 (INR)',
                'indonesian-rupiah' => '印度尼西亞盾 (IDR)',
                'israeli-new-shekel' => '以色列新謝克爾 (ILS)',
                'japanese-yen' => '日元 (JPY)',
                'jordanian-dinar' => '約旦第納爾 (JOD)',
                'kazakhstani-tenge' => '哈薩克斯坦堅戈 (KZT)',
                'kuwaiti-dinar' => '科威特第納爾 (KWD)',
                'lebanese-pound' => '黎巴嫩鎊 (LBP)',
                'libyan-dinar' => '利比亞第納爾 (LYD)',
                'malaysian-ringgit' => '馬來西亞林吉特 (MYR)',
                'mauritian-rupee' => '毛里求斯盧比 (MUR)',
                'mexican-peso' => '墨西哥比索 (MXN)',
                'moroccan-dirham' => '摩洛哥迪拉姆 (MAD)',
                'mysql' => 'MySQL',
                'mariadb' => 'MariaDB',
                'postgresql' => 'PostgreSQL',
                'nepalese-rupee' => '尼泊爾盧比 (NPR)',
                'new-taiwan-dollar' => '新台幣 (TWD)',
                'new-zealand-dollar' => '新西蘭元 (NZD)',
                'nigerian-naira' => '尼日利亞奈拉 (NGN)',
                'norwegian-krone' => '挪威克朗 (NOK)',
                'omani-rial' => '阿曼里亞爾 (OMR)',
                'pakistani-rupee' => '巴基斯坦盧比 (PKR)',
                'panamanian-balboa' => '巴拿馬巴爾博亞 (PAB)',
                'paraguayan-guarani' => '巴拉圭瓜拉尼 (PYG)',
                'peruvian-nuevo-sol' => '秘魯新索爾 (PEN)',
                'pgsql' => 'PgSQL',
                'philippine-peso' => '菲律賓比索 (PHP)',
                'polish-zloty' => '波蘭茲羅提 (PLN)',
                'qatari-rial' => '卡塔爾里亞爾 (QAR)',
                'romanian-leu' => '羅馬尼亞列伊 (RON)',
                'russian-ruble' => '俄羅斯盧布 (RUB)',
                'saudi-riyal' => '沙特里亞爾 (SAR)',
                'select-timezone' => '選擇時區',
                'singapore-dollar' => '新加坡元 (SGD)',
                'south-african-rand' => '南非蘭特 (ZAR)',
                'south-korean-won' => '韓元 (KRW)',
                'sqlsrv' => 'SQLSRV',
                'sri-lankan-rupee' => '斯里蘭卡盧比 (LKR)',
                'swedish-krona' => '瑞典克朗 (SEK)',
                'swiss-franc' => '瑞士法郎 (CHF)',
                'thai-baht' => '泰銖 (THB)',
                'title' => '商店配置',
                'tunisian-dinar' => '突尼斯第納爾 (TND)',
                'turkish-lira' => '土耳其里拉 (TRY)',
                'ukrainian-hryvnia' => '烏克蘭格里夫納 (UAH)',
                'united-arab-emirates-dirham' => '阿聯酋迪拉姆 (AED)',
                'united-states-dollar' => '美元 (USD)',
                'uzbekistani-som' => '烏茲別克斯坦蘇姆 (UZS)',
                'venezuelan-bolívar' => '委內瑞拉玻利瓦爾 (VEF)',
                'vietnamese-dong' => '越南盾 (VND)',
                'warning-message' => '注意！您的默認系統語言和默認貨幣設置是永久性的，設置後無法更改。',
                'zambian-kwacha' => '贊比亞克瓦查 (ZMW)',
            ],

            'sample-products' => [
                'no' => '否',
                'note' => '注意：索引時間取決於所選語言的數量。此過程最多可能需要 2 分鐘才能完成。如果您添加更多語言，請嘗試增加服務器和 PHP 設置中的最大執行時間，或使用我們的 CLI 安裝程序以避免請求超時。',
                'sample-products' => '樣品產品',
                'title' => '樣品產品',
                'yes' => '是',
            ],

            'installation-processing' => [
                'bagisto' => 'Bagisto 安裝',
                'bagisto-info' => '正在創建數據庫表，這可能需要一些時間',
                'title' => '安裝',
            ],

            'installation-completed' => [
                'admin-panel' => '管理員面板',
                'bagisto-forums' => 'Bagisto 論壇',
                'customer-panel' => '客户面板',
                'explore-bagisto-extensions' => '探索 Bagisto 擴展',
                'title' => '安裝已完成',
                'title-info' => 'Bagisto 已成功安裝在您的系統上。',
            ],

            'ready-for-installation' => [
                'create-database-tables' => '創建數據庫表',
                'drop-existing-tables' => '刪除任何現有表',
                'install' => '安裝',
                'install-info' => 'Bagisto 安裝信息',
                'install-info-button' => '點擊下面的按鈕',
                'populate-database-tables' => '填充數據庫表',
                'start-installation' => '開始安裝',
                'title' => '準備安裝',
            ],

            'start' => [
                'language' => '安裝嚮導語言',
                'locale' => '區域設置',
                'main' => '開始',
                'select-locale' => '選擇區域設置',
                'title' => '您的 Bagisto 安裝',
                'welcome-title' => '歡迎來到 Bagisto',
            ],

            'server-requirements' => [
                'calendar' => '日曆',
                'ctype' => 'cType',
                'curl' => 'cURL',
                'dom' => 'DOM',
                'fileinfo' => '文件信息',
                'filter' => '過濾器',
                'gd' => 'GD',
                'hash' => '哈希',
                'intl' => '國際化',
                'json' => 'JSON',
                'mbstring' => '多字節字符串',
                'openssl' => 'OpenSSL',
                'pcre' => 'PCRE',
                'pdo' => 'PDO',
                'php' => 'PHP',
                'php-version' => ':version 或更高版本',
                'session' => '會話',
                'title' => '服務器要求',
                'tokenizer' => '標記器',
                'xml' => 'XML',
            ],

            'arabic' => '阿拉伯語',
            'back' => '返回',
            'bagisto' => 'Bagisto',
            'bagisto-info' => '由 Webkul 社區共同開發的項目',
            'bagisto-logo' => 'Bagisto Logo',
            'bengali' => '孟加拉語',
            'catalan' => '加泰羅尼亞語',
            'chinese' => '中文',
            'chinese-hong-kong' => '繁體中文（香港）',
            'continue' => '繼續',
            'dutch' => '荷蘭語',
            'english' => '英語',
            'french' => '法語',
            'german' => '德語',
            'hebrew' => '希伯來語',
            'hindi' => '印地語',
            'indonesian' => '印尼語',
            'installation-description' => 'Bagisto 的安裝通常涉及幾個步驟。以下是 Bagisto 安裝過程的一般概述',
            'installation-info' => '我們很高興在這裏見到你！',
            'installation-title' => '歡迎安裝 Bagisto',
            'italian' => '意大利語',
            'japanese' => '日語',
            'persian' => '波斯語',
            'polish' => '波蘭語',
            'portuguese' => '巴西葡萄牙語',
            'romanian' => '羅馬尼亞語',
            'russian' => '俄語',
            'sinhala' => '僧伽羅語',
            'spanish' => '西班牙語',
            'title' => 'Bagisto 安裝程序',
            'turkish' => '土耳其語',
            'ukrainian' => '烏克蘭語',
            'webkul' => 'Webkul',
        ],
    ],
];
