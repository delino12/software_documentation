@extends('layouts.main')

@section('title')
    Software Documentation 
@endsection

@section('contents')
    <section class="section">
        <div class="container-sm">
            <form action="{{ route('process_login') }}" method="POST" data-form="mailer">
                {{-- <div class="alert alert-success d-on-success">
                    We received your message and will contact you back soon.
                </div> --}}

                <div class="form-group">
                  <label>Email Address</label>
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="example@cavidel.com">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control form-control-lg" type="password" name="password" placeholder="password">
                </div>
                <div>
                  <button class="btn btn-lg btn-primary" type="submit">Log in</button>
                </div>
            </form>
        </div>
    </section>

@endsection

@section('scripts')
    <script type="text/javascript">
        
    </script>
@endsection

