<?php include "includes/header.php"?>

<div class="container">
  <div class="card card-login mx-auto mt-5">
    <div class="card-header text-center">تسجيل</div>
    <div class="card-body">
      <div class="card-title text-center text-primary">ادخل الرمز المرسل الى جوالك</div>
      <form>
        <div class="form-group">
          <div class="form-label-group">
            <input type="tel" id="inputEmail" class="form-control" placeholder="" required="required" autofocus="autofocus">
            <label for="inputEmail">رمز التحقق</label>
          </div>
        </div>
        <a class="btn btn-outline-info btn-block" href="#">ارسل</a>
      </form>
    </div>
  </div>
</div>

<?php include "includes/footer.php"?>