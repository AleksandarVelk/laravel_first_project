@extends('admin.template_admin')

@section('admin_content')
<nav class="navbar navbar-s1 navbar-side" role="navigation">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="">Your Compay Logo</a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul id="side" class="nav navbar-nav side-nav">

      <li class="side-user">
        <img class="img-circle " alt="" src="http://s20.postimg.org/5gsu6gp31/yogi.jpg">
        <p class="welcome"><i class="fa fa-key"></i> Logged in as</p>
        <p class="name">Yogi Bear <i class="fa fa-sign-out"></i>
          </a>
        </p>
      </li>

      <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#catalog" data-toggle="collapse" data-parent="#side"> Catalog <i class="fa fa-caret-down"></i></a>
        <ul id="catalog" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle" data-target="#affliate" data-toggle="collapse">Affliate <i class="fa fa-caret-down"></i></a>
            <ul id="affliate" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#extension" data-toggle="collapse" data-parent="#side"> Extension <i class="fa fa-caret-down"></i></a>
        <ul id="extension" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Extension Installer</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle" data-target="#modules" data-toggle="collapse">Modules <i class="fa fa-caret-down"></i></a>
            <ul id="modules" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#sale" data-toggle="collapse" data-parent="#side"> Sale <i class="fa fa-caret-down"></i></a>
        <ul id="sale" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Extension Installer</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle sub-link" data-target="#customer" data-toggle="collapse">Customer <i class="fa fa-caret-down"></i></a>
            <ul id="customer" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#system" data-toggle="collapse" data-parent="#side"> System <i class="fa fa-caret-down"></i></a>
        <ul id="system" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Extension Installer</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle sub-link" data-target="#setting" data-toggle="collapse">Setting <i class="fa fa-caret-down"></i></a>
            <ul id="setting" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#reports" data-toggle="collapse" data-parent="#side"> Reports <i class="fa fa-caret-down"></i></a>
        <ul id="reports" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Extension Installer</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle sub-link" data-target="#report-sale" data-toggle="collapse">Sale <i class="fa fa-caret-down"></i></a>
            <ul id="report-sale" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Your Username<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class="dropdown-header">Store <i class="fa fa-shopping-cart"></i></li>

          <li><a href="" target="_blank">Your Demo Store</a></li>

          <li class="divider"></li>
          <li><a class="sublink" href="">Profile</a></li>
          <li><a class="sublink" href="">Settings</a></li>
          <li><a class="sublink" href="">logout</a></li>
        </ul>
      </li>
    </ul>

  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-lg-2 col-sm-2">
            
    </div>
    <div class="col-lg-10 col-sm-5">
        <div class="panel panel-default">
		   <div class="panel-heading">
		      Ureduvanwe na menito
		   </div>		  
			   <div class="container-fluid">
			   <div class="panel-heading addInputform">
			   		{!! Form::open(array('url'=>'admin/addNewTab', 'method'=>'POST', 'id'=>'myform')) !!}
					 
					  		
								
								<div class="col-xs-4">
									
								{!! Form::text('newtab','', array('id'=> '', 'class' => 'form-control', 'placeholder' => 'Внесете нов таб!')) !!}	
								</div>
								
								{!! Form::button('Login', array('class' => 'btn btn-success')) !!}
							
					    
					  
	
				    {!! Form::close() !!}
			   </div>
			   
			   </div>
	
		   <div class="container-fluid">
			   <div id="MainMenu">
			    <div class="list-group panel">

			    @foreach($elements as $element)
			    	<div class="row">
			    		<div class="col-lg-10 col-sm-2">
					        <a href="#joinus{{$element->id}}" class="list-group-item dropdown" data-toggle="collapse" data-parent="#MainMenu" onclick="activate(this)">{{$element->title}}</a>
				        <div class="collapse" id="joinus{{$element->id}}">
				            <div class="list-group-item submenustab">
				                <a href="#myModal"  data-toggle="modal">Launch Demo Modal</a>
							<span style="float:right;">
								
					   			<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
				        	</span>
				        	</div>
				        </div>
					    </div>
						    <div class="edit_del_tools">
						    	<div class="col-lg-2 col-sm-2 row" >
						    	<p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit"><button class="btn btn-primary btn-xs pull-left" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
						   		<p data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete"><button class="btn btn-danger btn-xs pull-left" id="menutabID" data-id="{{$element->id}}" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
						    </div>
					    </div>
					        
				    </div>
				@endforeach	

			        
			    </div>
			</div>
		</div>
		</div>
    </div>
    
  </div>
</div>

 <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>
                    <h4 class="modal-title">Uredi pod Kategorija</h4>
                </div>
                <div class="modal-body">                   	
				<form class="edit" name="contact">
					<label class="label" for="name">Naziv na pod</label><br>
					<input type="text" name="name" class="input-xlarge"><br>					
				</form>		
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                    <button type="button" class="btn btn-primary">Za~uvaj promeni</button>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="/js/custom_admin.js"></script>
<script type="text/javascript">
	window.activate = function(el) {    
    var current = document.querySelector('.active');
    if (current) {
        current.classList.remove('active');
    }
    el.classList.add('active');
}
</script>
@stop