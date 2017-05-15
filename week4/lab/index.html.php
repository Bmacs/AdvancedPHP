<div class="container">
	<table class=".table-condensed">
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
								<td><strong><?php echo $fileNum; ?></strong></td>
							
								<td><?php echo $fileInfo->getFileName(); ?>
								<p><strong>Uploaded on <?php echo date("l F j, Y, g:i a", $fileInfo->getMTime()); ?></strong></p>
									

								</td>
						
								
								<td><a href='?delete=./uploads/ <?php echo $fileInfo->getFileName(); ?>'>Delete</a></td>
								<td><a href="<?php echo $fileInfo->getPathname();?>">View</td>
								<td></td>
								<td><p>This file is <?php echo $fileInfo->getSize(); ?> byte's</p></td>
						</tr>
					
			<?php 
			endif;
			endforeach;

			?>
		</tbody>
	</table>
</div>	