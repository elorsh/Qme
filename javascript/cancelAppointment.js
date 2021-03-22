var  btn = document.getElementById('submit')
var message = document.getElementById('cancel')
var cancelMessage= " ";

btn.addEventListener( 'click', () => {
    cancelMessage += "התור בוטל בהצלחה";
    message.innerHTML = (cancelMessage);
})