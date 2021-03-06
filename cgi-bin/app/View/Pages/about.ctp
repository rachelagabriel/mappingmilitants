<?php
	$this->set('title_for_layout', 'About | Mapping Militant Organizations');
	echo $this->Html->css('buttons','stylesheet',array('inline'=>false));
?>
<h1 class="span-24">About</h1>
<div class="span-15 colborder">
	<p>This research project traces the evolution of militant organizations and the interactions that develop between them over time. Findings are presented in interactive &ldquo;maps,&rdquo; which provide both (1) visual representations of how relationships among militant organizations change over time and (2) links to in-depth profiles of individual groups. The project provides uniquely accessible and clear genealogical information about violent extremist organizations that, combined with the detailed group profiles, is an invaluable resource to students, scholars, journalists, policy analysts, and other interested in violent oppositional organizations. This website contains a map of groups in Iraq but other maps are in progress and will be posted as soon as they are completed.</p>
	<p>The purpose of the project is to identify patterns in the evolution of militant organizations in specified conflict theatres and to discover the causes and consequences of their evolution.  The project will identify patterns in, as well as causes and consequences of, these groups&apos; evolution by describing and comparing the genealogy of different families of violent extremist organizations. Genealogies are presented in interactive diagrams that not only detail how groups form, split, merge, collaborate, compete, shift ideological direction, adopt or renounce violence, grow, shrink, and eventually decline over time, but also include links to a database of group profiles.  The project also develops computer software to assemble, organize, and display the profiles and genealogical information that researchers have produced.</p>
	<p>This award was funded through the Social and Behavioral Dimensions of National Security, Conflict, and Cooperation competition, a joint venture between the National Science Foundation and the Department of Defense.</p>
	<h2>Principal Investigator &mdash; Martha Crenshaw</h2>
	<p>Martha Crenshaw is a senior fellow at CISAC and FSI and a professor of political science by courtesy. She was professor of government at Wesleyan University in Middletown, Connecticut, from 1974 to 2007.</p>
	<p><a href="http://cisac.stanford.edu/people/marthacrenshaw/">More on Dr. Crenshaw&hellip;</a></p>
	<h2>Funding Provided By</h2>
	<ul>
		<li><a href="http://www.nsf.gov/index.jsp">National Science Foundation</a></li>
		<li><a href="http://minerva.dtic.mil/">Department of Defense Minerva Initiative</a></li>
	</ul>
</div>
<div class="span-8 last">
	<h2>Search</h2>
	<form name="searchform" action="/group/mappingmilitants/cgi-bin/profiles/search" method="get">
		<p><input type="text" name="q" id="q" /></p>
	</form>
	<p>
	<?php
		echo $this->Html->link('See the maps', array('controller'=>'maps', 'action'=>'index'), array('class'=>'button fullwidth')) . "\n\t\t";
		echo $this->Html->link('Read the profiles', array('controller'=>'profiles', 'action'=>'index'), array('class'=>'button fullwidth')) . "\n";
		echo $this->Html->link('Learn about the project', array('controller'=>'pages', 'action'=>'about'), array('class'=>'button fullwidth')) . "\n";
	?>
	</p>
</div>