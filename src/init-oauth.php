<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=934506964371800084&redirect_uri=https%3A%2F%2Fsmox.lol&response_type=code&scope=identify%20guilds";
header("Location: $discord_url");
exit();

?>
