<?php

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Get form data
$admission_type = $_POST["admission_type"];
$name = $_POST["name"];
$father_name = $_POST["father_name"];
$grandfather_name = $_POST["grandfather_name"];
$sex = $_POST["sex"];
$nationality = $_POST["nationality"];
$place_of_birth_town = $_POST["place_of_birth_town"];
$place_of_birth_reigon = $_POST["place_of_birth_reigon"];
$place_of_birth_country = $_POST["place_of_birth_country"];
$date_of_birth = $_POST["date_of_birth"];
$house_no = $_POST["house_no"];
$kebele = $_POST["kebele"];
$sub_city = $_POST["sub_city"];
$town = $_POST["town"];
$region = $_POST["region"];
$mailing_address = $_POST["mailing_address"];
$mobile = $_POST["mobile"];
$marital_status = $_POST["marital_status"];
$emergency_contact_name = $_POST["emergency_contact_name"];
$emergency_contact_relationship = $_POST["emergency_contact_relationship"];
$emergency_contact_mobile = $_POST["emergency_contact_mobile"];
$emergency_contact_house_no = $_POST["emergency_contact_house_no"];
$emergency_contact_kebele = $_POST["emergency_contact_kebele"];
$emergency_contact_sub_city = $_POST["emergency_contact_sub_city"];
$emergency_contact_region = $_POST["emergency_contact_region"];
$father_occupation = $_POST["father_occupation"];
$father_education = $_POST["father_education"];
$father_address = $_POST["father_address"];
$mother_name = $_POST["mother_name"];
$mother_occupation = $_POST["mother_occupation"];
$mother_education = $_POST["mother_education"];
$mother_address = $_POST["mother_address"];
$school_name = $_POST["school_name"];
$town_school = $_POST["town_school"];
$years_attended = $_POST["years_attended"];
$last_grade_completed = $_POST["last_grade_completed"];
$math_registration_no = $_POST["math_registration_no"];
$math_exam_year = $_POST["math_exam_year"];
$math_grade_mark = $_POST["math_grade_mark"];
$math_exam_center = $_POST["math_exam_center"];
$english_registration_no = $_POST["english_registration_no"];
$english_exam_year = $_POST["english_exam_year"];
$english_grade_mark = $_POST["english_grade_mark"];
$english_exam_center = $_POST["english_exam_center"];
$course3_name = $_POST["course3_name"];
$course3_registration_no = $_POST["course3_registration_no"];
$course3_exam_year = $_POST["course3_exam_year"];
$course3_grade_mark = $_POST["course3_grade_mark"];
$course3_exam_center = $_POST["course3_exam_center"];
$course4_name = $_POST["course4_name"];
$course4_registration_no = $_POST["course4_registration_no"];
$course4_exam_year = $_POST["course4_exam_year"];
$course4_grade_mark = $_POST["course4_grade_mark"];
$course4_exam_center = $_POST["course4_exam_center"];
$course5_name = $_POST["course5_name"];
$course5_registration_no = $_POST["course5_registration_no"];
$course5_exam_year = $_POST["course5_exam_year"];
$course5_grade_mark = $_POST["course5_grade_mark"];
$course5_exam_center = $_POST["course5_exam_center"];
$course6_name = $_POST["course6_name"];
$course6_registration_no = $_POST["course6_registration_no"];
$course6_exam_year = $_POST["course6_exam_year"];
$course6_grade_mark = $_POST["course6_grade_mark"];
$course6_exam_center = $_POST["course6_exam_center"];
$course7_name = $_POST["course7_name"];
$course7_registration_no = $_POST["course7_registration_no"];
$course7_exam_year = $_POST["course7_exam_year"];
$course7_grade_mark = $_POST["course7_grade_mark"];
$course7_exam_center = $_POST["course7_exam_center"];
$gpa = $_POST["gpa"];
$employment_status = $_POST["employment_status"];
$employer = $_POST["employer"];
$job_type = $_POST["job_type"];
$mailing_address_employer = $_POST["mailing_address_employer"];
$telephone_employer = $_POST["telephone_employer"];
$previous_employment = $_POST["previous_employment"];
$previous_job_type = $_POST["previous_job_type"];
$previous_employer = $_POST["previous_employer"];
$telephone_previous_employer = $_POST["telephone_previous_employer"];
$service_years_from = $_POST["service_years_from"];
$service_years_to = $_POST["service_years_to"];
$field_of_study = $_POST["field_of_study"];
$applicant_signature = $_POST["applicant_signature"];

