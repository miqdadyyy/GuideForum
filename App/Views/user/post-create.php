<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php
    include_once '../App/Views/layouts/dashboard/header.php'
    ?>
    <script src="/tinymce_4.2.7/tinymce/js/tinymce/tinymce.min.js"></script>
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

</head>
<body class="bg-shape">
<!--================ Header Menu Area start =================-->
<?php
include_once "../App/Views/layouts/dashboard/navbar.php";
?>
<!--================Header Menu Area =================-->

<section class="hero-banner magic-ball">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form method="post" action="/dashboard/post/store" enctype="multipart/form-data">
                    <div class="col-12">
                        <div class="form-group">
                            Title
                            <input class="form-control form-control" type="text" name="title" id="title" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            Category
                            <select name="id_category" id="category" class="form-control" required>
                                <?php foreach ($categories["data"] as $category) { ?>
                                    <?php $category = (object)$category ?>
                                    <option value="<?php echo $category->id ?>"><?php echo $category->category ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            Address
                            <input class="form-control" name="address" id="address" type="text" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            Thumbnail
                            <br>
                            <input type="file" name="thumbnail" accept="image/*" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            Description
                            <textarea id="mceEditor" name="description" placeholder="input text here"
                                      style="height: 480px; resize: none;"></textarea>
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
