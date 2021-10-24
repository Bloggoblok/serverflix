<?php
session_start();
if($_SESSION['Status'] != "Logged in") {
   header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dooo - Add Channel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <link href="public/cssadd-movie.css" rel="stylesheet" type="text/css" />

    <!-- Summernote css -->
    <link href="public/libs/summernote/summernote.css" rel="stylesheet" type="text/css" />


    <link href="public/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="public/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="public/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="public/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <?php include 'layouts/headerStyle.php'; ?>
</head>

<?php include 'layouts/master.php'; echo setLayout();?>

<!-- Begin page -->
<div id="layout-wrapper">


    <?php include 'layouts/topbar.php'; ?>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="font-size-18">Add Channel</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dooo</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Live TV</a></li>
                                <li class="breadcrumb-item active">Add Channel</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="form" action="https://admin.fliq.pro/admin/videos/add/" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <h3 class="card-title mt-0">Channel Info</h3>
                                <hr>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" value="" id="title">
                                </div>

                                <div class="form-group">
                                    <label>Stream Type</label>
                                    <select class="form-control" id="Stream_Type">
                                        <option>Mp4</option>
                                        <option>Mkv</option>
                                        <option>YoutubeLive</option>
                                        <option selected="">M3u8</option>
                                        <option>Dash</option>
                                        <option>Embed</option>
                                        <option>TwitchLive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Stream Link</label>
                                    <input class="form-control" type="text" value="" id="Stream_Link">
                                </div>

                                <div class="form-group">
                                    <label>Free/Premium</label>
                                    <select class="form-control" id="Free_Premium">
                                        <option>Free</option>
                                        <option>Premium</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-body">
                                <h3 class="card-title mt-0">Additional Info</h3>
                                <hr>

                                <div class="form-group">
                                    <label>Poster</label>
                                    <div class="row justify-content-center">
                                        <img class="img-fluid" id="poster_image"
                                            style="padding: 0.20rem; background-color: #FFF; border: 1px solid #dee2e6; border-radius: 0.25rem; max-width: 100%; height: auto;"
                                            width="350" src="public/images/Dooo_poster_placeholder.png"
                                            data-holder-rendered="true">
                                    </div>
                                    <br>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10">
                                            <input class="form-control" id="Poster_URL" type="text"
                                                placeholder="Image URL (Best Fit = 2048 x 1152)" value=""
                                                id="example-text-input">
                                        </div>

                                        <div class="col-lg-1">
                                            <span class="input-group-btn">
                                                <button type="submit" onclick="SET_Poster()" id="import_btn"
                                                    class="btn btn-primary waves-effect waves-light"> SET </button>
                                            </span>

                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Featured</label>
                                    <div>
                                        <input type="checkbox" id="Featured" switch="bool" checked />
                                        <label for="Featured" data-on-label="" data-off-label=""></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Publish</label>
                                    <div>
                                        <input type="checkbox" id="Publish_toggle" switch="bool" checked />
                                        <label for="Publish_toggle" data-on-label="" data-off-label=""></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 row justify-content-end">
                                        <button class="btn btn-primary dropdown-toggle waves-effect waves-light"
                                            onclick="Save_Movie_Data()" id="create_btn" type="submit"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-plus mr-2"></i> Create
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<?php include 'layouts/footerScript.php'; ?>

<!--tinymce js-->
<script src="public/libs/tinymce/tinymce.min.js"></script>

<!-- Summernote js -->
<script src="public/libs/summernote/summernote.js"></script>

<!-- init js -->
<script src="public/js/pages/form-editor.init.js"></script>



<script src="public/libs/select2/js/select2.min.js"></script>
<script src="public/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="public/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="public/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="public/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
<script src="public/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

<script src="public/js/pages/form-advanced.init.js"></script>

<?php include "layouts/content-end.php"; ?>

<?php require '../db/config.php'; ?>

<script>
    function SET_Poster() {
        var Poster = document.getElementById("Poster_URL").value;
        $('#poster_image').attr('src', Poster);
    }

    function Save_Movie_Data() {
        var Name = document.getElementById("title").value;
        var Stream_Type = document.getElementById("Stream_Type").value;
        var Stream_Link = document.getElementById("Stream_Link").value;
        var POSTER = document.getElementById("poster_image").src;
        if ($('#Featured').is(':checked')) {
            var Featured_Count = 1;
        } else {
            var Featured_Count = 0;
        }

        if ($('#Publish_toggle').is(':checked')) {
            var Publish_toggle_Count = 1;
        } else {
            var Publish_toggle_Count = 0;
        }

        var Free_Premium = document.getElementById("Free_Premium").value;
        if (Free_Premium == "Free") {
            var Free_Premium_Count = 0;
        } else if (Free_Premium == "Premium") {
            var Free_Premium_Count = 1;
        }


        var jsonObjects = {
            "name": Name,
            "Stream_Type": Stream_Type,
            "Stream_Link": Stream_Link,
            "type": Free_Premium_Count,
            "POSTER": POSTER,
            "Featured": Featured_Count,
            "status": Publish_toggle_Count
        };
        $.ajax({
            type: 'POST',
            url: "dashboard_api/live_tv/add_channel.php",
            contentType: 'application/json',
            data: JSON.stringify(jsonObjects),
            dataType: 'text',
            success: function (response3) {
                if (response3 != "") {
                    location.reload();
                }
            }
        });
    }
</script>