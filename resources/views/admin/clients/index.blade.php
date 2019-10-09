@extends('admin._master')
    @section('content')
    
    <div class="page">
        <div class="page-content">
          <!-- Panel Table Add Row -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Clients</h3>

            </header>
            <div class="panel-body">
              <div class="row">
                <a href={{action('Admin\clientController@create')}} />
                    <button class="btn btn-primary">
                         Add Client</button>
                </a>
                <br><br>
              </div>
              <table  id="datatable" class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
              </table>
            </div>
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">Delete</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-warning-sign"></span> Are you sure
                        </div>
                        </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-success" onClick="confirmDelete()" ><span class="glyphicon glyphicon-ok-sign"></span>yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>NO</button>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
          </div>

                
    </div>


    @endsection
    @push('scripts')
    <script>
        var row_id;
        function deleteRow(id){
            console.log('clicked',id);
            row_id = id;
        }

        function confirmDelete(){
            console.log('clicked again',row_id);
            window.location = 'deleteClient/' + row_id;
        }
    
        var block_id;
        function blockRow(id){
            console.log('clicked',id);
            block_id = id;
        }

        function confirmBlock(){
            console.log('clicked again',block_id);
            window.location = 'blockClient/' + block_id;
        }
        

        $(function() {
            $('#datatable').DataTable({
                    select:{
                        style:     'os',
                        className: 'form-control input-sm Ezzat'
                    },
                    initComplete : function() {
                        // Search Style
                        $("input[type=search]").attr('class', 'form-control input-sm');
                        $("input[type=search]").attr('placeholder', 'Search');
                        // Show Entries Style
                        $("select[name=datatable_length]").attr('class', 'form-control input-sm');
                        $("select[name=datatable_length]").attr('id', 'ezzat');


                    },
                    processing: true,
                    pageLength: 25,
                    serverSide: true,
                    ajax: '{!! route('clientDT') !!}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'company_name', name: 'company_name' },
                        { data: 'email', name: 'email' },
                        { data: 'actions', name: 'actions',searchable:false }
                    ]
            });
        });
    </script>
    @endpush