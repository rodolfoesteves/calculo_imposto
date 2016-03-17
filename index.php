<?php
	if ($_GET["erro"]){
			$mensagem = "<p> O valor do salário informado deve ser maior que o salário mínimo. Atualmente o Salário Mínimo é de R$880,00. </p>";
		}
		else{
			$mensagem = "<p> Olá, para iniciar, informe o seu salário bruto.</p>";
		}
	include "cabecalho.php";
?>
		<main>
			<form action="calcular_imposto.php" method="post">
				<?php echo $mensagem ?>
				<div>
					<label> Salário Bruto: <input type="number" lang="nb" name="salario" step="0.01"/>
				</div>
				<div>
					<input type="submit" value="Calcular Imposto" />
				</div>
			</form>
		</main>

<?php include "rodape.php" ?>
