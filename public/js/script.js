

var search_btn = document.querySelector("#search");

search_btn.addEventListener("keyup", function(){
    // console.log(search_btn.value)
    // var form = new FormData();
    // form.append('search', search_btn.value);
    // form.append('_token', '{{ csrf_token() }}');
    fetch('search/' + search_btn.value)
    .then((response=>{
        return response.text()
    })).then((data)=>{
        console.log(data)
    })

    
    
    
})