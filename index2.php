<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Orientational Guide</title>
</head>
<body class="p-3 mb-2 bg-light text-dark">
    <form action="./includes/form2.php?user_id=<?php echo $_GET["user_id"]?>&id=<?php echo $_GET["id"]?>" method="POST" class="col-md-6 py-5 card card-body mb-3 mx-auto">
         <div class="container col-md-6 ">
            <div class="justify-content-between align-items-center"></div>
         </div>
         <div class="d-flex justify-content-center">
         <input type="submit" value="Next" class="mt-4 btn btn-outline-primary w-50">
        </div> 

    </form>
    <script>
        window.addEventListener("load", loadText);
        function loadText(){
            const url = new URL(window.location.href);
            const id = url.searchParams.get("id");
            const user_id = url.searchParams.get("user_id");
            fetch(`http://localhost/finalProject/Final_Project/includes/form.php?id=${id}`)
            .then(response => response.json())
            .then(response => {
               const arr = document.getElementsByClassName("container")[0]
               const arr3 =["a0", "a1", "a2", "a3"];
               let i = 0;
               let j = 0;
               for(let res of response){
               const div = document.createElement("div")
               const p = document.createElement("p")
               const inputHidden = document.createElement("input")
               inputHidden.type="hidden"
               inputHidden.value = res.id
               inputHidden.name = arr3[i]
               i++;
               div.appendChild(inputHidden)
               p.innerText = res.question
               div.appendChild(p)
               arr.appendChild(div)
               const arr2 =["Q0","Q1","Q2","Q3"];
               for(let rad =0;rad<4;rad++){
                const span = document.createElement("span")
                const input = document.createElement("input")
                input.type="radio"
                input.className = "mx-2"
                input.value = rad + 1;
                input.name = arr2[j]
                span.innerHTML = rad + 1;
                div.appendChild(input)
                div.appendChild(span)
               }
               j++;
               }
            })
        }
    </script>
</body>
</html>