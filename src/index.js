$(document).ready(function () {

    function toTitleCase(str) {
        return str.replace(
            /\w\S*/g,
            function (txt) {
                return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
            }
        );
    }


    function getNames(fname, lname) {
        $.ajax({
            type: "GET",
            url: `server.php?first_name=${fname}&last_name=${lname}`,
            dataType: 'json',
            success: function (nameArray) {
                console.log(`${nameArray[0]} ${toTitleCase(nameArray[1])}`);
                $("#name").text(`${nameArray[0]} ${toTitleCase(nameArray[1])}`);
            },
            error: function (xhr, status, error) {
                console.log(xhr, status, error);
            }
        });
    };

    const f = Math.floor(Math.random() * 30000) + 1
    const l = Math.floor(Math.random() * 30000) + 1

    getNames(f, l);

});