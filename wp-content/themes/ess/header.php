<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php wp_title() ?>
	</title>

	<?php wp_head(); ?>


</head>

<body>
	<!-- Begin header -->
	<header class="header">
		<nav id="nav" class="navbar navbar-expand-xl  navbar-light header--navbar">
			<div class="top--header">
				<div class="top--header__left">
					<a class="navbar-brand" href="">
						<?php
						the_custom_logo();
						?>
					</a>
				</div>
				<div class="top--header__right">
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navPrimary"
						aria-expanded="false">
						<span class="navbar-toggler-icon"></span>
					</button>
					<ul class="top--header__social d-none d-xl-flex">
						<?php dynamic_sidebar('social-sidebar'); ?>
					</ul>
					<?php
					$langs_array = pll_the_languages(array('dropdown' => 1, 'raw' => 1, 'show_flags' => 1));
					// echo '<pre>';
					// var_dump($langs_array);
					?>
					<?php if ($langs_array): ?>
						<div class="dropdown d-none d-xl-flex top--header__flag">

							<?php foreach ($langs_array as $lang): ?>
								<?php
								if ($lang['current_lang']):
									?>
									<?php echo $lang['flag'] ?>
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLang" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false"><?php echo $lang['name']; ?></a>
									<?php
								endif;
								?>
							<?php endforeach; ?>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLang">
								<?php foreach ($langs_array as $lang): ?>
									<a class="dropdown-item" href="<?php echo $lang['url']; ?>"> <?php echo $lang['name']; ?></a>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="navbar-collapse collapse main--menu" id="navPrimary">
				<div class="d-none d-xl-none d-md-block d-sm-block">
					<div class="dropdown d-flex top--header__flag float-right">
					<ul class="top--header__social d-none d-xl-flex">
						<?php dynamic_sidebar('social-sidebar'); ?>
					</ul>
					<?php
					$langs_array = pll_the_languages(array('dropdown' => 1, 'raw' => 1, 'show_flags' => 1));
					// echo '<pre>';
					// var_dump($langs_array);
					?>
					<?php if ($langs_array): ?>
						<div class="dropdown d-none d-xl-flex top--header__flag">
							<?php foreach ($langs_array as $lang): ?>
								<?php
								if ($lang['current_lang']):
									?>
									<?php echo $lang['flag'] ?>
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLang" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false"><?php echo $lang['name']; ?></a>
									<?php
								endif;
								?>
							<?php endforeach; ?>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLang">
								<?php foreach ($langs_array as $lang): ?>
									<a class="dropdown-item" href="<?php echo $lang['url']; ?>"> <?php echo $lang['name']; ?></a>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>
					</div>
				</div>
				<?php wp_nav_menu(); ?>
			</div>
		</nav>
	</header>
	<!-- End header -->