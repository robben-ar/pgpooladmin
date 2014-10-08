<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Message catalog in English
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
 * @copyright  2003-2013 PgPool Global Development Group
 * @version    CVS: $Id$
 */

$message = array(
    'lang' => 'en',
    'strLang' => 'English',

    'descAllow_sql_comments' => 'If on, ignore SQL comments when judging if load balance or query cache is possible',
    'descApp_name_redirect_preference_list' => '"application name:node id" pairs to specify the node id when the application is used',
    'descArping_path' => 'The path of a command to send an ARP request after the virtual IP is switched',
    'descArping_cmd' => 'The ommand to send an ARP request after the virtual IP is switched',
    'descAuthentication_timeout' => 'Timeout in seconds to complete client authentication',
    'descBackend_flag' => 'Allow failover and detach or not',
    'descBackend_hostname' => 'The real PostgreSQL server name pgpool could connect',
    'descBackend_port' => 'The port number where real PostgreSQL server is running on',
    'descBackend_socket_dir' => 'The socket directory PostgreSQL could connect',
    'descBackend_weight' => 'Load balance weight when pgpool is running in the state of load balance mode',
    'descBackend_data_directory' => 'PostgreSQL database directory',
    'descDelegate_IP' => 'The virtual IP address (VIP) of pgpool-II ',
    'descBlack_function_list' => 'Comma separated functions which write to database',
    'descBlack_memqcache_table_list' => 'Comma separated list of table names not to be cached',
    'descCheck_temp_table' => 'If on, enable temporary table check in SELECT statements',
    'descChild_life_time' => 'Life of an idle child process in seconds',
    'descChild_max_connections' => 'If child_max_connections connections were received, child exits',
    'descClear_memqcache_on_escalation' => 'If on, watchdog clears all the query cache in the shared memory when pgpool-II escaltes to active',
    'descClient_idle_limit' => 'Timeout in seconds while waiting for a query from a client',
    'descClient_idle_limit_in_recovery' => 'Timeout in seconds while waiting for a query '.
                                           'from a client in on line recovery',
    'descConnection_cache' => 'If true, cache connections to PostgreSQL',
    'descConnection_life_time' => 'Life time for each idle connection in seconds',
    'desCconnect_timeout' => 'Timeout value in milliseconds before giving up connecting to backend using connect() system call',
    'descDatabase_redirect_preference_list' => '"database name:node id" pairs to specify the node id when connecting to the database',
    'descDelay_threshold' => 'If the standby server delays more than delay_threshold, '.
                             'any query goes to the primary only',
    'descDebug_level' => 'Debug message verbosity level',
    'descEnable_pool_hba' => 'Use host-based authentication',
    'descEnable_query_cache' => 'Perform query cache',
    'descFailover_command' => 'Command to execute when detaching a node',
    'descFailback_command' => 'Command to execute when attaching a node',
    'descFailover_if_affected_tuples_mismatch' => 'Fail over due to disagreement with the number of affected tuples '.
                                                  'in UPDATE/DELETE',
    'descFail_over_on_backend_error' => 'Fail over when socket communication error to backend occurs',
    'descFollow_master_command' => 'Command to run only after a master failover',
    'descHeartbeat_destination' => 'The destination of heartbeat signals. Specify by hostname or IP address.',
    'descHeartbeat_destination_port' => 'The port number of the destination of heartbeat signals.',
    'descHeartbeat_device' => 'The network device name for sending heartbeat signals',
    'descHealth_check_period' => 'Specifies the interval for next health checking. 0 means no health checking, '.
                                 '-1 means no wait',
    'descHealth_check_timeout' => 'Pgpool does "health check" periodically to detect PostgreSQL servers down, '.
                                  'network communication problems or as such',
    'descHealth_check_user' => 'PostgreSQL user name for the health checking',
    'descHealth_check_password' => 'PostgreSQL password of the user to perform health checking',
    'descHealth_check_max_retries' => 'The maximum number of times to retry a failed health check before'.
                                      ' giving up and initiating failover',
    'descHealth_check_retry_delay' => 'The amount of time (in seconds) to sleep between failed health check retries',
    'descIfconfig_path' => 'The path of a command to switch the IP address',
    'descIf_down_cmd' => 'The command to bring down the virtual IP',
    'descIf_up_cmd' => 'The command to bring up the virtual IP',
    'descIgnore_leading_white_space' => 'If true, ignore leading white spaces of each query while pgpool judges '.
                                        'if the query is a SELECT so that it can be load balanced',
    'descInsert_lock' => ' If you replicate a table having SERIAL data type column, '.
                         'sometimes the serial value does not match between servers',
    'descListen_addresses' => 'Specifies the addresses to listen on for TCP/IP connections',
    'descListen_backlog_multiplier' => 'The number of preforked pgpool-II server processes',
    'descLoad_balance_mode' => 'Perform load balancing for SELECT',
    'descLobj_lock_table' => 'Specifies table name lock used when rewriting lo_create in replication mode',
    'descLog_destination' => 'Where to log',
    'descLog_connections' => 'If true, incoming connections will be printed to the log',
    'descLog_standby_delay' => 'Frequency to log the standby delay',
    'descLog_hostname' => 'If true, client\'s hostname will be shown in ps status and in a connection log '.
                          'if log_connections is true',
    'descLog_statement' => 'If true, print all statements to the log',
    'descLogdir' => 'The directory name to store pgpool\'s log files',
    'descLog_per_node_statement' => 'If true, print all statements to the log per DB node',
    'descPid_file_name' => 'The pid file name',
    'descMaster_slave_mode' => 'Run in master/slave mode',
    'descMaster_slave_sub_mode' => 'The way to replicare in Master/slave mode',
    'descMax_pool' => 'Number of connection pools each pgpool server process are keeping',
    'descMemory_cache_enabled' => 'Perform on memory query cache',
    'descMemqcache_method' => 'Cache store method',
    'descMemqcache_memcached_host' => 'Memcached host name',
    'descMemqcache_memcached_port' => 'Memcached port number',
    'descMemqcache_total_size' => 'Total memory size in bytes for storing memory cache',
    'descMemqcache_max_num_cache' => 'Total number of cache entries',
    'descMemqcache_expire' => 'Memory cache entry life time specified in seconds. 0 means infinite life time',
    'descMemqcache_auto_cache_invalidation' => 'If true, invalidation of query cache is triggered'.
                                               ' by corresponding DDL/DML/DCL',
    'descMemqcache_maxcache' => 'Maximum SELECT result size in bytes',
    'descMemqcache_cache_block_size' => 'Cache block size in bytes',
    'descMemqcache_oiddir' => 'Temporary work directory to record table OIDs',
    'descNum_init_children' => 'Number of pgpool processes initially forked',
    'descOther_pgpool_hostname' => 'The hostname pgpool-II server to be monitored',
    'descOther_pgpool_port' => 'The port number for pgpool on pgpool-II server to be monitored',
    'descOther_wd_port' => 'The port number for watchdog on pgpool-II server to be monitored',
    'descParallel_mode' => 'Run in parallel mode',
    'descPing_path' => 'The path of ping command for monitoring connection to the upper servers',
    'descPcp_port' => 'The port number where pcp is running on',
    'descPcp_socket_dir' => 'The socket directory pcp could connect',
    'descPcp_timeout' => 'When there is no response in this time from client, it disconnects and stop',
    'descPgpool2_hostname' => 'Pgpool2 server name where running on',
    'descPool_passwd' => 'File name of pool_passwd for md5 authentication',
    'descPort' => 'The port number where pgpool is running on',
    'descPrint_timestamp' => 'If true, timestamp is added to each log line',
    'descRecovery_user' => 'PostgreSQL user name for online recovery',
    'descRecovery_password' => 'PostgreSQL user password for online recovery',
    'descRecovery_1st_stage_command' => 'Recovery command to be excuted on the first stage',
    'descRecovery_2nd_stage_command' => 'Recovery command to be excuted on the second stage',
    'descRecovery_timeout' => 'Number of seconds to wait for online recovery to complete. 0 means no wait',
    'descRelcache_expire' => 'Life time of relation cache in seconds',
    'descRelcache_size' => 'Size of relation cache in bytes',
    'descReplication_mode' => 'Set this to true if you are going to use replication functionality',
    'descReplication_stop_on_mismatch' => 'Stop replication mode on data mismatch between master and secondary',
    'descReplicate_select' => 'If true, replicate SELECT queries. If false, send only to master',
    'descReplication_timeout' => 'In non strict replication mode, there will be a risk of deadlock. '.
                                 'Timeout in second for monitoring the deadlock',
    'descReset_query_list' => 'Semicolon separated SQL commands to be issued at the end of session',
    'descSsl' => 'The frontend connection',
    'descSsl_ca_cert' => 'Path to the SSL private key file',
    'descSsl_ca_cert_dir' => 'Path to the SSL public certificate file',
    'descSsl_cert' => 'Path to the SSL private key file',
    'descSsl_key' => 'Path to the SSL private key file',
    'descSocket_dir' => 'The socket directory pgpool could connect',
    'descSr_check_period' => 'Interval between the streaming replication delay checks in seconds.',
    'descSr_check_user' => 'User name to perform streaming replication check',
    'descSr_check_password' => 'Password of the user to perform streaming replication check',
    'descSyslog_facility' => 'Syslog local facility',
    'descSyslog_ident' => 'Syslog program identification string',
    'descSystem_db_dbname' => 'The database name of system database',
    'descSystem_db_hostname' => 'The server name system database running on',
    'descSystem_db_password' => 'The password of system database who connects system database',
    'descSystem_db_port' => 'The port number system database could connect',
    'descSystem_db_schema' => 'The schema name of system database',
    'descSystem_db_user' => 'The username when connection system database',
    'descTrusted_servers' => 'The list of trusted servers to check the up stream connections',
    'descUse_watchdog' => 'Enable watchdog',
    'descWd_authkey' => 'The authentication key used in watchdog communication',
    'descWd_escalation_command' => 'The command which will be executed on the new active when pgpool-II escaltes to active',
    'descWd_heartbeat_deadtime' => 'If there are no heartbeat signal for the period specified by this option, watchdog regards it as failure of the remote pgpool-II.',
    'descWd_heartbeat_keepalive' => 'The interval time of sending heartbeat signals in seconds',
    'descWd_heartbeat_port' => 'The port number to receive heartbeat signals',
    'descWd_hostname' => 'The hostname or IP address in which pgpool-II works',
    'descWd_interval' => 'The interval between life checks of pgpool-II in second',
    'descWd_life_point' => 'The times to retry a failed life check of pgpool-II',
    'descWd_lifecheck_dbname' => 'The database name connected for checking pgpool-II',
    'descWd_lifecheck_method' => 'The method of life check',
    'descWd_lifecheck_query' => 'Actual query to check pgpool-II',
    'descWd_lifecheck_password' => 'The user name to check pgpool-II',
    'descWd_lifecheck_user' => 'The password of the user to check pgpool-II',
    'descWd_port' => 'The port number on which pgpool-II works',
    'descWhite_function_list' => 'Comma separated functions those do not write to Database',
    'descWhite_memqcache_table_list' => 'Comma separated list of table names to be cached',

    'errAlreadyExist' => 'It already exists.',
    'errFileNotExecutable' => 'File not executable',
    'errFileNotFound' => 'File not found',
    'errFileNotWritable' => 'File not writable',
    'errIllegalHostname' => 'Illegal hostname',
    'errIllegalPipe' => 'Pipe destination is invalid',
    'errInputEverything' => 'Please input all items',
    'errNoDefined' => 'No defined parameter',
    'errNotSameLength' => 'The array length of col_list is not corresponding to that of type_list. '.
                          'It should be the same number of elements.',
    'errPasswordMismatch' => 'The passwords mismatch',
    'errRequired' => 'This is required',
    'errShouldBeInteger' => 'This should be an integer',
    'errShouldBeZeroOrMore' => 'This should be 0 or more',
    'errSingleQuotation' => 'Please enclose the array element with a single quotation.',

    'msgAddBackend' => 'Do you really add this node as a new backend?',
    'msgAddBackendNg' => 'Invalid.',
    'msgDeleteConfirm' => 'Do you really want to delete it?',
    'msgHasNotLoadedNode' => 'You have to reload pgpool to use the new backend node.',
    'msgMasterDbConnectionError' => 'Master DB connection failed',
    'msgPgpoolConfNotFound' => 'pgpool.conf not found',
    'msgPleaseSetup' => 'No found configuration file. Please execute the setup.',
    'msgReloadPgpool' => 'Do you really want to reload configuration files?',
    'msgRestart' => 'Please restart to reflect the change',
    'msgRestartPgpool' => 'Do you really want to restart pgpool?',
    'msgSameAsPasswordFile' => 'The value is the same as item Password File',
    'msgSameAsPgpoolFile' => 'The value is the same as item pgpool.conf File',
    'msgStartPgpool' => 'Do you really start pgpool?',
    'msgStopPgpool' => 'Do you really want to stop pgpool?',
    'msgUpdateComplete' => 'Update complete',
    'msgUpdateCompleteInfo' => 'You have to reload or restart pgpool to use new configuration.',
    'msgUpdateFailed' => 'Update failed',
    'msgDetachConfirm' => 'Do you really detach this node?',
    'msgReturnConfirm' => 'Do you really make this node return?',
    'msgRecoveryConfirm' => 'Do you really recover this node?',
    'msgRemoveBackend' => 'Do you really remove this backend node?',
    'msgRPromoteConfirm' => 'Do you really make this node primary?',

    'strAdd' => 'Add',
    'strAddBackend' => 'Add a new backend node',
    'strAddBackendNow' => 'Reload pgpool right after adding',
    'strAdminPassword' => 'Password',
    'strBack' => 'Back',
    'strBackendPid' => 'Backend Pid',
    'strCancel' => 'Cancel',
    'strChangePassword' => 'Change Password',
    'strClear' => 'Clear',
    'strClearQueryCache' => 'Clear Query Cache',
    'strCmdC' => 'Clears query cache',
    'strCmdD' => 'Debug mode',
    'strCmdDesc' => 'If it is a blank, this option is ignored.',
    'strCmdLargeC' => 'Discard oid maps for on memory query cache',
    'strCmdLargeD' => 'Discard pgpool_status file',
    'strCmdM' => 'Stop mode',
    'strCmdN' => 'Don\'t run in daemon mode',
    'strCmdPcpFile' => 'pcp.conf',
    'strCmdPgpoolFile' => 'pgpool.conf',
    'strColList' => 'Column list',
    'strColName' => 'Column name of distributed key',
    'strCommon' => 'Common',
    'strConnectionError' => 'Connection error',
    'strConnTime' => 'Connection create time',
    'strConnUsed' => 'Use of connection',
    'strConnUser' => 'Username',
    'strCreateTime' => 'Create time',
    'strDataError' => 'Data error',
    'strDateFormat' => 'M j G:i:s T Y',
    'strDb' => 'Database',
    'strDbName' => 'Database Name',
    'strDebug' => 'Debug Mode',
    'strDelete' => 'Delete',
    'strDeleted' => 'lines were deleted',
    'strDetail' => 'Detail',
    'strDetailInfo' => 'Detail Infomation',
    'strDisconnect' => 'Disconnect',
    'strDistDefFunc'=> 'Distributed Function Name',
    'strDown' => 'Down',
    'strError' => 'Error',
    'strErrorCode' => 'Error Code',
    'strErrorMessage' => 'Error Message',
    'strExecute' => 'Execute',
    'strFeature' => 'Feature',
    'strFrontendConnected' => 'Frontend Connected',
    'strHealthCheck' => 'Health Check',
    'strHelp' => 'Help',
    'strInvalidation' => 'Invalidation',
    'strIPaddress' => 'IP Address',
    'strLanguage' => 'Language',
    'strLoadBalanceMode' => 'Load Balance Mode',
    'strLog' => 'Log',
    'strLogin' => 'Login',
    'strLoginName' => 'Login Name',
    'strLogLatest' => 'Show the Latest',
    'strLogNext' => 'Next',
    'strLogout' => 'Logout',
    'strLogPrev' => 'Previous',
    'strLogReload' => 'Reload',
    'strLogShowAll' => 'Show the All Lines',
    'strLogShowLines' => 'Lines',
    'strMasterServer' => 'Master Server',
    'strMasterSlaveMode' => 'Master Slave mode',
    'strMeasures' => 'Measures',
    'strNodeInfo' => 'Node Info.',
    'strNodeStatus' => 'Node Status',
    'strNodeStatus1' => 'Up. Disconnect.',
    'strNodeStatus2' => 'Up. Connected.',
    'strNodeStatus3' => 'Down',
    'strNoNode' => 'There is no node',
    'strOff' => 'Off',
    'strOn' => 'On',
    'strParallelMode' => 'Parallel Mode',
    'strParameter' => 'Parameter',
    'strPassword' => 'Password',
    'strPasswordConfirmation' => 'Password Confirmation',
    'strPasswordFile' => 'Password File',
    'strPcpConfFile' => 'pcp.conf File',
    'strPcpDir' => 'PCP Directory',
    'strPcpHostName' => 'PCP Hostname',
    'strPcpRefreshTime' => 'Refresh Time',
    'strPcpTimeout' => 'PCP Timeout',
    'strPgConfFile' => 'pgpool.conf File',
    'strPgConfSetting' => 'pgpool.conf Setting',
    'strPgpool' => 'pgpool',
    'strPgpool1' => 'pgpool-I',
    'strPgpool2' => 'pgpool-II',
    'strPgpoolCommand' => 'pgpool Command',
    'strPgpoolCommandOption' => 'pgpool Command Option',
    'strPgpoolLogFile' => 'pgpool log destination',
    'strPgpoolManagementSystem' => 'pgpool-II Management System',
    'strPgpoolServer' => 'pgpool-II Server',
    'strPgpoolStatus' => 'pgpool Status',
    'strPgpoolSummary' => 'Summary',
    'strPleaseWait' => 'Please wait...',
    'strPort' => 'Port',
    'strPrimaryRunning' => 'Running as primary server',
    'strProcId' => 'Process ID',
    'strProcInfo' => 'Process Info.',
    'strProcTime' => 'Process Start Time',
    'strPromote' => 'Promote',
    'strProtocolMajorVersion' => 'Protocol Major Version',
    'strProtocolNinorVersion' => 'Protocol Minor Version',
    'strQueryCache' => 'Query Cache',
    'strQueryStr' => 'Query',
    'strReloadPgpool' => 'Reload',
    'strReloadPgsql' => 'Reload',
    'strReplicationMode' => 'Replication Mode',
    'strReset' => 'Reset',
    'strRestart' => 'Restart',
    'strRestartOption' => 'pgpool Restart Option',
    'strRestartPgpool' => 'Restart pgpool',
    'strRestartPgsql' => 'Restart',
    'strRestartPgsqlOption' => 'Restart PostgreSQL Option',
    'strRemoveBackend' => 'Remove',
    'strReturn' => 'Return',
    'strRecovery' => 'Recovery',
    'strSchemaName' => 'Schema Name',
    'strSearch' => 'Search',
    'strSecondaryServer' => 'Secondary Server',
    'strSetting' => 'pgpoolAdmin Setting',
    'strSetup' => 'Setup',
    'strSlonyMode' => 'Slony-I mode',
    'strStandbyRunning' => 'Running as standby server',
    'strStartOption' => 'Start Option',
    'strStartPgpool' => 'Start pgpool',
    'strStartPgsql' => 'Start',
    'strStatus' => 'Status',
    'strStopOption' => 'pgpool Stop Option',
    'strStopPgpool' => 'Stop pgpool',
    'strStopPgsql' => 'Stop',
    'strStopPgsqlOption' => 'Stop PostgreSQL Option',
    'strStoppingNow' => 'Not Running',
    'strStreamingRepMode' => 'Streaming Replication mode',
    'strSummary' => 'Summary',
    'strSystemDb' => 'Partitioning Rule',
    'strSystemCatalog' => 'System catalog',
    'strTable' => 'Table',
    'strTrustedServers' => 'List of Upstream Servers',
    'strTypeList' => 'Type List of Column',
    'strUp' => 'Up',
    'strUpdate' => 'Update',
    'strUnknown' => 'Unknown',
    'strValue' => 'Value',
    'strVersion' => 'pgpool-II version',
    'strVIP' => 'Virtual IP',
    'strWdActive' => 'Active',
    'strWdDown' => 'Down',
    'strWdInit' => 'Not Started',
    'strWdStandby' => 'Standby',
    'strWeight' => 'Weight',

    'e1' => 'pgmgt.conf.php not found.',
    'e2' => 'Message catalog not found.',
    'e3' => 'PCP command error occurred.',
    'e4' => 'pgpool.conf not found.',
    'e5' => 'Smarty template file not found.',
    'e6' => 'Help not found.',
    'e7' => 'Parameter not found in pgpmgt.conf.php',
    'e8' => 'pcp_timeout not found in pgpool.conf',
    'e9' => 'pcp_port not found in pgpool.conf',
    'e1001' => 'PCP command error occurred.',
    'e1002' => 'pcp_node_count command error occurred.',
    'e1003' => 'pcp_node_info command error occurred.',
    'e1004' => 'pcp_proc_count command error occurred.',
    'e1005' => 'pcp_proc_info command error occurred.',
    'e1006' => 'pcp_stop_pgpool command error occurred.',
    'e1007' => 'pcp_detach_node command error occurred.',
    'e1008' => 'pgpool.conf not found.',
    'e1009' => 'pcp.conf not found.',
    'e1010' => 'pcp_attach_node command error occurred.',
    'e1011' => 'Log file not found.',
    'e1012' => 'pcp_recovery_node command error occurred.',
    'e2001' => 'Database connection error occurred.',
    'e2002' => 'The error occurred when SELECT was executed',
    'e2003' => 'pgpool.conf not found.',
    'e3001' => 'Database connection error occurred.',
    'e3002' => 'The SQL error occurred when SELECT was executed',
    'e3003' => 'The SQL error occurred when INSERT was executed',
    'e3004' => 'The SQL error occurred when UPDATE was executed',
    'e3005' => 'The SQL error occurred when DELETE was executed',
    'e3006' => 'pgpool.conf not found.',
    'e4001' => 'pgpool.conf not found.',
    'e4002' => 'Could not read from pgpool.conf. ',
    'e4003' => 'Could not write to pgpool.conf. ',
    'e5001' => 'pgmgt.conf.php not found.',
    'e5002' => 'Could not read from pgmgt.conf.php.',
    'e5003' => 'Coult not write to pgmgt.conf.php.',
    'e6001' => 'pcp.conf not found.',
    'e6002' => 'Could not read from pcp.conf. ',
    'e6003' => 'Could not write to pcp.conf. ',
    'e7001' => 'pcp.conf not found.',
    'e8001' => 'Detailed information cannot be acquired.',
    'cautionaryNote' => 'NOTE: Updated to reflect the settings, the settings are required to reload. Also, '.
                        '[*] has pgpool items will be required to restart.',

);

?>
