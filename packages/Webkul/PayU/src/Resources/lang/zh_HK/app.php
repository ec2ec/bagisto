<?php

return [
    'description' => '通過PayU使用信用卡、借記卡、網上銀行、UPI和錢包安全支付',
    'title' => 'PayU',

    'redirect' => [
        'click-if-not-redirected' => '點擊此處繼續',
        'please-wait' => '請稍候，我們正在將您重定向到支付網關...',
        'redirect-message' => '如果您沒有自動重定向，請點擊下面的按鈕。',
        'redirecting' => '正在重定向到PayU...',
        'redirecting-to-payment' => '正在重定向到PayU支付',
        'secure-payment' => '安全支付網關',
    ],

    'response' => [
        'cart-not-found' => '未找到購物車。請重試。',
        'hash-mismatch' => '支付驗證失敗。哈希不匹配。',
        'invalid-transaction' => '無效交易。請重試。',
        'order-creation-failed' => '創建訂單失敗。請聯繫支持。',
        'payment-already-processed' => '支付已處理。',
        'payment-cancelled' => '支付已取消。您可以重試。',
        'payment-failed' => '支付失敗。請重試。',
        'payment-success' => '支付成功完成！',
        'provide-credentials' => '請在管理面板中配置PayU商户密鑰和Salt。',
        'supported-currency-error' => '貨幣 :currency 不受支持。支持的貨幣有: :supportedCurrencies.',
    ],
];
