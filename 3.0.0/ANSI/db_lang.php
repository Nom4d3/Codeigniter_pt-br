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

$lang['db_invalid_connection_str'] = 'Nуo foi possэvel determinar as configuraчѕes da base de dados por meio da string de conexуo especificada.';
$lang['db_unable_to_connect'] = 'Nуo foi possэvel conectar ao servidor da base de dados utilizando os dados fornecidos.';
$lang['db_unable_to_select'] = 'Nуo foi possэvel selecionar a base de dados especificada: %s';
$lang['db_unable_to_create'] = 'Nуo foi possэvel criar a base de dados especificada: %s';
$lang['db_invalid_query'] = 'Query invсlida.';
$lang['db_must_set_table'] = 'Favor informar a tabela a ser usada na query.';
$lang['db_must_use_set'] = 'Para atualizar um registro, favor utilizar o mщtodo "set".';
$lang['db_must_use_index'] = 'Vocъ deve especificar um эndice para coincidir com as atualizaчѕes em lote.';
$lang['db_batch_missing_index'] = 'Uma ou mais linhas apresentadas para o lote atualizaчуo estс faltando o эndice especificado.';
$lang['db_must_use_where'] = 'Nуo sуo permitidos updates que nуo contъm a clсusula "where".';
$lang['db_del_must_use_where'] = 'Nуo sуo permitidos deletes que nуo contъm as clсusulas "where" ou "like".';
$lang['db_field_param_missing'] = 'Para buscar campos, щ necessсrio inserir o nome da tabela como parтmetro.';
$lang['db_unsupported_function'] = 'Este recurso nуo estс disponэvel para a base de dados que estс em uso.';
$lang['db_transaction_failure'] = 'Falha na transaчуo: Rollback executado.';
$lang['db_unable_to_drop'] = 'Nуo foi possэvel apagar a base de dados especificada.';
$lang['db_unsupported_feature'] = 'Recurso nуo suportado pela plataforma da base de dados que estс em uso.';
$lang['db_unsupported_compression'] = 'Formato de compressуo de arquivos escolhido nуo suportado pelo servidor.';
$lang['db_filepath_error'] = 'Nуo foi possэvel escrever dados no caminho especificado.';
$lang['db_invalid_cache_path'] = 'O caminho especificado para cache щ invсlido ou nуo hс permissуo de escrita.';
$lang['db_table_name_required'] = 'Para essa operaчуo, щ necessсrio inserir o nome da tabela.';
$lang['db_column_name_required'] = 'Para essa operaчуo, щ necessсrio inserir o nome da coluna.';
$lang['db_column_definition_required'] = 'Para essa operaчуo, щ necessсrio definir a coluna.';
$lang['db_unable_to_set_charset'] = 'Nуo foi possэvel definir o conjunto de caracteres da conexуo do cliente: %s';
$lang['db_error_heading'] = 'Ocorreu um erro de base de dados';

/* End of file db_lang.php */
/* Location: ./system/language/english/db_lang.php */