@extends('layouts.main')

@section('title')
    Software Documentation 
@endsection

@section('contents')
    <!-- Main Content -->
    <main class="main-content">
      <div class="container-fluid pl-5 pr-5">
        <div class="row">

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Content
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <div class="col-md-12 col-xl-12 ml-md-auto py-8">
            <article>
              {!! $documentation->body !!}
            </article>
          </div>
        </div>
      </div>
    </main><!-- /.main-content -->

@endsection

@section('scripts')
    <script type="text/javascript">
        
    </script>
@endsection

