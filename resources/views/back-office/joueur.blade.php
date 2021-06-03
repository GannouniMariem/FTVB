@extends('back-office.layout.main')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Gestion des joueurs </h4> 
            </div>

              
             <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
                    
                        <div class="modal-dialog">
                        
                            <div class="modal-content">
                                <div class="modal-header">
                                 
                                  </div>
                                  <form action="joueur/add" method="POST">
                                    @csrf
                                        <div class="modal-body">
                                            
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Nom</label>
                                                    <input type="text" class="form-control" name="nom" id="recipient-name"> 
                                                    @error('nom')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Prénom</label>
                                                    <textarea class="form-control" id="message-text" name="prenom"></textarea>
                                                    @error('prenom')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Numéro de pull</label>
                                                    <textarea class="form-control" id="message-text" name="numPull"></textarea>
                                                    @error('numPull')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Taille</label>
                                                    <textarea class="form-control" id="message-text" name="taille"></textarea>
                                                    @error('taille')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Poids</label>
                                                    <textarea class="form-control" id="message-text" name="poids"></textarea>
                                                    @error('poids')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Buts</label>
                                                    <textarea class="form-control" id="message-text" name="buts"></textarea>
                                                    @error('buts')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Post</label>
                                                    <textarea class="form-control" id="message-text" name="post"></textarea>
                                                    @error('post')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-danger waves-effect waves-light">Ajouter</button>
                                        </div>
                            </form>

                            </div>
                        </div>
                         </div>
                     <button type="button" class="btn btn-success " alt="default" data-toggle="modal" data-target="#responsive-modal" > Ajouter un joueur </button> 
                   </td>
                </div>
            
            <!-- /.col-lg-12 -->
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
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Nom</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Prénom</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr title="Rotten Tomato Rating">Numéro de pull</abbr></th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Taille </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Poids</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Buts</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Post</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($joueurs as $joueur)
                            <tr>
                                <td class="id" style="visibility: hidden"> {{$joueur->id}}</td>
                                <td class="title nom"><a href="javascript:void(0)"> </a>{{$joueur->nom}}</td>
                                <td class="prenom"> {{$joueur->prenom}}</td>
                                <td class="numPull">{{$joueur->numPull}}</td>
                                <td class="taille"> {{$joueur->taille}}</td>
                                <td class="poids"> {{$joueur->poids}}</td>
                                <td class="buts"> {{$joueur->buts}}</td>        
                                <td class="post">{{$joueur->post}}</td>
                                
                                <td>
                                    <div class="col-md-4">
                                        <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header"></div>
                                                    <form action="joueur/update" method="POST">
                                                        @csrf
                                                            <div class="modal-body">
                                                            
                                                                    <input type="hidden" id="id" name="id" class="form-control"  > 

                                                                    <div class="form-group">
                                                                        <label for="nom" class="control-label">Nom</label>
                                                                        <input type="text" class="form-control" id="nom" name="nom" value="" > 
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="prenom" class="control-label">Prénom</label>
                                                                        <textarea class="form-control" id="prenom" name="prenom"  value=""></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="numPull" class="control-label">Numéro de pull</label>
                                                                        <textarea class="form-control" id="numPull" name="numPull"  value=""></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="taille" class="control-label">Taille</label>
                                                                        <textarea class="form-control" id="taille" name="taille"  value=""></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="poids" class="control-label">Poids</label>
                                                                        <textarea class="form-control" id="poids" name="poids"  value=""></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="buts" class="control-label">Buts</label>
                                                                        <textarea class="form-control" id="buts" name="buts"  value=""></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="post" class="control-label" >Post</label>
                                                                        <textarea class="form-control" id="post" name="post" value=""></textarea>
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
                                     <a class="btn btn-success joueurEdit" alt="default" data-toggle="modal" data-target="#editModal" > Modifier </a> 
                                </td>
                                <td>
                                    <a href="{{url('admin/joueur/delete/'.$joueur->id)}}" class="btn btn-block btn-primary">Supprimer</a> 
                                </td>   
                            </tr>
                            @endforeach
                            
                        </div>
                    </div>  
                                    
                      
                        </tbody>
                    </table>
                </div>
            </div>

    <script>
        // select edit joueur

        $(document).on('click','.joueurEdit',function(){
            var _this = $(this).parents('tr');
            $('#id').val(_this.find('.id').text());
            $('#nom').val(_this.find('.nom').text());
            $('#prenom').val(_this.find('.prenom').text());
            $('#numPull').val(_this.find('.numPull').text());
            $('#taille').val(_this.find('.taille').text());
            $('#poids').val(_this.find('.poids').text());
            $('#buts').val(_this.find('.buts').text());
            $('#post').val(_this.find('.post').text());
        });
    </script>
@endsection