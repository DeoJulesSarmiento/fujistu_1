fetch("https://5fdb12ee91f19e00173339f5.mockapi.io/employee").then((data)=>{
    return data.json();
}).then((objectData)=>{
    console.log(objectData[0].title);
    let tableData ="";
    objectData.map((values)=>{
        tableData+=`   <tr>
        <td>${values.id}</td>
        <td>${values.fullname}</td>
        <td>${values.position}</td>
        <td>${values.section}</td>
        <td>${values.status}</td>

      </tr>`;
    });
    document.getElementById("table_body").
    innerHTML=tableData;
})  

$(document).ready(function() {
    $('#example').dataTable({
     
        "lengthChange": false,
        "ordering": false
    });
    });


