@extends('layouts.main')

@section('title')
    Software Documentation 
@endsection

@section('contents')
    <input type="hidden" id="document_id" name="">
    <!-- Main Content -->
    <main class="main-content">
        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Explore
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <section class="section py-9">
            <div class="container">
                <div class="row gap-y">
                    <div class="col-md-12">
                        <div class="float-right">
                            <a href="{{ url('document/create') }}" class="mr-5">
                                <i class="fa fa-pencil"></i> Write New
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody id="load-all-documentation"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- /.main-content -->
@endsection

@section('scripts')
    {{-- <script src="{{ asset('js/site.js') }}"></script> --}}
    <script src="{{ asset('js/prism.js') }}"></script>
    <script type="text/javascript">
        loadAllDocuments();

        function loadAllDocuments() {
            fetch(`{{ url('document/read') }}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                }
            }).then(r => {
                return r.json();
            }).then(results => {
                // console.log(results);
                $("#load-all-documentation").html("");
                var sn = 0;
                $.each(results, function(index, val) {
                    sn++;
                    $("#load-all-documentation").append(`
                        <tr>
                            <td>${sn}</td>
                            <td>${val.title}</td>
                            <td>${val.created_at}</td>
                            <td>
                                <a href="javascript:void(0);" onclick="editDocument(${val.id})" class="btn btn-default">
                                    <i class="fa fa-edit text-primary"></i>
                                </a>
                                <a href="{{ url('document/show') }}/${val.id}/${val.slug}" onclick="" class="btn btn-default">
                                    <i class="fa fa-eye text-success"></i>
                                </a>
                                <a href="javascript:void(0);" onclick="deleteDocument(${val.id})" class="btn btn-default">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    `);
                });

                $(".table").DataTable();
            }).catch(err => {
                console.log(err);
            })
        }

        function deleteDocument(document_id) {
            // body...
            fetch(`{{ url('document/delete') }}?document_id=${document_id}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                }
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                if(results.status == "success"){
                    alertify.message(results.message);
                    $('.table').DataTable().clear().destroy();
                    loadAllDocuments();
                }else{
                    alertify.error(results.message);
                }
            }).catch(err => {
                console.log(err);
            })
        }
    </script>
@endsection

