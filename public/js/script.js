
var search_btn = document.querySelector("#search");
var promotion_data = document.getElementById('promotion_data');

search_btn.addEventListener("keyup", function () {

    fetch('index_search/' + search_btn.value, {
        method: "GET"
    })
        .then((response => {
            return response.text()
        })).then((data) => {
            console.log(data);
            promotion_data.innerHTML = "";
            for (var i = 0; i < data.length; i++) {
                promotion_data.innerHTML += ` 
                <tr>
                    <td>${data[i]["name"]}</td>
                    <td>
                    <a href='"/edit_form/{{ $row->id }}">edit'>Edit</a>
                    <a href='showPromo.php?id_delete=${data[i]["id"]}'> Delete</a>
                    </td>
                </tr>
                ;`
            }
        })

})