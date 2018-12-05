<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  header {
    text-align: center;
    background-color: #d82263;
    padding: 20px 0;
  }

  header nav ul li {
    display: inline;
  }

  header nav a {
    color: #f2f2f3;
    font-style: 24px;
    text-decoration: none;
    margin: 0 20px;
  }

  header nav a:hover {
    color: #f06299;
  }

  header nav a:active {
    color: #54be90;
  }

  header nav a:visited {
    color: #f2c2cf;
  }
</style>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>
  </header>

	<div class="container">
		<h1>Missing fields</h1>
		<p>Sorry, you have not completed all of the required fields.</p>
		<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>
	</div>
</body>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
