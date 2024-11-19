<?php include("file-upload.php"); ?>
<?php include("config/database.php"); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Upload to Images to Case</title>
  <style>
    .container {
      max-width: 450px;
    }

    .imgGallery img {
      padding: 8px;
      max-width: 100px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data" class="mb-3">
      <h3 class="text-center mb-5">Upload Images of Incident of Crime </h3>
      <div class="user-image mb-3 text-center">
        <div class="imgGallery">
          <!-- Image preview -->
        </div>
      </div>
      <label" >Crime ID</label>
      <input type="text" name="c_id" placeholder="Crime ID" required=""><br></br>
      <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="chooseFile" multiple>
        <label class="custom-file-label" for="chooseFile">Select file</label>
      </div>
      <button type="submit" name="upload" class="btn btn-primary btn-block mt-4">
        Upload Files
      </button>
    </form>
    <!-- Display response messages -->
    <?php if (!empty($response)) { ?>
      <div class="alert <?php echo $response["status"]; ?>">
        <?php echo $msg; ?>
      </div>
    <?php } ?>
  </div>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script>
    $(function() {
      // Multiple images preview with JavaScript
      var multiImgPreview = function(input, imgPreviewPlaceholder) {
        if (input.files) {
          var filesAmount = input.files.length;
          for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(event) {
              $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
            }
            reader.readAsDataURL(input.files[i]);
          }
        }
      };
      $('#chooseFile').on('change', function() {
        multiImgPreview(this, 'div.imgGallery');
      });
    });
  </script>

</body>

</html>