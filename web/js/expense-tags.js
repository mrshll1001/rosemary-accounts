$('#testButton').click(function(e)
{
    alert($('#expense_dateGiven').val());
});

$('.chips').material_chip();

$('.chips').on('chip.add', function(e, chip){
  updateChipInput(this);
})
.on('chip.delete', function(e, chip){
  updateChipInput(this);
});

function updateChipInput(chip){
     var newval= $(chip).material_chip('data')
        .reduce(function(result,val){ result.push(val.tag); return result;},[]).join(",")

     $('input[name="expense[tags]"]').val(newval);
   }
