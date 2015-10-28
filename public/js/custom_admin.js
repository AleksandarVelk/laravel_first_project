

$(document).ready(function(){
  $('.btn-success').click(function(){            
    $.ajax({
      url: 'admin/addNewTab',
      type: "post",
      data: {'newtab':$('input[name=newtab]').val(), '_token': $('input[name=_token]').val()},
      success: function(data){
     

        var newTab='<div class="row"> <div class="col-lg-10 col-sm-2"> <a href="#joinus6" class="list-group-item dropdown" data-toggle="collapse" data-parent="#MainMenu" onclick="activate(this)">'+data.success+'</a> <div class="collapse" id="joinus6"> <div class="list-group-item submenustab"> <a href="#myModal" data-toggle="modal">Launch Demo Modal</a> <span style="float:right;"> <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button><p></p> </span> </div> </div> </div> <div class="edit_del_tools"> <div class="col-lg-2 col-sm-2 row"> <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit"><button class="btn btn-primary btn-xs pull-left" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p> <p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete"><button class="btn btn-danger btn-xs pull-left" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p> </div> </div> </div>';
      
        $("#MainMenu").prepend(newTab);
      }
    });      
  });
  
    $('#menutabID').click(function(){ 
    var id = $(this).attr('id');           
    $.ajax({
       url: '/admin/deleteTab/' + id,
      type: 'DELETE',
      dataType: "JSON",
      data: {"_token": "{{ csrf_token() }}"},
      success: function(){
     
         console.log("it Work");
        
      }
    });      
  });
  
});
