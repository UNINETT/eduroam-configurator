<hr class="hidden-xs hidden-sm hidden-md hidden-lg">

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-eduroam-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img alt="eduroam logo" src="../style/eduroam.svg" style="height:3em;width:7em;margin-top:-1em"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-eduroam-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/">Connect</a></li>
				<li><a href="https://cat.eduroam.org/tou.php">Legal</a></li>
				<li><a href="https://cat.eduroam.org/user/cat_info.php?page=faq&amp;lang=en">FAQ</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/develop/">Develop</a></li>
				<li><a href="https://cat.eduroam.org/admin/">Admin</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<div class="container">
<hr class="hidden-xs">
</div>

<footer class="legal">
This web page is licensed under the terms of the GNU Affero General Public License.<br>
The profiles are provided under the CAT ToS.
<?= $legal ?? '' ?>
</footer>

<script src="../style/jquery-2.1.4.min.js" crossorigin="anonymous"></script>
<script src="../style/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
