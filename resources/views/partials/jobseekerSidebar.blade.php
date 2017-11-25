
<marquee  behavior="alternate"><span>Complete Your Profile To Get Recommended Jobs. Let The Recruiter Find You....</span></marquee>
<div class="col-sm-4 col-md-3 sidebar" id="jobseekerSidebar">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <br>
    <div class="list-group">
        <a href="{{route('home')}}" class="list-group-item list-group-item-warning {{ Request::is('home') ?"active" : Request::is('jobseekerProfile/generalinfo/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-user"></i> General Information
        </a>
        <a href="{{route('jobseekerEducation.list')}}" class="list-group-item list-group-item-warning {{ Request::is('jobseekerProfile/education/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-education"></i> Education
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="glyphicon glyphicon-certificate"></i> Certification
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="glyphicon glyphicon-star-empty"></i> Work Experience
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="glyphicon glyphicon-thumbs-up"></i>
            Teams
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="glyphicon glyphicon-heart"></i> Job Preference
        </a>
        <a href="#" class="list-group-item list-group-item-warning">
            <i class="fa fa-folder-open-o"></i> Recommended Jobs <span class="badge">14</span>
        </a>
    </div>
</div>