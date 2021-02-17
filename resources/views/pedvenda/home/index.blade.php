
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style lang="css">
    
</style>

<div>
    <h1 >Hey {{$name_user}}</h1>
    <div id="source"></div>
    <button class="clickHere btn btn-primary">click</button>
    <button class="btn btn-warning" onclick="openPage()">other page</button>

    <div class="otherPage"></div>
</div>

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script> 
<script>
//sempre chame o cdn do jquery aqui em cima nas suas blades
//aqui usamos javascript com o framework jquery
$('.clickHere').click(function() {
  $('#source').append(`
    <h1>Hey man its ok</h1>
  `)
});

function openPage(){
    $.ajax({
        method: 'POST',
        url:"{{route('home.open_page')}}",
        data:{
            params: 'Page old',
            id: 55,
            "_token": "{{ csrf_token() }}", //sempre passar esse token quando 
                                            //usar ajax
        },
        success: function(response){
            console.log(response)
            $('.otherPage').html(response.view);
            alert('Sucess')
        }
    });
}
</script>

