<?php

return[
    'backups' => '備份',
    'manage-backups' => '管理備份',
    'create-backup' => '創建備份',
    'have-been-allocated' => '已創建 {{current}} / {{max}} 個備份',

    'name' => '名稱',
    'size' => '大小',
    'creation-date' => '創建日期',
    'checksum' => 'Checksum',

    'failed' => '失敗',
    'continue' => '繼續',

    'download' => '下載',
    'restore' => '回復',
    'lock' => '鎖定',
    'unlock' => '解鎖',
    'delete' => '刪除',

    'limit-is-0' => '這個伺服器好像創不了備份耶，可用的備份數量為 0',
    'try-going-back' => '好像沒有更多備份了',
    'no-backups' => '看起來這伺服器沒有備份',
    'no-longer-protected' => '這個備份將不會再受到自動或意外刪除的保護',
    'your-server-will-be-stopped' => '你的伺服器將會停止。在完成之前，你將無法控制伺服器啟動狀態、存取檔案、創建另外的備份',
    'delete-all-files' => '在回復備份之前刪除所有檔案',
    'permanent-operation' => '這是永久性操作，備份只要被刪掉就不能回復了',

    'create' => [
        'title' => '創建伺服器備份',
        'backup-name' => '備份名稱',
        'backup-name-description' => '如果提供，這名字會是你能快速找到這備份的依據',
        'ignored-files-directories' => '忽略的檔案/資料夾',
        'ignored-files-directories-description' => '輸入在創建這個備份的時候要跳過的檔案/資料夾，如果要用"/home/container/.pteroignore"的設定，請將此處留空。通用符號可用於指定檔案，你也可以在路徑前面加上"!"來取消此規則',
        'locked' => '已鎖定',
        'locked-description' => '保護此備份不被刪除，直到他被解鎖',
        'start' => '開始備份',
    ]
];
