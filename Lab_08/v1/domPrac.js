// JavaScript Document

function makeTable() {
  var theTable = document.getElementById("tbl");
  //IE requires rows to be added to a tBody element
  //IE automatically creates a tBody element - delete it and then manually create
  if (theTable.firstChild != null) {
    var badIEBody = theTable.childNodes[0];
    theTable.removeChild(badIEBody);
  }
  var tBody = document.createElement("TBODY");
  theTable.appendChild(tBody);

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
  //user inputs
  var code = prompt("Please input a code");
  var name = prompt("Please enter a name");

  //table
  var theTable = document.getElementById("tbl");

  //different ways of creating a table body
  var tBody = theTable.childNodes[0]; // returns element nodes, text nodes, comment nodes
  //var tBody = theTable.children[0];  // returns non text and comment nodes
  //var tBody = document.createElement("TBODY"); //example from above
  //theTable.appendChild(tBody);

  newRow = document.createElement("tr");

  //code column
  c1 = document.createElement("td");
  v1 = document.createTextNode(code);
  c1.appendChild(v1);
  newRow.appendChild(c1);
  //name column
  c2 = document.createElement("td");
  v2 = document.createTextNode(name);
  c2.appendChild(v2);
  newRow.appendChild(c2);
  newRow.bgColor = "aqua"; // background color
  tBody.appendChild(newRow);
}
