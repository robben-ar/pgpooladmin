<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Message catalog in Japanese
 *
 * PHP versions 4 and 5
 *
 * LICENSE: Permission to use, copy, modify, and distribute this software and
 * its documentation for any purpose and without fee is hereby
 * granted, provided that the above copyright notice appear in all
 * copies and that both that copyright notice and this permission
 * notice appear in supporting documentation, and that the name of the
 * author not be used in advertising or publicity pertaining to
 * distribution of the software without specific, written prior
 * permission. The author makes no representations about the
 * suitability of this software for any purpose.  It is provided "as
 * is" without express or implied warranty.
 *
 * @author     Ryuma Ando <ando@ecomas.co.jp>
 * @copyright  2003-2008 PgPool Global Development Group
 * @version    CVS: $Id$
 */

$message = array(
    'lang' => 'ja',
    'strLang' => '日本語',
    'descBackend_hostname' => 'pgpoolが接続するPostgreSQLサーバ(postmaster)が動いているホスト名',
    'descBackend_port' => 'PostgreSQLサーバのポート番号',
    'descBackend_socket_dir' => 'PostgreSQLサーバのUnix domain socketのディレクトリ',
    'descBackend_weight' => 'ロードバランスモード時のSELECTを振り分ける「重み」の定義',
    'descBackend_data_directory' => 'PostgreSQLサーバのデータベースディレクトリ',
    'descChild_life_time' => 'pgpoolの子プロセスの寿命',
    'descChild_max_connections' => '各pgpool子プロセスが終了するまでの接続回数',
	'descClient_idle_limit' => 'クライアントからのクエリの最大待ち時間(秒)',
	'descAuthentication_timeout' => 'クライアント認証のタイムアウト時間(秒)',
    'descConnection_cache' => 'コネクションキャッシュ機能の有無',
    'descConnection_life_time' => 'コネクションプール中のコネクションの有効期間(秒)',
    'descDelay_threshold' => '許容するスタンバイサーバの遅延時間(秒)',
	'descEnable_pool_hba' => 'クライアント認証機能の有無',
    'descEnable_query_cache' => 'クエリキャッシュ機能の有無',
    'descFailover_command' => 'ノード切り離し時に起動するコマンド',
    'descFailback_command' => 'ノード復帰時に起動するコマンド',
    'descFailover_if_affected_tuples_mismatch' => '更新行数が一致しないときにフェイルオーバ',
    'descFail_over_on_backend_error' => 'DBノードへのソケット通信エラー時にフェイルオーバ',
    'descHealth_check_period' => 'ヘルスチェックを行う間隔(秒)',
    'descHealth_check_timeout' => 'ヘルスチェックが長時間待たされるのを防ぐためのタイムアウト値(秒)',
    'descHealth_check_user' => 'ヘルスチェックを行うためのPostgreSQLユーザ名',
    'descIgnore_leading_white_space' => 'load balance時のSQL文行頭の空白を無視',
    'descInsert_lock' => 'INSERT時に自動的にトランザクションの開始，テーブルロック，トランザクションの終了',
    'descListen_addresses' => 'TCP/IPコネクションを受け付けるアドレス',
    'descLoad_balance_mode' => 'レプリケーションモード時にSELECT文を各ノードにロードバランス',
    'descLobj_lock_table' => 'ラージオブジェクトのレプリケーションでロック管理に使うためのテーブル名',
	'descLog_connections' => '受信した接続のログを出力',
	'descLog_hostname' => 'クライアントのホスト名を"ps"ステータスに出力',
    'descLog_standby_delay' => 'スタンバイサーバの遅延をログに記録する',
    'descLog_statement' => 'SQL文をログ出力',
    'descLogdir' => 'pgpoolの各種ログファイルを格納するディレクトリ',
    'descLog_per_node_statement' => 'DBノード毎にSQL文をログ出力',
    'descPid_file_name' => 'pidファイルの名前',
    'descMaster_slave_mode' => 'マスタ/スレーブモードでpgpoolを運転',
    'descMaster_slave_sub_mode' => 'マスタ/スレーブモードの伝播方法',
    'descMax_pool' => 'pgpoolの各サーバプロセスがキープするPostgreSQLへの最大コネクション数',
    'descNum_init_children' => 'preforkするpgpoolのサーバプロセス数',
    'descParallel_mode' => 'パラレルモードでpgpoolを運転',
    'descPcp_port' => 'pgpool-IIが受け付けているポート番号',
    'descPcp_socket_dir' => 'pcpがコネクションを受け付けるUnix domain socketディレクトリ',
    'descPcp_timeout' => 'この時間内にクライアントから応答がない場合はコネクションを切断して終了',
    'descPgpool2_hostname' => 'pgpool2 が動作しているホスト名',
    'descPort' => 'pgpoolがコネクションを受け付けるポート番号',
    'descPrint_timestamp' => 'pgpoolのログにタイムスタンプを追加',
    'descRecovery_user' => 'リカバリを行うためのPostgreSQLユーザ',
    'descRecovery_password' => 'リカバリを行うためのPostgreSQLユーザパスワード',
    'descRecovery_1st_stage_command' => 'オンラインリカバリ第1ステージで実行するコマンド',
    'descRecovery_2nd_stage_command' => 'オンラインリカバリ第2ステージで実行するコマンド',
    'descRecovery_timeout' => 'オンラインリカバリ終了までの待ち時間(秒)。0 は待ち時間無し',
	'descClient_idle_limit_in_recovery' => 'リカバリ中のクライアントからのクエリの最大待ち時間(秒)',
    'descReplication_mode' => 'レプリケーションモードの有効化',
    'descReplication_stop_on_mismatch' => 'マスタ/セカンダリ間のデータ不一致時に縮退運転',
	'descReplicate_select' => 'SELECT 文のレプリケーション',
    'descReplication_timeout' => 'デッドロックを監視するためのタイムアウト時間',
    'descReset_query_list' => 'セッションが終了するときにコネクションを初期化するためのSQLコマンド',
    'descSsl' => 'pgpool-IIとバックエンドの間のSSL接続',
    'descSsl_ca_cert' => 'opensslの-CAFileに指定するパス',
    'descSsl_ca_cert_dir' => 'opensslの-CApathに指定するディレクトリパス',
    'descSsl_cert' => 'フロントエンドとの接続に使用する公開x509証明書のフルパス',
    'descSsl_key' => 'フロントエンドとの接続に使用するプライベートキーファイルのフルパス',
    'descSocket_dir' => 'pgpoolがコネクションを受け付けるUnix domain socketディレクトリ',
    'descSystem_db_dbname' => 'System DBのデータベース名',
    'descSystem_db_hostname' => 'System DBが動いているホスト名',
    'descSystem_db_password' => 'System DBに接続するユーザのパスワード',
    'descSystem_db_port' => 'System DBに接続するためのポート番号',
    'descSystem_db_schema' => 'System DBのスキーマ',
    'descSystem_db_user' => 'System DBに接続するときのユーザ名',
    'errAlreadyExist' => 'すでに登録されています',
    'errFileNotExecutable' => 'コマンドを実行できません',
    'errFileNotFound' => 'ファイルが見つかりません',
    'errFileNotWritable' => 'ファイルの書き込みができません',
    'errIllegalHostname' => '不正なホスト名です',
	'errIllegalPipe' => 'パイプの指定が不正です',
    'errInputEverything' => 'すべてを入力してください',
    'errNoDefined' => 'パラメータが設定されていません',
    'errNotSameLength' => '列名リストと列データ型リストの配列の長さが一致しません。同じ要素数である必要があります。',
    'errPasswordMismatch' => 'パスワードが一致しません',
    'errRequired' => 'これは必須項目です',
    'errShouldBeInteger' => '0以上の整数を入力してください',
    'errShouldBeZeroOrMore' => '0以上である必要があります',
    'errSingleQuotation' => '配列要素をシングルクォーテーションで囲んでください。',
    'msgDeleteConfirm' => '本当に削除してよいですか？',
    'msgMasterDbConnectionError' => 'マスターDBに接続できません',
    'msgPgpoolConfNotFound' => 'pgpool.confが見つかりません',
    'msgPleaseSetup' => '設定ファイルが見つかりません。セットアップを実行してください。',
	'msgReloadPgpool' => '設定ファイルを再読み込みしてもよろしいですか？',
    'msgRestart' => '変更を反映するには再起動してください',
    'msgRestartPgpool' => 'pgpoolを再起動してよろしいですか？',
    'msgSameAsPasswordFile' => '値はパスワードファイルの設定値となります',
    'msgSameAsPgpoolFile' => '値はpgpool.confファイルの設定値となります',
    'msgStopPgpool' => 'pgpoolを停止してよいですか？',
    'msgUpdateComplete' => '更新は正常に終了しました',
    'msgUpdateFailed' => '更新に失敗しました',
    'msgDetachConfirm' => 'このノードを切断してよいですか？',
    'msgReturnConfirm', 'このノードを復帰させてよいですか？',
    'msgRecoveryConfirm', 'このノードをリカバリしますか？',
    'strAdd' => '追加',
    'strAdminPassword' => '管理者パスワード',
    'strBack' => '戻る',
    'strCancel' => 'キャンセル',
    'strChangePassword' => 'パスワード変更',
    'strClear' => 'クリア',
    'strClearQueryCache' => 'クエリキャッシュ削除',
    'strCmdC' => 'クエリキャッシュクリア',
    'strCmdD' => 'デバッグモード',
    'strCmdDesc' => '空白の場合には無視',
    'strCmdLargeD' => 'pgpool_status を無視',
    'strCmdM' => '停止モード',
    'strCmdN' => '非デーモンモード',
    'strCmdPcpFile' => 'pcp.conf',
    'strCmdPgpoolFile' => 'pgpool.conf',
    'strColList' => '列名リスト',
    'strColName' => '分散キー列名',
    'strCommon' => '共通',
    'strConnectionError' => 'コネクションエラー',
    'strConnTime' => 'コネクション作成時刻',
    'strConnUsed' => 'コネクション使用回数',
    'strConnUser' => '接続ユーザ名',
    'strCreateTime' => '作成時刻',
    'strDataError' => 'データエラー',
    'strDateFormat' => 'Y年m月d日 H時i分s秒',
    'strDb' => 'データベース名',
    'strDbName' => 'データベース名',
    'strDebug' => 'デバッグモード',
    'strDelete' => '削除',
    'strDeleted' => 'レコードが削除されました',
    'strDetail' => '詳細',
    'strDetailInfo' => '詳細情報',
    'strDisconnect' => '切断',
    'strDistDefFunc'=> '分散関数名',
    'strDown' => 'ダウン',
    'strError' => 'エラー',
    'strErrorCode' => 'エラーコード',
    'strErrorMessage' => 'エラーメッセージ',
    'strExecute' => '実行',
    'strFeature' => '機能',
    'strHealthCheck' => 'ヘルスチェック',
    'strHelp' => 'ヘルプ',
    'strInvalidation' => '無効',
    'strIPaddress' => 'IPアドレス',
    'strLanguage' => '言語',
    'strLoadBalanceMode' => 'ロードバランスモード',
    'strLog' => 'ログ',
    'strLogin' => 'ログイン',
    'strLoginName' => 'ログイン名',
    'strLogout' => 'ログアウト',
    'strMasterServer' => 'マスターサーバ',
    'strMeasures' => '対策',
    'strNodeInfo' => 'ノード情報',
    'strNodeStatus' => 'ノードステータス',
    'strNodeStatus1' => 'ノード稼働中。接続無し',
    'strNodeStatus2' => 'ノード稼働中。接続有り',
    'strNodeStatus3' => 'ノードダウン',
    'strNoNode' => 'ノードがありません',
    'strOff' => 'オフ',
    'strOn' => 'オン',
    'strParallelMode' => 'パラレルモード',
    'strParameter' => '項目',
    'strPassword' => 'パスワード',
    'strPasswordConfirmation' => 'パスワード(確認)',
    'strPasswordFile' => 'パスワードファイル',
    'strPcpConfFile' => 'pcp.confファイル',
    'strPcpDir' => 'PCPディレクトリ',
    'strPcpHostName' => 'PCPホスト名',
    'strPcpRefreshTime' => '更新間隔(0で自動更新しない)',
    'strPcpTimeout' => 'PCPタイムアウト',
    'strPgConfFile' => 'pgpool.confファイル',
    'strPgConfSetting' => 'pgpool.conf設定',
    'strPgpool' => 'pgpool',
    'strPgpool1' => 'pgpool-I',
    'strPgpool2' => 'pgpool-II',
    'strPgpoolCommand' => 'pgpoolコマンド',
    'strPgpoolCommandOption' => 'pgpoolコマンドオプション',
    'strPgpoolLogFile' => 'pgpoolログ出力先',
    'strPgpoolManagementSystem' => 'pgpool-II管理システム',
    'strPgpoolServer' => 'pgpool-IIサーバ',
    'strPgpoolStatus' => 'pgpoolステータス',    
    'strPgpoolSummary' => 'サマリー',
    'strPleaseWait' => 'しばらくお待ちください・・・',
    'strPort' => 'ポート',
    'strProcId' => 'プロセスID',
    'strProcInfo' => 'プロセス情報',
    'strProcTime' => 'プロセススタート時刻',
    'strProtocolMajorVersion' => 'プロトコルメジャーバージョン',
    'strProtocolNinorVersion' => 'プロトコルマイナーバージョン',
    'strQueryCache' => 'クエリキャッシュ',
    'strQueryStr' => 'クエリ文字列',
    'strReloadPgpool' => '設定リロード',
    'strReplicationMode' => 'レプリケーションモード',
    'strReset' => 'リセット',
    'strRestart' => '再起動',
    'strRestartOption' => 'pgpool再起動オプション',
    'strRestartPgpool' => 'pgpool再起動',
    'strReturn' => '復帰',
    'strRecovery' => 'リカバリ',
    'strSchemaName' => 'スキーマ名',
    'strSearch' => '検索',
    'strSecondaryServer' => 'セカンダリサーバ',
    'strSetting' => '管理ツール設定',
    'strSetup' => 'セットアップ',
    'strStartOption' => '起動オプション',
    'strStartPgpool' => 'pgpool起動',
    'strStatus' => 'ステータス',
    'strStopOption' => 'pgpool停止オプション',
    'strStopPgpool' => 'pgpool停止',
    'strSummary' => '概要',
    'strSystemDb' => '分散ルール',
    'strTable' => 'テーブル名',
    'strTypeList' => '列データ型リスト',
    'strUp' => 'アップ',
    'strUpdate' => '更新',
    'strValue' => '値',
    'strWeight' => 'ウェイト',
    'e1' => 'pgmgt.conf.phpが見つかりません',
    'e2' => 'メッセージカタログが見つかりません',
    'e3' => 'pcpコマンドエラーが発生しました',
    'e1' => 'pgmgt.conf.phpが見つかりません',
    'e2' => 'メッセージカタログが見つかりません',
    'e3' => 'pcpコマンドエラーが発生しました',
    'e4' => 'pgpool.confが見つかりません',
    'e5' => 'テンプレートファイルが見つかりません',
    'e6' => 'ヘルプが見つかりません',
    'e7' => 'pgmgt.conf.phpのパラメータが足りません',
    'e8' => 'pcp_timeoutがpgpool.confで見つかりません',
    'e9' => 'pcp_portがpgpool.confで見つかりません',
    'e1001' => 'pcpコマンドエラーが発生しました',
    'e1002' => 'pcp_node_countコマンドでエラーが発生しました',
    'e1003' => 'pcp_node_infoコマンドでエラーが発生しました',
    'e1004' => 'pcp_proc_countコマンドでエラーが発生しました',
    'e1005' => 'pcp_proc_infoコマンドでエラーが発生しました',
    'e1006' => 'pcp_stop_pgpoolコマンドでエラーが発生しました',
    'e1007' => 'pcp_detach_nodeコマンドでエラーが発生しました',
    'e1008' => '指定したpgpool.confが見つかりません',
    'e1009' => '指定したpcp.confが見つかりません',
    'e1010' => 'pcp_attach_nodeコマンドでエラーが発生しました',
    'e1011' => 'ログファイルが見つかりません',
    'e1012' => 'pcp_recovery_nodeコマンドでエラーが発生しました',
    'e2001' => 'データベースに接続できません',
    'e2002' => 'レコード取得時にエラーが発生しました',
    'e2003' => 'pgpool.confが見つかりません',
    'e3001' => 'データベースに接続できません',
    'e3002' => 'レコード取得時にエラーが発生しました',
    'e3003' => 'レコード登録時にエラーが発生しました',
    'e3004' => 'レコード更新時にエラーが発生しました',
    'e3005' => 'レコード削除時にエラーが発生しました',
    'e3006' => 'pgpool.confが見つかりません',
    'e4001' => 'pgpool.confが見つかりません',
    'e4002' => 'pgpool.confから読み込みができません',
    'e4003' => 'pgpool.confに書き込みができません',
    'e5001' => 'pgmgt.conf.phpが見つかりません',
    'e5002' => 'pgmgt.conf.phpから読み込みができません',
    'e5003' => 'pgmgt.conf.phpに書き込みができません',
    'e6001' => 'pcp.confが見つかりません',
    'e6002' => 'pcp.confに読み込みができません',
    'e6003' => 'pcp.confに書き込みができません',
    'e7001' => 'pcp.confが見つかりません',
    'e8001' => '詳細情報が取得できません',
    'cautionaryNote' => '注: 更新した設定を反映させるには、設定のリロードが必要です。また、[*]が付いている項目は pgpool の再起動が必要となります。',

);

?>
