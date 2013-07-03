<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2013, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] =         'O m�todo de valida��o de e-mail deve ser passado num Array.';
$lang['email_invalid_address'] =       'Endere�o de e-mail inv�lido: %s';
$lang['email_attachment_missing'] =    'N�o foi poss�vel localizar o seguinte anexo: %s';
$lang['email_attachment_unreadable'] = 'N�o foi poss�vel abrir este anexo: %s';
$lang['email_no_recipients'] =         'Favor incluir os destinat�rios: Para, Cc, ou Bcc';
$lang['email_send_failure_phpmail'] =  'N�o foi poss�vel enviar e-mail utilizando PHP mail(). O servidor pode n�o estar configurado para enviar e-mail por este m�todo.';
$lang['email_send_failure_sendmail'] = 'N�o foi poss�vel enviar e-mail utilizando PHP Sendmail. O servidor pode n�o estar configurado para enviar e-mail por este m�todo.';
$lang['email_send_failure_smtp'] =     'N�o foi poss�vel enviar e-mail utilizando PHP SMTP. O servidor pode n�o estar configurado para enviar e-mail por este m�todo.';
$lang['email_sent'] =                  'Mensagem enviada com sucesso utilizando o seguinte protocolo: %s';
$lang['email_no_socket'] =             'N�o foi poss�vel abrir um socket para o Sendmail. Favor verificar as configura��es.';
$lang['email_no_hostname'] =           'Nenhum servidor SMTP foi especificado.';
$lang['email_smtp_error'] =            'Foi encontrado o seguinte erro de SMTP: %s';
$lang['email_no_smtp_unpw'] =          'Erro: Favor inserir nome de usu�rio e senha do SMTP.';
$lang['email_failed_smtp_login'] =     'Comando AUTH LOGIN n�o enviado. Erro: %s';
$lang['email_smtp_auth_un'] =          'Nome de usu�rio n�o autenticado. Erro: %s';
$lang['email_smtp_auth_pw'] =          'Senha n�o autenticada. Erro: %s';
$lang['email_smtp_data_failure'] =     'N�o foi poss�vel enviar dados: %s';
$lang['email_exit_status'] =           'C�digo de status de sa�da: %s';

/* End of file email_lang.php */
/* Location: ./system/language/pt-br/email_lang.php */