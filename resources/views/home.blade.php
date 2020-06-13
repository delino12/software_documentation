@extends('layouts.main')

@section('title')
    Dashboard 
@endsection

@section('contents')
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
                            {{-- <a href="{{ url('document/create') }}" class="mr-5">
                                <i class="fa fa-pencil"></i> Write New
                            </a> --}}
                            <a href="{{ url('document/index') }}" class="mr-5">
                                <i class="fa fa-file"></i> My Documents
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- /.main-content -->
@endsection

@section('scripts')
    
@endsection

