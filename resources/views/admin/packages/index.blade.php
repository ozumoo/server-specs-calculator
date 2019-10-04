@extends('admin._master')
    @section('content')
    
    <div class="page">
        <div class="page-content">
          <!-- Panel Table Add Row -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Packages</h3>

            </header>
            <div class="panel-body">
              <div class="row">
                <a href={{action('Admin\packageController@create')}} />
                    <button class="btn btn-primary">
                        Add Package</button>
                </a>
                <br><br>
              </div>
              <table  id="datatable" class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
                <thead>
                    <tr>
                        <th>order</th>
                        <th>Vcpu</th>
                        <th>ram</th>
                        <th>disk</th>
                        <th>linux price/month</th>
                        <th>windows price/month</th>
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
            window.location = 'deletePackage/' + row_id;
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
                    ajax: '{!! route('packageDT') !!}',
                    columns: [
                        { data: 'order', name: 'order' },
                        { data: 'vCpu', name: 'vCpu' },
                        { data: 'ram', name: 'ram' },
                        { data: 'disk', name: 'disk' },
                        { data: 'linux_price_per_month', name: 'linux_price_per_month' },
                        { data: 'windows_price_per_month', name: 'windows_price_per_month' },
                        { data: 'actions', name: 'actions',searchable:false }
                    ]
            });
        });
    </script>
    @endpush