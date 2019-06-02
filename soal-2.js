function beetweenDays(date1, date2) {
  var
  	daysLimit = 30,
    date1Day, date2Day, date1Year, date1Month,
    date2Day, date2Year, date2Month, i = 0, finalOutput = '';

  date1Day = date1.split('-');
  //console.log(date1Day);
  date1Year = Number.parseInt(date1Day[0]);
  date1Month = Number.parseInt(date1Day[1]);
  date1Day = Number.parseInt(date1Day[date1Day.length - 1]);
  date2Day = date2.split('-');
  date2Day = Number.parseInt(date2Day[date2Day.length - 1]);
  date2Year = Number.parseInt(date2Day[0]);
  date2Month = Number.parseInt(date2Day[1]);

  //console.log(date1Day, date2Day);

  for (; i < date2Day - 2; i++) {
    ++date1Day;
    if (date1Day == 30) {
      ++date1Month;
      if (date1Month == 12) {
        ++date1Year;
      }
    }
    finalOutput += date1Year + '-' + date1Month + '-' + date1Day + ', ';
  }

  return date1 + ', ' + finalOutput + date2;

}

console.log(beetweenDays('2019-11-01', '2019-11-10'));
