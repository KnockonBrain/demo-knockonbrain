//API_KEY = "cc8b719d1amsh9f15d4aa315ea24p176650jsnf0b3ff728bd6"; // Get yours for free at https://judge0.com/ce or https://judge0.com/extra-ce
//API_KEY = "f44121d93dmshfc59844194f3c18p108c72jsnd3606fe98cf6";
//API_KEY="a5259cec17mshe952feba9845786p116fedjsn1493d206b753";
//API_KEY = "02452f42ddmshac04c52ab0a9cedp1c9aa4jsn425135497922";
API_KEY=  "dc68868170msh3026102c62a3405p16f8f1jsn2fecb9edd7b3";
var language_to_id = {
    "Bash": 46,
    "C": 50,
    "C#": 51,
    "C++": 54,//
    "Java": 62,
    "Python": 71,
    "Ruby": 72
};

function encode(str) {
    return btoa(unescape(encodeURIComponent(str || "")));
}

function decode(bytes) {
    var escaped = escape(atob(bytes || ""));
    try {
        return decodeURIComponent(escaped);
    } catch {
        return unescape(escaped);
    }
}

function errorHandler(jqXHR, textStatus, errorThrown) {
    $("#output").val(`${JSON.stringify(jqXHR, null, 4)}`);
    $("#run").prop("disabled", false);
}

function check(token) {
  //  $("#output").val($("#output").val() + "\n⏬ Checking submission status...");
    $.ajax({
        url: `https://judge0-ce.p.rapidapi.com/submissions/${token}?base64_encoded=true`,
        type: "GET",
        headers: {
            "x-rapidapi-host": "judge0-ce.p.rapidapi.com",
            "x-rapidapi-key": API_KEY
        },
        success: function (data, textStatus, jqXHR) {
            if ([1, 2].includes(data["status"]["id"])) {
                $("#output").val($("#output").val() + "\nℹ️ Status: " + data["status"]["description"]);
                setTimeout(function() { check(token) }, 1000);
            }
            else {
                var output = [decode(data["compile_output"]), decode(data["stdout"])].join("\n").trim();
                $("#output").val(`${data["status"]["id"] != "3" ? "🔴" : "🟢"} ${data["status"]["description"]}\n${output}`);
                $("#run").prop("disabled", false);
            }
        },
        error: errorHandler
    });
}

function run() {
  //  alert("Hello");
    $("#run").prop("disabled", true);
    $("#output").val(" Compiling...");
 //   console.log($("#lang").val());
  //  console.log(typeof ($("#lang").val()));

    let encodedExpectedOutput = encode($("#expected-output").val());
    if (encodedExpectedOutput === "") {
        encodedExpectedOutput = null; // Assume that user does not want to use expected output if it is empty.
    }

    $.ajax({
        url: "https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=true&wait=false",
        type: "POST",
        contentType: "application/json",
        headers: {
            "x-rapidapi-host": "judge0-ce.p.rapidapi.com",
            "x-rapidapi-key": API_KEY
        },
        data: JSON.stringify({
            "language_id": language_to_id[$("#lang").val()],
            "source_code": encode($("#source").val()),
            "stdin": encode($("#input").val()),
            "expected_output": encodedExpectedOutput,
            "redirect_stderr_to_stdout": true
        }),
        success: function(data, textStatus, jqXHR) {
          //  $("#output").val($("#output").val() + "\n🎉 Submission created.");
            setTimeout(function() { check(data["token"]) }, 2000);
        },
        error: errorHandler
    });
}
function run1(){
    console.log("running");
    console.log(var1);
 //   alert($_SESSION['lang']);
  //  console.log( $("#output").val());
 //   $("#output").val(" Creating submission...");

}


$("body").keydown(function (e) {
    if (e.ctrlKey && e.keyCode == 13) {
        run();
    }
});

$("textarea").keydown(function (e) {
    if (e.keyCode == 9) {
        e.preventDefault();
        var start = this.selectionStart;
        var end = this.selectionEnd;

        var append = "    ";
        $(this).val($(this).val().substring(0, start) + append + $(this).val().substring(end));

        this.selectionStart = this.selectionEnd = start + append.length;
    }
});

$("#source").focus();