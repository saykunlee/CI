<!doctype html>
<html>

<head>
  <title>강의목록</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
		$(document).ready(function() {
			console.info('view', <?php echo json_encode($data); ?>);
		});
	</script>
</head>

<body>
  <div class="container mt-5">

    <h3 >강의 리스트</h3>
    <p class="lead">수강신청 버튼을 눌러 수강신청을 진행하세요.</p>
    <table class="table  table-hover small">
      <thead class='table-light'>
        <tr>
          <th scope="col">#</th>
          <th scope="col">강의명</th>
          <th scope="col">시간</th>
          <th scope="col">이수학점</th>
          <th scope="col">강의실</th>
          <th scope="col">교수번호</th>
          <th scope="col">수강신청</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['course'] as $key => $value) { ?>
        <tr>
            <th scope="row"><?php echo $value->course_no ?></th> <!-- 강의번호 -->
            <td><?php echo $value->course_name ?></td><!-- 강의명 -->
            <td><?php echo $value->course_time; ?></td><!-- 시간 -->
            <td> <?php echo $value->course_point; ?></td><!-- 이수학점 -->
            <td> <?php echo $value->course_classno; ?></td><!-- 강의실 -->
            <td> <?php echo $value->instructor_no; ?></td><!-- 교수번호 -->
            <td> <button type="button" class="btn btn-outline-danger btn-sm">수강신청</button></td><!-- 수강신청 버튼 -->
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

</body>

</html>