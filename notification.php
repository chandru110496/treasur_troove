
<div id="notificationContainer"></div>

<div id="popupNotification">
    <span id="closeButton"></span>
    <div id="popupContent"></div>
</div>

<style>
/* Notification Container */
#notificationContainer {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
}

/* Pop-up Notification */
#popupNotification {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    padding: 20px;
    display: none;
    z-index: 9999;
}

#closeButton {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    font-size: 24px;
    font-weight: bold;
}

</style>

<?php

// Generate notifications (sample data)
$notifications = [
    ['message' => 'Notification 1'],
    ['message' => 'Notification 2'],
    ['message' => 'Notification 3']
];

// Loop through the notifications and create HTML elements
foreach ($notifications as $notification) {
    echo '<div class="notification">' . $notification['message'] . '</div>';
}
?>





<script>
// Get the notification container and the pop-up notification elements
const notificationContainer = document.getElementById('notificationContainer');
const popupNotification = document.getElementById('popupNotification');
const popupContent = document.getElementById('popupContent');
const closeButton = document.getElementById('closeButton');

// Display the notifications in the container
notificationContainer.innerHTML = "<?php echo str_replace(PHP_EOL, '', ob_get_clean()); ?>";

// Show the pop-up notification when a notification is clicked
const notifications = document.getElementsByClassName('notification');
Array.from(notifications).forEach(notification => {
    notification.addEventListener('click', () => {
        popupContent.innerHTML = notification.innerHTML;
        popupNotification.style.display = 'block';
    });
});

// Close the pop-up notification when the close button is clicked
closeButton.addEventListener('click', () => {
    popupNotification.style.display = 'none';
});

</script>
