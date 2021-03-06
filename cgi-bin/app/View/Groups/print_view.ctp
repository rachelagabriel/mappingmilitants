<!-- File: /app/views/profiles/view.ctp -->
<?php
	$this->set('title_for_layout', stripslashes($profile['Group']['name']) . ' | Mapping Militant Organizations');
	$this->Html->css('printable', 'stylesheet', array('inline'=>false));
	echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js', array('inline'=>false));
?>
	<?php
		echo stripslashes($profile['Group']['html']);
		echo '<h2 id="reference-header">References</h2>';
		echo $profile['Group']['footnotes'];
	?>
	
	<script type="text/javascript">
		var ref_header;
		$(function()	{
			$('a.footnote').each(function(i)	{
				var text = $(this).text();
				$(this).text(text.substring(1, text.indexOf(']')));
				$(this).wrap('<sup/>');
				$('a[name="ref' + i + '"]').remove();
			});
			$('#control').append($('<input/>', {
				'id':'show_footnotes',
				'name':'show_footnotes',
				'type':'checkbox',
				'checked':'checked'
			})).append($('<label/>',{
				'text':'Include footnotes',
				'for':'show_footnotes'
			}));
			$('#show_footnotes').change(function()	{
				if($(this).attr('checked'))	{
					$('a.footnote').removeClass('no_print');
					$('ol#references').removeClass('no_print');
					$("#reference-header").text('References');
				}	else	{
					$('a.footnote').addClass('no_print');
					$('ol#references').addClass('no_print');
					$("#reference-header").text('');
				}
			});
		});
	</script>