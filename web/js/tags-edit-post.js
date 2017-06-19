var tags = getInitialTagData();
initialiseTagBox(tags);

$('.chips').on('chip.add', function(e, chip){
  updateChipInput(this);
})
.on('chip.delete', function(e, chip){
  updateChipInput(this);
});

function updateChipInput(chip){
  var newval= $(chip).material_chip('data')
  .reduce(function(result,val){ result.push(val.tag); return result;},[]).join(",")

  $('input[name="edit_post[tags]"]').val(newval);
}

// Function to intialise the tag box
function initialiseTagBox(tags)
{
  $('.chips').material_chip({
  data: tags,
  });
}

function getInitialTagData()
{
  var tags = [];
  // Get the initial tag data objects
  // Iterate over them pushing them to an array
  $('.existing_tag').each(function(i, obj)
  {
    // alert($(obj).data(tag));
    tags.push({tag: $(obj).data('tag')});
  });
  return tags;

}
