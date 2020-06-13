@extends('layouts.main')

@section('title')
    Software Documentation 
@endsection

@section('contents')
    <!-- Main Content -->
    <main class="main-content">
      <div class="container">
        <div class="row">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Content
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <div class="col-md-12 col-xl-12 ml-md-auto py-8">
            <article>
              <h1>
                All Projects

                <a href="javascript:void(0);" onclick="addNewProject()" class="btn btn-primary float-right">
                    New
                </a>
              </h1>
              <hr />
            </article>

            {{-- <table class="table border-none">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table> --}}
            <div class="card">
                <div class="card-body">
                    <b>TITLE:</b> MESL Officemate 

                    <a href="javascript:void(0);" onclick="viewMoreInformation" class="btn btn-link float-right">
                        Update Documentation
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <b>TITLE:</b> Marathon Timsmate 

                    <a href="javascript:void(0);" onclick="viewMoreInformation" class="btn btn-link float-right">
                        Update Documentation
                    </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- /.main-content -->

@endsection

@section('scripts')
    <script type="text/javascript">
        
    </script>
@endsection

