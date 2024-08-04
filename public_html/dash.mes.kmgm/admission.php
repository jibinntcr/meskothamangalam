<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../includes/config.php');


if(isset($_POST['finalsubmit'])){
    $folder = '../admission_uploads/';
    $ApplicationNumber = isset($_POST['ApplicationNumber']) ? $_POST['ApplicationNumber'] : NULL;


    // photo upload
    if(isset($_FILES['photo'])){
        $originalFileName = $_FILES["photo"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'photo_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['photo']['tmp_name'], $file);
        $ApplicantPhoto = $newFileName;
    } else {
        $ApplicantPhoto = NULL;
    }

    $RegistrationNumber = isset($_POST['RegistrationNumber']) ? $_POST['RegistrationNumber'] : NULL;
    $UniversityCapNumber = isset($_POST['UniversityCapNumber']) ? $_POST['UniversityCapNumber'] : NULL;
    $ProgramName = isset($_POST['ProgramName']) ? $_POST['ProgramName'] : NULL;
    $CandidateName = isset($_POST['CandidateName']) ? $_POST['CandidateName'] : NULL;
    $ExpansionOfInitial = isset($_POST['ExpansionOfInitial']) ? $_POST['ExpansionOfInitial'] : NULL;
    $Sex = isset($_POST['Sex']) ? $_POST['Sex'] : NULL;
    $Married = isset($_POST['Married']) ? $_POST['Married'] : NULL;
    $Age = isset($_POST['Age']) ? $_POST['Age'] : NULL;
    $DateOfBirth = isset($_POST['DateOfBirth']) ? $_POST['DateOfBirth'] : NULL;
    $Religion = isset($_POST['Religion']) ? $_POST['Religion'] : NULL;
    $Caste = isset($_POST['Caste']) ? $_POST['Caste'] : NULL;
    $Casttype = isset($_POST['Casttype']) ? $_POST['Casttype'] : NULL;
    $Nationality = isset($_POST['Nationality']) ? $_POST['Nationality'] : NULL;
    $State = isset($_POST['State']) ? $_POST['State'] : NULL;
    $District = isset($_POST['District']) ? $_POST['District'] : NULL;
    $Taluk = isset($_POST['Taluk']) ? $_POST['Taluk'] : NULL;
    $Municipality = isset($_POST['Municipality']) ? $_POST['Municipality'] : NULL;
    $Corporation = isset($_POST['Corporation']) ? $_POST['Corporation'] : NULL;
    $FatherName = isset($_POST['FatherName']) ? $_POST['FatherName'] : NULL;
    $MotherName = isset($_POST['MotherName']) ? $_POST['MotherName'] : NULL;
    $FatherOccupation = isset($_POST['FatherOccupation']) ? $_POST['FatherOccupation'] : NULL;
    $MotherOccupation = isset($_POST['MotherOccupation']) ? $_POST['MotherOccupation'] : NULL;
    $GuardianName = isset($_POST['GuardianName']) ? $_POST['GuardianName'] : NULL;
    $PermanentAddress = isset($_POST['PermanentAddress']) ? $_POST['PermanentAddress'] : NULL;
    $CommunicationAddress = isset($_POST['CommunicationAddress']) ? $_POST['CommunicationAddress'] : NULL;
    $FatherPhoneNumber = isset($_POST['FatherPhoneNumber']) ? $_POST['FatherPhoneNumber'] : NULL;
    $MotherPhoneNumber = isset($_POST['MotherPhoneNumber']) ? $_POST['MotherPhoneNumber'] : NULL;
    $ApplicantPhoneNumber = isset($_POST['ApplicantPhoneNumber']) ? $_POST['ApplicantPhoneNumber'] : NULL;
    $GuardianPhoneNumber = isset($_POST['GuardianPhoneNumber']) ? $_POST['GuardianPhoneNumber'] : NULL;
    $Email = isset($_POST['Email']) ? $_POST['Email'] : NULL;
    $AadhaarNumber = isset($_POST['AadhaarNumber']) ? $_POST['AadhaarNumber'] : NULL;
    $ElectionID = isset($_POST['ElectionID']) ? $_POST['ElectionID'] : NULL;
    $AccountNumber = isset($_POST['AccountNumber']) ? $_POST['AccountNumber'] : NULL;
    $BankBranch = isset($_POST['BankBranch']) ? $_POST['BankBranch'] : NULL;
    $BranchCode = isset($_POST['BranchCode']) ? $_POST['BranchCode'] : NULL;
    $MICR = isset($_POST['MICR']) ? $_POST['MICR'] : NULL;
    $IFSC = isset($_POST['IFSC']) ? $_POST['IFSC'] : NULL;
    $SSLCExamName = isset($_POST['SSLCExamName']) ? $_POST['SSLCExamName'] : NULL;
    $SSLCRegisterNumber = isset($_POST['SSLCRegisterNumber']) ? $_POST['SSLCRegisterNumber'] : NULL;
    $SSLCSchoolName = isset($_POST['SSLCSchoolName']) ? $_POST['SSLCSchoolName'] : NULL;
    $QualifyingExamName = isset($_POST['QualifyingExamName']) ? $_POST['QualifyingExamName'] : NULL;
    $QualifyingExamUniversity = isset($_POST['QualifyingExamUniversity']) ? $_POST['QualifyingExamUniversity'] : NULL;
    $QualifyingExamPassoutMonthYear = isset($_POST['QualifyingExamPassoutMonthYear']) ? $_POST['QualifyingExamPassoutMonthYear'] : NULL;
    $TCAndCCIssueDate = isset($_POST['TCAndCCIssueDate']) ? $_POST['TCAndCCIssueDate'] : NULL;
    $TCAndCCInstitutionName = isset($_POST['TCAndCCInstitutionName']) ? $_POST['TCAndCCInstitutionName'] : NULL;
    $TCAndCCPeriod = isset($_POST['TCandCCperiod']) ? $_POST['TCandCCperiod'] : NULL;
    $ApplyingQuota = isset($_POST['ApplyingQuta']) ? $_POST['ApplyingQuta'] : NULL;
    $Category = isset($_POST['Category']) ? $_POST['Category'] : NULL;
    $Reservation = isset($_POST['Reservation']) ? $_POST['Reservation'] : NULL;
    $IndexMark = isset($_POST['IndexMark']) ? $_POST['IndexMark'] : NULL;
    $RankPosition = isset($_POST['RankPosition']) ? $_POST['RankPosition'] : NULL;
    $QualifyingExamBoard = isset($_POST['QualifyingExamBoard']) ? $_POST['QualifyingExamBoard'] : NULL;
    $QualifyingExamRegisterNumber = isset($_POST['QualifyingExamRegisterNumber']) ? $_POST['QualifyingExamRegisterNumber'] : NULL;
    $QualifyingExamPassingMonthYear = isset($_POST['QualifyingExamPassingMonthYear']) ? $_POST['QualifyingExamPassingMonthYear'] : NULL;
    $NumberOfChances = isset($_POST['NumberofChances']) ? $_POST['NumberofChances'] : NULL;
    $Subject1Name = isset($_POST['Subject1Name']) ? $_POST['Subject1Name'] : NULL;
    $Subject1Grade = isset($_POST['Subject1Grade']) ? $_POST['Subject1Grade'] : NULL;
    $Subject1Marks = isset($_POST['Subject1Mark']) ? $_POST['Subject1Mark'] : NULL;
    $Subject2Name = isset($_POST['Subject2Name']) ? $_POST['Subject2Name'] : NULL;
    $Subject2Grade = isset($_POST['Subject2Grade']) ? $_POST['Subject2Grade'] : NULL;
    $Subject2Marks = isset($_POST['Subject2Mark']) ? $_POST['Subject2Mark'] : NULL;
    $Subject3Name = isset($_POST['Subject3Name']) ? $_POST['Subject3Name'] : NULL;
    $Subject3Grade = isset($_POST['Subject3Grade']) ? $_POST['Subject3Grade'] : NULL;
    $Subject3Marks = isset($_POST['Subject3Mark']) ? $_POST['Subject3Mark'] : NULL;
    $Subject4Name = isset($_POST['Subject4Name']) ? $_POST['Subject4Name'] : NULL;
    $Subject4Grade = isset($_POST['Subject4Grade']) ? $_POST['Subject4Grade'] : NULL;
    $Subject4Marks = isset($_POST['Subject4Mark']) ? $_POST['Subject4Mark'] : NULL;
    $Subject5Name = isset($_POST['Subject5Name']) ? $_POST['Subject5Name'] : NULL;
    $Subject5Grade = isset($_POST['Subject5Grade']) ? $_POST['Subject5Grade'] : NULL;
    $Subject5Marks = isset($_POST['Subject5Mark']) ? $_POST['Subject5Mark'] : NULL;
    $Subject6Name = isset($_POST['Subject6Name']) ? $_POST['Subject6Name'] : NULL;
    $Subject6Grade = isset($_POST['Subject6Grade']) ? $_POST['Subject6Grade'] : NULL;
    $Subject6Marks = isset($_POST['Subject6Mark']) ? $_POST['Subject6Mark'] : NULL;
    $TotalMarks = isset($_POST['TotalMarks']) ? $_POST['TotalMarks'] : NULL;
    $TotalGrade = isset($_POST['TotalGrade']) ? $_POST['TotalGrade'] : NULL;
    $Percentage = isset($_POST['Percentage']) ? $_POST['Percentage'] : NULL;
    $Sports = isset($_POST['Sports']) ? $_POST['Sports'] : NULL;
    $SportsGrade = isset($_POST['SportsGrade']) ? $_POST['SportsGrade'] : NULL;

    //sports certificate upload
    if(isset($_FILES['SportsCertificateDetails'])){
        $originalFileName = $_FILES["SportsCertificateDetails"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'Sports_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['SportsCertificateDetails']['tmp_name'], $file);
        $SportsCertificateDetails = $newFileName;
    } else {
        $SportsCertificateDetails = NULL;
    }
    

    $Games = isset($_POST['Games']) ? $_POST['Games'] : NULL;
    $GamesGrade = isset($_POST['GamesGrade']) ? $_POST['GamesGrade'] : NULL;

    //games certificate upload
    if(isset($_FILES['GamesCertificateDetails'])){
        $originalFileName = $_FILES["GamesCertificateDetails"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'Games_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['GamesCertificateDetails']['tmp_name'], $file);
        $GamesCertificateDetails = $newFileName;
    } else {
        $GamesCertificateDetails = NULL;
    }
    

    $Cultural = isset($_POST['Cultural']) ? $_POST['Cultural'] : NULL;
    $CulturalGrade = isset($_POST['CulturalGrade']) ? $_POST['CulturalGrade'] : NULL;

    //cultural certificate upload
    if(isset($_FILES['CulturalCertificateDetails'])){
        $originalFileName = $_FILES["CulturalCertificateDetails"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'Cultural_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['CulturalCertificateDetails']['tmp_name'], $file);
        $CulturalCertificateDetails = $newFileName;
    } else {
        $CulturalCertificateDetails = NULL;
    }
    

    $NCC = isset($_POST['NCC']) ? $_POST['NCC'] : NULL;
    $NCCGrade = isset($_POST['NCCGrade']) ? $_POST['NCCGrade'] : NULL;

    //ncc certificate upload
    if(isset($_FILES['NCCCertificateDetails'])){
        $originalFileName = $_FILES["NCCCertificateDetails"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'NCC_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['NCCCertificateDetails']['tmp_name'], $file);
        $NCCCertificateDetails = $newFileName;
    } else {
        $NCCCertificateDetails = NULL;
    }
    

    $NSS = isset($_POST['NSS']) ? $_POST['NSS'] : NULL;
    $NSSGrade = isset($_POST['NSSGrade']) ? $_POST['NSSGrade'] : NULL;

    //nss certificate upload
    if(isset($_FILES['NSSCertificateDetails'])){
        $originalFileName = $_FILES["NSSCertificateDetails"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'NSS_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['NSSCertificateDetails']['tmp_name'], $file);
        $NSSCertificateDetails = $newFileName;
    } else {
        $NSSCertificateDetails = NULL;
    }
    

    $ExService = isset($_POST['ExService']) ? $_POST['ExService'] : NULL;
    $ExServiceGrade = isset($_POST['ExServiceGrade']) ? $_POST['ExServiceGrade'] : NULL;

    //exservice certificate upload
    if(isset($_FILES['ExServiceCertificateDetails'])){
        $originalFileName = $_FILES["ExServiceCertificateDetails"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'ExService_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['ExServiceCertificateDetails']['tmp_name'], $file);
        $ExServiceCertificateDetails = $newFileName;
    } else {
        $ExServiceCertificateDetails = NULL;
    }
    

    $Handicapped = isset($_POST['Handicapped']) ? $_POST['Handicapped'] : NULL;
    $HandicappedGrade = isset($_POST['HandicappedGrade']) ? $_POST['HandicappedGrade'] : NULL;

    //Handicapped certificate upload
    if(isset($_FILES['HandicappedCertificateDetails'])){
        $originalFileName = $_FILES["HandicappedCertificateDetails"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'Handicapped_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['HandicappedCertificateDetails']['tmp_name'], $file);
        $HandicappedCertificateDetails = $newFileName;
    } else {
        $HandicappedCertificateDetails = NULL;
    }
    

    $ApplicantDeclaration = isset($_POST['ApplicantDeclaration']) ? $_POST['ApplicantDeclaration'] : NULL;

    //Applicant signature upload
    if(isset($_FILES['ApplicantSignaturePath'])){
        $originalFileName = $_FILES["ApplicantSignaturePath"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'Signature_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['ApplicantSignaturePath']['tmp_name'], $file);
        $ApplicantSignaturePath = $newFileName;
    } else {
        $ApplicantSignaturePath = NULL;
    }
    

    //Parent signature upload
    if(isset($_FILES['ParentSignaturePath'])){
        $originalFileName = $_FILES["ParentSignaturePath"]["name"];
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $newFileName = 'ParentSignature_' . $ApplicationNumber . '.' . $extension;
        $file = $folder . $newFileName;
        move_uploaded_file($_FILES['ParentSignaturePath']['tmp_name'], $file);
        $ParentSignaturePath = $newFileName;
    } else {
        $ParentSignaturePath = NULL;
    }    

    $Village = isset($_POST['Village']) ? $_POST['Village'] : NULL;
    $Panchayat = isset($_POST['Panchayat']) ? $_POST['Panchayat'] : NULL;
    $fatherannual = isset($_POST['fatherannual']) ? $_POST['fatherannual'] : NULL;
    $motherannual = isset($_POST['motherannual']) ? $_POST['motherannual'] : NULL;
    $guardianannual = isset($_POST['guardianannual']) ? $_POST['guardianannual'] : NULL;
    $sslcmonthandyear = isset($_POST['sslcmonthandyear']) ? $_POST['sslcmonthandyear'] : NULL;



    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', preg_replace('/\s+/', '-', $ApplicationNumber)));



    $sql = "INSERT INTO AdmissionApplications (
        ApplicationNumber, 
        ApplicantPhoto, 
        RegistrationNumber, 
        UniversityCapNumber, 
        ProgramName, 
        CandidateName, 
        ExpansionOfInitial, 
        Sex, 
        Married, 
        Age, 
        DateOfBirth, 
        Religion, 
        Caste, 
        Casttype, 
        Nationality, 
        State, 
        District, 
        Taluk, 
        Municipality, 
        Corporation, 
        FatherName, 
        MotherName, 
        FatherOccupation, 
        MotherOccupation, 
        GuardianName, 
        PermanentAddress, 
        CommunicationAddress, 
        FatherPhoneNumber, 
        MotherPhoneNumber, 
        ApplicantPhoneNumber, 
        GuardianPhoneNumber, 
        Email, 
        AadhaarNumber, 
        ElectionID, 
        AccountNumber, 
        BankBranch, 
        BranchCode, 
        MICR, 
        IFSC, 
        SSLCExamName, 
        SSLCRegisterNumber, 
        SSLCSchoolName, 
        QualifyingExamName, 
        QualifyingExamUniversity, 
        QualifyingExamPassoutMonthYear, 
        TCAndCCIssueDate, 
        TCAndCCInstitutionName, 
        TCAndCCPeriod, 
        ApplyingQuota, 
        Category, 
        Reservation, 
        IndexMark, 
        RankPosition, 
        QualifyingExamBoard, 
        QualifyingExamRegisterNumber, 
        QualifyingExamPassingMonthYear,
        NumberOfChances, 
        Subject1Name, 
        Subject1Marks,
        Subject1Grade,
        Subject2Name, 
        Subject2Marks, 
        Subject2Grade, 
        Subject3Name, 
        Subject3Marks, 
        Subject3Grade, 
        Subject4Name, 
        Subject4Marks, 
        Subject4Grade, 
        Subject5Name, 
        Subject5Marks, 
        Subject5Grade, 
        Subject6Name, 
        Subject6Marks, 
        Subject6Grade, 
        TotalMarks, 
        TotalGrade, 
        Percentage, 
        Sports, 
        SportsGrade, 
        SportsCertificateDetails, 
        Games, 
        GamesGrade, 
        GamesCertificateDetails, 
        Cultural, 
        CulturalGrade, 
        CulturalCertificateDetails, 
        NCC, 
        NCCGrade, 
        NCCCertificateDetails, 
        NSS, 
        NSSGrade, 
        NSSCertificateDetails, 
        ExService, 
        ExServiceGrade, 
        ExServiceCertificateDetails, 
        Handicapped, 
        HandicappedGrade, 
        HandicappedCertificateDetails, 
        ApplicantDeclaration, 
        ApplicantSignaturePath, 
        ParentSignaturePath,
        slug,
        Village,
        Panchayat,
        fatherannual,
        motherannual,
        guardianannual,
        sslcmonthandyear

    ) VALUES (
        '$ApplicationNumber', 
        '$ApplicantPhoto', 
        '$RegistrationNumber', 
        '$UniversityCapNumber', 
        '$ProgramName', 
        '$CandidateName', 
        '$ExpansionOfInitial', 
        '$Sex', 
        '$Married', 
        '$Age', 
        '$DateOfBirth', 
        '$Religion', 
        '$Caste', 
        '$Casttype', 
        '$Nationality', 
        '$State', 
        '$District', 
        '$Taluk', 
        '$Municipality', 
        '$Corporation', 
        '$FatherName', 
        '$MotherName', 
        '$FatherOccupation', 
        '$MotherOccupation', 
        '$GuardianName', 
        '$PermanentAddress', 
        '$CommunicationAddress', 
        '$FatherPhoneNumber', 
        '$MotherPhoneNumber', 
        '$ApplicantPhoneNumber', 
        '$GuardianPhoneNumber', 
        '$Email', 
        '$AadhaarNumber', 
        '$ElectionID', 
        '$AccountNumber', 
        '$BankBranch', 
        '$BranchCode', 
        '$MICR', 
        '$IFSC', 
        '$SSLCExamName', 
        '$SSLCRegisterNumber', 
        '$SSLCSchoolName', 
        '$QualifyingExamName', 
        '$QualifyingExamUniversity', 
        '$QualifyingExamPassoutMonthYear', 
        '$TCAndCCIssueDate', 
        '$TCAndCCInstitutionName', 
        '$TCAndCCPeriod', 
        '$ApplyingQuota', 
        '$Category', 
        '$Reservation', 
        '$IndexMark', 
        '$RankPosition', 
        '$QualifyingExamBoard', 
        '$QualifyingExamRegisterNumber', 
        '$QualifyingExamPassingMonthYear',
        '$NumberOfChances', 
        '$Subject1Name', 
        '$Subject1Marks', 
        '$Subject1Grade', 
        '$Subject2Name', 
        '$Subject2Marks', 
        '$Subject2Grade', 
        '$Subject3Name', 
        '$Subject3Marks', 
        '$Subject3Grade', 
        '$Subject4Name', 
        '$Subject4Marks', 
        '$Subject4Grade', 
        '$Subject5Name', 
        '$Subject5Marks', 
        '$Subject5Grade', 
        '$Subject6Name', 
        '$Subject6Marks', 
        '$Subject6Grade', 
        '$TotalMarks', 
        '$TotalGrade', 
        '$Percentage', 
        '$Sports', 
        '$SportsGrade', 
        '$SportsCertificateDetails', 
        '$Games', 
        '$GamesGrade', 
        '$GamesCertificateDetails', 
        '$Cultural', 
        '$CulturalGrade', 
        '$CulturalCertificateDetails', 
        '$NCC', 
        '$NCCGrade', 
        '$NCCCertificateDetails', 
        '$NSS', 
        '$NSSGrade', 
        '$NSSCertificateDetails', 
        '$ExService', 
        '$ExServiceGrade', 
        '$ExServiceCertificateDetails', 
        '$Handicapped', 
        '$HandicappedGrade', 
        '$HandicappedCertificateDetails', 
        '$ApplicantDeclaration', 
        '$ApplicantSignaturePath', 
        '$ParentSignaturePath',
        '$slug',
        '$Village',
        '$Panchayat',
        '$fatherannual',
        '$motherannual',
        '$guardianannual',
        '$sslcmonthandyear'
    )";
    

    
    $query = $dbh->prepare($sql);
    $result = $query->execute();
}
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
                    <form id="msform" enctype="multipart/form-data" method="POST" class="customRadio">
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
                                <input type="text" class="form-control" id="ApplicationNumber" name="ApplicationNumber">

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





                                <div>
                                    <input type="radio" id="panchayat" name="location" value="panchayat"
                                        onchange="toggleInputField('PanchayatInput', this)" checked>
                                    <label for="panchayat">Panchayat</label>

                                    <input type="radio" id="municipality" name="location" value="municipality"
                                        onchange="toggleInputField('MunicipalityInput', this)">
                                    <label for="municipality">Municipality</label>

                                    <input type="radio" id="corporation" name="location" value="corporation"
                                        onchange="toggleInputField('CorporationInput', this)">
                                    <label for="corporation">Corporation</label>
                                </div>

                                <div class="form-group" id="PanchayatInput" style="display: none;">
                                    <label class="fieldlabels" for="Panchayat">Panchayat:</label>
                                    <input type="text" class="form-control" id="Panchayat" name="Panchayat">
                                    <label class="fieldlabels" for="Village">Village:</label>
                                    <input type="text" class="form-control" id="Village" name="Village">
                                </div>

                                <div class="form-group" id="MunicipalityInput" style="display: none;">
                                    <label class="fieldlabels" for="Municipality">Municipality:</label>
                                    <input type="text" class="form-control" id="Municipality" name="Municipality">
                                </div>

                                <div class="form-group" id="CorporationInput" style="display: none;">
                                    <label class="fieldlabels" for="Corporation">Corporation:</label>
                                    <input type="text" class="form-control" id="Corporation" name="Corporation">
                                </div>




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
                                <input type="text" class="form-control" id="GuardianOccupation"
                                    name="GuardianOccupation">

                                <label class="fieldlabels" for="GuardianName">Annual income of father:</label>
                                <input type="text" class="form-control" id="fatherannual" name="fatherannual">

                                <label class="fieldlabels" for="GuardianName">Annual income of mother:</label>
                                <input type="text" class="form-control" id="motherannual" name="motherannual">

                                <label class="fieldlabels" for="GuardianName">Annual income of guadian:</label>
                                <input type="text" class="form-control" id="guardianannual" name="guardianannual">


                                <label class="fieldlabels" for="PermanentAddress">Permanent address:</label>
                                <textarea class="form-control" id="PermanentAddress" name="PermanentAddress"></textarea>

                                <label class="fieldlabels" for="CommunicationAddress">Communication address:</label>
                                <textarea class="form-control" id="CommunicationAddress"
                                    name="CommunicationAddress"></textarea>



                                <label class="fieldlabels" for="FatherPhoneNumber">Father's phone number:</label>
                                <input type="number" class="form-control" id="FatherPhoneNumber"
                                    name="FatherPhoneNumber">

                                <label class="fieldlabels" for="MotherPhoneNumber">Mother's phone number:</label>
                                <input type="number" class="form-control" id="MotherPhoneNumber"
                                    name="MotherPhoneNumber">

                                <label class="fieldlabels" for="ApplicantPhoneNumber">Applicant's phone number:</label>
                                <input type="number" class="form-control" id="ApplicantPhoneNumber"
                                    name="ApplicantPhoneNumber">

                                <label class="fieldlabels" for="GuardianPhoneNumber">Guardian's phone number:</label>
                                <input type="number" class="form-control" id="GuardianPhoneNumber"
                                    name="GuardianPhoneNumber">





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
                                <input type="text" class="form-control" id="sslcmonthandyear" name="sslcmonthandyear">

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
                                    <label>Sports:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="SportsRadio" id="SportsYes"
                                            value="yes">
                                        <label class="form-check-label" for="SportsYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="SportsRadio" id="SportsNo"
                                            value="no">
                                        <label class="form-check-label" for="SportsNo">No</label>
                                    </div>
                                </div>
                                <div class="form-group" id="SportsGradeField" style="display: none;">
                                    <label for="SportsGrade">Sports Grade:</label>
                                    <input type="text" class="form-control" id="SportsGrade" name="SportsGrade">
                                </div>
                                <div class="form-group" id="SportsCertificateDetailsField" style="display: none;">
                                    <label for="SportsCertificateDetails">Sports Certificate:</label>
                                    <input type="file" class="form-control" id="SportsCertificateDetails"
                                        name="SportsCertificateDetails">
                                </div>

                                <div class="form-group">
                                    <label>Games:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="GamesRadio" id="GamesYes"
                                            value="yes">
                                        <label class="form-check-label" for="GamesYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="GamesRadio" id="GamesNo"
                                            value="no">
                                        <label class="form-check-label" for="GamesNo">No</label>
                                    </div>
                                </div>
                                <div class="form-group" id="GamesGradeField" style="display: none;">
                                    <label for="GamesGrade">Games Grade:</label>
                                    <input type="text" class="form-control" id="GamesGrade" name="GamesGrade">
                                </div>
                                <div class="form-group" id="GamesCertificateDetailsField" style="display: none;">
                                    <label for="GamesCertificateDetails">Games Certificate:</label>
                                    <input type="file" class="form-control" id="GamesCertificateDetails"
                                        name="GamesCertificateDetails">
                                </div>

                                <div class="form-group">
                                    <label>Cultural:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="CulturalRadio"
                                            id="CulturalYes" value="yes">
                                        <label class="form-check-label" for="CulturalYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="CulturalRadio"
                                            id="CulturalNo" value="no">
                                        <label class="form-check-label" for="CulturalNo">No</label>
                                    </div>
                                </div>
                                <div class="form-group" id="CulturalGradeField" style="display: none;">
                                    <label for="CulturalGrade">Cultural Grade:</label>
                                    <input type="text" class="form-control" id="CulturalGrade" name="CulturalGrade">
                                </div>
                                <div class="form-group" id="CulturalCertificateDetailsField" style="display: none;">
                                    <label for="CulturalCertificateDetails">Cultural Certificate:</label>
                                    <input type="file" class="form-control" id="CulturalCertificateDetails"
                                        name="CulturalCertificateDetails">
                                </div>

                                <div class="form-group">
                                    <label>NCC:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="NCCRadio" id="NCCYes"
                                            value="yes">
                                        <label class="form-check-label" for="NCCYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="NCCRadio" id="NCCNo"
                                            value="no">
                                        <label class="form-check-label" for="NCCNo">No</label>
                                    </div>
                                </div>
                                <div class="form-group" id="NCCGradeField" style="display: none;">
                                    <label for="NCCGrade">NCC Grade:</label>
                                    <input type="text" class="form-control" id="NCCGrade" name="NCCGrade">
                                </div>
                                <div class="form-group" id="NCCCertificateDetailsField" style="display: none;">
                                    <label for="NCCCertificateDetails">NCC Certificate:</label>
                                    <input type="file" class="form-control" id="NCCCertificateDetails"
                                        name="NCCCertificateDetails">
                                </div>

                                <div class="form-group">
                                    <label>NSS:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="NSSRadio" id="NSSYes"
                                            value="yes">
                                        <label class="form-check-label" for="NSSYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="NSSRadio" id="NSSNo"
                                            value="no">
                                        <label class="form-check-label" for="NSSNo">No</label>
                                    </div>
                                </div>
                                <div class="form-group" id="NSSGradeField" style="display: none;">
                                    <label for="NSSGrade">NSS Grade:</label>
                                    <input type="text" class="form-control" id="NSSGrade" name="NSSGrade">
                                </div>
                                <div class="form-group" id="NSSCertificateDetailsField" style="display: none;">
                                    <label for="NSSCertificateDetails">NSS Certificate:</label>
                                    <input type="file" class="form-control" id="NSSCertificateDetails"
                                        name="NSSCertificateDetails">
                                </div>

                                <div class="form-group">
                                    <label>Ex Service:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ExServiceRadio"
                                            id="ExServiceYes" value="yes">
                                        <label class="form-check-label" for="ExServiceYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ExServiceRadio"
                                            id="ExServiceNo" value="no">
                                        <label class="form-check-label" for="ExServiceNo">No</label>
                                    </div>
                                </div>
                                <div class="form-group" id="ExServiceGradeField" style="display: none;">
                                    <label for="ExServiceGrade">Ex Service Grade:</label>
                                    <input type="text" class="form-control" id="ExServiceGrade" name="ExServiceGrade">
                                </div>
                                <div class="form-group" id="ExServiceCertificateDetailsField" style="display: none;">
                                    <label for="ExServiceCertificateDetails">Ex Service Certificate:</label>
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


                                <div class="form-group ">
                                    <label>Handicapped:</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="HandicappedRadio"
                                            id="HandicappedYes" value="yes">
                                        <label class="form-check-label" for="HandicappedYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="HandicappedRadio"
                                            id="HandicappedNo" value="no">
                                        <label class="form-check-label" for="HandicappedNo">No</label>
                                    </div>
                                </div>
                                <div class="form-group" id="HandicappedFields" style="display: none;">
                                    <label for="HandicappedGrade">Handicapped Grade:</label>
                                    <input type="text" class="form-control" id="HandicappedGrade"
                                        name="HandicappedGrade">
                                </div>
                                <div class="form-group" id="HandicappedCertificateDetailsFields" style="display: none;">
                                    <label for="HandicappedCertificateDetails">Handicapped Certificate:</label>
                                    <input type="text" class="form-control" id="HandicappedCertificateDetails"
                                        name="HandicappedCertificateDetails">
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
                                    <label for="ApplicantDeclaration">Applicant declaration:</label><br>
                                    <div class="form-check">
                                        <label class="form-check-label" for="ApplicantDeclarationCheckbox">I agree to
                                            the declaration</label>
                                        <input class="form-check-input" type="checkbox"
                                            id="ApplicantDeclarationCheckbox" name="ApplicantDeclarationCheckbox">

                                    </div>
                                </div>




                            </div> <input type="submit" name="finalsubmit" class="next action-button" value="Submit" /> <input
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