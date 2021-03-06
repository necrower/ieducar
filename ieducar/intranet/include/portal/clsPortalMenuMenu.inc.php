<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
*																	     *
*	@author Prefeitura Municipal de Itaja�								 *
*	@updated 29/03/2007													 *
*   Pacote: i-PLB Software P�blico Livre e Brasileiro					 *
*																		 *
*	Copyright (C) 2006	PMI - Prefeitura Municipal de Itaja�			 *
*						ctima@itajai.sc.gov.br					    	 *
*																		 *
*	Este  programa  �  software livre, voc� pode redistribu�-lo e/ou	 *
*	modific�-lo sob os termos da Licen�a P�blica Geral GNU, conforme	 *
*	publicada pela Free  Software  Foundation,  tanto  a vers�o 2 da	 *
*	Licen�a   como  (a  seu  crit�rio)  qualquer  vers�o  mais  nova.	 *
*																		 *
*	Este programa  � distribu�do na expectativa de ser �til, mas SEM	 *
*	QUALQUER GARANTIA. Sem mesmo a garantia impl�cita de COMERCIALI-	 *
*	ZA��O  ou  de ADEQUA��O A QUALQUER PROP�SITO EM PARTICULAR. Con-	 *
*	sulte  a  Licen�a  P�blica  Geral  GNU para obter mais detalhes.	 *
*																		 *
*	Voc�  deve  ter  recebido uma c�pia da Licen�a P�blica Geral GNU	 *
*	junto  com  este  programa. Se n�o, escreva para a Free Software	 *
*	Foundation,  Inc.,  59  Temple  Place,  Suite  330,  Boston,  MA	 *
*	02111-1307, USA.													 *
*																		 *
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/**
* @author Prefeitura Municipal de Itaja�
*
* Criado em 22/12/2006 16:57 pelo gerador automatico de classes
*/

require_once( "include/portal/geral.inc.php" );

class clsPortalMenuMenu
{
	var $cod_menu_menu;
	var $nm_menu;
	var $title;
	var $ref_cod_menu_pai;

	// propriedades padrao

	/**
	 * Armazena o total de resultados obtidos na ultima chamada ao metodo lista
	 *
	 * @var int
	 */
	var $_total;

	/**
	 * Nome do schema
	 *
	 * @var string
	 */
	var $_schema;

	/**
	 * Nome da tabela
	 *
	 * @var string
	 */
	var $_tabela;

	/**
	 * Lista separada por virgula, com os campos que devem ser selecionados na proxima chamado ao metodo lista
	 *
	 * @var string
	 */
	var $_campos_lista;

	/**
	 * Lista com todos os campos da tabela separados por virgula, padrao para selecao no metodo lista
	 *
	 * @var string
	 */
	var $_todos_campos;

	/**
	 * Valor que define a quantidade de registros a ser retornada pelo metodo lista
	 *
	 * @var int
	 */
	var $_limite_quantidade;

	/**
	 * Define o valor de offset no retorno dos registros no metodo lista
	 *
	 * @var int
	 */
	var $_limite_offset;

	/**
	 * Define o campo padrao para ser usado como padrao de ordenacao no metodo lista
	 *
	 * @var string
	 */
	var $_campo_order_by;


	/**
	 * Construtor (PHP 4)
	 * 
	 * @param integer cod_menu_menu
	 * @param string nm_menu
	 * @param string title
	 * @param integer ref_cod_menu_pai
	 *
	 * @return object
	 */
	function clsPortalMenuMenu( $cod_menu_menu = null, $nm_menu = null, $title = null, $ref_cod_menu_pai = null )
	{
		$db = new clsBanco();
		$this->_schema = "portal.";
		$this->_tabela = "{$this->_schema}menu_menu";

		$this->_campos_lista = $this->_todos_campos = "cod_menu_menu, nm_menu, title, ref_cod_menu_pai";

		if( is_numeric( $ref_cod_menu_pai ) )
		{
			if( class_exists( "clsMenuMenu" ) )
			{
				$tmp_obj = new clsMenuMenu( $ref_cod_menu_pai );
				if( method_exists( $tmp_obj, "existe") )
				{
					if( $tmp_obj->existe() )
					{
						$this->ref_cod_menu_pai = $ref_cod_menu_pai;
					}
				}
				else if( method_exists( $tmp_obj, "detalhe") )
				{
					if( $tmp_obj->detalhe() )
					{
						$this->ref_cod_menu_pai = $ref_cod_menu_pai;
					}
				}
			}
			else
			{
				if( $db->CampoUnico( "SELECT 1 FROM menu_menu WHERE cod_menu_menu = '{$ref_cod_menu_pai}'" ) )
				{
					$this->ref_cod_menu_pai = $ref_cod_menu_pai;
				}
			}
		}


		if( is_numeric( $cod_menu_menu ) )
		{
			$this->cod_menu_menu = $cod_menu_menu;
		}
		if( is_string( $nm_menu ) )
		{
			$this->nm_menu = $nm_menu;
		}
		if( is_string( $title ) )
		{
			$this->title = $title;
		}
		

	}

