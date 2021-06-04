@extends('back-office.layout.main')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
                    
                        <div class="modal-dialog">
                        
                            <div class="modal-content">
                                <div class="modal-header">
                                 
                                  </div>
                                  <form action="match/add" method="POST">
                                    @csrf
                                        <div class="modal-body">
                                        
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">équipe 1 </label>
                                                    <input type="text" class="form-control" name="equipe1" id="recipient-name"> </div>
                                                    @error('equipe1')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror

                                                    <div class="form-group">
                                                    <label for="message-text" class="control-label">équipe 2  </label>
                                                    <textarea class="form-control" name="equipe2" id="message-text"></textarea>
                                                    @error('equipe2')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror    
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label"> date </label>
                                                    <textarea class="form-control" name="date" id="message-text"></textarea>
                                                    @error('date')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror    
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Lieu</label>
                                                    <textarea class="form-control" name="lieu" id="message-text"></textarea>
                                                    @error('lieu')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Résultat</label>
                                                    <textarea class="form-control" name="resultat" id="message-text"></textarea>
                                                    @error('resultat')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-danger waves-effect waves-light">Ajouter </button>
                                        </div>
                                    </form>
                                    
                            </div>
                        </div>
                         </div>
                     <button type="button" class="btn btn-success " alt="default" data-toggle="modal" data-target="#responsive-modal" > Ajouter un match </button> 
                   </td>
 
        </div>
    
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
         <div class="table-responsive">
                    
            @if (Session::has('sucess'))
            <div class="alert alert-success" role="alert">
                {{Session::get('sucess')}}
            </div>
            @endif
      <table class="table">
        <thead>
          <tr>
            <th style="visibility: hidden"></th>
            <th>Equipe 1 </th>
            <th>Equipe 2 </th>
            <th>date</th>
            <th>lieu</th>
            <th>résultat </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($matchs as $match)
          <tr>
            <td class="id" style="visibility: hidden">{{$match->id}}</td>
            <td class="equipe1">{{$match->equipe1}}</td>
            <td class="equipe2">{{$match->equipe2}}</td>
            <td class="date">{{$match->date}}</td>
            <td class="lieu">{{$match->lieu}}</td>

            <td class="resultat"><span class="label label-danger">{{$match->resultat}}</span> </td>
             <td> 
              <div class="col-md-4">
               <td>
                    <div class="col-md-4">
                   
                        <div id="editModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
                    
                            <div class="modal-dialog">
                        
                            <div class="modal-content">
                                <div class="modal-header"></div>
                                <form action="match/update" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" id="id" name="id" class="form-control"  > 

                                        <div class="form-group">
                                            <label for="equipe1" class="control-label">équipe 1 </label>
                                            <input type="text" class="form-control" id="equipe1" name="equipe1" value=""> 
                                        </div>

                                        <div class="form-group">
                                            <label for="equipe2" class="control-label">équipe 2 </label>
                                            <textarea class="form-control" id="equipe2" name="equipe2" value=""></textarea>
                                        </div>

                                         <div class="form-group">
                                            <label for="date" cldateass="control-label">date </label>
                                            <textarea class="form-control" id="date" name="date"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="lieu" class="control-label">Lieu </label>
                                            <textarea class="form-control" id="lieu" name="lieu"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="resultat" class="control-label">Résultat </label>
                                            <textarea class="form-control" id="resultat" name="resultat"></textarea>
                                        </div>
                                        
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                         </div>
                     <a  class="btn btn-success matchEdit" alt="default" data-toggle="modal" data-target="#editModel" > Modifier </a> 
                   </td>
                </div>
            </div>
                                         <td>
                                         <a href="{{url('admin/match/delete/'.$match->id)}}" class="btn btn-block btn-primary">Supprimer</a> 
                                         </td>
                                         
                                         
        </tr>
          @endforeach
     
                  
               
        </tbody>
      </table>
    </div>
  </div>

  
  <script>
    // select edit joueur

    $(document).on('click','.matchEdit',function(){
        var _this = $(this).parents('tr');
        $('#id').val(_this.find('.id').text());
        $('#equipe1').val(_this.find('.equipe1').text());
        $('#equipe2').val(_this.find('.equipe2').text());
        $('#date').val(_this.find('.date').text());
        $('#lieu').val(_this.find('.lieu').text());
        $('#resultat').val(_this.find('.resultat').text());
       
    });
</script>
@endsection