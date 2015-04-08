<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Message catalog in Spanish
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
 * @author     Rodrigo Ramírez Norambuena <decipher.hk@gmail.com>
 * @copyright  2003-2013 PgPool Global Development Group
 * @version    CVS: $Id$
 */

$message = array(
    'lang' => 'es',
    'strLang' => 'Español',

    'descAllow_sql_comments' => 'Si está activado, ignora los comentarios SQL cuando hay balanceo de carga o cacheo de consultas son posibles',
    'descApp_name_redirect_preference_list' => '"nombre aplicacion:nodo id" para especificar el nodo y aplicacion que la utiliza',
    'descArping_path' => 'Ruta para enviar comando ARP despues de cambio de IP Virtual',
    'descArping_cmd' => 'Comando a enviar solicitud ARP despues de cambio de IP Virtual',
    'descAuthentication_timeout' => 'Espera en segundos para completar autenticacion del cliente',
    'descBackend_flag' => 'Permitir failover y detach o no',
    'descBackend_hostname' => 'El nombre del servidor PostgreSQL server donde pgpool se conectara',
    'descBackend_port' => 'El numero del puerto donde el servidor PostgreSQL server se esta ejecutando',
    'descBackend_socket_dir' => 'La direccion del socket de PostgreSQL',
    'descBackend_weight' => 'Peso de Balanceo de carga cuando pgpool se está ejecutando en ese modo',
    'descBackend_data_directory' => 'Directorio de la data de PostgreSQL',
    'descDelegate_IP' => 'Ip virtual (VIP) de pgpool-II ',
    'descBlack_function_list' => 'Funciones a escribir en la base de datos, separadas por coma.',
    'descBlack_memqcache_table_list' => 'Listado de nombre de tablas (separadas por coma) a no cachear.',
    'descCheck_temp_table' => 'Si está activado, habilita revisión de tablas temporales en sentencias SELECT',
    'descChild_life_time' => 'Tiempo de inactividad en segundos para el proceso hijo',
    'descChild_max_connections' => 'If child_max_connections connections were received, child exits',
    'descClear_memqcache_on_escalation' => 'If on, watchdog clears all the query cache in the shared memory when pgpool-II escaltes to active',
    'descClient_idle_limit' => 'Timeout in seconds while waiting for a query from a client',
    'descClient_idle_limit_in_recovery' => 'Tiempo en segundos a esperar por una consulta '.
                                           'del cliente en linea recuperacion',
    'descClient_min_messages' => 'El nivel minimo de mensajes enviados a los clientest',
    'descConnection_cache' => 'Si está habilitado, las conexiones se cachean para PostgreSQL',
    'descConnection_life_time' => 'Tiempo en segundo para conexiones en espera',
    'desCconnect_timeout' => 'Tiempo en milisegundos antes de que el backend use la llamada a sistema connect()',
    'descDatabase_redirect_preference_list' => '"nombre base de datos:nodo id" especificación de conexiones de nodos a la base de datos',
    'descDelay_threshold' => 'Si el servidor standby se demora mas de lo configurado como delay_threshold, '.
                             'las consultas se ejecutan en nodo primario solamente',
    'descDebug_level' => 'Nivel de profundidad de los mensajes de depuración',
    'descEnable_pool_hba' => 'Usar autenticación basada en host',
    'descEnable_query_cache' => 'Rendimiento query cache',
    'descFailover_command' => 'Comando a ejecutar cuando un nodo hace detaching',
    'descFailback_command' => 'Comando a ejecutar cuando un nodeo hace attaching',
    'descFailover_if_affected_tuples_mismatch' => 'Fail over por problema con el numero de tuplas afectadas '.
                                                  'en UPDATE/DELETE',
    'descFail_over_on_backend_error' => 'Fail over cuando existe un problema de comunicacion con el socket del backend',
    'descFollow_master_command' => 'Comando a ejecutar despues de un failover del master',
    'descHeartbeat_destination' => 'El destino de las señales de heartbeats. Especificar por hostname o dirección IP.',
    'descHeartbeat_destination_port' => 'El puerto destino de las señales heartbeat.',
    'descHeartbeat_device' => 'El dispositivo de red donde se envian las señales heartbeat',
    'descHealth_check_period' => 'El intervalo del siguiente chequeo health. 0 igual a no chequeo health, '.
                                 '-1 es no esperar',
    'descHealth_check_timeout' => 'Hace que Pgpool haga "chequeo health" periodicamente para detectar caidas de servidores PostgreSQL, '.
                                  'errores de comunicacion o otro tipo de problemas',
    'descHealth_check_user' => 'Usuario de PostgreSQL para el chequeo health',
    'descHealth_check_password' => 'Contraseña del usuario PostgreSQL para el chequeo health',
    'descHealth_check_max_retries' => 'El numero de reintento fallados de el chequeo  health antes'.
                                      ' de iniciar un failover',
    'descHealth_check_retry_delay' => 'El tiempo (en segundos) de esperar entre reintento de fallod de chequeos health check',
    'descIfconfig_path' => 'La ruta del comando para cambiar la dirección IP',
    'descIf_down_cmd' => 'El comando para bajar la dirección IP Virtual',
    'descIf_up_cmd' => 'El comando para subir la IP virtual',
    'descIgnore_leading_white_space' => 'Si se habilita, se ignoran los espacios en blanco de cada consulta por pgpool '.
                                        'si la consulta es un SELECT entonces  puede ser balanceada',
    'descInsert_lock' => ' Si replica una tabla teniendo una columna tipo SERIAL, '.
                         'a veces el valor del serial no es igual entre los servidor',
    'descListen_addresses' => 'La dirección donde escuchar las peticiones de conexiones TCP/IP',
    'descListen_backlog_multiplier' => 'El numero de procesos  preforked del servidor pgpool-II',
    'descLoad_balance_mode' => 'Caracteristica de balanceo de carga para SELECT',
    'descLobj_lock_table' => 'El nombre de la tabla de bloquedo cuando se reescribe lo_create en el modo replicación',
    'descLog_connections' => 'Si se activa, las conexiones entrantes de agregan a log',
    'descLog_destination' => 'Destino de los logs',
    'descLog_error_verbosity' => 'El nivel de detalle para los mensajes del log',
    'descLog_line_prefix' => 'Formato para los logs',
    'descLog_min_messages' => 'Nivel minimo de los logs',
    'descLog_standby_delay' => 'Frecuenta para los logs de espera del standby',
    'descLog_hostname' => 'Si se activa, el nombre del cliente son mostrados en ps status del logs de conexiones '.
                          'si log_connections está activado',
    'descLog_statement' => 'Imprimir todas las transacciones en el log',
    'descLogdir' => 'Directorio donde se almacenan los archivos de log de pgpool',
    'descLog_per_node_statement' => 'Registrar todos las trasaccionesen el log por cada nodo',
    'descPid_file_name' => 'El pid  del archivo',
    'descMaster_slave_mode' => 'Ejecutar en modo maestro/esclavo',
    'descMaster_slave_sub_mode' => 'La forma a replicar en modo Maestro/Esclavo',
    'descMax_pool' => 'Numero de conexiones de cada proceso de pgpool atenderá',
    'descMemory_cache_enabled' => 'Rendimiento de moemoria en el query cache',
    'descMemqcache_method' => 'Metodo de almacenamiento del Cache',
    'descMemqcache_memcached_host' => 'Nombre del host de Memcached',
    'descMemqcache_memcached_port' => 'Puerto de Memcached',
    'descMemqcache_total_size' => 'Tamaño de la memoria en bytes para almacenar el cache',
    'descMemqcache_max_num_cache' => 'Numero de entradas del cache',
    'descMemqcache_expire' => 'Tiempo de expiración del cache expresado en segundo. 0 indica tiempo indefinido',
    'descMemqcache_auto_cache_invalidation' => 'Inabilitar cache para  triggered'.
                                               ' tipo DDL/DML/DCL',
    'descMemqcache_maxcache' => 'Tamaño en bytes para los resultados de los SELECT',
    'descMemqcache_cache_block_size' => 'Tamaño en bytes de los bloques del Cache',
    'descMemqcache_oiddir' => 'Directorio temporal donde registra los OIDs de las tablas',
    'descNum_init_children' => 'Numero de proceso de pgpool al iniciar el forked',
    'descOther_pgpool_hostname' => 'El nombre del host del servidor pgpool-II a monitorear',
    'descOther_pgpool_port' => 'Puerto del servidor pgpool-II server a monitorea',
    'descOther_wd_port' => 'El puerto del watchdog en pgpool-II a monitorear',
    'descParallel_mode' => 'Ejecutar en modo paralelo',
    'descPing_path' => 'La ruta del comando para monitorea el up de los servidor',
    'descPcp_port' => 'Puerto donde pcp se ejecuta',
    'descPcp_socket_dir' => 'El socket donde pcp funciona',
    'descPcp_timeout' => 'Cuando no ha respuesta desde el cliente, se desconecta y detiene',
    'descPgpool2_hostname' => 'Nombre del servidor Pgpool2 donde se ejecuta',
    'descPool_passwd' => 'Archivo pool_passwd para autenticación md5',
    'descPort' => 'Puerto donde pgpool se ejecuta',
    'descPrint_timestamp' => 'Agregar tiempo (timestamp) para cada log',
    'descRecovery_user' => 'Usuario de PostgreSQL para el  online recovery',
    'descRecovery_password' => 'Contraseña PostgreSQL para el online recovery',
    'descRecovery_1st_stage_command' => 'Primer comando a ejecutar en el Recovery',
    'descRecovery_2nd_stage_command' => 'Segundo comando a ejecutar en el Recovery',
    'descRecovery_timeout' => 'Numero de segundos a esperar el completar el online recovery. 0 indica no esperar',
    'descRelcache_expire' => 'Tiempo en segundos de relation cache',
    'descRelcache_size' => 'Tamaño en bytes de relation cache',
    'descReplication_mode' => 'Establecer si se va utilizar la funcionalidad de replicación',
    'descReplication_stop_on_mismatch' => 'Detener modo de replicación cuando exista discordancia de datos entre maestro y esclavo',
    'descReplicate_select' => 'Replicación se consultas SELECT. Falso para enviar solo al maestro',
    'descReplication_timeout' => 'En el modo replicación no estricto, existe un riesgo de deadlock. '.
                                 'Tiempo en segundo para el monitoreo de  deadlock',
    'descReset_query_list' => 'Comandos SQL que se ejecutaran al terminar sesión, separados por punto y coma',
    'descSsl' => 'La conexión frontend',
    'descSsl_ca_cert' => 'Ruta de el archivo privado de las claves SSL',
    'descSsl_ca_cert_dir' => 'Ruta del archivo publico de las claves SSL',
    'descSsl_cert' => 'Ruta del archivo de claves privadas SSL',
    'descSsl_key' => 'Ruta del archivo del archivo privado de claves SSL',
    'descSocket_dir' => 'Directorio del socket a conectarse a pgpool could',
    'descSr_check_period' => 'Intervalo de espera en segundos entre chequeos del streaming replication.',
    'descSr_check_user' => 'Nombre de usuario para el chequeo de streaming replication',
    'descSr_check_password' => 'Contraseña del usuario del chequeo de streaming replication',
    'descSyslog_facility' => 'Syslog local facility',
    'descSyslog_ident' => 'Programa Syslog para la identificación de string',
    'descSystem_db_dbname' => 'El nombre de la base de datos del motor',
    'descSystem_db_hostname' => 'El nombre del servidor donde está funcionando el sistema de base de datos',
    'descSystem_db_password' => 'La contraseña para conectarse al sistema de base de datos',
    'descSystem_db_port' => 'Puerto donde conectarse al sistema de base de datos',
    'descSystem_db_schema' => 'Nombre del esquema del sistema de base de datos',
    'descSystem_db_user' => 'Nombre de usuario de la conexión al sistema de base de datos',
    'descTrusted_servers' => 'Listado de servidores confiafles para el chequeo de conexiones',
    'descUse_watchdog' => 'Habilitar watchdog',
    'descWd_authkey' => 'La clave a usar para la autentifación en la comunicación watchdog',
    'descWd_escalation_command' => 'Comando a ejecutar cuando en pg pgpool-II escale un nuevo activo',
    'descWd_heartbeat_deadtime' => 'Si no han señal de heartbeat en el perido definido en esta opción, watchdog considera un fracaso del remoto pgpool-II.',
    'descWd_heartbeat_keepalive' => 'Intervalo de tiempo en segundos donde se envian las señales heartbeat',
    'descWd_heartbeat_port' => 'Número del puerto donde recibe señales heartbeat',
    'descWd_hostname' => 'Dirección IP de pgpool-II',
    'descWd_interval' => 'Intervalo en segundos para chequear pgpool-II',
    'descWd_life_point' => 'Número de reintentos a chequear pgpool-II',
    'descWd_lifecheck_dbname' => 'Nombre de la base de datos a conectar para chequear pgpool-II',
    'descWd_lifecheck_method' => 'Método de chequeo',
    'descWd_lifecheck_query' => 'Actual consulta para chequear pgpool-II',
    'descWd_lifecheck_password' => 'El nombre de usuario que chequea pgpool-II',
    'descWd_lifecheck_user' => 'La contraseña del usuario que chequea pgpool-II',
    'descWd_port' => 'Numero del puerto donde pgpool-II funciona',
    'descWhite_function_list' => 'Listado de funciones separadas por coma que no deben agregarse a la base de datos',
    'descWhite_memqcache_table_list' => 'Listado de tables separadas por coma para ser cacheadas',

    'errAlreadyExist' => 'Ya existe.',
    'errFileNotExecutable' => 'El archivo no es ejecutable',
    'errFileNotFound' => 'Archivo no encontrado',
    'errFileNotWritable' => 'No se puede escribir en el archivo',
    'errIllegalHostname' => 'Nombre del host invalido',
    'errIllegalPipe' => 'Destino Pipe es invalido',
    'errInputEverything' => 'Por favor ingresa todos los items',
    'errNoDefined' => 'Parámetross no definidos',
    'errNotSameLength' => 'La longitud del array col_list is no corresponde para el type_list. '.
                          'Debe tener el mismo numero de elementos.',
    'errPasswordMismatch' => 'Las contraseñas no coinciden',
    'errRequired' => 'Requerido',
    'errShouldBeInteger' => 'El valor debe ser entero',
    'errShouldBeZeroOrMore' => 'Debes agregar 0 o mas',
    'errSingleQuotation' => 'Por favor encierra los elementos array entre comillas simples.',

    'msgAddBackend' => '¿Deseas agregar este nodo como nuevo backend?',
    'msgAddBackendNg' => 'Inválido',
    'msgDeleteConfirm' => '¿Deseas eliminarlo?',
    'msgHasNotLoadedNode' => 'Debes recargar pgpool para usar el nuevo nodo backend.',
    'msgMasterDbConnectionError' => 'Conexión a  Maestro DB fallada',
    'msgPgpoolConfNotFound' => 'No encontrado pgpool.conf',
    'msgPleaseSetup' => 'No found configuration file. Please execute the setup.',
    'msgReloadPgpool' => '¿Quieres recargar archivos de configuración?',
    'msgRestart' => 'Por favor reiniciar para que los cambios se realicen',
    'msgRestartPgpool' => '¿Quieres reiniciar pgpool?',
    'msgSameAsPasswordFile' => 'El valor debe ser igual al archivo de contraseñas',
    'msgSameAsPgpoolFile' => 'El valor debe ser igual al del archivo pgpool.conf',
    'msgStartPgpool' => '¿Deseas iniciar pgpool?',
    'msgStopPgpool' => '¿Deseas detener pgpool?',
    'msgUpdateComplete' => 'Actualización realizada',
    'msgUpdateCompleteInfo' => 'Tienes que recargar o reiniciar pgpool para usar estas nuevas configuraciones.',
    'msgUpdateFailed' => 'Falló Actualización',
    'msgDetachConfirm' => '¿Deseas hacer detach a este nodo?',
    'msgReturnConfirm' => '¿Deseas crear este nodo return?',
    'msgRecoveryConfirm' => '¿Deseas recuperar este nodo?',
    'msgRemoveBackend' => '¿Quieres remover esto de nodo backend?',
    'msgRPromoteConfirm' => '¿Realmente quieres dejar este nodo como primario?',

    'strAdd' => 'Añadir',
    'strAddBackend' => 'Agregar un nuevo nodo al backend',
    'strAddBackendNow' => 'Recargar pgpool después de añadir',
    'strAdminPassword' => 'Contraseña',
    'strBack' => 'Atrás',
    'strBackendPid' => 'Backend Pid',
    'strCancel' => 'Cancel',
    'strChangePassword' => 'Cambiar contraseña',
    'strClear' => 'Limpiar',
    'strClearQueryCache' => 'Eliminar cache de consultas',
    'strCmdC' => 'Eliminación de consultas cache',
    'strCmdD' => 'Modo Depuración',
    'strCmdDesc' => 'En blanco esta opción no es considerada.',
    'strCmdLargeC' => 'Descartar oid maps en consultas cache en memoria',
    'strCmdLargeD' => 'Descartar archivo pgpool_status',
    'strCmdM' => 'Modo detenido',
    'strCmdN' => 'No ejecutar en modo daemon',
    'strCmdPcpFile' => 'pcp.conf',
    'strCmdPgpoolFile' => 'pgpool.conf',
    'strColList' => 'Lista columnas',
    'strColName' => 'Nombre de columna de distribución',
    'strCommon' => 'Common',
    'strConnectionError' => 'Error de Conexión',
    'strConnTime' => 'Conexión creada',
    'strConnUsed' => 'Uso de conexión',
    'strConnUser' => 'nombre de usuario',
    'strCreateTime' => 'Tiempo de creación',
    'strDataError' => 'Error Data',
    'strDateFormat' => 'M j G:i:s T Y',
    'strDb' => 'Base de datos',
    'strDbName' => 'Nombre base de datos',
    'strDebug' => 'Modo Depuración',
    'strDelete' => 'Eliminar',
    'strDeleted' => 'lineas fuera eliminadas',
    'strDetail' => 'Detalle',
    'strDetailInfo' => 'Detalle información',
    'strDisconnect' => 'Desconectado',
    'strDistDefFunc'=> 'Nombre función distribuida',
    'strDown' => 'Abajo',
    'strError' => 'Error',
    'strErrorCode' => 'Codigo Error',
    'strErrorMessage' => 'Mensaje Error',
    'strExecute' => 'Ejecuta',
    'strFeature' => 'Característica',
    'strFrontendConnected' => 'Frontend Conectado',
    'strHealthCheck' => 'Chequeo',
    'strHelp' => 'Ayuda',
    'strInvalidation' => 'Invalidación',
    'strIPaddress' => 'Direccion IP',
    'strLanguage' => 'Idioma',
    'strLoadBalanceMode' => 'Modo Balanceo de carga',
    'strLog' => 'Log',
    'strLogin' => 'Inicio sesión',
    'strLoginName' => 'Nombre inicio sesión',
    'strLogLatest' => 'Mostrar el último',
    'strLogNext' => 'Siguiente',
    'strLogout' => 'Salir',
    'strLogPrev' => 'Anterior',
    'strLogReload' => 'Recargar',
    'strLogShowAll' => 'Mostrar todas las lineas',
    'strLogShowLines' => 'Lineas',
    'strMasterServer' => 'Servidor Maestro',
    'strMasterSlaveMode' => 'Modo Maestro Esclavo',
    'strMeasures' => 'Medidas',
    'strNodeInfo' => 'Info. Nodo',
    'strNodeStatus' => 'Estado Nodo',
    'strNodeStatus1' => 'Arriba Desconectado',
    'strNodeStatus2' => 'Arriba Conectado',
    'strNodeStatus3' => 'Abajo',
    'strNoNode' => 'No hay ningún nodo',
    'strOff' => 'Apagado',
    'strOn' => 'Activado',
    'strParallelMode' => 'Modo paralelo',
    'strParameter' => 'Parámetros',
    'strPassword' => 'Contraseña',
    'strPasswordConfirmation' => 'Confirmación contraseña',
    'strPasswordFile' => 'Archivo de contraseñas',
    'strPcpConfFile' => 'Archivo pcp.conf',
    'strPcpDir' => 'PCP Directorio',
    'strPcpHostName' => 'PCP Nombre del Host',
    'strPcpRefreshTime' => 'Tiempo de actualización',
    'strPcpTimeout' => 'PCP Espera',
    'strPgConfFile' => 'Archivo pgpool.conf',
    'strPgConfSetting' => 'Configuración pgpool.conf',
    'strPgpool' => 'pgpool',
    'strPgpool1' => 'pgpool-I',
    'strPgpool2' => 'pgpool-II',
    'strPgpoolCommand' => 'Comando pgpool',
    'strPgpoolCommandOption' => 'Opcion comando pgpool',
    'strPgpoolLogFile' => 'Destino Logs pgpool',
    'strPgpoolManagementSystem' => 'Sistema de control pgpool-II',
    'strPgpoolServer' => 'Servidor pgpool-II',
    'strPgpoolStatus' => 'Estado pgpool',
    'strPgpoolSummary' => 'Resumen',
    'strPleaseWait' => 'Por favor espere...',
    'strPort' => 'Puerto',
    'strPrimaryRunning' => 'Corriendo como servidor primario',
    'strProcId' => 'ID Proceso',
    'strProcInfo' => 'Info. Proceso',
    'strProcTime' => 'Tiempo inicio proceso',
    'strPromote' => 'Promover',
    'strProtocolMajorVersion' => 'Version mayor del Protocolo',
    'strProtocolNinorVersion' => 'Version menor del Protocolo',
    'strQueryCache' => 'Cache Consultas',
    'strQueryStr' => 'Consulta',
    'strReloadPgpool' => 'Recargar',
    'strReloadPgsql' => 'Recargar',
    'strReplicationMode' => 'Modo Replicacion',
    'strReset' => 'Reseteo',
    'strRestart' => 'Reiniciar',
    'strRestartOption' => 'Opcion reinciar pgpool',
    'strRestartPgpool' => 'Reiniciar pgpool',
    'strRestartPgsql' => 'Reiniciar',
    'strRestartPgsqlOption' => 'Opcion de reiniciado de PostgreSQL',
    'strRemoveBackend' => 'Eliminar',
    'strReturn' => 'Devolver',
    'strRecovery' => 'Recuperacion',
    'strSchemaName' => 'Nombre esquema',
    'strSearch' => 'Buscar',
    'strSecondaryServer' => 'Servidor secundario',
    'strSetting' => 'Configuración pgpoolAdmin',
    'strSetup' => 'Instalación',
    'strSlonyMode' => 'Modo Slony-I',
    'strStandbyRunning' => 'Ejecutandose como servidor standby',
    'strStartOption' => 'Opción Iniciar',
    'strStartPgpool' => 'Iniciar pgpool',
    'strStartPgsql' => 'Iniciar',
    'strStatus' => 'Estado',
    'strStopOption' => 'Opcion detener pgpool',
    'strStopPgpool' => 'Detener pgpool',
    'strStopPgsql' => 'Detener',
    'strStopPgsqlOption' => 'Opcion detener PostgreSQL',
    'strStoppingNow' => 'Detenido',
    'strStreamingRepMode' => 'Modo Streaming Replication',
    'strSummary' => 'Resumen',
    'strSystemDb' => 'Regla de particionamiento',
    'strSystemCatalog' => 'Catalogo sistema',
    'strTable' => 'Tabla',
    'strTrustedServers' => 'Lista de Servidores Upstream',
    'strTypeList' => 'Tipo de lista de columas',
    'strUp' => 'Arriba',
    'strUpdate' => 'Actualizar',
    'strUnknown' => 'Desconocido',
    'strValue' => 'Valor',
    'strVersion' => 'Version pgpool-II ',
    'strDependences' => 'Dependencias',
    'strVIP' => 'Virtual IP',
    'strWdActive' => 'Activo',
    'strWdDown' => 'Abajo',
    'strWdInit' => 'No iniciado',
    'strWdStandby' => 'Standby',
    'strWeight' => 'Peso',

    'e1' => 'pgmgt.conf.php no encontrado.',
    'e2' => 'Message catalog no encontrado.',
    'e3' => 'Un error con el commando PCP.',
    'e4' => 'pgpool.conf no encontrado.',
    'e5' => 'Plantilla Smarty no encontrada.',
    'e6' => 'Ayuda no encontrada.',
    'e7' => 'Parámetros de pgpmgt.conf.php no encontrado',
    'e8' => 'pcp_timeout no encontrado en pgpool.conf',
    'e9' => 'pcp_port no encontrado en pgpool.conf',
    'e1001' => 'Un error con el commando PCP.',
    'e1002' => 'Comando pcp_node_count con error.',
    'e1003' => 'Ha ocurrido on error con commando pcp_node_info.',
    'e1004' => 'pcp_proc_count command error occurred.',
    'e1004' => 'Ha ocurrido un error con el comando pcp_proc_count.',
    'e1005' => 'Ha ocurrido un error con el comando pcp_proc_info.',
    'e1006' => 'Ha ocurrido un error con el comando pcp_stop_pgpool.',
    'e1006' => 'Ha ocurrido un error con el comando pcp_detach_node.',
    'e1008' => 'pgpool.conf no encontrado.',
    'e1009' => 'pcp.conf no encontrado.',
    'e1010' => 'Ha ocurrido un error con el comando pcp_attach_node.',
    'e1011' => 'Archivo Log no encontrado.',
    'e1012' => 'Ha ocurrido un error con el comando pcp_recovery_node.',
    'e2001' => 'Ha ocurrido un error al contactarse a la Base de Datos.',
    'e2002' => 'Error cuando SELECT fue realizado',
    'e2003' => 'pgpool.conf No encontrado.',
    'e3001' => 'Ha ocurrido un error al contactarse a la Base de Datos.',
    'e3002' => 'Error cuando SELECT fue realizado',
    'e3003' => 'Error cuando INSERT fue realizado',
    'e3004' => 'Error cuando UPDATE fue realizado',
    'e3005' => 'Error cuando DELETE fue realizado',
    'e3006' => 'pgpool.conf no encontrado.',
    'e4001' => 'pgpool.conf no encontrado.',
    'e4002' => 'No se puede leer archivo pgpool.conf. ',
    'e4003' => 'No se puede escribir en archivo pgpool.conf. ',
    'e5001' => 'pgmgt.conf.php no encontrado.',
    'e5002' => 'No se puede leer archivo pgmgt.conf.php.',
    'e5003' => 'No se puede escribir en archivo pgmgt.conf.php.',
    'e6001' => 'pcp.conf no encontrado.',
    'e6002' => 'No se puede leer archivo pcp.conf. ',
    'e6003' => 'No se puede escribir archivo pcp.conf. ',
    'e7001' => 'pcp.conf no encontrado.',
    'e8001' => 'No se puede obtener información en detalle.',
    'cautionaryNote' => 'NOTA: Actualizada las configuraciones, las configuraciones debe ser reactualizadas. Además, '.
                        '[*]  pgpool items deben ser reinciados.',

);

?>