// Load Dompdf
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsHtml5ParserEnabled(true);

$dompdf = new Dompdf($options);
$dompdf->setPaper("A4", "portrait"); // Set paper size and orientation

// Load HTML template
$html = file_get_contents("template.html");

// Replace placeholders in the HTML with form data
$html = str_replace(
    [
        "{{ admission_type }}",
        "{{ name }}",
        "{{ father_name }}",
        "{{ grandfather_name }}",
        "{{ sex }}",
        "{{ nationality }}",
        "{{ place_of_birth_town }}",
        "{{ place_of_birth_reigon }}",
        "{{ place_of_birth_country }}",
        "{{ date_of_birth }}",
        "{{ house_no }}",
        "{{ kebele }}",
        "{{ sub_city }}",
        "{{ town }}",
        "{{ region }}",
        "{{ mailing_address }}",
        "{{ mobile }}",
        "{{ marital_status }}",
        "{{ emergency_contact_name }}",
        "{{ emergency_contact_relationship }}",
        "{{ emergency_contact_mobile }}",
        "{{ emergency_contact_house_no }}",
        "{{ emergency_contact_kebele }}",
        "{{ emergency_contact_sub_city }}",
        "{{ emergency_contact_region }}",
        "{{ father_occupation }}",
        "{{ father_education }}",
        "{{ father_address }}",
        "{{ mother_name }}",
        "{{ mother_occupation }}",
        "{{ mother_education }}",
        "{{ mother_address }}",
        "{{ school_name }}",
        "{{ town_school }}",
        "{{ years_attended }}",
        "{{ last_grade_completed }}",
        "{{ math_registration_no }}",
        "{{ math_exam_year }}",
        "{{ math_grade_mark }}",
        "{{ math_exam_center }}",
        "{{ english_registration_no }}",
        "{{ english_exam_year }}",
        "{{ english_grade_mark }}",
        "{{ english_exam_center }}",
        "{{ course3_name }}",
        "{{ course3_registration_no }}",
        "{{ course3_exam_year }}",
        "{{ course3_grade_mark }}",
        "{{ course3_exam_center }}",
        "{{ course4_name }}",
        "{{ course4_registration_no }}",
        "{{ course4_exam_year }}",
        "{{ course4_grade_mark }}",
        "{{ course4_exam_center }}",
        "{{ course5_name }}",
        "{{ course5_registration_no }}",
        "{{ course5_exam_year }}",
        "{{ course5_grade_mark }}",
        "{{ course5_exam_center }}",
        "{{ course6_name }}",
        "{{ course6_registration_no }}",
        "{{ course6_exam_year }}",
        "{{ course6_grade_mark }}",
        "{{ course6_exam_center }}",
        "{{ course7_name }}",
        "{{ course7_registration_no }}",
        "{{ course7_exam_year }}",
        "{{ course7_grade_mark }}",
        "{{ course7_exam_center }}",
        "{{ gpa }}",
        "{{ employment_status }}",
        "{{ employer }}",
        "{{ job_type }}",
        "{{ mailing_address_employer }}",
        "{{ telephone_employer }}",
        "{{ previous_employment }}",
        "{{ previous_job_type }}",
        "{{ previous_employer }}",
        "{{ telephone_previous_employer }}",
        "{{ service_years_from }}",
        "{{ service_years_to }}",
        "{{ field_of_study }}",
        "{{ applicant_signature }}",
    ],
    [
        $admission_type,
        $name,
        $father_name,
        $grandfather_name,
        $sex,
        $nationality,
        $place_of_birth_town,
        $place_of_birth_reigon,
        $place_of_birth_country,
        $date_of_birth,
        $house_no,
        $kebele,
        $sub_city,
        $town,
        $region,
        $mailing_address,
        $mobile,
        $marital_status,
        $emergency_contact_name,
        $emergency_contact_relationship,
        $emergency_contact_mobile,
        $emergency_contact_house_no,
        $emergency_contact_kebele,
        $emergency_contact_sub_city,
        $emergency_contact_region,
        $father_occupation,
        $father_education,
        $father_address,
        $mother_name,
        $mother_occupation,
        $mother_education,
        $mother_address,
        $school_name,
        $town_school,
        $years_attended,
        $last_grade_completed,
        $math_registration_no,
        $math_exam_year,
        $math_grade_mark,
        $math_exam_center,
        $english_registration_no,
        $english_exam_year,
        $english_grade_mark,
        $english_exam_center,
        $course3_name,
        $course3_registration_no,
        $course3_exam_year,
        $course3_grade_mark,
        $course3_exam_center,
        $course4_name,
        $course4_registration_no,
        $course4_exam_year,
        $course4_grade_mark,
        $course4_exam_center,
        $course5_name,
        $course5_registration_no,
        $course5_exam_year,
        $course5_grade_mark,
        $course5_exam_center,
        $course6_name,
        $course6_registration_no,
        $course6_exam_year,
        $course6_grade_mark,
        $course6_exam_center,
        $course7_name,
        $course7_registration_no,
        $course7_exam_year,
        $course7_grade_mark,
        $course7_exam_center,
        $gpa,
        $employment_status,
        $employer,
        $job_type,
        $mailing_address_employer,
        $telephone_employer,
        $previous_employment,
        $previous_job_type,
        $previous_employer,
        $telephone_previous_employer,
        $service_years_from,
        $service_years_to,
        $field_of_study,
        $applicant_signature,
    ],
    $html
);

