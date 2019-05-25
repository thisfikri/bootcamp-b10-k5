function beetweenDays(date1, date2) {
  var
  	daysLimit = 30,
    date1Day, date2Day, date1Year, date1Month,
    date2Day, date2Year, date2Month, i = 0, finalOutput = '';

  date1Day = date1Day.split('-');
  date1Year = date1Day[0].parseInt();
  date1Month = date1Day[1].parseInt();
  date1Day = date1Day[date1Day.length - 1].parseInt();
  date2Day = date2Day.split('-');
  date2Day = date2Day[date2Day.length - 1].parseInt();
  date2Year = date2Day[0].parseInt();
  date2Month = date2Day[1].parseInt();

  console.log(date1Day, date2Day);

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