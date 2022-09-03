var selectedRow = null;
var btn = document.querySelector(".button")
btn.addEventListener("click", employdata);


function employdata(){
  var ax = read_Input_Value();
  if (selectedRow == null){
    create_Tr_Td(ax);
    remove_input_value()
  }
  else{   
    updatefunc(ax); 
    remove_input_value(); 
    selectedRow = null;
  }

}

function read_Input_Value(){
  var redemp={} 
  redemp["ename"] = document.querySelector(".empname").value;
  redemp["des"] = document.querySelector(".designation").value;
  redemp["mob"] = document.querySelector(".mobile").value;
  redemp["salary"] = document.querySelector(".empsalary").value;
  return redemp
} // read the values of form


function onEdit(y){
  console.log(y);

  //var selecteventbtn = document.querySelector("a.edt");
    selectedRow = y.parentElement.parentElement;
    //document.querySelector(".empid").value = selectedRow.cells[0].innerHTML;
    document.querySelector(".empname").value = selectedRow.cells[1].innerHTML;
    document.querySelector(".designation").value = selectedRow.cells[2].innerHTML;
     document.querySelector(".mobile").value = selectedRow.cells[3].innerHTML;
    document.querySelector(".empsalary").value = selectedRow.cells[4].innerHTML;
}

function updatefunc(redemp){
  selectedRow.cells[1].innerHTML = redemp.ename;
  selectedRow.cells[2].innerHTML = redemp.des;
  selectedRow.cells[3].innerHTML = redemp.mob;
  selectedRow.cells[4].innerHTML = redemp.salary;
  
} // end of update function

// datatables with api

var t = $('#example').DataTable();
var counter = 1;
fetch("https://5fdb12ee91f19e00173339f5.mockapi.io/employee").then((data)=>{
    return data.json();
}).then((objectData)=>{
    console.log(objectData[0].title);
    objectData.map((values)=>{
    t.row.add([values.id,values.fullname, values.position, values.section,values.status,"<a class='edt' onClick='onEdit(this)'>Edit</a>  / <a class='dlt' onClick='onDelete(this)'>Delete</a>"]).draw(false);
    counter++;
    });
})  


$(document).ready(function() {
    $('#example').dataTable({
        "retrieve": true,
        "lengthChange": false,
        "ordering": false
    });
    });

// end of datatables

// add data in api


  const url = "https://5fdb12ee91f19e00173339f5.mockapi.io/employee";
  const formEl = document.querySelector("form");
  formEl.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(formEl);
    const formDataSerialized = Object.fromEntries(formData);
    const jsonObject = {
      ...formDataSerialized,
    };
    try {
      const response = await fetch(url, {
        method: "POST",
        body: JSON.stringify(jsonObject),
        headers: {
          "Content-Type": "application/json",
        },
      });
      const json = await response.json();
      console.log(json);
      window.location = window.location.href;
    } catch (e) {
      console.error(e);
      alert("there as an error");
    }
  });
