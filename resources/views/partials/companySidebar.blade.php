<marquee  behavior="alternate"><span>Post A Job And View Recommended Candidates.</span></marquee>
<div class="col-sm-4 col-md-3 sidebar" class="sidebar">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <br>
    <div class="list-group">
        <a href="{{route('home')}}" class="list-group-item list-group-item-warning {{ Request::is('company/home') ? "active" : ""}}">
            <i class="glyphicon glyphicon-user"></i> Company Information
        </a>
        <a href="{{route('jobs.view')}}" class="list-group-item list-group-item-warning {{ Request::is('company/jobs/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-education"></i> Jobs
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="glyphicon glyphicon-certificate"></i> Advance Candidate Search
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="glyphicon glyphicon-heart"></i> Request for Verification
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="glyphicon glyphicon-thumbs-up"></i>
            Teams
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="glyphicon glyphicon-star-empty"></i> Work Experience
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="fa fa-folder-open-o"></i> Recommended Candidates <span class="badge">14</span>
        </a>
    </div>
</div>