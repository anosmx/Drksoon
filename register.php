<?php include "includes/header.php"?>

<div class="container">
  <div class="card card-login mx-auto mt-5">
    <div class="card-header text-center">سجل معنا</div>
    <div class="card-body">
      <form>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="username" class="form-control" placeholder="" required="required" autofocus="autofocus">
            <label for="username">الاسم</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="tel" id="phone" class="form-control" placeholder="" required="required">
            <label for="phone">رقم الجوال</label>
            <small class="form-text text-info">سيتم التحقق من الرقم برسالة نصية</small>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="email" id="email" class="form-control" placeholder="" required="required">
            <label for="email">البريد الالكترني</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="password" class="form-control" placeholder="" required="required">
            <label for="password">كلمة المرور</label>
          </div>
        </div>
        <a class="btn btn-outline-success btn-block" href="#">متابعة</a>
      </form>
      <div class="text-center">
        <a class="d-block text-secondary small mt-3" href="login.php">تسجيل الدخول</a>
      </div>
    </div>
  </div>
</div>

<?php include "includes/footer.php"?>