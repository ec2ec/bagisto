<?php

return [
    'description' => 'Pay securely with your credit or debit card via PayGlocal.',
    'title' => 'PayGlocal',

    'response' => [
        'cart-not-found' => 'Cart not found or invalid.',
        'order-creation-failed' => 'The payment succeeded but the order could not be created. Please contact support.',
        'payment-cancelled' => 'The payment was cancelled.',
        'payment-failed' => 'The payment failed. Please try again.',
        'payment-pending' => '您的 PayGlocal 付款仍在處理中。 請完成或稍等一下，然後重新檢查。',
        'payment-success' => 'The payment completed successfully.',
        'provide-credentials' => 'Please provide valid PayGlocal credentials.',
        'supported-currency-error' => '貨幣 :currency 不受支持。支持的貨幣有: :supportedCurrencies.',
        'transaction-not-found' => 'No PayGlocal transaction was found for this payment.',
        'verification-failed' => 'The payment could not be verified.',
    ],
];
