@extends('back-office.layout.main')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"> Ajouter un article </h4> </div>
       
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <!-- Left sidebar -->
            <div class="col-md-12">
                @if (Session::has('sucess'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('sucess')}}
                </div>
                @endif
                <div class="white-box">
                    <div class="row">
                        
                        <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                            <h3 class="box-title">Ajouter un article </h3>
                            <form action="article/add" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                          
                            <div class="form-group">
                                <textarea class="textarea_editor form-control" name="description" rows="15" placeholder="Enter text ..."></textarea>
                            </div>
                            <h4><i class="ti-link"></i> Attachment</h4>
                            <div class="dropzone" style="height:300px">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                            <button class="btn btn-default"><i class="fa fa-times"></i>Supprimer</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- .right-sidebar -->
      
        <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2021 Copyright </footer>
</div>
<!-- /#page-wrapper -->
</div>
@endsection