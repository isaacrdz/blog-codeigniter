
<body>
	<section>
		<div class="container">
			<div class="row">
				<h1 class="text-center">Blog </h1>
				

						<?php 
							$query = $this->db->query('SELECT * FROM post');
							foreach ($query->result_array() as $row)
							{
						?>
							<div class="col-md-4">
							<h2><?= $row['post']; ?> </h2>
							<p><?= $row['descripcion']; ?> </p>
								<a href="<?= base_url() ?>article/post/<?= $row['id']; ?> ">Leer mas</a>
							</div>
						<?php	
							}
						?>
				
			</div>
		</div>
	</section>


						 











