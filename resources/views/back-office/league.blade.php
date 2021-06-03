@extends('back-office.layout.main')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Gestion des Leagues </h4> 
            </div>
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header"></div>
                                <form action="league/add" method="POST">
                                    @csrf
                                        <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Nom de league </label>
                                                    <input type="text" class="form-control" name="nom" id="recipient-name">
                                                    @error('nom')
                                                    <small class="font-text text-danger">{{$message}}</small>
                                                    @enderror 
                                                </div>

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
                                                    <label for="message-text" class="control-label">Résultat</label>
                                                    <textarea class="form-control" name="resultat" id="message-text"></textarea>
                                                    @error('classement')
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

                <button type="button" class="btn btn-success " alt="default" data-toggle="modal" data-target="#responsive-modal" > Ajouter une league </button> 
 
        </div>
    
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
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Nom de league </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Type</th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr title="Rotten Tomato Rating">Classement</abbr></th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Résultat </th>
            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leagues as $league )
                                    
                                <tr>
                                    <td class="title id" style="visibility: hidden">{{$league->id}}</td>
                                    <td class="nom">{{$league->nom}}</td>
                                    <td class="type">{{$league->type}}</td>
                                    <td class="classement">{{$league->classement}}</td>
                                    <td class="resultat">{{$league->resultat}}</td>
                                    <td>
                                        <div class="col-md-4">    
                                            <div id="editModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" >
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                            <div class="modal-header"></div>
                                                            <form action="league/update" method="POST">
                                                                @csrf

                                                                <div class="modal-body">
                                                                    
                                                                    <input type="hidden" id="id" name="id" class="form-control"> 

                                                                        <div class="form-group">
                                                                            <label for="nom" class="control-label">Nom de league</label>
                                                                            <input type="text" class="form-control" id="nom" name="nom" value=""> 
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="type" class="control-label">Type</label>
                                                                            <textarea class="form-control" id="type" name="type" value=""></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="classement" class="control-label">Classement</label>
                                                                            <textarea class="form-control" id="classement" name="classement" value=""></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="resultat" class="control-label">Résultat</label>
                                                                            <textarea class="form-control" id="resultat" name="resultat" value=""></textarea>
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
                                            
                                    <a  class="btn btn-success leagueEdit" alt="default" data-toggle="modal" data-target="#editModel"> Modifier </a> 
                                    </td>
                                            
                                    <td>
                                        <a  href="{{url('admin/league/delete/'.$league->id)}}" class="btn btn-block btn-primary">Supprimer</a> 
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
                // select edit leagues
            
                $(document).on('click','leagueEdit',function(){
                    var _this = $(this).parents('tr');
                    $('#id').val(_this.find('.id').text());
                    $('#nom').val(_this.find('.nom').text());
                    $('#type').val(_this.find('.type').text());
                    $('#classement').val(_this.find('.classement').text());
                    $('#resultat').val(_this.find('.resultat').text());
                    
                });
            </script>
@endsection