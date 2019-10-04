@extends('admin._master')
    @section('content')
    
    <div class="page">
        <div class="page-content">
          <!-- Panel Table Add Row -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Winners</h3>
            </header>
            <div class="panel-body">
              <div class="row">
              </div>
              <table  id="datatable" class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Answers Count</th>
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
                        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you     want to     delete this Record?
                        </div>
                        </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-success" onClick="confirmDelete()" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
          </div>
          <!-- End Panel Table Add Row -->
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
        

        $(function() {
            $('#datatable').DataTable({
                    select:{
                        style:     'os',
                        className: 'form-control input-sm Ezzat'
                    },
                    "oLanguage": {
                      "sSearch": "" //search
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
                    ajax: '{!! route('winnersDT') !!}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'phone', name: 'phone' },
                        { data: 'answers_count', name: 'answers_count', searchable:false },
                        { data: 'actions', name: 'actions',searchable:false }
                    ]
            });
        });
    </script>
    @endpush