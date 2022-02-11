<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container">
      <div class="jumbotron">
        <div class="row">
          <h1>Laravel Crud - Ajax using Bootstrap Modal</h1>
          <!-- Button trigger modal -->
        </div>
      </div>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Students
      </button>
	  <p align="right">Hello world</p>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-header">
              Students
            </div>
            <div class="card-body">
              <table id="studentTable" class="table">
                <thead>
                  <tr>
                    <td>SNO</td>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; ?>
                  @foreach($students as $student)
                  <?php $no++;?>
                  <tr id="sid{{$student->id}}">

                    <td><?php echo $no; ?></td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->created_at}}</td>
                    <td> <a href="javascript:void(0)" onclick="editStudent({{$student->id}})" class="btn btn-info">Edit</a>
                    <a href="javascript:void(0)" onclick="deleteStudent({{$student->id}})" class="btn btn-danger">Delete</a> </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addform">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" name="name" id="student_name" class="form-control" value="" placeholder="Enter the Name Here">
                <span class="text-danger" id="nameError"></span>
              </div><br><br>
              <div class="form-group">
                <input type="email" name="email" id="student_email" class="form-control" value="" placeholder="Enter the Email Here">
                <span class="text-danger" id="emailError"></span>
              </div><br><br>
              <!-- <div class="form-group">
                <input type="password" name="password"id="student_password" class="form-control" value="" placeholder="Enter the Password Here">
              </div><br><br> -->
              <div class="form-group">
                <input type="number" name="num1"id="student_num1" class="form-control" value="" placeholder="Enter the Mobile Number Here">
                <span class="text-danger" id="num1Error"></span>
              </div><br><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="sub" value="submit" id=""  class="btn btn-primary">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="studenteditModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editform">
              {{ csrf_field() }}
              <input type="hidden" name="id" id="id" value="">
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" value="" placeholder="Enter the Name Here">
              </div><br><br>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" value="" placeholder="Enter the Email Here">
              </div><br><br>
              <!-- <div class="form-group">
                <input type="password" name="password"id="student_password" class="form-control" value="" placeholder="Enter the Password Here">
              </div><br><br> -->
              <div class="form-group">
                <input type="number" name="num1"id="num1" class="form-control" value="" placeholder="Enter the Mobile Number Here">
              </div><br><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="sub" value="submit"  class="btn btn-primary">
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
  <script type="text/javascript">
    $(document).ready(function (){
      $('#addform').on('submit',function(e){
        e.preventDefault();
        var name = $("input[name=name]").val();
        var email = $("input[name=email]").val();
        var phone = $("input[name=num1]").val();
        var _token = $("input[name=_token]").val();

        $('#nameError').addClass('d-none');
        $('#emailError').addClass('d-none');
        $('#num1Error').addClass('d-none');

        $.ajax({
          type:"POST",
          url:"{{route('student.add')}}",
          data:$('#addform').serialize(),
          dataType:'json',
          success:function (response){
            console.log(response)
            alert("data saved");
            $('#exampleModal').modal('hide');
            location.reload();
          },
          error:function (response){

            var errors = response.responseJSON;
            if($.isEmptyObject(errors)==false){
              $.each(errors.errors,function(key,value){
                var ErrorId = '#' + key + 'Error';
                $(ErrorId).removeClass("d-none");
                $(ErrorId).text(value)
              })
            }
            // console.log(response)
            // alert("data not saved");
          }
        });
      });
    });
  </script>
  <script type="text/javascript">
    function editStudent(id) {
      $.get('/students/'+id,function(student){
        $("#id").val(student.id);
        $("#name").val(student.name);
        $("#email").val(student.email);
        $("#num1").val(student.phone);
        $("#studenteditModel").modal("toggle");
      });
    }

    $('#editform').on('submit',function(e){
      e.preventDefault();
      var id=$('#id').val();
      var name=$('#name').val();
      var email=$('#email').val();
      var phone=$('#num1').val();
      // var _token=$("input[name=_token]").val();

      $.ajax({
        url:"{{route('student.update')}}",
        type:"PUT",
        dataType:'json',
        data:$('#editform').serialize(),
        // data:{
        //   id:id,
        //   name:name,
        //   email:email,
        //   phone:num1
        // },
        success:function (response){
          console.log(response)
          $('#sid' + response.id + 'td:nth-child(1)').text(response.name);
          $('#sid' + response.id + 'td:nth-child(2)').text(response.email);
          $('#sid' + response.id + 'td:nth-child(3)').text(response.phone);
          alert("data saved");
          $('#studenteditModel').modal('hide');
          // $('#studenteditModel')[0].reset();
          location.reload();
        },
        error:function (error){
          console.log(error)
          alert("data not saved");
        }

      });
    });
  </script>
  <script type="text/javascript">
  function deleteStudent(id)
  {
      if(confirm("Do you realy want to delete this record"))
      {
        $.ajax({
          url:'/students/'+id,
          type:"DELETE",
          dataType:'json',
          // data:$('#sid').serialize(),
          data:{

            _token : $("input[name=_token]").val()
          },
          success:function(response){
            $("#sid"+id.remove);
            location.reload();
          }
        });
      }
  }
</script>

  </body>
</html>
