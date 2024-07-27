<?php

// Define the student information
$student_info = [
  [
    "name" => "John Doe",
    "id" => 123456789,
    "company" => "Google",
    "location" => "Mountain View",
    "salary" => 100000,
  ],
  [
    "name" => "Jane Doe",
    "id" => 987654321,
    "company" => "Facebook",
    "location" => "Menlo Park",
    "salary" => 150000,
  ],
];

// Create the webpage
$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
  <title>Placement Details</title>
</head>
<body>
  <h1>Placement Details</h1>
  <table>
    <tr>
      <th>Name</th>
      <th>ID</th>
      <th>Company</th>
      <th>Location</th>
      <th>Salary</th>
    </tr>
    <?php foreach ($student_info as $student) { ?>
      <tr>
        <td><?php echo $student["name"]; ?></td>
        <td><?php echo $student["id"]; ?></td>
        <td><?php echo $student["company"]; ?></td>
        <td><?php echo $student["location"]; ?></td>
        <td><?php echo $student["salary"]; ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
HTML;

// Display the webpage
echo $html;

?>
