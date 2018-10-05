<?php

//lista de numerosfgujteuj


function listadoNumeros()
{
	echo "<table>
		<thead>
			<tr>
				<th>Listar Numeros</th>
			</tr>
		</thead>
		<tbody>";
			for($i=1;$i<=3;$i++)
			{
				echo "<tr>";
					echo "<td>".$i."</td>";
 					}
 				}
		echo "</tbody>
	</table>";
 listadoNumeros();
?>
 </body>
</html>
