		<main>
			<table>
				<tbody>
					<tr>
						<td>Salário Bruto</td>
						<td><?php echo number_format($salario->get_salario_bruto(), 2, ',', '.') ?></td>
					</tr>
					<tr>
						<td>Desconto INSS (Alíquota = <?php echo ($salario->get_alicotaINSS()*100)?>%)</td>
						<td><?php echo number_format($salario->get_descontoINSS(), 2, ',', '.') ?></td>
					</tr>
					<tr>
						<td>Desconto IRRF (Alíquota = <?php echo ($salario->get_alicotaIRRF()*100)?>%)</td>
						<td><?php echo number_format($salario->get_descontoIRRF(), 2, ',', '.') ?></td>
					</tr>
					<tr>
						<td>Salário Líquido</td>
						<td><?php echo number_format($salario->get_salario_liquido(), 2, ',', '.')?></td>
					</tr>
				</tbody>
			</table>
		</main>
