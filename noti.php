<!DOCTYPE html>
<html>
<head>
 <style>
.notification-sidebar {
  width: 300px;
  height: 100%;
  background-color: #f2f2f2;
  padding: 20px;
}

.notification-header {
  display: flex;
  align-items: center;
}

.notification-header h2 {
  margin: 0;
  flex: 1;
}

.bell-icon {
  width: 20px;
  height: 20px;
  background-image: url("bell-icon.png");
  background-size: cover;
}

.notification-body {
  margin-top: 20px;
}

.notification {
  margin-bottom: 10px;
  padding: 10px;
  background-color: white;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
 </style>
</head>
<body>
  <div class="notification-sidebar">
    <div class="notification-header">
      <h2>Notifications</h2>
      <span class="bell-icon"></span>
    </div>
    <div class="notification-body">
      <?php
      session_start();
      if (isset($_SESSION['notifications']) && !empty($_SESSION['notifications'])) {
        foreach ($_SESSION['notifications'] as $notification) {
          echo '<div class="notification">' . $notification . '</div>';  
        }
        // Clear notifications after displaying them
        $_SESSION['notifications'] = array();
      } else {
        echo '<div class="notification">No more notifications.</div>';
      }
      ?>
    </div>
  </div>
</body>
</html>