<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



<div class="container">
    <div class="form-style-2">
        <h2 style ="margin-top:25px;"> กรอกข้อมูลรายวิชาตกค้าง </h2>
            <form action="<?=base_url('Subject/insert')?>" method="post">
                <div class="row " style ="margin-top:25px;">
                    <div class="col-md-2" >
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">รหัสนักศึกษา</label>
                            <input type="text" class="form-control" name="studentid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="รหัสนักศึกษา">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">ชื่อ  นามสกุล</label>
                            <input type="text" name="studentname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ชือ นามสกุล">
                        </div>
                    </div>
                </div>
                <div class="row" style ="margin-top:25px;">
                    <div class="col-md-2">
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">รหัสรายวิชา</label>
                            <input type="text" name="courseID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="รหัสรายวิชา">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group mb-4">
                            <label for="exampleInputEmail1">ชื่อรายวิชา</label>
                            <input type="text" name="courseName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ชื่อรายวิชา">
                        </div>
                    </div>
                </div>
                <div class="row" style ="margin-top:25px;">
                    <div class="col-md-2">
                         <label class="my-1 mr-2" for="inlineFormCustomSelectPref">ภาคการศึกษา</label>
                            <select class="custom-select my-1 mr-sm-2" name="term" id="inlineFormCustomSelectPref">
                                <option selected>- ภาคการศึกษา -</option>
                                <option value="1">ภาคการศึกษาที่ 1</option>
                                <option value="2">ภาคการศึกษาที่ 2</option>
                                <option value="3">ภาคการศึกษาที่ 3</option>
                            </select>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">ปีการศึกษา</label>
                            <input type="text" name="year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ปีการศึกษา">
                        </div>
                    </div>
                </div>
                
              
                <div class="row" style ="margin-top:25px;">
<<<<<<< HEAD
                    <div class="col-md-2">
=======
                    <div class="col">
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">รหัสรายวิชา</label>
                            <input type="text" name="courseid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="รหัสรายวิชา">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group mb-4">
                            <label for="exampleInputEmail1">ชื่อรายวิชา</label>
                            <input type="text" name="courseName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ชื่อรายวิชา">
                        </div>
                    </div>
                </div>
                <div class="row" style ="margin-top:25px;">
                    <div class="col">
>>>>>>> fd282a6094cb1276de4d645facb9484146fa903f
                         <label class="my-2 mr-1" for="inlineFormCustomSelectPref">ผลการศึกษา</label>
                            <select class="custom-select my-1 mr-sm-2" name="grade" id="inlineFormCustomSelectPref">
                                <option selected>- ผลการศึกษา -</option>
                                <option value="1">W</option>
                                <option value="2">F</option>
                                <option value="3">D</option>
                                <option value="4">D+</option>
                            </select>
                    </div>
                </div>
                <br>
               <div class="row" style ="margin-top:25px;">
                    <div class="col">
                        <button type="submit" class="btn btn-info">บันทึกข้อมูล</button>
                    </div>
               </div>
   
            </form>
        </div>
    </div>
</div>