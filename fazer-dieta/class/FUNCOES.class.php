<?php
class FUNCOES extends BD
{

	/*   FAZ AS CONSULTAS DAS QUERYS NO BANCO DE DADOS
	    ****************************************************/
	public function consulta($tabela, $dados = false, $limit = false, $order = false, $ascDesc = "ASC")
	{
		if ($tabela == true) {
			if ($dados != false) {
				if (is_array($dados)) {
					$coluna = '';
					foreach ($dados as $c => $d) {
						$coluna .= $c . "='" . $d . "' AND ";
					}
					$coluna = substr($coluna, 0, -4);
					if ($order == false) {
						if ($limit == false) {
							return self::conn()->query("SELECT * FROM $tabela WHERE $coluna");
						} else {
							if (is_numeric($limit)) {
								return self::conn()->query("SELECT * FROM $tabela WHERE $coluna LIMIT $limit");
							} else {
								return false;
							}
						}
					} else {
						if ($limit == false) {
							return self::conn()->query("SELECT * FROM $tabela WHERE $coluna ORDER BY $order $ascDesc");
						} else {
							if (is_numeric($limit)) {
								return self::conn()->query("SELECT * FROM $tabela WHERE $coluna ORDER BY $order $ascDesc LIMIT $limit");
							} else {
								return false;
							}
						}
					}
				} else {
					return false;
				}
			} else {
				return self::conn()->query("SELECT * FROM $tabela");
			}
		} else {
			return false;
		}
	}

	/*   FAZ AS OS CADASTROS DAS QUERYS NO BANCO DE DADOS
	    ******************************************************/
	public function cadastrar($tabela, $dados = false)
	{
		if ($tabela == true) {
			if ($dados != false) {
				if (is_array($dados)) {
					$coluna = '';
					$linhas = '';
					foreach ($dados as $c => $d) {
						$coluna .= $c . ",";
						if ($d == '') {
							$linhas .= "DEFAULT,";
						} else {
							$linhas .= "'" . $d . "',";
						}
					}
					$coluna = substr($coluna, 0, -1);
					$linhas = substr($linhas, 0, -1);
					$cadastrar = self::conn()->prepare("INSERT INTO $tabela ($coluna) VALUES ($linhas)");
					return $cadastrar->execute();
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	/*   FAZ AS ATUALIZAÇÔES DAS QUERYS NO BANCO DE DADOS
	    ********************************************************/
	public function atualizar($tabela, $dados = false, $where = array(), $limit = false)
	{
		if ($tabela == true) {
			if ($dados != false) {
				if (is_array($dados)) {
					$coluna = '';
					$colunaWhere = '';
					foreach ($dados as $c => $d) {
						$coluna .= $c . "='" . $d . "',";
					}
					foreach ($where as $c => $d) {
						$colunaWhere .= $c . "='" . $d . "' AND ";
					}
					$coluna = substr($coluna, 0, -1);
					$colunaWhere = substr($colunaWhere, 0, -4);
					if ($limit == false) {
						$limit = 1;
					}
					$atualiza = self::conn()->prepare("UPDATE $tabela SET $coluna WHERE $colunaWhere LIMIT $limit");
					return $atualiza->execute();
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	/*   FAZ AS EXCLUSÔES DAS QUERYS NO BANCO DE DADOS
	    ********************************************************/
	public function excluir($tabela, $dados = false)
	{
		if ($tabela == true) {
			if ($dados != false) {
				$coluna = '';
				$limit = 1;
				if (is_array($dados)) {
					foreach ($dados as $c => $d) {
						$coluna .= $c . "='" . $d . "' AND ";
					}
					$coluna = substr($coluna, 0, -4);
					if ($limit == false) {
						$limit = 1;
					}
					$excluir = self::conn()->prepare("DELETE FROM $tabela WHERE $coluna LIMIT $limit");
					return $excluir->execute();
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	/*   FUNÇÂO PARA EVITAR SQLINJECTION NOS FORMULÁRIOS
	    ********************************************************/
	public function antiSqlInjection($string)
	{
		$string = trim($string);
		$string = strip_tags($string);
		$arrayCaracteres = array("\\", "\"", "'", "$", "#", "1=1", "UNION", "&", "%", "UPDATE", "SELECT", "INSERT", "DROP");
		$string = str_replace($arrayCaracteres, "", "$string");
		return addslashes($string);
	}

	/*   GERA CÓDIGOS ALEATÓRIOS (UTILIZADO NO RESETAR SENHA)
	    ***********************************************************/
	function geradorCodigo($length)
	{
		$pool = "";
		$result = "";
		$pool .= "0123456789";
		$pool .= "abcdefghijklmnopqrstuvxzwy";
		$pool .= "ABCDEFGHIJKLMNOPQRSTUVXZWY";
		$pool .= "@!_";
		$cc = 0;
		while ($cc < $length) {
			$result .= $pool[rand(0, strlen($pool) - 1)];
			$cc++;
		}
		return $result;
	}

	/*   MOSTRA AS MENSAGENS DE ERRO, AVISO E SUCESSO DO SITE
	    ************************************************************/
	public function msg($mensagem, $tipo = "sucesso", $btn = false)
	{
		if ($tipo == 'erro') {
?>
			<div class="alert alert-danger alert-dismissible" role="alert"> <?php
																																			if ($btn == true) {
																																			?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				<?php
																																			}
				?>
				<div class="alert-message">
					<?php echo $mensagem ?>

				</div>
			</div>
		<?php
		} else if ($tipo == 'aviso') {
		?>
			<div class="alert alert-warning alert-dismissible" role="alert"> <?php
																																				if ($btn == true) {
																																				?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				<?php
																																				}
				?>
				<div class="alert-message"> <?php echo $mensagem ?></div>
			</div> <?php
						} else {
							?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<?php
							if ($btn == true) {
				?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				<?php
							}
				?>
				<div class="alert-message">
					<?php echo $mensagem ?>

				</div>
			</div>
<?php
						}
					}
					public function jurosComposto($valor, $taxa, $parcelas)
					{
						$meta = $valor + round($valor * ($taxa / 100), 2);
						for ($c = 1; $c <= $parcelas - 1; $c++) {
							$meta += round($meta * ($taxa / 100), 2);
							if ($c == $parcelas - 1) {
								return number_format($meta, 2, ",", ".");
							}
						}
					}
				}
?>