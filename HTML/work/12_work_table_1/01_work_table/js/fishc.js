$(function() {

    var table = $('<table class="ex-2"></table>');
    table.append('<thead><tr><th class="number">Number</th></tr></thead>');
    var tbody = $('<tbody></tbody>');

    for(var i = 0; i<500; i++) {
        tbody.append('<tr><td>' + Math.floor(Math.random() * 100) + '</td></tr>');
    }
    table.append(tbody);
    $('.example.ex-2').append(table);

    $('table').tablesort().data('tablesort');

    $('thead th.number').data('sortBy', function(th, td, sorter) {
        return parseInt(td.text(), 10);
    });

    //Sorting indicator example
    $('table.ex-2').on('tablesort:start', function(event, tablesort) {
        $('table.ex-2 tbody').addClass("disabled");
        $('.ex-2 th.number').removeClass("sorted").text('Sorting..');
    });

    $('table.ex-2').on('tablesort:complete', function(event, tablesort) {
        $('table.ex-2 tbody').removeClass("disabled");
        $('.ex-2 th.number').text('Number');
    });


});