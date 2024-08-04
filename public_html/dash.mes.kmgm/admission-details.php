<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../includes/config.php');

    $id = $_GET['id'];
    $sql = "SELECT * from AdmissionApplications where ApplicationNumber=$id ";
    $query = $dbh->prepare($sql);
    $query->execute();
    $userArr = $query->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css_template/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css_template/admission.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">MSE College Kothamangalam Admission</h2>
                    <p>Fill all form field to go to next step</p>
                    <form id="msform" enctype="multipart/form-data" method="POST">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active " id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="exam"><strong>Exam</strong></li>
                            <li id="medal"><strong>Extracurricular activities</strong></li>
                            <li id="file-upload"><strong>File upload</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Account Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels" for="ApplicationNumber">Application number:</label>
                                <input type="text" class="form-control" id="ApplicationNumber" name="ApplicationNumber" value="<?php echo htmlentities($userArr[0]->ApplicationNumber); ?>">

                                <label class="fieldlabels" for="photo">Applicant Photo:</label>
                                <input class="form-control" type="file" id="photo" name="photo"
                                    accept="image/gif, image/png, image/jpg, image/jpeg">

                                <label class="fieldlabels" for="RegistrationNumber">Registration Number:</label>
                                <input type="number" class="form-control" id="RegistrationNumber"
                                    name="RegistrationNumber">

                                <label class="fieldlabels" for="UniversityCapNumber">University CapNumber:</label>
                                <input type="number" class="form-control" id="UniversityCapNumber"
                                    name="UniversityCapNumber">

                                <label class="fieldlabels" for="ProgramName">Programme Name:</label>
                                <input type="text" class="form-control" id="ProgramName" name="ProgramName">


                            </div> <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels" for="CandidateName">Candidate Name:</label>
                                <input type="text" class="form-control" id="CandidateName" name="CandidateName">

                                <label class="fieldlabels" for="ExpansionOfInitial">Expansion of initial:</label>
                                <input type="text" class="form-control" id="ExpansionOfInitial"
                                    name="ExpansionOfInitial">

                                <label class="fieldlabels" for="Sex">Sex:</label>
                                <select class="form-control" id="Sex" name="Sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>

                                <label class="fieldlabels" for="Married">Married:</label>
                                <select class="form-control" id="Married" name="Married">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>

                                <label class="fieldlabels" for="Age">Age:</label>
                                <input type="text" class="form-control" id="Age" name="Age">

                                <label class="fieldlabels" for="DateOfBirth">Date of Birth:</label>
                                <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth">

                                <label class="fieldlabels" for="Religion">Religion:</label>
                                <input type="text" class="form-control" id="Religion" name="Religion">

                                <label class="fieldlabels" for="Caste">Caste:</label>
                                <input type="text" class="form-control" id="Caste" name="Caste">

                                <label class="fieldlabels" for="Casttype">Caste type:</label>
                                <select class="form-control" id="Casttype" name="Casttype">
                                    <option value="male">SC</option>
                                    <option value="female">ST</option>
                                    <option value="other">OEC</option>
                                    <option value="other">OBC</option>
                                    <option value="other">FC</option>
                                    <option value="other">SEBC</option>
                                    <option value="other">MINORITY</option>
                                    <option value="other">OTHERS</option>
                                </select>

                                <label class="fieldlabels" for="Nationality">Nationality:</label>
                                <input type="text" class="form-control" id="Nationality" name="Nationality">

                                <label class="fieldlabels" for="State">State:</label>
                                <input type="text" class="form-control" id="State" name="State">

                                <label class="fieldlabels" for="District">District:</label>
                                <input type="text" class="form-control" id="District" name="District">

                                <label class="fieldlabels" for="Taluk">Taluk:</label>
                                <input type="text" class="form-control" id="Taluk" name="Taluk">

                                <label class="fieldlabels" for="Taluk">Panchayat:</label>
                                <input type="text" class="form-control" id="Panchayat" name="Panchayat">
                               
                                <label class="fieldlabels" for="Taluk">Village:</label>
                                <input type="text" class="form-control" id="Village" name="Village">


                                <label class="fieldlabels" for="Municipality">Municipality:</label>
                                <input type="text" class="form-control" id="Municipality" name="Municipality">

                                <label class="fieldlabels" for="Corporation">Corporation:</label>
                                <input type="text" class="form-control" id="Corporation" name="Corporation">

                                <label class="fieldlabels" for="FatherName">Father name:</label>
                                <input type="text" class="form-control" id="FatherName" name="FatherName">

                                <label class="fieldlabels" for="MotherName">Mother name:</label>
                                <input type="text" class="form-control" id="MotherName" name="MotherName">

                                <label class="fieldlabels" for="GuardianName">Guardian name:</label>
                                <input type="text" class="form-control" id="GuardianName" name="GuardianName">

                                <label class="fieldlabels" for="FatherOccupation">Occupation of father:</label>
                                <input type="text" class="form-control" id="FatherOccupation" name="FatherOccupation">

                                <label class="fieldlabels" for="MotherOccupation">Occupation of mother:</label>
                                <input type="text" class="form-control" id="MotherOccupation" name="MotherOccupation">

                                <label class="fieldlabels" for="GuardianName">Occupation of guardian:</label>
                                <input type="text" class="form-control" id="GuardianOccupation" name="GuardianOccupation">

                                <label class="fieldlabels" for="GuardianName">Annual income of father:</label>
                                <input type="text" class="form-control" id="fatherannual" name="fatherannual">

                                <label class="fieldlabels" for="GuardianName">Annual income of mother:</label>
                                <input type="text" class="form-control" id="motherannual" name="motherannual">

                                <label class="fieldlabels" for="GuardianName">Annual income of guadian:</label>
                                <input type="text" class="form-control" id="guadianannual" name="guadianannual">
                                

                                <label class="fieldlabels" for="PermanentAddress">Permanent address:</label>
                                <textarea class="form-control" id="PermanentAddress" name="PermanentAddress"></textarea>

                                <label class="fieldlabels" for="CommunicationAddress">Communication address:</label>
                                <textarea class="form-control" id="CommunicationAddress" name="CommunicationAddress"></textarea>

                                

                                <label class="fieldlabels" for="FatherPhoneNumber">Father's phone number:</label>
                                <input type="number" class="form-control" id="FatherPhoneNumber" name="FatherPhoneNumber">

                                <label class="fieldlabels" for="MotherPhoneNumber">Mother's phone number:</label>
                                <input type="number" class="form-control" id="MotherPhoneNumber" name="MotherPhoneNumber">

                                <label class="fieldlabels" for="ApplicantPhoneNumber">Applicant's phone number:</label>
                                <input type="number" class="form-control" id="ApplicantPhoneNumber" name="ApplicantPhoneNumber">

                                <label class="fieldlabels" for="GuardianPhoneNumber">Guardian's phone number:</label>
                                <input type="number" class="form-control" id="GuardianPhoneNumber" name="GuardianPhoneNumber">





                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 6</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels" for="Email">Email id:</label>
                                <input type="text" class="form-control" id="Email" name="Email">

                                <label class="fieldlabels" for="AadhaarNumber">Aadhaar number:</label>
                                <input type="text" class="form-control" id="AadhaarNumber" name="AadhaarNumber">

                                <label class="fieldlabels" for="ElectionID">Election id:</label>
                                <input type="text" class="form-control" id="ElectionID" name="ElectionID">

                                <label class="fieldlabels" for="AccountNumber">Bank account number:</label>
                                <input type="text" class="form-control" id="AccountNumber" name="AccountNumber">

                                <label class="fieldlabels" for="BankBranch">Branch name:</label>
                                <input type="text" class="form-control" id="BankBranch" name="BankBranch">

                                <label class="fieldlabels" for="BranchCode">Branch Code:</label>
                                <input type="text" class="form-control" id="BranchCode" name="BranchCode">

                                <label class="fieldlabels" for="MICR">MICR:</label>
                                <input type="text" class="form-control" id="MICR" name="MICR">

                                <label class="fieldlabels" for="IFSC">IFSC code:</label>
                                <input type="text" class="form-control" id="IFSC" name="IFSC">

                                <label class="fieldlabels" for="SSLCExamName">SSLC exam name:</label>
                                <input type="text" class="form-control" id="SSLCExamName" name="SSLCExamName">

                                <label class="fieldlabels" for="SSLCRegisterNumber">SSLC register number:</label>
                                <input type="text" class="form-control" id="SSLCRegisterNumber"
                                    name="SSLCRegisterNumber">
                                <label class="fieldlabels" for="SSLCRegisterNumber">SSLC month and year:</label>
                                <input type="text" class="form-control" id="monthandyear" name="monthandyear">

                                <label class="fieldlabels" for="SSLCSchoolName">SSLC school name:</label>
                                <input type="text" class="form-control" id="SSLCSchoolName" name="SSLCSchoolName">

                                <label class="fieldlabels" for="QualifyingExamName">Qualifying exam name:</label>
                                <input type="text" class="form-control" id="QualifyingExamName"
                                    name="QualifyingExamName">

                                <label class="fieldlabels" for="QualifyingExamUniversity">Qualifying university:</label>
                                <input type="text" class="form-control" id="QualifyingExamUniversity"
                                    name="QualifyingExamUniversity">

                                <label class="fieldlabels" for="QualifyingExamPassoutMonthYear">Exam passout:</label>
                                <input type="text" class="form-control" id="QualifyingExamPassoutMonthYear"
                                    name="QualifyingExamPassoutMonthYear">

                                <label class="fieldlabels" for="TCAndCCIssueDate">TC number:</label>
                                <input type="text" class="form-control" id="Tcnumber" name="Tcnumber">

                                <label class="fieldlabels" for="TCAndCCIssueDate">TC and CC issue date:</label>
                                <input type="text" class="form-control" id="TCAndCCIssueDate" name="TCAndCCIssueDate">

                                <label class="fieldlabels" for="TCAndCCInstitutionName">Tc issue institution
                                    name:</label>
                                <input type="text" class="form-control" id="TCAndCCInstitutionName"
                                    name="TCAndCCInstitutionName">

                                <label class="fieldlabels" for="TCandCCperiod">Period:</label>
                                <input type="text" class="form-control" id="TCandCCperiod" name="TCandCCperiod">

                                <label class="fieldlabels" for="ApplyingQuta">Applying Quta:</label>
                                <select class="form-control" id="ApplyingQuota" name="ApplyingQuota">
                                    <option value="Sports">Sports</option>
                                    <option value="Cultural">Cultural</option>
                                    <option value="PD">PD</option>
                                    <option value="Online">Online</option>
                                    <option value="Community">Community</option>
                                    <option value="Management">Management</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Genaral">Genaral</option>
                                    <option value="others">Others</option>
                                </select> 

                                <label class="fieldlabels" for="Category">Category:</label>
                                <input type="text" class="form-control" id="Category" name="Category">

                                <label class="fieldlabels" for="Reservation">Reservation:</label>
                                <input type="text" class="form-control" id="Reservation" name="Reservation">






                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Examination Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 6</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels" for="IndexMark">Index mark:</label>
                                <input type="number" class="form-control" id="IndexMark" name="IndexMark">

                                <label class="fieldlabels" for="RankPosition">Rank:</label>
                                <input type="number" class="form-control" id="RankPosition" name="RankPosition">

                                <label class="fieldlabels" for="QualifyingExamBoard">Qualifying exam board:</label>
                                <input type="text" class="form-control" id="QualifyingExamBoard"
                                    name="QualifyingExamBoard">

                                <label class="fieldlabels" for="QualifyingExamRegisterNumber">Qualifying exam register
                                    number:</label>
                                <input type="text" class="form-control" id="QualifyingExamRegisterNumber"
                                    name="QualifyingExamRegisterNumber">

                                <label class="fieldlabels" for="QualifyingExamPassingMonthYear">Year of passing:</label>
                                <input type="text" class="form-control" id="QualifyingExamPassingMonthYear"
                                    name="QualifyingExamPassingMonthYear">

                                <label class="fieldlabels" for="NumberofChances">Number of chances:</label>
                                <input type="text" class="form-control" id="NumberofChances" name="NumberofChances">

                                <label class="fieldlabels" for="Subject1Name">Subject 1:</label>
                                <input type="text" class="form-control" id="Subject1Name" name="Subject1Name">

                                <label class="fieldlabels" for="Subject1Grade">Grade 1:</label>
                                <input type="text" class="form-control" id="Subject1Grade" name="Subject1Grade">

                                <label class="fieldlabels" for="Subject1Mark">Mark 1:</label>
                                <input type="number" class="form-control" id="Subject1Mark" name="Subject1Mark">

                                <label class="fieldlabels" for="Subject2Name">Subject 2:</label>
                                <input type="text" class="form-control" id="Subject2Name" name="Subject2Name">

                                <label class="fieldlabels" for="Subject2Grade">Grade 2:</label>
                                <input type="text" class="form-control" id="Subject2Grade" name="Subject2Grade">

                                <label class="fieldlabels" for="Subject2Mark">Mark 2:</label>
                                <input type="number" class="form-control" id="Subject2Mark" name="Subject2Mark">

                                <label class="fieldlabels" for="Subject3Name">Subject 3:</label>
                                <input type="text" class="form-control" id="Subject3Name" name="Subject3Name">

                                <label class="fieldlabels" for="Subject3Grade">Grade 3:</label>
                                <input type="text" class="form-control" id="Subject3Grade" name="Subject3Grade">

                                <label class="fieldlabels" for="Subject3Mark">Mark 3:</label>
                                <input type="number" class="form-control" id="Subject3Mark" name="Subject3Mark">

                                <label class="fieldlabels" for="Subject4Name">Subject 4:</label>
                                <input type="text" class="form-control" id="Subject4Name" name="Subject4Name">

                                <label class="fieldlabels" for="Subject4Grade">Grade 4:</label>
                                <input type="text" class="form-control" id="Subject4Grade" name="Subject4Grade">

                                <label class="fieldlabels" for="Subject4Mark">Mark 4:</label>
                                <input type="number" class="form-control" id="Subject4Mark" name="Subject4Mark">

                                <label class="fieldlabels" for="Subject5Name">Subject 5:</label>
                                <input type="text" class="form-control" id="Subject5Name" name="Subject5Name">

                                <label class="fieldlabels" for="Subject5Grade">Grade 5:</label>
                                <input type="text" class="form-control" id="Subject5Grade" name="Subject5Grade">

                                <label class="fieldlabels" for="Subject5Mark">Mark 5:</label>
                                <input type="number" class="form-control" id="Subject5Mark" name="Subject5Mark">

                                <label class="fieldlabels" for="Subject6Name">Subject 6:</label>
                                <input type="text" class="form-control" id="Subject6Name" name="Subject6Name">

                                <label class="fieldlabels" for="Subject6Grade">Grade 6:</label>
                                <input type="text" class="form-control" id="Subject6Grade" name="Subject6Grade">

                                <label class="fieldlabels" for="Subject6Mark">Mark 6:</label>
                                <input type="number" class="form-control" id="Subject6Mark" name="Subject6Mark">

                                <label class="fieldlabels" for="TotalMarks">Total marks:</label>
                                <input type="number" class="form-control" id="TotalMarks" name="TotalMarks">

                                <label class="fieldlabels" for="TotalGrade">Total grade:</label>
                                <input type="text" class="form-control" id="TotalGrade" name="TotalGrade">

                                <label class="fieldlabels" for="Percentage">Percentage:</label>
                                <input type="number" class="form-control" id="Percentage" name="Percentage">




                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Extracurricular activities:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 5 - 6</h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Sports">Sports:</label>
                                    <input type="text" class="form-control" id="Sports" name="Sports">
                                </div>
                                <div class="form-group">
                                    <label for="SportsGrade">Sports grade:</label>
                                    <input type="text" class="form-control" id="SportsGrade" name="SportsGrade">
                                </div>
                                <div class="form-group">
                                    <label for="SportsCertificateDetails">Sports certificate:</label>
                                    <input type="file" class="form-control" id="SportsCertificateDetails"
                                        name="SportsCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="Games">Games:</label>
                                    <input type="text" class="form-control" id="Games" name="Games">
                                </div>
                                <div class="form-group">
                                    <label for="GamesGrade">Games grade:</label>
                                    <input type="text" class="form-control" id="GamesGrade" name="GamesGrade">
                                </div>
                                <div class="form-group">
                                    <label for="GamesCertificateDetails">Games certificate:</label>
                                    <input type="file" class="form-control" id="GamesCertificateDetails"
                                        name="GamesCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="Cultural">Cultural:</label>
                                    <input type="text" class="form-control" id="Cultural" name="Cultural">
                                </div>
                                <div class="form-group">
                                    <label for="CulturalGrade">Cultural Grade:</label>
                                    <input type="text" class="form-control" id="CulturalGrade" name="CulturalGrade">
                                </div>
                                <div class="form-group">
                                    <label for="CulturalCertificateDetails">Cultural certificate:</label>
                                    <input type="file" class="form-control" id="CulturalCertificateDetails"
                                        name="CulturalCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="NCC">NCC:</label>
                                    <input type="text" class="form-control" id="NCC" name="NCC">
                                </div>
                                <div class="form-group">
                                    <label for="NCCGrade">NCC grade:</label>
                                    <input type="text" class="form-control" id="NCCGrade" name="NCCGrade">
                                </div>
                                <div class="form-group">
                                    <label for="NCCCertificateDetails">NCC certificate:</label>
                                    <input type="file" class="form-control" id="NCCCertificateDetails"
                                        name="NCCCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="NSS">NSS:</label>
                                    <input type="text" class="form-control" id="NSS" name="NSS">
                                </div>
                                <div class="form-group">
                                    <label for="NSSGrade">NSS Grade:</label>
                                    <input type="text" class="form-control" id="NSSGrade" name="NSSGrade">
                                </div>
                                <div class="form-group">
                                    <label for="NSSCertificateDetails">NSS Certificate:</label>
                                    <input type="file" class="form-control" id="NSSCertificateDetails"
                                        name="NSSCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="ExService">Ex Service:</label>
                                    <input type="text" class="form-control" id="ExService" name="ExService">
                                </div>
                                <div class="form-group">
                                    <label for="ExServiceGrade">Ex Service Grade:</label>
                                    <input type="text" class="form-control" id="ExServiceGrade" name="ExServiceGrade">
                                </div>
                                <div class="form-group">
                                    <label for="ExServiceCertificateDetails">Ex Service certificate:</label>
                                    <input type="file" class="form-control" id="ExServiceCertificateDetails"
                                        name="ExServiceCertificateDetails">
                                </div>



                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Handicapped">Handicapped:</label>
                                    <input type="text" class="form-control" id="Handicapped" name="Handicapped">
                                </div>
                                <div class="form-group">
                                    <label for="HandicappedGrade">Handicapped Grade:</label>
                                    <input type="text" class="form-control" id="HandicappedGrade"
                                        name="HandicappedGrade">
                                </div>
                                <div class="form-group">
                                    <label for="HandicappedCertificateDetails">Handicapped Certificate:</label>
                                    <input type="file" class="form-control" id="HandicappedCertificateDetails"
                                        name="HandicappedCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicantDeclaration">Applicant declaration:</label>
                                    <input type="text" class="form-control" id="ApplicantDeclaration"
                                        name="ApplicantDeclaration">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicantSignaturePath">Signature of applicant:</label>
                                    <input type="file" class="form-control" id="ApplicantSignaturePath"
                                        name="ApplicantSignaturePath">
                                </div>
                                <div class="form-group">
                                    <label for="ParentSignaturePath">Signature of father:</label>
                                    <input type="file" class="form-control" id="ParentSignaturePath"
                                        name="ParentSignaturePath">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicationTime">Time:</label>
                                    <input type="text" class="form-control" id="ApplicationTime" name="ApplicationTime">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicationDate">Date:</label>
                                    <input type="text" class="form-control" id="ApplicationDate" name="ApplicationDate">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicationPlace">Place:</label>
                                    <input type="text" class="form-control" id="ApplicationPlace"
                                        name="ApplicationPlace">
                                </div>


                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Examination Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 6</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels" for="IndexMark">Index mark:</label>
                                <input type="number" class="form-control" id="IndexMark" name="IndexMark">

                                <label class="fieldlabels" for="RankPosition">Rank:</label>
                                <input type="number" class="form-control" id="RankPosition" name="RankPosition">

                                <label class="fieldlabels" for="QualifyingExamBoard">Qualifying exam board:</label>
                                <input type="text" class="form-control" id="QualifyingExamBoard"
                                    name="QualifyingExamBoard">

                                <label class="fieldlabels" for="QualifyingExamRegisterNumber">Qualifying exam register
                                    number:</label>
                                <input type="text" class="form-control" id="QualifyingExamRegisterNumber"
                                    name="QualifyingExamRegisterNumber">

                                <label class="fieldlabels" for="QualifyingExamPassingMonthYear">Exam passout:</label>
                                <input type="text" class="form-control" id="QualifyingExamPassingMonthYear"
                                    name="QualifyingExamPassingMonthYear">

                                <label class="fieldlabels" for="NumberofChances">Number of chances:</label>
                                <input type="text" class="form-control" id="NumberofChances" name="NumberofChances">

                                <label class="fieldlabels" for="Subject1Name">Subject 1:</label>
                                <input type="text" class="form-control" id="Subject1Name" name="Subject1Name">

                                <label class="fieldlabels" for="Subject1Grade">Grade 1:</label>
                                <input type="text" class="form-control" id="Subject1Grade" name="Subject1Grade">

                                <label class="fieldlabels" for="Subject1Mark">Mark 1:</label>
                                <input type="number" class="form-control" id="Subject1Mark" name="Subject1Mark">

                                <label class="fieldlabels" for="Subject2Name">Subject 2:</label>
                                <input type="text" class="form-control" id="Subject2Name" name="Subject2Name">

                                <label class="fieldlabels" for="Subject2Grade">Grade 2:</label>
                                <input type="text" class="form-control" id="Subject2Grade" name="Subject2Grade">

                                <label class="fieldlabels" for="Subject2Mark">Mark 2:</label>
                                <input type="number" class="form-control" id="Subject2Mark" name="Subject2Mark">

                                <label class="fieldlabels" for="Subject3Name">Subject 3:</label>
                                <input type="text" class="form-control" id="Subject3Name" name="Subject3Name">

                                <label class="fieldlabels" for="Subject3Grade">Grade 3:</label>
                                <input type="text" class="form-control" id="Subject3Grade" name="Subject3Grade">

                                <label class="fieldlabels" for="Subject3Mark">Mark 3:</label>
                                <input type="number" class="form-control" id="Subject3Mark" name="Subject3Mark">

                                <label class="fieldlabels" for="Subject4Name">Subject 4:</label>
                                <input type="text" class="form-control" id="Subject4Name" name="Subject4Name">

                                <label class="fieldlabels" for="Subject4Grade">Grade 4:</label>
                                <input type="text" class="form-control" id="Subject4Grade" name="Subject4Grade">

                                <label class="fieldlabels" for="Subject4Mark">Mark 4:</label>
                                <input type="number" class="form-control" id="Subject4Mark" name="Subject4Mark">

                                <label class="fieldlabels" for="Subject5Name">Subject 5:</label>
                                <input type="text" class="form-control" id="Subject5Name" name="Subject5Name">

                                <label class="fieldlabels" for="Subject5Grade">Grade 5:</label>
                                <input type="text" class="form-control" id="Subject5Grade" name="Subject5Grade">

                                <label class="fieldlabels" for="Subject5Mark">Mark 5:</label>
                                <input type="number" class="form-control" id="Subject5Mark" name="Subject5Mark">

                                <label class="fieldlabels" for="Subject6Name">Subject 6:</label>
                                <input type="text" class="form-control" id="Subject6Name" name="Subject6Name">

                                <label class="fieldlabels" for="Subject6Grade">Grade 6:</label>
                                <input type="text" class="form-control" id="Subject6Grade" name="Subject6Grade">

                                <label class="fieldlabels" for="Subject6Mark">Mark 6:</label>
                                <input type="number" class="form-control" id="Subject6Mark" name="Subject6Mark">

                                <label class="fieldlabels" for="TotalMarks">Total marks:</label>
                                <input type="number" class="form-control" id="TotalMarks" name="TotalMarks">

                                <label class="fieldlabels" for="TotalGrade">Total grade:</label>
                                <input type="text" class="form-control" id="TotalGrade" name="TotalGrade">

                                <label class="fieldlabels" for="Percentage">Percentage:</label>
                                <input type="number" class="form-control" id="Percentage" name="Percentage">




                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Extracurricular activities:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 5 - 6</h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Sports">Sports:</label>
                                    <input type="text" class="form-control" id="Sports" name="Sports">
                                </div>
                                <div class="form-group">
                                    <label for="SportsGrade">Sports grade:</label>
                                    <input type="text" class="form-control" id="SportsGrade" name="SportsGrade">
                                </div>
                                <div class="form-group">
                                    <label for="SportsCertificateDetails">Sports certificate:</label>
                                    <input type="text" class="form-control" id="SportsCertificateDetails"
                                        name="SportsCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="Games">Games:</label>
                                    <input type="text" class="form-control" id="Games" name="Games">
                                </div>
                                <div class="form-group">
                                    <label for="GamesGrade">Games grade:</label>
                                    <input type="text" class="form-control" id="GamesGrade" name="GamesGrade">
                                </div>
                                <div class="form-group">
                                    <label for="GamesCertificateDetails">Games certificate:</label>
                                    <input type="text" class="form-control" id="GamesCertificateDetails"
                                        name="GamesCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="Cultural">Cultural:</label>
                                    <input type="text" class="form-control" id="Cultural" name="Cultural">
                                </div>
                                <div class="form-group">
                                    <label for="CulturalGrade">Cultural Grade:</label>
                                    <input type="text" class="form-control" id="CulturalGrade" name="CulturalGrade">
                                </div>
                                <div class="form-group">
                                    <label for="CulturalCertificateDetails">Cultural certificate:</label>
                                    <input type="text" class="form-control" id="CulturalCertificateDetails"
                                        name="CulturalCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="NCC">NCC:</label>
                                    <input type="text" class="form-control" id="NCC" name="NCC">
                                </div>
                                <div class="form-group">
                                    <label for="NCCGrade">NCC grade:</label>
                                    <input type="text" class="form-control" id="NCCGrade" name="NCCGrade">
                                </div>
                                <div class="form-group">
                                    <label for="NCCCertificateDetails">NCC certificate:</label>
                                    <input type="text" class="form-control" id="NCCCertificateDetails"
                                        name="NCCCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="NSS">NSS:</label>
                                    <input type="text" class="form-control" id="NSS" name="NSS">
                                </div>
                                <div class="form-group">
                                    <label for="NSSGrade">NSS Grade:</label>
                                    <input type="text" class="form-control" id="NSSGrade" name="NSSGrade">
                                </div>
                                <div class="form-group">
                                    <label for="NSSCertificateDetails">NSS Certificate:</label>
                                    <input type="text" class="form-control" id="NSSCertificateDetails"
                                        name="NSSCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="ExService">Ex Service:</label>
                                    <input type="text" class="form-control" id="ExService" name="ExService">
                                </div>
                                <div class="form-group">
                                    <label for="ExServiceGrade">Ex Service Grade:</label>
                                    <input type="text" class="form-control" id="ExServiceGrade" name="ExServiceGrade">
                                </div>
                                <div class="form-group">
                                    <label for="ExServiceCertificateDetails">Ex Service certificate:</label>
                                    <input type="text" class="form-control" id="ExServiceCertificateDetails"
                                        name="ExServiceCertificateDetails">
                                </div>



                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Handicapped">Handicapped:</label>
                                    <input type="text" class="form-control" id="Handicapped" name="Handicapped">
                                </div>
                                <div class="form-group">
                                    <label for="HandicappedGrade">Handicapped Grade:</label>
                                    <input type="text" class="form-control" id="HandicappedGrade"
                                        name="HandicappedGrade">
                                </div>
                                <div class="form-group">
                                    <label for="HandicappedCertificateDetails">Handicapped Certificate:</label>
                                    <input type="text" class="form-control" id="HandicappedCertificateDetails"
                                        name="HandicappedCertificateDetails">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicantDeclaration">Applicant declaration:</label>
                                    <input type="text" class="form-control" id="ApplicantDeclaration"
                                        name="ApplicantDeclaration">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicantSignaturePath">Signature of applicant:</label>
                                    <input type="text" class="form-control" id="ApplicantSignaturePath"
                                        name="ApplicantSignaturePath">
                                </div>
                                <div class="form-group">
                                    <label for="ParentSignaturePath">Signature of father:</label>
                                    <input type="text" class="form-control" id="ParentSignaturePath"
                                        name="ParentSignaturePath">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicationTime">Time:</label>
                                    <input type="text" class="form-control" id="ApplicationTime" name="ApplicationTime">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicationDate">Date:</label>
                                    <input type="text" class="form-control" id="ApplicationDate" name="ApplicationDate">
                                </div>
                                <div class="form-group">
                                    <label for="ApplicationPlace">Application Place:</label>
                                    <input type="text" class="form-control" id="ApplicationPlace"
                                        name="ApplicationPlace">
                                </div>

                            </div> <input type="submit" name="next" class="next action-button" value="Submit" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="../images_template/GwStPmg.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js_template/admission.js"></script>
</body>

</html>
