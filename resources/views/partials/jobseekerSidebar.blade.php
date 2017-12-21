
<p class="advice" align="center">Complete Your Profile To Get Recommended Jobs. Let The Recruiter Find You</p>
<div class="col-sm-4 col-md-3 sidebar" class="sidebar">
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
        <a href="{{route('jobseekerCertification.list')}}" class="list-group-item list-group-item-warning {{ Request::is('jobseekerProfile/certificate/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-certificate"></i> Certification
        </a>
        <a href="{{route('jobseekerJobPreference.show')}}" class="list-group-item list-group-item-warning {{ Request::is('jobseekerProfile/jobPreference/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-heart"></i> Job Preference
        </a>
        <a href="{{route('jobseekerTeam.list')}}" class="list-group-item list-group-item-warning {{ Request::is('jobseekerProfile/team/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-thumbs-up"></i>
            Teams
        </a>
        <a href="{{route('jobseekerExperience.list')}}" class="list-group-item list-group-item-warning {{ Request::is('jobseekerProfile/experience/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-star-empty"></i> Work Experience
        </a>
        <a href="{{route('jobseeker.priorityValue')}}" class="list-group-item list-group-item-warning {{ Request::is('jobseekerProfile/priorityValue/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-arrow-up"></i> Recommendation Priority
        </a>
        <a href="{{route('recommendedJobs.show')}}" class="list-group-item list-group-item-warning {{ Request::is('jobseekerProfile/recommendation/*') ? "active" : ""}}">
            <i class="glyphicon glyphicon-folder-open"></i> Recommended Jobs
        </a>
        {{--<a href="#" class="list-group-item list-group-item-warning">--}}
            {{--<i class="glyphicon glyphicon-arrow-left"></i> Invited Jobs <span class="badge">14</span>--}}
        {{--</a>--}}
        {{--<a href="#" class="list-group-item list-group-item-warning">--}}
            {{--<i class="glyphicon glyphicon-arrow-right"></i> Applied Jobs <span class="badge">14</span>--}}
        {{--</a>--}}
    </div>
</div>