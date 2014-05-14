<?php $this->load->view('admin/components/page_head') ?>
	<body>
		<nav class="navbar navbar-static-top navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url('admin/dashboard') ?>"><?php echo $meta_title ?></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
						<li><?php echo anchor('admin/page', 'Pages'); ?></li>
						<li><?php echo anchor('admin/user', 'Users'); ?></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<section>
						<h2>Page Name</h2>
					</section>
				</div>
				<div class="col-lg-3">
					<section>
						<?php echo mailto('programador.amauri@gmail.com', '<i class="glyphicon glyphicon-user">programador.amauri@gmail.com</i>'); ?><br />
						<?php echo anchor('users/logout', '<i class="glyphicon glyphicon-off"></i>wLogout'); ?>
					</section>
				</div>
			</div>
		</div>
<?php $this->load->view('admin/components/page_tail'); ?>