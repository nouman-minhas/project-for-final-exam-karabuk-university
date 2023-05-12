var rollV, nameV, messageV;

function readFom() {
  rollV = document.getElementById("roll").value;
  nameV = document.getElementById("name").value;
  messageV = document.getElementById("message").value;
  console.log(rollV, nameV, messageV);
}

document.getElementById("insert").onclick = function () {
  readFom();

  firebase
    .database()
    .ref("message/" + rollV)
    .set({
      rollNo: rollV,
      name: nameV,
     
     message:messageV,
    });
  alert("Data Inserted");
  document.getElementById("roll").value = "";
  document.getElementById("name").value = "";
  
  document.getElementById("message").value = "";
};

document.getElementById("read").onclick = function () {
  readFom();

  firebase
    .database()
    .ref("message/" + rollV)
    .on("value", function (snap) {
      document.getElementById("roll").value = snap.val().rollNo;
      document.getElementById("name").value = snap.val().name;
      
      document.getElementById("message").value = snap.val().message;
    });
};

document.getElementById("update").onclick = function () {
  readFom();

  firebase
    .database()
    .ref("message/" + rollV)
    .update({
 
      name: nameV,
 
      message: messageV,
    });
  alert("Data Update");
  document.getElementById("roll").value = "";
  document.getElementById("name").value = "";

  document.getElementById("message").value = "";
};
document.getElementById("delete").onclick = function () {
  readFom();

  firebase
    .database()
    .ref("message/" + rollV)
    .remove();
  alert("Data Deleted");
  document.getElementById("roll").value = "";
  document.getElementById("name").value = "";

  document.getElementById("message").value = "";
};