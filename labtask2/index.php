<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dynamic Student Information Processor</title>
<style>
/* ---------- Page Layout ---------- */
body {
  font-family: "Segoe UI", Arial, sans-serif;
  background: linear-gradient(120deg, #c9e5ff, #f2f4ff);
  margin: 0;
  padding: 40px;
  color: #333;
}
h1 {
  text-align: center;
  color: #2d3e50;
  margin-bottom: 30px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ---------- Table Styling ---------- */
table {
  width: 90%;
  margin: auto;
  border-collapse: collapse;
  background: #ffffff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 16px rgba(0,0,0,0.1);
}

/* ---------- Header ---------- */
th {
  background: linear-gradient(90deg, #007bff, #6a5acd);
  color: #fff;
  text-transform: uppercase;
  padding: 12px 10px;
  font-size: 15px;
  letter-spacing: 0.5px;
}

/* ---------- Cells ---------- */
td {
  border: 1px solid #e0e6ef;
  padding: 12px;
  text-align: center;
  font-size: 15px;
}

/* ---------- Alternating Rows ---------- */
tr:nth-child(even) {
  background: #f9fbff;
}
tr:nth-child(odd) {
  background: #ffffff;
}

/* ---------- Hover Effect ---------- */
tr:hover {
  background: #e8f0ff;
  transition: 0.3s ease;
}

/* ---------- Responsive ---------- */
@media (max-width: 768px) {
  table, th, td {
    font-size: 13px;
    padding: 8px;
  }
  h1 {
    font-size: 20px;
  }
}
</style>
</head>
<body>
<h1>Dynamic Student Information Processor</h1>
<table>
<tr>
  <th>Name</th>
  <th>Age</th>
  <th>Marks</th>
  <th>Average</th>
  <th>Status</th>
  <th>Message</th>
</tr>

<?php
function processStudent($s){
  $total = array_sum($s['marks']);
  $avg = $total / count($s['marks']);

  if($avg >= 80) $s['status'] = "Excellent";
  elseif($avg >= 60) $s['status'] = "Good";
  elseif($avg >= 40) $s['status'] = "Pass";
  else $s['status'] = "Fail";

  switch($s['status']){
    case "Excellent": $msg = "Awarded Scholarship"; break;
    case "Good": $msg = "Can Apply for Internship"; break;
    case "Pass": $msg = "Needs Improvement"; break;
    default: $msg = "Repeat Semester";
  }

  echo "<tr>
          <td>{$s['name']}</td>
          <td>{$s['age']}</td>
          <td>".implode(', ', $s['marks'])."</td>
          <td>".number_format($avg,1)."</td>
          <td>{$s['status']}</td>
          <td>$msg</td>
        </tr>";
}

// Students Data
$s1 = ['name'=>'bhoomi','age'=>20,'marks'=>explode(',','78,65,90,55,88')];
$s2 = ['name'=>'Ayesha','age'=>'21 years','marks'=>explode(',','90,85,92,80,88')];
$s2['age'] = (int)$s2['age'];
$s3 = ['name'=>'kajal','age'=>21,'marks'=>explode(',','30,45,28,40,35')];
$students = [$s1, $s2, $s3];

foreach($students as $s) processStudent($s);
?>
</table>
</body>
</html>
