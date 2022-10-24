
var search_btn = document.querySelector("#search");

search_btn.addEventListener("keyup", function(){

    fetch('index_search/' + search_btn.value, {
        method: "GET"
    })
    .then((response=>{
        return response.text()
    })).then((data)=>{
        console.log(data);
        document.getElementById('data_list').innerHTML = data;
    })

})