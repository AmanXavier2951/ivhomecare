<?php include 'header.php'; ?>
<body>
  <?php  include 'sidebar.php'; ?>
  <div id="main" class="m-0 p-2 row d-flex justify-content-center align-items-center">
    <div class="col">
      <h3 class="py-2 fw-bold">Create your Blog</h3>
       <div class="mb-3">
          <!-- <label for="exampleFormControlInput1" class="form-label">Blog Title</label> -->
          <input type="email" class="form-control" name="title" id="title" title="Enter title for your blog" placeholder="Blog title">
        </div>
        <div class="mb-3">
          <!-- <label for="exampleFormControlTextarea1" class="form-label">Blog Image</label> -->
          <input type="file" class="form-control" title="upload image for your blog" id="image" name="image" rows="3" />
        </div>
       <div>
          <textarea id="tiny">&lt;p&gt;Write down your content!&lt;/p&gt;</textarea>
        </div>
        <input type="submit" value="Create Blog" class="btn btn-info btn-lg text-light my-3 mb-3" name="">
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
  </script>
</body>
</html> 
