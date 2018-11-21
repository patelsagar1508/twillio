<?php
function getFeed($feed_url,$date = true) {
	/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
		$newfeedUrl=str_replace('http://', 'https://', $feed_url);

        $ch = curl_init($newfeedUrl);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $content = curl_exec($ch);

        curl_close($ch);
		$x = new SimpleXmlElement($content);


	echo "<div id='rss'>";
	$a=0;

	foreach($x->channel->item as $entry) {
		echo "<div class='data_col'><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a>
		</div>";

			if($a == 4)
			{
				break;
			}
			$a++;
		}

	echo "<div class='date_col' style='padding-top: 1em;'><strong style='font-size: 1.1em;'><a href='/blog/'>&gt;&gt; Visit our blog and see ALL POSTS</a></strong></div>";

	echo "</div>";

}


function Create_xml_file($filePathandName,$formname)
{
	if(!file_exists($filePathandName))
	{
		$xmloutput .= "<form_used>".$formname.".php</form_used>";
	}
	$xmloutput .= "\n".'<record>';
	foreach ($_POST as $key=>$val) {
		 $val = stripslashes(htmlentities($val)); //makes the input safer
		 $xmloutput.= "\n <".$key.">".$val."</".$key.">";
	}
	$xmloutput .= "\n".'</record>';
	$editxmlfile = fopen($filePathandName, 'a+');
      fwrite($editxmlfile, $xmloutput);
      fclose($editxmlfile);
}
?>