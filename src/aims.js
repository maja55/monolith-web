$.get('aims.json', function(aims) {

    var rows = $.parseJSON(aims);

    // renderRow = (i, node) => {
    //     var rowElements = rows[i].items;
    //     var rowColor = rows[i].color;
    //     $(rowElements).each(function(j, element) {
    //         var html =
    //             '<div class="aims-row" style="background-color:' + rowColor + '">'+
    //                 '<h1 class="aim-el text_bold">' + element.id + '</h1>'+
    //                 '<p class="aim-name text_xs">' + element.name + '</p>'+
    //             '</div>';
    //         $(node).append($(html));
    //     });
    // }

    var renderRow = function(i, node) {
        var rowElements = rows[i].items;
        var rowColor = rows[i].color;
        $(rowElements).each(function(j, element) {
            var html =
                '<div class="aims-row" style="background-color:' + rowColor + '">'+
                    '<h1 class="aim-el text_bold">' + element.id + '</h1>'+
                    '<p class="aim-name text_xs">' + element.name + '</p>'+
                '</div>';
            $(node).append($(html));
        });
    };

    renderRow(0,'aims-column1');
    renderRow(10,'aims-column11');
    // renderRows(1,9,'aims-columns2-10');
});
