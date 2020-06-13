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
                <div class="row gap-y text-center">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <div class="float-right">
                            <a href="javascript:void(0);" onclick="saveContent()" class="mr-5">
                                <i class="fa fa-save"></i> Save
                            </a>
                            
                            <a href="javascript:void(0);" onclick="saveContent()" class="mr-5">
                                <i class="fa fa-paper-plane"></i> Send to Mail
                            </a>
                            
                            <a href="{{ url('document/index') }}" class="mr-5">
                                <i class="fa fa-file"></i> My Documents
                            </a>
                        </div>
                    </div>

                    <div class="col-md-12 form-group">
                        <input type="text" id="subject" placeholder="Type a subject..." class="form-control" name="">
                    </div>
                    <div class="col-md-12">
                        <div data-editable data-name="main-content" id="writable">
                            <blockquote>
                                Project Title
                            </blockquote>
                            <p>Ekpoto Liberty</p>
                        </div>
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
        window.addEventListener('load', function() {
            new FroalaEditor('#writable', {toolbarInline: false});
        });

        var current_doc_id = $("#document_id").val();
        // var current_doc_id = localStorage.setItem('document_id', results.data.id) || "";

        if(current_doc_id !== ""){
            // read contents
            readContent(current_doc_id).then(response => {
                if(response !== null){
                    $("#document_id").val(response.id);
                    document.getElementById('writable').innerHTML = response.body;
                }
            }).catch(err => console.log(err));
        }

        function saveContent() {
            var _token      = document.getElementById('token').value;
            var document_id = current_doc_id;
            var subject     = document.getElementById('subject').value;
            var writable    = document.getElementById('writable').innerHTML;
            

            var query = {document_id, subject, writable, _token}

            fetch(`{{ url('document/save') }}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(query)
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                if(results.status == "success"){
                    $("#document_id").val(results.data.id);
                    current_doc_id = results.data.id;
                    // localStorage.setItem('document_id', results.data.id);
                    alertify.message(results.message);
                }else{
                    alertify.error(results.message);
                }
            }).catch(err => {
                console.log(err);
            })
        }

        function readContent(document_id) {
            return new Promise((resolve, reject) => {
                fetch(`{{ url('document/read/one') }}/${document_id}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    }
                }).then(r => {
                    return r.json();
                }).then(results => {
                    console.log(results);
                    resolve(results);
                }).catch(err => {
                    console.log(err);
                    reject(results);
                });
            });
        }
    </script>
@endsection

