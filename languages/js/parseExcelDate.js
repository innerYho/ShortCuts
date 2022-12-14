//Take the excel date number and convert it to date time format 
const getJsDateFromCSV = serial => {
    // var tempDate = getJsDateFromCSV("42510")
    // console.log(tempDate)
    // return tempDate

    var utc_days = Math.floor(serial - 25569);
    var utc_value = utc_days * 86400;
    var date_info = new Date(utc_value * 1000);

    //version 1 With hour minutes and seconds
    // var fractional_day = serial - Math.floor(serial) + 0.0000001;
    // var total_seconds = Math.floor(86400 * fractional_day);
    // var seconds = total_seconds % 60;
    // total_seconds -= seconds;
    // var hours = Math.floor(total_seconds / (60 * 60));
    // var minutes = Math.floor(total_seconds / 60) % 60;
    // return new Date(date_info.getFullYear(), date_info.getMonth(), date_info.getDate() + 1);

    //version 2: if you only want date format like "dd/mm/yyyy"
    var tempDay = date_info.getDate()
    var tempMonth = date_info.getMonth()
    var tempYear = date_info.getFullYear()
    // return (`${tempDay}/${tempMonth}/${tempYear}`);

    //its posible have problem with the timeZone like me
    // utc -5 : In Colombia I need add 1 day in tempDay
    return (`${tempDay + 1}/${tempMonth}/${tempYear}`);
}



// Other form
    // const getJsDateFromExcel = excelDate => {
    //     // return new Date((excelDate - (25567 + 1)) * 86400 * 1000);
    //     // return new Date(Math.round((excelDate - 25569) * 86400 * 1000));
    //     var utc_days = Math.floor(excelDate - 25569);
    //     var utc_value = utc_days * 86400;
    //     var date_info = new Date(utc_value * 1000);
    //     var tempDay = date_info.getDate()
    //     var tempMonth = date_info.getMonth()
    //     var tempYear = date_info.getFullYear()

    //     console.log(tempDay, tempMonth, tempYear)
    //     // return new Date(date_info.getUTCDate(), date_info.getMonth(), date_info.getUTCFullYear());
    //     return (`${tempDay}/${tempMonth}/${tempYear}`);
    // };