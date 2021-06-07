<?php

function MonTableaux($rows, $headers) {
		?>
	<style>
		#customers {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 50%;

		}

		#customers td, #customers th {
		border: 1px solid #ddd;
		padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		padding-top: 15px;
		padding-bottom: 15px;
		text-align: left;
		background-color: #4CAF50;
		color: white;
		}
	</style>
		<table id="customers">
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td><?php echo '<a href=MonFormulaireUtilisateurs.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td><?php echo $row[$k]; ?></td>
			    	<?php } ?>
			        
			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
		<?php

}

/**
 * getHeaderTable
 *
 * @return $headers
 */
function getHeaderTable() {
	$headers = array();
	$headers[] = "ID";
	$headers[] = "Nom";
	$headers[] = "traduction";
	return $headers;
}


?>