const toggle = document.getElementById("theme-toggle"); //link to button
const nowtheme =document.getElementById('theme'); //stores the active theme.


//I want the default theme to change depending on the time of day, the user should still be able to change based on their preferences.

//function that returns true if its night or false if its day
function isNight() {
    const now = new Date();//no aurgument returns the current date and time
    const hour = now.getHours();//returns just the hour
    return hour >= 18 || hour < 6; //if its later than 6pm or before 6am the function will return true and we know that it is night, false means its not night.
}
// the default in the php code is the light them so we do nothing if its day and change the style sheet if its night
//if is night returns true the dark them is set.
if (isNight()) {
    nowtheme.setAttribute("href", "../CSS themes/Dark.css");
    toggle.innerHTML ="Light";
}
//now we need to change it if the button is clicked. 
toggle.addEventListener('click', () => { //arrow function cuts down on syntax
    if (nowtheme.getAttribute('href') === '../CSS themes/Light.css') { // if the text in nowthemw is light than we change to dark and vice versa 
        nowtheme.setAttribute('href', '../CSS themes/Dark.css'); 
        toggle.innerHTML ="Light";
    } else {
        nowtheme.setAttribute('href', '../CSS themes/Light.css');
        toggle.innerHTML ="Dark";
    }
});