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

    <link rel="stylesheet" type="text/css" href="../css_template/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css_template/animate.css" />
    <link rel="stylesheet" type="text/css" href="../css_template/fontello.css" />
    <link rel="stylesheet" type="text/css" href="../css_template/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="../css_template/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="../css_template/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="../css_template/slick.css">
    <link rel="stylesheet" type="text/css" href="../css_template/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="../css_template/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="../css_template/main.css" />
    <link rel="stylesheet" type="text/css" href="../css_template/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="../css_template/responsive.css" />


    <title>Admission Application</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
<center><h1>Application No : <?php echo htmlentities($userArr[0]->ApplicationNumber); ?></h1></center>

    <div class="container">
        <table border="1">
            <tr>
                <th>Candidate  Name</td>
                <th><?php echo htmlentities($userArr[0]->CandidateName); ?></td>
            </tr>
            <tr>
                <td>Application Number</td>
                <td><?php echo htmlentities($userArr[0]->ApplicationNumber); ?></td>
            </tr>
            <tr>
                <td>Registration Number</td>
                <td><?php echo htmlentities($userArr[0]->RegistrationNumber); ?></td>
            </tr>
            <tr>
                <td>University Cap Number</td>
                <td><?php echo htmlentities($userArr[0]->UniversityCapNumber); ?></td>
            </tr>
            <tr>
                <td>Program Name</td>
                <td><?php echo htmlentities($userArr[0]->ProgramName); ?></td>
            </tr>
            <tr>
                <td>Expansion of Initial</td>
                <td><?php echo htmlentities($userArr[0]->ExpansionOfInitial); ?></td>
            </tr>
            <tr>
                <td>Sex</td>
                <td><?php echo htmlentities($userArr[0]->Sex); ?></td>
            </tr>
            <tr>
                <td>Married</td>
                <td><?php echo htmlentities($userArr[0]->Married); ?></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><?php echo htmlentities($userArr[0]->Age); ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo htmlentities($userArr[0]->DateOfBirth); ?></td>
            </tr>
            <tr>
                <td>Religion</td>
                <td><?php echo htmlentities($userArr[0]->Religion); ?></td>
            </tr>
            <tr>
                <td>Caste</td>
                <td><?php echo htmlentities($userArr[0]->Caste); ?></td>
            </tr>
            <tr>
                <td>Caste Type</td>
                <td><?php echo htmlentities($userArr[0]->Casttype); ?></td>
            </tr>
            <tr>
                <td>Nationality</td>
                <td><?php echo htmlentities($userArr[0]->Nationality); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo htmlentities($userArr[0]->State); ?></td>
            </tr>
            <tr>
                <td>District</td>
                <td><?php echo htmlentities($userArr[0]->District); ?></td>
            </tr>
            <tr>
                <td>Taluk</td>
                <td><?php echo htmlentities($userArr[0]->Taluk); ?></td>
            </tr>
            <tr>
                <td>Village</td>
                <td><?php echo htmlentities($userArr[0]->Village); ?></td>
            </tr>
            <tr>
                <td>Panchayat</td>
                <td><?php echo htmlentities($userArr[0]->Panchayat); ?></td>
            </tr>
            <tr>
                <td>Municipality</td>
                <td><?php echo htmlentities($userArr[0]->Municipality); ?></td>
            </tr>
            <tr>
                <td>Corporation</td>
                <td><?php echo htmlentities($userArr[0]->Corporation); ?></td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td><?php echo htmlentities($userArr[0]->FatherName); ?></td>
            </tr>
            <tr>
                <td>Mother's Name</td>
                <td><?php echo htmlentities($userArr[0]->MotherName); ?></td>
            </tr>
            <tr>
                <td>Father's Occupation</td>
                <td><?php echo htmlentities($userArr[0]->FatherOccupation); ?></td>
            </tr>
            <tr>
                <td>Mother's Occupation</td>
                <td><?php echo htmlentities($userArr[0]->MotherOccupation); ?></td>
            </tr>
            <tr>
                <td>Guardian's Name </td>
                <td><?php echo htmlentities($userArr[0]->GuardianName); ?></td>
            </tr>
            <tr>
                <td>Father's annual income</td>
                <td><?php echo htmlentities($userArr[0]->fatherannual); ?></td>
            </tr>
            <tr>
                <td>Mother's annual  income</td>
                <td><?php echo htmlentities($userArr[0]->motherannual); ?></td>
            </tr>
            <tr>
                <td>Guardian's annual income</td>
                <td><?php echo htmlentities($userArr[0]->guardianannual); ?></td>
            </tr>
            <tr>
                <td>SSLC month & year</td>
                <td><?php echo htmlentities($userArr[0]->sslcmonthandyear); ?></td>
            </tr>
            <tr>
                <td>Permanent Address </td>
                <td><?php echo htmlentities($userArr[0]->PermanentAddress); ?></td>
            </tr>
            <tr>
                <td>Communication Address</td>
                <td><?php echo htmlentities($userArr[0]->CommunicationAddress); ?></td>
            </tr>
            <tr>
                <td>Father's Phone Number</td>
                <td><?php echo htmlentities($userArr[0]->FatherPhoneNumber); ?></td>
            </tr>
            <tr>
                <td>Mother's Phone Number</td>
                <td><?php echo htmlentities($userArr[0]->MotherPhoneNumber); ?></td>
            </tr>
            <tr>
                <td>Applicant's Phone Number</td>
                <td><?php echo htmlentities($userArr[0]->ApplicantPhoneNumber); ?></td>
            </tr>
            <tr>
                <td>Guardian's Phone Number </td>
                <td><?php echo htmlentities($userArr[0]->GuardianPhoneNumber); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo htmlentities($userArr[0]->Email); ?></td>
            </tr>
            <tr>
                <td>Aadhaar Number</td>
                <td><?php echo htmlentities($userArr[0]->AadhaarNumber); ?></td>
            </tr>
            <tr>
                <td>Election ID </td>
                <td><?php echo htmlentities($userArr[0]->ElectionID); ?></td>
            </tr>
            <tr>
                <td>Account Number</td>
                <td><?php echo htmlentities($userArr[0]->AccountNumber); ?></td>
            </tr>
            <tr>
                <td>Bank Branch</td>
                <td><?php echo htmlentities($userArr[0]->BankBranch); ?></td>
            </tr>
            <tr>
                <td>Branch Code</td>
                <td><?php echo htmlentities($userArr[0]->BranchCode); ?></td>
            </tr>
            <tr>
                <td>MICR</td>
                <td><?php echo htmlentities($userArr[0]->MICR); ?></td>
            </tr>
            <tr>
                <td>IFSC</td>
                <td><?php echo htmlentities($userArr[0]->IFSC); ?></td>
            </tr>
            <tr>
                <td>SSLC Exam Name</td>
                <td><?php echo htmlentities($userArr[0]->SSLCExamName); ?></td>
            </tr>
            <tr>
                <td>SSLC Register Number</td>
                <td><?php echo htmlentities($userArr[0]->SSLCRegisterNumber); ?></td>
            </tr>
            <tr>
                <td>SSLC School Name</td>
                <td><?php echo htmlentities($userArr[0]->SSLCSchoolName); ?></td>
            </tr>
            <tr>
                <td>Qualifying Exam Name</td>
                <td><?php echo htmlentities($userArr[0]->QualifyingExamName); ?></td>
            </tr>
            <tr>
                <td>Qualifying Exam University</td>
                <td><?php echo htmlentities($userArr[0]->QualifyingExamUniversity); ?></td>
            </tr>
            <tr>
                <td>Qualifying Exam Passout Month & Year</td>
                <td><?php echo htmlentities($userArr[0]->QualifyingExamPassoutMonthYear); ?></td>
            </tr>
            <tr>
                <td>TC & CC Issue Date</td>
                <td><?php echo htmlentities($userArr[0]->TCAndCCIssueDate); ?></td>
            </tr>
            <tr>
                <td>TC & CC Institution Name</td>
                <td><?php echo htmlentities($userArr[0]->TCAndCCInstitutionName); ?></td>
            </tr>
            <tr>
                <td>TC & CC Period</td>
                <td><?php echo htmlentities($userArr[0]->TCAndCCPeriod); ?></td>
            </tr>
            <tr>
                <td>Applying Quota</td>
                <td><?php echo htmlentities($userArr[0]->ApplyingQuota); ?></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><?php echo htmlentities($userArr[0]->Category); ?></td>
            </tr>
            <tr>
                <td>Reservation</td>
                <td><?php echo htmlentities($userArr[0]->Reservation); ?></td>
            </tr>
            <tr>
                <td>Index Mark</td>
                <td><?php echo htmlentities($userArr[0]->IndexMark); ?></td>
            </tr>
            <tr>
                <td>Rank Position</td>
                <td><?php echo htmlentities($userArr[0]->RankPosition); ?></td>
            </tr>
            <tr>
                <td>Qualifying Exam Board</td>
                <td><?php echo htmlentities($userArr[0]->QualifyingExamBoard); ?></td>
            </tr>
            <tr>
                <td>Qualifying Exam Register Number</td>
                <td><?php echo htmlentities($userArr[0]->QualifyingExamRegisterNumber); ?></td>
            </tr>
            <tr>
                <td>Qualifying Exam Passing Month Year</td>
                <td><?php echo htmlentities($userArr[0]->QualifyingExamPassingMonthYear); ?></td>
            </tr>
            <tr>
                <td>Number Of Chances</td>
                <td><?php echo htmlentities($userArr[0]->NumberOfChances); ?></td>
            </tr>
            <tr>
                <td>Subject1 Name</td>
                <td><?php echo htmlentities($userArr[0]->Subject1Name); ?></td>
            </tr>
            <tr>
                <td>Subject1 Marks</td>
                <td><?php echo htmlentities($userArr[0]->Subject1Marks); ?></td>
            </tr>
            <tr>
                <td>Subject1 Grade</td>
                <td><?php echo htmlentities($userArr[0]->Subject1Grade); ?></td>
            </tr>
            <tr>
                <td>Subject2 Name</td>
                <td><?php echo htmlentities($userArr[0]->Subject2Name); ?></td>
            </tr> 
            <tr>
                <td>Subject2 Marks</td>
                <td><?php echo htmlentities($userArr[0]->Subject2Marks); ?></td>
            </tr>
            <tr>
                <td>Subject2 Grade</td>
                <td><?php echo htmlentities($userArr[0]->Subject2Grade); ?></td>
            </tr>
            <tr>
                <td>Subject3 Name</td>
                <td><?php echo htmlentities($userArr[0]->Subject3Name); ?></td>
            </tr>
            <tr>
                <td>Subject3 Marks</td>
                <td><?php echo htmlentities($userArr[0]->Subject3Marks); ?></td>
            </tr>
            <tr>
                <td>Subject3 Grade</td>
                <td><?php echo htmlentities($userArr[0]->Subject3Grade); ?></td>
            </tr>
            <tr>
                <td>Subject4 Name</td>
                <td><?php echo htmlentities($userArr[0]->Subject4Name); ?></td>
            </tr>
            <tr>
                <td>Subject4 Marks</td>
                <td><?php echo htmlentities($userArr[0]->Subject4Marks); ?></td>
            </tr>
            <tr>
                <td>Subject4 Grade</td>
                <td><?php echo htmlentities($userArr[0]->Subject4Grade); ?></td>
            </tr>
            <tr>
                <td>Subject5 Name</td>
                <td><?php echo htmlentities($userArr[0]->Subject5Name); ?></td>
            </tr>
            <tr>
                <td>Subject5 Marks</td>
                <td><?php echo htmlentities($userArr[0]->Subject5Marks); ?></td>
            </tr>
            <tr>
                <td>Subject5 Grade</td>
                <td><?php echo htmlentities($userArr[0]->Subject5Grade); ?></td>
            </tr>
            <tr>
                <td>Subject6 Name</td>
                <td><?php echo htmlentities($userArr[0]->Subject6Name); ?></td>
            </tr>
            <tr>
                <td>Subject6 Marks</td>
                <td><?php echo htmlentities($userArr[0]->Subject6Marks); ?></td>
            </tr>
            <tr>
                <td>Subject6 Grade</td>
                <td><?php echo htmlentities($userArr[0]->Subject6Grade); ?></td>
            </tr>

            <tr>
                <td>Total Marks</td>
                <td><?php echo htmlentities($userArr[0]->TotalMarks); ?></td>
            </tr>
            <tr>
                <td>Total Grade</td>
                <td><?php echo htmlentities($userArr[0]->TotalGrade); ?></td>
            </tr>
            <tr>
                <td>Percentage</td>
                <td><?php echo htmlentities($userArr[0]->Percentage); ?></td>
            </tr>
            <tr>
                <td>Sports</td>
                <td><?php echo htmlentities($userArr[0]->Sports); ?></td>
            </tr>
            <tr>
                <td>Sports Grade</td>
                <td><?php echo htmlentities($userArr[0]->SportsGrade); ?></td>
            </tr>
            <tr>
                <td>Games</td>
                <td><?php echo htmlentities($userArr[0]->Games); ?></td>
            </tr>
            <tr>
                <td>Games Grade</td>
                <td><?php echo htmlentities($userArr[0]->GamesGrade); ?></td>
            </tr>
            <tr>
                <td>Cultural</td>
                <td><?php echo htmlentities($userArr[0]->Cultural); ?></td>
            </tr>
            <tr>
                <td>Cultural Grade</td>
                <td><?php echo htmlentities($userArr[0]->CulturalGrade); ?></td>
            </tr>
            <tr>
                <td>NCC</td>
                <td><?php echo htmlentities($userArr[0]->NCC); ?></td>
            </tr>
            <tr>
                <td>NCC Grade</td>
                <td><?php echo htmlentities($userArr[0]->NCCGrade); ?></td>
            </tr>
            <tr>
                <td>NSS</td>
                <td><?php echo htmlentities($userArr[0]->NSS); ?></td>
            </tr>
            <tr>
                <td>NSS Grade</td>
                <td><?php echo htmlentities($userArr[0]->NSSGrade); ?></td>
            </tr>

            <tr>
                <td>Ex Service</td>
                <td><?php echo htmlentities($userArr[0]->ExService); ?></td>
            </tr>
            <tr>
                <td>Ex Service Grade</td>
                <td><?php echo htmlentities($userArr[0]->ExServiceGrade); ?></td>
            </tr>
            <tr>
                <td>Handicapped</td>
                <td><?php echo htmlentities($userArr[0]->Handicapped); ?></td>
            </tr>
            <tr>
                <td>Handicapped Grade</td>
                <td><?php echo htmlentities($userArr[0]->HandicappedGrade); ?></td>
            </tr>

        </table>
    </div>

    <button id="downloadBtn" style="position: absolute; top: 20px; right: 250px; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Download as PDF</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <script>
        document.getElementById('downloadBtn').addEventListener('click', function () {
            document.getElementById('downloadBtn').style.display = 'none';
            const element = document.body;
            const options = {
                margin: 0.5,
                filename: 'admission_application.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            // Start the PDF conversion
            html2pdf().from(element).set(options).save()
                .then(() => {
                    // Show the download button again after PDF generation
                    document.getElementById('downloadBtn').style.display = 'block';
                });
        });
    </script>
</body>
</html>
