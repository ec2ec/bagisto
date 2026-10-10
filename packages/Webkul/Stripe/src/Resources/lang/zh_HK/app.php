<?php

return [
    'description' => '通過 Stripe 安全地使用信用卡/借記卡付款。',
    'title' => 'Stripe',

    'line-items' => [
        'discount' => '折扣',
        'shipping' => '運費',
        'tax' => '税費',
    ],

    'response' => [
        'cart-changed' => '付款開始後您的購物車發生了變化，因此未能下單。請就您的付款聯繫我們。',
        'cart-not-found' => '購物車未找到或無效。',
        'cart-processed' => '此購物車已被處理。',
        'invalid-session' => '付款會話無效。',
        'payment-cancelled' => '付款已取消。',
        'payment-failed' => '付款失敗。',
        'payment-success' => '付款成功完成。',
        'provide-credentials' => '請提供有效的 Stripe 憑據。',
        'session-invalid' => '付款會話已過期或無效。',
        'session-not-found' => '未找到付款會話。',
        'verification-failed' => '付款驗證失敗。',
    ],

    'webhook' => [
        'dispute-closed' => 'Stripe 爭議 :id 已結束，結果：:status。',
        'dispute-opened' => '客户在 Stripe 中對此付款的 :amount 提出爭議（:id），原因：:reason。',
        'refund-recorded' => '已記錄在 Stripe 中進行的 :amount 退款；Stripe 中累計退款 :total。',
    ],
];
