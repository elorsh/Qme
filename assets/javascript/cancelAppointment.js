var  btn = document.getElementById('submit')
var message = document.getElementById('cancel')
var cancelMessage= " ";

btn.addEventListener( 'click', () => {
    cancelMessage += "התור בוטל בהצלחה";
    message.innerHTML = (cancelMessage);
    return true;

})    

var  btn2 = document.getElementById('calendar');

btn2.addEventListener( 'click', () => {
    alert("האם אתה בטוח שאתה מעוניין לבטל?");
})

