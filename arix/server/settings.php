<?php

return [
    'settings' => '其他設定',

    'sftp' => [
        'title' => 'SFTP連線資訊',
        'server-address' => '伺服器地址',
        'username' => '使用者名稱',
        'description' => '你的SFTP密碼跟你的面板密碼一樣',
        'launch-sftp' => '啟動SFTP',
    ],

    'rename' => [
        'title' => '修改伺服器資訊',
        'server-name' => '伺服器名稱',
        'server-description' => '伺服器描述',
        'save' => '儲存',
    ],

    'debug' => [
        'title' => '除錯資訊',
        'node' => '節點',
        'server-id' => '伺服器ID',
    ],

    'reinstall' => [
        'title' => '重新安裝伺服器',
        'reinstall-started' => '你的伺服器已經開始重新安裝',
        'confirm-reinstallation' => '確認重裝伺服器',
        'yes-reinstall' => '是，重新安裝',
        'are-you-sure' => '你的伺服器將會被停止，且部分檔案將會被編輯或刪除，你確定要繼續嗎?',
        'desc-1' => '重新安裝伺服器會停止你的伺服器，並重新執行安裝腳本',
        'desc-2' => '部分檔案將會被編輯或刪除，請在重新安裝之前備份檔案',
        'reinstall-server' => '重新安裝伺服器',
    ],
];
