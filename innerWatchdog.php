<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Infomation of the pgpool summary
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
 * @copyright  2003-2011 PgPool Global Development Group
 * @version    CVS: $Id$
 */

require_once('common.php');

if (!isset($_SESSION[SESSION_LOGIN_USER])) {
    exit();
}

$params = readConfigParams(array('port', 'wd_hostname', 'wd_port', 'delegate_IP',
                                 'other_pgpool_hostname', 'other_pgpool_port', 'other_wd_port',
                                 'wd_interval', 'wd_life_point', 'wd_lifecheck_query'));

$tpl->assign('params', $params);
$tpl->display('innerWatchdog.tpl');

?>