@extends('layouts.master')
@section('content')

<style type="text/css">
.student-photo{
	 height: 160px;
	 padding-left: 1px;
	 padding-right: 1px;
	 border: 1px solid #ccc;
	 background: #eee;
	 width: 140px;
	 margin: 0 auto;
}

.photo > input[type='file']{
	display: none;
}

.photo{
	width: 30px;
    height: 30px;
    border-radius: 100%;
}

.student-id{
	background-repeat: repeat-x;
	border-color: 5px;
	text-align: center;
	background: #eee;
	border-bottom: 1px solid #ccc;
}

.btn-browse{
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background: #eee;
    border: none;
    border-top: 1px solid #ccc;
}

fieldset{
	margin-top: 5px;
}

fieldset legend{
	display: block;
	width: 100%;
	padding: 0;
	font-size: 15px;
    line-height: inherit;
    color: #797979;
    border: 0;
    border-bottom: 1px solid #e5e5e5;
}
</style>

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-file-text-o"></i>Student Registration</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
			<li><i class="icon_document_alt"></i>Student</li>
			<li><i class="fa fa-file-text-o"></i>Create Student</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">


<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration: none;">Choose Academic</a>
			<a href="#" class="pull-right" id="show-class-info"><i class="fa fa-plus"></i></a>
		</div>
		<div id="collapse1" class="panel-collapse collapse in">
			<div class="panel-body academic-detail" style="width: 100%;"><p></p></div>
		</div>
	</div>
</div>


<div class="panel panel-default">

	<div class="panel-heading">
		<b><i class="fa fa-apple"></i>Student Information</b>
	</div>
	<div class="panel-body" style="padding-bottom: 4px;">
    
     <form action="{{ route('postStudentRegister') }}" method="POST" id="form-create-student">
       @csrf
      <input type="hidden" name="class_id" id="class_id">
      <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
     	<input type="hidden" name="dateregistered" id="dateregistered" value="{{ date('Y-m-d') }}">
     	<div class="row">
     	<div class="col-lg-9 col-md-9 col-sm-9">


     	<div>

     		<div class="col-md-4">
     			<div class="form-group">
     				<label for="first_name">First Name</label>
     				<input type="text" name="first_name" id="first_name" class="form-control" required>
     			</div>
     		</div>

     		<div class="col-md-4">
     			<div class="form-group">
     				<label for="last_name">Last Name</label>
     				<input type="text" name="last_name" id="last_name" class="form-control" required>
     			</div>
     		</div>

     		<div class="col-md-4">
     			<div class="form-group">
     				<fieldset>
     					<legend>Sex</legend>
     					<table style="width: 100%;margin-top: -14px;">
     						<tr style="border-bottom: 1px solid #ccc;">
     							<td>
     								<label>
     									<input type="radio" name="sex" id="sex" value="0" required>Male
     								</label>
     							</td>
     							<td>
     								<label>
     									<input type="radio" name="sex" id="sex" value="1" required>Female
     								</label>
     							</td>
     						</tr>
     					</table>
     				</fieldset>
     			</div>
     		</div>
     	</div>
     	
     	<div class="col-md-4">
     		<div class="form-group">
     			<label for="dob">Date Of Birth</label>
     			<div class="input-group">
     				<div class="input-group-addon">
     					<i class="fa fa-calendar studentdob"></i>
     				</div>
     				<input type="text" name="dob" id="dob" class="form-control" placeholder="yyyy/mm/dd" required>
     			</div>
     		</div>
     	</div>	


     	<div class="col-md-4">
     	  <div class="form-group">
     	  	<label for="national_card">National Card</label>
     	  	<input type="text" name="national_card" id="national_card" class="form-control">
     	  </div>
     	</div>



        <div class="col-md-4">
        	<div class="form-group">
        <fieldset>
        	<legend>Status</legend>
        	<table style="width: 100%;margin-top: -14px;">
        		<tr style="border-bottom: 1px solid #ccc;">
        			<td>
        				<label>
        					<input type="radio" name="status" id="status" value="0" required checked>Single
        				</label>
        			</td>
        			<td>
        				<label>
        					<input type="radio" name="status" id="status" value="1" required>Married
        				</label>
        			</td>
        		</tr>
        	</table>
        </fieldset>
      </div>
    </div> 


    <div class="col-md-4">
    	<div class="form-group">
    		<label for="nationality">Nationality</label>
    		<input type="text" name="nationality" id="nationality" class="form-control">
    	</div>
    </div> 


    <div class="col-md-4">
    	<div class="form-group">
    		<label for="rac">Rac</label>
    		<input type="text" name="rac" id="rac" class="form-control">
    	</div>
    </div>


    <div class="col-md-4">
    	<div class="form-group">
    		<label for="passport">Passport</label>
    		<input type="text" name="passport" id="passport" class="form-control">
    	</div>
    </div> 


    <div class="col-md-4">
    	<div class="form-group">
    		<label for="phone">Phone</label>
    		<input type="text" name="phone" id="phone" class="form-control">
    	</div>
    </div>

    <div class="col-md-8">
    	<div class="form-group">
    		<label for="email">Email</label>
    		<input type="text" name="email" id="email" class="form-control">
    	</div>
    </div>

