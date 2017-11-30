@extends('main')

@section('title','Feature of Intelligent Career Portal')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Intelligent Career Portal</h1>
            <p style="text-align: justify">Intelligent Career Portal aims to facilitate the applicant to apply for the job online. It also
                facilitates the managerial department of an organization for an optimized and systematic employee
                recruitment process. This assures the recruiter and job candidate both will benefit by lessened time
                and cost to contract, enhance employee branding and applicant communication with less effort.
                The system also provides the recommendation for both jobseekers and the organizations, where
                the jobseekers can find the jobs relevant to their skills and experience as well as organizations can
                find the right candidate to fulfil staff requirements.<br>
                
                Participants on this project:
                <or>
                    <li>Administrator</li>
                    <li>Job Seeker</li>
                    <li>Company</li>
                </or>
                <br>
                Brief description of the modules:
                <br>
                <b>Administrator:</b> Administrator has the full authority over the website. S/he has the list of users
                and has the power to delete them. S/he can view all the company details too and has the authority
                to verify a company page.
                <br>
                <b>Job Seeker:</b> The jobseekers can see all the public jobs without registering himself but if s/he wants
                to use the service of the system then s/he must register to the system. After registration and email
                verification s/he will be directed to his/her profile. To get the recommended jobs, updation of
                profile is must for the jobseeker. The profile includes personal details, education details, skills
                information, experience, team s/he work with, job preference, certification, compensation, area of
                interest and so on. From this information a CV will be generated for each job seeker automatically.
                The job seeker can search for jobs and can apply for a particular job or can save it. If a job seeker
                is invited by any company, it will be appearing in his/her notification bar. If any company or
                recruiter send message to any job seeker, then s/he can view it and can replay to the message.
                <br>
                <b>Company:</b> A company or recruiter can register, view the CVs of candidates applied against posted
                jobs and can invite for selection interview or can save the CV. Company have the privilege to
                update a previous job. A job consists of information about required skills, experience, degree of a
                candidate as well as company details with salary range. A company can send message to any job
                seeker for his/her attention. For each current posted job some recommended job seeker profile will
                be suggested by the system.
                <br>
                Intelligent Career Portal is a common meeting ground for the job seeker and recruiter.
                Recommendation system with a live chat feature between job seeker and recruiter made the system
                unique from the other online recruitment systems available in Bangladesh.</p>
        </div>
    </div>
@endsection