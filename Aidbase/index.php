<?php
    include_once 'includes/php/index_header.php';
    ?>

<div class="page-content">
	<div>
		<br><br><br><br>
		<?php
                if (isset($_SESSION["useruid"])) {
                    echo "<h1>Welcome " . $_SESSION["useruid"] . ".</h1><br>";
                } else {
                    echo "
				<h1>A <strong>Global Database</strong></h1><br>
				<h1>of Non-Government Organizations</h1>
				";
                }
    ?>
		<br><br><br><br><br>
		<h3>Explore humanitarian efforts</h3><br>
		<h3>anywhere around the world</h3><br><br><br>
		<div class="search-nav">
			<a href="index.php">
				<button class="search-nav">
					<h4>Search</h4>
				</button>
			</a>
		</div>
		<div>
			<br><br><br><br><br><br><br><br>
			<h2 style="color:blue;">This is a preview site</h2><br>
			<h5 style="color:blue;">The full project is in private development at the moment</h5>
		</div>
	</div>
</div>

<?php
    include_once 'includes/php/footer.php';
    ?>