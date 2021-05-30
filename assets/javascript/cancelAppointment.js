var  btn = document.getElementById('submit')
var  btn2 = document.getElementById('calendar');
var message = document.getElementById('cancel')
var cancelMessage= " ";

btn.addEventListener( 'click', () => {
    cancelMessage += "התור בוטל בהצלחה";
    message.innerHTML = (cancelMessage);
    return true;

})    


btn2.addEventListener( 'click', () => {
    alert("האם אתה בטוח שאתה מעוניין לבטל?");
})

