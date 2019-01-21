<?php include "includes/header.php"?>

<body>
    <div class="container mb-5">
        <div class="mx-auto mt-5 mb-1 small" style="max-width: 25rem;">
            <a href="offersPage.php"><i class="fas fa-angle-double-right"></i> العودة الى العروض</a>
        </div>
        <div class="card card-login mx-auto">
            <div class="card-header text-center">
                <h5 class="h5 mb-0 text-dark">طلب جديد</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">المنطقة</label>
                            </div>
                            <select class="custom-select" required="required" id="inputGroupSelect01">
                                <option selected>اختر ..</option>
                                <option value="1">الرياض</option>
                                <option value="2">الشرقية</option>
                                <option value="2">الغربية</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="tel" id="phone" class="form-control" placeholder="." required="required">
                            <label for="phone">المدينة والعنوان</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect09">القسم</label>
                            </div>
                            <select class="custom-select" required="required" id="inputGroupSelect09">
                                <option>السيارة</option>
                                <option>الجوال</option>
                                <option>المنزل</option>
                                <option>اخرى</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="s01">القسم الفرعي</label>
                            </div>
                            <select class="form-control custom-select" required="required" id="s01">
                                <option>مفتاح سيارة</option>
                                <option>غيار زيت</option>
                                <option>بنزين</option>
                                <option>صيانة منزلية</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" required="required" class="form-control" placeholder="موقعي" aria-label="basic-addon2" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text p-2" id="basic-addon2"><a href="#" style="height:24px;"><img src="img/gps.png" alt=""></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textarea1">وصف المشكلة:</label>
                        <textarea class="form-control" required="required" id="textarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="ar">
                                <label class="custom-file-label" for="customFileLang">ارفق صورة او صوت</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-success btn-block" value="ارسال">
                </form>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php"?>