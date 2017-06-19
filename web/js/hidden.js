hideAllHidden();

$('.hidden-toggle').click(function(e){
  toggleHidden($(this).data('target'));
});

function hideAllHidden()
{
  $('.hidden').hide();
}

function toggleHidden(target)
{
  $(target).toggle();
}
