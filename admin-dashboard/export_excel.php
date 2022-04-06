<!-- There's few method to export excel
The first are most preferable one -->
<?php
include "../create_conn.php";

$sql = "SELECT * FROM report";

$conn->set_charset("utf8");
$result =  $conn->query($sql);
$fields = mysqli_num_fields($result);
$col_title="";
$data="";
for ($i = 0; $i < $fields; $i++) {
    $col_title .= '<Cell ss:StyleID="2"><Data ss:Type="String">'.mysqli_fetch_field_direct($result, $i)->name.'</Data></Cell>';
}

$col_title = '<Row>'.$col_title.'</Row>';

while($row = mysqli_fetch_row($result)) {
    $line = '';
    foreach($row as $value) {
        if ((!isset($value)) OR ($value == "")) {
            $value = '<Cell ss:StyleID="1"><Data ss:Type="String"></Data></Cell>\t';
        } else {
            $value = str_replace('"', '', $value);
            $value = '<Cell ss:StyleID="1"><Data ss:Type="String">' . $value . '</Data></Cell>\t';
        }
        $line .= $value;
    }
    $data .= trim("<Row>".$line."</Row>")."\n";
}

$data = str_replace("\r","",$data);
$fileName = "report-list_" . date('Y-m-d') . ".xls"; 

header("Content-Type: application/vnd.ms-excel;");
header("Content-Disposition: attachment; filename=\"$fileName\""); 
header("Pragma: no-cache");
header("Expires: 0");

$xls_header = '<?xml version="1.0" encoding="utf-8"?>
<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet" xmlns:html="http://www.w3.org/TR/REC-html40">
<DocumentProperties xmlns="urn:schemas-microsoft-com:office:office">
<Author></Author>
<LastAuthor></LastAuthor>
<Company></Company>
</DocumentProperties>
<Styles>
<Style ss:ID="1">
<Alignment ss:Horizontal="Left"/>
</Style>
<Style ss:ID="2">
<Alignment ss:Horizontal="Left"/>
<Font ss:Bold="1"/>
</Style>
</Styles>
<Worksheet ss:Name="Export">
<Table>';

$xls_footer = '</Table>
<WorksheetOptions xmlns="urn:schemas-microsoft-com:office:excel">
<Selected/>
<FreezePanes/>
<FrozenNoSplit/>
<SplitHorizontal>1</SplitHorizontal>
<TopRowBottomPane>1</TopRowBottomPane>
</WorksheetOptions>
</Worksheet>
</Workbook>';

print $xls_header.$col_title.$data.$xls_footer;
exit;
?>


<!-- This method left as references -->
<?php 
/*
// Load the database configuration file 
include "../create_conn.php";
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "report-list_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('REPORT_ID', 'USER_NAME', 'USER_MATRIC', 'USER_SCHOOL', 'USER_EMAIL', 'DATE_RECEIVED', 'DATE_RESOLVED', 'report_title', 'REPORT_CONTENT', 'Status'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$sql = "SELECT * FROM report";
$result =  $conn->query($sql);
if(mysqli_num_rows($result) > 0) { 
    // Output each row of the data 
    while($row=$result->fetch_assoc()) { 
        $resolved = ($row['resolved'] == 1)?'Resolved':'Unsolved'; 
        $lineData = array($row['REPORT_ID'], $row['USER_NAME'], $row['USER_MATRIC'], $row['USER_SCHOOL'], $row['USER_EMAIL'], $row['DATE_RECEIVED'], $row['DATE_RESOLVED'],  $row['report_title'],  $row['REPORT_CONTENT'], $resolved); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;
*/
?>