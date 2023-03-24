function validate() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var number = document.getElementById("number").value;
    var address = document.getElementById("address").value;
  
    if (
      name == "" ||
      email == "" ||
      number == "" ||
      address == ""
    ) {
      alert("Please fill all the fields");
      return false;
    }  
  
  else if (
      email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/) == null
    ) {
      alert("Please enter a valid email");
      return false;
    } 
  
      
    else if (isNaN(number) || number.length != 10) {
      alert("Please enter a valid number of length 10 ");
      return false;
    }
    
    else return selectvalidate();
}
  
  
 
    function selectvalidate() {
        var gender = document.getElementById("gender");
        var Gclass = document.getElementById("class");

        if (gender.selectedIndex === 0)  {
          alert("Please select Gender");
          return false;
        } else if ( Gclass.selectedIndex === 0) {
            alert("Please select Class");
            return false;
        }

        else return true;
      }



      function confirmupdate()
{
  return confirm('Are you sure you want to update the record ?');  
}



function searchidvalidate()
{
    var id = document.getElementById("id").value;
    if (id == "") {
        alert("Please enter a search ID");
        return false;
      }
  
}


function deletedata()
{
    var id = document.getElementById("id").value;
    if (id == "") {
        alert("Please enter a search ID");
        return false;
      }

else {
  return confirm('Are you sure you want to delete the record ?');  
}
}


    
