$(document).ready(function () {
    $('.btn-edit').on('click', Editar);
});

    function Editar(e){
      //console.log($(e.target).closest('.card-body').attr('data-id'));
      e.preventDefault();      
      //console.log($(e.target).closest('form').attr('action'));
      var route=$(e.target).closest('form').attr('action');
      var data=new FormData($(e.target).closest('form')[0]);
      //console.log(data);
      
        ajaxPetition('GET',route,data);
        $("#wineForm").find('p').eq(0).html(" Editelo homs" );
        $("#wineForm").append("<input type='hidden' name='_method' value='PUT'/>");
        window.location.href='#wineForm';
        $("#wineForm").find('p').eq(1).html(" Pero editelo shido");
    }


function ajaxPetition(method,route,data) {
    $.ajax({
        type: method,
        url: route,
        data: data,
        dataType: "json",
        processData:false,
        contentType:false,
    }).done(res=>{
        //alert('jelou')
        //print "res" if needed to see the data structure
        //console.log(res.wine.name);//the firs level is the data contained in WineTable...
        //console.log(res.wine.specifications.brand);//to acces the specifications must specify the specification level of the array
        $("#wineForm").attr('action',res.route);
        $("#wineForm input[name='name']").val(res.wine.name).addClass('bg-warning');
        $("#wineForm input[name='cost']").val(res.wine.cost).addClass('bg-warning');
        $("#wineForm input[name='reference']").val(res.wine.reference).addClass('bg-warning');
        $("#wineForm input[name='region']").val(res.wine.specifications.region).addClass('bg-warning');
        $("#wineForm input[name='brand']").val(res.wine.specifications.brand).addClass('bg-warning');
        $("#wineForm input[name='alevel']").val(res.wine.specifications.alevel).addClass('bg-warning');
        $("#wineForm select[name='color']").val(res.wine.specifications.color).addClass('bg-warning');
        $("#wineForm select[name='age']").val(res.wine.specifications.age).addClass('bg-warning');
        $("#wineForm select[name='sugar']").val(res.wine.specifications.sugar).addClass('bg-warning');
        
        
    }).fail(res=>{
        console.log(res);
    });
}
