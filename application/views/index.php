<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LOGO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
     
    </ul>
  </div>
</nav>
<br><br><br><br>
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="http://localhost/group4/index.php/Subject/add" 
    class="btn btn-primary btn-xs pull-right"><b>+</b> เพิ่มรายวิชา</a>
        <tr>
            <!-- <th>รหัสนักศึกษา</th> -->
            <!-- <th>ลำดับ</th> -->
            <th>ชื่อวิชา</th>
            <th>สถานะ</th>
            <th class="text-center">แก้ไขข้อมูล</th>
        </tr>
    </thead>
    <?php foreach ($result as $row) { ?>
        <?php if ($row->status == "W") { ?>
        <tr>
            <td><?=$row->courseName ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#">
            <span class="glyphicon glyphicon-edit"></span> Edit</a> 
            <a href="#" class="btn btn-danger btn-xs">
            <span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php } elseif ($row->status == "F") { ?>
        <tr>
            <td><?=$row->courseName ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#">
            <span class="glyphicon glyphicon-edit"></span> Edit</a> 
            <a href="#" class="btn btn-danger btn-xs">
            <span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php } elseif ($row->status == "D") { ?>
        <tr>
            <td><?=$row->courseName ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#">
            <span class="glyphicon glyphicon-edit"></span> Edit</a> 
            <a href="#" class="btn btn-danger btn-xs">
            <span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php } else { ?>
        <tr>
            <td><?=$row->courseName ?></td>
            <td><?=$row->status?></td>
            <td class="text-center"><a class='btn btn-info btn-xs' href="#">
            <span class="glyphicon glyphicon-edit"></span> Edit</a> 
            <a href="#" class="btn btn-danger btn-xs">
            <span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <?php } ?>
    <?php } ?>
    </table>
    </div>
</div>
