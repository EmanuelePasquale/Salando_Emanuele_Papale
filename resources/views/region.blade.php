<x-main>
    <ul class="list-unstyled" id="list">

    </ul>

    <script>
        const list = document.getElementById('list');

        fetch("{{route('api')}}")
        .then(response => response.json())
        .then(data => {
            console.log(data);
            for(let item of data) {
                console.log(item);
                list.innerHTML += `<li>${item.name}</li>`
            }
        })
        .catch(error=>{
            console.log(error);
        })
    </script>
</x-main>
