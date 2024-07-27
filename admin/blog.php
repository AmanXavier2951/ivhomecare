<?php include 'header.php'; ?>
<body>
  <?php include 'sidebar.php'; ?>
  <div id="main" class="m-0 p-2 row d-flex justify-content-center align-items-center">
    <div class="col">
      <h3 class="py-2 fw-bold">Create your Blog</h3>
      <form id="blogForm" method="POST" enctype="multipart/form-data">
       <div class="mb-3">
          <input type="text" class="form-control" name="title" id="title" title="Enter title for your blog" placeholder="Blog title">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="description" id="description" title="Enter meta tags description for your blog" placeholder="Blog meta description">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="heading" id="heading" title="Enter Heading for your blog" placeholder="Blog Heading">
        </div>
        <div class="mb-3">
          <input type="file" class="form-control" title="Upload image for your blog" id="image" name="image" rows="3" />
        </div>
       <div>
          <textarea id="tiny" name="content">&lt;p&gt;Write down your content!&lt;/p&gt;</textarea>
        </div>
        <input type="submit" value="Create Blog" class="btn btn-info btn-lg text-light my-3 mb-3" name="add">
      </form>
      <div id="responseMessage"></div>
    </div>
  </div>


<!-- Success Modal HTML -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="successModalLabel">Success</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="successModalBody">
      </div>
    </div>
  </div>
</div>

<!-- Error Modal HTML -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="errorModalLabel">Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="errorModalBody">
      </div>
    </div>
  </div>
</div>



<script>
  $('textarea#tiny').tinymce({
    height: 400,
    menubar: false,
    plugins: [
      'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
      'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
      'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
    ],
    toolbar: 'undo redo | blocks | bold italic backcolor | ' +
      'alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | removeformat | help'
  });

  $('#blogForm').on('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    
    var formData = new FormData(this);
    
    $.ajax({
      url: 'query/create_blog.php', // Replace with the actual path to your PHP file
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        if (response.status === 'success') {
          $('#successModalBody').html('<div class="alert alert-success">' + response.message + '</div>');
          $('#successModal').modal('show');
          setTimeout(function() {
            $('#successModal').modal('hide');
            location.reload(); // Refresh the page
          }, 2000); // 2 seconds delay
        } else {
          $('#errorModalBody').html('<div class="alert alert-danger">' + response.message + '</div>');
          $('#errorModal').modal('show');
        }
      },
      error: function(xhr, status, error) {
        $('#errorModalBody').html('<div class="alert alert-danger">Error: ' + xhr.responseText + '</div>');
        $('#errorModal').modal('show');
      }
    });
  });
</script>

</body>
</html>
