<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => '必須接受 :attribute。',
    'accepted_if' => '當 :other 為 :value 時，必須接受 :attribute。',
    'active_url' => ':attribute 不是一個有效的URL。',
    'after' => ':attribute 必須是 :date 之後的日期。',
    'after_or_equal' => ':attribute 必須是 :date 之後或相同的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、數字、破折號和下劃線。',
    'alpha_num' => ':attribute 只能包含字母和數字。',
    'array' => ':attribute 必須是一個數組。',
    'ascii' => ':attribute 只能包含單字節的字母數字字符和符號。',
    'before' => ':attribute 必須是 :date 之前的日期。',
    'before_or_equal' => ':attribute 必須是 :date 之前或相同的日期。',

    'between' => [
        'array' => ':attribute 必須在 :min 和 :max 之間。',
        'file' => ':attribute 必須在 :min 和 :max 千字節之間。',
        'numeric' => ':attribute 必須在 :min 和 :max 之間。',
        'string' => ':attribute 必須在 :min 和 :max 個字符之間。',
    ],

    'boolean' => ':attribute 字段必須是 true 或 false。',
    'can' => ':attribute 字段包含未經授權的值。',
    'confirmed' => ':attribute 確認不匹配。',
    'current_password' => '密碼不正確。',
    'date' => ':attribute 必須是一個有效的日期。',
    'date_equals' => ':attribute 必須等於 :date。',
    'date_format' => ':attribute 必須與格式 :format 匹配。',
    'decimal' => ':attribute 必須有 :decimal 位小數。',
    'declined' => ':attribute 必須被拒絕。',
    'declined_if' => '當 :other 為 :value 時，:attribute 必須被拒絕。',
    'different' => ':attribute 和 :other 必須不同。',
    'digits' => ':attribute 必須是 :digits 位數字。',
    'digits_between' => ':attribute 必須介於 :min 和 :max 位數字之間。',
    'dimensions' => ':attribute 具有無效的圖像尺寸。',
    'distinct' => ':attribute 字段具有重複的值。',
    'doesnt_end_with' => ':attribute 不能以以下任何一個結尾： :values。',
    'doesnt_start_with' => ':attribute 不能以以下任何一個開始： :values。',
    'email' => ':attribute 必須是一個有效的電子郵件地址。',
    'ends_with' => ':attribute 必須以以下任何一個結尾： :values。',
    'enum' => '所選 :attribute 無效。',
    'exists' => '所選 :attribute 無效。',
    'extensions' => ':attribute 必須具有以下擴展名之一： :values。',
    'file' => ':attribute 必須是一個文件。',
    'filled' => ':attribute 必須有一個值。',

    'gt' => [
        'array' => ':attribute 字段必須擁有超過 :value 項。',
        'file' => ':attribute 字段必須大於 :value 千字節。',
        'numeric' => ':attribute 字段必須大於 :value。',
        'string' => ':attribute 字段必須大於 :value 個字符。',
    ],

    'gte' => [
        'array' => ':attribute 字段必須擁有 :value 項或更多。',
        'file' => ':attribute 字段必須大於或等於 :value 千字節。',
        'numeric' => ':attribute 字段必須大於或等於 :value。',
        'string' => ':attribute 字段必須大於或等於 :value 個字符。',
    ],

    'hex_color' => ':attribute 字段必須是有效的十六進制顏色。',
    'image' => ':attribute 字段必須是圖像。',
    'in' => '所選 :attribute 無效。',
    'in_array' => ':attribute 字段必須存在於 :other 中。',
    'integer' => ':attribute 字段必須是整數。',
    'ip' => ':attribute 字段必須是有效的 IP 地址。',
    'ipv4' => ':attribute 字段必須是有效的 IPv4 地址。',
    'ipv6' => ':attribute 字段必須是有效的 IPv6 地址。',
    'json' => ':attribute 字段必須是有效的 JSON 字符串。',
    'lowercase' => ':attribute 字段必須是小寫的。',

    'lt' => [
        'array' => ':attribute 字段必須擁有少於 :value 項。',
        'file' => ':attribute 字段必須小於 :value 千字節。',
        'numeric' => ':attribute 字段必須小於 :value。',
        'string' => ':attribute 字段必須小於 :value 個字符。',
    ],

    'lte' => [
        'array' => ':attribute 字段不能擁有超過 :value 項。',
        'file' => ':attribute 字段必須小於或等於 :value 千字節。',
        'numeric' => ':attribute 字段必須小於或等於 :value。',
        'string' => ':attribute 字段必須小於或等於 :value 個字符。',
    ],

    'mac_address' => ':attribute 字段必須是有效的 MAC 地址。',

    'max' => [
        'array' => ':attribute 字段不能擁有超過 :max 項。',
        'file' => ':attribute 字段不能大於 :max 千字節。',
        'numeric' => ':attribute 字段不能大於 :max。',
        'string' => ':attribute 字段不能大於 :max 個字符。',
    ],

    'max_digits' => ':attribute 字段不能擁有超過 :max 位數字。',
    'mimes' => ':attribute 字段必須是類型為 :values 的文件。',
    'mimetypes' => ':attribute 字段必須是類型為 :values 的文件。',

    'min' => [
        'array' => ':attribute 字段必須擁有至少 :min 項。',
        'file' => ':attribute 字段必須至少為 :min 千字節。',
        'numeric' => ':attribute 字段必須至少為 :min。',
        'string' => ':attribute 字段必須至少為 :min 個字符。',
    ],

    'min_digits' => ':attribute 字段必須至少包含 :min 位數字。',
    'missing' => ':attribute 字段必須缺失。',
    'missing_if' => '當 :other 為 :value 時，:attribute 字段必須缺失。',
    'missing_unless' => '除非 :other 為 :value，否則 :attribute 字段必須缺失。',
    'missing_with' => '當 :values 存在時，:attribute 字段必須缺失。',
    'missing_with_all' => '當 :values 存在時，:attribute 字段必須缺失。',
    'multiple_of' => ':attribute 字段必須是 :value 的倍數。',
    'not_in' => '所選 :attribute 無效。',
    'not_regex' => ':attribute 字段格式無效。',
    'numeric' => ':attribute 字段必須是數字。',

    'password' => [
        'letters' => ':attribute 字段必須至少包含一個字母。',
        'mixed' => ':attribute 字段必須至少包含一個大寫字母和一個小寫字母。',
        'numbers' => ':attribute 字段必須至少包含一個數字。',
        'symbols' => ':attribute 字段必須至少包含一個符號。',
        'uncompromised' => '給定的 :attribute 出現在數據泄露中。請選擇一個不同的 :attribute。',
    ],

    'present' => ':attribute 字段必須存在。',
    'present_if' => '當 :other 為 :value 時，:attribute 字段必須存在。',
    'present_unless' => '除非 :other 為 :value，否則 :attribute 字段必須存在。',
    'present_with' => '當 :values 存在時，:attribute 字段必須存在。',
    'present_with_all' => '當 :values 存在時，:attribute 字段必須存在。',
    'prohibited' => ':attribute 字段被禁止。',
    'prohibited_if' => '當 :other 為 :value 時，:attribute 字段被禁止。',
    'prohibited_unless' => '除非 :other 在 :values 中，否則 :attribute 字段被禁止。',
    'prohibits' => ':attribute 字段禁止 :other 存在。',
    'regex' => ':attribute 字段格式無效。',
    'required' => ':attribute 字段是必填的。',
    'required_array_keys' => ':attribute 字段必須包含以下條目: :values。',
    'required_if' => '當 :other 為 :value 時，:attribute 字段是必填的。',
    'required_if_accepted' => '當 :other 被接受時，:attribute 字段是必填的。',
    'required_unless' => '除非 :other 在 :values 中，否則 :attribute 字段是必填的。',
    'required_with' => '當 :values 存在時，:attribute 字段是必填的。',
    'required_with_all' => '當 :values 存在時，:attribute 字段是必填的。',
    'required_without' => '當 :values 不存在時，:attribute 字段是必填的。',
    'required_without_all' => '當 :values 全部不存在時，:attribute 字段是必填的。',
    'same' => ':attribute 字段必須與 :other 匹配。',

    'size' => [
        'array' => ':attribute 字段必須包含 :size 項。',
        'file' => ':attribute 字段必須為 :size 千字節。',
        'numeric' => ':attribute 字段必須為 :size。',
        'string' => ':attribute 字段必須為 :size 個字符。',
    ],

    'starts_with' => ':attribute 字段必須以以下之一開頭: :values。',
    'string' => ':attribute 字段必須是字符串。',
    'timezone' => ':attribute 字段必須是有效的時區。',
    'unique' => ':attribute 已經被佔用。',
    'uploaded' => ':attribute 上傳失敗。',
    'uppercase' => ':attribute 字段必須為大寫。',
    'url' => ':attribute 字段必須是有效的 URL。',
    'ulid' => ':attribute 字段必須是有效的 ULID。',
    'uuid' => ':attribute 字段必須是有效的 UUID。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => '自定義消息',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
