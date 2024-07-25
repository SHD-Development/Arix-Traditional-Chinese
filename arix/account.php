<?php

return [
    'account-overview' => '帳號概覽',
    'twofactor-messagebox' => '您的帳號需要啟用兩步驟驗證來繼續。',
    'apikey' => 'API 金鑰',
    'sshkey' => 'SSH 金鑰',

    'update-password' => [
        'current' => '目前密碼',
        'new' => '新的密碼',
        'requirements' => '您的密碼應該要至少 8 個字並且應與其他網站不同。',
        'confirm' => '確認密碼',
        'update' => '更改密碼',
    ],

    'update-email' => [
        'isUpdated' => '您的主要電子郵件已被更改。',
        'update' => '更改電子郵件',
        'email' => '電子郵件',
        'confirm' => '確認密碼',
    ],

    'appearance' => [
        'title' => '外觀',
        'lightDarkMode' => '主題切換',
        'light' => '淺色主題',
        'dark' => '深色主題',
        'language' => '面板語言',
        'panel-sounds' => '面板音效',
        'on' => '開啟',
        'off' => '關閉',
    ],

    'twofactor' => [
        'title' => '二步驟驗證',
        'isEnabled' => '您的帳號已經啟用了兩步驟驗證。',
        'isDisabled' => '您的帳號還未啟用兩步驟驗證，點擊下方按鈕開始使用來增加安全性！',
        'disable' => '停用兩步驟驗證',
        'enable' => '啟用兩步驟驗證',

        'disable-dialog' => [
            'password' => '密碼',
            'cancel' => '取消',
            'must-enter-password' => '您必須輸入密碼才能繼續。',
            'disable' => '禁用',
        ],

        'setup-dialog' => [
            'description' => '在兩步驟驗證應用程式內掃描這個 QR Code，然後輸入應用程式生成的 6 碼驗證碼。',
            'account-password' => '帳號密碼',
            'qrcode-loading' => '等待 QR Code 載入中...',
            'enter-6digit-password' => '您必須輸入密碼和 6 碼驗證碼來繼續',
            'enable' => '啟用',
            'cancel' => '取消',
        ],
    ],

    'apiKey' => [
        'label' => '描述',
        'description' => '此 API 金鑰的描述。',
        'allowedIPs-label' => '允許的 IP',
        'allowedIPs-description' => '留空來讓任何 IP 都可以使用這個 API 金鑰，每行輸入一個 IP 地址。',
        'createButton' => '創建',

        'your-keys' => '您的 API 金鑰',
        'store-save' => '您請求的 API 金鑰在下方，因將不會再次顯示所以請妥善保存。',
        'close' => '關閉',

        'delete-api-key' => '刪除 API 金鑰',
        'delete-key' => '刪除金鑰',
        'all-requests-invalidated-1' => '所有使用此金鑰的請求，',
        'all-requests-invalidated-2' => '都將無法使用。',
        'loading' => '載入中...',
        'no-key-found' => '您的帳號沒有任何的 API 金鑰。',
        'last-used' => '最後使用',
    ],

    'sshKey' => [
        'loading' => '載入中...',
        'no-key-found' => '您的帳號沒有任何的 SSH 金鑰。',
        'added-on' => '已加上',

        'createForm' => [
            'key-name' => 'SSH 金鑰名稱',
            'public-key' => '公鑰',
            'public-key-desc' => '輸入您的 SSH 公鑰。',
            'save' => '儲存',
        ],

        'deleteForm' => [
            'delete-ssh-key' => '刪除 SSH 金鑰',
            'delete-key' => '刪除金鑰',
            'will-invalidate-1' => '刪除 SSH 金鑰的話，',
            'will-invalidate-2' => '在面板上的使用都將無效。',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => '兩步驟驗證已啟用',
        'description' => '妥善保存這些備用碼，如果您的兩步驟驗證裝置遺失了可以用這些備用碼來恢復您的帳號。',
        'alert' => '這些代碼不會再次顯示。',
        'doneButton' => '完成',
    ],
];
