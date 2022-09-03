<?php if(isset($_POST['btn_submit']))
{
    $obj->insertEmployee($_POST);
} // insert data employee

if(isset($_POST['btn_update']))
{
    $obj->updateEmployee($_POST);
} // update data employee

if(isset($_GET['deleteid'])){
    $delid = $_GET['deleteid'];
    $obj->deleteRecord($delid);
}


$data = $obj->displayRecord();

if(isset($_GET['editId']))
{
    $editId = $_GET['editId'];
    $rec = $obj->displayRecordById($editId);

} // get the employee  id