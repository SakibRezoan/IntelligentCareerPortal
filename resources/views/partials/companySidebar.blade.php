<p class="advice" align="center">Post A Job And View Recommended Candidates</p>
<div class="col-sm-4 col-md-3 sidebar" class="sidebar">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <br>
    <div class="list-group">
        <a href="{{route('home')}}" class="list-group-item list-group-item-warning {{ Request::is('company/home') ? "active" : ""}}">
            <i class="glyphicon glyphicon-home"></i> Company Information
        </a>
        <a href="{{route('jobs.view')}}" class="list-group-item list-group-item-warning {{ Request::is('company/jobs/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-list-alt"></i> Jobs
        </a>
        <a href="{{route('company.requestForVerification')}}" class="list-group-item list-group-item-warning {{ Request::is('company/requestForVerification') ? "active" : ""}}">
            <i class="glyphicon glyphicon-hand-right"></i> Request for Verification
        </a>
        <a href="{{route('company.priorityValue')}}" class="list-group-item list-group-item-warning {{ Request::is('company/priorityValue/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-arrow-up"></i> Recommendation Priority
        </a>
        {{--<a href="#" class="list-group-item list-group-item-warning">--}}
            {{--<i class="glyphicon glyphicon-arrow-right"></i> Invited Candidates <span class="badge">14</span>--}}
        {{--</a>--}}
        {{--<a href="#" class="list-group-item list-group-item-warning">--}}
            {{--<i class="glyphicon glyphicon-arrow-left"></i> Applied Candidates <span class="badge">14</span>--}}
        {{--</a>--}}
        <a href="{{route('recommendedCandidates.show')}}" class="list-group-item list-group-item-warning {{ Request::is('company/recommendation/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-folder-open"></i> Recommended Candidates
        </a>
    </div>
</div>