<?php
include("include/database.php");

session_start();

$id;
$user_type;
if (isset($_SESSION['user_details'])) {
    $id = $_SESSION['user_details']['user_id'];
    $user_type = 'user_id';
} else if (isset($_SESSION['vendor_details'])) {
    $id = $_SESSION['vendor_details']['vendor_id'];
    $user_type = 'vendor_id';
} else if (isset($_SESSION['s_provider'])) {
    $id = $_SESSION['s_provider']['user_id'];
    $user_type = 'service_user_id';
}

$id = 78;
$user_type = 'user_id';
function getNotificationCount($id, $user_type, $db)
{
    $sql = "SELECT count(*) count FROM  war_title WHERE $user_type='$id' AND is_read='0'AND status='0' ";
    $smt = $db->query($sql);
    $row = $smt->fetch_assoc();
    return $row['count'];
}
function getNotificationSmt($id, $user_type, $db)
{
    $sql = "SELECT * FROM war_title WHERE $user_type='$id' AND  status='0' ORDER BY created_at DESC ";
    return $db->query($sql);
}

function  returnNotificationResponse($result, $new_count)
{
    $rowCount = $result->num_rows;
    $displayLimit = 2;
    $showReadMore = $rowCount > $displayLimit;
    $counter = 0;
    $notification = "";
    if ($rowCount > 0) {
        while ($row = $result->fetch_assoc()) {
            $messageId = $row["notification_id"];
            $content = $row["description"];
            $isRead = $row["is_read"];
            $title = $row["title"];
            $status = $row["status"];
            $badge_text = ($isRead == 0) ? 'New' : 'Old';
            $cssStyle = 'font-weight:bold;color:#1657CB;';
            $findNew = '<span class="badge">' . $badge_text . '</span>';
            $display = $counter < $displayLimit ? 'block' : 'none';
            $notification .= "<div class='notifi-item' data-message-id='$messageId' style='display:$display;'>";
            $notification .= " <div class='text content'>";
            $notification .= " <h4 style='$cssStyle'>$title $findNew</h4> ";
            $notification .= "  <p>$content</p>";
            if ($isRead == 0)
                $notification .= "<button class='close-btn ' style='color:green;' onclick=\"readNotification('$messageId')\" >Mark As Read</button> &nbsp;";
            $notification .= "<button class='close-btn ' style='color:red;' onclick=\"closeNotification('$messageId')\">Close</button>";
            $notification .= " </div> ";
            $notification .= "</div>";

            $counter++;
        }
    } else {
        $notification .= "No messages found.";
    }
    if ($showReadMore) {
        $notification .= "<div class='notifi-footer' id='read-more-btn' onclick='sideBar()'>
                            <div class='tex'><h2>Read More</h2></div>
                         </div>";
    }
    $result = [$new_count, $notification];
    echo json_encode($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['action'])) {

    $action = $_REQUEST['action'];

    if ($action == 'mark_as_read') {
        $messageId = $_REQUEST['messageId'];
        $sql = "UPDATE war_title SET is_read=1  WHERE notification_id = $messageId ";
        $db->query($sql);
        $smt = "";
        $smt = getNotificationSmt($id, $user_type, $db);
        $new_count = getNotificationCount($id, $user_type, $db);

        returnNotificationResponse($smt, $new_count);
    }
    if ($action == 'close_notification') {
        $messageId = $_REQUEST['messageId'];
        $sql = "UPDATE war_title SET status=1  WHERE notification_id = $messageId ";
        $db->query($sql);
        $smt = getNotificationSmt($id, $user_type, $db);
        $new_count = getNotificationCount($id, $user_type, $db);

        returnNotificationResponse($smt, $new_count);
    }
    if ($action == 'getNotificationDetails') {
        $smt = getNotificationSmt($id, $user_type, $db);
        $new_count = getNotificationCount($id, $user_type, $db);
        returnNotificationResponse($smt, $new_count);
    }
}
