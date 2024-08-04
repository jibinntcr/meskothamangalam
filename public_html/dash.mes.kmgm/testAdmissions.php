<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../includes/config.php');
// if($_POST){
//     echo "<br> <br> <br> <br>";
//     $ApplicationNumber = $_POST['ApplicationNumber'];
    
// }


if(isset($_POST)){
    $ApplicationNumber = isset($_POST['ApplicationNumber']) ? $_POST['ApplicationNumber'] : NULL;
    $ApplicantPhoto = isset($_POST['ApplicantPhoto']) ? $_POST['ApplicantPhoto'] : NULL;
    $RegistrationNumber = isset($_POST['RegistrationNumber']) ? $_POST['RegistrationNumber'] : NULL;
    $UniversityCapNumber = isset($_POST['UniversityCapNumber']) ? $_POST['UniversityCapNumber'] : NULL;
    $ProgramName = isset($_POST['ProgramName']) ? $_POST['ProgramName'] : NULL;
    $CandidateName = isset($_POST['CandidateName']) ? $_POST['CandidateName'] : NULL;
    $ExpansionOfInitial = isset($_POST['ExpansionOfInitial']) ? $_POST['ExpansionOfInitial'] : NULL;
    $Sex = isset($_POST['Sex']) ? $_POST['Sex'] : NULL;
    $Married = isset($_POST['Married']) ? $_POST['Married'] : NULL;
    var_dump($_POST['Age']);
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
    $SportsCertificateDetails = isset($_POST['SportsCertificateDetails']) ? $_POST['SportsCertificateDetails'] : NULL;
    $Games = isset($_POST['Games']) ? $_POST['Games'] : NULL;
    $GamesGrade = isset($_POST['GamesGrade']) ? $_POST['GamesGrade'] : NULL;
    $GamesCertificateDetails = isset($_POST['GamesCertificateDetails']) ? $_POST['GamesCertificateDetails'] : NULL;
    $Cultural = isset($_POST['Cultural']) ? $_POST['Cultural'] : NULL;
    $CulturalGrade = isset($_POST['CulturalGrade']) ? $_POST['CulturalGrade'] : NULL;
    $CulturalCertificateDetails = isset($_POST['CulturalCertificateDetails']) ? $_POST['CulturalCertificateDetails'] : NULL;
    $NCC = isset($_POST['NCC']) ? $_POST['NCC'] : NULL;
    $NCCGrade = isset($_POST['NCCGrade']) ? $_POST['NCCGrade'] : NULL;
    $NCCCertificateDetails = isset($_POST['NCCCertificateDetails']) ? $_POST['NCCCertificateDetails'] : NULL;
    $NSS = isset($_POST['NSS']) ? $_POST['NSS'] : NULL;
    $NSSGrade = isset($_POST['NSSGrade']) ? $_POST['NSSGrade'] : NULL;
    $NSSCertificateDetails = isset($_POST['NSSCertificateDetails']) ? $_POST['NSSCertificateDetails'] : NULL;
    $ExService = isset($_POST['ExService']) ? $_POST['ExService'] : NULL;
    $ExServiceGrade = isset($_POST['ExServiceGrade']) ? $_POST['ExServiceGrade'] : NULL;
    $ExServiceCertificateDetails = isset($_POST['ExServiceCertificateDetails']) ? $_POST['ExServiceCertificateDetails'] : NULL;
    $Handicapped = isset($_POST['Handicapped']) ? $_POST['Handicapped'] : NULL;
    $HandicappedGrade = isset($_POST['HandicappedGrade']) ? $_POST['HandicappedGrade'] : NULL;
    $HandicappedCertificateDetails = isset($_POST['HandicappedCertificateDetails']) ? $_POST['HandicappedCertificateDetails'] : NULL;
    $ApplicantDeclaration = isset($_POST['ApplicantDeclaration']) ? $_POST['ApplicantDeclaration'] : NULL;
    $ApplicantSignaturePath = isset($_POST['ApplicantSignaturePath']) ? $_POST['ApplicantSignaturePath'] : NULL;
    $ParentSignaturePath = isset($_POST['ParentSignaturePath']) ? $_POST['ParentSignaturePath'] : NULL;
    $ApplicationDate = isset($_POST['ApplicationDate']) ? $_POST['ApplicationDate'] : NULL;
    $ApplicationTime = isset($_POST['ApplicationTime']) ? $_POST['ApplicationTime'] : NULL;
    $ApplicationPlace = isset($_POST['ApplicationPlace']) ? $_POST['ApplicationPlace'] : NULL;



    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', preg_replace('/\s+/', '-', $CandidateName)));

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
        ApplicationDate, 
        ApplicationPlace, 
        slug
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
        '$ApplicationDate', 
        '$ApplicationPlace', 
        '$slug'
    )";
    

    
    $query = $dbh->prepare($sql);
    $result = $query->execute();

    if(!$result){
        $errorInfo = $query->errorInfo(); // Fetch error information
        echo "PDO Error: " . $errorInfo[2];
    }

    // if ($query->rowCount() > 0) {
    //     echo '<script>alert("Success")</script>';
    //     echo '<script>window.location = "teachingfaculty.php";</script>';
    // } else {
    //     echo '<script>alert("something went wrong please try again")</script>';
    //     echo '<script>window.location = "teachingfaculty.php";</script>';
    // }

    //print_r($_POST);

    // $folder = '../uploads/';
    // $file = $folder . basename($_FILES["file"]["name"]);
    // move_uploaded_file($_FILES['file']['tmp_name'], $file);
    // $photo = basename($_FILES["file"]["name"]);
    // $status = '1';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AdmissionApplications | MES Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">New Application</h4>
                        <form class="forms-sample" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Application number</label>
                                <input type="number" class="form-control" id="ApplicationNumber"
                                    name="ApplicationNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Applicant Photo</label>
                                <input type="text" class="form-control" id="ApplicantPhoto" name="ApplicantPhoto">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Registration Number</label>
                                <input type="number" class="form-control" id="RegistrationNumber"
                                    name="RegistrationNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">University CapNumber</label>
                                <input type="number" class="form-control" id="UniversityCapNumber"
                                    name="UniversityCapNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Programme Name</label>
                                <input type="text" class="form-control" id="ProgramName" name="ProgramName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Candidate Name</label>
                                <input type="text" class="form-control" id="CandidateName" name="CandidateName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Expansil of initial</label>
                                <input type="text" class="form-control" id="ExpansionOfInitial"
                                    name="ExpansionOfInitial">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">sex</label>
                                <input type="text" class="form-control" id="Sex" name="Sex">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Married</label>
                                <input type="text" class="form-control" id="Married" name="Married">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Age</label>
                                <input type="number" class="form-control" id="Age" name="Age">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Date of Birth</label>
                                <input type="text" class="form-control" id="DateOfBirth" name="DateOfBirth">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Religion</label>
                                <input type="text" class="form-control" id="Religion" name="Religion">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Caste</label>
                                <input type="text" class="form-control" id="Caste" name="Caste">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Caste type</label>
                                <input type="text" class="form-control" id="Casttype" name="Casttype">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nationality</label>
                                <input type="text" class="form-control" id="Nationality" name="Nationality">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">State</label>
                                <input type="text" class="form-control" id="State" name="State">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">District</label>
                                <input type="text" class="form-control" id="District" name="District">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Taluk</label>
                                <input type="text" class="form-control" id="Taluk" name="Taluk">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Municipality</label>
                                <input type="text" class="form-control" id="Municipality" name="Municipality">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Corporation</label>
                                <input type="text" class="form-control" id="Corporation" name="Corporation">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Father name</label>
                                <input type="text" class="form-control" id="FatherName" name="FatherName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Mother name</label>
                                <input type="text" class="form-control" id="MotherName" name="MotherName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Occupation of father</label>
                                <input type="text" class="form-control" id="FatherOccupation" name="FatherOccupation">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Occupation of mother</label>
                                <input type="text" class="form-control" id="MotherOccupation" name="MotherOccupation">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Guadian name</label>
                                <input type="text" class="form-control" id="GuardianName" name="GuardianName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Permananet address</label>
                                <input type="text" class="form-control" id="PermanentAddress" name="PermanentAddress">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Communication address</label>
                                <input type="text" class="form-control" id="CommunicationAddress"
                                    name="CommunicationAddress">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Father's phone number</label>
                                <input type="text" class="form-control" id="FatherPhoneNumber" name="FatherPhoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Mother's phone number </label>
                                <input type="text" class="form-control" id="MotherPhoneNumber" name="MotherPhoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Applicant's phone number</label>
                                <input type="text" class="form-control" id="ApplicantPhoneNumber"
                                    name="ApplicantPhoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Guadian's phone number</label>
                                <input type="text" class="form-control" id="GuardianPhoneNumber"
                                    name="GuardianPhoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Email id</label>
                                <input type="text" class="form-control" id="Email" name="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Aadhaar number</label>
                                <input type="text" class="form-control" id="AadhaarNumber" name="AadhaarNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Election id</label>
                                <input type="text" class="form-control" id="ElectionID" name="ElectionID">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Bank account number</label>
                                <input type="text" class="form-control" id="AccountNumber" name="AccountNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Branch</label>
                                <input type="text" class="form-control" id="BankBranch" name="BankBranch">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Branch Code</label>
                                <input type="text" class="form-control" id="BranchCode" name="BranchCode">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">MICR</label>
                                <input type="text" class="form-control" id="MICR" name="MICR">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">IFSC code</label>
                                <input type="text" class="form-control" id="IFSC" name="IFSC">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">SSLC exam name</label>
                                <input type="text" class="form-control" id="SSLCExamName" name="SSLCExamName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">SSLC register number</label>
                                <input type="text" class="form-control" id="SSLCRegisterNumber"
                                    name="SSLCRegisterNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">SSLC school name</label>
                                <input type="text" class="form-control" id="SSLCSchoolName" name="SSLCSchoolName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Qualifying exam name</label>
                                <input type="text" class="form-control" id="QualifyingExamName"
                                    name="QualifyingExamName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Qualifying university</label>
                                <input type="text" class="form-control" id="QualifyingExamUniversity"
                                    name="QualifyingExamUniversity">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Exam passout</label>
                                <input type="text" class="form-control" id="QualifyingExamPassoutMonthYear"
                                    name="QualifyingExamPassoutMonthYear">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">TC and CC issue date</label>
                                <input type="text" class="form-control" id="TCAndCCIssueDate" name="TCAndCCIssueDate">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tc issue institution name</label>
                                <input type="text" class="form-control" id="TCAndCCInstitutionName"
                                    name="TCAndCCInstitutionName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Period</label>
                                <input type="text" class="form-control" id="TCandCCperiod" name="TCandCCperiod">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Applying Quta</label>
                                <input type="text" class="form-control" id="ApplyingQuta" name="ApplyingQuta">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Category</label>
                                <input type="text" class="form-control" id="Category" name="Category">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Reservation</label>
                                <input type="text" class="form-control" id="Reservation" name="Reservation">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Index mark</label>
                                <input type="number" class="form-control" id="IndexMark" name="IndexMark">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Rank</label>
                                <input type="number" class="form-control" id="RankPosition" name="RankPosition">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Qualifying exam board</label>
                                <input type="text" class="form-control" id="QualifyingExamBoard"
                                    name="QualifyingExamBoard">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Qualifying exam board</label>
                                <input type="text" class="form-control" id="QualifyingExamRegisterNumber"
                                    name="QualifyingExamRegisterNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Exam passout </label>
                                <input type="text" class="form-control" id="QualifyingExamPassingMonthYear"
                                    name="QualifyingExamPassingMonthYear">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Number of chances</label>
                                <input type="text" class="form-control" id="NumberofChances" name="NumberofChances">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Subject 1</label>
                                <input type="text" class="form-control" id="Subject1Name" name="Subject1Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1"> Grade 1</label>
                                <input type="text" class="form-control" id="Subject1Grade" name="Subject1Grade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Mark 1</label>
                                <input type="number" class="form-control" id="Subject1Mark" name="Subject1Mark">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Subject 2 </label>
                                <input type="text" class="form-control" id="Subject2Name" name="Subject2Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1"> Grade 2</label>
                                <input type="text" class="form-control" id="Subject2Grade" name="Subject2Grade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1"> Mark 2</label>
                                <input type="number" class="form-control" id="Subject2Mark" name="Subject2Mark">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Subject 3</label>
                                <input type="text" class="form-control" id="Subject3Name" name="Subject3Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1"> Grade 3</label>
                                <input type="text" class="form-control" id="Subject3Grade" name="Subject3Grade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1"> Mark 3 </label>
                                <input type="number" class="form-control" id="Subject3Mark" name="Subject3Mark">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Subject 4</label>
                                <input type="text" class="form-control" id="Subject4Name" name="Subject4Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Grade 4</label>
                                <input type="text" class="form-control" id="Subject4Grade" name="Subject4Grade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Mark 4 </label>
                                <input type="number" class="form-control" id="Subject4Mark" name="Subject4Mark">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Subject 5</label>
                                <input type="text" class="form-control" id="Subject5Name" name="Subject5Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Grade 5</label>
                                <input type="text" class="form-control" id="Subject5Grade" name="Subject5Grade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Mark 5</label>
                                <input type="number" class="form-control" id="Subject5Mark" name="Subject5Mark">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Subject 6</label>
                                <input type="text" class="form-control" id="Subject6Name" name="Subject6Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Grade 6</label>
                                <input type="text" class="form-control" id="Subject6Grade" name="Subject6Grade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Mark 6</label>
                                <input type="number" class="form-control" id="Subject6Mark" name="Subject6Mark">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Total marks</label>
                                <input type="number" class="form-control" id="TotalMarks" name="TotalMarks">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Total grade</label>
                                <input type="text" class="form-control" id="TotalGrade" name="TotalGrade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Percentage</label>
                                <input type="number" class="form-control" id="Percentage" name="Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Sports</label>
                                <input type="text" class="form-control" id="Sports" name="Sports">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Sports grade</label>
                                <input type="text" class="form-control" id="SportsGrade" name="SportsGrade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Sports certificate</label>
                                <input type="text" class="form-control" id="SportsCertificateDetails"
                                    name="SportsCertificateDetails">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Games</label>
                                <input type="text" class="form-control" id="Games" name="Games">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputUsername1">Games grade</label>
                                <input type="text" class="form-control" id="GamesGrade" name="GamesGrade">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputUsername1">Games grade</label>
                                <input type="text" class="form-control" id="GamesCertificateDetails"
                                    name="GamesCertificateDetails">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputUsername1">Cultural</label>
                                <input type="text" class="form-control" id="Cultural" name="Cultural">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Cultural Grade</label>
                                <input type="text" class="form-control" id="CulturalGrade" name="CulturalGrade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Cultural certificate</label>
                                <input type="text" class="form-control" id="CulturalCertificateDetails"
                                    name="CulturalCertificateDetails">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">NCC</label>
                                <input type="text" class="form-control" id="NCC" name="NCC">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Ncc grade</label>
                                <input type="text" class="form-control" id="NCCGrade" name="NCCGrade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Ncc certificate </label>
                                <input type="text" class="form-control" id="NCCCertificateDetails"
                                    name="NCCCertificateDetails">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1"> NSS</label>
                                <input type="text" class="form-control" id="NSS" name="NSS">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1"> NSS Grade </label>
                                <input type="text" class="form-control" id="NSSGrade" name="NSSGrade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">NSS Certificate </label>
                                <input type="text" class="form-control" id="NSSCertificateDetails"
                                    name="NSSCertificateDetails">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Ex Service</label>
                                <input type="text" class="form-control" id="ExService" name="ExService">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Ex Service Grade </label>
                                <input type="text" class="form-control" id="ExServiceGrade" name="ExServiceGrade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Ex Service certificate</label>
                                <input type="text" class="form-control" id="ExServiceCertificateDetails"
                                    name="ExServiceCertificateDetails">
                            </div>
                            <div class="form-group">
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
                                <input type="text" class="form-control" id="HandicappedGrade" name="HandicappedGrade">
                            </div>
                            <div class="form-group" id="HandicappedCertificateDetailsFields" style="display: none;">
                                <label for="HandicappedCertificateDetails">Handicapped Certificate:</label>
                                <input type="text" class="form-control" id="HandicappedCertificateDetails"
                                    name="HandicappedCertificateDetails">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputUsername1">Applicant declaration</label>
                                <input type="text" class="form-control" id="ApplicantDeclaration"
                                    name="ApplicantDeclaration">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Signature of applicant</label>
                                <input type="text" class="form-control" id="ApplicantSignaturePath"
                                    name="ApplicantSignaturePath">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Signature of father</label>
                                <input type="text" class="form-control" id="ParentSignaturePath"
                                    name="ParentSignaturePath">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Time</label>
                                <input type="text" class="form-control" id="ApplicationTime" name="ApplicationTime">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputUsername1">Date</label>
                                <input type="text" class="form-control" id="ApplicationDate" name="ApplicationDate">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Application Place</label>
                                <input type="text" class="form-control" id="ApplicationPlace" name="ApplicationPlace">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" name="newFacBTN"
                                id="newFacBTN">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. Premium <a
                    href="https://www.infinio.co.in/" target="_blank">Infinio Technology Solutions</a> All rights
                reserved.</span>
            <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span> -->
        </div>
    </footer>

    <!-- partial -->
    </div>
    <!-- main-panel ends -->

</body>

</html>