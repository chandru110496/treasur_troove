<!DOCTYPE html>
<html>
<head>
    <title>Change Background Color</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <button id="colorChanger">Change Background Color</button>
    <div id="content">
        <p>Click the button to change the background color!</p>
    </div>
    <script src="script.js"></script>
</body>
</html>





<script>


let status = 'original';

$('#colorChanger').on('click', function() {
    const contentDiv = $('#content');
    if (status === 'original') {
        contentDiv.css('background-color', 'lightblue');
        status = 'changed';
    } else {
        contentDiv.css('background-color', 'white');
        status = 'original';
    }
});
</script>