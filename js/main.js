// JAVASCRIPT FOR ADDING A PLACEHOLDER TO THE SEARCH TEXT FIELD AND OTHER ATTRIBS

//alert("paska");

const s = document.getElementById("s");
const ss = document.getElementById("searchsubmit");

s.setAttribute("placeholder", "Haku");
s.setAttribute("autocomplete", "off");
ss.setAttribute("onclick", "clearInput()");

function clearInput() {
s.setAttribute("value",  "");
}

// CLEAR THE SEARCH FIELD EVEN IF ENTER IS PRESSED AND THE ICON IS NOT CLICKED






// OPENABLE AND CLOSABLE MENU ON MOBILE

var status = "off";

console.log(status);

function toggleMenu() {

    const getUl = document.getElementById("menubox");


    if (status == "off") {

        getUl.style.display = "block";
        getUl.style.marginTop = "61px";
        console.log("Nyt alavalikko näkyy");
        status = "on";
        console.log(status);
        console.log("--------------------------");

    } else if (status == "on") {

        getUl.style.display = "none";
        console.log("Nyt alavalikko ei näy");
        status = "off";
        console.log(status);
        console.log("-------------------------");

    } else {

        alert("no painas nyt jotain!");

    }
}


/* INSERT A LINE BREAK AFTER THE COMMENT LABEL */

let commentlabel = document.querySelector("label[for=comment]");

let lnbreak = document.createElement("br");

commentlabel.after(lnbreak);
