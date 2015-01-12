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

$lang['db_invalid_connection_str'] = 'Não foi possível determinar as configurações da base de dados por meio da string de conexão especificada.';
$lang['db_unable_to_connect'] = 'Não foi possível conectar ao servidor da base de dados utilizando os dados fornecidos.';
$lang['db_unable_to_select'] = 'Não foi possível selecionar a base de dados especificada: %s';
$lang['db_unable_to_create'] = 'Não foi possível criar a base de dados especificada: %s';
$lang['db_invalid_query'] = 'Query inválida.';
$lang['db_must_set_table'] = 'Favor informar a tabela a ser usada na query.';
$lang['db_must_use_set'] = 'Para atualizar um registro, favor utilizar o método "set".';
$lang['db_must_use_index'] = 'Você deve especificar um índice para coincidir com as atualizações em lote.';
$lang['db_batch_missing_index'] = 'Uma ou mais linhas apresentadas para o lote atualização está faltando o índice especificado.';
$lang['db_must_use_where'] = 'Não são permitidos updates que não contêm a cláusula "where".';
$lang['db_del_must_use_where'] = 'Não são permitidos deletes que não contêm as cláusulas "where" ou "like".';
$lang['db_field_param_missing'] = 'Para buscar campos, é necessário inserir o nome da tabela como parâmetro.';
$lang['db_unsupported_function'] = 'Este recurso não está disponível para a base de dados que está em uso.';
$lang['db_transaction_failure'] = 'Falha na transação: Rollback executado.';
$lang['db_unable_to_drop'] = 'Não foi possível apagar a base de dados especificada.';
$lang['db_unsupported_feature'] = 'Recurso não suportado pela plataforma da base de dados que está em uso.';
$lang['db_unsupported_compression'] = 'Formato de compressão de arquivos escolhido não suportado pelo servidor.';
$lang['db_filepath_error'] = 'Não foi possível escrever dados no caminho especificado.';
$lang['db_invalid_cache_path'] = 'O caminho especificado para cache é inválido ou não há permissão de escrita.';
$lang['db_table_name_required'] = 'Para essa operação, é necessário inserir o nome da tabela.';
$lang['db_column_name_required'] = 'Para essa operação, é necessário inserir o nome da coluna.';
$lang['db_column_definition_required'] = 'Para essa operação, é necessário definir a coluna.';
$lang['db_unable_to_set_charset'] = 'Não foi possível definir o conjunto de caracteres da conexão do cliente: %s';
$lang['db_error_heading'] = 'Ocorreu um erro de base de dados';

/* End of file db_lang.php */
/* Location: ./system/language/english/db_lang.php */