@extends('layouts.main')

@section('title')
    Software Documentation 
@endsection

@section('contents')
    <!-- Header -->
    <header class="header" style="background-image: linear-gradient(135deg, #f9f7ff 0%, #fff 50%, #f6f3ff 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Developer's Technical Support Center</h1>
                    <p class="lead mt-5 mb-8">Thinking about having an online documentation or support system for your startup? TheDocs have everythings you need to develop your own help center.</p>
                    <p><a class="btn btn-lg btn-round btn-primary" href="" target="_blank">Documentation</a></p>
                </div>

                <div class="col-lg-5 ml-auto d-none d-lg-block">
                    <img src="img/docs_bg.png" alt="img">
                </div>
            </div>
        </div>
    </header><!-- /.header -->


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

                    <div class="col-md-4">
                        <a class="card px-6 py-8 shadow-11 hover-shadow-9 text-default border" href="help/archive-1.html">
                            <p><i class="ti-book lead-7 text-primary"></i></p>
                            <h5 class="fw-500 my-4">Knowledge Base</h5>
                            <p class="mb-0">Get started using this template by reading the helpful articles.</p>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a class="card px-6 py-8 shadow-11 hover-shadow-9 text-default border" href="help/faq-1.html">
                            <p><i class="ti-help lead-7 text-primary"></i></p>
                            <h5 class="fw-500 my-4">FAQ</h5>
                            <p class="mb-0">Lots of questions have asked before and have answers here.</p>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a class="card px-6 py-8 shadow-11 hover-shadow-9 text-default border" href="docs/kb-introduction.html">
                            <p><i class="ti-agenda lead-7 text-primary"></i></p>
                            <h5 class="fw-500 my-4">Documentation</h5>
                            <p class="mb-0">Read our documentation to get start and browse the available resources.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- /.main-content -->
@endsection

@section('scripts')
    <script type="text/javascript">
        
    </script>
@endsection

