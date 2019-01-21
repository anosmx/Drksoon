<?php include "includes/header.php"?>

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">تسجيل الدخول</div>
        <div class="card-body">
            <form action="offersPage.php">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputEmail" class="form-control" placeholder="" required="required" autofocus="autofocus">
                        <label for="inputEmail">رقم الجوال أو البريد الالكتروني</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="" required="required">
                        <label for="inputPassword">كلمة المرور</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me">
                            تذكرني
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block">دخول</button>
            </form>
            <div class="text-center">
                <a class="d-block small text-secondary mt-3" href="register.php">تسجيل</a>
                <a class="d-block small text-secondary mt-2" href="passReset.php">نسيت كلمة المرور!</a>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"?>