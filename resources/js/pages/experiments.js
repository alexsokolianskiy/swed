let token = $('meta[name=csrf-token]').attr('content')

$('#form').submit(function(event) {
    event.preventDefault()
    var $this = $(this)

    var exp_id = $this.attr('data-exp')
    var user_id = $this.attr('data-user')
    
    data = {
        '_token': token,
        'exp_id': exp_id,
        'user_id': user_id
    }

    $.ajax({
        url: '/experiments/register',
        method: 'POST',
        data: data
    }).done(function() {
        $this.remove()
    })
})