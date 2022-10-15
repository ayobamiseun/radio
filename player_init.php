								<?php //echo $m_id; ?>
								<script>

									$(document).ready(function() {

										var p1 = "<?php echo $m_id; ?>";
										var title = "<?php echo $m_title; ?>";
										var artist = "<?php echo $m_artist ?>";
										var link = "<?php echo $m_real ?>";

										//alert(p1);
										
										$("#"+p1).jPlayer({
											ready: function () {
												$(this).jPlayer("setMedia", {
													    title:title,
														artist:artist,
														//mp3:"files/bensound-betterdays.mp3"
														mp3:link
												});
											},
											play: function() { // To avoid multiple jPlayers playing together.
												$(this).jPlayer("pauseOthers");
											},
											swfPath: "plugins/jPlayer",
											supplied: "mp3",
											cssSelectorAncestor: "#jp_container_1"+p1,
											wmode: "window",
											globalVolume: false,
											useStateClassSkin: true,
											autoBlur: false,
											smoothPlayBar: true,
											keyEnabled: true,
											solution: "html",
											preload: "metadata",
											volume: 0.2,
											muted: false,
											backgroundColor: "#000000",
											errorAlerts: false,
											warningAlerts: false
										});

									});

								</script>