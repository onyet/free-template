<?php
function draw_calendar($month,$year){
	$calendar = '<table cellpadding="0" cellspacing="0" class="table calendar">';
	$headings = array(
		'<span class="sm-md">A</span><span class="xs-sm">Ahad</span>',
		'<span class="sm-md">S</span><span class="xs-sm">Senin</span>',
		'<span class="sm-md">S</span><span class="xs-sm">Selasa</span>',
		'<span class="sm-md">R</span><span class="xs-sm">Rabu</span>',
		'<span class="sm-md">K</span><span class="xs-sm">Kamis</span>',
		'<span class="sm-md">J</span><span class="xs-sm">Jum\'at</span>',
		'<span class="sm-md">S</span><span class="xs-sm">Sabtu</span>');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();
	$calendar.= '<tr class="calendar-row">';
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np">&nbsp;</td>';
		$days_in_this_week++;
	endfor;
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		if($list_day==(int)date('d') && $month==(int)date('n'))
		{
			$currentday='active';
		}else
		{
			$currentday='';
		}
		if (($list_day%6)==0) {
			$adaevent ='event';
		}else{
			$adaevent ='';
		}
		$calendar.= '<td class="calendar-day '.$currentday.' '.$adaevent.'"><a href="#" data-ajax="false" rel="external">';
			if($list_day<date('d') && $month==date('n'))
			{
				$showtoday='<strong class="overday">'.$list_day.'</strong>';
			}else
			{
				$showtoday=$list_day;
			}
			$calendar.= '<div class="day-number">'.$showtoday.'</div>';
		$calendar.= '</a></td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np">&nbsp;</td>';
		endfor;
	endif;
	$calendar.= '</tr>';
	$calendar.= '</table>';
	$calendar.= '<span style="padding: 1px 9px; background-color: #F35050;"></span>&nbsp;Acara&nbsp;&nbsp;
				<span style="padding: 1px 9px; background-color: #0099FB;"></span>&nbsp;Hari ini';
	return $calendar;
}
?>