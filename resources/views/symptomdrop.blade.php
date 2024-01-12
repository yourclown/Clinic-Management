<!DOCTYPE html>
<html>

<head>
    <title>Sample Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container-fluid -my-5 justify-content-center">
        <div class="card"></div>
        <input type="text" id="inputField" placeholder="Enter text">
    
    <button onclick="appendToAllTabs()">submit</button>
    
    <div id="tab1" class="tabcontent"></div>
    <div id="tab2" class="tabcontent"></div>
    <div id="tab3" class="tabcontent"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <script>
    const div = document.querySelector('#card');

    function userdata(id) {
        fetch(`https://dummyjson.com/users/${id}`)
            .then((response) => {
                if (!response.ok) {
                    throw new Error("No data matched");
                }
                return response.json();
            })
            .then((user) => {
                console.log(user);
               
            })
            .catch((err) => {
                console.error(err);
            });
    }

    // Call the function with a specific 'id' to fetch user data
    userdata(0); // Replace '1' with the desired user ID
</script> -->


    <!-- <script>
      const request=new Promise((resolve,reject)=>{
        setTimeout(() => {
            // console.log('promise initiated');
            resolve({firstName:"Akit",lastName:"Prasad"});
            // reject("its rejected");
        }, 1000);
    });


    request.then((value)=>{
    console.log(value);

    })
    .catch((err)=>console.log(err))
    .finally(()=>console.log('request completed'))

    console.log(request);


    </script> -->


    <!-- <script>
        var student = {
            name: "ankit",
            age: 10,
            address: {
                city: "jabalpur",
                area: "delta-1",
                pincode: 1234
            }
        };

        for (var prop in student) {
            console.log(student.address["city"]);
        }
        var arr = [1, 2, 3, 4, 5, 6];

        // for (var i in arr){
        // console.log(i);

        var sec = 5;
        var id = setInterval(hello, 1000);

        function hello() {
            console.log(sec);
            sec--;
            {
                if (sec == 0) {
                    clearInterval(id);
                    console.log("times up");
                }
            }
        }
    </script> -->
    <!-- <script>




let filename="ankit";
console.log(filename);

function start(){
    for(let i=1;i<=5;i++){
        setTimeout(function(){
            console.log(i);
        },1000);
    }
    console.log("after");
}
start();

    </script> -->
    <!-- <script>
const john={
    name:"ANkit"
};
function ask(){
    console.log(this)
}
ask.call(john)

    </script> -->
    
 <script>
        function appendToAllTabs() {
            var inputText = document.getElementById("inputField").value;

            for (var i = 1; i <= 3; i++) {
                var tabContent = document.getElementById("tab" + i);

                var paragraph = document.createElement("p");

                paragraph.textContent = inputText;

                tabContent.appendChild(paragraph);
            }
        }
  
    </script>

</body>


</html>
<!-- const card = `<div class="user-card">
                <h3>${data.firstName} </h3>
                <h3>${data.address} </h3>
                <p class="email">${data.email}</p>
                <button class="btn">adasdd</button>
                </div>`;
            div.innerHTML = card; -->
