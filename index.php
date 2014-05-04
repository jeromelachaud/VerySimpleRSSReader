<?php include 'header.php'; ?>

<body>
<div class="wrapper">
	<?php
	$data = $conn->query('SELECT slug FROM feed ORDER BY nom ASC');
	$feed = $data->fetchAll(PDO::FETCH_COLUMN, 0);

	foreach ($feed as $feedURL):
		$rss = simplexml_load_file($feedURL);
		$title = $rss->channel->title;
				echo '<div class="channel">';
				echo'<span class="channel-title"><a href="'.$rss->channel->link.'"><h2>'.$rss->channel->title.'</h2></a></span>';
					$i = 0;
					foreach ($rss->channel->item as $item) {
						if($i == $items) break;
							echo '<p class="news">
									<span class="news"><a href="'.$item->link.'">'.$item->title.'</a></span>
					        </p>';
				        $i++;
					}
				echo '</div>';
		unset($feedURL);
	endforeach;
	?>

</div>

<?php include 'footer.php'; ?>