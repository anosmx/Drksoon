<?php include "includes/header.php"?>

<body>
    <div class="container p-2">
        <h2 class="display-4 text-center text-warning p-3"></h2>
    </div>
    <div class="jumbotron jumbotron-fluid p-0">
        <div id="map" class="border rounded" style="width:100%;height:400px;"></div>
    </div>
    <div class="container mb-5">
        <div class="input-group mt-2 mb-2" style="max-width:18em;">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">فرز حسب السعر:</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
                <option value="1">اقل الى اعلى</option>
                <option value="2">اعلى الى اقل</option>
            </select>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <!-- القسم -->
                        <h6 class="card-title small text-center text-muted">السيارات</h6>
                        <!-- تعليق مقدم  الخدمة -->
                        <p class="text-center mt-3 mb-0">نسخة مفتاح السيارة</p>
                    </div>
                    <div>
                        <div class="text-center">
                            <small class="small text-info ">تقييم مقدم الخدمة</small>
                        </div>
                        <div class="text-center text-warning text-secondary p-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="mb-2">
                            <div class="row m-0">
                                <div class="col text-secondary">
                                    <p class="d-inline">٩</p>
                                    <p class="d-inline">كم</p>
                                </div>

                                <div class="col text-right text-success">
                                    <p class="d-inline">٣٠٠</p>
                                    <p class="d-inline">ر.س</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center" role="group">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-success">قبول</button>
                            <button type="button" class="btn btn-outline-primary"><i class="far fa-comments"></i> محادثة</button>
                            <button type="button" class="btn btn-outline-danger">رفض</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <!-- القسم -->
                        <h6 class="card-title small text-center text-muted">المنازل</h6>
                        <!-- تعليق مقدم الخدمة -->
                        <p class="text-center mt-3 mb-0">اصلاح سخان المياه</p>
                    </div>
                    <div>
                        <div class="text-center">
                            <small class="small text-info ">تقييم مقدم الخدمة</small>
                        </div>
                        <div class="text-center text-warning text-secondary p-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="mb-2">
                            <div class="row m-0">
                                <div class="col text-secondary">
                                    <p class="d-inline">٩</p>
                                    <p class="d-inline">كم</p>
                                </div>

                                <div class="col text-right text-success">
                                    <p class="d-inline">٢٤٠</p>
                                    <p class="d-inline">ر.س</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center" role="group">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-success">قبول</button>
                            <button type="button" class="btn btn-outline-primary"><i class="far fa-comments"></i> محادثة</button>
                            <button type="button" class="btn btn-outline-danger">رفض</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <!-- القسم -->
                        <h6 class="card-title small text-center text-muted">الطريق</h6>
                        <!-- تعليق مقدم الخدمة -->
                        <p class="text-center mt-3 mb-0">بنشر كفر</p>
                    </div>
                    <div>
                        <div class="text-center">
                            <small class="small text-info ">تقييم مقدم الخدمة</small>
                        </div>
                        <div class="text-center text-warning text-secondary p-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="mb-2">
                            <div class="row m-0">
                                <div class="col text-secondary">
                                    <p class="d-inline">٩</p>
                                    <p class="d-inline">كم</p>
                                </div>

                                <div class="col text-right text-success">
                                    <p class="d-inline">١٨٠</p>
                                    <p class="d-inline">ر.س</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center" role="group">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-success">قبول</button>
                            <button type="button" class="btn btn-outline-primary"><i class="far fa-comments"></i> محادثة</button>
                            <button type="button" class="btn btn-outline-danger">رفض</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <!-- القسم -->
                        <h6 class="card-title small text-center text-muted">الطريق</h6>
                        <!-- تعليق مقدم الخدمة -->
                        <p class="text-center mt-3 mb-0">بنشر كفر</p>
                    </div>
                    <div>
                        <div class="text-center">
                            <small class="small text-info ">تقييم مقدم الخدمة</small>
                        </div>
                        <div class="text-center text-warning text-secondary p-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="mb-2">
                            <div class="row m-0">
                                <div class="col text-secondary">
                                    <p class="d-inline">٩</p>
                                    <p class="d-inline">كم</p>
                                </div>

                                <div class="col text-right text-success">
                                    <p class="d-inline">١٨٠</p>
                                    <p class="d-inline">ر.س</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center" role="group">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-success">قبول</button>
                            <button type="button" class="btn btn-outline-primary"><i class="far fa-comments"></i> محادثة</button>
                            <button type="button" class="btn btn-outline-danger">رفض</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        function myMap() {
            var mapCanvas = document.getElementById("map");
            var mapOptions = {
                center: new google.maps.LatLng(51.5, -0.2), zoom: 10
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPkuAatjnzkvbUM_BwwAVeV0L9OxMHjJg&callback=myMap"></script>

    <?php include "includes/footer.php"?>