	/**
	 * Cria um novo registro
	 *
	 * @return bool
	 */
	function cadastra()
	{
		if( is_string( $this->nm_menu )  )
		{
			$db = new clsBanco();

			$campos = "";
			$valores = "";
			$gruda = "";

			if( is_string( $this->nm_menu ) )
			{
				$campos .= "{$gruda}nm_menu";
				$valores .= "{$gruda}'{$this->nm_menu}'";
				$gruda = ", ";
			}
			if( is_string( $this->title ) )
			{
				$campos .= "{$gruda}title";
				$valores .= "{$gruda}'{$this->title}'";
				$gruda = ", ";
			}
			
			if( is_numeric( $this->ref_cod_menu_pai ) )
			{
				$campos .= "{$gruda}ref_cod_menu_pai";
				$valores .= "{$gruda}'{$this->ref_cod_menu_pai}'";
				$gruda = ", ";
			}


			$db->Consulta( "INSERT INTO {$this->_tabela} ( $campos ) VALUES( $valores )" );
			return $db->InsertId( "{$this->_tabela}_cod_menu_menu_seq");
		}
		return false;
	}

	/**
	 * Edita os dados de um registro
	 *
	 * @return bool
	 */
	function edita()
	{
		if( is_numeric( $this->cod_menu_menu ) )
		{

			$db = new clsBanco();
			$set = "";

			if( is_string( $this->nm_menu ) )
			{
				$set .= "{$gruda}nm_menu = '{$this->nm_menu}'";
				$gruda = ", ";
			}
			if( is_string( $this->title ) )
			{
				$set .= "{$gruda}title = '{$this->title}'";
				$gruda = ", ";
			}
			
			if( is_numeric( $this->ref_cod_menu_pai ) )
			{
				$set .= "{$gruda}ref_cod_menu_pai = '{$this->ref_cod_menu_pai}'";
				$gruda = ", ";
			}


			if( $set )
			{
				$db->Consulta( "UPDATE {$this->_tabela} SET $set WHERE cod_menu_menu = '{$this->cod_menu_menu}'" );
				return true;
			}
		}
		return false;
	}

	/**
	 * Retorna uma lista filtrados de acordo com os parametros
	 * 
	 * @param string str_nm_menu
	 * @param string str_title
	 * @param integer int_ref_cod_menu_pai
	 *
	 * @return array
	 */
	function lista( $str_nm_menu = null, $str_title = null, $int_ref_cod_menu_pai = null )
	{
		$sql = "SELECT {$this->_campos_lista} FROM {$this->_tabela}";
		$filtros = "";

		$whereAnd = " WHERE ";

		if( is_numeric( $int_cod_menu_menu ) )
		{
			$filtros .= "{$whereAnd} cod_menu_menu = '{$int_cod_menu_menu}'";
			$whereAnd = " AND ";
		}
		if( is_string( $str_nm_menu ) )
		{
			$filtros .= "{$whereAnd} nm_menu LIKE '%{$str_nm_menu}%'";
			$whereAnd = " AND ";
		}
		if( is_string( $str_title ) )
		{
			$filtros .= "{$whereAnd} title LIKE '%{$str_title}%'";
			$whereAnd = " AND ";
		}
		
		if( is_numeric( $int_ref_cod_menu_pai ) )
		{
			$filtros .= "{$whereAnd} ref_cod_menu_pai = '{$int_ref_cod_menu_pai}'";
			$whereAnd = " AND ";
		}


		$db = new clsBanco();
		$countCampos = count( explode( ",", $this->_campos_lista ) );
		$resultado = array();

		$sql .= $filtros . $this->getOrderby() . $this->getLimite();

		$this->_total = $db->CampoUnico( "SELECT COUNT(0) FROM {$this->_tabela} {$filtros}" );

		$db->Consulta( $sql );

		if( $countCampos > 1 )
		{
			while ( $db->ProximoRegistro() )
			{
				$tupla = $db->Tupla();

				$tupla["_total"] = $this->_total;
				$resultado[] = $tupla;
			}
		}
		else
		{
			while ( $db->ProximoRegistro() )
			{
				$tupla = $db->Tupla();
				$resultado[] = $tupla[$this->_campos_lista];
			}
		}
		if( count( $resultado ) )
		{
			return $resultado;
		}
		return false;
	}

