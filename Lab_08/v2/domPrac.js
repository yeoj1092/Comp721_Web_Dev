// JavaScript Document

function makeTable() {
	// get a reference to the table element
	var theTable = document.getElementById("tbl");
  
	// Internet Explorer requires rows to be added to a tBody element
	// Internet Explorer automatically creates a tBody element - delete it and then manually create
	if (theTable.firstChild != null) {
	  var badIEBody = theTable.childNodes[0];  
	  theTable.removeChild(badIEBody);
	}
	var tBody = document.createElement("TBODY");
	theTable.appendChild(tBody);
  
	// create a new row element and add cells with content
	var newRow = document.createElement("tr");
	var c1 = document.createElement("td");
	var v1 = document.createTextNode("7308");
	c1.appendChild(v1);
	newRow.appendChild(c1);
	var c2 = document.createElement("td");
	var v2 = document.createTextNode("software engineering");
	c2.appendChild(v2);
	newRow.appendChild(c2);
	tBody.appendChild(newRow);
  
	// create another row element and add cells with content
	newRow = document.createElement("tr");
	c1 = document.createElement("td");
	v1 = document.createTextNode("7003");
	c1.appendChild(v1);
	newRow.appendChild(c1);
	c2 = document.createElement("td");
	v2 = document.createTextNode("Web Development");
	c2.appendChild(v2);
	newRow.appendChild(c2);
	tBody.appendChild(newRow);
  }

function appendRow() {
	// get a reference to the table
	var table = document.getElementById("tbl");
  
	// create a new row element
	var newRow = document.createElement("tr");
  
	// get the values for the new row using prompt()
	var courseCode = prompt("Enter the course code:", "");
	var courseName = prompt("Enter the course name:", "");
  
	// create new td elements and set their text content
	var courseCodeCell = document.createElement("td");
	courseCodeCell.textContent = courseCode;
	var courseNameCell = document.createElement("td");
	courseNameCell.textContent = courseName;
  
	// append the td elements to the new row
	newRow.appendChild(courseCodeCell);
	newRow.appendChild(courseNameCell);
  
	// append the new row to the table
	table.appendChild(newRow);
  
	// add the new class to the row
	newRow.classList.add("new");
  }
