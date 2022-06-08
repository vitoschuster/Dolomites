/**
 * Ajax.js - java script used to send and receive XMLHttpRequest requests
 * Used to send and receive the data from the server without reloading the page every time
 * @author V. Schuster
 * @version 3004
 */

//create the object to send

const form = {
    comment: document.getElementById('comment'),
    name: document.getElementById('name'),
    email: document.getElementById('email'),
    country: document.getElementById('country'),
    gender: document.getElementsByName('gender'),
    submit: document.getElementById('submit')
};

var len = form.gender.length;
var radioChecked;
var http = getRequest();
var image = new Image(); //image for the user icon 
image.src = 'https://img.icons8.com/fluency-systems-filled/48/000000/user.png';


//validate form
function isValid() {
    let valid = true;
    let arr = [form.comment, form.name, form.email]; //arr of element to validate
    form.country.value = (form.country.value.length == 0) ? '' : form.country.value; //setting value to null if country is empty

    //getting value from radios
    for (let i = 0; i < len; i++) {
        if (form.gender[i].checked) {
            radioChecked = form.gender[i];
        }
    }

    arr.forEach(element => {
        if (element.value.length == 0) {
            element.classList.add('invalid');
            valid = false;
        } else {
            element.classList.remove('invalid');
        }
    })
    return valid;
}

//try to send a request when button is clicked
form.submit.onclick = () => {
    if (!isValid());
    else {
        sendRequest();
    }
};


//create http object
function getRequest() {
    let request;
    if (window.XMLHttpRequest) {
        request = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        request = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        return false;
    }
    return request;
}

function checkComments() {
    console.log('about to send initial request');
    http.open('POST', 'form.php', true);
    http.onreadystatechange = handleRequest;
    http.send();
    console.log('request sent');
}

//send http request 
function sendRequest() {
    if (http) {
        http.open('POST', 'form.php', true);
        http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        http.onreadystatechange = handleRequest;
        var data = `comment=${form.comment.value}&name=${form.name.value}&email=${form.email.value}&country=${form.country.value}&gender=${radioChecked.value}`;
        http.send(data);
        console.log(data);
    }
}


function handleRequest() {
    if (http.readyState == 4 && http.status == 200) {
        if (http.responseText) {
            var obj = JSON.parse(http.responseText);
            console.log(obj);
            displayComments(obj);
        }
    }
}

function displayComments(arr) {
    var container = document.getElementById('comments-container');
    while(container.hasChildNodes()) container.removeChild(container.lastChild);
    arr.forEach(obj => {
        container.appendChild(image.cloneNode(true));
        console.log('image added' + image);
        var header = document.createElement('h3');
        header.innerHTML = obj.name;
        container.appendChild(header);
        var p = document.createElement('p');
        p.innerHTML = obj.comment;
        container.appendChild(p);
    });
}


    //for http object called on readystate change
