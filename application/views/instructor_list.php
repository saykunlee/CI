<!doctype html>
<html>

<head>
  <title>수강신청현황</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <!-- jquery -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      console.info('view', <?php echo json_encode($data); ?>);
   
    });
  </script>
  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="/assets/css/sidebars.css">
  <!-- sidebar js for this template -->
  <script src="/assets/js/sidebars.js"></script>
</head>

<body>
  <main>
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 220px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">MVC 수강신청</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li>
          <a href="/course/list" class="nav-link link-dark">강의리스트 </a>
        </li>
        <li>
          <a href="/course/enrollment" class="nav-link link-dark">수강신청현황</a>
        </li>
        <li>
          <a href="/instructor/list" class="nav-link active">교수진</a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <strong><?php echo $_SESSION['student_name']; ?></strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item"><?php echo $_SESSION['student_major']; ?></a></li>
          <li><a class="dropdown-item"><?php echo $_SESSION['student_email']; ?></a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="/login/dologout">Log out</a></li>
        </ul>
      </div>
    </div>
    <div class="container mt-3">
      <h3>교수진현황</h3>
      <p class="lead">교수진을 확인하세요.</p>
      <table class="table  table-hover small">
        <thead class='table-light'>
          <tr>
            <th scope="col">#</th>
            <th scope="col">교수명</th>
            <th scope="col">이메일</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['instructor'] as $key => $value) { ?>
            <tr>
              <th scope="row"><?php echo $key + 1 ?></th> <!-- 교수번호 -->
              <td><?php echo $value->instructor_name ?></td><!-- 교수명 -->
              <td> <?php echo $value->instructor_email; ?></td><!-- 이메일 -->
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>