$(document).ready(function () {
    $("#clearData").on("click", function () {
        if (inputcsvfile == null) {
            $("#checkData").empty();
            alert("Input tag is empty! ");
        } else {
            alert("Input tag is already empty! ");
        }
    });

    $("#checkData").on("click", function () {
        var fileInput = $("#inputcsvfile")[0];
        var file = fileInput.files[0];

        if (file != null) {
            if (file && file.type === "text/csv") {
                Papa.parse(file, {
                    header: true,
                    dynamicTyping: true,
                    complete: function (results) {
                        displayData(results.data);
                        console.log(results.data); 
                    },
                    error: function (error) {
                        $("#fileContents").html(
                            "<p>Error parsing CSV file</p>",
                        );
                        console.log("Error:", error);
                    },
                });
            } else {
                $("#fileContents").html(
                    "<p>Please select a valid CSV file.</p>",
                );
            }
        } else {
            console.log("Please upload csv file!");
            alert("Please upload csv file!");
        }
    });

  
    function displayData(data) {
        var html = '<table border="1">';
        if (data.length > 0) {
            // Create table header
            html += "<tr>";
            for (var header in data[0]) {
                html += "<th>" + header + "</th>";
            }
            html += "</tr>";
            // Create table rows
            data.forEach(function (row) {
                html += "<tr>";
                for (var cell in row) {
                    html += "<td>" + row[cell] + "</td>";
                }
                html += "</tr>";
            });
        } else {
            html += "<tr><td>No data found</td></tr>";
        }
        html += "</table>";
        $("#fileContents").html(html);
    }
});
