<table>
	<tbody>
		<th>File Number</th>
		<th>File Uploads</th>

		<?php 
		$fileNum = 0;

		foreach ($directory as $fileInfo) :



			if ($fileInfo->isFile()) :
			//when something is uploaded increase the number

				$fileNum++;


			?>

					<tr>
							<td><?php echo $fileNum; ?></td>
						
							<td><?php echo $fileInfo->getFileName(); ?></td>
					
							
							<td><a href='?delete=./uploads/ <?php echo $fileInfo->getFileName(); ?>'>Delete</a></td>
							<td><a href="./read.php/">View</td>
					</tr>
				
		<?php 
		endif;
		endforeach;

		?>
	</tbody>
</table>