$dompdf->loadHtml($html);

$dompdf->render();

// Generate a unique identifier
$uniqueId = uniqid();

// Create a filename using the provided name and the unique identifier
$filename = $name . "_" . $uniqueId . ".pdf";

// Save the PDF file locally
$output = $dompdf->output();
if (file_put_contents($filename, $output)) {
    // Save successful

    // Send email with attachment using PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.gurshadigitals.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mail@gurshadigitals.com';
        $mail->Password = 'o=B?4CkI9*g7'; // Replace with your actual email account password
        $mail->SMTPSecure = 'ssl'; // Use SSL encryption
        $mail->Port = 465; // SMTP port for SSL
        //Recipients
        $mail->setFrom('mail@gurshadigitals.com', 'Nile side admission');
        $mail->addAddress('leulzergaw6@gmail.com'); // Add a recipient

        // Attach PDF file
        $mail->addAttachment($filename, $filename.'Admission_Form.pdf');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Admission Form Submission';
        $mail->Body    = 'Please find the attached Admission Form.';
        $mail->AltBody = 'Please find the attached Admission Form.';

        $mail->send();

        echo "<script>
            // Create a success message div
            var successDiv = document.createElement('div');
            successDiv.innerHTML = 'Form successfully submitted!';
            successDiv.style.backgroundColor = '#4CAF50'; // Green background color
            successDiv.style.color = 'white';
            successDiv.style.padding = '10px';
            successDiv.style.position = 'fixed';
            successDiv.style.top = '0';
            successDiv.style.left = '50%';
            successDiv.style.transform = 'translateX(-50%)';
            successDiv.style.zIndex = '1000';

            // Append the div to the body
            document.body.appendChild(successDiv);

            // Set a timeout to remove the div after 5 seconds
            setTimeout(function () {
                successDiv.style.display = 'none';
            }, 5000);
          </script>";
    } catch (Exception $e) {
        echo "<script>alert('Failed to send email. Error: " . $mail->ErrorInfo . "');</script>";
    }
} else {
    // Save failed
    echo "<script>alert('Failed to save PDF.');</script>";
}

// Output the PDF to the browser
// header("Content-type: application/pdf");
// header("Content-Disposition: inline; filename='" . $filename . "'");
// echo $output;
?>
