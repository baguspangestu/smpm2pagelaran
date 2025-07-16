<div class="search_form">
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		<fieldset>
			<input name="s" type="text" placeholder="Ketik sesuatu.." value="" />
			<div class="divsel">
				<select name="post_type">
					<option value="pos">Pos</option>
					<option value="pengumuman">Pengumuman</option>
					<option value="blog">Blog</option>
					<option value="agenda">Agenda</option>
					<option value="fasilitas">Fasilitas</option>
					<option value="ekskul">Ekskul</option>
					<option value="prestasi">Prestasi</option>
					<option value="editorial">Editorial</option>
				</select>
			</div>
			<button type="submit"><i class="fa fa-search"></i></button>
		</fieldset>
	</form>
</div>