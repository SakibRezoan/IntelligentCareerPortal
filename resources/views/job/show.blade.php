@extends('main')
@section('title', 'Company Dashboard')
@section('nav')
    @include('partials.company._nav')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3>HTML Ipsum Presents</h3>
                <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
                <h4>Header Level 4</h4>
                <ol>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                </ol>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
                </blockquote>
                <h5>Header Level 5</h5>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                </ul>
                <h4>Header Level 4</h4>
                <ol>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                </ol>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
                </blockquote>
                <h5>Header Level 5</h5>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                </ul>
                <div class="job-detail__apply-bottom"><a href="#" class="btn btn-primary">Apply for this job</a></div>
            </div>
            <div class="col-lg-3 col-lg-offset-1">
                <h4>About Google</h4>
                <p class="job-detail__company-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. </p>
                <p class="job-detail__social social social--outline"><a href="#" data-toggle="tooltip" data-placement="top" title="Website" class="link">

                        <i class="fa fa-link"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter" class="twitter">

                        <i class="fa fa-twitter"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="facebook"><i class="fa fa-facebook"></i> </a></p>
                <div class="job-detail__apply-top"><a href="#" class="btn btn-primary">Apply for this job</a></div>
            </div>
        </div>
    </div>
@endsection
