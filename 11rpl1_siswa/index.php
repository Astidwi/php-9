<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "pendaftaran selesai";
			} else {
				echo "gagal";
			}
		?>
	</p>
		<?php endif; ?>