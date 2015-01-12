<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package CodeIgniter
 * @author  EllisLab Dev Team
 * @copyright  Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright  Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license http://opensource.org/licenses/MIT  MIT License
 * @link http://codeigniter.com
 * @since   Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'O m�todo de valida��o de e-mail deve ser passado num array.';
$lang['email_invalid_address'] = 'Endere�o de e-mail inv�lido: %s';
$lang['email_attachment_missing'] = 'N�o foi poss�vel localizar o seguinte anexo: %s';
$lang['email_attachment_unreadable'] = 'N�o foi poss�vel abrir este anexo: %s';
$lang['email_no_from'] = 'N�o � poss�vel enviar e-mail sem o cabe�alho "From".';
$lang['email_no_recipients'] = 'Voc� deve incluir destinat�rios: Para, Cc, ou Bcc';
$lang['email_send_failure_phpmail'] = 'N�o foi poss�vel enviar e-mail utilizando PHP mail(). O servidor pode n�o estar configurado para enviar e-mail por este m�todo.';
$lang['email_send_failure_sendmail'] = 'N�o foi poss�vel enviar e-mail utilizando PHP Sendmail. O servidor pode n�o estar configurado para enviar e-mail por este m�todo.';
$lang['email_send_failure_smtp'] = 'N�o foi poss�vel enviar e-mail utilizando PHP SMTP. O servidor pode n�o estar configurado para enviar e-mail por este m�todo.';
$lang['email_sent'] = 'Mensagem enviada com sucesso utilizando o seguinte protocolo: %s';
$lang['email_no_socket'] = 'N�o foi poss�vel abrir um socket para o Sendmail. Favor verificar as configura��es.';
$lang['email_no_hostname'] = 'Nenhum servidor SMTP foi especificado.';
$lang['email_smtp_error'] = 'Foi encontrado o seguinte erro de SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Erro: Favor inserir nome de usu�rio e senha do SMTP.';
$lang['email_failed_smtp_login'] = 'Comando AUTH LOGIN n�o enviado. Erro: %s';
$lang['email_smtp_auth_un'] = 'Nome de usu�rio n�o autenticado. Erro: %s';
$lang['email_smtp_auth_pw'] = 'Senha n�o autenticada. Erro: %s';
$lang['email_smtp_data_failure'] = 'N�o foi poss�vel enviar dados: %s';
$lang['email_exit_status'] = 'C�digo de status de sa�da: %s';

/* End of file email_lang.php */
/* Location: ./system/language/pt-br/email_lang.php */