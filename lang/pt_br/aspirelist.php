<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'aspirelist', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   aspirelist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aspirelist'] = 'Lista de Recursos:{$a}';
$string['aspirelist:addinstance'] = 'Adicionar uma nova lista de recursos';
$string['aspirelistname'] = 'Nome da lista de recursos';
$string['aspirelist:view'] = 'Ver o conteúdo da lista de recursos';
$string['aspireurl'] = 'URL do Aspire';
$string['aspireurlhttpsalias'] = 'Apelido da URL HTTPS do Aspire';
$string['authorsinconfig'] = 'Autores nos formulários de configuração';
$string['cachedef_listdata'] = 'Lista de dados de recursos armazenados em cache obtido a partir Talis Aspire';
$string['codecolumn'] = 'Aspire coluna de código';
$string['coderegex'] = 'Aspire código de regex';
$string['codesource'] = 'Código fonte Aspire';
$string['codetable'] = 'Tabela de banco de dados personalizado';
$string['configaspireurl'] = 'Digite a URL base do seu site Talis Aspire (não é um apelido HTTPS).';
$string['configaspireurlhttpsalias'] = 'Coloque o apelido da URL HTTPS de seu site Talis Aspire (se você não tem uma).';
$string['configauthorsinconfig'] = 'As descrições do item de recurso no módulo de formulário de configuração deveriam incluir os nomes dos autores? Por padrão somente o título do item e o formato do recurso estão incluídos para economizar espaço no formulário.';
$string['configcodecolumn'] = 'Opcional. O nome da coluna na tabela personalizada que contém os códigos da lista Talis Aspire';
$string['configcoderegex'] = 'Opcional. Se estiver usando o número de ID curso como o seu código fonte, esta é uma expressão regular (incluindo delimitadores) coincidindo com o código parte Talis Aspire dele. Se nenhum regex é fornecido aqui será assumido que todo o número de identificação é o código Aspire.';
$string['configcodesource'] = 'Selecione a fonte de seus códigos de listas Talis Aspire. Se você optar por usar uma tabela de banco de dados personalizado, você também deve especificar as tabelas, colunas e detalhes dos atributos do curso nos campos abaixo. Se nenhum código for encontrado na tabela de costume para um determinado curso, o número do curso ID será usado como um retorno, independentemente do que é especificado aqui.';
$string['configcodetable'] = 'Opcional. O nome de uma tabela personalizada no banco de dados do Moodle contendo os códigos da lista Talis Aspire mapeadas contra um atributo curso Moodle.';
$string['configcourseattribute'] = 'Opcional. O atributo de curso exclusivo que é mapeado contra seus códigos de Talis Aspire na tabela custom (normalmente id, idnumber ou nome breve).';
$string['configrequiremodintro'] = 'Ative esta opção se você deseja forçar os usuários a digitar uma descrição para cada lista de recursos.';
$string['contentheader'] = 'Selecione a lista de recursos';
$string['courseattribute'] = 'Características do curso';
$string['defaultdisplay'] = 'Modo de exibição padrão';
$string['errorcodecolumn'] = 'Você deve especificar a coluna de código se você quiser usar uma tabela de banco de dados personalizado como sua fonte de código Aspire.';
$string['errorcodesource'] = 'Você deve fornecer todos os detalhes de tabelas e colunas abaixo se você quiser usar uma tabela de banco de dados personalizado como sua fonte de código Aspire.';
$string['errorcodetable'] = 'Você deve especificar o nome da tabela se você quiser usar uma tabela de banco de dados personalizado como sua fonte de código Aspire.';
$string['itemcount'] = '{$a} item';
$string['itemcountplural'] = '{$a} itens';
$string['modules'] = 'Módulos';
$string['previewitem'] = 'Visualizar item';
$string['programmes'] = 'Programas';
$string['selectresources'] = 'Selecione os recursos do "{$a}"';
$string['showhide'] = 'Mostrar/Esconder lista de recursos';
$string['subjects'] = 'Assuntos';
$string['units'] = 'Unidades';
