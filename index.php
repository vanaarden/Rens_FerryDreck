<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Vul hier de naam van je dier in</title>
</head>

<body>
    <h2>Vul de naam van een dier in</h2>
    <input type="text" name="text" alt="text" id="text">
    <div id="element"></div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {

                    const text = document.getElementById('text');
                    const element = document.getElementById('element');
                    text.addEventListener("keyup", () => {
                            const xhttp = new XMLHttpRequest();
                            xhttp.addEventListener('load', function() {
                                    if (this.readyState === 4 && this.status === 200) {
                                        element.innerHTML = this.responseText;

                                    }
                                }; xhttp.open("GET", "ajaxtest.php?dier=" + text.value, true); xhttp.send();
                            });
                    });

    </script>
</body>

</html>
