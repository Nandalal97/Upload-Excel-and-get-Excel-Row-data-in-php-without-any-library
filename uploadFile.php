<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Upload</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<h2>Upload File</h2>
<form id="uploadForm" enctype="multipart/form-data">
    <input type="file" name="fileUpload" id="fileUpload">
    <button type="button" onclick="uploadFile()">Upload</button>
</form>
<div id="response"></div>

<script>
function uploadFile() {
    var formData = new FormData();
    var fileInput = document.getElementById('fileUpload');
    var file = fileInput.files[0];
    formData.append('fileUpload', file);

    // Check file extension
    var fileName = file.name;
    var fileExtension = fileName.split('.').pop().toLowerCase();
    if (fileExtension !== 'xls' && fileExtension !== 'xlsx' && fileExtension !== 'csv') {
        alert('Please select a .xls, .xlsx, or .csv file.');
        return;
    }
    $.ajax({
        url: 'fileData.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            $('#response').html(response);
            
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}
</script>

</body>
</html>
