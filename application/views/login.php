<html>

<head>
  <title>로그인 - MVC 수강신청</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <!-- jquery -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="/assets/css/signin.css">
   <!-- jquery -->
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      console.info('view', <?php echo json_encode($data); ?>);
      console.info('session', <?php echo json_encode($_SESSION); ?>);
    });
  </script>
</head>

<body class="text-center">
  <main class="form-signin">
    <form id="frmLogin" name="frmLogin" method="POST" action="/Login/dologin">
      <h3 class="h3 mb-3 fw-normal">MVC 수강신청</h3>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" name="login_email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <?php if ($data['error_msg']) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert"><?php echo $data['error_msg']; ?> </div>
      <?php } ?>
      <button class="w-100 btn btn-lg btn-primary" type="submit">로그인</button>
    </form>
  </main>
</body>

</html>