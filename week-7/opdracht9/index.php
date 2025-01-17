<?php
if (isset($_COOKIE['page_views'])) {
    $pageViews = $_COOKIE['page_views'] + 1;
} else {
    $pageViews = 1;
}
setcookie('page_views', $pageViews, 0);
echo "Deze pagina heb je al: $pageViews keer bekeken voordat je de internetbrowser hebt afgesloten.";
?>