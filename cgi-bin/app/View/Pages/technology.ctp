<?php
	$this->set('title_for_layout', 'Technology | Mapping Militant Organizations');
	echo $this->Html->css('buttons','stylesheet',array('inline'=>false));
?>
<h1 class="span-24">Technology</h1>
<div class="span-15 colborder">
	<p>The maps we create combine aspects of timelines and network diagrams. We have built open source web software using standard web technologies to create and display the maps online. To maximize compatibility and accessibility, we have used only widely-implemented web standards. All you need to view our maps is a relatively modern browser with javascript enabled. See the right column for information on browser support.</p>
	<h2>Standards</h2>
	<p>The maps use HTML 4.01/5, Javascript, CSS 2/3, AJAX, PHP, and MySQL. The PHP/MySQL backend feeds information in a standard format to web pages that are subsequently manipulated via Javascript. The editor works in a similar manner.</p>
	<h2>Libraries &amp; Frameworks</h2>
	<p>The website relies on a few Javascript libraries to streamline development and enhance the user interface.</p>
	<ul>
		<li><a href="http://jquery.com">jQuery Javascript Library</a></li>
		<li><a href="http://jqueryui.com">jQuery UI</a> for better interaction and a cleaner graphical experience.</li>
		<li><a href="http://www.cakephp.org">CakePHP framework</a> for streamlined database management and web application creation.</li>
		<li><a href="http://www.blueprintcss.org/">Blueprint CSS framework</a> for rapid, cross-browser CSS production.</li>
	</ul>
	<h2>The Code</h2>
	<p>The code that powers our maps and websites is open source, released under the <strong><a href="http://www.opensource.org/licenses/mit-license.php">MIT License</a></strong>. If you're interested in reviewing or modifying our code for your own use, please visit our <a href="http://www.github.com/danielcassman/mappingmilitants">GitHub Repository</a>.</p>
</div>
<div class="span-8 last">
	<h2>Search</h2>
	<form name="searchform" action="/group/mappingmilitants/cgi-bin/profiles/search" method="get">
		<p><input type="text" name="q" id="q" /></p>
	</form>
	<p>
	<?php
		echo $this->Html->link('See the map', array('controller'=>'maps', 'action'=>'iraq'), array('class'=>'button fullwidth')) . "\n\t\t";
		echo $this->Html->link('Read the profiles', array('controller'=>'profiles', 'action'=>'index'), array('class'=>'button fullwidth')) . "\n";
		echo $this->Html->link('Learn about the project', array('controller'=>'pages', 'action'=>'about'), array('class'=>'button fullwidth')) . "\n";
	?>
	</p>
</div>