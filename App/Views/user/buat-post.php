<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>WYSIWYG</title>
  <!-- <script src="https://cdn.tiny.cloud/1/jkjwhh46y7bu84yk1y6f0nghxfolwimou2avycldfzyw5jfo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
  <script src="../tinymce_4.2.7/tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: "#mceEditor",
    theme: "modern",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern imagetools"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
      {title: 'Test template 1', content: 'Test 1'},
      {title: 'Test template 2', content: 'Test 2'}
    ]
  });
</script>

<link rel="stylesheet" href="../vendors/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" href="../vendors/themify-icons/themify-icons.css">
<link rel="stylesheet" href="../vendors/linericon/style.css">
<link rel="stylesheet" href="../vendors/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="../css/magnific-popup.css">
<link rel="stylesheet" href="../vendors/flat-icon/font/flaticon.css">
<link rel="stylesheet" href="../vendors/nice-select/nice-select.css">
<link rel="stylesheet" href="../css/style.css">

</head>
<body class="bg-shape">
  <!--================ Header Menu Area start =================-->
  <?php
  include_once "header.php";
  ?>
  <!--================Header Menu Area =================-->

  <section class="hero-banner magic-ball">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <form method="post">
            <div class="col-12">
              <div class="form-group">
                <input class="form-control form-control-lg" type="text" name="title" id="title" placeholder="Title">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter label">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea id="mceEditor" name="area" placeholder="input text here" style="height: 480px; resize: none;"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <button type="submit" class="button">POST</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

</body>
</html>