</div>


    <div class="col-lg-3 col-md-3 col-sm-3">
    	<div class="form-group form-group-login">
    	  <table style="margin: 0 auto;">
    	  	<thead>
    	  		<tr class="info">
    	  			<th class="student-id">{{ sprintf('%05d',$student_id+1) }}</th>
    	  		</tr>
    	  	</thead>
    	  	<tbody>
    	  		<tr>
    	  			<td class="photo">
    	  				<img src="{{ asset('photo/example.png') }}" class="student-photo" id="showPhoto">
						<input type="file" name="photo" id="photo"  accept="image/x-png, image/jpg, image/jpeg, image/png">
    	  			</td>
    	  		</tr>
    	  		<tr>
    	  			<td style="text-align: center;background:#ddd;">
					<input type="button" name="browse_file" id="browse_file" class="form-control btn-browse" value="Browse">
					</td>
    	  		</tr>
    	  	</tbody>
    	  </table>
    	</div>
    </div>
    
    </div>
   </div>
   <br>

   <div class="panel-heading" style="margin-top: -20px">
		<b > <i class="fa fa-apple"></i> Address</b>
	</div>
	<div class="panel-body" style=" padding-bottom: 10px; padding-top: 0px">
		<div class="row">
		   <div class="col-md-3">
			   <div class="form-group">
					<label for="village">Village</label>
					<input type="text" name="village" id="village" class="form-control">
				</div>
			</div>

		  <div class="col-md-3">
			  <div class="form-group">
				<label for="commune">Commune</label>
				<input type="text" name="commune" id="commune" class="form-control">
				</div>
		   </div>

		   <div class="col-md-3">
				<div class="form-group" >
					<label for="district" >District</label>
					<input type="text" name="district" id="district" class="form-control">
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group" >
					<label for="province" >Province</label>
					<input type="text" name="province" id="province" class="form-control">
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group" >
					<label for="current_address" >Current Address</label>
					<input type="text" name="current_address" id="current_address" class="form-control">
				</div>
			</div>

		</div>
	</div>

		<div class="panel-footer">
			<button value="submit" class="btn btn-default btn-save">Save <i class="fa fa-save"></i></button>
		</div>
		</form>
     </div>
   </div>
</div>

@include('class.classPopup')
@endsection

@section('script')
<script type="text/javascript">
  var first = true;
  $(document).on('click','#class-edit',function(e){
      e.preventDefault();
      $('#class_id').val($(this).data('id'));
      $('.academic-detail p').text($(this).text());
      $('#choose-academic').modal('hide');
  });
	//========================
           $('#academic_id').on('change',function(e){
                showClassInfo();
           });
           //========================
           $('#level_id').on('change',function(e){
                showClassInfo();
           });
           //========================
           $('#shift_id').on('change',function(e){
                showClassInfo();
           });
           //========================
           $('#time_id').on('change',function(e){
                showClassInfo();
           });
           //========================
           $('#batch_id').on('change',function(e){
                showClassInfo();
           });
           //========================
           $('#group_id').on('change',function(e){
                showClassInfo();
           });
    //=====================
      	   $("#form-view-class #program_id").on('change',function(e){
      	   	    var program_id = $(this).val();
      	   	    var level = $('#level_id');
      	   	    $(level).empty();
      	   	    $.get("{{ route('showLevel') }}",{program_id:program_id},function(data){
                       
                       $.each(data,function(i,l){
                            $(level).append($('<option/>',{
                            value : l.level_id,
                            text  : l.level,
                       }));
                    });
                  showClassInfo();
      	   	    });
      	   });
    //============================
     $('#show-class-info').on('click',function(e){
         e.preventDefault();
         showClassInfo();
         $('#choose-academic').modal('show');
     });
     //==============================
      	   function showClassInfo()
      	   {
            if(first){
              var data = 
              {'academic_id':$('#academic_id').val()};
              first=false;
            }else{
              var data = $('#form-view-class').serialize();
            }
              

              //var academic_id = $('#academic_id').val();

      	   	   $.get("{{ route('showClassInformation') }}",data,function(data){
      	   	   	    
      	   	   	    $('#add-class-info').empty().append(data);
      	   	   	    $('th#hidden').addClass('hidden');
      	   	   	    $('td#hidden').addClass('hidden');
      	   	   	    MergeCommonRows($('#table-class-info'));
      	   	   });
      	   }
	//-------browse photo------------
	$('#browse_file').on('click',function(){
		$('#photo').click();

	});

	$('#photo').on('change',function(e){
		showFile(this,'#showPhoto');
	});
  //=================================
  $('#dob').datepicker({
        changeMonth:true,
        changeYear:true,
        dateFormat:'yy-mm-dd'
  });
	//=================================
	function showFile(fileInput,img,showName){
		if (fileInput.files[0]) {
              var reader = new FileReader();
			reader.onload= function (e){
				$(img).attr('src',e.target.result);

			}
			reader.readAsDataURL(fileInput.files[0]);
		}
		$(showName).text(fileInput.files[0].name)
	};
	//============================

      	   function MergeCommonRows(table) {
      	   	    var firstColumnBrakes = [];
      	   	    $.each(table.find('th'),function(i){
                var previous = null, cellToExtend = null, rowspan = 1;
                table.find("td:nth-child(" + i + ")").each(function(index, e){
                     var jthis = $(this), content = jthis.text();
                     if (previous == content && content !== "" && $.inArray(index, firstColumnBrakes) === -1) {
                     	jthis.addClass('hidden');
                     	cellToExtend.attr("rowspan", (rowspan = rowspan+1));
                     } else {
                     	if(i === 1) firstColumnBrakes.push(index);
                     	rowspan = 1;
                     	previous = content;
                     	cellToExtend = jthis;
                     }
                });
      	   	  });
      	    $('td.hidden').remove();
      	   }
</script>
@endsection