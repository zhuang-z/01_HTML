function runMove() {
        var i = 0;
        var table = document.getElementsByTagName("table");
        var td = table[5].getElementsByTagName("td");
        (function () {
            if (i >= 6) {
                console.log("NewRun");
                $(td).css("background-color", "red");
                setTimeout(function () {
                    location.reload();
                }, 2000);
                runMove();
                return;
            }
            $(table[i]).css("border", "#F0AD4E solid 10px");

            i++;
            window.setTimeout(arguments.callee, 1000);
        })();

    }

    runMove();