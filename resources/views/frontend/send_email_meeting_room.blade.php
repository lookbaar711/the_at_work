<?php
    //$name = 'aaaa';
    //$meeting_room = 'bbbb';
    //$owner_name = 'cccc';
	//$url = 'dddd';
	//$start_date = '2019-10-09';
    //$end_date = '2019-10-09';

    $hostname = 'dev.suksa.online';
    //$hostname = '127.0.0.1:8000';
?>

<div class="row">
    <div style="padding-left: -10px;">
        <img src="http://{{ $hostname }}/suksa/frontend/template/images/logo_the_at_work.png" style="width: 110px; height: 110px;">
    </div>

    <div style="padding-bottom: 15px; font-size: 14px;">
        <label>สวัสดี <b>{{ $name }}</b></label><br>
		<label style="font-size: 16px;">ถึงเวลาเข้าประชุม {{ $meeting_room }}</label><br><br>
		<label>ของคุณ <a href="{{ $url }}">Click! เข้าสู่ห้องประชุม</a></label><br>
        

        <label>วันที่นัด {{ changeDate($start_date, 'full_date', 'th') }} ถึง {{ changeDate($end_date, 'full_date', 'th') }}</label><br><br>

        <label>Thanks,</label><br>
        <label>The At Work Team</label> <label><a href="http://{{ $hostname }}">www.{{ $hostname }}</a></label>
    </div>

    <div style="border-top: 1px solid #eee; padding-top: 13px;">
        <label style="font-size: 12px;">Customer Support (Mon-Fri 09:00-18:00) <b style="font-size: 16px;">02 982 9999</b></label><br>
        <label style="font-size: 12px;">Copyright © 2019 Education. All rights reserved.</label>
    </div>   
</div>
