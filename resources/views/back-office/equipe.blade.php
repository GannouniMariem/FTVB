@extends('back-office.layout.main')

@section('content')
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row bg-title">
       <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
           <h4 class="page-title">Gestion des équipes </h4> </div>
        <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
               
                   <div class="modal-dialog">
                   
                       <div class="modal-content">
                           <div class="modal-header">
                            
                             </div>
                             <form action="equipe/add" method="POST">
                                 @csrf
                                <div class="modal-body">
                                    
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Nom d'équipe </label>
                                            <input type="text" class="form-control" name="nom" id="recipient-name"> </div>
                                            @error('nom')
                                            <small class="font-text text-danger">{{$message}}</small>
                                            @enderror
                                            
                                            <div class="form-group">
                                            <label for="message-text" class="control-label">Type </label>
                                            <textarea class="form-control" name="type" id="message-text"></textarea>
                                            @error('type')
                                            <small class="font-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                            <div class="form-group">
                                            <label for="message-text" class="control-label"> Classement</label>
                                            <textarea class="form-control" name="classement" id="message-text"></textarea>
                                            @error('classement')
                                            <small class="font-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Score</label>
                                            <textarea class="form-control" name="score" id="message-text"></textarea>
                                            @error('score')
                                            <small class="font-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Nombre des points</label>
                                            <textarea class="form-control" name="nbPoint" id="message-text"></textarea>
                                            @error('nbPoint')
                                            <small class="font-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Staff</label>
                                            <textarea class="form-control" name="staff" id="message-text"></textarea>
                                            @error('staff')
                                            <small class="font-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Next match </label>
                                            <textarea class="form-control" name="Nextmatch" id="message-text"></textarea>
                                            @error('Nextmatch')
                                            <small class="font-text text-danger">{{$message}}</small>
                                            @enderror
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
                <button type="button" class="btn btn-success " alt="default" data-toggle="modal" data-target="#responsive-modal" > Ajouter une équipe </button> 
              </td>
           </div>
   <!-- /row -->
   <div class="row">
       <div class="col-lg-12">
            @if (Session::has('sucess'))
            <div class="alert alert-success" role="alert">
                {{Session::get('sucess')}}
            </div>
            @endif

           <div class="white-box">
            
               <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                   <thead>
                       <tr>
                           <th style="visibility: hidden"></th>
                           <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Nom d'équipe</th>
                           <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Type</th>
                           <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Classement</th>
                           <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Score</th>
                           <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr title="Rotten Tomato Rating">Nombre des points</abbr></th>
                           <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Staff </th>
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Next match</th>
                       
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($equipes as $equipe )
                           
                      
                       <tr>
                           
                           <td style="visibility: hidden" class="id">{{$equipe->id}}</td>   
                           <td class="nom">{{$equipe->nom}}</td>
                           <td class="type">{{$equipe->type}}</td>
                           <td class="classement">{{$equipe->classement}}</td>
                           <td class="score">{{$equipe->score}}</td>
                            <td class="nbPoint">{{$equipe->nbPoint}}</td>
                            <td class="staff">{{$equipe->staff}}</td>   
                            <td class="Nextmatch">{{$equipe->Nextmatch}}</td>   
                            <td>
                                <div class="col-md-4">
                                    <div id="editModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
                                        <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header"></div>
                                                    <form action="equipe/update" method="POST">
                                                        @csrf
                                                         <div class="modal-body">
                                                       
                                                                    <input type="hidden" id="id" name="id" class="form-control"> 
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="nom" class="control-label">Nom d'équipe</label>
                                                                            <input type="text" class="form-control" id="nom" name="nom" value=""> 
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="type" class="control-label">Type</label>
                                                                        <textarea class="form-control" id="type" name="type"></textarea>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="classement" class="control-label">Classement</label>
                                                                        <textarea class="form-control" id="classement" name="classement"></textarea>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="score" class="control-label">Score</label>
                                                                        <textarea class="form-control" id="score" name="score"></textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="nbPoint" class="control-label">Nombre des points </label>
                                                                        <textarea class="form-control" id="nbPoint" name="nbPoint"></textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="staff" class="control-label">Staff</label>
                                                                        <textarea class="form-control" id="staff" name="staff"></textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Nextmatch" class="control-label">Next match </label>
                                                                        <textarea class="form-control" id="Nextmatch" name="Nextmatch"></textarea>
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
                                </div>
                            </td>
                                <td>
                                    <a  class="btn btn-success equipeEdit" alt="default" data-toggle="modal" data-target="#editModel" > Modifier </a> 
                                </td>
                     											
                                <td>
                                    <a href="{{url('admin/equipe/delete/'.$equipe->id)}}" class="btn btn-block btn-primary">Supprimer</a> 
                                </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
</div>

<script>
    // select edit equipe

    $(document).on('click','.equipeEdit',function(){
        var _this = $(this).parents('tr');
        $('#id').val(_this.find('.id').text());
        $('#nom').val(_this.find('.nom').text());
        $('#type').val(_this.find('.type').text());
        $('#classement').val(_this.find('.classement').text());
        $('#score').val(_this.find('.score').text());
        $('#nbPoint').val(_this.find('.nbPoint').text());
        $('#Nextmatch').val(_this.find('.Nextmatch').text());
        $('#staff').val(_this.find('.staff').text());
    });
</script>
   @endsection