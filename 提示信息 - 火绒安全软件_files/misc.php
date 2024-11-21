if($('seccode_cSAqN77pE')) {
	if(!$('vseccode_cSAqN77pE')) {
		var sectpl = seccheck_tpl['cSAqN77pE'] != '' ? seccheck_tpl['cSAqN77pE'].replace(/<hash>/g, 'codecSAqN77pE') : '';
		var sectplcode = sectpl != '' ? sectpl.split('<sec>') : Array('<br />',': ','<br />','');
		var string = '<input name="seccodehash" type="hidden" value="cSAqN77pE" /><input name="seccodemodid" type="hidden" value="member::logging" />' + sectplcode[0] + '验证码' + sectplcode[1] + '<input name="seccodeverify" id="seccodeverify_cSAqN77pE" type="text" autocomplete="off" style="ime-mode:disabled;width:100px" class="txt px vm" onblur="checksec(\'code\', \'cSAqN77pE\', 0, null, \'member::logging\')" />' +
			' <a href="javascript:;" onclick="updateseccode(\'cSAqN77pE\');doane(event);" class="xi2">换一个</a>' +
			'<span id="checkseccodeverify_cSAqN77pE"><img src="' + STATICURL + 'image/common/none.gif" width="16" height="16" class="vm" /></span>' +
			sectplcode[2] + '<span id="vseccode_cSAqN77pE">输入下图中的字符<br /><img onclick="updateseccode(\'cSAqN77pE\')" width="120" height="30" src="misc.php?mod=seccode&update=02286&idhash=cSAqN77pE" class="vm" alt="" /></span>' + sectplcode[3];
		evalscript(string);
		$('seccode_cSAqN77pE').innerHTML = string;
	} else {
		var string = '输入下图中的字符<br /><img onclick="updateseccode(\'cSAqN77pE\')" width="120" height="30" src="misc.php?mod=seccode&update=02286&idhash=cSAqN77pE" class="vm" alt="" />';
		evalscript(string);
		$('vseccode_cSAqN77pE').innerHTML = string;
	}
	
}