	/**
	 * Retorna um array com os dados de um registro
	 *
	 * @return array
	 */
	function detalhe()
	{
		if( is_numeric( $this->cod_menu_menu ) )
		{

			$db = new clsBanco();
			$db->Consulta( "SELECT {$this->_todos_campos} FROM {$this->_tabela} WHERE cod_menu_menu = '{$this->cod_menu_menu}'" );
			$db->ProximoRegistro();
			return $db->Tupla();
		}
		return false;
	}

	/**
	 * Retorna true se o registro existir. Caso contr�rio retorna false.
	 *
	 * @return bool
	 */
	function existe()
	{
		if( is_numeric( $this->cod_menu_menu ) )
		{

			$db = new clsBanco();
			$db->Consulta( "SELECT 1 FROM {$this->_tabela} WHERE cod_menu_menu = '{$this->cod_menu_menu}'" );
			if( $db->ProximoRegistro() )
			{
				return true;
			}
		}
		return false;
	}

	/**
	 * Exclui um registro
	 *
	 * @return bool
	 */
	function excluir()
	{
		if( is_numeric( $this->cod_menu_menu ) )
		{

		/*
			delete
		$db = new clsBanco();
		$db->Consulta( "DELETE FROM {$this->_tabela} WHERE cod_menu_menu = '{$this->cod_menu_menu}'" );
		return true;
		*/

		
		}
		return false;
	}

	/**
	 * Define quais campos da tabela serao selecionados na invocacao do metodo lista
	 *
	 * @return null
	 */
	function setCamposLista( $str_campos )
	{
		$this->_campos_lista = $str_campos;
	}

	/**
	 * Define que o metodo Lista devera retornoar todos os campos da tabela
	 *
	 * @return null
	 */
	function resetCamposLista()
	{
		$this->_campos_lista = $this->_todos_campos;
	}

	/**
	 * Define limites de retorno para o metodo lista
	 *
	 * @return null
	 */
	function setLimite( $intLimiteQtd, $intLimiteOffset = 0 )
	{
		$this->_limite_quantidade = $intLimiteQtd;
		if ($intLimiteOffset > 0)
			$this->_limite_offset = $intLimiteOffset;
	}

	/**
	 * Retorna a string com o trecho da query resposavel pelo Limite de registros
	 *
	 * @return string
	 */
	function getLimite()
	{
		if( is_numeric( $this->_limite_quantidade ) )
		{
			$retorno = " LIMIT {$this->_limite_quantidade}";
			if( is_numeric( $this->_limite_offset ) )
			{
				$retorno .= " OFFSET {$this->_limite_offset} ";
			}
			return $retorno;
		}
		return "";
	}

	/**
	 * Define campo para ser utilizado como ordenacao no metolo lista
	 *
	 * @return null
	 */
	function setOrderby( $strNomeCampo )
	{
		// limpa a string de possiveis erros (delete, insert, etc)
		//$strNomeCampo = eregi_replace();

		if( is_string( $strNomeCampo ) && $strNomeCampo )
		{
			$this->_campo_order_by = $strNomeCampo;
		}
	}

	/**
	 * Retorna a string com o trecho da query resposavel pela Ordenacao dos registros
	 *
	 * @return string
	 */
	function getOrderby()
	{
		if( is_string( $this->_campo_order_by ) )
		{
			return " ORDER BY {$this->_campo_order_by} ";
		}
		return "";
	}

}
?>