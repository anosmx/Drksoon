<?php include "includes/header.php"?>

<body>
  <div class="container">
    <div class="mx-auto mt-5" style="max-width: 25rem;">
      <a class="small" href="providerPage.php"><i class="fas fa-angle-double-right"></i> العودة الى الطلبات</a>
    </div>
    <div class="card mx-auto mt-1 mb-5" style="max-width: 25rem;">
      <div class="card-header text-center">تفاصيل الطلب</div>
      <div class="card-body">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://picsum.photos/300/?random" width="200px" height="200px" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://picsum.photos/300/?random" width="200px" height="200px" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://picsum.photos/300/?random" width="200px" height="200px" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="mt-3 bg-light p-2 rounded">
          <label for="problemDiscr" class="text-muted">وصف المشكلة:</label>
          <p id="problemDiscr" class="font-weight-light text-info">كفر مقاس ١٨ بنشر على طريق الملك</p>
          <label for="subCateg" class="text-muted">القسم الفرعي:</label>
          <p id="subCateg" class="font-weight-light text-info">السيارة</p>
          <label for="address" class="text-muted">المدينة:</label>
          <p id="address" class="font-weight-light text-info">الرياض</p>
          <label for="address" class="text-muted">العنوان:</label>
          <p id="address" class="font-weight-light text-info">شارع العليا</p>
          <label for="location" class="text-muted">الموقع:</label>
          <p id="location" class="font-weight-light text-info">الرياض، حي العليا</p>
        </div>
        <div class="form-group mt-3">
          <div class="form-label-group">
            <input type="text" id="inputPassword" class="form-control form-control-sm" placeholder=".">
            <label for="inputPassword">ايش الخدمة اللي راح تقدمها!!</label>
          </div>
        </div>
        <div class="input-group">
          <div class="input-group-prepend">
            <label for="offerPrice" class="input-group-text">السعر</label>
          </div>
          <input id="offerPrice" type="number" class="form-control" placeholder="ادخل المبلغ ..">
        </div>
      </div>
      <div class="card-footer">
        <button class="btn btn-outline-success">قدم عرض</button>
        <button type="button" class="btn btn-outline-primary float-right"><i class="far fa-comments"></i> محادثة</button>
      </div>
    </div>
  </div>

  <?php include "includes/footer.php"?>
