$('form.ajax').on('submit', function ()
{
    var that = $(this),
        url = that.attr('action'),
        method = that.attr('method'),
        data = {};
    that.find('[name]').each(function (index, value)
    {
        var that = $(this),
            name = that.attr('name');
        value = that.val();
        date[name] = value;

    })
    $.ajax({
        url: url, type: type, data: data,
        succes: function (response)
        {
            console.log(response);
        }
    });
    console.loh(data);
    return false;
}

)