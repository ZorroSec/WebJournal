function getDateUpload(){
    const today = new Date()
    const date = today.getDate()
    const inputDate = document.getElementById("date").value = date
    const jsonDate = {
        data: date
    }
    console.log(jsonDate)
}
getDateUpload()