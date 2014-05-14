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

$lang['db_invalid_connection_str'] =   'Nуo foi possэvel determinar as configuraчѕes da base de dados por meio da string de conexуo especificada.';
$lang['db_unable_to_connect'] =        'Nуo foi possэvel conectar ao servidor da base de dados utilizando os dados fornecidos.';
$lang['db_unable_to_select'] =         'Nуo foi possэvel selecionar a base de dados especificada: %s';
$lang['db_unable_to_create'] =         'Nуo foi possэvel criar a base de dados especificada: %s';
$lang['db_invalid_query'] =            'Query invсlida.';
$lang['db_must_set_table'] =           'Favor informar a tabela a ser usada na query.';
$lang['db_must_use_set'] =             'Para atualizar um registro, favor utilizar o mщtodo "set".';
$lang['db_must_use_index'] =           'Vocъ deve especificar um эndice para coincidir com as atualizaчѕes em lote.';
$lang['db_batch_missing_index'] =      'Uma ou mais linhas apresentadas para o lote atualizaчуo estс faltando o эndice especificado.';
$lang['db_must_use_where'] =           'Nуo sуo permitidos updates que nуo contъm a clсusula "where".';
$lang['db_del_must_use_where'] =       'Nуo sуo permitidos deletes que nуo contъm as clсusulas "where" ou "like".';
$lang['db_field_param_missing'] =      'Para buscar campos, щ necessсrio inserir o nome da tabela como parтmetro.';
$lang['db_unsupported_function'] =     'Este recurso nуo estс disponэvel para a base de dados que estс em uso.';
$lang['db_transaction_failure'] =      'Falha na transaчуo: Rollback executado.';
$lang['db_unable_to_drop'] =           'Nуo foi possэvel apagar a base de dados especificada.';
$lang['db_unsupported_feature'] =      'Recurso nуo suportado pela plataforma da base de dados que estс em uso.';
$lang['db_unsupported_compression'] =  'Formato de compressуo de arquivos escolhido nуo suportado pelo servidor.';
$lang['db_filepath_error'] =           'Nуo foi possэvel escrever dados no caminho especificado.';
$lang['db_invalid_cache_path'] =       'O caminho especificado para cache щ invсlido ou nуo hс permissуo de escrita.';
$lang['db_table_name_required'] =      'Para essa operaчуo, щ necessсrio inserir o nome da tabela.';
$lang['db_column_name_required'] =     'Para essa operaчуo, щ necessсrio inserir o nome da coluna.';
$lang['db_column_definition_required'] = 'Para essa operaчуo, щ necessсrio definir a coluna.';
$lang['db_unable_to_set_charset'] =    'Nуo foi possэvel definir o conjunto de caracteres da conexуo do cliente: %s';
$lang['db_error_heading'] =            'Ocorreu um erro de base de dados';



/* End of file db_lang.php */
/* Location: ./system/language/pt-br/db_lang.php */